<?php

use Illuminate\Database\Seeder;

class user extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'id'=>1,
                'name'=>'admin',
                'email'=>'admin@gmail.com',
                'password'=>bcrypt('123456'),
            ],
        ]);
    }
}
