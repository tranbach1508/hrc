<?php

use Illuminate\Database\Seeder;

class cate_course extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cate_course')->insert([
            [
                'id'=>1,
                'name'=>'Khóa học A',
                'slug'=>'Khoa-hoc-a',
            ],
            [
                'id'=>2,
                'name'=>'Khóa học B',
                'slug'=>'Khoa-hoc-b',
            ],
            [
                'id'=>3,
                'name'=>'Khóa học C',
                'slug'=>'Khoa-hoc-c',
            ],
        ]);
    }
}
