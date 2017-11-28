# laravel_ses
Send mail in Laravel using Amazon AWS SES


.env
altere os campos MAIL_HOST, MAIL_USERNAME, MAIL_PASSWORD

config/services.php
altere o seguinte array com seus dados de credenciais

'ses' => [
        'key' => env('SMTP USERNAME'),
        'secret' => env('SMTP PASSWORD'),
        'region' => 'us-east-1',
    ],
    
config/mail.php
altere o array abaixo com dados do email global que irá fazer os envios

  'from' => [
        'address' => env('MAIL_FROM_ADDRESS', 'hello@example.com'),
        'name' => env('MAIL_FROM_NAME', 'Example'),
    ],
    
    
App\Http\Controllers\EmailController.php
Responsavel por realizar o envio
