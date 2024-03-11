<?php

// Verificare completare campuri
if (empty($_POST['nume']) || empty($_POST['telefon']) || empty($_POST['produs'])) {
  header('Location: formular.html');
  exit;
}

// Preluare date
$nume = $_POST['nume'];
$telefon = $_POST['telefon'];
$produs = $_POST['produs'];

// Preluare detalii specifice produsului
if ($produs === 'pizza') {
  $tip_pizza = $_POST['tip_pizza'];
  $sos_pizza = $_POST['sos_pizza'];
  $adaosuri = $_POST['adaosuri'];
}

// Afisare informatii
echo "<h1>Comanda de $produs</h1>";
echo "<p>Nume: $nume</p>";
echo "<p>Telefon: $telefon</p>";

if ($produs === 'pizza') {
  echo "<h3>Detalii pizza:</h3>";
  echo "<p>Tip pizza: $tip_pizza</p>";
  echo "<p>Sos pizza: $sos_pizza</p>";
