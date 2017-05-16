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
           for($x = 0; $x <= 10; $x++) {
               $id =DB::table('clients')->insertGetId([
                   'first_name' => str_random(10),
                   'last_name' => str_random(10),
                   'email' => str_random(10) . '@gmail.com',
                   'department' => str_random(10),
                   'phone' => rand(2000000000, 9999999999),
                   'due_date' => '2017-05-07',
                   'summary' => 'Sed porttitor lectus nibh. Cras ultricies ligula sed magna dictum porta.
                    Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;
                     Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Donec rutrum
                      congue leo eget malesuada. Vivamus magna justo, lacinia eget consectetur sed, convallis at
                       tellus. Donec rutrum congue leo eget malesuada.'
               ]);
               DB::table('press_releases')->insert([
                   'student_feature' => 1,
                   'significant' => str_random(10),
                   'professional' => 'Pellentesque in ipsum id orci porta dapibus. 
                   Proin eget tortor risus. Sed porttitor lectus nibh. Curabitur 
                   aliquet quam id dui posuere blandit. Quisque velit nisi, pretium 
                   ut lacinia in, elementum id enim. Cras ultricies ligula sed magna
                    dictum porta.',
                   'promotional' => 'Requested',
                   'students' => 1,
                   'quote_names' => 'Pellentesque in ipsum id orci porta dapibus. 
                   Proin eget tortor risus. Sed porttitor lectus nibh. Curabitur 
                   aliquet quam id dui posuere blandit. Quisque velit nisi, pretium 
                   ut lacinia in, elementum id enim. Cras ultricies ligula sed magna
                    dictum porta.',
                   'quote_emails' => 'Pellentesque in ipsum id orci porta dapibus. 
                   Proin eget tortor risus. Sed porttitor lectus nibh. Curabitur 
                   aliquet quam id dui posuere blandit. Quisque velit nisi, pretium 
                   ut lacinia in, elementum id enim. Cras ultricies ligula sed magna
                    dictum porta.',
                   'quote_phones' => 'Pellentesque in ipsum id orci porta dapibus. 
                   Proin eget tortor risus. Sed porttitor lectus nibh. Curabitur 
                   aliquet quam id dui posuere blandit. Quisque velit nisi, pretium 
                   ut lacinia in, elementum id enim. Cras ultricies ligula sed magna
                    dictum porta.',
                   'clients_id' => $id
               ]);
                DB::table('design_printings')->insert([
                    'needs' => 'Donec sollicitudin molestie malesuada. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus.',
                    'clients_id' => $id,
                    'students' => 1,
                    'payment_type' => 'Credit Card',
                    'job_description' => 'Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. 
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                    Cras ultricies ligula sed magna dictum porta. Pellentesque in ipsum id orci porta dapibus.',
                    'copies' => 5,
                    'date_needed' => '2017-05-01',
                    'services_needed' => 'Reprint as is',
                    'color' => 'Color',
                    'image' => 'http://localhost:8888/marketing/public/uploads/605.docx'

                ]);

            DB::table('photos')->insert([
                'requirements' => 'Donec sollicitudin molestie malesuada. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus.',
                'clients_id' => $id,
                'location' => str_random(10),
                'use' => 'Donec sollicitudin molestie malesuada. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus.',
                'requested_date' => '2017-05-01',
                'start' => '12:00.00',
                'end' => '12:00.00'
            ]);

            DB::table('videos')->insert([
            'requirements' => 'Donec sollicitudin molestie malesuada. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus.',
            'clients_id' => $id,
            'faculty_staff'=> 1,
            'purpose' => 'Donec sollicitudin molestie malesuada. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus.',
            'use' => 'Donec sollicitudin molestie malesuada. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus.'
        ]);

            DB::table('paid_advertisings')->insert([
                'ad_event' => 'Donec sollicitudin molestie malesuada. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus.',
                'clients_id' => $id,
                'community'=> 1,
                'purpose' => 'Donec sollicitudin molestie malesuada. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus.',
                'details' => 'Donec sollicitudin molestie malesuada. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus.',
                'social_media' => 1,
                'budget' => 1000
            ]);

           }
        }
    }

}
