<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RelationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('relations')->delete();
        
        \DB::table('relations')->insert(array (
            0 => 
            array (
                'id' => 1,
                'status' => 'accepted',
                'sender_id' => 11,
                'recipient_id' => 2,
                'created_at' => '2022-01-26 23:49:13',
                'updated_at' => '2022-01-26 23:49:13',
            ),
            1 => 
            array (
                'id' => 2,
                'status' => 'accepted',
                'sender_id' => 12,
                'recipient_id' => 1,
                'created_at' => '2022-01-27 01:48:46',
                'updated_at' => '2022-01-27 01:48:46',
            ),
            2 => 
            array (
                'id' => 3,
                'status' => 'accepted',
                'sender_id' => 9,
                'recipient_id' => 4,
                'created_at' => '2022-01-27 02:15:13',
                'updated_at' => '2022-01-27 02:15:13',
            ),
            3 => 
            array (
                'id' => 4,
                'status' => 'accepted',
                'sender_id' => 9,
                'recipient_id' => 12,
                'created_at' => '2022-01-27 02:16:40',
                'updated_at' => '2022-01-27 02:16:40',
            ),
            4 => 
            array (
                'id' => 5,
                'status' => 'accepted',
                'sender_id' => 9,
                'recipient_id' => 10,
                'created_at' => '2022-01-27 03:21:13',
                'updated_at' => '2022-01-27 03:21:13',
            ),
            5 => 
            array (
                'id' => 6,
                'status' => 'accepted',
                'sender_id' => 9,
                'recipient_id' => 2,
                'created_at' => '2022-01-27 03:21:29',
                'updated_at' => '2022-01-27 03:21:29',
            ),
            6 => 
            array (
                'id' => 7,
                'status' => 'accepted',
                'sender_id' => 9,
                'recipient_id' => 11,
                'created_at' => '2022-01-27 03:32:23',
                'updated_at' => '2022-01-27 03:32:23',
            ),
            7 => 
            array (
                'id' => 8,
                'status' => 'accepted',
                'sender_id' => 1,
                'recipient_id' => 11,
                'created_at' => '2022-01-28 21:13:55',
                'updated_at' => '2022-01-28 21:13:55',
            ),
            8 => 
            array (
                'id' => 9,
                'status' => 'accepted',
                'sender_id' => 1,
                'recipient_id' => 8,
                'created_at' => '2022-01-28 21:14:18',
                'updated_at' => '2022-01-28 21:14:18',
            ),
            9 => 
            array (
                'id' => 10,
                'status' => 'accepted',
                'sender_id' => 1,
                'recipient_id' => 9,
                'created_at' => '2022-01-28 21:14:31',
                'updated_at' => '2022-01-28 21:14:31',
            ),
            10 => 
            array (
                'id' => 11,
                'status' => 'accepted',
                'sender_id' => 16,
                'recipient_id' => 4,
                'created_at' => '2022-01-31 18:58:35',
                'updated_at' => '2022-01-31 18:58:35',
            ),
            11 => 
            array (
                'id' => 13,
                'status' => 'accepted',
                'sender_id' => 16,
                'recipient_id' => 10,
                'created_at' => '2022-02-01 00:03:07',
                'updated_at' => '2022-02-01 00:03:07',
            ),
            12 => 
            array (
                'id' => 14,
                'status' => 'accepted',
                'sender_id' => 16,
                'recipient_id' => 19,
                'created_at' => '2022-02-01 01:55:48',
                'updated_at' => '2022-02-01 01:55:48',
            ),
            13 => 
            array (
                'id' => 15,
                'status' => 'accepted',
                'sender_id' => 22,
                'recipient_id' => 2,
                'created_at' => '2022-02-01 16:48:35',
                'updated_at' => '2022-02-01 16:48:35',
            ),
            14 => 
            array (
                'id' => 16,
                'status' => 'accepted',
                'sender_id' => 22,
                'recipient_id' => 6,
                'created_at' => '2022-02-01 16:48:43',
                'updated_at' => '2022-02-01 16:48:43',
            ),
            15 => 
            array (
                'id' => 17,
                'status' => 'accepted',
                'sender_id' => 22,
                'recipient_id' => 5,
                'created_at' => '2022-02-01 16:48:57',
                'updated_at' => '2022-02-01 16:48:57',
            ),
            16 => 
            array (
                'id' => 18,
                'status' => 'accepted',
                'sender_id' => 22,
                'recipient_id' => 16,
                'created_at' => '2022-02-01 17:11:45',
                'updated_at' => '2022-02-01 17:11:45',
            ),
            17 => 
            array (
                'id' => 19,
                'status' => 'accepted',
                'sender_id' => 1,
                'recipient_id' => 15,
                'created_at' => '2022-02-03 02:09:26',
                'updated_at' => '2022-02-03 02:09:26',
            ),
            18 => 
            array (
                'id' => 20,
                'status' => 'accepted',
                'sender_id' => 1,
                'recipient_id' => 13,
                'created_at' => '2022-02-03 02:09:50',
                'updated_at' => '2022-02-03 02:09:50',
            ),
            19 => 
            array (
                'id' => 21,
                'status' => 'accepted',
                'sender_id' => 35,
                'recipient_id' => 31,
                'created_at' => '2022-02-03 19:12:32',
                'updated_at' => '2022-02-03 19:12:32',
            ),
            20 => 
            array (
                'id' => 22,
                'status' => 'accepted',
                'sender_id' => 35,
                'recipient_id' => 22,
                'created_at' => '2022-02-03 19:13:09',
                'updated_at' => '2022-02-03 19:13:09',
            ),
            21 => 
            array (
                'id' => 23,
                'status' => 'accepted',
                'sender_id' => 35,
                'recipient_id' => 19,
                'created_at' => '2022-02-03 19:13:56',
                'updated_at' => '2022-02-03 19:13:56',
            ),
            22 => 
            array (
                'id' => 24,
                'status' => 'accepted',
                'sender_id' => 37,
                'recipient_id' => 22,
                'created_at' => '2022-02-03 19:22:31',
                'updated_at' => '2022-02-03 19:22:31',
            ),
            23 => 
            array (
                'id' => 25,
                'status' => 'accepted',
                'sender_id' => 35,
                'recipient_id' => 4,
                'created_at' => '2022-02-03 19:22:56',
                'updated_at' => '2022-02-03 19:22:56',
            ),
            24 => 
            array (
                'id' => 26,
                'status' => 'accepted',
                'sender_id' => 22,
                'recipient_id' => 31,
                'created_at' => '2022-02-03 19:29:34',
                'updated_at' => '2022-02-03 19:29:34',
            ),
            25 => 
            array (
                'id' => 27,
                'status' => 'accepted',
                'sender_id' => 38,
                'recipient_id' => 32,
                'created_at' => '2022-02-03 19:35:45',
                'updated_at' => '2022-02-03 19:35:45',
            ),
            26 => 
            array (
                'id' => 28,
                'status' => 'accepted',
                'sender_id' => 40,
                'recipient_id' => 39,
                'created_at' => '2022-02-03 20:24:22',
                'updated_at' => '2022-02-03 20:24:22',
            ),
            27 => 
            array (
                'id' => 29,
                'status' => 'accepted',
                'sender_id' => 40,
                'recipient_id' => 38,
                'created_at' => '2022-02-03 20:24:43',
                'updated_at' => '2022-02-03 20:24:43',
            ),
            28 => 
            array (
                'id' => 30,
                'status' => 'accepted',
                'sender_id' => 40,
                'recipient_id' => 31,
                'created_at' => '2022-02-03 20:25:02',
                'updated_at' => '2022-02-03 20:25:02',
            ),
            29 => 
            array (
                'id' => 31,
                'status' => 'accepted',
                'sender_id' => 37,
                'recipient_id' => 40,
                'created_at' => '2022-02-03 20:52:30',
                'updated_at' => '2022-02-03 20:52:30',
            ),
            30 => 
            array (
                'id' => 32,
                'status' => 'accepted',
                'sender_id' => 4,
                'recipient_id' => 40,
                'created_at' => '2022-02-03 23:15:00',
                'updated_at' => '2022-02-03 23:15:00',
            ),
            31 => 
            array (
                'id' => 33,
                'status' => 'accepted',
                'sender_id' => 4,
                'recipient_id' => 39,
                'created_at' => '2022-02-03 23:15:07',
                'updated_at' => '2022-02-03 23:15:07',
            ),
            32 => 
            array (
                'id' => 34,
                'status' => 'accepted',
                'sender_id' => 4,
                'recipient_id' => 5,
                'created_at' => '2022-02-03 23:15:14',
                'updated_at' => '2022-02-03 23:15:14',
            ),
            33 => 
            array (
                'id' => 35,
                'status' => 'accepted',
                'sender_id' => 39,
                'recipient_id' => 2,
                'created_at' => '2022-02-03 23:59:48',
                'updated_at' => '2022-02-03 23:59:48',
            ),
            34 => 
            array (
                'id' => 36,
                'status' => 'accepted',
                'sender_id' => 39,
                'recipient_id' => 14,
                'created_at' => '2022-02-03 23:59:56',
                'updated_at' => '2022-02-03 23:59:56',
            ),
            35 => 
            array (
                'id' => 37,
                'status' => 'accepted',
                'sender_id' => 39,
                'recipient_id' => 4,
                'created_at' => '2022-02-04 00:00:14',
                'updated_at' => '2022-02-04 00:00:14',
            ),
            36 => 
            array (
                'id' => 38,
                'status' => 'accepted',
                'sender_id' => 39,
                'recipient_id' => 21,
                'created_at' => '2022-02-04 00:00:30',
                'updated_at' => '2022-02-04 00:00:30',
            ),
            37 => 
            array (
                'id' => 40,
                'status' => 'accepted',
                'sender_id' => 39,
                'recipient_id' => 36,
                'created_at' => '2022-02-05 00:05:32',
                'updated_at' => '2022-02-05 00:05:32',
            ),
            38 => 
            array (
                'id' => 41,
                'status' => 'accepted',
                'sender_id' => 43,
                'recipient_id' => 1,
                'created_at' => '2022-02-07 19:50:05',
                'updated_at' => '2022-02-07 19:50:05',
            ),
            39 => 
            array (
                'id' => 42,
                'status' => 'accepted',
                'sender_id' => 43,
                'recipient_id' => 2,
                'created_at' => '2022-02-07 19:50:13',
                'updated_at' => '2022-02-07 19:50:13',
            ),
            40 => 
            array (
                'id' => 43,
                'status' => 'accepted',
                'sender_id' => 43,
                'recipient_id' => 4,
                'created_at' => '2022-02-07 19:50:30',
                'updated_at' => '2022-02-07 19:50:30',
            ),
            41 => 
            array (
                'id' => 44,
                'status' => 'accepted',
                'sender_id' => 43,
                'recipient_id' => 3,
                'created_at' => '2022-02-07 19:50:38',
                'updated_at' => '2022-02-07 19:50:38',
            ),
            42 => 
            array (
                'id' => 45,
                'status' => 'accepted',
                'sender_id' => 43,
                'recipient_id' => 5,
                'created_at' => '2022-02-07 19:50:46',
                'updated_at' => '2022-02-07 19:50:46',
            ),
            43 => 
            array (
                'id' => 46,
                'status' => 'accepted',
                'sender_id' => 43,
                'recipient_id' => 7,
                'created_at' => '2022-02-07 19:51:32',
                'updated_at' => '2022-02-07 19:51:32',
            ),
            44 => 
            array (
                'id' => 47,
                'status' => 'accepted',
                'sender_id' => 43,
                'recipient_id' => 10,
                'created_at' => '2022-02-07 19:51:42',
                'updated_at' => '2022-02-07 19:51:42',
            ),
            45 => 
            array (
                'id' => 48,
                'status' => 'accepted',
                'sender_id' => 43,
                'recipient_id' => 12,
                'created_at' => '2022-02-07 19:51:56',
                'updated_at' => '2022-02-07 19:51:56',
            ),
            46 => 
            array (
                'id' => 49,
                'status' => 'accepted',
                'sender_id' => 43,
                'recipient_id' => 17,
                'created_at' => '2022-02-07 19:52:09',
                'updated_at' => '2022-02-07 19:52:09',
            ),
            47 => 
            array (
                'id' => 50,
                'status' => 'accepted',
                'sender_id' => 43,
                'recipient_id' => 39,
                'created_at' => '2022-02-07 19:52:38',
                'updated_at' => '2022-02-07 19:52:38',
            ),
            48 => 
            array (
                'id' => 51,
                'status' => 'accepted',
                'sender_id' => 42,
                'recipient_id' => 44,
                'created_at' => '2022-02-08 19:07:28',
                'updated_at' => '2022-02-08 19:07:28',
            ),
            49 => 
            array (
                'id' => 52,
                'status' => 'accepted',
                'sender_id' => 42,
                'recipient_id' => 4,
                'created_at' => '2022-02-08 19:21:44',
                'updated_at' => '2022-02-08 19:21:44',
            ),
            50 => 
            array (
                'id' => 53,
                'status' => 'accepted',
                'sender_id' => 42,
                'recipient_id' => 10,
                'created_at' => '2022-02-08 19:21:54',
                'updated_at' => '2022-02-08 19:21:54',
            ),
            51 => 
            array (
                'id' => 54,
                'status' => 'accepted',
                'sender_id' => 42,
                'recipient_id' => 45,
                'created_at' => '2022-02-08 19:22:04',
                'updated_at' => '2022-02-08 19:22:04',
            ),
            52 => 
            array (
                'id' => 55,
                'status' => 'accepted',
                'sender_id' => 42,
                'recipient_id' => 7,
                'created_at' => '2022-02-08 19:22:13',
                'updated_at' => '2022-02-08 19:22:13',
            ),
            53 => 
            array (
                'id' => 56,
                'status' => 'accepted',
                'sender_id' => 47,
                'recipient_id' => 44,
                'created_at' => '2022-03-02 16:58:27',
                'updated_at' => '2022-03-02 16:58:27',
            ),
            54 => 
            array (
                'id' => 57,
                'status' => 'accepted',
                'sender_id' => 47,
                'recipient_id' => 42,
                'created_at' => '2022-03-02 17:06:58',
                'updated_at' => '2022-03-02 17:06:58',
            ),
            55 => 
            array (
                'id' => 58,
                'status' => 'accepted',
                'sender_id' => 62,
                'recipient_id' => 61,
                'created_at' => '2022-03-15 00:10:24',
                'updated_at' => '2022-03-15 00:10:24',
            ),
            56 => 
            array (
                'id' => 62,
                'status' => 'accepted',
                'sender_id' => 71,
                'recipient_id' => 3,
                'created_at' => '2022-03-29 18:29:08',
                'updated_at' => '2022-03-29 18:29:08',
            ),
            57 => 
            array (
                'id' => 63,
                'status' => 'accepted',
                'sender_id' => 71,
                'recipient_id' => 50,
                'created_at' => '2022-03-29 18:29:18',
                'updated_at' => '2022-03-29 18:29:18',
            ),
            58 => 
            array (
                'id' => 64,
                'status' => 'accepted',
                'sender_id' => 71,
                'recipient_id' => 5,
                'created_at' => '2022-03-29 18:29:30',
                'updated_at' => '2022-03-29 18:29:30',
            ),
            59 => 
            array (
                'id' => 66,
                'status' => 'accepted',
                'sender_id' => 71,
                'recipient_id' => 15,
                'created_at' => '2022-03-29 18:29:53',
                'updated_at' => '2022-03-29 18:29:53',
            ),
            60 => 
            array (
                'id' => 67,
                'status' => 'accepted',
                'sender_id' => 71,
                'recipient_id' => 67,
                'created_at' => '2022-03-29 18:31:26',
                'updated_at' => '2022-03-29 18:31:26',
            ),
            61 => 
            array (
                'id' => 68,
                'status' => 'accepted',
                'sender_id' => 71,
                'recipient_id' => 13,
                'created_at' => '2022-03-29 18:31:42',
                'updated_at' => '2022-03-29 18:31:42',
            ),
            62 => 
            array (
                'id' => 69,
                'status' => 'accepted',
                'sender_id' => 71,
                'recipient_id' => 4,
                'created_at' => '2022-03-29 18:31:52',
                'updated_at' => '2022-03-29 18:31:52',
            ),
            63 => 
            array (
                'id' => 70,
                'status' => 'accepted',
                'sender_id' => 71,
                'recipient_id' => 1,
                'created_at' => '2022-03-29 18:32:03',
                'updated_at' => '2022-03-29 18:32:03',
            ),
            64 => 
            array (
                'id' => 73,
                'status' => 'accepted',
                'sender_id' => 1,
                'recipient_id' => 76,
                'created_at' => '2022-04-07 13:33:54',
                'updated_at' => '2022-04-07 13:33:54',
            ),
            65 => 
            array (
                'id' => 74,
                'status' => 'accepted',
                'sender_id' => 78,
                'recipient_id' => 4,
                'created_at' => '2022-04-12 19:44:47',
                'updated_at' => '2022-04-12 19:44:47',
            ),
            66 => 
            array (
                'id' => 80,
                'status' => 'accepted',
                'sender_id' => 79,
                'recipient_id' => 66,
                'created_at' => '2022-04-12 20:22:58',
                'updated_at' => '2022-04-12 20:22:58',
            ),
        ));
        
        
    }
}