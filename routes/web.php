<?php

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

Route::get('/','HomeController@index')->name('home');


Route::get('lienhe', function () {
    return view('pages.lienhe');
})->name('lienhe');

Route::post('themlienhe','ContactController@insert')->name('themlienhe');

Route::get('hotrochitiet/{slug}','SupportController@detail')->name('hotrochitiet');

Route::get('tintucchitiet/{slug}','NewController@detail')->name('tintucchitiet');

Route::get('tuyendungchitiet/{slug}','RecruitmentController@detail')->name('tuyendungchitiet');

Route::get('khoahocchitiet/{slug}','CourseController@detail')->name('khoahocchitiet');

Route::post('dangkykhoahoc/{slug}','RegistrationController@insert')->name('dangkykhoahoc');

Route::get('dichvuchitiet/{slug}','ServiceController@detail')->name('dichvuchitiet');

Route::get('tinTuc/{slug}','NewController@show')->name('tinTuc');

Route::get('traiNghiem', function () {
	return view('pages.traiNghiem');
})->name('traiNghiem');

Route::get('dichvu/{slug}','ServiceController@show')->name('dichvu');

Route::get('tuyendung','RecruitmentController@show')->name('tuyendung');

Route::get('gioithieu','IntroductController@show')->name('gioithieu');
Route::get('khoahoc/{slug}','CourseController@index')->name('khoahoc');

// Route::get('tintucchitiet/{slug}','NewController@detail')->name('tintucchitiet');
// Route::get('tintuc/{slug}','NewController@show')->name('tintuc');
// Route::get('dichvu/{slug}','Cate_serviceController@show')->name('dichvu');
// Route::get('chitietdichvu/{slug}','ServiceController@show')->name('chitietdichvu');








Route::get('admin/login','Auth\LoginController@getLogin')->name('login');
Route::post('admin/login','Auth\LoginController@postLogin')->name('login');


