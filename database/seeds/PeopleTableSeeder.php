<?php

use Illuminate\Database\Seeder;

class PeopleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('people')->insert([
            [
            'name' => 'taro',
            'mail' => 'taro@yamada.com',
            'age'  =>'12',
            ],
            [
            'name' => 'hanako',
            'mail' => 'hanako@flower.com',
            'age'  =>'35',
            ],
            [
            'name' => 'sachiko',
            'mail' => 'sachiko@happy.com',
            'age'  =>'49',
            ],
        ]);
    }
}
