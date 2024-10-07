<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CommentsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('comments')->delete();
        
        \DB::table('comments')->insert(array (
            0 => 
            array (
                'id' => 1,
                'body' => 'looks good',
                'post_id' => 10,
                'user_id' => 9,
                'created_at' => '2022-01-26 19:18:00',
                'updated_at' => '2022-01-26 19:18:00',
            ),
            1 => 
            array (
                'id' => 2,
                'body' => 'test',
                'post_id' => 10,
                'user_id' => 9,
                'created_at' => '2022-01-26 19:18:12',
                'updated_at' => '2022-01-26 19:18:12',
            ),
            2 => 
            array (
                'id' => 3,
                'body' => 'dont see my previous comments',
                'post_id' => 10,
                'user_id' => 9,
                'created_at' => '2022-01-26 19:19:12',
                'updated_at' => '2022-01-26 19:19:12',
            ),
            3 => 
            array (
                'id' => 4,
                'body' => 'test',
                'post_id' => 10,
                'user_id' => 9,
                'created_at' => '2022-01-27 02:15:02',
                'updated_at' => '2022-01-27 02:15:02',
            ),
            4 => 
            array (
                'id' => 5,
                'body' => 'test',
                'post_id' => 13,
                'user_id' => 9,
                'created_at' => '2022-01-27 02:17:04',
                'updated_at' => '2022-01-27 02:17:04',
            ),
            5 => 
            array (
                'id' => 6,
                'body' => 'test',
                'post_id' => 17,
                'user_id' => 16,
                'created_at' => '2022-01-31 21:47:54',
                'updated_at' => '2022-01-31 21:47:54',
            ),
            6 => 
            array (
                'id' => 7,
                'body' => 'test',
                'post_id' => 17,
                'user_id' => 16,
                'created_at' => '2022-01-31 21:50:59',
                'updated_at' => '2022-01-31 21:50:59',
            ),
            7 => 
            array (
                'id' => 8,
                'body' => 'test',
                'post_id' => 20,
                'user_id' => 17,
                'created_at' => '2022-01-31 23:56:52',
                'updated_at' => '2022-01-31 23:56:52',
            ),
            8 => 
            array (
                'id' => 9,
                'body' => 'test',
                'post_id' => 20,
                'user_id' => 17,
                'created_at' => '2022-01-31 23:57:07',
                'updated_at' => '2022-01-31 23:57:07',
            ),
            9 => 
            array (
                'id' => 10,
                'body' => 'nice car',
                'post_id' => 31,
                'user_id' => 23,
                'created_at' => '2022-02-01 18:30:30',
                'updated_at' => '2022-02-01 18:30:30',
            ),
            10 => 
            array (
                'id' => 11,
                'body' => 'nice refrigerator',
                'post_id' => 15,
                'user_id' => 23,
                'created_at' => '2022-02-01 18:35:18',
                'updated_at' => '2022-02-01 18:35:18',
            ),
            11 => 
            array (
                'id' => 12,
                'body' => 'thanks',
                'post_id' => 31,
                'user_id' => 19,
                'created_at' => '2022-02-01 18:49:45',
                'updated_at' => '2022-02-01 18:49:45',
            ),
            12 => 
            array (
                'id' => 13,
                'body' => 'test',
                'post_id' => 38,
                'user_id' => 37,
                'created_at' => '2022-02-03 19:25:26',
                'updated_at' => '2022-02-03 19:25:26',
            ),
            13 => 
            array (
                'id' => 14,
                'body' => 'test',
                'post_id' => 36,
                'user_id' => 37,
                'created_at' => '2022-02-03 19:25:48',
                'updated_at' => '2022-02-03 19:25:48',
            ),
            14 => 
            array (
                'id' => 15,
                'body' => 'test',
                'post_id' => 35,
                'user_id' => 37,
                'created_at' => '2022-02-03 19:26:05',
                'updated_at' => '2022-02-03 19:26:05',
            ),
            15 => 
            array (
                'id' => 16,
                'body' => 'test',
                'post_id' => 38,
                'user_id' => 22,
                'created_at' => '2022-02-03 19:29:18',
                'updated_at' => '2022-02-03 19:29:18',
            ),
            16 => 
            array (
                'id' => 17,
                'body' => 'drnjjb',
                'post_id' => 42,
                'user_id' => 40,
                'created_at' => '2022-02-03 20:21:15',
                'updated_at' => '2022-02-03 20:21:15',
            ),
            17 => 
            array (
                'id' => 18,
                'body' => 'test',
                'post_id' => 47,
                'user_id' => 37,
                'created_at' => '2022-02-03 20:50:49',
                'updated_at' => '2022-02-03 20:50:49',
            ),
            18 => 
            array (
                'id' => 19,
                'body' => 'test',
                'post_id' => 46,
                'user_id' => 37,
                'created_at' => '2022-02-03 20:51:31',
                'updated_at' => '2022-02-03 20:51:31',
            ),
            19 => 
            array (
                'id' => 20,
                'body' => 'micah coming in hot with the selfie',
                'post_id' => 45,
                'user_id' => 37,
                'created_at' => '2022-02-03 20:52:24',
                'updated_at' => '2022-02-03 20:52:24',
            ),
            20 => 
            array (
                'id' => 21,
                'body' => 'test',
                'post_id' => 57,
                'user_id' => 36,
                'created_at' => '2022-02-04 17:05:18',
                'updated_at' => '2022-02-04 17:05:18',
            ),
            21 => 
            array (
                'id' => 22,
                'body' => 'test',
                'post_id' => 58,
                'user_id' => 39,
                'created_at' => '2022-02-04 17:18:51',
                'updated_at' => '2022-02-04 17:18:51',
            ),
            22 => 
            array (
                'id' => 23,
                'body' => 'test',
                'post_id' => 56,
                'user_id' => 36,
                'created_at' => '2022-02-04 17:50:13',
                'updated_at' => '2022-02-04 17:50:13',
            ),
            23 => 
            array (
                'id' => 24,
                'body' => 'test',
                'post_id' => 17,
                'user_id' => 36,
                'created_at' => '2022-02-04 17:51:40',
                'updated_at' => '2022-02-04 17:51:40',
            ),
            24 => 
            array (
                'id' => 25,
                'body' => 'cool',
                'post_id' => 58,
                'user_id' => 39,
                'created_at' => '2022-02-04 23:48:13',
                'updated_at' => '2022-02-04 23:48:13',
            ),
            25 => 
            array (
                'id' => 26,
                'body' => 'test2',
                'post_id' => 60,
                'user_id' => 36,
                'created_at' => '2022-02-05 00:00:55',
                'updated_at' => '2022-02-05 00:00:55',
            ),
            26 => 
            array (
                'id' => 27,
                'body' => 'test2',
                'post_id' => 59,
                'user_id' => 36,
                'created_at' => '2022-02-05 00:01:17',
                'updated_at' => '2022-02-05 00:01:17',
            ),
            27 => 
            array (
                'id' => 28,
                'body' => 'test',
                'post_id' => 58,
                'user_id' => 39,
                'created_at' => '2022-02-05 00:05:07',
                'updated_at' => '2022-02-05 00:05:07',
            ),
            28 => 
            array (
                'id' => 29,
                'body' => '#cooking',
                'post_id' => 57,
                'user_id' => 39,
                'created_at' => '2022-02-05 00:08:08',
                'updated_at' => '2022-02-05 00:08:08',
            ),
            29 => 
            array (
                'id' => 30,
                'body' => 'test',
                'post_id' => 61,
                'user_id' => 42,
                'created_at' => '2022-02-07 18:11:57',
                'updated_at' => '2022-02-07 18:11:57',
            ),
            30 => 
            array (
                'id' => 31,
                'body' => 'test',
                'post_id' => 63,
                'user_id' => 39,
                'created_at' => '2022-02-07 22:07:19',
                'updated_at' => '2022-02-07 22:07:19',
            ),
            31 => 
            array (
                'id' => 32,
                'body' => 'test',
                'post_id' => 62,
                'user_id' => 39,
                'created_at' => '2022-02-07 22:07:35',
                'updated_at' => '2022-02-07 22:07:35',
            ),
            32 => 
            array (
                'id' => 33,
                'body' => 'thanks See',
                'post_id' => 63,
                'user_id' => 44,
                'created_at' => '2022-02-07 23:58:10',
                'updated_at' => '2022-02-07 23:58:10',
            ),
            33 => 
            array (
                'id' => 34,
                'body' => 'test',
                'post_id' => 64,
                'user_id' => 44,
                'created_at' => '2022-02-07 23:59:58',
                'updated_at' => '2022-02-07 23:59:58',
            ),
            34 => 
            array (
                'id' => 35,
                'body' => 'test2',
                'post_id' => 64,
                'user_id' => 44,
                'created_at' => '2022-02-08 00:01:09',
                'updated_at' => '2022-02-08 00:01:09',
            ),
            35 => 
            array (
                'id' => 36,
                'body' => 'test2',
                'post_id' => 63,
                'user_id' => 44,
                'created_at' => '2022-02-08 00:01:37',
                'updated_at' => '2022-02-08 00:01:37',
            ),
            36 => 
            array (
                'id' => 37,
                'body' => 'test3',
                'post_id' => 64,
                'user_id' => 44,
                'created_at' => '2022-02-08 00:04:03',
                'updated_at' => '2022-02-08 00:04:03',
            ),
            37 => 
            array (
                'id' => 38,
                'body' => 'test3',
                'post_id' => 62,
                'user_id' => 44,
                'created_at' => '2022-02-08 00:04:40',
                'updated_at' => '2022-02-08 00:04:40',
            ),
            38 => 
            array (
                'id' => 39,
                'body' => 'test',
                'post_id' => 62,
                'user_id' => 42,
                'created_at' => '2022-02-08 19:03:32',
                'updated_at' => '2022-02-08 19:03:32',
            ),
            39 => 
            array (
                'id' => 40,
                'body' => 'test',
                'post_id' => 64,
                'user_id' => 42,
                'created_at' => '2022-02-08 19:23:58',
                'updated_at' => '2022-02-08 19:23:58',
            ),
            40 => 
            array (
                'id' => 41,
                'body' => 'i like the way you layered that',
                'post_id' => 61,
                'user_id' => 47,
                'created_at' => '2022-02-25 23:43:23',
                'updated_at' => '2022-02-25 23:43:23',
            ),
            41 => 
            array (
                'id' => 42,
                'body' => 'so beautiful',
                'post_id' => 63,
                'user_id' => 47,
                'created_at' => '2022-03-02 16:58:10',
                'updated_at' => '2022-03-02 16:58:10',
            ),
            42 => 
            array (
                'id' => 43,
                'body' => 'test 14 march',
                'post_id' => 61,
                'user_id' => 61,
                'created_at' => '2022-03-14 22:59:41',
                'updated_at' => '2022-03-14 22:59:41',
            ),
            43 => 
            array (
                'id' => 44,
                'body' => 'test2 14 March',
                'post_id' => 61,
                'user_id' => 61,
                'created_at' => '2022-03-14 23:00:01',
                'updated_at' => '2022-03-14 23:00:01',
            ),
            44 => 
            array (
                'id' => 45,
                'body' => 'test 14 March',
                'post_id' => 59,
                'user_id' => 61,
                'created_at' => '2022-03-14 23:00:30',
                'updated_at' => '2022-03-14 23:00:30',
            ),
            45 => 
            array (
                'id' => 46,
                'body' => 'test2 14 March',
                'post_id' => 59,
                'user_id' => 61,
                'created_at' => '2022-03-14 23:00:54',
                'updated_at' => '2022-03-14 23:00:54',
            ),
            46 => 
            array (
                'id' => 47,
                'body' => 'test 14 March',
                'post_id' => 56,
                'user_id' => 61,
                'created_at' => '2022-03-14 23:01:40',
                'updated_at' => '2022-03-14 23:01:40',
            ),
            47 => 
            array (
                'id' => 48,
                'body' => 'test2 14 march',
                'post_id' => 56,
                'user_id' => 61,
                'created_at' => '2022-03-14 23:01:54',
                'updated_at' => '2022-03-14 23:01:54',
            ),
            48 => 
            array (
                'id' => 49,
                'body' => 'cat',
                'post_id' => 76,
                'user_id' => 62,
                'created_at' => '2022-03-15 00:11:28',
                'updated_at' => '2022-03-15 00:11:28',
            ),
            49 => 
            array (
                'id' => 50,
                'body' => 'test',
                'post_id' => 75,
                'user_id' => 62,
                'created_at' => '2022-03-15 00:11:57',
                'updated_at' => '2022-03-15 00:11:57',
            ),
            50 => 
            array (
                'id' => 51,
                'body' => 'thanks for posting',
                'post_id' => 85,
                'user_id' => 67,
                'created_at' => '2022-03-23 16:31:21',
                'updated_at' => '2022-03-23 16:31:21',
            ),
            51 => 
            array (
                'id' => 52,
                'body' => 'is that your scan from Slack?',
                'post_id' => 79,
                'user_id' => 67,
                'created_at' => '2022-03-23 16:32:20',
                'updated_at' => '2022-03-23 16:32:20',
            ),
            52 => 
            array (
                'id' => 53,
                'body' => 'test',
                'post_id' => 86,
                'user_id' => 71,
                'created_at' => '2022-03-29 18:24:20',
                'updated_at' => '2022-03-29 18:24:20',
            ),
            53 => 
            array (
                'id' => 54,
                'body' => 'nice look!',
                'post_id' => 87,
                'user_id' => 4,
                'created_at' => '2022-03-29 20:03:01',
                'updated_at' => '2022-03-29 20:03:01',
            ),
            54 => 
            array (
                'id' => 55,
                'body' => 'cool pic',
                'post_id' => 88,
                'user_id' => 71,
                'created_at' => '2022-03-29 20:26:33',
                'updated_at' => '2022-03-29 20:26:33',
            ),
            55 => 
            array (
                'id' => 56,
                'body' => 'such a good image fir this',
                'post_id' => 93,
                'user_id' => 1,
                'created_at' => '2022-04-04 20:48:25',
                'updated_at' => '2022-04-04 20:48:25',
            ),
            56 => 
            array (
                'id' => 57,
                'body' => 'test',
                'post_id' => 128,
                'user_id' => 1,
                'created_at' => '2022-04-05 18:17:05',
                'updated_at' => '2022-04-05 18:17:05',
            ),
            57 => 
            array (
                'id' => 58,
                'body' => 'test',
                'post_id' => 127,
                'user_id' => 1,
                'created_at' => '2022-04-05 18:17:24',
                'updated_at' => '2022-04-05 18:17:24',
            ),
            58 => 
            array (
                'id' => 59,
                'body' => 'test',
                'post_id' => 126,
                'user_id' => 1,
                'created_at' => '2022-04-05 18:17:45',
                'updated_at' => '2022-04-05 18:17:45',
            ),
            59 => 
            array (
                'id' => 60,
                'body' => 'test',
                'post_id' => 125,
                'user_id' => 1,
                'created_at' => '2022-04-05 18:18:01',
                'updated_at' => '2022-04-05 18:18:01',
            ),
            60 => 
            array (
                'id' => 61,
                'body' => 'asdgg',
                'post_id' => 154,
                'user_id' => 66,
                'created_at' => '2022-04-07 21:19:04',
                'updated_at' => '2022-04-07 21:19:04',
            ),
            61 => 
            array (
                'id' => 62,
                'body' => '12345',
                'post_id' => 163,
                'user_id' => 66,
                'created_at' => '2022-04-12 14:04:41',
                'updated_at' => '2022-04-12 14:04:41',
            ),
            62 => 
            array (
                'id' => 63,
                'body' => 'looks good!',
                'post_id' => 158,
                'user_id' => 78,
                'created_at' => '2022-04-12 19:42:51',
                'updated_at' => '2022-04-12 19:42:51',
            ),
            63 => 
            array (
                'id' => 64,
                'body' => 'wow',
                'post_id' => 157,
                'user_id' => 78,
                'created_at' => '2022-04-12 19:43:49',
                'updated_at' => '2022-04-12 19:43:49',
            ),
        ));
        
        
    }
}