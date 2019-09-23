<?php

use Illuminate\Database\Seeder;

class course extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('course')->insert([
            [
                'id'=>1,
                'cate_id'=>1,
                'name'=>'Laravel PHP',
                'slug'=>'laravel-php',
                'email'=>'info@pti.edu.vn',
                'hotline'=>'0906 249 286',
                'image'=>'khoa-hoc-1.jpg',
                'tuition'=>1000000,
                'endow'=>200000,
                'intro'=>'Khóa học Lập trình C/C++ cho người bắt đầu. Thông tin Hỗ trợ Học phí mới nhất. Phương pháp đào tạo tập trung vào bản chất kiến thức giúp hiểu sâu về lập trình. Trang bị tư duy lập trình. Giáo trình C/C++ APTECH. PP đào tạo Human Compiler. XD nền tảng lập trình.',
                'content'=>'Hầu hết các bạn sinh viên đều sẽ phải học lập trình C căn bản, lập trình C++ là ngôn ngữ đầu tiên trong trường đại học. Thế nhưng các bạn không mấy hứng thú vì lập trình với C/C++ bạn không thấy giao diện để hình dung sản phẩm bạn code ra như thế nào. Đây là lý do bạn nên học lập trình C/C++ ngay bây giờ:',
                'schedule'=>'8h00 15/08/2019',
                'teacher'=>'Khoa Phạm',
                'address'=>'238 Hoàng Quốc Việt',
                'status'=>1,
                'level'=>1,
            ],
            [
                'id'=>2,
                'cate_id'=>2,
                'name'=>'C++ cơ bản',
                'slug'=>'c++-co-ban',
                'email'=>'info@pti.edu.vn',
                'hotline'=>'0906 249 286',
                'image'=>'khoa-hoc-2.jpg',
                'tuition'=>1000000,
                'endow'=>200000,
                'intro'=>'Khóa học Lập trình C/C++ cho người bắt đầu. Thông tin Hỗ trợ Học phí mới nhất. Phương pháp đào tạo tập trung vào bản chất kiến thức giúp hiểu sâu về lập trình. Trang bị tư duy lập trình. Giáo trình C/C++ APTECH. PP đào tạo Human Compiler. XD nền tảng lập trình.',
                'content'=>'Hầu hết các bạn sinh viên đều sẽ phải học lập trình C căn bản, lập trình C++ là ngôn ngữ đầu tiên trong trường đại học. Thế nhưng các bạn không mấy hứng thú vì lập trình với C/C++ bạn không thấy giao diện để hình dung sản phẩm bạn code ra như thế nào. Đây là lý do bạn nên học lập trình C/C++ ngay bây giờ:',
                'schedule'=>'8h00 15/08/2019',
                'teacher'=>'Khoa Phạm',
                'address'=>'238 Hoàng Quốc Việt',
                'status'=>1,
                'level'=>1,
            ],
            [
                'id'=>3,
                'cate_id'=>1,
                'name'=>'C nâng cao',
                'slug'=>'c-nang-cao',
                'email'=>'info@pti.edu.vn',
                'hotline'=>'0906 249 286',
                'image'=>'khoa-hoc-3.jpg',
                'tuition'=>1000000,
                'endow'=>200000,
                'intro'=>'Khóa học Lập trình C/C++ cho người bắt đầu. Thông tin Hỗ trợ Học phí mới nhất. Phương pháp đào tạo tập trung vào bản chất kiến thức giúp hiểu sâu về lập trình. Trang bị tư duy lập trình. Giáo trình C/C++ APTECH. PP đào tạo Human Compiler. XD nền tảng lập trình.',
                'content'=>'Hầu hết các bạn sinh viên đều sẽ phải học lập trình C căn bản, lập trình C++ là ngôn ngữ đầu tiên trong trường đại học. Thế nhưng các bạn không mấy hứng thú vì lập trình với C/C++ bạn không thấy giao diện để hình dung sản phẩm bạn code ra như thế nào. Đây là lý do bạn nên học lập trình C/C++ ngay bây giờ:',
                'schedule'=>'8h00 15/08/2019',
                'teacher'=>'Khoa Phạm',
                'address'=>'238 Hoàng Quốc Việt',
                'status'=>1,
                'level'=>0,
            ],
            [
                'id'=>4,
                'cate_id'=>2,
                'name'=>'HTML cho người nhập môn',
                'slug'=>'html-cho-nguoi-nhap-mon',
                'email'=>'info@pti.edu.vn',
                'hotline'=>'0906 249 286',
                'image'=>'khoa-hoc-4.jpg',
                'tuition'=>1000000,
                'endow'=>200000,
                'intro'=>'Khóa học Lập trình C/C++ cho người bắt đầu. Thông tin Hỗ trợ Học phí mới nhất. Phương pháp đào tạo tập trung vào bản chất kiến thức giúp hiểu sâu về lập trình. Trang bị tư duy lập trình. Giáo trình C/C++ APTECH. PP đào tạo Human Compiler. XD nền tảng lập trình.',
                'content'=>'Hầu hết các bạn sinh viên đều sẽ phải học lập trình C căn bản, lập trình C++ là ngôn ngữ đầu tiên trong trường đại học. Thế nhưng các bạn không mấy hứng thú vì lập trình với C/C++ bạn không thấy giao diện để hình dung sản phẩm bạn code ra như thế nào. Đây là lý do bạn nên học lập trình C/C++ ngay bây giờ:',
                'schedule'=>'8h00 15/08/2019',
                'teacher'=>'Khoa Phạm',
                'address'=>'238 Hoàng Quốc Việt',
                'status'=>1,
                'level'=>1,
            ],
            [
                'id'=>5,
                'cate_id'=>3,
                'name'=>'CSS3 cơ bản',
                'slug'=>'css3-co-ban',
                'email'=>'info@pti.edu.vn',
                'hotline'=>'0906 249 286',
                'image'=>'khoa-hoc-5.jpg',
                'tuition'=>1000000,
                'endow'=>200000,
                'intro'=>'Khóa học Lập trình C/C++ cho người bắt đầu. Thông tin Hỗ trợ Học phí mới nhất. Phương pháp đào tạo tập trung vào bản chất kiến thức giúp hiểu sâu về lập trình. Trang bị tư duy lập trình. Giáo trình C/C++ APTECH. PP đào tạo Human Compiler. XD nền tảng lập trình.',
                'content'=>'Hầu hết các bạn sinh viên đều sẽ phải học lập trình C căn bản, lập trình C++ là ngôn ngữ đầu tiên trong trường đại học. Thế nhưng các bạn không mấy hứng thú vì lập trình với C/C++ bạn không thấy giao diện để hình dung sản phẩm bạn code ra như thế nào. Đây là lý do bạn nên học lập trình C/C++ ngay bây giờ:',
                'schedule'=>'8h00 15/08/2019',
                'teacher'=>'Khoa Phạm',
                'address'=>'238 Hoàng Quốc Việt',
                'status'=>1,
                'level'=>0,
            ],
        ]);
    }
}
