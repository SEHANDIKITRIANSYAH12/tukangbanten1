<?php

use Illuminate\Support\Facades\Route;

// Route untuk halaman utama
Route::get('/', function () {
    return view('index');
});

// Route untuk halaman About
Route::get('/about', function () {
    return view('about');
});

// Route untuk halaman Blog
Route::get('/blog', function () {
    return view('blog');
});

// Route untuk halaman Blog Details
Route::get('/blog-details', function () {
    return view('blog-details');
});

// Route untuk halaman Contact
Route::get('/contact', function () {
    return view('contact');
});

// Route untuk halaman Project Details
Route::get('/project-details', function () {
    return view('project-details');
});

// Route untuk halaman Projects
Route::get('/projects', function () {
    return view('projects');
});

// Route untuk halaman Service Details
Route::get('/service-details', function () {
    return view('service-details');
});

// Route untuk halaman Services
Route::get('/services', function () {
    return view('services');
});

// Route untuk halaman Starter Page
Route::get('/starter-page', function () {
    return view('starter-page');
});
