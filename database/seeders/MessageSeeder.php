<?php

namespace Database\Seeders;

use App\Models\Topic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MessageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $seedMessages = [
            [
                'name' => 'Client Lee',
                'email' => 'lee@example.edu.au',
                'subject' => 'Client general enquiries',
                'message' => 'Hello this is test message',
            ],
            [
                'name' => 'Client May',
                'email' => 'May@example.edu.au',
                'topic_id' => 'website oopsie',
                'subject' => 'Testing out Oopsie',
                'message' => 'Hello client made an oopsie',
            ],
            [
                'name' => 'Client Den',
                'email' => 'Den@example.edu.au',
                'topic_id' => 'feedback',
                'subject' => 'Feedback on current iteration v.3',
                'message' => 'I love it but i hate to see it',
            ],
        ];
    }
}
