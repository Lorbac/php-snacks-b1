<!-- ## Snack 2
Passare come parametri GET name, mail e age e verificare
(cercando i metodi che non conosciamo nella documentazione) che name
sia più lungo di 3 caratteri,
che mail contenga un punto e una chiocciola e che age sia un numero.
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

<?php 

    $getName = $_GET["name"];
    $getMail = $_GET["mail"];
    $getAge = $_GET["age"];

    if (strlen($getName) > 3) {
        echo "Il nome inserito è corretto" . "<br/>";
    }
    else {
        echo "Inserisci un nome con più di 3 carratteri" . "<br/>";
    }

    if(strpos($getMail, "@") && strpos($getMail, ".")) {
        echo "La mail è corretta" . "<br/>";
    }
    else {
        echo "Inserisci una mail valida" . "<br/>";
    }

    if(!is_nan($getAge)) {
        echo "Età inserita correttamente" . "<br/>";
    }
    else {
        echo "Inserisci un numero come età" . "<br/>";
    }

?>