<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sac site</title>
</head>
<body>
<p style="font-family: Arial, Helvetica, sans-serif; font-size:14px; color:#222222;padding:20px;">
    Email enviado através do site da AH! Natu. <br><br>
    <strong>Nome:</strong> {{ $body->name }} <br>
    <strong>E-mail:</strong> {{ $body->email }} <br>
    <strong>Telefone:</strong> {{ $body->phone }} <br>
    <strong>Assunto:</strong> {{ $body->type }} <br>
    <strong>Mensagem:</strong> <br>{!! nl2br($body->message) !!} <br>
    <strong>Enviado em: </strong> {{$body->created_at->format('d/m/Y H:i:s')}}
</p>
</body>
</html>
