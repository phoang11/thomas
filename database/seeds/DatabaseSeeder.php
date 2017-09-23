<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('users')->insert([
            'name' => 'phuoc',
            'email' => 'admin@novemberstudio.com',
            'password' => bcrypt('password'),
        ]);

        DB::table('students')->insert([
            'user_id' => 1,
            'first_name' => 'phuoc',
            'last_name' => 'hoang',
            'middle_name' => 'thien',
            'date_of_birth'=> Carbon::create(1911,12,01),
            'father_name' => '',
            'mother_name' => '',
            'address' => '',
            'address2' => '',
            'city' => '',
            'zipcode' => '',
            'phone1' => '',
            'phone2' => '',
        ]);

        DB::table('students')->insert([
            'user_id' => 1,
            'first_name' => 'jane',
            'last_name' => 'doe',
            'middle_name' => '',
            'date_of_birth'=> Carbon::create(1911,12,21),
            'father_name' => '',
            'mother_name' => '',
            'address' => '',
            'address2' => '',
            'city' => '',
            'zipcode' => '',
            'phone1' => '',
            'phone2' => '',
        ]);

        DB::table('students')->insert([
            'user_id' => 1,
            'first_name' => 'joe',
            'last_name' => 'smith',
            'middle_name' => 'david',
            'date_of_birth'=> Carbon::create(1911,03,01),
            'father_name' => '',
            'mother_name' => '',
            'address' => '',
            'address2' => '',
            'city' => '',
            'zipcode' => '',
            'phone1' => '',
            'phone2' => '',
        ]);
    }
}
