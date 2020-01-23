<?php

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('admin')->insert([
            'name' => 'Admin Kice Official',
            'username' => 'hello@kiceprogramme.com',
            'password' => bcrypt('bismillah')
        ]);
    }
}
