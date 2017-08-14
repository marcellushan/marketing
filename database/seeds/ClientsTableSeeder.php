<?php

use Illuminate\Database\Seeder;

use Faker\Factory as Faker;

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
            $faker = Faker::create();
           for($x = 0; $x <= 10; $x++) {
               $id =DB::table('users')->insertGetId([
//                   'first_name' => str_random(10),
                   'name' => $faker->name,
                   'email' => str_random(10) . '@highlands.edu',
                   'department' => $faker->word,
//                   'password' => str_random(10),
//                   'due_date' => '2017-07-20',
//                   'summary' => 'Sed porttitor lectus nibh. Cras ultricies ligula sed magna dictum porta.
//                    Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;
//                     Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Donec rutrum
//                      congue leo eget malesuada. Vivamus magna justo, lacinia eget consectetur sed, convallis at
//                       tellus. Donec rutrum congue leo eget malesuada.',
                   'created_at' => $faker->date('Y-m-d')
               ]);
               $id =DB::table('service_requests')->insertGetId([
//                   'first_name' => str_random(10),
//                   'last_name' => str_random(10),
//                   'email' => str_random(10) . '@highlands.edu',
//                   'department' => str_random(10),
//                   'phone' => rand(2000000000, 9999999999),
//                   'due_date' => '2017-07-20',
                   'summary' => $faker->paragraph,
                   'created_at' => '2017-07-20',
                   'user_id' => $id
               ]);
               $press_release_id = DB::table('press_releases')->insertGetId([
                   'media_type' => 'Student Feature',
                   'details' => $faker->paragraph,
                   'professional' => $faker->paragraph,
                   'promotional' => 'Requested',
                   'audience' => 'Students',
                   'quote_name_1' => 'John Smith',
                   'quote_email_1' => 'jsmith@home.com',
                   'quote_phone_1' => '7774447777',
                   'created_at' => '2017-07-20',
                   'service_requests_id' => $id
               ]);
               DB::table('comments')->insertGetId([
                   'comment' => 'Service requested',
                   'service' => 'App\PressReleases',
                   'services_id' => $press_release_id,
                   'status' => 'Received',
                   'created_at' => '2017-05-04'
               ]);
                DB::table('design_printings')->insert([
                    'details' => $faker->paragraph,
                    'audience' => 'Community',
                    'payment_type' => 'Credit Card',
                    'job_description' => $faker->paragraph,
                    'copies' => 5,
                    'date_needed' => '07/22/2017',
                    'services_needed' => 'Reprint as is',
                    'color' => 'Color',
                    'image' => 'http://localhost:8888/marketing/public/uploads/605.docx',
                    'created_at' => '2017-07-20',
                    'service_requests_id' => $id

                ]);

            DB::table('photos')->insert([
                'details' => $faker->paragraph,
                'location' => str_random(10),
                'use' => $faker->paragraph,
                'date_needed' => '07/22/2017',
                'start_time' => '12:00 PM',
                'end_time' => '11:00 AM',
                'created_at' => '2017-07-20',
                'service_requests_id' => $id
            ]);

           DB::table('social_media')->insert([
               'details' => $faker->paragraph,
               'request_type' => 'Starting New Page',
               'audience' => 'Community',
               'facebook_text' => 'Donec sollicitudin molestie malesuada. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus.',
               'twitter_text' => 'Donec sollicitudin molestie malesuada. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus.',
               'Name' => 'John Smith',
               'Department' => 'IT',
               'Email' => 'JSmith@highlands.edu',
               'Phone' => '7064563214',
               'Social' => 'Facebook',
               'created_at' => '2017-07-20',
               'service_requests_id' => $id
           ]);

            DB::table('videos')->insert([
            'details' => $faker->paragraph,
            'audience'=> 'Faculty & Staff',
            'purpose' => $faker->paragraph,
            'use' => $faker->paragraph,
            'created_at' => '2017-07-20',
            'service_requests_id' => $id
        ]);

            DB::table('paid_advertisings')->insert([
                'details' => $faker->paragraph,
                'audience'=> 'Community',
                'purpose' => $faker->paragraph,
                'use' => $faker->paragraph,
                'advertising' => 'Social Media',
                'budget' => 1000,
                'created_at' => '2017-07-20',
                'service_requests_id' => $id
            ]);

               DB::table('presentations')->insert([
                   'details' => $faker->paragraph,
                   'audience'=> 'Students',
                   'date_needed' => '07/22/2017',
                   'assistance' => 'Presentation Material',
                   'created_at' => '2017-07-20',
                   'service_requests_id' => $id
               ]);

           DB::table('events')->insert([
               'details' => $faker->paragraph,
               'date_needed' => '07/22/2017',
               'start_time' => '03:30 PM',
               'display' => 'Banners',
               'location' => str_random(10),
               'created_at' => '2017-07-20',
               'service_requests_id' => $id
           ]);

           }
        }
    }

}
