<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tag_names = ['駅チカ','一人で','ランチ営業','合コン','旬の食材'];
        $now = Carbon::now();
        foreach ($tag_names as $tag_name) {
            DB::table('tags')->insert(['name' => $tag_name, 'created_at' => $now, 'updated_at' => $now]);
        }
    }
}
