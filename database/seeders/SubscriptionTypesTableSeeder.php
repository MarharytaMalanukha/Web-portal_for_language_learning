<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubscriptionTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('subscription_types')->insert(
            ['description' => 'none', 'cost' => '0']
        );
        DB::table('subscription_types')->insert(
            ['description' => 'byYear', 'cost' => '1000']
        );
        DB::table('subscription_types')->insert(
            ['description' => 'byMonth', 'cost' => '150']
        );
    }
}
