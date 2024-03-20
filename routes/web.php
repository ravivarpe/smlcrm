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
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\AssetController;
use App\Http\Controllers\MapController;
use App\Http\Controllers\SnaggingController;
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
    Route::get('status-enquiry/{status}',[EnquiryController::class,'statusWiseEnquiry'])->name('enquiries.status');
    Route::post('add-enquiry-task',[EnquiryController::class,'addTasKEnq'])->name('enquiries.addTask');
    Route::post('send-enquiry-email',[EnquiryController::class,'sendEmail'])->name('enquiries.sendEmail');

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
    Route::post('import-contact-csv',[ContactController::class,'uploadCsv'])->name('contact.csvImport');



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
    Route::post('update-material-qty',[MaterialController::class,'updateQty'])->name('material.qtyUpdate');


    //invoice
    Route::get('invoice',[InvoiceController::class,'index'])->name('invoice.list');
    Route::get('view-jobdetails/{id}',[InvoiceController::class,'viewJobPack'])->name('jobdetails.list');
    Route::get('create-invoice/{contactId?}/{typeId?}',[InvoiceController::class,'addInvoice'])->name('invoice.add');
    Route::post('create-invoice/{contactId?}/{typeId?}',[InvoiceController::class,'addInvoiceSubmit'])->name('invoice.add');
    Route::get('edit-invoice/{id}',[InvoiceController::class,'editInvoice'])->name('invoice.edit');
    Route::post('edit-invoice/{id}',[InvoiceController::class,'editInvoiceSubmit'])->name('invoice.edit');
    Route::get('delete-invoice/{id}',[InvoiceController::class,'deleteInvoice'])->name('invoice.delete');
    Route::get('search-contact',[InvoiceController::class,'getContact'])->name('invoice.contact');
    Route::get('search-material',[InvoiceController::class,'getMaterial'])->name('invoice.material');
    Route::get('search-jobs',[InvoiceController::class,'getJob'])->name('invoice.job');
    Route::get('get-contact-details/{id}',[InvoiceController::class,'getContactDetails'])->name('getContactDetails');
    Route::get('get-material-details/{id}',[InvoiceController::class,'getMaterialDetails'])->name('getMaterialDetails');
    Route::get('view-invoice-pdf/{id?}',[InvoiceController::class,'viewInvoicePdf'])->name('view.invoicePdf');
    Route::post('add-job-pack',[InvoiceController::class,'storeJobPack'])->name('jobpack.create');
    Route::get('download-job-pack/{id}',[InvoiceController::class,'showJobPackPdf'])->name('jobpack.download');
    Route::get('download-job-pack1/{id}',[InvoiceController::class,'showPlannerJobPackPdf'])->name('jobpack1.download');
    //asset
    Route::get('asset',[AssetController::class,'index'])->name('asset.list');
    Route::get('create-asset',[AssetController::class,'addAsset'])->name('asset.add');
    Route::post('create-asset',[AssetController::class,'addAssetSubmit'])->name('asset.add');
    Route::get('edit-asset/{id}',[AssetController::class,'editAsset'])->name('asset.edit');
    Route::post('edit-asset/{id}',[AssetController::class,'editAssetSubmit'])->name('asset.edit');
    Route::post('delete-asset',[AssetController::class,'deleteAsset'])->name('asset.delete');
    Route::get('company-wise-asset/{id}',[AssetController::class,'companyWiseAssets'])->name('asset.companyList');
    Route::get('search-staff',[AssetController::class,'getStaff'])->name('asset.staff');

   //Tasks
   Route::get('tasks',[TaskController::class,'index'])->name('task.list');
   Route::post('create-task',[TaskController::class,'addTaskSubmit'])->name('task.add');
   Route::get('edit-task/{id}',[TaskController::class,'editTask'])->name('task.edit');
   Route::post('edit-task/{id}',[TaskController::class,'editTaskSubmit'])->name('task.edit');
   Route::post('delete-task',[TaskController::class,'deleteTask'])->name('task.delete');
   Route::get('job-catwise-task/{id}',[TaskController::class,'jobCategoryWiseTask'])->name('task.catwise');
   Route::get('task-completed/{id}',[TaskController::class,'changeTaskStatus'])->name('task.complete');
    //Team
    Route::get('team',[TeamController::class,'index'])->name('team.list');
    Route::post('create-team',[TeamController::class,'addTeamSubmit'])->name('team.add');
    Route::get('edit-team/{id}',[TeamController::class,'editTeam'])->name('team.edit');
    Route::post('edit-team/{id}',[TeamController::class,'editTeamSubmit'])->name('team.edit');
    Route::post('delete-team',[TeamController::class,'deleteTeam'])->name('team.delete');

    //users
    Route::get('users',[UserController::class,'index'])->name('user.list');
    Route::get('create-user',[UserController::class,'addUser'])->name('user.add');
    Route::post('create-user',[UserController::class,'addUserSubmit'])->name('user.add');
    Route::get('edit-user/{id}',[UserController::class,'editUser'])->name('user.edit');
    Route::post('edit-user/{id}',[UserController::class,'editUserSubmit'])->name('user.edit');
    Route::post('delete-user',[UserController::class,'deleteUser'])->name('user.delete');

    //calendar
    Route::get('calendar',[CalendarController::class,'index'])->name('calendar.list');
    Route::get('get-cal-event',[CalendarController::class,'getEvents'])->name('calendar.event');
    Route::get('get-site-visit/{contact_id}',[CalendarController::class,'siteVisit'])->name('calendar.sitevisit');
    Route::post('add-site-visit-task',[CalendarController::class,'addSitVisitTaskSubmit'])->name('sitevisit.TaskAdd');
    Route::get('get-site-visit-event/{userid?}',[CalendarController::class,'getSiteVisitEvents'])->name('sitevisit.eventCal');
    Route::get('get-planning-cal/{team_id?}',[CalendarController::class,'planningCalendar'])->name('calendar.planning');
    Route::get('get-planning-events/{team_id?}',[CalendarController::class,'getPlanningEvents'])->name('planning.planevent');

    //jobs
    Route::get('jobs',[JobController::class,'index'])->name('job.list');
    Route::get('create-job/{invoiceId?}',[JobController::class,'addJob'])->name('job.add');
    Route::post('create-job/{invoiceId?}',[JobController::class,'addJobSubmit'])->name('job.add');
    Route::get('edit-job/{id}',[JobController::class,'editJob'])->name('job.edit');
    Route::post('edit-job/{id}',[JobController::class,'editJobSubmit'])->name('job.edit');
    Route::get('delete-job/{id}',[JobController::class,'deleteJob'])->name('job.delete');
    Route::get('company-wise-job/{id}',[JobController::class,'companyWiseJob'])->name('job.company');
    Route::get('category-wise-job/{id}',[JobController::class,'categoryWiseJob'])->name('job.category');
    Route::get('view-job-details/{id}',[JobController::class,'jobDetails'])->name('job.view');
    Route::get('status-wise-job/{status}',[JobController::class,'statusWiseJob'])->name('job.statuswise');

    Route::post('change-job-stage/{id}',[JobController::class,'changeJobStage'])->name('job.stage');
    Route::post('add-call-log/{id}',[JobController::class,'addCallLog'])->name('job.callLog');

    //setting
    Route::get('general-settings',[SettingController::class,'index'])->name('general.settings');

    //ContactCat
    Route::post('create-catcontact',[SettingController::class,'addCatSubmit'])->name('catcontact.add');
    Route::get('edit-catcontact/{id}', [SettingController::class, 'editContact'])->name('catcontact.edit');
    Route::post('edit-catcontact/{id}',[SettingController::class,'editCatSubmit'])->name('catcontact.edit');
    Route::post('delete-catcontact', [SettingController::class, 'deleteContact'])->name('catcontact.delete');

    //ContSubcat
    Route::post('create-subcatcontact',[SettingController::class,'addSubCatSubmit'])->name('subcatcontact.add');
    Route::get('edit-subcatcontact/{id}', [SettingController::class, 'editSubContact'])->name('subcatcontact.edit');
    Route::post('edit-subcatcontact/{id}',[SettingController::class,'editSubSubmit'])->name('subcatcontact.edit');
    Route::post('delete-subcatcontact', [SettingController::class, 'deleteSubContact'])->name('subcatcontact.delete');

    //ContReferralType
    Route::post('create-referraltype',[SettingController::class,'addRefTypeSubmit'])->name('referraltype.add');
    Route::get('edit-referraltype/{id}', [SettingController::class, 'editRefType'])->name('referraltype.edit');
    Route::post('edit-referraltype/{id}',[SettingController::class,'editRefTypeSubmit'])->name('referraltype.edit');
    Route::post('delete-referraltype', [SettingController::class, 'deleteRefType'])->name('referraltype.delete');


    //materialcat
    Route::post('create-catmaterial',[SettingController::class,'addMaterialCatSubmit'])->name('catmaterial.add');
    Route::get('edit-catmaterial/{id}', [SettingController::class, 'editMaterial'])->name('catmaterial.edit');
    Route::post('edit-catmaterial/{id}',[SettingController::class,'editMaterialSubmit'])->name('catmaterial.edit');
    Route::post('delete-catmaterial', [SettingController::class, 'deleteMaterial'])->name('catmaterial.delete');

       //materialcat
    Route::post('create-material-sub-cat',[SettingController::class,'addMaterialSubCatSubmit'])->name('materialSubCat.add');
    Route::get('edit-material-sub-cat/{id}', [SettingController::class, 'editMaterialSubCat'])->name('materialSubCat.edit');
    Route::post('edit-material-sub-cat/{id}',[SettingController::class,'editMaterialSubCatSubmit'])->name('materialSubCat.edit');
    Route::post('delete-material-sub-cat', [SettingController::class, 'deleteMaterialSubCat'])->name('materialSubCat.delete');

    //FinanceCat
    Route::post('create-catinvoice',[SettingController::class,'addInvoiceCatSubmit'])->name('catinvoice.add');
    Route::get('edit-catinvoice/{id}', [SettingController::class, 'editInvoice'])->name('catinvoice.edit');
    Route::post('edit-catinvoice/{id}',[SettingController::class,'editInvoiceSubmit'])->name('catinvoice.edit');
    Route::post('delete-catinvoice', [SettingController::class, 'deleteInvoice'])->name('catinvoice.delete');

    //JobCat
    Route::post('create-catjob',[SettingController::class,'addJobCatSubmit'])->name('catjob.add');
    Route::get('edit-catjob/{id}', [SettingController::class, 'editJob'])->name('catjob.edit');
    Route::post('edit-catjob/{id}',[SettingController::class,'editJobSubmit'])->name('catjob.edit');
    Route::post('delete-catjob', [SettingController::class, 'deleteJob'])->name('catjob.delete');

     //CalenderCat
     Route::post('create-catcalendar',[SettingController::class,'addCalenderCatSubmit'])->name('catcalendar.add');
     Route::get('edit-catcalendar/{id}', [SettingController::class, 'editCalender'])->name('catcalendar.edit');
     Route::post('edit-catcalendar/{id}',[SettingController::class,'editCalenderSubmit'])->name('catcalendar.edit');
     Route::post('delete-catcalendar', [SettingController::class, 'deleteCalender'])->name('catcalendar.delete');

    //CompanyCat
    Route::post('create-catcompany',[SettingController::class,'addCompanyCatSubmit'])->name('catcompany.add');
    Route::get('edit-catcompany/{id}', [SettingController::class, 'editCompany'])->name('catcompany.edit');
    Route::post('edit-catcompany/{id}',[SettingController::class,'editCompanySubmit'])->name('catcompany.edit');
    Route::post('delete-catcompany', [SettingController::class, 'deleteCompany'])->name('catcompany.delete');

    //Permission
    Route::get('user-permission',[PermissionController::class,'index'])->name('user-permission');
    Route::post('create-userpermission',[PermissionController::class,'addPermissionSubmit'])->name('userpermission.add');
    Route::get('edit-userpermission/{id}', [PermissionController::class, 'editPermission'])->name('userpermission.edit');
    Route::post('edit-userpermission/{id}',[PermissionController::class,'editPermissionSubmit'])->name('userpermission.edit');
    Route::post('delete-userpermission', [PermissionController::class, 'deletePermission'])->name('userpermission.delete');

    //map MapController
    Route::get('maps',[MapController::class,'index'])->name('view-maps');

    //snagging
    Route::get('snagging-lists',[SnaggingController::class,'index'])->name('snagging.list');
    Route::get('create-snagging',[SnaggingController::class,'addSnagging'])->name('snagging.add');
    Route::post('create-snagging',[SnaggingController::class,'addSnaggingSubmit'])->name('snagging.add');
    Route::get('delete-snagging/{id}',[SnaggingController::class,'deleteSnagging'])->name('snagging.delete');
    Route::get('company-snagging/{id}',[SnaggingController::class,'companyWiseSnagging'])->name('snagging.company');

    Route::get('edit-snagging/{id}',[SnaggingController::class,'editSnagging'])->name('snagging.edit');
    Route::post('edit-snagging/{id}',[SnaggingController::class,'editSnaggingSubmit'])->name('snagging.edit');

});
