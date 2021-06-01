<!-- ## Snack 2
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->


<?php
$name = $_GET['name'];
$email = $_GET['email'];
$age = $_GET['age'];

if(strlen($name) > 3 && strpos($email, '.') !== false && strpos($email, '@') !== false && is_numeric($age)){
    echo "Accesso riuscito";
} else {
    echo "Acesso negato";
};

?>

<!-- Controllo email da aggiungere come querystring : (?name=giuseppe&email=giuseppe@hotmail.com&age=24) -->

/*

/