<?php

use Illuminate\Database\Seeder;

class ServicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([
            'service_type' => str_random(10)
//            'email' => str_random(10).'@gmail.com',
//            'password' => bcrypt('secret'),
        ]);
    }
}
