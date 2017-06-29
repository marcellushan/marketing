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
                   'email' => str_random(10) . '@highlands.edu',
                   'department' => str_random(10),
                   'phone' => rand(2000000000, 9999999999),
//                   'due_date' => '2017-05-07',
                   'summary' => 'Sed porttitor lectus nibh. Cras ultricies ligula sed magna dictum porta.
                    Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;
                     Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Donec rutrum
                      congue leo eget malesuada. Vivamus magna justo, lacinia eget consectetur sed, convallis at
                       tellus. Donec rutrum congue leo eget malesuada.',
                   'created_at' => '2017-05-07'
               ]);
               $press_release_id = DB::table('press_releases')->insertGetId([
                   'media_type' => 'Student Feature',
                   'details' => str_random(10),
                   'professional' => 'Pellentesque in ipsum id orci porta dapibus. 
                   Proin eget tortor risus. Sed porttitor lectus nibh. Curabitur 
                   aliquet quam id dui posuere blandit. Quisque velit nisi, pretium 
                   ut lacinia in, elementum id enim. Cras ultricies ligula sed magna
                    dictum porta.',
                   'promotional' => 'Requested',
                   'audience' => 'Students',
                   'quote_name_1' => 'John Smith',
                   'quote_email_1' => 'jsmith@home.com',
                   'quote_phone_1' => '7774447777',
                   'clients_id' => $id
               ]);
               DB::table('comments')->insertGetId([
                   'comment' => 'Service requested',
                   'service' => 'App\PressReleases',
                   'services_id' => $press_release_id,
                   'status' => 'Received',
                   'created_at' => '2017-05-04'
               ]);
                DB::table('design_printings')->insert([
                    'details' => 'Donec sollicitudin molestie malesuada. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus.',
                    'clients_id' => $id,
                    'audience' => 'Community',
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
                'details' => 'Donec sollicitudin molestie malesuada. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus.',
                'clients_id' => $id,
                'location' => str_random(10),
                'use' => 'Donec sollicitudin molestie malesuada. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus.',
                'requested_date' => '2017-05-01',
                'start_time' => '12:00 PM',
                'end_time' => '11:00 AM'
            ]);

           DB::table('social_media')->insert([
               'details' => 'Donec sollicitudin molestie malesuada. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus.',
               'request_type' => 'Starting New Page',
               'clients_id' => $id,
               'audience' => 'Community',
               'facebook_text' => 'Donec sollicitudin molestie malesuada. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus.',
               'twitter_text' => 'Donec sollicitudin molestie malesuada. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus.',
               'Name' => 'John Smith',
               'Department' => 'IT',
               'Email' => 'JSmith@highlands.edu',
               'Phone' => '7064563214',
               'Social' => 'Facebook'
           ]);

            DB::table('videos')->insert([
            'details' => 'Donec sollicitudin molestie malesuada. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus.',
            'clients_id' => $id,
            'audience'=> 'Faculty & Staff',
            'purpose' => 'Donec sollicitudin molestie malesuada. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus.',
            'use' => 'Donec sollicitudin molestie malesuada. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus.'
        ]);

            DB::table('paid_advertisings')->insert([
                'details' => 'Donec sollicitudin molestie malesuada. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus.',
                'clients_id' => $id,
                'audience'=> 'Community',
                'purpose' => 'Donec sollicitudin molestie malesuada. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus.',
                'use' => 'Donec sollicitudin molestie malesuada. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus.',
                'advertising' => 'Social Media',
                'budget' => 1000
            ]);

               DB::table('presentations')->insert([
                   'details' => 'Donec sollicitudin molestie malesuada. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus.',
                   'clients_id' => $id,
                   'audience'=> 'Students',
                   'presentation_date' => '2017-05-01',
                   'assistance' => 'Presentation Material'
               ]);

           DB::table('events')->insert([
               'details' => 'Donec sollicitudin molestie malesuada. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus.',
               'clients_id' => $id,
               'event_date' => '2017-05-01',
               'start_time' => '03:30 PM',
               'display' => 'Banners',
               'location' => str_random(10)
           ]);

           }
        }
    }

}
