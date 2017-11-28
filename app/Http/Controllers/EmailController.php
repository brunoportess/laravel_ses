<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\OrderShipped;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;

class EmailController extends Controller
{
    public function sendmail()
    {
        //Mail::to($request->user())->send(new OrderShipped());
        Mail::to("destinatario@destinatario.com")->send(new OrderShipped());
    }
}
