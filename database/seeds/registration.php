<?php

use Illuminate\Database\Seeder;

class registration extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('registration')->insert([
            [
                'id'=>1,
                'name'=>'Sơn Tùng',
                'email'=>'sontung@gmail.com',
                'phone'=>'0123456789',
                'course_id'=>1,
            ],
            [
                'id'=>2,
                'name'=>'Trần Thành',
                'email'=>'tranthanh@gmail.com',
                'phone'=>'0123456789',
                'course_id'=>2,
            ],
            [
                'id'=>3,
                'name'=>'Đức Phúc',
                'email'=>'ducphuc@gmail.com',
                'phone'=>'0123456789',
                'course_id'=>3,
            ],
            [
                'id'=>4,
                'name'=>'Trường Giang',
                'email'=>'truonggiang@gmail.com',
                'phone'=>'0123456789',
                'course_id'=>4,
            ],
        ]);
    }
}
