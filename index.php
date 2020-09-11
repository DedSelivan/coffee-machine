<!doctype html>
<html lang="ru">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
      <link rel="stylesheet" href="style.css">
      <title>Hello, world!</title>
   </head>
   <body>
      <div class="container">
         <div class = "row">
            <div class="col-6 coffee-list d-flex flex-column justify-content-around">
               <div class="coffee-item" onclick = "makeCoffee('Американо', 50, this)">
                  <img src="img/americano.png" alt="Американо">
                  <span>Американо - 50руб.</span>
               </div>
               <div class="coffee-item" onclick = "makeCoffee('Капучино', 73, this)">
                  <img src="img/cappuccino.png" alt="Капуччино">
                  <span>Капучино - 73руб.</span>
               </div>
               <div class="coffee-item" onclick = "makeCoffee('Эспрессо', 61, this)">
                  <img src="img/espresso.png" alt="Эспрессо">
                  <span>Эспрессо - 61руб.</span>
               </div>
               <div class="coffee-item" onclick = "makeCoffee('Латте', 112, this)">
                  <img src="img/latte.jpg" alt="Латте">
                  <span>Латте - 112руб.</span>
               </div>
            </div>
            <div class="col-6 coffee-oper">
               <div class="row">
                  <div class="col-6">
                     <div class="display">
                        <p class="display-text">Выберите кофе</p>
                        <div class="progress">
                           <div class="progress-bar progress-bar-striped bg-success progress-bar-animated" style="width: 0%; transition: none"></div>
                        </div>
                     </div>
                     <div class="cup-container">
                        <img src="img/americano.png" alt="" class="cup">
                     </div>
                  </div>
                  <div class="col-6">
                     <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Баланс">
                        <div class="input-group-append">
                           <span class="input-group-text">&#8381</span>
                        </div>
                     </div>
                     <div class="atm-container">
                       <img src="img/bill_acc.png" alt class="atm">
                     </div>
                     <button class="btn btn-success btn-block my-2">Сдача</button>
                     <div class="change-container">
                       
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      </div>
      <!-- Optional JavaScript -->
      <!--<script src = "lesson.js"></script>-->
      <script src = "script.js"></script>
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
   </body>
</html>