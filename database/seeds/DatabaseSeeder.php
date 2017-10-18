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

        DB::table('roles')->insert([
            'name' => 'Administrator',
        ]);

        DB::table('roles')->insert([
            'name' => 'Authenticated',
        ]);

        DB::table('roles')->insert([
            'name' => 'Content Editor',
        ]);

        DB::table('basic_pages')->insert([
            'id' => 1,
            'title' => 'This is a first page\'s of the basic page',
            'body' => 'lorm ip sum body',
            'slug' => str_slug('This is a first page\'s of the basic page', '-'),
        ]);

        DB::table('basic_pages')->insert([
            'id' => 2,
            'title' => 'Đức Thánh Cha kỷ niệm 100 năm Bộ các Giáo Hội Đông Phương',
            'body' => 'Ngài đưa ra lời mời gọi này trong bài giảng thánh lễ lúc quá 10 giờ sáng 12-10-2017, tại Đền thờ Đức Bà Cả ở Roma, nhân dịp kỷ niệm 100 năm thành lập Bộ các Giáo Hội Công Giáo Đông phương và Giáo Hoàng Học Viện Đông Phương gần đó.',
            'slug' => str_slug('Đức Thánh Cha kỷ niệm 100 năm Bộ các Giáo Hội Đông Phương', '-'),
        ]);
    }
}
