<?php include './snack-b1.php' ?>

<!DOCTYPE html>
<html lang="it">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <link rel="stylesheet" href="./css/style.css">
   <title>PHP Snacks B1</title>
</head>

<body>
<header>
   <h1>PHP Snacks B1</h1>
</header>

<main>
   <div class="container">
      <!-- snack 1 -->
      <div>
         <h2>Snack 1</h2>
         <div class="desc">Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema: Olimpia Milano - Cantù | 55-60</div>
         <ul>
            <?= $partite ?>
         </ul>
      </div>
      <!-- / -->

      <!-- snack 2 -->
      <div>
         <h2>Snack 2</h2>
         <div class="desc">Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”.</div>
         <form action="" method="GET" name="access">
            <input type="text" name="name" placeholder="Nome">
            <input type="text" name="email" placeholder="Email">
            <input type="text" name="age" placeholder="Età">
            <button>invia</button>
            <?= $strAccess ?>
         </form>
      </div>
      <!-- / -->

      <!-- snack 4 -->
      <div>
         <h2>Snack 4</h2>
         <div class="desc">Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta.</div>
         <ul><?= $numList ?></ul>
      </div>
      <!-- / -->

      <!-- snack 5 -->
      <div>
         <h2>Snack 5</h2>
         <div class="desc">Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo.</div>
         <?= $newP ?>
      </div>
      <!-- / -->
   </div>
</main>



</body>
</html>