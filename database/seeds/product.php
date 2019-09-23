<?php

use Illuminate\Database\Seeder;

class product extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product')->insert([
            [
                'id'=>1,
                'name'=>'Phần mềm ERP',
                'link'=>'',
            ],
            [
                'id'=>2,
                'name'=>'Website tuyển dụng việc làm IT DevJob',
                'link'=>'',
            ],
            [
                'id'=>3,
                'name'=>'Dịch vụ Thiết kế website Web88.vn',
                'link'=>'',
            ],
            [
                'id'=>4,
                'name'=>'Website tuyển dung việc làm Topcarreer.co/TotalJobs.vn/Timviecngay.vn',
                'link'=>'',
            ],
            [
                'id'=>5,
                'name'=>'Website việc làm và khởi nghiệp cho Sinh Viên Ytalent.vn',
                'link'=>'',
            ],
        ]);
    }
}
