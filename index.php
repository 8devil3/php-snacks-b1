<?php include './snack-b1.php' ?>

<!DOCTYPE html>
<html lang="it">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>PHP Snacks B1</title>
</head>

<body>
<h1>PHP Snacks B1</h1>

<!-- snack 1 -->
<h2>Snack 1</h2>
<ul>
   <?= $partite ?>
</ul>
<!-- / -->

<!-- snack 2 -->
<h2>Snack 2</h2>
<form action="" method="GET" name="access">
   <input type="text" name="name" placeholder="Nome">
   <input type="text" name="email" placeholder="Email">
   <input type="text" name="age" placeholder="Età">
   <button>invia</button>
   <?= $strAccess ?>
</form>
<!-- / -->

<!-- snack 4 -->
<h2>Sanck 4</h2>
<ul><?= $numList ?></ul>
<!-- / -->

<!-- snack 5 -->
<h2>Snack 5</h2>
<?= $newP ?>
<!-- / -->

</body>
</html>