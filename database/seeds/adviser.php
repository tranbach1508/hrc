<?php

use Illuminate\Database\Seeder;

class adviser extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('adviser')->insert([
            [
                'id'=>1,
                'name'=>'Sơn Tùng MTP',
                'image'=>'person_1.jpg',
                'position'=>'Bảo vệ',
                'information'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus eligendi nobis ea maiores sapiente veritatis reprehenderit suscipit quaerat rerum voluptatibus a eius.',
            ],
            [
                'id'=>2,
                'name'=>'Đức Phúc',
                'image'=>'person_2.jpg',
                'position'=>'Ca sĩ',
                'information'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus eligendi nobis ea maiores sapiente veritatis reprehenderit suscipit quaerat rerum voluptatibus a eius.',
            ],
            [
                'id'=>3,
                'name'=>'Đen vâu',
                'image'=>'person_3.jpg',
                'position'=>'Ca sĩ',
                'information'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus eligendi nobis ea maiores sapiente veritatis reprehenderit suscipit quaerat rerum voluptatibus a eius.',
            ],
            [
                'id'=>4,
                'name'=>'Xuân Bắc',
                'image'=>'person_4.jpg',
                'position'=>'Giám đốc',
                'information'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus eligendi nobis ea maiores sapiente veritatis reprehenderit suscipit quaerat rerum voluptatibus a eius.',
            ],
        ]);
    }
}
