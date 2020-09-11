"use strict";

let progressBar =  document.querySelector(".progress-bar");
let bigCup = document.querySelector(".cup");
let state = "idle";
/*
  Переменная state отвечает за текущее состсояние кофе-машины.
  Возможные значения:
    "idle" - ожидание
   "cooking" - готовка
   "ready" - кофе готов, но пока не забран.
  После забора коефе state возвращается в значение 'idle'
*/

function makeCoffee(name, price, element) {
  if(state != "idle") return;

  let balance = document.querySelector(".form-control");
  if(+balance.value >= price) {
    balance.value -= price;
    balance.style.backgroundColor = "";
    changeDisplayText(`Ваш ${name} готовится`);
    state = "cooking";
    
    let coffeeCup = element.querySelector("img");
    let cupSrc = coffeeCup.getAttribute("src");
    console.log(cupSrc);
    bigCup.setAttribute("src", cupSrc);
    bigCup.style.display = "inline";
    
    let readyPercent = 0;
    let cookingInterval = setInterval(function() {
      readyPercent++;  
      /*console.log(readyPercent);*/
      bigCup.style.opacity = readyPercent + '%';
      progressBar.style.width = readyPercent + "%";
      changeDisplayText(`Ваш ${name} готовится... ${readyPercent}%`);
      if( readyPercent >= 100) {
        clearInterval(cookingInterval);
        changeDisplayText(`Ваш ${name} готов!`);
        state = "ready";
        bigCup.style.cursor = "pointer";
        bigCup.onclick = function() {
          takeCoffee();
        }
      }
    }, 30);
    
  } else {
    balance.style.backgroundColor = "red";
    changeDisplayText("Недостаточно средств");
  }
}

function takeCoffee() {
  bigCup.style.display = "none";
  bigCup.style.opacity = 0;
  bigCup.style.cursor = "";
  
  progressBar.style.width = 0;
  
  changeDisplayText("Выберите кофе");
  bigCup.onclick = null;
  state = "idle";
}
function changeDisplayText(message) {
  let displayText = document.querySelector(".display-text");
  displayText.innerHTML = message;
  }
  
