"use strict";


/*добавили в дивы html onclick,   */

function makeCoffee(name, price) {  
  let balance = document.querySelector(".form-control");  // подключили баланс
  if (+balance.value >= price) {
    balance.value -= price;
    balance.style.backgroundColor = "";
    changeDisplayText(`Ваш ${name} готовится`);
  } else {
    balance.style.backgroundColor = "red";  // если не хватает Р , красим баланс в красный
    changeDisplayText("Недостаточно средств");
  }
}



function changeDisplayText(message) {
  let displayText = document.querySelector(".display-text");
  displayText.innerHTML = message;
}