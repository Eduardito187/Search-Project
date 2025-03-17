<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\Account\ConfigBaseFrontend;
use Database\Seeders\Account\TokenSystem;
use Database\Seeders\Search\TypeAttributes;
use Database\Seeders\Search\ConditionsExcludes;
use Database\Seeders\Search\SortingType;
use Database\Seeders\Analitycs\EventSections;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /*
        $this->call([
            ConfigBaseFrontend::class,
            TokenSystem::class
        ]);
        */

        $this->call([
            TypeAttributes::class,
            ConditionsExcludes::class,
            SortingType::class
        ]);

        $this->call([
            EventSections::class
        ]);
    }
}