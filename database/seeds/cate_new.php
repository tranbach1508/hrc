<?php

use Illuminate\Database\Seeder;

class cate_new extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cate_new')->insert([
            [
                'id'=>1,
                'name'=>'Công nghệ',
                'slug'=>'cong-nghe',
            ],
            [
                'id'=>2,
                'name'=>'Doanh nghiệp',
                'slug'=>'doanh-nghiep',
            ],
        ]);
    }
}
