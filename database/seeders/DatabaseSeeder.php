<?php

namespace Database\Seeders;

use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
          \App\Models\User::factory()->count(1)->create();


//          factory('App\User', 100)->create()->each(function($user){
//             $user->posts()->save(factory('App\Post')->make());
//         });

//     }
// }

        $faker = Faker::create();
    	foreach (range(1, 10) as $index) {
	        DB::table('users')->insert([
                'username' => $faker->username,
	            'name' => $faker->name,
	            'email' => $faker->email,
                'password' => bcrypt('secret'),
              'created_at'=> Carbon::now()->format('Y-m-d H:i:s'),
            ]);

                }
            }
        }


