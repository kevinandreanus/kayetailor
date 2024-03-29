<?php

use App\AboutUsHomepageText;
use App\blog;
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
        $service_routes = ['/services/suit', '/services/shirt', '/services/batik', '/services/cheongsam', '/services/trouser', '/services/alteration'];
        foreach($services_array as $key => $s){
            $new = new Service();
            $new->title = $service_title_arr[$key];
            $new->image_path = $s;
            $new->route = $service_routes[$key];
            $new->main_image_path = $services_pic_arr[$key];
            $new->save();
            $p = new ServiceInsideParagraph();
            $p->service_id = $new->id;
            $p->paragraph = $service_paragraph_arr[$key];
            $p->save();
        };
        
        $service_inside_suit_desktop = ['images/services/pic1.png', 'images/services/pic1.png', 'images/services/pic2.png', 'images/services/pic3.png', 'images/services/pic3.png'];
        $service_inside_suit_mobile = ['images/services/pic1.png', 'images/services/pic2.png', 'images/services/pic3.png'];
        $service_alteration = ['images/services/alterpic.PNG', 'images/services/pic2.png'];
        
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

        // Fabric Catalogue Wool
        foreach($service_inside_suit_desktop as $e){
            $i = new FabricInside();
            $i->fabric_catalogue_id = 1;
            $i->type = 'Desktop';
            $i->image_path = $e;
            $i->save();
        }
        foreach($service_inside_suit_mobile as $e){
            $i = new FabricInside();
            $i->fabric_catalogue_id = 1;
            $i->type = 'Mobile';
            $i->image_path = $e;
            $i->save();
        }
        // Fabric Catalogue Semi-Wool
        foreach($service_inside_suit_desktop as $e){
            $i = new FabricInside();
            $i->fabric_catalogue_id = 2;
            $i->type = 'Desktop';
            $i->image_path = $e;
            $i->save();
        }
        foreach($service_inside_suit_mobile as $e){
            $i = new FabricInside();
            $i->fabric_catalogue_id = 2;
            $i->type = 'Mobile';
            $i->image_path = $e;
            $i->save();
        }
        // Fabric Catalogue Linen
        foreach($service_inside_suit_desktop as $e){
            $i = new FabricInside();
            $i->fabric_catalogue_id = 3;
            $i->type = 'Desktop';
            $i->image_path = $e;
            $i->save();
        }
        foreach($service_inside_suit_mobile as $e){
            $i = new FabricInside();
            $i->fabric_catalogue_id = 3;
            $i->type = 'Mobile';
            $i->image_path = $e;
            $i->save();
        }


        $process = new Process();
        $process->image_path = "images/process/11.PNG";
        $process->save();

        $fabric_img_array = ["images/fabric_catalogue/wool.PNG", "images/fabric_catalogue/semiwool.PNG", "images/fabric_catalogue/linen.PNG"];
        $fabric_txt_array = ["Wool", "Semi-Wool", "Linen"];
        $main_img_arr = ['images/fabric_catalogue/wool2.PNG', 'images/fabric_catalogue/semiwool2.PNG', 'images/fabric_catalogue/linen2.PNG'];
        $routes_fabr = ['/fabric-catalogue/wool', '/fabric-catalogue/semiwool', '/fabric-catalogue/linen'];
        $fab_paragraph = ['Wool is one of the most common fabrics for suits. Light weight wools are suitable for tropical climates, on the other side heavy weight wools are great to keep you warm on cold temperature . They are so durable and breathable.', 'Semiwool came from 50-70% wool and mixture from another fabrics. They have soft feeling and good warmth , yet luxurious feels', "Linen is popular for summertime fabric, because linen breathes very easily. It' really suitable for Indonesia's tropical weather"];
        foreach($fabric_img_array as $key => $f){
            $new = new FabricCatalogue();
            $new->image_path = $f;
            $new->main_image_path = $main_img_arr[$key];
            $new->route = $routes_fabr[$key];
            $new->text = $fabric_txt_array[$key];
            $new->save();
            $p = new FabricInsideParagraph();
            $p->fabric_catalogue_id = $new->id;
            $p->paragraph = $fab_paragraph[$key];
            $p->save();
        };

        $lookbook_array = ["images/look_book/wedding.PNG", "images/look_book/daily.PNG", "images/look_book/casual.PNG", "images/look_book/ceremony.PNG"];
        $route_lb = ['/lookbook/wedding', 'lookbook/daily', '/lookbook/casual', '/lookbook/ceremony'];
        $img_ins_lb = ['images/look_book/wedding2.PNG', 'images/look_book/daily2.PNG', 'images/look_book/casual2.PNG', 'images/look_book/ceremony2.PNG'];
        $title_lb = ['Wedding', 'Daily', 'Casual', 'Ceremony'];
        $lb_paragraph = ['Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequatur voluptas at laudantium veritatis nostrum, natus consequuntur magnam ipsa, reiciendis molestias praesentium neque sint similique eos inventore qui officia! Nostrum molestiae voluptate, asperiores odio tempora, dicta ducimus illo culpa, soluta unde facilis corporis in distinctio nemo qui ut error aperiam? Est itaque iste sed quis tempora! Autem, reprehenderit. Sed possimus laborum, dicta est placeat veritatis ratione fugit voluptates molestiae facilis cupiditate odit at explicabo veniam molestias hic laboriosam quae dolorum? Possimus quas, placeat cumque, facere perferendis maiores quisquam tenetur neque fuga quibusdam, adipisci necessitatibus asperiores! Ullam rerum nulla placeat quas natus, inventore distinctio fugit sunt? Eaque quo saepe quis aut reprehenderit, dignissimos vel laudantium laborum debitis temporibus! Eveniet,', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequatur voluptas at laudantium veritatis nostrum, natus consequuntur magnam ipsa, reiciendis molestias praesentium neque sint similique eos inventore qui officia! Nostrum molestiae voluptate, asperiores odio tempora, dicta ducimus illo culpa, soluta unde facilis corporis in distinctio nemo qui ut error aperiam? Est itaque iste sed quis tempora! Autem, reprehenderit. Sed possimus laborum, dicta est placeat veritatis ratione fugit voluptates molestiae facilis cupiditate odit at explicabo veniam molestias hic laboriosam quae dolorum? Possimus quas, placeat cumque, facere perferendis maiores quisquam tenetur neque fuga quibusdam, adipisci necessitatibus asperiores! Ullam rerum nulla placeat quas natus, inventore distinctio fugit sunt? Eaque quo saepe quis aut reprehenderit, dignissimos vel laudantium laborum debitis temporibus! Eveniet,', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequatur voluptas at laudantium veritatis nostrum, natus consequuntur magnam ipsa, reiciendis molestias praesentium neque sint similique eos inventore qui officia! Nostrum molestiae voluptate, asperiores odio tempora, dicta ducimus illo culpa, soluta unde facilis corporis in distinctio nemo qui ut error aperiam? Est itaque iste sed quis tempora! Autem, reprehenderit. Sed possimus laborum, dicta est placeat veritatis ratione fugit voluptates molestiae facilis cupiditate odit at explicabo veniam molestias hic laboriosam quae dolorum? Possimus quas, placeat cumque, facere perferendis maiores quisquam tenetur neque fuga quibusdam, adipisci necessitatibus asperiores! Ullam rerum nulla placeat quas natus, inventore distinctio fugit sunt? Eaque quo saepe quis aut reprehenderit, dignissimos vel laudantium laborum debitis temporibus! Eveniet,', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequatur voluptas at laudantium veritatis nostrum, natus consequuntur magnam ipsa, reiciendis molestias praesentium neque sint similique eos inventore qui officia! Nostrum molestiae voluptate, asperiores odio tempora, dicta ducimus illo culpa, soluta unde facilis corporis in distinctio nemo qui ut error aperiam? Est itaque iste sed quis tempora! Autem, reprehenderit. Sed possimus laborum, dicta est placeat veritatis ratione fugit voluptates molestiae facilis cupiditate odit at explicabo veniam molestias hic laboriosam quae dolorum? Possimus quas, placeat cumque, facere perferendis maiores quisquam tenetur neque fuga quibusdam, adipisci necessitatibus asperiores! Ullam rerum nulla placeat quas natus, inventore distinctio fugit sunt? Eaque quo saepe quis aut reprehenderit, dignissimos vel laudantium laborum debitis temporibus! Eveniet,'];
        $lb_inside_desktop_row_1 = ['images/services/pic1.png', 'images/services/pic1.png', 'images/services/pic1.png', 'images/services/pic1.png', 'images/services/pic1.png', 'images/services/pic1.png'];
        $lb_inside_desktop_row_2 = ['images/services/pic2.png', 'images/services/pic3.png', 'images/services/pic3.png', 'images/services/pic2.png', 'images/services/pic3.png', 'images/services/pic3.png', 'images/services/pic2.png', 'images/services/pic3.png', 'images/services/pic3.png'];
        $lb_inside_mobile = ['images/services/alterpic.PNG', 'images/services/pic2.png', 'images/services/alterpic.PNG', 'images/services/pic2.png', 'images/services/alterpic.PNG', 'images/services/pic2.png'];
        foreach($lookbook_array as $key => $m){
            $new = new LookBook();
            $new->route = $route_lb[$key];
            $new->main_image_path = $img_ins_lb[$key];
            $new->title = $title_lb[$key];
            $new->image_path = $m;
            $new->save();
            $p = new LookBookInsideParagraph();
            $p->look_book_id = $new->id;
            $p->paragraph = $lb_paragraph[$key];
            $p->save();
        }

        // LookBook Wedding
        foreach($lb_inside_desktop_row_1 as $e){
            $i = new LookBookInside();
            $i->look_book_id = 1;
            $i->row_id = 1;
            $i->type = 'Desktop';
            $i->image_path = $e;
            $i->save();
        }
        foreach($lb_inside_desktop_row_2 as $e){
            $i = new LookBookInside();
            $i->look_book_id = 1;
            $i->row_id = 2;
            $i->type = 'Desktop';
            $i->image_path = $e;
            $i->save();
        }
        foreach($lb_inside_mobile as $e){
            $i = new LookBookInside();
            $i->look_book_id = 1;
            $i->type = 'Mobile';
            $i->row_id = 3;
            $i->image_path = $e;
            $i->save();
        }
        // LookBook Daily
        foreach($lb_inside_desktop_row_1 as $e){
            $i = new LookBookInside();
            $i->look_book_id = 2;
            $i->row_id = 1;
            $i->type = 'Desktop';
            $i->image_path = $e;
            $i->save();
        }
        foreach($lb_inside_desktop_row_2 as $e){
            $i = new LookBookInside();
            $i->look_book_id = 2;
            $i->row_id = 2;
            $i->type = 'Desktop';
            $i->image_path = $e;
            $i->save();
        }
        foreach($lb_inside_mobile as $e){
            $i = new LookBookInside();
            $i->look_book_id = 2;
            $i->type = 'Mobile';
            $i->row_id = 3;
            $i->image_path = $e;
            $i->save();
        }
        // LookBook Casual
        foreach($lb_inside_desktop_row_1 as $e){
            $i = new LookBookInside();
            $i->look_book_id = 3;
            $i->row_id = 1;
            $i->type = 'Desktop';
            $i->image_path = $e;
            $i->save();
        }
        foreach($lb_inside_desktop_row_2 as $e){
            $i = new LookBookInside();
            $i->look_book_id = 3;
            $i->row_id = 2;
            $i->type = 'Desktop';
            $i->image_path = $e;
            $i->save();
        }
        foreach($lb_inside_mobile as $e){
            $i = new LookBookInside();
            $i->look_book_id = 3;
            $i->type = 'Mobile';
            $i->row_id = 3;
            $i->image_path = $e;
            $i->save();
        }
        // LookBook Ceremony
        foreach($lb_inside_desktop_row_1 as $e){
            $i = new LookBookInside();
            $i->look_book_id = 4;
            $i->row_id = 1;
            $i->type = 'Desktop';
            $i->image_path = $e;
            $i->save();
        }
        foreach($lb_inside_desktop_row_2 as $e){
            $i = new LookBookInside();
            $i->look_book_id = 4;
            $i->row_id = 2;
            $i->type = 'Desktop';
            $i->image_path = $e;
            $i->save();
        }
        foreach($lb_inside_mobile as $e){
            $i = new LookBookInside();
            $i->look_book_id = 4;
            $i->row_id = 3;
            $i->type = 'Mobile';
            $i->image_path = $e;
            $i->save();
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
