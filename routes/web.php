<?php

use App\AboutUsHomepageText;
use App\blog;
use App\FabricCatalogue;
use App\LookBook;
use App\OurCoreValue;
use App\Process;
use App\Service;
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

Auth::routes([
    'register' => false,
    'reset' => false,
    'verify' => false
]);

Route::group(['middleware' => 'auth'], function () {
    Route::get('/admin', function(){

        $countcorevalues = OurCoreValue::orderBy('created_at')->count();

        return view('admin.index', compact('countcorevalues'));
    });

    Route::post('/admin/topbanner', 'AdminController@storeTopBanner');
    Route::get('/admin/topbanner/delete/{id}', 'AdminController@deleteTopBanner');
    
    Route::post('/admin/aboutushomepage', 'AdminController@storeAboutUsHomepage');
    Route::get('/admin/aboutushomepage/list', 'AdminController@aboutUsHomepageList');
    Route::get('/admin/aboutushomepage/delete/{id}', 'AdminController@deleteAboutUsHomepage');

    Route::post('/admin/ourcorevalueshomepage', 'AdminController@storeOurCoreValuesHomepage');
    Route::get('/admin/ourcorevalueshomepage/list', 'AdminController@ourCoreValuesHomepageList');
    Route::get('/admin/ourcorevalueshomepage/{id}', 'AdminController@getOurCoreValues');
    
    Route::post('/admin/serviceshomepage', 'AdminController@storeServicesHomepage');
    Route::get('/admin/serviceshomepage/list', 'AdminController@servicesHomepageList');
    Route::get('/admin/serviceshomepage/{id}', 'AdminController@getServices');

    Route::get('/admin/processhomepage/list', 'AdminController@processHomepageList');
    Route::get('/admin/processhomepage/{id}', 'AdminController@getProcess');
    Route::post('/admin/processhomepage', 'AdminController@storeProcessHomepage');

    Route::get('/admin/fabrichomepage/list', 'AdminController@fabricHomepageList');
    Route::get('/admin/fabrichomepage/{id}', 'AdminController@getFabricValues');
    Route::post('/admin/fabrichomepage', 'AdminController@storeFabricHomepage');

    Route::get('/admin/lookbookhomepage/list', 'AdminController@lookbookHomepageList');
    Route::get('/admin/lookbookhomepage/{id}', 'AdminController@getLookbook');
    Route::post('/admin/lookbookhomepage', 'AdminController@storeLookbookHomepage');

    Route::post('/admin/blogs', 'AdminController@storeBlogs');
    Route::get('/admin/blogs/list', 'AdminController@blogsList');
    Route::get('/admin/blogs/{id}', 'AdminController@getBlogsEach');
    Route::get('/admin/blogs/page/{id}', 'AdminController@editBlogPage');

    Route::post('/admin/addParagraph', 'AdminController@addParagraph');
    Route::post('/admin/addImage', 'AdminController@addImage');
});

Route::get('/admin/topbanner/list', 'AdminController@topBannerList');
Route::get('/admin/blogs/list/top2', 'AdminController@blogsListTop2');
Route::post('/admin/blogs/2more', 'AdminController@blogs2more');

Route::get('/blog/{id}', function($id){
    $blog = blog::find($id);

    $content = $blog->contents;

    return view('blog', compact('blog', 'content'));
});

Route::get('/', function () {

    $aboutus = AboutUsHomepageText::orderBy('paragraph')->get();
    $corevalue = OurCoreValue::all();
    $services = Service::all();
    $process = Process::find(1);
    $fabric = FabricCatalogue::all();
    $lookbook = LookBook::all();
    $blogs2 = blog::query()->take(2)->orderBy('created_at', 'desc')->get();

    return view('index', compact('aboutus', 'corevalue', 'services', 'process', 'fabric', 'lookbook', 'blogs2'));
});

Route::get('/services/suit', function () {
    return view('services/suit');
});

Route::get('/services/shirt', function () {
    return view('services/shirt');
});

Route::get('/services/batik', function () {
    return view('services/batik');
});

Route::get('/services/cheongsam', function () {
    return view('services/cheongsam');
});

Route::get('/services/trouser', function () {
    return view('services/trouser');
});

Route::get('/services/alteration', function () {
    return view('services/alteration');
});



Route::get('/lookbook/wedding', function(){
    return view('look_book.wedding');
});
Route::get('/lookbook/daily', function(){
    return view('look_book.daily');
});
Route::get('/lookbook/casual', function(){
    return view('look_book.casual');
});
Route::get('/lookbook/ceremony', function(){
    return view('look_book.ceremony');
});

Route::get('/fabric-catalogue/wool', function(){
    return view('fabric_catalogue.wool');
});
Route::get('/fabric-catalogue/semiwool', function(){
    return view('fabric_catalogue.semiwool');
});
Route::get('/fabric-catalogue/linen', function(){
    return view('fabric_catalogue.linen');
});

Route::get('/testing', function(){
    return view('testing');
});