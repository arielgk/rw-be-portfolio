<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LikesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('likes')->delete();
        
        \DB::table('likes')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => 9,
                'post_id' => 9,
                'created_at' => '2022-01-26 19:15:13',
                'updated_at' => '2022-01-26 19:15:13',
            ),
            1 => 
            array (
                'id' => 2,
                'user_id' => 9,
                'post_id' => 10,
                'created_at' => '2022-01-26 19:18:44',
                'updated_at' => '2022-01-26 19:18:44',
            ),
            2 => 
            array (
                'id' => 3,
                'user_id' => 11,
                'post_id' => 9,
                'created_at' => '2022-01-26 23:40:16',
                'updated_at' => '2022-01-26 23:40:16',
            ),
            3 => 
            array (
                'id' => 4,
                'user_id' => 9,
                'post_id' => 13,
                'created_at' => '2022-01-27 02:17:36',
                'updated_at' => '2022-01-27 02:17:36',
            ),
            4 => 
            array (
                'id' => 5,
                'user_id' => 9,
                'post_id' => 12,
                'created_at' => '2022-01-27 02:17:43',
                'updated_at' => '2022-01-27 02:17:43',
            ),
            5 => 
            array (
                'id' => 6,
                'user_id' => 13,
                'post_id' => 5,
                'created_at' => '2022-01-27 14:26:57',
                'updated_at' => '2022-01-27 14:26:57',
            ),
            6 => 
            array (
                'id' => 7,
                'user_id' => 13,
                'post_id' => 12,
                'created_at' => '2022-01-27 14:27:32',
                'updated_at' => '2022-01-27 14:27:32',
            ),
            7 => 
            array (
                'id' => 8,
                'user_id' => 13,
                'post_id' => 14,
                'created_at' => '2022-01-27 14:27:43',
                'updated_at' => '2022-01-27 14:27:43',
            ),
            8 => 
            array (
                'id' => 9,
                'user_id' => 17,
                'post_id' => 22,
                'created_at' => '2022-01-31 23:56:05',
                'updated_at' => '2022-01-31 23:56:05',
            ),
            9 => 
            array (
                'id' => 10,
                'user_id' => 17,
                'post_id' => 21,
                'created_at' => '2022-01-31 23:56:12',
                'updated_at' => '2022-01-31 23:56:12',
            ),
            10 => 
            array (
                'id' => 11,
                'user_id' => 17,
                'post_id' => 20,
                'created_at' => '2022-01-31 23:56:17',
                'updated_at' => '2022-01-31 23:56:17',
            ),
            11 => 
            array (
                'id' => 12,
                'user_id' => 18,
                'post_id' => 22,
                'created_at' => '2022-02-01 00:40:38',
                'updated_at' => '2022-02-01 00:40:38',
            ),
            12 => 
            array (
                'id' => 13,
                'user_id' => 19,
                'post_id' => 19,
                'created_at' => '2022-02-01 01:13:22',
                'updated_at' => '2022-02-01 01:13:22',
            ),
            13 => 
            array (
                'id' => 14,
                'user_id' => 16,
                'post_id' => 24,
                'created_at' => '2022-02-01 01:56:38',
                'updated_at' => '2022-02-01 01:56:38',
            ),
            14 => 
            array (
                'id' => 16,
                'user_id' => 1,
                'post_id' => 26,
                'created_at' => '2022-02-01 16:20:41',
                'updated_at' => '2022-02-01 16:20:41',
            ),
            15 => 
            array (
                'id' => 17,
                'user_id' => 22,
                'post_id' => 26,
                'created_at' => '2022-02-01 16:36:57',
                'updated_at' => '2022-02-01 16:36:57',
            ),
            16 => 
            array (
                'id' => 18,
                'user_id' => 23,
                'post_id' => 15,
                'created_at' => '2022-02-01 18:34:58',
                'updated_at' => '2022-02-01 18:34:58',
            ),
            17 => 
            array (
                'id' => 19,
                'user_id' => 22,
                'post_id' => 9,
                'created_at' => '2022-02-03 17:23:16',
                'updated_at' => '2022-02-03 17:23:16',
            ),
            18 => 
            array (
                'id' => 20,
                'user_id' => 37,
                'post_id' => 38,
                'created_at' => '2022-02-03 19:25:18',
                'updated_at' => '2022-02-03 19:25:18',
            ),
            19 => 
            array (
                'id' => 21,
                'user_id' => 37,
                'post_id' => 36,
                'created_at' => '2022-02-03 19:25:41',
                'updated_at' => '2022-02-03 19:25:41',
            ),
            20 => 
            array (
                'id' => 22,
                'user_id' => 37,
                'post_id' => 35,
                'created_at' => '2022-02-03 19:25:55',
                'updated_at' => '2022-02-03 19:25:55',
            ),
            21 => 
            array (
                'id' => 23,
                'user_id' => 22,
                'post_id' => 38,
                'created_at' => '2022-02-03 19:29:09',
                'updated_at' => '2022-02-03 19:29:09',
            ),
            22 => 
            array (
                'id' => 24,
                'user_id' => 22,
                'post_id' => 25,
                'created_at' => '2022-02-03 19:31:43',
                'updated_at' => '2022-02-03 19:31:43',
            ),
            23 => 
            array (
                'id' => 25,
                'user_id' => 22,
                'post_id' => 22,
                'created_at' => '2022-02-03 19:31:52',
                'updated_at' => '2022-02-03 19:31:52',
            ),
            24 => 
            array (
                'id' => 26,
                'user_id' => 22,
                'post_id' => 21,
                'created_at' => '2022-02-03 19:31:57',
                'updated_at' => '2022-02-03 19:31:57',
            ),
            25 => 
            array (
                'id' => 27,
                'user_id' => 39,
                'post_id' => 39,
                'created_at' => '2022-02-03 19:59:47',
                'updated_at' => '2022-02-03 19:59:47',
            ),
            26 => 
            array (
                'id' => 28,
                'user_id' => 37,
                'post_id' => 47,
                'created_at' => '2022-02-03 20:50:40',
                'updated_at' => '2022-02-03 20:50:40',
            ),
            27 => 
            array (
                'id' => 29,
                'user_id' => 37,
                'post_id' => 46,
                'created_at' => '2022-02-03 20:51:24',
                'updated_at' => '2022-02-03 20:51:24',
            ),
            28 => 
            array (
                'id' => 30,
                'user_id' => 37,
                'post_id' => 45,
                'created_at' => '2022-02-03 20:51:40',
                'updated_at' => '2022-02-03 20:51:40',
            ),
            29 => 
            array (
                'id' => 31,
                'user_id' => 39,
                'post_id' => 56,
                'created_at' => '2022-02-03 23:38:14',
                'updated_at' => '2022-02-03 23:38:14',
            ),
            30 => 
            array (
                'id' => 32,
                'user_id' => 36,
                'post_id' => 57,
                'created_at' => '2022-02-04 17:05:11',
                'updated_at' => '2022-02-04 17:05:11',
            ),
            31 => 
            array (
                'id' => 33,
                'user_id' => 36,
                'post_id' => 54,
                'created_at' => '2022-02-04 17:06:24',
                'updated_at' => '2022-02-04 17:06:24',
            ),
            32 => 
            array (
                'id' => 34,
                'user_id' => 36,
                'post_id' => 55,
                'created_at' => '2022-02-04 17:06:26',
                'updated_at' => '2022-02-04 17:06:26',
            ),
            33 => 
            array (
                'id' => 35,
                'user_id' => 36,
                'post_id' => 56,
                'created_at' => '2022-02-04 17:06:28',
                'updated_at' => '2022-02-04 17:06:28',
            ),
            34 => 
            array (
                'id' => 36,
                'user_id' => 36,
                'post_id' => 49,
                'created_at' => '2022-02-04 17:07:42',
                'updated_at' => '2022-02-04 17:07:42',
            ),
            35 => 
            array (
                'id' => 37,
                'user_id' => 36,
                'post_id' => 48,
                'created_at' => '2022-02-04 17:08:10',
                'updated_at' => '2022-02-04 17:08:10',
            ),
            36 => 
            array (
                'id' => 39,
                'user_id' => 36,
                'post_id' => 59,
                'created_at' => '2022-02-04 17:36:03',
                'updated_at' => '2022-02-04 17:36:03',
            ),
            37 => 
            array (
                'id' => 40,
                'user_id' => 36,
                'post_id' => 60,
                'created_at' => '2022-02-04 17:36:07',
                'updated_at' => '2022-02-04 17:36:07',
            ),
            38 => 
            array (
                'id' => 41,
                'user_id' => 36,
                'post_id' => 17,
                'created_at' => '2022-02-04 17:51:33',
                'updated_at' => '2022-02-04 17:51:33',
            ),
            39 => 
            array (
                'id' => 42,
                'user_id' => 39,
                'post_id' => 38,
                'created_at' => '2022-02-04 23:46:31',
                'updated_at' => '2022-02-04 23:46:31',
            ),
            40 => 
            array (
                'id' => 43,
                'user_id' => 39,
                'post_id' => 26,
                'created_at' => '2022-02-04 23:46:43',
                'updated_at' => '2022-02-04 23:46:43',
            ),
            41 => 
            array (
                'id' => 44,
                'user_id' => 39,
                'post_id' => 25,
                'created_at' => '2022-02-04 23:46:46',
                'updated_at' => '2022-02-04 23:46:46',
            ),
            42 => 
            array (
                'id' => 45,
                'user_id' => 39,
                'post_id' => 22,
                'created_at' => '2022-02-04 23:47:13',
                'updated_at' => '2022-02-04 23:47:13',
            ),
            43 => 
            array (
                'id' => 46,
                'user_id' => 39,
                'post_id' => 21,
                'created_at' => '2022-02-04 23:47:16',
                'updated_at' => '2022-02-04 23:47:16',
            ),
            44 => 
            array (
                'id' => 47,
                'user_id' => 39,
                'post_id' => 20,
                'created_at' => '2022-02-04 23:47:19',
                'updated_at' => '2022-02-04 23:47:19',
            ),
            45 => 
            array (
                'id' => 48,
                'user_id' => 39,
                'post_id' => 19,
                'created_at' => '2022-02-04 23:47:21',
                'updated_at' => '2022-02-04 23:47:21',
            ),
            46 => 
            array (
                'id' => 50,
                'user_id' => 39,
                'post_id' => 58,
                'created_at' => '2022-02-05 00:05:59',
                'updated_at' => '2022-02-05 00:05:59',
            ),
            47 => 
            array (
                'id' => 52,
                'user_id' => 42,
                'post_id' => 61,
                'created_at' => '2022-02-07 21:49:37',
                'updated_at' => '2022-02-07 21:49:37',
            ),
            48 => 
            array (
                'id' => 53,
                'user_id' => 39,
                'post_id' => 63,
                'created_at' => '2022-02-07 22:07:12',
                'updated_at' => '2022-02-07 22:07:12',
            ),
            49 => 
            array (
                'id' => 54,
                'user_id' => 39,
                'post_id' => 62,
                'created_at' => '2022-02-07 22:07:25',
                'updated_at' => '2022-02-07 22:07:25',
            ),
            50 => 
            array (
                'id' => 55,
                'user_id' => 44,
                'post_id' => 61,
                'created_at' => '2022-02-07 23:52:37',
                'updated_at' => '2022-02-07 23:52:37',
            ),
            51 => 
            array (
                'id' => 58,
                'user_id' => 44,
                'post_id' => 63,
                'created_at' => '2022-02-08 00:01:28',
                'updated_at' => '2022-02-08 00:01:28',
            ),
            52 => 
            array (
                'id' => 59,
                'user_id' => 44,
                'post_id' => 64,
                'created_at' => '2022-02-08 00:03:51',
                'updated_at' => '2022-02-08 00:03:51',
            ),
            53 => 
            array (
                'id' => 60,
                'user_id' => 44,
                'post_id' => 62,
                'created_at' => '2022-02-08 00:04:31',
                'updated_at' => '2022-02-08 00:04:31',
            ),
            54 => 
            array (
                'id' => 63,
                'user_id' => 42,
                'post_id' => 64,
                'created_at' => '2022-02-08 19:23:45',
                'updated_at' => '2022-02-08 19:23:45',
            ),
            55 => 
            array (
                'id' => 64,
                'user_id' => 45,
                'post_id' => 65,
                'created_at' => '2022-02-08 20:29:27',
                'updated_at' => '2022-02-08 20:29:27',
            ),
            56 => 
            array (
                'id' => 65,
                'user_id' => 42,
                'post_id' => 65,
                'created_at' => '2022-02-09 23:11:46',
                'updated_at' => '2022-02-09 23:11:46',
            ),
            57 => 
            array (
                'id' => 66,
                'user_id' => 47,
                'post_id' => 61,
                'created_at' => '2022-02-25 23:42:59',
                'updated_at' => '2022-02-25 23:42:59',
            ),
            58 => 
            array (
                'id' => 67,
                'user_id' => 47,
                'post_id' => 65,
                'created_at' => '2022-03-02 17:06:42',
                'updated_at' => '2022-03-02 17:06:42',
            ),
            59 => 
            array (
                'id' => 69,
                'user_id' => 1,
                'post_id' => 46,
                'created_at' => '2022-03-11 21:40:05',
                'updated_at' => '2022-03-11 21:40:05',
            ),
            60 => 
            array (
                'id' => 72,
                'user_id' => 1,
                'post_id' => 73,
                'created_at' => '2022-03-12 04:38:24',
                'updated_at' => '2022-03-12 04:38:24',
            ),
            61 => 
            array (
                'id' => 75,
                'user_id' => 1,
                'post_id' => 69,
                'created_at' => '2022-03-12 04:39:16',
                'updated_at' => '2022-03-12 04:39:16',
            ),
            62 => 
            array (
                'id' => 76,
                'user_id' => 1,
                'post_id' => 66,
                'created_at' => '2022-03-12 04:41:43',
                'updated_at' => '2022-03-12 04:41:43',
            ),
            63 => 
            array (
                'id' => 77,
                'user_id' => 1,
                'post_id' => 68,
                'created_at' => '2022-03-12 05:09:51',
                'updated_at' => '2022-03-12 05:09:51',
            ),
            64 => 
            array (
                'id' => 79,
                'user_id' => 60,
                'post_id' => 73,
                'created_at' => '2022-03-14 21:34:19',
                'updated_at' => '2022-03-14 21:34:19',
            ),
            65 => 
            array (
                'id' => 80,
                'user_id' => 60,
                'post_id' => 72,
                'created_at' => '2022-03-14 21:34:32',
                'updated_at' => '2022-03-14 21:34:32',
            ),
            66 => 
            array (
                'id' => 81,
                'user_id' => 62,
                'post_id' => 77,
                'created_at' => '2022-03-15 00:10:09',
                'updated_at' => '2022-03-15 00:10:09',
            ),
            67 => 
            array (
                'id' => 82,
                'user_id' => 62,
                'post_id' => 76,
                'created_at' => '2022-03-15 00:11:18',
                'updated_at' => '2022-03-15 00:11:18',
            ),
            68 => 
            array (
                'id' => 83,
                'user_id' => 62,
                'post_id' => 75,
                'created_at' => '2022-03-15 00:11:48',
                'updated_at' => '2022-03-15 00:11:48',
            ),
            69 => 
            array (
                'id' => 84,
                'user_id' => 61,
                'post_id' => 77,
                'created_at' => '2022-03-15 00:20:04',
                'updated_at' => '2022-03-15 00:20:04',
            ),
            70 => 
            array (
                'id' => 86,
                'user_id' => 3,
                'post_id' => 78,
                'created_at' => '2022-03-17 19:12:03',
                'updated_at' => '2022-03-17 19:12:03',
            ),
            71 => 
            array (
                'id' => 87,
                'user_id' => 3,
                'post_id' => 78,
                'created_at' => '2022-03-17 19:12:03',
                'updated_at' => '2022-03-17 19:12:03',
            ),
            72 => 
            array (
                'id' => 88,
                'user_id' => 3,
                'post_id' => 77,
                'created_at' => '2022-03-17 19:12:14',
                'updated_at' => '2022-03-17 19:12:14',
            ),
            73 => 
            array (
                'id' => 89,
                'user_id' => 3,
                'post_id' => 79,
                'created_at' => '2022-03-17 19:13:04',
                'updated_at' => '2022-03-17 19:13:04',
            ),
            74 => 
            array (
                'id' => 90,
                'user_id' => 3,
                'post_id' => 75,
                'created_at' => '2022-03-17 19:13:22',
                'updated_at' => '2022-03-17 19:13:22',
            ),
            75 => 
            array (
                'id' => 91,
                'user_id' => 65,
                'post_id' => 77,
                'created_at' => '2022-03-18 17:50:42',
                'updated_at' => '2022-03-18 17:50:42',
            ),
            76 => 
            array (
                'id' => 92,
                'user_id' => 66,
                'post_id' => 76,
                'created_at' => '2022-03-22 21:22:59',
                'updated_at' => '2022-03-22 21:22:59',
            ),
            77 => 
            array (
                'id' => 95,
                'user_id' => 67,
                'post_id' => 85,
                'created_at' => '2022-03-23 16:30:37',
                'updated_at' => '2022-03-23 16:30:37',
            ),
            78 => 
            array (
                'id' => 96,
                'user_id' => 67,
                'post_id' => 79,
                'created_at' => '2022-03-23 16:31:39',
                'updated_at' => '2022-03-23 16:31:39',
            ),
            79 => 
            array (
                'id' => 97,
                'user_id' => 4,
                'post_id' => 87,
                'created_at' => '2022-03-29 20:02:19',
                'updated_at' => '2022-03-29 20:02:19',
            ),
            80 => 
            array (
                'id' => 98,
                'user_id' => 71,
                'post_id' => 88,
                'created_at' => '2022-03-29 20:26:17',
                'updated_at' => '2022-03-29 20:26:17',
            ),
            81 => 
            array (
                'id' => 99,
                'user_id' => 71,
                'post_id' => 86,
                'created_at' => '2022-03-29 20:26:55',
                'updated_at' => '2022-03-29 20:26:55',
            ),
            82 => 
            array (
                'id' => 100,
                'user_id' => 4,
                'post_id' => 61,
                'created_at' => '2022-03-29 21:39:31',
                'updated_at' => '2022-03-29 21:39:31',
            ),
            83 => 
            array (
                'id' => 102,
                'user_id' => 1,
                'post_id' => 128,
                'created_at' => '2022-04-05 18:16:54',
                'updated_at' => '2022-04-05 18:16:54',
            ),
            84 => 
            array (
                'id' => 103,
                'user_id' => 1,
                'post_id' => 127,
                'created_at' => '2022-04-05 18:17:15',
                'updated_at' => '2022-04-05 18:17:15',
            ),
            85 => 
            array (
                'id' => 104,
                'user_id' => 1,
                'post_id' => 126,
                'created_at' => '2022-04-05 18:17:34',
                'updated_at' => '2022-04-05 18:17:34',
            ),
            86 => 
            array (
                'id' => 105,
                'user_id' => 1,
                'post_id' => 125,
                'created_at' => '2022-04-05 18:17:54',
                'updated_at' => '2022-04-05 18:17:54',
            ),
            87 => 
            array (
                'id' => 106,
                'user_id' => 1,
                'post_id' => 124,
                'created_at' => '2022-04-05 18:18:10',
                'updated_at' => '2022-04-05 18:18:10',
            ),
            88 => 
            array (
                'id' => 107,
                'user_id' => 1,
                'post_id' => 123,
                'created_at' => '2022-04-05 18:20:10',
                'updated_at' => '2022-04-05 18:20:10',
            ),
            89 => 
            array (
                'id' => 108,
                'user_id' => 1,
                'post_id' => 122,
                'created_at' => '2022-04-05 18:20:39',
                'updated_at' => '2022-04-05 18:20:39',
            ),
            90 => 
            array (
                'id' => 109,
                'user_id' => 1,
                'post_id' => 121,
                'created_at' => '2022-04-05 18:23:06',
                'updated_at' => '2022-04-05 18:23:06',
            ),
            91 => 
            array (
                'id' => 113,
                'user_id' => 66,
                'post_id' => 125,
                'created_at' => '2022-04-05 22:27:18',
                'updated_at' => '2022-04-05 22:27:18',
            ),
            92 => 
            array (
                'id' => 117,
                'user_id' => 74,
                'post_id' => 126,
                'created_at' => '2022-04-05 22:46:22',
                'updated_at' => '2022-04-05 22:46:22',
            ),
            93 => 
            array (
                'id' => 119,
                'user_id' => 74,
                'post_id' => 125,
                'created_at' => '2022-04-05 22:48:37',
                'updated_at' => '2022-04-05 22:48:37',
            ),
            94 => 
            array (
                'id' => 120,
                'user_id' => 74,
                'post_id' => 124,
                'created_at' => '2022-04-05 22:49:12',
                'updated_at' => '2022-04-05 22:49:12',
            ),
            95 => 
            array (
                'id' => 123,
                'user_id' => 1,
                'post_id' => 104,
                'created_at' => '2022-04-06 15:31:17',
                'updated_at' => '2022-04-06 15:31:17',
            ),
            96 => 
            array (
                'id' => 124,
                'user_id' => 76,
                'post_id' => 146,
                'created_at' => '2022-04-07 16:13:08',
                'updated_at' => '2022-04-07 16:13:08',
            ),
            97 => 
            array (
                'id' => 125,
                'user_id' => 66,
                'post_id' => 155,
                'created_at' => '2022-04-07 21:14:16',
                'updated_at' => '2022-04-07 21:14:16',
            ),
            98 => 
            array (
                'id' => 127,
                'user_id' => 66,
                'post_id' => 153,
                'created_at' => '2022-04-07 21:14:33',
                'updated_at' => '2022-04-07 21:14:33',
            ),
            99 => 
            array (
                'id' => 128,
                'user_id' => 66,
                'post_id' => 152,
                'created_at' => '2022-04-07 21:16:22',
                'updated_at' => '2022-04-07 21:16:22',
            ),
            100 => 
            array (
                'id' => 129,
                'user_id' => 1,
                'post_id' => 155,
                'created_at' => '2022-04-08 17:38:51',
                'updated_at' => '2022-04-08 17:38:51',
            ),
            101 => 
            array (
                'id' => 130,
                'user_id' => 1,
                'post_id' => 154,
                'created_at' => '2022-04-08 17:38:58',
                'updated_at' => '2022-04-08 17:38:58',
            ),
            102 => 
            array (
                'id' => 131,
                'user_id' => 1,
                'post_id' => 153,
                'created_at' => '2022-04-08 17:39:04',
                'updated_at' => '2022-04-08 17:39:04',
            ),
            103 => 
            array (
                'id' => 132,
                'user_id' => 1,
                'post_id' => 152,
                'created_at' => '2022-04-08 17:39:10',
                'updated_at' => '2022-04-08 17:39:10',
            ),
            104 => 
            array (
                'id' => 133,
                'user_id' => 1,
                'post_id' => 151,
                'created_at' => '2022-04-08 17:39:15',
                'updated_at' => '2022-04-08 17:39:15',
            ),
            105 => 
            array (
                'id' => 134,
                'user_id' => 1,
                'post_id' => 150,
                'created_at' => '2022-04-08 17:39:22',
                'updated_at' => '2022-04-08 17:39:22',
            ),
            106 => 
            array (
                'id' => 135,
                'user_id' => 1,
                'post_id' => 149,
                'created_at' => '2022-04-08 17:39:27',
                'updated_at' => '2022-04-08 17:39:27',
            ),
            107 => 
            array (
                'id' => 138,
                'user_id' => 78,
                'post_id' => 158,
                'created_at' => '2022-04-12 19:42:38',
                'updated_at' => '2022-04-12 19:42:38',
            ),
            108 => 
            array (
                'id' => 139,
                'user_id' => 78,
                'post_id' => 157,
                'created_at' => '2022-04-12 19:43:39',
                'updated_at' => '2022-04-12 19:43:39',
            ),
        ));
        
        
    }
}