<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\Search\TypeAttributes;
use Database\Seeders\Search\ConditionsExcludes;
use Database\Seeders\Search\SortingType;
use Database\Seeders\Analitycs\EventSections;
use Eduard\Account\Models\SystemToken;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->call([
            TypeAttributes::class,
            ConditionsExcludes::class,
            SortingType::class
        ]);

        $this->call([
            EventSections::class
        ]);

        if (SystemToken::count() == 0) {
            DB::table("system_token")->insert([
                "id" => 1,
                "name" => "System",
                "token" => env("TOKEN_SERVER"),
                "status" => true,
                "created_at" => date("Y-m-d H:i:s"),
                "updated_at" => null
            ]);
        }
    }
}