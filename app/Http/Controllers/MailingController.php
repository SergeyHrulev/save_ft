<?php

namespace App\Http\Controllers;

use App\Mailing;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Hash;
use Illuminate\Notifications\Messages\MailMessage;
use App\Notifications\SubscribeNotification;

class MailingController extends Controller
{

    use Notifiable;

    public function subscribe(Request $request){
        $subscriber = Mailing::firstOrCreate(['email' => $request->email]);
        $secure = URL::signedRoute('unsubscribe', ['id' => $subscriber->id]);
        $subscriber->validate = $secure;
        $subscriber->save();
        \Notification::route('mail', $subscriber->email)->notify(new SubscribeNotification($secure));
        return redirect()->route('index')->with('successful_sign', 'Вы успешно оформили подписку на нашу рассылку');
    }
}
