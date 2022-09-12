<?php

namespace App\Http\Controllers;

use App\AboutUsHomepageText;
use App\blog;
use App\BlogContent;
use App\FabricCatalogue;
use App\FabricInside;
use App\FabricInsideParagraph;
use App\LookBook;
use App\LookBookInside;
use App\LookBookInsideParagraph;
use App\OurCoreValue;
use App\Process;
use App\Service;
use App\ServiceInside;
use App\ServiceInsideParagraph;
use App\TopBanner;
use App\WoolSlider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    // Access Token Github (kevinandreanus)
    // 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
    public function topBannerList()
    {
        $data = TopBanner::all();

        foreach($data as $key => $d){
            $d->index = $key+1;
        }
        return ['data' => $data];
    }

    public function storeTopBanner(Request $request)
    {
        $file = $request->file('fileTopBanner');
        $filename = uniqid() . $file->getClientOriginalName();
        $file->move('/home/kayepngh/public_html/images/carousel_image/', $filename);

        $new = new TopBanner();
        $new->image_path = '/images/carousel_image/' . $filename;
        $new->save();

        return redirect()->back();
    }

    public function deleteTopBanner($id)
    {
        $banner = TopBanner::find($id)->delete();

        return redirect()->back();
    }

    public function aboutUsHomepageList()
    {
        $data = AboutUsHomepageText::all();

        return ['data' => $data];
    }

    public function storeAboutUsHomepage(Request $request)
    {
        $text = new AboutUsHomepageText();
        $text->paragraph = $request->paragraph;
        $text->text = $request->text;
        $text->save();

        return redirect()->back();
    }

    public function deleteAboutUsHomepage($id)
    {
        $banner = AboutUsHomepageText::find($id)->delete();

        return redirect()->back();
    }

    public function ourCoreValuesHomepageList()
    {
        $data = OurCoreValue::all();

        foreach($data as $key => $d){
            $d->index = $key+1;
        }

        return ['data' => $data];
    }

    public function storeOurCoreValuesHomepage(Request $request)
    {
        $file = $request->file('image');
        $filename = uniqid() . $file->getClientOriginalName();
        $file->move('/home/kayepngh/public_html/images/core_values/', $filename);

        $edit = OurCoreValue::find($request->id);

        $edit->text = $request->text;
        $edit->image_path = '/images/core_values/' . $filename;
        $edit->save();

        return redirect()->back();
    }

    public function getOurCoreValues($id)
    {
        $data = OurCoreValue::find($id);

        return $data;
    }

    public function servicesHomepageList()
    {
        $data = Service::all();

        foreach($data as $key => $d){
            $d->index = $key+1;
        }

        return ['data' => $data];
    }

    public function storeServicesHomepage(Request $request)
    {
        $file = $request->file('image');
        $filename = uniqid() . $file->getClientOriginalName();
        $file->move('/home/kayepngh/public_html/images/services/', $filename);

        $edit = Service::find($request->id);

        $edit->image_path = 'images/services/' . $filename;
        $edit->save();

        return redirect()->back();
    }

    public function getServices($id)
    {
        $data = Service::find($id);

        return $data;
    }

    public function processHomepageList()
    {
        $data = Process::all();
    
        return ['data' => $data];
    }

    public function storeProcessHomepage(Request $request)
    {
        $file = $request->file('image');
        $filename = uniqid() . $file->getClientOriginalName();
        $file->move('/home/kayepngh/public_html/images/process/', $filename);

        $edit = Process::find($request->id);

        $edit->image_path = 'images/process/' . $filename;
        $edit->save();

        return redirect()->back();
    }

    public function getProcess($id)
    {
        $data = Process::find($id);

        return $data;
    }

    public function fabricHomepageList()
    {
        $data = FabricCatalogue::all();
    
        return ['data' => $data];
    }

    public function changeOrderWoolSlider($from, $to)
    {
        $sli = WoolSlider::where('order', $from)->first();
        if($from < $to){
            for($i = $from + 1; $i <= $to; $i++){
                $sl = WoolSlider::where('order', $i)->first();
                $sl->order = $i - 1;
                $sl->save();
            }
            
            $sli->order = $to;
            $sli->save();

            return 1;
        }
        if($from > $to){
            $sli = WoolSlider::where('order', $from)->first();
            

            for($i = $from - 1; $i >= $to; $i--){
                $sl = WoolSlider::where('order', $i)->first();
                $sl->order = $i + 1;
                $sl->save();
            }

            $sli->order = $to;
            $sli->save();
            
            
            return 2;
        }
    }

    public function addWoolSlider(Request $request)
    {
        $file = $request->file('image');
        $filename = uniqid() . $file->getClientOriginalName();
        $file->move('/home/kayepngh/public_html/images/WoolSlider/', $filename);

        $sl = new WoolSlider();
        // Check Biggest Order
        $biggest = WoolSlider::orderBy('order', 'DESC')->first();
        $sl->order = $biggest->order + 1;
        $sl->image_path = 'images/WoolSlider/' . $filename;
        $sl->save();

        return redirect()->back();
    }

    public function deleteWoolSlider($order)
    {
        $sl = WoolSlider::where('order', $order)->first()->delete();

        return 1;
    }

    public function editServiceMainImageInside(Request $request)
    {
        $file = $request->file('image');
        $filename = uniqid() . $file->getClientOriginalName();
        $file->move('/home/kayepngh/public_html/images/service/inside/', $filename);

        $edit = Service::find($request->id);
        $edit->main_image_path = 'images/service/inside/' . $filename;
        $edit->save();

        return redirect()->back();
    }

    public function editServiceTitle(Request $request)
    {
        $s = Service::find($request->id);
        $s->title = $request->text;
        $s->save();

        return 1;
    }

    public function editServiceParagraph(Request $request)
    {
        $s = ServiceInsideParagraph::find($request->id);
        $s->paragraph = $request->text;
        $s->save();

        return 1;
    }

    public function addServiceParagraph(Request $request)
    {
        $s = new ServiceInsideParagraph();
        $s->service_id = $request->service_id;
        $s->paragraph = $request->text;
        $s->save();

        return $s->id;
    }

    public function deleteServiceParagraph($id)
    {
        ServiceInsideParagraph::find($id)->delete();

        return redirect()->back();
    }

    public function editPhotoServicesDesktop(Request $request)
    {
        $file = $request->file('image');
        $filename = uniqid() . $file->getClientOriginalName();
        $file->move('/home/kayepngh/public_html/images/service/inside/', $filename);

        $s = ServiceInside::find($request->id);
        $s->image_path = 'images/service/inside/' . $filename;
        $s->save();
        
        return redirect()->back();
    }

    public function editFabricMainImageInside(Request $request)
    {
        $file = $request->file('image');
        $filename = uniqid() . $file->getClientOriginalName();
        $file->move('/home/kayepngh/public_html/images/fabric/inside/', $filename);

        $edit = FabricCatalogue::find($request->id);
        $edit->main_image_path = 'images/fabric/inside/' . $filename;
        $edit->save();

        return redirect()->back();
    }

    public function editFabricTitle(Request $request)
    {
        $s = FabricCatalogue::find($request->id);
        $s->title = $request->text;
        $s->save();

        return 1;
    }

    public function editFabricParagraph(Request $request)
    {
        $s = FabricInsideParagraph::find($request->id);
        $s->paragraph = $request->text;
        $s->save();

        return 1;
    }

    public function addFabricParagraph(Request $request)
    {
        $s = new FabricInsideParagraph();
        $s->fabric_catalogue_id = $request->fabric_catalogue_id;
        $s->paragraph = $request->text;
        $s->save();

        return $s->id;
    }

    public function deleteFabricParagraph($id)
    {
        FabricInsideParagraph::find($id)->delete();

        return redirect()->back();
    }

    public function editPhotoFabricsDesktop(Request $request)
    {
        $file = $request->file('image');
        $filename = uniqid() . $file->getClientOriginalName();
        $file->move('/home/kayepngh/public_html/images/fabric/inside/', $filename);

        $s = FabricInside::find($request->id);
        $s->image_path = 'images/fabric/inside/' . $filename;
        $s->save();
        
        return redirect()->back();
    }

    public function storeFabricHomepage(Request $request)
    {
        $file = $request->file('image');
        $filename = uniqid() . $file->getClientOriginalName();
        $file->move('/home/kayepngh/public_html/images/fabric_catalogue/', $filename);

        $edit = FabricCatalogue::find($request->id);

        $edit->text = $request->text;
        $edit->image_path = 'images/fabric_catalogue/' . $filename;
        $edit->save();

        return redirect()->back();
    }

    public function editLookBookMainImageInside(Request $request)
    {
        $file = $request->file('image');
        $filename = uniqid() . $file->getClientOriginalName();
        $file->move('/home/kayepngh/public_html/images/lookbook/inside/', $filename);

        $edit = LookBook::find($request->id);
        $edit->main_image_path = 'images/lookbook/inside/' . $filename;
        $edit->save();

        return redirect()->back();
    }

    public function editLookBookParagraph(Request $request)
    {
        $s = LookBookInsideParagraph::find($request->id);
        $s->paragraph = $request->text;
        $s->save();

        return 1;
    }

    public function addLookBookParagraph(Request $request)
    {
        $s = new LookBookInsideParagraph();
        $s->look_book_id = $request->look_book_id;
        $s->paragraph = $request->text;
        $s->save();

        return $s->id;
    }

    public function deleteLookBookParagraph($id)
    {
        LookBookInsideParagraph::find($id)->delete();

        return redirect()->back();
    }

    public function editPhotoLookBooksDesktop(Request $request)
    {
        $file = $request->file('image');
        $filename = uniqid() . $file->getClientOriginalName();
        $file->move('/home/kayepngh/public_html/images/lookbook/inside/', $filename);

        $s = LookBookInside::find($request->id);
        $s->image_path = 'images/lookbook/inside/' . $filename;
        $s->save();
        
        return redirect()->back();
    }

    public function editLookBookTitle(Request $request)
    {
        $s = LookBook::find($request->id);
        $s->title = $request->text;
        $s->save();

        return 1;
    }

    public function addPhotoLookBookRow1(Request $request)
    {
        $file = $request->file('image');
        $filename = uniqid() . $file->getClientOriginalName();
        $file->move('/home/kayepngh/public_html/images/lookbook/inside/', $filename);

        $s = new LookBookInside();
        $s->row_id = 1;
        $s->look_book_id = $request->id;
        $s->type = 'Desktop';
        $s->image_path = 'images/lookbook/inside/' . $filename;
        $s->save();
        
        return redirect()->back();
    }

    public function addPhotoLookBookRow2(Request $request)
    {
        $file = $request->file('image');
        $filename = uniqid() . $file->getClientOriginalName();
        $file->move('/home/kayepngh/public_html/images/lookbook/inside/', $filename);

        $s = new LookBookInside();
        $s->row_id = 2;
        $s->look_book_id = $request->id;
        $s->type = 'Desktop';
        $s->image_path = 'images/lookbook/inside/' . $filename;
        $s->save();
        
        return redirect()->back();
    }

    public function addPhotoLookBookMobile(Request $request)
    {
        $file = $request->file('image');
        $filename = uniqid() . $file->getClientOriginalName();
        $file->move('/home/kayepngh/public_html/images/lookbook/inside/', $filename);

        $s = new LookBookInside();
        $s->row_id = 3;
        $s->look_book_id = $request->id;
        $s->type = 'Mobile';
        $s->image_path = 'images/lookbook/inside/' . $filename;
        $s->save();
        
        return redirect()->back();
    }

    public function deletePhotoLookBook($id)
    {
        $s = LookBookInside::find($id)->delete();
        return redirect()->back();
    }

    public function getFabricValues($id)
    {
        $data = FabricCatalogue::find($id);

        return $data;
    }

    public function lookbookHomepageList()
    {
        $data = LookBook::all();
    
        return ['data' => $data];
    }

    public function storeLookbookHomepage(Request $request)
    {
        $file = $request->file('image');
        $filename = uniqid() . $file->getClientOriginalName();
        $file->move('/home/kayepngh/public_html/images/lookbook/', $filename);

        $edit = LookBook::find($request->id);

        $edit->image_path = 'images/lookbook/' . $filename;
        $edit->save();

        return redirect()->back();
    }

    public function getLookbook($id)
    {
        $data = LookBook::find($id);

        return $data;
    }

    public function blogsList()
    {
        $data = blog::all();
        
        foreach($data as $key => $d){
            $d->index = $key+1;
        }

        return ['data' => $data];
    }

    public function blogsListTop2()
    {
        return blog::query()->take(2)->orderBy('created_at', 'desc')->get();
    }

    public function blogs2more(Request $request)
    {
        $data = $request->data;
        $validation = implode(",",$data);
        
        $more = DB::select("SELECT * FROM blogs WHERE id not in ($validation) ORDER BY created_at DESC LIMIT 2");

        return $more;
    }

    public function blogs4more(Request $request)
    {
        $data = $request->data;
        $validation = implode(",",$data);
        
        $more = DB::select("SELECT * FROM blogs WHERE id not in ($validation) ORDER BY created_at DESC LIMIT 4");

        return $more;
    }

    public function lb2more(Request $request)
    {
        $mobile = $request->data['mobile'];
        $validation = implode(",",$mobile);
        $look_book_id = $request->data['look_book_id'];
        
        $more_mobile = DB::select("SELECT * FROM look_book_insides WHERE id not in ($validation) AND row_id = 3 AND `type` = 'Mobile' AND look_book_id = $look_book_id ORDER BY created_at DESC LIMIT 2");
        

        return ['mobile' => $more_mobile];
    }

    public function lb5more(Request $request)
    {
        $row_1 = $request->data['row_1'];
        $row_2 = $request->data['row_2'];
        $validation_1 = implode(",",$row_1);
        $validation_2 = implode(",",$row_2);
        $look_book_id = $request->data['look_book_id'];
        
        $more_row_1 = DB::select("SELECT * FROM look_book_insides WHERE id not in ($validation_1) AND row_id = 1 AND `type` = 'Desktop' AND look_book_id = $look_book_id ORDER BY created_at DESC LIMIT 2");
        $more_row_2 = DB::select("SELECT * FROM look_book_insides WHERE id not in ($validation_2) AND row_id = 2 AND `type` = 'Desktop' AND look_book_id = $look_book_id ORDER BY created_at DESC LIMIT 3");

        return ['row_1' => $more_row_1, 'row_2' => $more_row_2];
    }

    public function storeBlogs(Request $request)
    {
        $a = new blog();
        if($request->file('frontimage')){
            $file = $request->file('frontimage');
            $filename = uniqid() . $file->getClientOriginalName();
            $file->move('/home/kayepngh/public_html/images/blogs/', $filename);
            $a->front_image_path = 'images/blogs/' . $filename;
        }

        if($request->file('insideimage')){
            $file2 = $request->file('insideimage');
            $filename2 = uniqid() . $file2->getClientOriginalName();
            $file2->move('/home/kayepngh/public_html/images/blogs/', $filename2);
            $a->back_image_path = 'images/blogs/' . $filename2;
        }

        

        $a->title = $request->title;
        $a->caption = $request->caption;
        $a->date_string = date('d F Y');
        
        
        $a->save();

        return redirect()->back();
    }

    public function getBlogsEach($id)
    {
        blog::find($id)->delete();

        return redirect()->back();
    }

    public function editBlogPage($id)
    {
        $blog = blog::find($id);

        $content = $blog->contents;

        return view('admin.editblogpage', compact('blog', 'content'));
    }

    public function editBlog(Request $request)
    {
        $blog = blog::find($request->id);

        if($request->frontimage){
            $file = $request->file('frontimage');
            $filename = uniqid() . $file->getClientOriginalName();
            $file->move('/home/kayepngh/public_html/images/blogs/', $filename);
            $blog->front_image_path = 'images/blogs/' . $filename;
        }
        if($request->insideimage){
            $file = $request->file('insideimage');
            $filename = uniqid() . $file->getClientOriginalName();
            $file->move('/home/kayepngh/public_html/images/blogs/', $filename);
            $blog->back_image_path = 'images/blogs/' . $filename;
        }

        $blog->title = $request->title;
        $blog->caption = $request->caption;
        
        $blog->save();

        return redirect()->back();
    }

    public function addParagraph(Request $request)
    {
        $a = new BlogContent();
        $a->blog_id = $request->id;
        $a->type = 'paragraph';
        $a->text = $request->paragraph;
        $a->save();

        return redirect()->back();
    }

    public function addImage(Request $request)
    {
        $file = $request->file('image');
        $filename = uniqid() . $file->getClientOriginalName();
        $file->move('/home/kayepngh/public_html/images/blogs/inside/', $filename);

        $a = new BlogContent();
        $a->blog_id = $request->id;
        $a->type = 'image';
        $a->image_path = 'images/blogs/inside/' . $filename;
        $a->save();

        return redirect()->back();
    }
}
