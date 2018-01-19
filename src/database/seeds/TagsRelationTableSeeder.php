<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class TagsRelationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $store_ids = [1, 2, 3];
        $tag_ids = [1, 2, 3, 4, 5];
        $now = Carbon::now();
        foreach ($store_ids as $store_id) {
            foreach ($tag_ids as $tag_id) {
                DB::table('tag_relations')->insert(['store_id' => $store_id, 'tag_id' => $tag_id, 'created_at' => $now, 'updated_at' => $now]);
            }
        }
    }
}
