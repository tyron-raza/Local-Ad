<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ChildCategoryController;
use App\Http\Controllers\Admin\CityController;
use App\Http\Controllers\Admin\CountryController;
use App\Http\Controllers\Admin\StateController;
use App\Http\Controllers\Admin\ListingController as AdminListingsController;
use App\Http\Controllers\Admin\SubCategoryController;
use App\Http\Controllers\Frontend\ListingController as FrontendListingController;
use App\Http\Controllers\ListingController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\FeedbackController;





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
// routes/web.php

Route::get('/', [FrontendListingController::class, 'welcome'])->name('welcome');
Route::get('/post_details/{id}', [ListingController::class, 'post_details'])->name('listings.post_details');
Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
Route::post('/categories', [CategoryController::class, 'store'])->name('categories.store');
Route::post('/listings', [ListingController::class, 'store'])->name('listings.store');
Route::resource('listings', AdminListingsController::class);
Route::get('/listings', [AdminListingsController::class, 'index'])->name('admin.listings.index');
Route::get('/Admin', [CategoryController::class, 'index'])->name('admincategories.index');
Route::get('/childcategories', [ChildCategoryController::class, 'index'])->name('childcategories.index');
Route::get('/all-listings', [FrontendListingController::class, 'index'])
    ->name('all-listings');
Route::get('/admin', [AdminController::class, 'index'])->name('index'); 
Route::get('/listings', [ListingController::class, 'index'])->name('listings.index');
Route::resource('categories', CategoryController::class);
Route::get('categories/{category}/add-sub', [CategoryController::class, 'add_sub'])->name('add_sub');
Route::post('categories/{category}/add-sub', [CategoryController::class, 'add_sub_store'])->name('add_sub.store');
Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
Route::resource('subcategories', SubCategoryController::class);
Route::resource('childcategories', ChildCategoryController::class);
Route::resource('countries', CountryController::class);
Route::get('countries/{country}/add-state', [CountryController::class, 'add_state'])->name('add_state');
Route::post('countries/{country}/add-state', [CountryController::class, 'add_state_store'])->name('add_state.store');
Route::resource('states', StateController::class);
Route::resource('cities', CityController::class);
Route::get('/feedback', [FeedbackController::class, 'create'])->name('feedback.create');
Route::post('/feedback', [FeedbackController::class, 'store'])->name('feedback.store');
Route::get('/feedback', [FeedbackController::class, 'index'])->name('feedback.index');
Route::post('/comments', [CommentController::class, 'store'])->name('comments.store');

use App\Models\User; // Import the User model
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    $user = User::find(1); 

    if ($user) {
        $user->assignRole('admin');
    }

    return view('dashboard');
})->name('dashboard');
    
    

Route::middleware(['auth:sanctum', 'role:admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [FrontendListingController::class, 'welcome'])->name('welcome');
    Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
    Route::post('/categories', [CategoryController::class, 'store'])->name('categories.store');
    Route::post('/listings', [ListingController::class, 'store'])->name('listings.store');
    Route::get('/Admin', [CategoryController::class, 'index'])->name('admincategories.index');
    Route::get('/childcategories', [ChildCategoryController::class, 'index'])->name('childcategories.index');
    Route::get('/all-listings', [FrontendListingController::class, 'index'])
        ->name('all-listings');
    Route::get('/admin', [AdminController::class, 'index'])->name('index');
    Route::resource('listings', AdminListingsController::class);
    Route::get('/listings', 'ListingController@index')->name('listings.index');
    Route::resource('categories', CategoryController::class);
    Route::get('categories/{category}/add-sub', [CategoryController::class, 'add_sub'])->name('add_sub');
    Route::post('categories/{category}/add-sub', [CategoryController::class, 'add_sub_store'])->name('add_sub.store');
    Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
    Route::resource('subcategories', SubCategoryController::class);
    Route::resource('childcategories', ChildCategoryController::class);
    Route::resource('countries', CountryController::class);
    Route::get('countries/{country}/add-state', [CountryController::class, 'add_state'])->name('add_state');
    Route::post('countries/{country}/add-state', [CountryController::class, 'add_state_store'])->name('add_state.store');
    Route::resource('states', StateController::class);
    Route::resource('cities', CityController::class);
    Route::get('/post_details/{id}', [ListingController::class, 'post_details'])->name('listings.post_details');
});



Route::resource('listings', ListingController::class)->middleware('auth');
