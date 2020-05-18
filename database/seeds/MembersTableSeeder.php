<?php
//要先繼承MODEL
use App\Member;
use Illuminate\Database\Seeder;

class MembersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //清空表格
        Member::truncate();
        //使用faker
        // $faker = Faker\Factory::create('zh_TW');
        //建立資料，以鍵值對的方式編寫
        // for ($i = 0; $i < 100; $i++) {
        //     Member::create(['Username' => $faker->username, 'Pwd' => $faker->password, 'Email' => $faker->email, 'SignUpDate' => '2020-05-18', 'Nickname' => $faker->name, 'Intro' => $faker->paragraph]);
        // }
        factory(App\Member::class, 100)->create();

    }
}
