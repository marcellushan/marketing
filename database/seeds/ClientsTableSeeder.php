<?php

use Illuminate\Database\Seeder;

class ClientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        {
//           for($x = 0; $x <= 10; $x++) {
               $id =DB::table('clients')->insertGetId([
                   'first_name' => str_random(10),
                   'email' => str_random(10) . '@gmail.com'
               ]);
               DB::table('press_releases')->insert([
                   'significant' => str_random(10),
                   'clients_id' => $id
               ]);
                DB::table('design_printings')->insert([
                    'needs' => 'Donec sollicitudin molestie malesuada. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus.',
                    'clients_id' => $id,
                    'students' => 1,
                    'payment_type' => 'credit card',
                    'job_description' => 'Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. 
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                    Cras ultricies ligula sed magna dictum porta. Pellentesque in ipsum id orci porta dapibus.',
                    'copies' => 5,
                    'date_needed' => '2017-05-01'

                ]);

//           }
        }
    }

}
