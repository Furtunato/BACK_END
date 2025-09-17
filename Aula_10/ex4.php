<?php
// Exercício 4 – Notificações
class Email {
    public function enviar() {
        return "Enviando email...";
    }
}

class Sms {
    public function enviar() {
        return "Enviando SMS...";
    }
}

function notificar($meio) {
    echo $meio->enviar();
}

$email = new Email();
$sms = new Sms();

notificar($email); 
echo "\n";
notificar($sms);  

?>
