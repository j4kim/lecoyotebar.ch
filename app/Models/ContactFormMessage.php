<?php

namespace App\Models;

use App\Mail\ContactFormSubmission;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactFormMessage extends Model
{
    public static function createAndSend(Request $request): self
    {
        $sendTo = $request->has('send_to') ? decrypt($request->send_to) : config('mail.from.address');
        $contactFormMessage = self::create([
            'fullname' => $request->fullname,
            'email' => $request->email,
            'message' => $request->message,
            'sent_to' => $sendTo,
        ]);
        $mail = new ContactFormSubmission($contactFormMessage);
        defer(fn() => Mail::to($sendTo)->send($mail));
        return $contactFormMessage;
    }
}
