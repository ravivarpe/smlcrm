<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EnquiryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\MaterialController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CalendarController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\SettingController;

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
    Route::get('enquiry-contact/{id}',[EnquiryController::class,'enquiryToContact'])->name('enquiries.addcontact');
    Route::post('add-enquiry-note',[EnquiryController::class,'addEnquiryNote'])->name('enquiries.addNote');
    Route::get('delete-enquiry-note/{id}',[EnquiryController::class,'deleteNote'])->name('enquiries.deleNote');


    //contact
    Route::get('contacts',[ContactController::class,'index'])->name('contact.list');
    Route::get('create-contact',[ContactController::class,'addContact'])->name('contact.add');
    Route::post('create-contact',[ContactController::class,'addContactSubmit'])->name('contact.add');
    Route::get('delete-contact/{id}',[ContactController::class,'contactDelete'])->name('contact.delete');
    Route::get('company-contact/{id}',[ContactController::class,'companyWiseContact'])->name('contact.company');
    Route::get('category-contact/{id}',[ContactController::class,'categoryWiseContact'])->name('contact.category');
    Route::get('edit-contact/{id}',[ContactController::class,'editContact'])->name('contact.edit');
    Route::post('edit-contact/{id}',[ContactController::class,'editContactSubmit'])->name('contact.edit');
    Route::get('get-address/{postcode}',[ContactController::class,'getAddressData'])->name('address.pincode');
    Route::get('view-contact/{id}',[ContactController::class,'viewContact'])->name('contact.view');
    Route::post('create-contact-note',[ContactController::class,'addContactNote'])->name('contact.addNote');
    Route::get('delete-contact-note/{id}',[ContactController::class,'deleteNote'])->name('contact.delNote');



    //material
    Route::get('materials',[MaterialController::class,'index'])->name('material.list');
    Route::get('create-material',[MaterialController::class,'addMaterial'])->name('material.add');
    Route::post('create-material',[MaterialController::class,'addMaterialSubmit'])->name('material.add');
    Route::get('delete-material/{id}',[MaterialController::class,'materialDelete'])->name('material.delete');
    Route::get('company-material/{id}',[MaterialController::class,'companyWiseMaterial'])->name('material.company');
    Route::get('category-material/{id}',[MaterialController::class,'categoryWiseMaterial'])->name('material.category');
    Route::get('edit-material/{id}',[MaterialController::class,'editMaterial'])->name('material.edit');
    Route::post('edit-material/{id}',[MaterialController::class,'editMaterialSubmit'])->name('material.edit');
    Route::get('get-sub-cat/{catId}',[MaterialController::class,'getMaterialSubCategory'])->name('material.subCat');


    //invoice
    Route::get('invoice',[InvoiceController::class,'index'])->name('invoice.list');
    Route::get('create-invoice',[InvoiceController::class,'addInvoice'])->name('invoice.add');
    Route::post('create-invoice',[InvoiceController::class,'addInvoiceSubmit'])->name('invoice.add');
    Route::get('edit-invoice/{id}',[InvoiceController::class,'editInvoice'])->name('invoice.edit');
    Route::post('edit-invoice/{id}',[InvoiceController::class,'editInvoiceSubmit'])->name('invoice.edit');
    Route::get('delete-invoice/{id}',[InvoiceController::class,'deleteInvoice'])->name('invoice.delete');
    Route::get('search-contact',[InvoiceController::class,'getContact'])->name('invoice.contact');
    Route::get('search-material',[InvoiceController::class,'getMaterial'])->name('invoice.material');




   //Tasks
   Route::get('tasks',[TaskController::class,'index'])->name('task.list');
   Route::post('create-task',[TaskController::class,'addTaskSubmit'])->name('task.add');
   Route::get('edit-task/{id}',[TaskController::class,'editTask'])->name('task.edit');
   Route::post('edit-task/{id}',[TaskController::class,'editTaskSubmit'])->name('task.edit');
   Route::post('delete-task',[TaskController::class,'deleteTask'])->name('task.delete');
   Route::get('job-catwise-task/{id}',[TaskController::class,'jobCategoryWiseTask'])->name('task.catwise');

    //Team
    Route::get('team',[TeamController::class,'index'])->name('team.list');
    Route::post('create-team',[TeamController::class,'addTeamSubmit'])->name('team.add');
    Route::get('edit-team/{id}',[TeamController::class,'editTeam'])->name('team.edit');
    Route::post('edit-team/{id}',[TeamController::class,'editTeamSubmit'])->name('team.edit');
    Route::post('delete-team',[TeamController::class,'deleteTeam'])->name('team.delete');

    //users
    Route::get('users',[UserController::class,'index'])->name('user.list');
    Route::post('create-user',[UserController::class,'addUserSubmit'])->name('user.add');
    Route::get('edit-user/{id}',[UserController::class,'editUser'])->name('user.edit');
    Route::post('edit-user/{id}',[UserController::class,'editUserSubmit'])->name('user.edit');
    Route::post('delete-user',[UserController::class,'deleteUser'])->name('user.delete');

    //calendar
    Route::get('calendar',[CalendarController::class,'index'])->name('calendar.list');
    Route::get('get-cal-event',[CalendarController::class,'getEvents'])->name('calendar.event');

    //jobs
    Route::get('jobs',[JobController::class,'index'])->name('job.list');
    Route::get('create-job',[JobController::class,'addJob'])->name('job.add');
    Route::post('create-job',[JobController::class,'addJobSubmit'])->name('job.add');
    Route::get('edit-job/{id}',[JobController::class,'editJob'])->name('job.edit');
    Route::post('edit-job/{id}',[JobController::class,'editJobSubmit'])->name('job.edit');
    Route::get('delete-job/{id}',[JobController::class,'deleteJob'])->name('job.delete');
    Route::get('company-wise-job/{id}',[JobController::class,'companyWiseJob'])->name('job.company');
    Route::get('category-wise-job/{id}',[JobController::class,'categoryWiseJob'])->name('job.category');

    //setting
    Route::get('general-settings',[SettingController::class,'index'])->name('general.settings');
    Route::post('create-catcontact',[SettingController::class,'addCatSubmit'])->name('catcontact.add');
    Route::get('edit-catcontact/{id}', [SettingController::class, 'editContact'])->name('catcontact.edit');
    Route::post('edit-catcontact/{id}',[SettingController::class,'editCatSubmit'])->name('catcontact.edit');
    Route::post('delete-catcontact', [SettingController::class, 'deleteContact'])->name('catcontact.delete');

    Route::post('create-subcatcontact',[SettingController::class,'addSubCatSubmit'])->name('subcatcontact.add');
   

    Route::post('create-catmaterial',[SettingController::class,'addMaterialCatSubmit'])->name('catmaterial.add');
    Route::get('edit-catmaterial/{id}', [SettingController::class, 'editMaterial'])->name('catmaterial.edit');
    Route::post('edit-catmaterial/{id}',[SettingController::class,'editMaterialSubmit'])->name('catmaterial.edit');
    Route::post('delete-catmaterial', [SettingController::class, 'deleteMaterial'])->name('catmaterial.delete');


});
