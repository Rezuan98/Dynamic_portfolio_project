<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BackendController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\attachmentController;
use App\Http\Controllers\FrontendController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/






Route::get('/',[HomeController::class,'Home'])->name('home');










// route for store message
Route::post('/store/message',[FrontendController::class,'storeMessage'])->name('store.message');




Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');



    Route::get('/admin',[BackendController::class,'Dashboard'])->name('dashboard');



    
// routes for profile info section
Route::get('/add/info',[BackendController::class,'addInfo'])->name('add.info');
Route::post('/insert/profile/info',[BackendController::class,'insertProfileInfo'])->name('insert.profile.info');
Route::get('/show/info',[BackendController::class,'showInfo'])->name('show.info');
Route::get('/edit/profile/info/{id}',[BackendController::class,'editProfileInfo'])->name('edit.profile.info');
Route::delete('/delete/profile/info/{id}',[BackendController::class,'deleteProfileInfo'])->name('delete.profile.info');
Route::post('/update/profile/info/',[BackendController::class,'updateProfileInfo'])->name('update.profile.info');


// routes for about section
Route::get('/insert/about/',[BackendController::class,'InsertAbout'])->name('insert.about');
Route::get('/show/about/',[BackendController::class,'ShowAbout'])->name('show.about');
Route::post('/insert/about/data',[BackendController::class,'InsertAboutData'])->name('insert.about.data');
Route::get('/edit-about-info/{id}', [BackendController::class, 'editAboutInfo'])->name('edit.about.info');
Route::post('/update-about-info/{id}', [BackendController::class, 'updateAboutInfo'])->name('update.about.info');
Route::delete('/delete-about-info/{id}', [BackendController::class, 'deleteAboutInfo'])->name('delete.about.info');





// routes for overview section

Route::get('/insert/overview/',[BackendController::class,'InsertOverview'])->name('insert.overview');
Route::get('/show/overview/',[BackendController::class,'ShowOverview'])->name('show.overview');
Route::post('/insert/overview/data',[BackendController::class,'InsertOverviewData'])->name('insert.overview.data');
Route::get('/edit/overview/info/{id}', [BackendController::class, 'editOverviewInfo'])->name('edit.overview.info');
Route::post('/update/overview/info/{id}', [BackendController::class, 'updateOverviewInfo'])->name('update.overview.info');
Route::delete('/delete-overview-info/{id}', [BackendController::class, 'deleteOverviewInfo'])->name('delete.overview.info');



// routes for skill add
Route::get('/add/skill',[BackendController::class,'addSkill'])->name('add.skill');
Route::get('/show/skill',[BackendController::class,'showSkill'])->name('show.skill');
Route::post('/insert/skill',[BackendController::class,'insertSkill'])->name('insert.skill');
Route::get('/edit/skill/{id}',[BackendController::class,'editSkill'])->name('edit.skill');
Route::post('/update/skill/{id}',[BackendController::class,'updateSkill'])->name('update.skill');
Route::get('/delete/skill/{id}',[BackendController::class,'deleteSkill'])->name('delete.skill');




// portfolio routes starts here
Route::get('/add/product/',[PortfolioController::class,'addProduct'])->name('add.product');

Route::get('/add/branding/',[PortfolioController::class,'addBranding'])->name('Add.branding');
Route::get('/add/book/',[PortfolioController::class,'addBook'])->name('Add.book');
Route::post('/insert/product/',[PortfolioController::class,'insertProduct'])->name('insert.product');
Route::get('/edit/product/{id}',[PortfolioController::class,'editProduct'])->name('edit.product');
Route::post('/update/product/{id}',[PortfolioController::class,'updateProduct'])->name('update.product');
Route::get('/delete/product/{id}',[PortfolioController::class,'deleteProduct'])->name('delete.product');

Route::get('/show/unread/message',[BackendController::class,'showUnreadMessage'])->name('show.unread.message');


Route::delete('/delete/unread/message/{id}',[BackendController::class,'deleteUnreadMessage'])->name('delete.unread.message');
Route::delete('/delete/read/message/{id}',[BackendController::class,'deleteReadMessage'])->name('delete.read.message');
Route::get('/show/all/message',[BackendController::class,'showAllMessage'])->name('show.all.message');



// routes for testimonial part

