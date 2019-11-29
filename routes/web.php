<?php



//Admin Route 
Route::namespace('Admin')->group(function () {

   Route::get('admin','HomeController@index')->name('admin.home');
   
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

Route::get('newsletter',"NewsletterController@show")->name('newsletter');
Route::post('newsletter',"NewsletterController@store");

//Frontend Route

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

