<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
         User::factory(3)->create();

        User::create([
            'name' => 'Muhammad Junico',
            'username' =>'JunJun',
            'email' => 'maafganggu10@gmail.com',
            'password' => bcrypt('12345')
        ]);

        // User::create([
        //     'name' => 'Dlin Skuy',
        //     'email' => 'adlinjelek@gmail.com',
        //     'password' => bcrypt('23456')
        // ]);  
        
        Category::create([
            'name' => 'Web Progamming',
            'slug' => 'web-progamming'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

         Post::factory(20)->create();

        // Post::create([
        //    'title' => 'Judul Pertama',
        //    'slug' => 'judul-pertama',
        //    'excerpt' =>'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        //    'body' =>'<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p><p>Ducimus est iste magnam ullam in, officia eaque molestiae quidem quia consequuntur aperiam reiciendis aspernatur odio! Perspiciatis omnis quia asperiores aliquam distinctio fugiat doloremque porro quo possimus doloribus, deserunt obcaecati tenetur officiis autem natus ad ipsam nisi ex quam repudiandae minus ducimus necessitatibus.</p><p> Nostrum, dolore eveniet? Tenetur cupiditate repellendus obcaecati magni quaerat suscipit ullam, illum, vitae ipsa veritatis eum non nisi consequuntur veniam exercitationem molestiae necessitatibus totam quo vero? Aut repellat laborum omnis perferendis, quisquam sed ipsam cumque explicabo sunt magni incidunt laboriosam a iure accusantium. Quis magnam ratione nihil quisquam at, cumque repellat sint labore tenetur voluptatem temporibus ab voluptas tempore, est, iure maiores eveniet reprehenderit nesciunt possimus? Sed molestiae minus nisi asperiores inventore ducimus maxime earum obcaecati, consectetur provident officia fugiat nostrum recusandae.</p><p> Doloremque nulla ipsam ab, neque expedita eveniet voluptate, quos quis, dolor mollitia fugit! Nihil odio laborum ut, unde nesciunt veniam beatae commodi magni repellendus cumque quae? Ipsum.</p>',
        //    'category_id' => 1,
        //    'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' =>'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body' =>'<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p><p>Ducimus est iste magnam ullam in, officia eaque molestiae quidem quia consequuntur aperiam reiciendis aspernatur odio! Perspiciatis omnis quia asperiores aliquam distinctio fugiat doloremque porro quo possimus doloribus, deserunt obcaecati tenetur officiis autem natus ad ipsam nisi ex quam repudiandae minus ducimus necessitatibus.</p><p> Nostrum, dolore eveniet? Tenetur cupiditate repellendus obcaecati magni quaerat suscipit ullam, illum, vitae ipsa veritatis eum non nisi consequuntur veniam exercitationem molestiae necessitatibus totam quo vero? Aut repellat laborum omnis perferendis, quisquam sed ipsam cumque explicabo sunt magni incidunt laboriosam a iure accusantium. Quis magnam ratione nihil quisquam at, cumque repellat sint labore tenetur voluptatem temporibus ab voluptas tempore, est, iure maiores eveniet reprehenderit nesciunt possimus? Sed molestiae minus nisi asperiores inventore ducimus maxime earum obcaecati, consectetur provident officia fugiat nostrum recusandae.</p><p> Doloremque nulla ipsam ab, neque expedita eveniet voluptate, quos quis, dolor mollitia fugit! Nihil odio laborum ut, unde nesciunt veniam beatae commodi magni repellendus cumque quae? Ipsum.</p>',
        //     'category_id' => 1,
        //     'user_id' => 2
        //  ]);

        //  Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' =>'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body' =>'<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p><p>Ducimus est iste magnam ullam in, officia eaque molestiae quidem quia consequuntur aperiam reiciendis aspernatur odio! Perspiciatis omnis quia asperiores aliquam distinctio fugiat doloremque porro quo possimus doloribus, deserunt obcaecati tenetur officiis autem natus ad ipsam nisi ex quam repudiandae minus ducimus necessitatibus.</p><p> Nostrum, dolore eveniet? Tenetur cupiditate repellendus obcaecati magni quaerat suscipit ullam, illum, vitae ipsa veritatis eum non nisi consequuntur veniam exercitationem molestiae necessitatibus totam quo vero? Aut repellat laborum omnis perferendis, quisquam sed ipsam cumque explicabo sunt magni incidunt laboriosam a iure accusantium. Quis magnam ratione nihil quisquam at, cumque repellat sint labore tenetur voluptatem temporibus ab voluptas tempore, est, iure maiores eveniet reprehenderit nesciunt possimus? Sed molestiae minus nisi asperiores inventore ducimus maxime earum obcaecati, consectetur provident officia fugiat nostrum recusandae.</p><p> Doloremque nulla ipsam ab, neque expedita eveniet voluptate, quos quis, dolor mollitia fugit! Nihil odio laborum ut, unde nesciunt veniam beatae commodi magni repellendus cumque quae? Ipsum.</p>',
        //     'category_id' => 2,
        //     'user_id' => 1
        //  ]);
    }
}
