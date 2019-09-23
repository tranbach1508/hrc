<?php

use Illuminate\Database\Seeder;

class banner extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('banner')->insert([
            [
                'id'=>1,
                'title'=>'banner 1',
                'content'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam assumenda ea quo cupiditate facere deleniti fuga officia.',
                'link'=>'',
                'image'=>'panner-1.png',
                'status'=>1,
            ],
            [
                'id'=>2,
                'title'=>'banner 2',
                'content'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam assumenda ea quo cupiditate facere deleniti fuga officia.',
                'link'=>'',
                'image'=>'panner-2.png',
                'status'=>1,
            ],
            [
                'id'=>3,
                'title'=>'banner 3',
                'content'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam assumenda ea quo cupiditate facere deleniti fuga officia.',
                'link'=>'',
                'image'=>'panner-3.png',
                'status'=>1,
            ],
        ]);
    }
}
