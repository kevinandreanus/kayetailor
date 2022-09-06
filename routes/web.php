<?php

use App\AboutUsHomepageText;
use App\blog;
use App\FabricCatalogue;
use App\Http\Controllers\PHPMailerController;
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

Route::get("/email", 'PHPMailerController@email')->name("email");
 
Route::get("/send-email", 'PHPMailerController@composeEmail')->name("send-email");

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
Route::post('/admin/blogs/4more', 'AdminController@blogs4more');

Route::get('/blog/{id}', function($id){
    $blog = blog::find($id);

    $content = $blog->contents;
    dd($content);

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

    // if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4)))
    // {
        // $blogs2 = blog::query()->take(2)->orderBy('created_at', 'desc')->get();
        // $isMobile = 1;
    // }else{
        // $blogs2 = blog::query()->take(4)->orderBy('created_at', 'desc')->get();
        // $isMobile = 0;
    // }

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