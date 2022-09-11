<?php

use App\AboutUsHomepageText;
use App\blog;
use App\FabricCatalogue;
use App\LookBook;
use App\OurCoreValue;
use App\Process;
use App\Service;
use App\ServiceInside;
use App\ServiceInsideParagraph;
use App\TopBanner;
use App\User;
use App\WoolSlider;
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
        $services_pic_arr = ['images/services/pic2.png', 'images/services/shirt.PNG', 'images/services/batik.png', 'images/services/cheongsam.png', 'images/services/trouser.png', 'images/services/alteration.png'];
        $service_paragraph_arr = ['For wedding or business occasion, we make modern and classic fit suit. Shirt: Inner for Fullset suit that made from cotton. Tailored & customized for you as well', 'Inner for Fullset suit that made from cotton. Tailored & customized for you as well', 'We provide tailoring for Batik as batik is part of our culture Changsan: We prodivde Sateen Cheongsam for chinese tradition of Sangjit ceremony', 'We prodivde Sateen Cheongsam for chinese tradition of Sangjit ceremony', 'Made by yours truly so you can use as well for business occasion or casual look', "We believe every fabric from Kaye Brother's Tailor deserve more wearing time, whether you are getting bigger or slimmer, we can help re-adjust the size just for you"];
        $service_title_arr = ['Suit', 'Shirt', 'Batik', 'Cheongsam', 'Trouser', 'Alteration'];
        foreach($services_array as $key => $s){
            $new = new Service();
            $new->title = $service_title_arr[$key];
            $new->image_path = $s;
            $new->main_image_path = $services_pic_arr[$key];
            $new->save();
            $p = new ServiceInsideParagraph();
            $p->service_id = $new->id;
            $p->paragraph = $service_paragraph_arr[$key];
            $p->save();
        };
        
        $service_inside_suit_desktop = ['images/services/pic1.png', 'images/services/pic1.png', 'images/services/pic2.png', 'images/services/pic3.png', 'images/services/pic3.png'];
        $service_inside_suit_mobile = ['images/services/pic1.png', 'images/services/pic2.png', 'images/services/pic3.png'];
        $service_alteration = ['images/services/alterpic.png', 'images/services/pic2.png'];
        // Desktop Image Inside Suit
        foreach($service_inside_suit_desktop as $e){
            $i = new ServiceInside();
            $i->service_id = 1;
            $i->type = 'Desktop';
            $i->image_path = $e;
            $i->save();
        }
        // Mobile Image Inside Suit
        foreach($service_inside_suit_mobile as $e){
            $i = new ServiceInside();
            $i->service_id = 1;
            $i->type = 'Mobile';
            $i->image_path = $e;
            $i->save();
        }
        // Desktop Image Inside Shirt
        foreach($service_inside_suit_desktop as $e){
            $i = new ServiceInside();
            $i->service_id = 2;
            $i->type = 'Desktop';
            $i->image_path = $e;
            $i->save();
        }
        // Mobile Image Inside Shirt
        foreach($service_inside_suit_mobile as $e){
            $i = new ServiceInside();
            $i->service_id = 2;
            $i->type = 'Mobile';
            $i->image_path = $e;
            $i->save();
        }
        // Desktop Image Inside Batik
        foreach($service_inside_suit_desktop as $e){
            $i = new ServiceInside();
            $i->service_id = 3;
            $i->type = 'Desktop';
            $i->image_path = $e;
            $i->save();
        }
        // Mobile Image Inside Batik
        foreach($service_inside_suit_mobile as $e){
            $i = new ServiceInside();
            $i->service_id = 3;
            $i->type = 'Mobile';
            $i->image_path = $e;
            $i->save();
        }
        // Desktop Image Inside Cheongsam
        foreach($service_inside_suit_desktop as $e){
            $i = new ServiceInside();
            $i->service_id = 4;
            $i->type = 'Desktop';
            $i->image_path = $e;
            $i->save();
        }
        // Mobile Image Inside Cheongsam
        foreach($service_inside_suit_mobile as $e){
            $i = new ServiceInside();
            $i->service_id = 4;
            $i->type = 'Mobile';
            $i->image_path = $e;
            $i->save();
        }
        // Desktop Image Inside Trouser
        foreach($service_inside_suit_desktop as $e){
            $i = new ServiceInside();
            $i->service_id = 5;
            $i->type = 'Desktop';
            $i->image_path = $e;
            $i->save();
        }
        // Mobile Image Inside Trouser
        foreach($service_inside_suit_mobile as $e){
            $i = new ServiceInside();
            $i->service_id = 5;
            $i->type = 'Mobile';
            $i->image_path = $e;
            $i->save();
        }
        // Desktop Image Inside Alteration
        foreach($service_inside_suit_desktop as $e){
            $i = new ServiceInside();
            $i->service_id = 6;
            $i->type = 'Desktop';
            $i->image_path = $e;
            $i->save();
        }
        // Mobile Image Inside Alteration
        foreach($service_alteration as $e){
            $i = new ServiceInside();
            $i->service_id = 6;
            $i->type = 'Mobile';
            $i->image_path = $e;
            $i->save();
        }


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

        $wslider_arr = ['images/fabric_catalogue/cerruti.png', 'images/fabric_catalogue/zara.png', 'images/fabric_catalogue/h&m.png', 'images/fabric_catalogue/bershka.png', 'images/fabric_catalogue/cerruti.png', 'images/fabric_catalogue/zara.png', 'images/fabric_catalogue/h&m.png', 'images/fabric_catalogue/bershka.png', 'images/fabric_catalogue/cerruti.png', 'images/fabric_catalogue/zara.png', 'images/fabric_catalogue/h&m.png', 'images/fabric_catalogue/bershka.png'];
        for($i = 0; $i < 12; $i++){
            $wslider = new WoolSlider();
            $wslider->order = $i + 1;
            $wslider->image_path = $wslider_arr[$i];
            $wslider->save();
        }
    }
}
