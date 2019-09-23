<?php

use Illuminate\Database\Seeder;

class recruitment extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('recruitment')->insert([
            [
                'id'=>1,
                'title'=>'Tuyển dụng thực tập sinh PHP" ',
                'summary'=>' E-learning giải pháp đã giành Giải Nhất Nhân Tài Đất Việt cho giải pháp đào tạo trực tuyến',
                'content'=>'Cách đây khoảng 1-2 năm, một vài người bạn của tôi bắt đầu chia sẻ nhiều về rác thải nhựa, sau đó tập trung vào tác hại của ống hút nhựa, tôi thấy các bạn rất tích cực trong việc phổ biến thông tin bảo vệ môi trường, cũng khá ngưỡng mộ.',
                'image'=>'new1.png',
                'slug'=>'tuyen-dung-vi-tri-thuc-tap-sinh-php',
                'status'=>1,
            ],
            [
                'id'=>2,
                'title'=>'Tuyển dụng thực tập sinh Java',
                'summary'=>' E-learning giải pháp đã giành Giải Nhất Nhân Tài Đất Việt cho giải pháp đào tạo trực tuyến',
                'content'=>'Cách đây khoảng 1-2 năm, một vài người bạn của Trí Nam tham dự buổi khai mạc Hội nghị Quốc tế về Thành phố Thông minh 2017tôi bắt đầu chia sẻ nhiều về rác thải nhựa, sau đó tập trung vào tác hại của ống hút nhựa, tôi thấy các bạn rất tích cực trong việc phổ biến thông tin bảo vệ môi trường, cũng khá ngưỡng mộ.',
                'image'=>'new2.jpg',
                'slug'=>'tuyen-dung-thuc-tap-sinh-Java',
                'status'=>1,
            ],
            [
                'id'=>3,
                'title'=>'Tuyển dụng Tester 3 năm kinh nghiệm',
                'summary'=>' E-learning giải pháp đã giành Giải Nhất NBài học kinh doanh sâu sắc rút ra từ cuốn sách được cả Bill Gates và Warren Buffett khen là "tuyệt vời nhất"hân Tài Đất Việt cho giải pháp đào tạo trực tuyến',
                'content'=>'Cách đây khoảng 1-2 năm, một vài người bạn của tôi bắt đầu chia sẻ nhiều về rác thải nhựa, sau đó tập trung vào tác hại của ống hút nhựa, tôi thấy các bạn rất tích cực trong việc phổ biến thông tin bảo vệ môi trường, cũng khá ngưỡng mộ.',
                'image'=>'new3.jpg',
                'slug'=>'tuyen-dung-tester-3-nam-kinh-nghiem',
                'status'=>1,
            ],
        ]);
    }
}
