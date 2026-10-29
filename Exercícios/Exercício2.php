<?php

class Notificacao {
    public function enviar(){
        echo 'NOVA MENSAGEM!';
    }
}

class NotificacaoEmail extends Notificacao {
    public function enviar(){
        echo 'Notificação do e-mail: Sua inscrição foi realizada com sucesso!';
    }
}

class NotificacaoSMS extends Notificacao {
    public function enviar(){
        echo 'Notificação do e-mail: Sua inscrição foi realizada com sucesso!';
    }
}

class NotificacaoPush extends Notificacao {
    public function enviar(){
        echo 'Notificação do e-mail: Sua inscrição foi realizada com sucesso!';
    }
}

$notificacao = new Notificacao();
$notificacao->enviar();
echo '<br><br>';

$notificacaoEmail = new NotificacaoEmail;
$notificacaoEmail->enviar();
echo '<br><br>';

$notificacaoSMS = new NotificacaoSMS;
$notificacaoSMS->enviar();
echo '<br><br>';

$notificacaoPush = new NotificacaoPush;
$notificacaoPush->enviar();

?>