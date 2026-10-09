<?php

use App\Models\ContactFormMessage;
use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use RyanChandler\LaravelCloudflareTurnstile\Rules\Turnstile;
use Spatie\Honeypot\ProtectAgainstSpam;

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
    $rules = [
        'fullname' => 'required|string',
        'email' => 'required|email:rfc,dns',
        'message' => 'required|string|max:2000',
    ];
    if (config('services.turnstile.enable')) {
        $rules['cf-turnstile-response'] = ['required', new Turnstile];
    }
    $request->validate($rules);
    ContactFormMessage::createAndSend($request);
    $page = Page::where('name', 'mail-sent')->first();
    if ($page) {
        return redirect()->route('page', [$page->name]);
    } else {
        return 'Message envoyé, merci ! Vous pouvez fermer cette page.';
    }
})
    ->middleware('throttle:2,1')
    ->middleware(ProtectAgainstSpam::class)
    ->name('submit-contact-form');
