<?php

use Illuminate\Support\Facades\Route;

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


Route::group(['namespace'=> 'admin', 'middleware' => 'auth:admin'], function() {


        Route::get('/' ,'DashboardController@indexAdmin') -> name('admin.dashboard');


        /*** logo  ****/

        Route::get('addlogo' ,'logoController@logo') -> name('addLogo');

        Route::post('logoPost' ,'logoController@logoPost') -> name('logoPost');

        Route::get('allLogo' ,'logoController@allLogo') -> name('allLogos');

        Route::get('deleteLogo/{logo_id}', 'logoController@deleteLogo')->name('logo.delete');

        Route::get('editLogo/{logo_id}', 'logoController@editLogo') ->name('logo.edit');

        Route::post('UpdateLogo/{logo_id}', 'logoController@UpdateLogo')->name('logo.update');

        /*** logo  ****/



         /*** slider  ****/

         Route::get('addSlider' ,'sliderController@slider') -> name('addSlider');

         Route::post('sliderPost' ,'sliderController@sliderPost') -> name('sliderPost');

         Route::get('allSlider' ,'sliderController@allSlider') -> name('allSlider');

         Route::get('deleteSlider/{slider_id}', 'sliderController@deleteSlider')->name('slider.delete');

         Route::get('editSlider/{slider_id}', 'sliderController@editSlider') ->name('slider.edit');

         Route::post('UpdateSlider/{slider_id}', 'sliderController@UpdateSlider')->name('slider.update');

         /*** slider  ****/



        /*** projects  ****/

        Route::get('addProjects' ,'projectsController@project') -> name('addProjects');

        Route::post('projectPost' ,'projectsController@projectPost') -> name('projectPost');

        Route::get('allProjects' ,'projectsController@allProjects') -> name('allProjects');

        Route::get('deleteProject/{project_id}', 'projectsController@deleteProject')->name('project.delete');

        Route::get('editProject/{project_id}', 'projectsController@editProject') ->name('project.edit');

        Route::post('UpdateProject/{project_id}', 'projectsController@UpdateProject')->name('project.update');

        /*** projects  ****/




        /** news **/

        Route::get('addNews' ,'newsController@news') -> name('addNews');

        Route::post('newsPost' ,'newsController@newsPost') -> name('newsPost');

        Route::get('allNews' ,'newsController@allNews') -> name('allNews');

        Route::get('deleteNews/{news_id}', 'newsController@deleteNews')->name('news.delete');

        Route::get('editNews/{news_id}', 'newsController@editNews') ->name('news.edit');

        Route::post('UpdateNews/{news_id}', 'newsController@UpdateNews')->name('news.update');


        /** end news **/





        /** aboutus **/

        Route::get('addAboutUs' ,'aboutUsController@aboutUs') -> name('addAboutUs');

        Route::post('aboutUsPost' ,'aboutUsController@aboutUsPost') -> name('aboutUsPost');

        Route::get('allAboutUs' ,'aboutUsController@allAboutUs') -> name('allAboutUs');

        Route::get('deleteAboutUs/{about_id}', 'aboutUsController@deleteAboutUs')->name('aboutUs.delete');

        Route::get('editAboutUs/{about_id}', 'aboutUsController@editAboutUs') ->name('aboutUs.edit');

        Route::post('UpdateAboutUs/{about_id}', 'aboutUsController@UpdateAboutUs')->name('aboutUs.update');


        /** end aboutus **/



        /** owners **/

        Route::get('addOwners' ,'ownerController@owners') -> name('addOwners');

        Route::post('ownerPost' ,'ownerController@ownerPost') -> name('ownerPost');

        Route::get('allOwners' ,'ownerController@allOwners') -> name('allOwners');

        Route::get('deleteOwner/{owner_id}', 'ownerController@deleteOwner')->name('owner.delete');

        Route::get('editOwner/{owner_id}', 'ownerController@editOwner') ->name('owner.edit');

        Route::post('UpdateOwner/{owner_id}', 'ownerController@UpdateOwner')->name('owner.update');


        /** end owners **/



        ///// phoneNumbers //////

        Route::get('all-phoneNumbers' ,'phoneNumbersController@allPhones') -> name('allPhoneNumbers');

        Route::get('add-phoneNumbers' ,'phoneNumbersController@phones') -> name('addPhoneNumbers');

        Route::post('phoneNumbersPost' ,'phoneNumbersController@phoneNumbersPost') -> name('phoneNumbersPost');

        Route::get('delete-phone/{phone_id}', 'phoneNumbersController@phoneDelete')->name('phone.delete');

        ///// end phoneNumbers //////


        ///// address //////

        Route::get('all-address' ,'addressController@allAddress') -> name('allAddress');

        Route::get('add-address' ,'addressController@address') -> name('addAddress');

        Route::post('addressPost' ,'addressController@addressPost') -> name('addressPost');

        Route::get('delete-address/{address_id}', 'addressController@deleteAddress')->name('address.delete');

        ///// end address //////



          /** whatsapp num **/

          Route::get('add-whatsapp' ,'whatsNumController@addWhatsNum') -> name('addWhatsNum');

          Route::post('whatsNumPost' ,'whatsNumController@whatsNumPost') -> name('whatsNumPost');

          Route::get('allWhatsNum' ,'whatsNumController@allWhatsNum') -> name('allWhatsNum');

          Route::get('deleteWhatsNum/{addWhatsNum_id}', 'whatsNumController@deleteWhatsNum')->name('addWhatsNum.delete');

          Route::get('editWhatsNum/{addWhatsNum_id}', 'whatsNumController@editWhatsNum') ->name('addWhatsNum.edit');

          Route::post('UpdateWhatsNum/{addWhatsNum_id}', 'whatsNumController@UpdateWhatsNum')->name('whatsNum.update');


          /** end whatsapp num  **/



        /** videos **/

        Route::get('addVideos' ,'videosController@video') -> name('addVideos');

        Route::post('videoPost' ,'videosController@videoPost') -> name('videoPost');

        Route::get('allVideos' ,'videosController@allVideos') -> name('allVideos');

        Route::get('deleteVideo/{video_id}', 'videosController@deleteVideo')->name('video.delete');

        Route::get('editVideo/{video_id}', 'videosController@editVideo') ->name('video.edit');

        Route::post('UpdateVideo/{video_id}', 'videosController@UpdateVideo')->name('video.update');


        /** end videos **/



 });




Route::group(['namespace'=> 'admin', 'middleware' => 'guest:admin'], function() {

    Route::get('login' ,'LoginController@getLogin') -> name('login');
    Route::post('login' ,'LoginController@Login') -> name('admin.login');

});


Route::group(['namespace'=> 'admin','middleware' => 'auth:admin'] , function() {

    Route::get('logout' ,'LoginController@logout') -> name('logout');

});
