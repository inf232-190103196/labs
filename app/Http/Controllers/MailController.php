<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\DemoMail;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function send(){
        $objDemo = new \stdClass();
        $objDemo -> sender = 'Sultan Abdualiyev';
        $objDemo -> receiver = 'Sultan Abdualiyev';

        Mail::to("abdualievsultan47@gmail.com")->send(new DemoMail($objDemo)); 
    }
}
