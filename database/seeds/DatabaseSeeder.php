<?php

use App\AboutUsHomepageText;
use App\blog;
use App\FabricCatalogue;
use App\LookBook;
use App\OurCoreValue;
use App\Process;
use App\Service;
use App\TopBanner;
use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $admin = new User();
        $admin->email = 'admin@admin.com';
        $admin->password = Hash::make('adminkaye');
        $admin->name = 'Admin';
        $admin->save();

        $banner_array = ['images/carousel_image/1.jpg', 'images/carousel_image/2.jpg', 'images/carousel_image/3.jpg'];

        foreach($banner_array as $b){
            $banner = new TopBanner();
            $banner->image_path = $b;
            $banner->save();
        };

        $about_us_array = ["Founded by two gentlemen who are very passionate about men's fashion, Kaye Brothers wants our customers to become real gentlemen and the best version of themselves. We want to fully engage with our customers to make them completely satisfied with all aspects of their suits.", "Kaye Brothers is a local men's clothing store based in Jakarta, Indonesia. We provide well costume tailored suits and we manufactures our products exclusively for our brand only."];

        foreach($about_us_array as $key => $a){
            $ab = new AboutUsHomepageText();
            $ab->paragraph = $key+1;
            $ab->text = $a;
            $ab->save();
        };

        $core_values_image_array = ["images/core_values/1.PNG", "images/core_values/2.PNG", "images/core_values/3.PNG", "images/core_values/4.PNG"];
        $core_values_text_array = ["", "", "", ""];

        foreach($core_values_image_array as $key => $c){
            $new = new OurCoreValue();
            $new->image_path = $c;
            $new->text = $core_values_text_array[$key];
            $new->save();
        };

        $services_array = ["images/services/5.PNG", "images/services/6.PNG", "images/services/7.PNG", "images/services/8.PNG", "images/services/9.PNG", "images/services/10.PNG"];

        foreach($services_array as $s){
            $new = new Service();
            $new->image_path = $s;
            $new->save();
        };

        $process = new Process();
        $process->image_path = "images/process/11.PNG";
        $process->save();

        $fabric_img_array = ["images/fabric_catalogue/wool.PNG", "images/fabric_catalogue/semiwool.PNG", "images/fabric_catalogue/linen.PNG"];
        $fabric_txt_array = ["Wool", "Semi-Wool", "Linen"];

        foreach($fabric_img_array as $key => $f){
            $new = new FabricCatalogue();
            $new->image_path = $f;
            $new->text = $fabric_txt_array[$key];
            $new->save();
        };

        $lookbook_array = ["images/look_book/wedding.PNG", "images/look_book/daily.PNG", "images/look_book/casual.PNG", "images/look_book/ceremony.PNG"];

        foreach($lookbook_array as $m){
            $new = new LookBook();
            $new->image_path = $m;
            $new->save();
        }

        $blogs_array_frontimage = ["images/blogs/blog1.PNG", "images/blogs/blog2.PNG"];
        $blogs_array_insideimage = ["images/blogs/bloginside1.jpg", "images/blogs/bloginside2.jpg"];
        $blogs_array_title = ["How To Dress Up According Your Body Type", "Tips To Take Care Of Your Shoes"];
        $blogs_array_caption = ["Founded by two gentlemen who are very passionate about men's fashion.", "Founded by two gentlemen who are very passionate about men;s fashion."];
        $blogs_array_date_string = ["14 March 2022", "14 March 2022"];

        foreach($blogs_array_frontimage as $key => $c){
            $new = new blog();
            $new->front_image_path = $c;
            $new->back_image_path = $blogs_array_insideimage[$key];
            $new->title = $blogs_array_title[$key];
            $new->caption = $blogs_array_caption[$key];
            $new->date_string = $blogs_array_date_string[$key];
            $new->save();
        }
    }
}
