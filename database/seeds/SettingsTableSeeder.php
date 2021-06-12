<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $settings = [
            [
                'setting_id' => 'page_title',
                'name' => 'Tieu de trang',
                'value' => ' ',
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now()
            ],
            [
                'setting_id' => 'home_page',
                'name' => 'Trang chu',
                'value' => '1',
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now()
            ],
            [
                'setting_id' => 'facebook_link',
                'name' => 'facebook',
                'value' => '2',
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now()
            ],
            [
                'setting_id' => 'logo_link',
                'name' => 'logo',
                'value' => '3',
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now()
            ],
            [
                'setting_id' => 'banner_link',
                'name' => 'banner',
                'value' => '4',
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now()
            ],
            
        ];

        DB::table('settings')->insert($settings);
    }
}
