<?php

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
        // $this->call(UsersTableSeeder::class);
        DB::table('users')->insert([
            'name' => "Juan Esteban",
            'email' => 'juan@gmail.com',
            'password' => bcrypt('password'),
            'vuelo_id'=>1
        ]);
    }
}
