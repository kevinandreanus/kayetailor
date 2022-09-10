<?php

namespace App\Http\Controllers;

use App\AboutUsHomepageText;
use App\blog;
use App\BlogContent;
use App\FabricCatalogue;
use App\LookBook;
use App\OurCoreValue;
use App\Process;
use App\Service;
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
        if($from < $to){
            for($i = $from + 1; $i <= $to; $i++){
                $sl = WoolSlider::where('order', $i)->first();
                $sl->order = $i - 1;
                $sl->image_path = $i - 1;
                $sl->save();
            }
            $sl = WoolSlider::where('order', $from)->first();
            $sl->order = $to;
            $sl->save();

            return 1;
        }
        if($from > $to){
            $sl = WoolSlider::where('order', $from)->first();
            $sl->order = $to;
            $sl->save();

            for($i = $from - 1; $i >= $to; $i--){
                $sl = WoolSlider::where('order', $i)->first();
                $sl->order = $i + 1;
                $sl->save();
            }
            
            
            return 2;
        }
    }

    public function addWoolSlider(Request $request)
    {
        $file = $request->file('image');
        $filename = uniqid() . $file->getClientOriginalName();
        $file->move('/home/kayepngh/public_html/images/WoolSlider/', $filename);

        $sl = new WoolSlider();
        $sl->image_path = 'images/WoolSlider/' . $filename;
        $sl->save();

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
