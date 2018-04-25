<?php

use Eighty8\LaravelSeeder\Migration\MigratableSeeder;
use Eighty8\LaravelSeeder\Repository\DisableForeignKeysTrait;
use Spatie\Permission\Models\Permission;

class XrefStatusesSeeder extends MigratableSeeder
{
    use DisableForeignKeysTrait;

    /**
     * Run the database seeder.
     */
    public function run(): void
    {
        $permission_seeds = [
            ['group' => 'xref_statuses', 'name' => 'list xref_statuses', 'description' => 'Web user able to list xref_status data', 'guard_name' => 'web'],
            ['group' => 'xref_statuses', 'name' => 'show xref_statuses', 'description' => 'Web user able to show xref_status data', 'guard_name' => 'web'],
            ['group' => 'xref_statuses', 'name' => 'edit xref_statuses', 'description' => 'Web user able to edit xref_status data', 'guard_name' => 'web'],
            ['group' => 'xref_statuses', 'name' => 'create xref_statuses', 'description' => 'Web user able to create xref_status data', 'guard_name' => 'web'],
            ['group' => 'xref_statuses', 'name' => 'delete xref_statuses', 'description' => 'Web user able to delete xref_status data', 'guard_name' => 'web'],

            ['group' => 'xref_statuses', 'name' => 'list xref_statuses', 'guard_name' => 'api'],
            ['group' => 'xref_statuses', 'name' => 'show xref_statuses', 'guard_name' => 'api'],
            ['group' => 'xref_statuses', 'name' => 'edit xref_statuses', 'guard_name' => 'api'],
            ['group' => 'xref_statuses', 'name' => 'create xref_statuses', 'guard_name' => 'api'],
            ['group' => 'xref_statuses', 'name' => 'delete xref_statuses', 'guard_name' => 'api'],
        ];

        foreach ($permission_seeds as $seed) {
            Permission::create($seed);
        }

        $data_seeds = [
            ['name' => 'Open'],
            ['name' => 'Close'],
        ];

        foreach ($data_seeds as $seed) {
            \App\Models\XrefStatus::create($seed);
        }
    }

    /**
     * Reverts the database seeder.
     */
    public function down(): void
    {
        // Remove your data
    }
}
