<?php



//Admin Route 
Route::namespace('Admin')->group(function () {

   Route::get('backend','HomeController@index')->name('admin.home');

   //Category Route
   Route::resource('backend/category','CategoryController');

   //Post Route
   Route::resource('backend/post','PostController');

   //Login
   Route::get('backend/login', 'Auth\LoginController@showLoginForm')->name('admin.login');
   Route::post('backend/login', 'Auth\LoginController@login')->name('admin.login');
   Route::post('backend/logout', 'Auth\LoginController@logout')->name('admin.logout');
   
});




Route::view("/","welcome");
// Model View Controller
Route::get("test","TestController@Test");

//Company Crud
//Show Company Form
Route::get('addcompany','CompanyController@showCompanyForm')->name('company.add');

//Insert Company
Route::post('addcompany','CompanyController@addCompany')->name('company.store');
//Read all company
Route::get('companies','CompanyController@getAllCompany')->name('company.get');

//Show Edit Form
Route::get('companies/{id}','CompanyController@showEditForm')->name('company.show');
//Update company
Route::patch('companies/{id}','CompanyController@submitFormData')->name('company.submit');

//Delete Company
Route::post('companies/{id}','CompanyController@delete')->name('company.delete');


//Newsletter
Route::post('newsletter',"NewsletterController@store")->name('newsletter');

//Frontend Route

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/signup', 'SignupController@showRegistrationForm')->name('signup');
Route::post('/signup', 'SignupController@handleRegistration');
Route::get('/verify/{token}', 'VerifyController@VerifyEmail')->name('verify');
Route::get('/signin', 'LoginController@ShowLoginForm')->name('signin');
Route::post('/signin', 'LoginController@HandleLogin');

