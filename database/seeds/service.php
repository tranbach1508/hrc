<?php

use Illuminate\Database\Seeder;

class service extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('service')->insert([
            [
                'id'=>1,
                'name'=>'Kiểm tra trực tuyến',
                'image'=>'omt-logo-final1-409x230.jpg',
                'summary'=>'Đã từ lâu các nhà tâm lý học phát triển các bộ công cụ bằng bảng hỏi để kiểm tra một số khả năng, tiềm năng của con người như khả năng xử lý con số, sử dụng ngôn ngữ, thông minh...',
                'content'=>'HRC là chữ viết tắt của Electronic Learning, dịch ra tiếng Việt có nghĩa là học trực tuyến hay giáo dục trực tuyến. HRC là phương thức học tập thông qua một thiết bị có kế nối mạng với một máy chủ ở nơi khác có lưu trữ sẵn các nội dung học tập dạng số và phần mềm cần thiết để có thể tương tác (hỏi/ yêu cầu/ ra đề) với học viên học trực tuyến từ xa. Giáo viên có thể truyền tải hình ảnh, âm thanh hoặc tài liệu tương tác qua đường truyền băng thông rộng hoặc kết nối không dây (WiFi, WiMAX), mạng nội bộ (LAN).',
                'slug'=>'kiem-tra-truc-tuyen',
                'status'=>1,
                'cate_id'=>1,
            ],
            [
                'id'=>2,
                'name'=>'Xây dụng khóa học trức tuyến',
                'image'=>'omt-logo-final1-409x230.jpg',
                'summary'=>'Đã từ lâu các nhà tâm lý học phát triển các bộ công cụ bằng bảng hỏi để kiểm tra một số khả năng, tiềm năng của con người như khả năng xử lý con số, sử dụng ngôn ngữ, thông minh...',
                'content'=>'HRC là chữ viết tắt của Electronic Learning, dịch ra tiếng Việt có nghĩa là học trực tuyến hay giáo dục trực tuyến. HRC là phương thức học tập thông qua một thiết bị có kế nối mạng với một máy chủ ở nơi khác có lưu trữ sẵn các nội dung học tập dạng số và phần mềm cần thiết để có thể tương tác (hỏi/ yêu cầu/ ra đề) với học viên học trực tuyến từ xa. Giáo viên có thể truyền tải hình ảnh, âm thanh hoặc tài liệu tương tác qua đường truyền băng thông rộng hoặc kết nối không dây (WiFi, WiMAX), mạng nội bộ (LAN).',
                'slug'=>'xay-dung-khoa-hoc-truc-tuyen',
                'status'=>1,
                'cate_id'=>2,
            ],
            [
                'id'=>3,
                'name'=>'Giới thiệu xây dụng dịch vụ trung tâm đào tạo trực tuyến',
                'image'=>'omt-logo-final1-409x230.jpg',
                'summary'=>'Đã từ lâu các nhà tâm lý học phát triển các bộ công cụ bằng bảng hỏi để kiểm tra một số khả năng, tiềm năng của con người như khả năng xử lý con số, sử dụng ngôn ngữ, thông minh...',
                'content'=>'HRC là chữ viết tắt của Electronic Learning, dịch ra tiếng Việt có nghĩa là học trực tuyến hay giáo dục trực tuyến. HRC là phương thức học tập thông qua một thiết bị có kế nối mạng với một máy chủ ở nơi khác có lưu trữ sẵn các nội dung học tập dạng số và phần mềm cần thiết để có thể tương tác (hỏi/ yêu cầu/ ra đề) với học viên học trực tuyến từ xa. Giáo viên có thể truyền tải hình ảnh, âm thanh hoặc tài liệu tương tác qua đường truyền băng thông rộng hoặc kết nối không dây (WiFi, WiMAX), mạng nội bộ (LAN).',
                'slug'=>'gioi-thieu-xay-dung-dich-vu-trung-tam-dao-tao-truc-tuyen',
                'status'=>1,
                'cate_id'=>3,
            ],
        ]);
    }
}
