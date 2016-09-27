<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('posts')->insert([
            'id' => '1',
            'title' => 'RECREATE',
            'body' => 'First poster',
            'slug' => 'page1'
        ]);
        DB::table('users')->insert([
            'id' => '1',
            'name' => 'linh',
            'email' => 'linhhoang_o00o@yahoo.com',
            'password' => '123456'
        ]);
    }
}
