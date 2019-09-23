<?php

use Illuminate\Database\Seeder;

class infor_company extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('infor_company')->insert([
            [
                'id'=>1,
                'name'=>'Công ty Công nghệ và Dịch vụ Talent Wins',
                'address'=>'Tòa CT2 Chung cư Bộ Công An - Hà Nội',
                'tax_code'=>'0108134425',
                'phone'=>'0927 15 15 35',
                'email'=>'talentwins@gmail.com',
            ],
        ]);
    }
}
