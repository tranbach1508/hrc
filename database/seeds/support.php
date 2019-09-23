<?php

use Illuminate\Database\Seeder;

class support extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('support')->insert([
            [
                'id'=>1,
                'title'=>'Dịch vụ SEO từ khóa website giá rẻ',
                'content'=>'HRC là chữ viết tắt của Electronic Learning, dịch ra tiếng Việt có nghĩa là học trực tuyến hay giáo dục trực tuyến. HRC là phương thức học tập thông qua một thiết bị có kế nối mạng với một máy chủ ở nơi khác có lưu trữ sẵn các nội dung học tập dạng số và phần mềm cần thiết để có thể tương tác (hỏi/ yêu cầu/ ra đề) với học viên học trực tuyến từ xa. Giáo viên có thể truyền tải hình ảnh, âm thanh hoặc tài liệu tương tác qua đường truyền băng thông rộng hoặc kết nối không dây (WiFi, WiMAX), mạng nội bộ (LAN).',
                'slug'=>'dich-vu-seo-tu-khoa-website-gia-re',
            ],
            [
                'id'=>2,
                'title'=>'Quảng cáo Google Adwords',
                'content'=>'HRC là chữ viết tắt của Electronic Learning, dịch ra tiếng Việt có nghĩa là học trực tuyến hay giáo dục trực tuyến. HRC là phương thức học tập thông qua một thiết bị có kế nối mạng với một máy chủ ở nơi khác có lưu trữ sẵn các nội dung học tập dạng số và phần mềm cần thiết để có thể tương tác (hỏi/ yêu cầu/ ra đề) với học viên học trực tuyến từ xa. Giáo viên có thể truyền tải hình ảnh, âm thanh hoặc tài liệu tương tác qua đường truyền băng thông rộng hoặc kết nối không dây (WiFi, WiMAX), mạng nội bộ (LAN).',
                'slug'=>'quang-cao-google-adwords',
            ],
            [
                'id'=>3,
                'title'=>'Thiết kế web tin tức, báo chí online',
                'content'=>'HRC là chữ viết tắt của Electronic Learning, dịch ra tiếng Việt có nghĩa là học trực tuyến hay giáo dục trực tuyến. HRC là phương thức học tập thông qua một thiết bị có kế nối mạng với một máy chủ ở nơi khác có lưu trữ sẵn các nội dung học tập dạng số và phần mềm cần thiết để có thể tương tác (hỏi/ yêu cầu/ ra đề) với học viên học trực tuyến từ xa. Giáo viên có thể truyền tải hình ảnh, âm thanh hoặc tài liệu tương tác qua đường truyền băng thông rộng hoặc kết nối không dây (WiFi, WiMAX), mạng nội bộ (LAN).',
                'slug'=>'thiet-ke-web-tin-tuc-bao-tri-online',
            ],     
        ]);
    }
}
