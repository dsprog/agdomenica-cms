<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato site</title>
</head>
<body>
<p style="font-family: Arial, Helvetica, sans-serif; font-size:14px; color:#222222;padding:20px;">
    Email enviado através do site <br><br>
    <strong>Nome:</strong> {{ $body['name'] }} <br>
    <strong>E-mail:</strong> {{ $body['email'] }} <br>
    <strong>Telefone:</strong> {{ $body['phone'] }} <br>
    <strong>Assunto:</strong> {{ $body['subject'] }} <br>
    <strong>Mensagem:</strong> {!! nl2br($body['body']) !!} <br>
    <strong>Enviado em: </strong> {{ now()->format('d/m/Y H:i:s') }}
</p>
</body>
</html>
