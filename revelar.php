<?php

function BuyConfirmation($name, $card, $password){
    
    echo "$name, sua compra foi realizada com sucesso. <br> Cartao creditado: $card <br> Sua senha atual: $password <br>";
    return;
}

BuyConfirmation($_POST['name'], $_POST['card'], $_POST['password']);

?>