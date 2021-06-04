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
        $this->call([
            BrandSeeder::class,
            PilotSeeder::class,
            // CarSeeder::class,
        ]);
    }
}

// SQLSTATE[23000]: Integrity constraint violation: 1217 Cannot delete or update a parent row: a 
// foreign key constraint fails (SQL: drop table if exists brands