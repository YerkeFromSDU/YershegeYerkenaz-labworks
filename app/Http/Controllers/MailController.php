<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\DemoEmail;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function send()
    {
     $objDemo = new \stdClass();
     $objDemo->demo_one = 'Demo One Value';
     $objDemo->demo_two = 'Demo Two Value';
     $objDemo->sender = 'Ershege.Erkenaz';
     $objDemo->receiver = '190103406@stu.sdu.edu.kz';

     Mail::to("Ershege.Erkenaz@gmail.com")->send(new DemoEmail($objDemo));
    } 
}
