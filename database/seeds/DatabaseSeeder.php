<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(banner::class);
        $this->call(adviser::class);
        $this->call(cate_new::class);
        $this->call(user::class);
        $this->call(news::class);
        $this->call(contact::class);
        $this->call(infor_company::class);
        $this->call(cate_service::class);
        $this->call(service::class);
        $this->call(cate_course::class);
        $this->call(course::class);
        $this->call(ad_re::class);
        $this->call(sub_ad_re::class);
        $this->call(product::class);
        $this->call(recruitment::class);
        $this->call(registration::class);
        $this->call(support::class);
    }
}
