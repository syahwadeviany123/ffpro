<?php

namespace Database\Seeders;

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
        \App\Models\User::factory(5)->create();
        \App\Models\Post::factory(10)->create();
       // User::create([
         //   'name'=>'syahwa deviany',
         //   'email'=>'syahwaneta@gmail.com',
         //   'password'=>bcrypt('123456'),
        //]);
    
        // Post::create([
        //     'user_Id' => 1,
        //     'tittle' => 'posting pertama',
        //     'slug' => 'posting-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit.',
        //     'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iusto architecto beatae. Distinctio impedit ratione consequuntur quaerat asperiores, quae, qui esse nostrum repudiandae repellat in magnam magni fugiat sapiente architecto quia.',
        //   ]);

        //   Post::create([
        //     'user_Id' => 1,
        //     'tittle' => 'posting kedua',
        //     'slug' => 'posting-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit.',
        //     'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iusto architecto beatae. Distinctio impedit ratione consequuntur quaerat asperiores, quae, qui esse nostrum repudiandae repellat in magnam magni fugiat sapiente architecto quia.',
        //   ]);

        //   Post::create([
        //     'user_Id' => 1,
        //     'tittle' => 'posting ketiga',
        //     'slug' => 'posting-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit.',
        //     'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iusto architecto beatae. Distinctio impedit ratione consequuntur quaerat asperiores, quae, qui esse nostrum repudiandae repellat in magnam magni fugiat sapiente architecto quia.',
        //   ]);

        //   Post::create([
        //     'user_Id' => 1,
        //     'tittle' => 'posting keempat',
        //     'slug' => 'posting-keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit.',
        //     'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iusto architecto beatae. Distinctio impedit ratione consequuntur quaerat asperiores, quae, qui esse nostrum repudiandae repellat in magnam magni fugiat sapiente architecto quia.',
        //   ]);

        //   Post::create([
        //     'user_Id' => 1,
        //     'tittle' => 'posting kelima',
        //     'slug' => 'posting-kelima',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit.',
        //     'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iusto architecto beatae. Distinctio impedit ratione consequuntur quaerat asperiores, quae, qui esse nostrum repudiandae repellat in magnam magni fugiat sapiente architecto quia.',
        //   ]);

    }
}
