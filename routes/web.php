<?php

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Response;

Route::get('/', function () {
    $path = public_path('index.html');
    if (File::exists($path)) {
        return Response::make(File::get($path), 200, ['Content-Type' => 'text/html; charset=UTF-8']);
    }
    return view('welcome');
});

Route::get('/rootera-experience', function () {
    $path = public_path('rootera-experience.html');
    if (File::exists($path)) {
        return Response::make(File::get($path), 200, ['Content-Type' => 'text/html; charset=UTF-8']);
    }
    return redirect('/');
});

Route::get('/rootera-experience.html', function () {
    $path = public_path('rootera-experience.html');
    if (File::exists($path)) {
        return Response::make(File::get($path), 200, ['Content-Type' => 'text/html; charset=UTF-8']);
    }
    return redirect('/');
});

Route::get('/robots.txt', function () {
    $path = public_path('robots.txt');
    if (File::exists($path)) {
        return Response::make(File::get($path), 200, ['Content-Type' => 'text/plain; charset=UTF-8']);
    }
    return Response::make("User-agent: *\nAllow: /\nSitemap: " . url('/sitemap.xml'), 200, ['Content-Type' => 'text/plain; charset=UTF-8']);
});

Route::get('/sitemap.xml', function () {
    $path = public_path('sitemap.xml');
    if (File::exists($path)) {
        return Response::make(File::get($path), 200, ['Content-Type' => 'application/xml; charset=UTF-8']);
    }
    return redirect('/');
});