Route::group(['prefix' => 'admin','middleware'=>'auth'], function() {


	//------------------examples---------------------
	Route::get('profile','ExamplesController@GetProfile');
	Route::get('register','ExamplesController@GetRegister');
	Route::post('register','ExamplesController@PostRegister');
	Route::get('list','ExamplesController@GetList');
	Route::get('edit','ExamplesController@EditList');
	Route::get('del/{id}','ExamplesController@DelUser');



	Route::get('/',function(){
		return view('admins.dashboard');
	});





	Route::prefix('new')->group(function () {
		Route::get('list','NewController@list')->name('new.list');
		Route::get('add','NewController@add')->name('new.add');
		Route::post('add','NewController@store')->name('new.add');
		Route::get('edit/{id}','NewController@edit')->name('new.edit');
		Route::post('edit/{id}','NewController@update')->name('new.edit');
		Route::get('delete/{id}','NewController@delete')->name('new.delete');
	});

	Route::prefix('cate_new')->group(function () {
		Route::get('list','CateNewController@list')->name('cate_new.list');
		Route::get('add','CateNewController@add')->name('cate_new.add');
		Route::post('add','CateNewController@insert')->name('cate_new.add');
		Route::get('edit/{id}','CateNewController@edit')->name('cate_new.edit');
		Route::post('update/{id}','CateNewController@update')->name('cate_new.update');
		Route::get('delete/{id}','CateNewController@delete')->name('cate_new.delete');
	});

	Route::prefix('banner')->group(function () {
		Route::get('list','BannerController@list')->name('banner.list');
		Route::get('add','BannerController@add')->name('banner.add');
		Route::post('add','BannerController@insert')->name('banner.insert');
		Route::get('edit/{id}','BannerController@edit')->name('banner.edit');
		Route::post('edit/{id}','BannerController@update')->name('banner.update');
		Route::get('delete/{id}','BannerController@delete')->name('banner.delete');
	});

	Route::prefix('contact')->group(function () {
		Route::get('list','ContactController@list')->name('contact.list');
		Route::post('insert','ContactController@insert')->name('contact.insert');
		Route::get('delete/{id}','ContactController@delete')->name('contact.delete');
		Route::get('see/{id}-{status}','ContactController@see')->name('contact.see');
		Route::get('feedback/{id}-{status}','ContactController@feedback')->name('contact.feedback');
	});

	Route::prefix('adviser')->group(function () {
		Route::get('list','AdviserController@list')->name('adviser.list');
		Route::get('add','AdviserController@add')->name('adviser.add');
		Route::post('add','AdviserController@insert')->name('adviser.add');
		Route::get('edit/{id}','AdviserController@edit')->name('adviser.edit');
		Route::post('edit/{id}','AdviserController@update')->name('adviser.edit');
		Route::get('delete/{id}','AdviserController@delete')->name('adviser.delete');
	});

	Route::prefix('service')->group(function () {
		Route::get('list','ServiceController@list')->name('service.list');
		Route::get('add','ServiceController@add')->name('service.add');
		Route::post('add','ServiceController@insert')->name('service.add');
		Route::get('edit/{id}','ServiceController@edit')->name('service.edit');
		Route::post('edit/{id}','ServiceController@update')->name('service.edit');
		Route::get('delete/{id}','ServiceController@delete')->name('service.delete');
	});

	Route::prefix('cate_service')->group(function () {
		Route::get('list','Cate_serviceController@list')->name('cate_service.list');
		Route::get('add','Cate_serviceController@add')->name('cate_service.add');
		Route::post('add','Cate_serviceController@insert')->name('cate_service.add');
		Route::get('edit/{id}','Cate_serviceController@edit')->name('cate_service.edit');
		Route::post('edit/{id}','Cate_serviceController@update')->name('cate_service.edit');
		Route::get('delete/{id}','Cate_serviceController@delete')->name('cate_service.delete');
	});

	Route::prefix('course')->group(function () {
		Route::get('list','CourseController@list')->name('course.list');
		Route::get('add','CourseController@add')->name('course.add');
		Route::post('add','CourseController@store')->name('course.add');
		Route::get('edit/{id}','CourseController@edit')->name('course.edit');
		Route::post('edit/{id}','CourseController@update')->name('course.edit');
		Route::get('delete/{id}','CourseController@delete')->name('course.delete');
	});

	Route::prefix('cate_course')->group(function () {
		Route::get('list','Cate_courseController@list')->name('cate_course.list');
		Route::get('add','Cate_courseController@add')->name('cate_course.add');
		Route::post('add','Cate_courseController@insert')->name('cate_course.add');
		Route::get('edit/{id}','Cate_courseController@edit')->name('cate_course.edit');
		Route::post('update/{id}','Cate_courseController@update')->name('cate_course.update');
		Route::get('delete/{id}','Cate_courseController@delete')->name('cate_course.delete');
	});

	Route::prefix('recruitment')->group(function () {
		Route::get('list','RecruitmentController@list')->name('recruitment.list');
		Route::get('add','RecruitmentController@add')->name('recruitment.add');
		Route::post('insert','RecruitmentController@insert')->name('recruitment.insert');
		Route::get('edit/{id}','RecruitmentController@edit')->name('recruitment.edit');
		Route::post('edit/{id}','RecruitmentController@update')->name('recruitment.edit');
		Route::get('delete/{id}','RecruitmentController@delete')->name('recruitment.delete');
	});

	Route::prefix('support')->group(function () {
		Route::get('list','SupportController@list')->name('support.list');
		Route::get('add','SupportController@add')->name('support.add');
		Route::post('add','SupportController@store')->name('support.add');
		Route::get('edit/{id}','SupportController@edit')->name('support.edit');
		Route::post('edit/{id}','SupportController@update')->name('support.edit');
		Route::get('delete/{id}','SupportController@delete')->name('support.delete');
	});

	Route::prefix('infor_company')->group(function () {
		Route::get('list','InforCompanyController@list')->name('infor_company.list');
		Route::get('edit/{id}','InforCompanyController@edit')->name('infor_company.edit');
		Route::post('edit/{id}','InforCompanyController@update')->name('infor_company.edit');
	});

	Route::prefix('registration')->group(function () {
		Route::get('list','RegistrationController@list')->name('registration.list');
		Route::get('delete/{id}','RegistrationController@delete')->name('registration.delete');
	});

	Route::prefix('ad_re')->group(function () {
		Route::get('list','Ad_reController@list')->name('ad_re.list');
		Route::get('add','Ad_reController@add')->name('ad_re.add');
		Route::post('add','Ad_reController@insert')->name('ad_re.add');
		Route::get('edit/{id}','Ad_reController@edit')->name('ad_re.edit');
		Route::post('update/{id}','Ad_reController@update')->name('ad_re.update');
		Route::get('delete/{id}','Ad_reController@delete')->name('ad_re.delete');
	});

	Route::prefix('Sub_ad_re')->group(function () {
		Route::get('list','Sub_ad_reController@list')->name('sub_ad_re.list');
		Route::get('add','Sub_ad_reController@add')->name('sub_ad_re.add');
		Route::post('add','Sub_ad_reController@insert')->name('sub_ad_re.add');
		Route::get('edit/{id}','Sub_ad_reController@edit')->name('sub_ad_re.edit');
		Route::post('update/{id}','Sub_ad_reController@update')->name('sub_ad_re.update');
		Route::get('delete/{id}','Sub_ad_reController@delete')->name('sub_ad_re.delete');
	});

	Route::prefix('product')->group(function () {
		Route::get('list','ProductController@list')->name('product.list');
		Route::get('add','ProductController@add')->name('product.add');
		Route::post('add','ProductController@store')->name('product.add');
		Route::get('edit/{id}','ProductController@edit')->name('product.edit');
		Route::post('update/{id}','ProductController@update')->name('product.update');
		Route::get('delete/{id}','ProductController@delete')->name('product.delete');
	});

	Route::prefix('introduct')->group(function () {
		Route::get('','IntroductController@list');
		Route::get('edit/{id}','IntroductController@edit');
		Route::post('edit/{id}','IntroductController@PostEdit');


		Route::prefix('prize')->group(function () {
			Route::get('','IntroductController@ListPrize');
			Route::get('edit/{id}','IntroductController@EditPrize');
			Route::post('edit/{id}','IntroductController@PostEditPrize');
		});

		Route::prefix('cate_prize')->group(function () {
			Route::get('','IntroductController@ListcatePrize');
			Route::get('edit/{id}','IntroductController@EditcatePrize');
			Route::post('edit/{id}','IntroductController@PostEditcatePrize');
		});

		Route::prefix('cate_prize_new')->group(function () {
			Route::get('','IntroductController@ListcatePrizenew');
			Route::get('edit/{id}','IntroductController@EditcatePrizenew');
			Route::post('edit/{id}','IntroductController@PostEditcatePrizenew');
		});
		


	});




});