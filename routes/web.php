<?php

use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
   // return view('welcome');
//});

// import home controller path
// in laravel we dont use import the word use(in samall case)
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;


Route::get('/', [HomeController::class, 'index']) ->name('index');
//nickname to mean the url-> name('index')
// Route ::get waits or what the user is typing in the browser

//Route::get('/contact'),[HomeController:;class, ('contact')]-this whole code defines the address of the web page or session
//route is laravels inbuilt tool box that comes along with different functions get,post ,delete,
//like buttons on a vending machine that do different thingd in this case get says  please show this on the screen

//->name('index');-this is the nickname given to the long address since its hectic to keep rewriting the long address this nick name is what we shall
//use which means the same thing but its not a variable to store changing data 
//[HomeController::class, 'contact']- means go the homecontroller file and run the function for this page

Route::get('/contact', [ContactController::class, 'contact']) ->name('contact');
//need to update contact form with the route nickname for the form action
//rouTES
Route::post('/store', [ContactController::class, 'store']) ->name('contact.store');

//creating the route for the contact-list page

Route::get('/contact-list', [ContactController::class, 'contactList']) ->name('contact-list');