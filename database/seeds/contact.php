<?php

use Illuminate\Database\Seeder;

class contact extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contact')->insert([
            [
                'id'=>1,
                'name'=>'Bách',
                'email'=>'tranbach2000@gmail.com',
                'phone'=>'0964663215',
                'name_city'=>'TelentWins',
                'address_city'=>'Hà Nội',
                'content'=>'Hello mình là Bách',
                'status'=>0,
            ],
            [
                'id'=>2,
                'name'=>'Bách',
                'email'=>'tranbach2000@gmail.com',
                'phone'=>'0964663215',
                'name_city'=>'TelentWins',
                'address_city'=>'Hà Nội',
                'content'=>'Hello mình là Bách',
                'status'=>0,
            ],
        ]);
    }
}
