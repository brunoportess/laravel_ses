# laravel_ses
Send mail in Laravel using Amazon AWS SES


.env <br/>
altere os campos MAIL_HOST, MAIL_USERNAME, MAIL_PASSWORD

<br/>config/services.php<br/>
altere o seguinte array com seus dados de credenciais<br/>

'ses' => [
        'key' => env('SMTP USERNAME'),
        'secret' => env('SMTP PASSWORD'),
        'region' => 'us-east-1',
    ],
    
<br/>config/mail.php<br/>
altere o array abaixo com dados do email global que irá fazer os envios<br/>

  'from' => [
        'address' => env('MAIL_FROM_ADDRESS', 'hello@example.com'),
        'name' => env('MAIL_FROM_NAME', 'Example'),
    ],
    
    
<br/> App\Http\Controllers\EmailController.php <br/>
Responsavel por realizar o envio