Route::get('/add/testimonial/',[BackendController::class,'testimonial'])->name('add.testimonial');
Route::post('/insert/testimonial/',[BackendController::class,'insertTestimonial'])->name('insert.testimonial');
Route::get('/show/testimonial/',[BackendController::class,'showTestimonial'])->name('show.testimonial');
Route::post('/update/testimonial/{id}',[BackendController::class,'updateTestimonial'])->name('update.testimonial');
Route::get('/edit/testimonial/{id}',[BackendController::class,'editTestimonial'])->name('edit.testimonial');
Route::delete('/delete/testimonial/{id}',[BackendController::class,'deletetestimonial'])->name('delete.testimonial');


// routes for testimonial ends here

// summery routes starts here

Route::get('/add/summery/',[BackendController::class,'addSummery'])->name('add.summery');
Route::post('/insert/summery/',[BackendController::class,'insertSummery'])->name('insert.summery');
Route::get('/show/summery/',[BackendController::class,'showSummery'])->name('show.summery');
Route::get('/edit/summery/{id}',[BackendController::class,'editSummery'])->name('edit.summery');
Route::post('/update/summery/{id}',[BackendController::class,'updateSummery'])->name('update.summery');

// education route start here
Route::get('/add/education/',[BackendController::class,'addEducation'])->name('add.education');
Route::post('/insert/education/',[BackendController::class,'insertEducation'])->name('insert.education');
Route::get('/show/education/',[BackendController::class,'showEducation'])->name('show.education');
Route::get('/edit/education/{id}',[BackendController::class,'editEducation'])->name('edit.education');
Route::get('/delete/education/',[BackendController::class,'deleteEducation'])->name('delete.education');
Route::post('/update/education/{id}',[BackendController::class,'updateEducation'])->name('update.education');

// education route end here

// experience route start here
Route::get('/add/experience/',[BackendController::class,'addExperience'])->name('add.experience');
Route::post('/insert/experience/',[BackendController::class,'insertExperience'])->name('insert.experience');
Route::get('/show/experience/',[BackendController::class,'showExperience'])->name('show.experience');
Route::get('/edit/experience/{id}',[BackendController::class,'editExperience'])->name('edit.experience');
Route::delete('/delete/experience/{id}',[BackendController::class,'deleteExperience'])->name('delete.experience');
Route::post('/update/experience/{id}',[BackendController::class,'updateExperience'])->name('update.experience');

// education route end here

// services route start here
// experience route start here
Route::get('/add/services/',[BackendController::class,'addServices'])->name('add.services');
Route::post('/insert/services/',[BackendController::class,'insertServices'])->name('insert.services');
Route::get('/show/services/',[BackendController::class,'showServices'])->name('show.services');
Route::get('/edit/services/{id}',[BackendController::class,'editServices'])->name('edit.services');
Route::delete('/delete/services/{id}',[BackendController::class,'deleteServices'])->name('delete.services');
Route::post('/update/services/{id}',[BackendController::class,'updateServices'])->name('update.services');

// experience route ends here



// attachements route start here
Route::get('/add/apps/',[attachmentController::class,'addApps'])->name('add.apps');
Route::post('/insert/apps/',[attachmentController::class,'insertApps'])->name('insert.apps');
Route::get('/show/apps/',[attachmentController::class,'showApps'])->name('show.apps');
Route::get('/edit/apps/{id}',[attachmentController::class,'editApps'])->name('edit.apps');
Route::post('/update/apps/',[attachmentController::class,'updateApps'])->name('update.apps');
Route::delete('/delete/app/{id}',[attachmentController::class,'deleteApps'])->name('delete.apps');

Route::get('/add/products/',[attachmentController::class,'addProducts'])->name('add.products');
Route::post('/insert/products/',[attachmentController::class,'insertProducts'])->name('insert.products');
Route::get('/show/products/',[attachmentController::class,'showProducts'])->name('show.products');
Route::delete('/delete/products/{id}',[attachmentController::class,'deleteProducts'])->name('delete.products');
Route::get('/edit/products/{id}',[attachmentController::class,'editProducts'])->name('edit.products');
Route::post('/update/products/',[attachmentController::class,'updateProducts'])->name('update.products');


Route::get('/add/branding/',[attachmentController::class,'addBranding'])->name('add.branding');
Route::post('/insert/branding/',[attachmentController::class,'insertBranding'])->name('insert.branding');
Route::get('/show/branding/',[attachmentController::class,'showBranding'])->name('show.branding');
Route::delete('/delete/branding/{id}',[attachmentController::class,'deleteBranding'])->name('delete.branding');

Route::get('/edit/branding/{id}',[attachmentController::class,'editBranding'])->name('edit.branding');
Route::post('/update/products/',[attachmentController::class,'updateProducts'])->name('update.products');

// attachments route end here 












});








require __DIR__.'/auth.php';
