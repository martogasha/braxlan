<?php

namespace App\Http\Controllers;

use AfricasTalking\SDK\AfricasTalking;
use Illuminate\Http\Request;
use Pnlinh\InfobipSms\Facades\InfobipSms;

class SmsController extends Controller
{
public function sendSms(){
    $username = 'sandbox'; // use 'sandbox' for development in the test environment
    $apiKey   = '44a616cdbb47adafaa4e62f34003aca52733a2a61403200e174b7e73913bc4af'; // use your sandbox app API key for development in the test environment
    $AT       = new AfricasTalking($username, $apiKey);

// Get one of the services
    $sms      = $AT->sms();

// Use the service
    $result   = $sms->send([
        'to'      => '0754238704',
        'message' => 'Hello World!'
    ]);

    print_r($result);
}
}
