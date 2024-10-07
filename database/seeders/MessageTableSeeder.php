<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MessageTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('message')->delete();
        
        \DB::table('message')->insert(array (
            0 => 
            array (
                'id' => 1,
                'sender_id' => 11,
                'recipient_id' => 2,
                'body' => 'Test',
                'session' => '2_11',
                'status' => 'unread',
                'created_at' => '2022-01-27 00:04:01',
                'updated_at' => '2022-01-27 00:04:01',
            ),
            1 => 
            array (
                'id' => 2,
                'sender_id' => 11,
                'recipient_id' => 2,
                'body' => 'Jojj',
                'session' => '2_11',
                'status' => 'unread',
                'created_at' => '2022-01-27 00:05:32',
                'updated_at' => '2022-01-27 00:05:32',
            ),
            2 => 
            array (
                'id' => 3,
                'sender_id' => 12,
                'recipient_id' => 1,
                'body' => '?',
                'session' => '1_12',
                'status' => 'unread',
                'created_at' => '2022-01-27 01:53:17',
                'updated_at' => '2022-01-27 01:53:17',
            ),
            3 => 
            array (
                'id' => 4,
                'sender_id' => 9,
                'recipient_id' => 4,
                'body' => 'Test',
                'session' => '4_9',
                'status' => 'unread',
                'created_at' => '2022-01-27 02:15:40',
                'updated_at' => '2022-01-27 02:15:40',
            ),
            4 => 
            array (
                'id' => 5,
                'sender_id' => 9,
                'recipient_id' => 12,
                'body' => 'Test',
                'session' => '9_12',
                'status' => 'unread',
                'created_at' => '2022-01-27 03:47:36',
                'updated_at' => '2022-01-27 03:47:36',
            ),
            5 => 
            array (
                'id' => 6,
                'sender_id' => 1,
                'recipient_id' => 2,
                'body' => 'dsdfsdf',
                'session' => '1_2',
                'status' => 'unread',
                'created_at' => '2022-01-29 04:03:28',
                'updated_at' => '2022-01-29 04:03:28',
            ),
            6 => 
            array (
                'id' => 7,
                'sender_id' => 16,
                'recipient_id' => 4,
                'body' => 'Test',
                'session' => '4_16',
                'status' => 'unread',
                'created_at' => '2022-01-31 18:58:48',
                'updated_at' => '2022-01-31 18:58:48',
            ),
            7 => 
            array (
                'id' => 8,
                'sender_id' => 16,
                'recipient_id' => 4,
                'body' => 'Test',
                'session' => '4_16',
                'status' => 'unread',
                'created_at' => '2022-01-31 18:59:04',
                'updated_at' => '2022-01-31 18:59:04',
            ),
            8 => 
            array (
                'id' => 9,
                'sender_id' => 16,
                'recipient_id' => 4,
                'body' => 'Test',
                'session' => '4_16',
                'status' => 'unread',
                'created_at' => '2022-01-31 21:51:29',
                'updated_at' => '2022-01-31 21:51:29',
            ),
            9 => 
            array (
                'id' => 10,
                'sender_id' => 16,
                'recipient_id' => 10,
                'body' => 'Hi',
                'session' => '10_16',
                'status' => 'unread',
                'created_at' => '2022-02-01 00:03:23',
                'updated_at' => '2022-02-01 00:03:23',
            ),
            10 => 
            array (
                'id' => 11,
                'sender_id' => 16,
                'recipient_id' => 13,
                'body' => 'Hi',
                'session' => '13_16',
                'status' => 'unread',
                'created_at' => '2022-02-01 00:08:40',
                'updated_at' => '2022-02-01 00:08:40',
            ),
            11 => 
            array (
                'id' => 12,
                'sender_id' => 16,
                'recipient_id' => 4,
                'body' => 'Hey, this is a test to see if keyboard still blocks text box and it does not',
                'session' => '4_16',
                'status' => 'unread',
                'created_at' => '2022-02-01 02:06:22',
                'updated_at' => '2022-02-01 02:06:22',
            ),
            12 => 
            array (
                'id' => 13,
                'sender_id' => 16,
                'recipient_id' => 4,
                'body' => 'Ok',
                'session' => '4_16',
                'status' => 'unread',
                'created_at' => '2022-02-01 02:06:51',
                'updated_at' => '2022-02-01 02:06:51',
            ),
            13 => 
            array (
                'id' => 14,
                'sender_id' => 16,
                'recipient_id' => 4,
                'body' => 'Test',
                'session' => '4_16',
                'status' => 'unread',
                'created_at' => '2022-02-01 02:07:09',
                'updated_at' => '2022-02-01 02:07:09',
            ),
            14 => 
            array (
                'id' => 15,
                'sender_id' => 22,
                'recipient_id' => 31,
                'body' => 'Test',
                'session' => '22_31',
                'status' => 'unread',
                'created_at' => '2022-02-03 19:29:41',
                'updated_at' => '2022-02-03 19:29:41',
            ),
            15 => 
            array (
                'id' => 16,
                'sender_id' => 40,
                'recipient_id' => 31,
                'body' => 'Test',
                'session' => '31_40',
                'status' => 'unread',
                'created_at' => '2022-02-03 20:39:56',
                'updated_at' => '2022-02-03 20:39:56',
            ),
            16 => 
            array (
                'id' => 17,
                'sender_id' => 37,
                'recipient_id' => 40,
                'body' => 'Hey do you get this message?',
                'session' => '37_40',
                'status' => 'unread',
                'created_at' => '2022-02-03 20:52:52',
                'updated_at' => '2022-02-03 20:52:52',
            ),
            17 => 
            array (
                'id' => 18,
                'sender_id' => 39,
                'recipient_id' => 36,
                'body' => 'Test',
                'session' => '36_39',
                'status' => 'unread',
                'created_at' => '2022-02-04 17:19:05',
                'updated_at' => '2022-02-04 17:19:05',
            ),
            18 => 
            array (
                'id' => 19,
                'sender_id' => 39,
                'recipient_id' => 36,
                'body' => 'Test',
                'session' => '36_39',
                'status' => 'unread',
                'created_at' => '2022-02-04 23:48:24',
                'updated_at' => '2022-02-04 23:48:24',
            ),
            19 => 
            array (
                'id' => 20,
                'sender_id' => 39,
                'recipient_id' => 36,
                'body' => 'Test',
                'session' => '36_39',
                'status' => 'unread',
                'created_at' => '2022-02-05 00:05:19',
                'updated_at' => '2022-02-05 00:05:19',
            ),
            20 => 
            array (
                'id' => 21,
                'sender_id' => 42,
                'recipient_id' => 44,
                'body' => 'Hello',
                'session' => '42_44',
                'status' => 'unread',
                'created_at' => '2022-02-08 19:07:46',
                'updated_at' => '2022-02-08 19:07:46',
            ),
            21 => 
            array (
                'id' => 22,
                'sender_id' => 62,
                'recipient_id' => 61,
                'body' => 'Test message',
                'session' => '61_62',
                'status' => 'unread',
                'created_at' => '2022-03-15 00:10:36',
                'updated_at' => '2022-03-15 00:10:36',
            ),
            22 => 
            array (
                'id' => 23,
                'sender_id' => 4,
                'recipient_id' => 40,
                'body' => 'Test',
                'session' => '4_40',
                'status' => 'unread',
                'created_at' => '2022-03-29 21:35:34',
                'updated_at' => '2022-03-29 21:35:34',
            ),
            23 => 
            array (
                'id' => 24,
                'sender_id' => 74,
                'recipient_id' => 66,
                'body' => 'Qwedfc x12345',
                'session' => '66_74',
                'status' => 'unread',
                'created_at' => '2022-04-05 22:54:35',
                'updated_at' => '2022-04-05 22:54:35',
            ),
            24 => 
            array (
                'id' => 25,
                'sender_id' => 78,
                'recipient_id' => 4,
                'body' => 'Hi!',
                'session' => '4_78',
                'status' => 'unread',
                'created_at' => '2022-04-12 19:45:11',
                'updated_at' => '2022-04-12 19:45:11',
            ),
            25 => 
            array (
                'id' => 26,
                'sender_id' => 66,
                'recipient_id' => 50,
                'body' => 'Asdfg 67890',
                'session' => '50_66',
                'status' => 'unread',
                'created_at' => '2022-04-13 00:26:39',
                'updated_at' => '2022-04-13 00:26:39',
            ),
            26 => 
            array (
                'id' => 27,
                'sender_id' => 66,
                'recipient_id' => 50,
                'body' => 'Erfxd',
                'session' => '50_66',
                'status' => 'unread',
                'created_at' => '2022-04-13 00:27:39',
                'updated_at' => '2022-04-13 00:27:39',
            ),
            27 => 
            array (
                'id' => 28,
                'sender_id' => 66,
                'recipient_id' => 50,
                'body' => 'Zddccc',
                'session' => '50_66',
                'status' => 'unread',
                'created_at' => '2022-04-13 00:29:33',
                'updated_at' => '2022-04-13 00:29:33',
            ),
        ));
        
        
    }
}