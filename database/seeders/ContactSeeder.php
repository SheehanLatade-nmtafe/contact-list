<?php

namespace Database\Seeders;

use App\Models\Contact;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $seedContacts = [
            [
                'given_name' => 'Adrian',
                'family_name' => 'Gould',
                'nickname' => 'Ady',
                'email' => 'adrian.gould@nmtafe.wa.edu.au',
            ],
            [
                'given_name' => 'Aaron',
                'family_name' => 'Clifford',
                'nickname' => 'Aaron',
                'email' => 'aaron.clifford@nmtafe.wa.edu.au',
                'phone' => '+61-1-2345-6789',
            ],
            [
                'given_name' => 'Samantha',
                'middle_name' => 'June',
                'family_name' => 'Hart',
                'nickname' => 'Sam',
                'email' => 'samantha.hart@example.edu.au',
                'phone' => '+61-4-9876-5432',
            ],
            [
                'given_name' => 'Michael',
                'middle_name' => null,          // tests nullable middle_name
                'family_name' => 'Tran',
                'nickname' => null,             // tests nullable nickname
                'email' => 'michael.tran@example.edu.au',
                'phone' => null,                // tests nullable phone
            ],
            [
                'given_name' => 'Priya',
                'middle_name' => 'Anjali',
                'family_name' => null,          // tests nullable family_name
                'nickname' => 'Pree',
                'email' => null,                // tests nullable email
                'phone' => '+61-3-2222-1111',
            ],
        ];

        foreach ($seedContacts as $seedContact) {
            Contact::create($seedContact);
        }
    }
}
