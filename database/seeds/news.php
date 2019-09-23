<?php

use Illuminate\Database\Seeder;

class news extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('new')->insert([
            [
                'id'=>1,
                'title'=>'Hội thảo "Sàn giao dịch công nghệ trực tuyến" ',
                'summary'=>' E-learning giải pháp đã giành Giải Nhất Nhân Tài Đất Việt cho giải pháp đào tạo trực tuyến',
                'content'=>'Cách đây khoảng 1-2 năm, một vài người bạn của tôi bắt đầu chia sẻ nhiều về rác thải nhựa, sau đó tập trung vào tác hại của ống hút nhựa, tôi thấy các bạn rất tích cực trong việc phổ biến thông tin bảo vệ môi trường, cũng khá ngưỡng mộ.',
                'image'=>'new1.png',
                'slug'=>'hoi-thao-san-giao-dich-cong-nghe-truc-tuyen',
                'status'=>1,
                'cate_new'=>1,
            ],
            [
                'id'=>2,
                'title'=>'Trí Nam tham dự buổi khai mạc Hội nghị Quốc tế về Thành phố Thông minh 2017',
                'summary'=>' E-learning giải pháp đã giành Giải Nhất Nhân Tài Đất Việt cho giải pháp đào tạo trực tuyến',
                'content'=>'Cách đây khoảng 1-2 năm, một vài người bạn của Trí Nam tham dự buổi khai mạc Hội nghị Quốc tế về Thành phố Thông minh 2017tôi bắt đầu chia sẻ nhiều về rác thải nhựa, sau đó tập trung vào tác hại của ống hút nhựa, tôi thấy các bạn rất tích cực trong việc phổ biến thông tin bảo vệ môi trường, cũng khá ngưỡng mộ.',
                'image'=>'new2.jpg',
                'slug'=>'tri-nam-tham-du-buoi-khai-mac-hoi-nghi-quoc-te-ce-thanh-pho-thong-minh-2017',
                'status'=>1,
                'cate_new'=>1,
            ],
            [
                'id'=>3,
                'title'=>'Bài học kinh doanh sâu sắc rút ra từ cuốn sách được cả Bill Gates và Warren Buffett khen là "tuyệt vời nhất"',
                'summary'=>' E-learning giải pháp đã giành Giải Nhất NBài học kinh doanh sâu sắc rút ra từ cuốn sách được cả Bill Gates và Warren Buffett khen là "tuyệt vời nhất"hân Tài Đất Việt cho giải pháp đào tạo trực tuyến',
                'content'=>'Cách đây khoảng 1-2 năm, một vài người bạn của tôi bắt đầu chia sẻ nhiều về rác thải nhựa, sau đó tập trung vào tác hại của ống hút nhựa, tôi thấy các bạn rất tích cực trong việc phổ biến thông tin bảo vệ môi trường, cũng khá ngưỡng mộ.',
                'image'=>'new3.jpg',
                'slug'=>'bai-hoc-kinh-doanh-sau-sac-rut-ra-tu-cuon-sach-duoc-ca-bill-gate-va-warren-buffett-khen-la-tuyet-voi-nhat',
                'status'=>1,
                'cate_new'=>2,
            ],
        ]);
    }
}
