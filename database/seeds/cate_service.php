<?php

use Illuminate\Database\Seeder;

class cate_service extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cate_service')->insert([
            [
                'id'=>1,
                'name'=>'Dịch vụ A',
                'slug'=>'dich-vu-a',
            ],
            [
                'id'=>2,
                'name'=>'Dịch vụ B',
                'slug'=>'dich-vu-b',
            ],
            [
                'id'=>3,
                'name'=>'Dịch vụ C',
                'slug'=>'dich-vu-c',
            ],
        ]);
    }
}
