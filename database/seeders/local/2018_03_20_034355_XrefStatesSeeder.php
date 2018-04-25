<?php

use App\Models\Permission;
use App\Models\XrefCountry;
use App\Models\XrefState;
use Eighty8\LaravelSeeder\Migration\MigratableSeeder;
use Eighty8\LaravelSeeder\Repository\DisableForeignKeysTrait;

class XrefStatesSeeder extends MigratableSeeder
{
    use DisableForeignKeysTrait;

    /**
     * Run the database seeder.
     */
    public function run(): void
    {
        $permission_seeds = [
            ['group' => 'xref_states', 'name' => 'list xref_states', 'description' => 'Web user able to list xref_states data', 'guard_name' => 'web'],
            ['group' => 'xref_states', 'name' => 'show xref_states', 'description' => 'Web user able to show xref_states data', 'guard_name' => 'web'],
            ['group' => 'xref_states', 'name' => 'edit xref_states', 'description' => 'Web user able to edit xref_states data', 'guard_name' => 'web'],
            ['group' => 'xref_states', 'name' => 'create xref_states', 'description' => 'Web user able to create xref_states data', 'guard_name' => 'web'],
            ['group' => 'xref_states', 'name' => 'delete xref_states', 'description' => 'Web user able to delete xref_states data', 'guard_name' => 'web'],

            ['group' => 'xref_states', 'name' => 'list xref_states', 'guard_name' => 'api'],
            ['group' => 'xref_states', 'name' => 'show xref_states', 'guard_name' => 'api'],
            ['group' => 'xref_states', 'name' => 'edit xref_states', 'guard_name' => 'api'],
            ['group' => 'xref_states', 'name' => 'create xref_states', 'guard_name' => 'api'],
            ['group' => 'xref_states', 'name' => 'delete xref_states', 'guard_name' => 'api'],
        ];

        foreach ($permission_seeds as $seed) {
            Permission::create($seed);
        }

        $country = XrefCountry::where('name','Malaysia')->first();

        $data_seeds = [
            ['name' => 'Johor', 'name_long' => 'Johor Darul Takzim', 'ddsa_code' => '01', 'alpha_2' => 'JH', 'xref_country_id' => $country->id, 'alpha_3' => 'JHR', 'capital' => 'Johor Bahru'],
            ['name' => 'Kedah', 'name_long' => 'Kedah Darul Aman', 'ddsa_code' => '02', 'alpha_2' => 'KD', 'xref_country_id' => $country->id, 'alpha_3' => 'KDH', 'capital' => 'Alor Setar'],
            ['name' => 'Kelantan', 'name_long' => 'Kelantan Darul Naim', 'ddsa_code' => '03', 'alpha_2' => 'KT', 'xref_country_id' => $country->id, 'alpha_3' => 'KTN', 'capital' => 'Kota Bahru'],
            ['name' => 'Melaka', 'name_long' => 'Melaka Bandaraya Bersejarah', 'ddsa_code' => '04', 'alpha_2' => 'ML', 'xref_country_id' => $country->id, 'alpha_3' => 'MLK', 'capital' => 'Bandar Melaka'],
            ['name' => 'Negeri Sembilan', 'name_long' => 'Negeri Sembilan Darul Khusus', 'ddsa_code' => '05', 'alpha_2' => 'NS', 'xref_country_id' => $country->id, 'alpha_3' => 'NSN', 'capital' => 'Seremban'],
            ['name' => 'Pahang', 'name_long' => 'Pahang Darul Makmur', 'ddsa_code' => '06', 'alpha_2' => 'PH', 'xref_country_id' => $country->id, 'alpha_3' => 'PHG', 'capital' => 'Kuantan'], //kuala lipis until 1953
            ['name' => 'Pulau Pinang', 'name_long' => 'Pulau Pinang Pulau Mutiara', 'ddsa_code' => '07', 'alpha_2' => 'PN', 'xref_country_id' => $country->id, 'alpha_3' => 'PNG', 'capital' => 'George Town'],
            ['name' => 'Perak', 'name_long' => 'Perak Darul Ridzuan', 'ddsa_code' => '08', 'alpha_2' => 'PR', 'xref_country_id' => $country->id, 'alpha_3' => 'PRK', 'capital' => 'Ipoh'],
            ['name' => 'Perlis', 'name_long' => 'Perlis Indera Kayangan', 'ddsa_code' => '09', 'alpha_2' => 'PL', 'xref_country_id' => $country->id, 'alpha_3' => 'PLS', 'capital' => 'Kangar'],
            ['name' => 'Selangor', 'name_long' => 'Selangor Darul Ehsan', 'ddsa_code' => '10', 'alpha_2' => 'SG', 'xref_country_id' => $country->id, 'alpha_3' => 'SGR', 'capital' => 'Shah Alam'], //shah alam until 1978
            ['name' => 'Terengganu', 'name_long' => 'Terengganu Darul Iman', 'ddsa_code' => '11', 'alpha_2' => 'TR', 'xref_country_id' => $country->id, 'alpha_3' => 'TRG', 'capital' => 'Kuala Terengganu'],
            ['name' => 'Sabah', 'name_long' => 'Sabah Negeri Di Bawah BAYU', 'ddsa_code' => '12', 'alpha_2' => 'SB', 'xref_country_id' => $country->id, 'alpha_3' => 'SBH', 'capital' => 'Kota Kinabalu'],
            ['name' => 'Sarawak', 'name_long' => 'Sarawak Bumi Kenyalang', 'ddsa_code' => '13', 'alpha_2' => 'SR', 'xref_country_id' => $country->id, 'alpha_3' => 'SRW', 'capital' => 'Kuching'],
            ['name' => 'WP Kuala Lumpur', 'name_long' => 'Wilayah Persekutuan Kuala Lumpur', 'ddsa_code' => '14', 'alpha_2' => 'KL', 'xref_country_id' => $country->id, 'alpha_3' => 'WKL', 'capital' => 'Kuala Lumpur'],
            ['name' => 'WP Labuan', 'name_long' => 'Wilayah Persekutuan Labuan', 'ddsa_code' => '15', 'alpha_2' => 'LB', 'xref_country_id' => $country->id, 'alpha_3' => 'WPL', 'capital' => 'Labuan'],
            ['name' => 'WP Putrajaya', 'name_long' => 'Wilayah Persekutuan Putrajaya', 'ddsa_code' => '16', 'alpha_2' => 'PJ', 'xref_country_id' => $country->id, 'alpha_3' => 'PJY', 'capital' => 'Putrajaya'],
            ['name' => 'Luar Negara', 'name_long' => 'Luar Negara', 'ddsa_code' => '98', 'alpha_2' => 'LN', 'xref_country_id' => $country->id, 'alpha_3' => 'LNE', 'capital' => '-']
        ];

        foreach ($data_seeds as $seed) {
            XrefState::create($seed);
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
