<?php

use Illuminate\Database\Seeder;

class ad_re extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ad_re')->insert([
            [
                'id'=>1,
                'title'=>'Xác định nhu cầu đào tạo',
                'icon'=>'icon1.png',
                'status'=>1,
            ],
            [
                'id'=>2,
                'title'=>'Lập và quản lý kế hoạch đào tạo',
                'icon'=>'icon2.png',
                'status'=>1,
            ],
            [
                'id'=>3,
                'title'=>'Học tập',
                'icon'=>'icon3.png',
                'status'=>1,
            ],
            [
                'id'=>4,
                'title'=>'Thi - Kiểm tra',
                'icon'=>'icon4.png',
                'status'=>1,
            ],
            [
                'id'=>5,
                'title'=>'Học, thi trên Mobile',
                'icon'=>'icon5.png',
                'status'=>1,
            ],
            [
                'id'=>6,
                'title'=>'Thư viện',
                'icon'=>'icon6.png',
                'status'=>1,
            ],
            [
                'id'=>7,
                'title'=>'Giảng dạy trực tuyến Realtime',
                'icon'=>'icon7.png',
                'status'=>1,
            ],
            [
                'id'=>8,
                'title'=>'Quản trị, báo cáo',
                'icon'=>'icon8.png',
                'status'=>1,
            ],
            [
                'id'=>9,
                'title'=>'Đánh giá sau đào tạo',
                'icon'=>'icon9.png',
                'status'=>1,
            ],
        ]);
    }
}
