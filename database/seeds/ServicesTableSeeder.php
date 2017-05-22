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
            'name' => 'Press Release'

        ]);

        DB::table('services')->insert([
            'name' => 'Design and Printing'

        ]);

        DB::table('services')->insert([
            'name' => 'Photography'

        ]);

        DB::table('services')->insert([
            'name' => 'Social Media'

        ]);

        DB::table('services')->insert([
            'name' => 'Videography'

        ]);

        DB::table('services')->insert([
            'name' => 'Paid Advertising'

        ]);

        DB::table('services')->insert([
            'name' => 'Presentation'

        ]);

        DB::table('services')->insert([
            'name' => 'Event Aid'

        ]);
    }
}
