<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(7)->create();

        // User::create([
        //     'name' => 'Osama',
        //     'email' => 'osama@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        // User::create([
        //     'name' => 'Shiro',
        //     'email' => 'shiro@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        User::factory(7)->create();

        Category::create([
            'name' => 'News',
            'slug' => 'News'
        ]);

        Category::create([
            'name' => 'Event',
            'slug' => 'Event'
        ]);

        Category::create([
            'name' => 'Promo',
            'slug' => 'promo'
        ]);

        Category::create([
            'name' => 'Gift Away',
            'slug' => 'Gift Away',
        ]);

        Post::factory(30)->create();

        // Post::create([
        //     'title' => 'Berita Pertama',
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'slug' => 'Pertama',
        //     'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Enim, aliquam. Ipsam consequuntur est assumenda, ea asperiores rem vero eos blanditiis animi quidem laborum doloremque, quisquam praesentium. Esse repudiandae a ipsa perferendis perspiciatis voluptas inventore pariatur nisi architecto voluptatem totam hic dicta quis consequuntur consectetur, ducimus soluta quasi ipsum aliquam, facere officiis reprehenderit.',
        //     'body' => '<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Enim, aliquam. Ipsam consequuntur est assumenda, ea asperiores rem vero eos blanditiis animi quidem laborum doloremque, quisquam praesentium. Esse repudiandae a ipsa perferendis perspiciatis voluptas inventore pariatur nisi architecto voluptatem totam hic dicta quis consequuntur consectetur, ducimus soluta quasi ipsum aliquam, facere officiis reprehenderit.</p><p>Voluptatibus doloribus, a reiciendis quis inventore aliquam nemo similique sequi maiores quod expedita dicta quas fugit modi nesciunt porro voluptatum voluptates dignissimos reprehenderit sit vero! Ipsam repudiandae doloremque dolorem temporibus debitis voluptatum rerum ab qui nemo vitae? Nisi assumenda quisquam illo quibusdam earum, quis fugit repellendus vitae esse. Impedit consequatur quia blanditiis eaque eum? Dicta rem aspernatur temporibus illo eius.</p><p>Vel sapiente enim blanditiis? Eum quia voluptate itaque cum, placeat voluptatibus blanditiis, quae distinctio ipsum beatae temporibus deserunt aliquam excepturi nobis necessitatibus iste. Nulla ipsam modi qui itaque distinctio quod quis tempora inventore molestias! Consectetur iusto repellendus harum voluptates ab nobis reiciendis explicabo sint perspiciatis ratione vel ipsum quasi exercitationem dolorem, itaque error facere architecto eos, excepturi ex tempora officia deleniti. At similique consequatur illo voluptas rem? Cupiditate vero, vitae porro quasi earum neque accusamus unde! Molestiae tempora reprehenderit vel nobis atque inventore dolorum distinctio amet non adipisci!</p>',
        // ]);

        // Post::create([
        //     'title' => 'Berita Kedua',
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'slug' => 'kedua',
        //     'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Enim, aliquam. Ipsam consequuntur est assumenda, ea asperiores rem vero eos blanditiis animi quidem laborum doloremque, quisquam praesentium. Esse repudiandae a ipsa perferendis perspiciatis voluptas inventore pariatur nisi architecto voluptatem totam hic dicta quis consequuntur consectetur, ducimus soluta quasi ipsum aliquam, facere officiis reprehenderit.',
        //     'body' => '<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Enim, aliquam. Ipsam consequuntur est assumenda, ea asperiores rem vero eos blanditiis animi quidem laborum doloremque, quisquam praesentium. Esse repudiandae a ipsa perferendis perspiciatis voluptas inventore pariatur nisi architecto voluptatem totam hic dicta quis consequuntur consectetur, ducimus soluta quasi ipsum aliquam, facere officiis reprehenderit.</p><p>Voluptatibus doloribus, a reiciendis quis inventore aliquam nemo similique sequi maiores quod expedita dicta quas fugit modi nesciunt porro voluptatum voluptates dignissimos reprehenderit sit vero! Ipsam repudiandae doloremque dolorem temporibus debitis voluptatum rerum ab qui nemo vitae? Nisi assumenda quisquam illo quibusdam earum, quis fugit repellendus vitae esse. Impedit consequatur quia blanditiis eaque eum? Dicta rem aspernatur temporibus illo eius.</p><p>Vel sapiente enim blanditiis? Eum quia voluptate itaque cum, placeat voluptatibus blanditiis, quae distinctio ipsum beatae temporibus deserunt aliquam excepturi nobis necessitatibus iste. Nulla ipsam modi qui itaque distinctio quod quis tempora inventore molestias! Consectetur iusto repellendus harum voluptates ab nobis reiciendis explicabo sint perspiciatis ratione vel ipsum quasi exercitationem dolorem, itaque error facere architecto eos, excepturi ex tempora officia deleniti. At similique consequatur illo voluptas rem? Cupiditate vero, vitae porro quasi earum neque accusamus unde! Molestiae tempora reprehenderit vel nobis atque inventore dolorum distinctio amet non adipisci!</p>',
        // ]);

        // Post::create([
        //     'title' => 'Ceremony pergelaran Mewah',
        //     'category_id' => 2,
        //     'user_id' => 1,
        //     'slug' => 'Event pertama',
        //     'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Enim, aliquam. Ipsam consequuntur est assumenda, ea asperiores rem vero eos blanditiis animi quidem laborum doloremque, quisquam praesentium. Esse repudiandae a ipsa perferendis perspiciatis voluptas inventore pariatur nisi architecto voluptatem totam hic dicta quis consequuntur consectetur, ducimus soluta quasi ipsum aliquam, facere officiis reprehenderit.',
        //     'body' => '<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Enim, aliquam. Ipsam consequuntur est assumenda, ea asperiores rem vero eos blanditiis animi quidem laborum doloremque, quisquam praesentium. Esse repudiandae a ipsa perferendis perspiciatis voluptas inventore pariatur nisi architecto voluptatem totam hic dicta quis consequuntur consectetur, ducimus soluta quasi ipsum aliquam, facere officiis reprehenderit.</p><p>Voluptatibus doloribus, a reiciendis quis inventore aliquam nemo similique sequi maiores quod expedita dicta quas fugit modi nesciunt porro voluptatum voluptates dignissimos reprehenderit sit vero! Ipsam repudiandae doloremque dolorem temporibus debitis voluptatum rerum ab qui nemo vitae? Nisi assumenda quisquam illo quibusdam earum, quis fugit repellendus vitae esse. Impedit consequatur quia blanditiis eaque eum? Dicta rem aspernatur temporibus illo eius.</p><p>Vel sapiente enim blanditiis? Eum quia voluptate itaque cum, placeat voluptatibus blanditiis, quae distinctio ipsum beatae temporibus deserunt aliquam excepturi nobis necessitatibus iste. Nulla ipsam modi qui itaque distinctio quod quis tempora inventore molestias! Consectetur iusto repellendus harum voluptates ab nobis reiciendis explicabo sint perspiciatis ratione vel ipsum quasi exercitationem dolorem, itaque error facere architecto eos, excepturi ex tempora officia deleniti. At similique consequatur illo voluptas rem? Cupiditate vero, vitae porro quasi earum neque accusamus unde! Molestiae tempora reprehenderit vel nobis atque inventore dolorum distinctio amet non adipisci!</p>',
        // ]);

        // Post::create([
        //     'title' => 'Event Bertajuk Pengenalan',
        //     'category_id' => 2,
        //     'user_id' => 2,
        //     'slug' => 'Introduce to may Event',
        //     'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Enim, aliquam. Ipsam consequuntur est assumenda, ea asperiores rem vero eos blanditiis animi quidem laborum doloremque, quisquam praesentium. Esse repudiandae a ipsa perferendis perspiciatis voluptas inventore pariatur nisi architecto voluptatem totam hic dicta quis consequuntur consectetur, ducimus soluta quasi ipsum aliquam, facere officiis reprehenderit.',
        //     'body' => '<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Enim, aliquam. Ipsam consequuntur est assumenda, ea asperiores rem vero eos blanditiis animi quidem laborum doloremque, quisquam praesentium. Esse repudiandae a ipsa perferendis perspiciatis voluptas inventore pariatur nisi architecto voluptatem totam hic dicta quis consequuntur consectetur, ducimus soluta quasi ipsum aliquam, facere officiis reprehenderit.</p><p>Voluptatibus doloribus, a reiciendis quis inventore aliquam nemo similique sequi maiores quod expedita dicta quas fugit modi nesciunt porro voluptatum voluptates dignissimos reprehenderit sit vero! Ipsam repudiandae doloremque dolorem temporibus debitis voluptatum rerum ab qui nemo vitae? Nisi assumenda quisquam illo quibusdam earum, quis fugit repellendus vitae esse. Impedit consequatur quia blanditiis eaque eum? Dicta rem aspernatur temporibus illo eius.</p><p>Vel sapiente enim blanditiis? Eum quia voluptate itaque cum, placeat voluptatibus blanditiis, quae distinctio ipsum beatae temporibus deserunt aliquam excepturi nobis necessitatibus iste. Nulla ipsam modi qui itaque distinctio quod quis tempora inventore molestias! Consectetur iusto repellendus harum voluptates ab nobis reiciendis explicabo sint perspiciatis ratione vel ipsum quasi exercitationem dolorem, itaque error facere architecto eos, excepturi ex tempora officia deleniti. At similique consequatur illo voluptas rem? Cupiditate vero, vitae porro quasi earum neque accusamus unde! Molestiae tempora reprehenderit vel nobis atque inventore dolorum distinctio amet non adipisci!</p>',
        // ]);
    }
}
