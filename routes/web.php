<?php

use App\Mail\ContactFormSubmission;
use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

use function Illuminate\Support\defer;

Route::get('/', function () {
    $homePage = Page::where('name', 'home')->firstOrFail();
    return view('page', ['page' => $homePage]);
})->name('home');

Route::get('/page/{name}', function (string $name) {
    $page = Page::where('name', $name)->firstOrFail();
    return view('page', ['page' => $page]);
})->name('page');

Route::get('/login', function () {
    return redirect()->route('filament.admin.auth.login');
})->name('login');

Route::post('/submit-contact-form/{contactFormName}', function (Request $request, string $contactFormName) {
    $request->validate([
        'fullname' => 'required|string',
        'email' => 'required|email:rfc,dns',
        'message' => 'required|string|max:2000',
    ]);
    $sendTo = $request->has('send_to') ? decrypt($request->send_to) : config('mail.from.address');
    $mail = new ContactFormSubmission($request->fullname, $request->email, $request->message);
    defer(fn() => Mail::to($sendTo)->send($mail));
    return $mail;
})
    ->middleware('throttle:2,1')
    ->name('submit-contact-form');
