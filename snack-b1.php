<?php
/*
- SNACK 1 -
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60
*/
  
$arrPartite = [
   [
      'casa' => [
         'nome' => 'Olimpia Milano',
         'punteggio' => '55'
      ],
      'ospite' => [
         'nome' => 'Cantù',
         'punteggio' => '60'
      ]
   ],
   [
      'casa' => [
         'nome' => 'Virtus Bologna',
         'punteggio' => '24'
      ],
      'ospite' => [
         'nome' => 'Vicenza Basket',
         'punteggio' => '36'
      ]
   ],
   [
      'casa' => [
         'nome' => 'Roma Basket',
         'punteggio' => '48'
      ],
      'ospite' => [
         'nome' => 'Lazio Basket',
         'punteggio' => '48'
      ]
   ]
];

$partite = '';
   
for ($_i=0; $_i < count($arrPartite); $_i++) {
   $sqCasa = $arrPartite[$_i]['casa']['nome'];
   $sqOspite = $arrPartite[$_i]['ospite']['nome'];
   $punteggioCasa = $arrPartite[$_i]['casa']['punteggio'];
   $punteggioOspite = $arrPartite[$_i]['ospite']['punteggio'];

   $partite .= "<li>$sqCasa - $sqOspite | $punteggioCasa-$punteggioOspite</li>";
}



/*
- SNACK 2 -
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”
*/

if (isset($_GET['name']) && isset($_GET['email']) && isset($_GET['age'])) {
   $name = $_GET['name'];
   $email = $_GET['email'];
   $age = $_GET['age'];
   $strAccess = '';

   if (
         is_string($name) && 
         strlen($name) > 3 && 
         strpos($email, '@') && 
         strpos($email, '.') && 
         is_numeric($age)
      ) {
      $strAccess = "<p>Accesso riuscito</p>";
   } else {
      $strAccess = "<p>Accesso negato</p>";
   }
}



/*
- SNACK 4 -
Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta.
*/

$arrNum = [];
$numList = '';
$rNum = null;

for ($x=0; $x < 15; $x++) {
   
   $rNum = rand(1, 20);

   while (in_array($rNum, $arrNum)) {
      $rNum = rand(1, 20);
   };

   $arrNum[] = $rNum;

   $numList .= "<li>$arrNum[$x]</li>";
}

?>