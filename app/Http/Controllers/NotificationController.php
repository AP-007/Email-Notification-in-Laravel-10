<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Notifications\PackageNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

class NotificationController extends Controller
{
    public function packageNotification(){
        $user = User::first();

        $packageData=[
            'name' => 'Greatest Package',
            'body' => 'You received an Package of 10 crore. Advut.',
            'thanks' => 'Thank you',
            'offerText' => 'Check out the offer',
            'offerUrl' => url('/'),
            'package_id' => 007
        ];

        Notification::send($user,new PackageNotification($packageData));
       dd("Notification has been send. Check your email.");
    }
}
