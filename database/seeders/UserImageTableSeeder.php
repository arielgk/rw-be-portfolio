<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserImageTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('user_image')->delete();
        
        \DB::table('user_image')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => 11,
                'image_id' => 37,
                'created_at' => '2022-01-26 23:32:49',
                'updated_at' => '2022-01-26 23:32:49',
            ),
            1 => 
            array (
                'id' => 2,
                'user_id' => 14,
                'image_id' => 56,
                'created_at' => '2022-01-31 16:38:30',
                'updated_at' => '2022-01-31 16:38:30',
            ),
            2 => 
            array (
                'id' => 3,
                'user_id' => 15,
                'image_id' => 65,
                'created_at' => '2022-01-31 18:23:50',
                'updated_at' => '2022-01-31 18:23:50',
            ),
            3 => 
            array (
                'id' => 4,
                'user_id' => 17,
                'image_id' => 86,
                'created_at' => '2022-01-31 23:47:33',
                'updated_at' => '2022-01-31 23:47:33',
            ),
            4 => 
            array (
                'id' => 5,
                'user_id' => 16,
                'image_id' => 104,
                'created_at' => '2022-02-01 02:00:48',
                'updated_at' => '2022-02-01 02:00:48',
            ),
            5 => 
            array (
                'id' => 6,
                'user_id' => 22,
                'image_id' => 139,
                'created_at' => '2022-02-02 19:45:26',
                'updated_at' => '2022-02-02 19:45:26',
            ),
            6 => 
            array (
                'id' => 8,
                'user_id' => 40,
                'image_id' => 173,
                'created_at' => '2022-02-03 20:18:59',
                'updated_at' => '2022-02-03 20:18:59',
            ),
            7 => 
            array (
                'id' => 9,
                'user_id' => 47,
                'image_id' => 312,
                'created_at' => '2022-02-25 23:44:06',
                'updated_at' => '2022-02-25 23:44:06',
            ),
            8 => 
            array (
                'id' => 10,
                'user_id' => 60,
                'image_id' => 346,
                'created_at' => '2022-03-14 18:58:43',
                'updated_at' => '2022-03-14 18:58:43',
            ),
        ));
        
        
    }
}