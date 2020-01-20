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
            'username' => 'kice',
            'password' => bcrypt('bismillah')
        ]);
    }
}
