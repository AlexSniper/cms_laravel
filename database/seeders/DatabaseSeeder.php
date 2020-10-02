<?php

namespace Database\Seeders;

use App\Models\User;
use Faker\Factory as Faker;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
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
         \App\Models\User::factory()->count(1)->create();

    //     $faker = Faker::create();
    // 	foreach (range(1, 10) as $index) {
	//         DB::table('users')->insert([
	//             'name' => $faker->name,
	//             'email' => $faker->email,
    //             'password' => bcrypt('secret'),
    //           'created_at'=> Carbon::now()->format('Y-m-d H:i:s'),
    //         ]);

    // }
}
}
