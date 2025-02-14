<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Mail\SendEmail;
use App\Models\User;
use Illuminate\Support\Facades\Mail;

class SendMailController extends Controller
{
    public static function sendmail($data)
    {
        $users = User::where('receive_email', 1)
            ->get();

        foreach ($users as $u) {
            // Mail::to($u->email)->send(new SendEmail($data, $u));
        }
    }
}
