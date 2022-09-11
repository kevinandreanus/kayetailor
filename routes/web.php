<?php

use App\AboutUsHomepageText;
use App\blog;
use App\FabricCatalogue;
use App\Http\Controllers\PHPMailerController;
use App\LookBook;
use App\OurCoreValue;
use App\Process;
use App\Service;
use App\ServiceInside;
use App\WoolSlider;
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

// kayepngh
// fsW1kZCWX3zC

Auth::routes([
    'register' => false,
    'reset' => false,
    'verify' => false
]);

Route::get("/email", 'PHPMailerController@email')->name("email");
 
Route::get("/send-email", 'PHPMailerController@composeEmail')->name("send-email");

Route::group(['middleware' => 'auth'], function () {
    Route::get('/admin', function(){

        $countcorevalues = OurCoreValue::orderBy('created_at')->count();

        $wool_slider = WoolSlider::orderBy('order', 'ASC')->get();

        return view('admin.index', compact('countcorevalues', 'wool_slider'));
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
    Route::get('/admin/woolslider/{from}/{to}', 'AdminController@changeOrderWoolSlider');
    Route::post('/admin/woolslider/add', 'AdminController@addWoolSlider');
    Route::get('/admin/wooldelete/{order}', 'AdminController@deleteWoolSlider');
    

    Route::get('/admin/lookbookhomepage/list', 'AdminController@lookbookHomepageList');
    Route::get('/admin/lookbookhomepage/{id}', 'AdminController@getLookbook');
    Route::post('/admin/lookbookhomepage', 'AdminController@storeLookbookHomepage');

    Route::post('/admin/blogs', 'AdminController@storeBlogs');
    Route::get('/admin/blogs/list', 'AdminController@blogsList');
    Route::get('/admin/blogs/{id}', 'AdminController@getBlogsEach');
    Route::post('/admin/blogs/edit', 'AdminController@editBlog');
    Route::get('/admin/blogs/page/{id}', 'AdminController@editBlogPage');

    Route::post('/admin/addParagraph', 'AdminController@addParagraph');
    Route::post('/admin/addImage', 'AdminController@addImage');

    Route::post('/admin/editServiceMainImageInside', 'AdminController@editServiceMainImageInside');
    Route::post('/admin/editServiceTitle', 'AdminController@editServiceTitle');
    Route::post('/admin/editServiceParagraph', 'AdminController@editServiceParagraph');
    Route::post('/admin/addServiceParagraph', 'AdminController@addServiceParagraph');
    Route::get('/admin/deleteServiceParagraph/{id}', 'AdminController@deleteServiceParagraph');
    Route::post('/admin/editPhotoServicesDesktop', 'AdminController@editPhotoServicesDesktop');
    Route::post('/admin/editPhotoServicesMobile', 'AdminController@editPhotoServicesMobile');
});

Route::get('/admin/topbanner/list', 'AdminController@topBannerList');
Route::get('/admin/blogs/list/top2', 'AdminController@blogsListTop2');
Route::post('/admin/blogs/2more', 'AdminController@blogs2more');
Route::post('/admin/blogs/4more', 'AdminController@blogs4more');

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
    $useragent=$_SERVER['HTTP_USER_AGENT'];

    if(is_numeric(strpos(strtolower($_SERVER["HTTP_USER_AGENT"]), "mobile")) == true){
        $blogs2 = blog::query()->take(2)->orderBy('created_at', 'desc')->get();
        $isMobile = 1;
    }else{
        $blogs2 = blog::query()->take(4)->orderBy('created_at', 'desc')->get();
        $isMobile = 0;
    }
    
    $isIndex = 1;

    return view('index', compact('aboutus', 'corevalue', 'services', 'process', 'fabric', 'lookbook', 'blogs2', 'isMobile', 'isIndex'));
});

Route::get('/services/suit', function () {
    $main_image = Service::find(1);

    $desktop_1 = ServiceInside::where([['service_id', '=', 1], ['type', '=', 'Desktop']])->take(2)->get();
    $desktop_2 = ServiceInside::where([['service_id', '=', 1], ['type', '=', 'Desktop']])->skip(2)->take(3)->get();
    $mobile = ServiceInside::where([['service_id', '=', 1], ['type', '=', 'Mobile']])->get();
    return view('services/suit', compact('main_image', 'desktop_1', 'desktop_2', 'mobile'));
});

Route::get('/services/shirt', function () {
    $main_image = Service::find(2);
    $desktop_1 = ServiceInside::where([['service_id', '=', 2], ['type', '=', 'Desktop']])->take(2)->get();
    $desktop_2 = ServiceInside::where([['service_id', '=', 2], ['type', '=', 'Desktop']])->skip(2)->take(3)->get();
    $mobile = ServiceInside::where([['service_id', '=', 2], ['type', '=', 'Mobile']])->get();
    return view('services/shirt', compact('main_image', 'desktop_1', 'desktop_2', 'mobile'));
});

Route::get('/services/batik', function () {
    $main_image = Service::find(3);
    $desktop_1 = ServiceInside::where([['service_id', '=', 3], ['type', '=', 'Desktop']])->take(2)->get();
    $desktop_2 = ServiceInside::where([['service_id', '=', 3], ['type', '=', 'Desktop']])->skip(2)->take(3)->get();
    $mobile = ServiceInside::where([['service_id', '=', 3], ['type', '=', 'Mobile']])->get();
    return view('services/batik', compact('main_image', 'desktop_1', 'desktop_2', 'mobile'));
});

Route::get('/services/cheongsam', function () {
    $main_image = Service::find(4);
    $desktop_1 = ServiceInside::where([['service_id', '=', 4], ['type', '=', 'Desktop']])->take(2)->get();
    $desktop_2 = ServiceInside::where([['service_id', '=', 4], ['type', '=', 'Desktop']])->skip(2)->take(3)->get();
    $mobile = ServiceInside::where([['service_id', '=', 4], ['type', '=', 'Mobile']])->get();
    return view('services/cheongsam', compact('main_image', 'desktop_1', 'desktop_2', 'mobile'));
});

Route::get('/services/trouser', function () {
    $main_image = Service::find(5);
    $desktop_1 = ServiceInside::where([['service_id', '=', 5], ['type', '=', 'Desktop']])->take(2)->get();
    $desktop_2 = ServiceInside::where([['service_id', '=', 5], ['type', '=', 'Desktop']])->skip(2)->take(3)->get();
    $mobile = ServiceInside::where([['service_id', '=', 5], ['type', '=', 'Mobile']])->get();
    return view('services/trouser', compact('main_image', 'desktop_1', 'desktop_2', 'mobile'));
});

Route::get('/services/alteration', function () {
    $main_image = Service::find(6);
    $desktop_1 = ServiceInside::where([['service_id', '=', 6], ['type', '=', 'Desktop']])->take(2)->get();
    $desktop_2 = ServiceInside::where([['service_id', '=', 6], ['type', '=', 'Desktop']])->skip(2)->take(3)->get();
    $mobile = ServiceInside::where([['service_id', '=', 6], ['type', '=', 'Mobile']])->get();
    return view('services/alteration', compact('main_image', 'desktop_1', 'desktop_2', 'mobile'));
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
    $wool_slider = WoolSlider::orderBy('order', 'ASC')->get();
    return view('fabric_catalogue.wool', compact('wool_slider'));
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