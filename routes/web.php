<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EnquiryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\MaterialController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/',[LoginController::class,'showLoginForm'])->name('login');
Route::get('login',[LoginController::class,'showLoginForm'])->name('login');
Route::post('login',[LoginController::class,'login'])->name('login');
Route::get('logout',[LoginController::class,'logout'])->name('logout');

Route::group(['middleware' => 'auth'], function () {

    Route::get('dashboard',[HomeController::class,'index'])->name('dashboard');

    //enquiry
    Route::get('enquiries',[EnquiryController::class,'index'])->name('enquiries.list');
    Route::get('create-enquiry',[EnquiryController::class,'addEnquiry'])->name('enquiries.add');
    Route::post('create-enquiry',[EnquiryController::class,'addEnquirySubmit'])->name('enquiries.add');
    Route::get('edit-enquiry/{id}',[EnquiryController::class,'editEnquiry'])->name('enquiries.edit');
    Route::post('edit-enquiry/{id}',[EnquiryController::class,'editEnquirySubmit'])->name('enquiries.edit');
    Route::get('delete-enquiry/{id}',[EnquiryController::class,'enquiryDelete'])->name('enquiries.delete');
    Route::get('view-enquiry/{id}',[EnquiryController::class,'enquiryDetails'])->name('enquiries.view');
    Route::get('company-enquiry/{id}',[EnquiryController::class,'companyWiseEnquiry'])->name('enquiries.company');

    //contact
    Route::get('contacts',[ContactController::class,'index'])->name('contact.list');
    Route::get('create-contact',[ContactController::class,'addContact'])->name('contact.add');
    Route::post('create-contact',[ContactController::class,'addContactSubmit'])->name('contact.add');
    Route::get('delete-contact/{id}',[ContactController::class,'contactDelete'])->name('contact.delete');
    Route::get('company-contact/{id}',[ContactController::class,'companyWiseContact'])->name('contact.company');
    Route::get('category-contact/{id}',[ContactController::class,'categoryWiseContact'])->name('contact.category');
    Route::get('edit-contact/{id}',[ContactController::class,'editContact'])->name('contact.edit');
    Route::post('edit-contact/{id}',[ContactController::class,'editContactSubmit'])->name('contact.edit');

    //material
    Route::get('materials',[MaterialController::class,'index'])->name('material.list');
    Route::get('create-material',[MaterialController::class,'addMaterial'])->name('material.add');
    Route::post('create-material',[MaterialController::class,'addMaterialSubmit'])->name('material.add');
    Route::get('delete-material/{id}',[MaterialController::class,'materialDelete'])->name('material.delete');
    Route::get('company-material/{id}',[MaterialController::class,'companyWiseMaterial'])->name('material.company');
    Route::get('category-material/{id}',[MaterialController::class,'categoryWiseMaterial'])->name('material.category');
    Route::get('edit-material/{id}',[MaterialController::class,'editMaterial'])->name('material.edit');
    Route::post('edit-material/{id}',[MaterialController::class,'editMaterialSubmit'])->name('material.edit');



});
