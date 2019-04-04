<?php

use App\Models\XrefPostcode;
use Eighty8\LaravelSeeder\Migration\MigratableSeeder;
use Eighty8\LaravelSeeder\Repository\DisableForeignKeysTrait;

class XrefPostcodeNegeriSembilanSeeder extends MigratableSeeder
{
    use DisableForeignKeysTrait;

    /**
     * Run the database seeder.
     */
    public function run(): void
    {
        $data_seeds = [
            [ 'xref_state_id' => 5, 'code' => '70000', 'name' => 'Pusat Perniagaan Templer'],
            [ 'xref_state_id' => 5, 'code' => '70100', 'name' => 'Taman Bukit Punca Emas'],
            [ 'xref_state_id' => 5, 'code' => '70100', 'name' => 'Villa Taman Tasik'],
            [ 'xref_state_id' => 5, 'code' => '70100', 'name' => 'Pusat Komersial Rasah Prima'],
            [ 'xref_state_id' => 5, 'code' => '70100', 'name' => 'Lorong Rahang 1'],
            [ 'xref_state_id' => 5, 'code' => '70100', 'name' => 'Taman Seri Binjai'],
            [ 'xref_state_id' => 5, 'code' => '70200', 'name' => 'Bandar Ainsdale'],
            [ 'xref_state_id' => 5, 'code' => '70200', 'name' => 'Bukit Chemara'],
            [ 'xref_state_id' => 5, 'code' => '70200', 'name' => 'Taman Belian Tropika'],
            [ 'xref_state_id' => 5, 'code' => '70200', 'name' => 'Taman Bukit Dawn'],
            [ 'xref_state_id' => 5, 'code' => '70200', 'name' => 'Era Square'],
            [ 'xref_state_id' => 5, 'code' => '70200', 'name' => 'Taman Jasper Jaya'],
            [ 'xref_state_id' => 5, 'code' => '70300', 'name' => 'Taman Bukit Nuri Indah'],
            [ 'xref_state_id' => 5, 'code' => '70300', 'name' => 'Taman Saujana Duta'],
            [ 'xref_state_id' => 5, 'code' => '70300', 'name' => 'Taman Saujana Indah'],
            [ 'xref_state_id' => 5, 'code' => '70300', 'name' => 'Taman Saujana Prima'],
            [ 'xref_state_id' => 5, 'code' => '70300', 'name' => 'Taman Saujana Sutera'],
            [ 'xref_state_id' => 5, 'code' => '70300', 'name' => 'Taman Saujana Tropika'],
            [ 'xref_state_id' => 5, 'code' => '70300', 'name' => 'Rimba Residensi'],
            [ 'xref_state_id' => 5, 'code' => '70300', 'name' => 'Pusat Komersial Universiti'],
            [ 'xref_state_id' => 5, 'code' => '70300', 'name' => 'Taman Cenderawasih Indah'],
            [ 'xref_state_id' => 5, 'code' => '70300', 'name' => 'Taman Kerisi Indah'],
            [ 'xref_state_id' => 5, 'code' => '70300', 'name' => 'Medan Perniagaan Mambau'],
            [ 'xref_state_id' => 5, 'code' => '70300', 'name' => 'One Avenue'],
            [ 'xref_state_id' => 5, 'code' => '70300', 'name' => 'Pusat Dagangan Seremban 2'],
            [ 'xref_state_id' => 5, 'code' => '70300', 'name' => 'Pusat Komersial Seksyen C'],
            [ 'xref_state_id' => 5, 'code' => '70400', 'name' => 'Jalan Tuan Haji Said 2'],
            [ 'xref_state_id' => 5, 'code' => '70400', 'name' => 'Taman Casurina'],
            [ 'xref_state_id' => 5, 'code' => '70400', 'name' => 'Taman Sri Penaga'],
            [ 'xref_state_id' => 5, 'code' => '70400', 'name' => 'Taman Vila Palma'],
            [ 'xref_state_id' => 5, 'code' => '70400', 'name' => 'Taman Seri Sentosa '],
            [ 'xref_state_id' => 5, 'code' => '70450', 'name' => 'Pusat Perdagangan Bukit Emas 2'],
            [ 'xref_state_id' => 5, 'code' => '70450', 'name' => 'Taman Rashidah Utama 2'],
            [ 'xref_state_id' => 5, 'code' => '70450', 'name' => 'Medan Perniagaan Senawang Jaya'],
            [ 'xref_state_id' => 5, 'code' => '70450', 'name' => 'Persada Cattleya'],
            [ 'xref_state_id' => 5, 'code' => '70450', 'name' => 'Kawasan Industri Sinar Andalas'],
            [ 'xref_state_id' => 5, 'code' => '70450', 'name' => 'Bandar Utama Senawang'],
            [ 'xref_state_id' => 5, 'code' => '70450', 'name' => 'Desa Kenanga Indah'],
            [ 'xref_state_id' => 5, 'code' => '70450', 'name' => 'Bandar Prima Senawang'],
            [ 'xref_state_id' => 5, 'code' => '70450', 'name' => 'Jalan Paroi-Senawang'],
            [ 'xref_state_id' => 5, 'code' => '71000', 'name' => 'Taman Kiara 2'],
            [ 'xref_state_id' => 5, 'code' => '71200', 'name' => 'Pusat Perniagaan Emas'],
            [ 'xref_state_id' => 5, 'code' => '71200', 'name' => 'Taman Berlian'],
            [ 'xref_state_id' => 5, 'code' => '71200', 'name' => 'Taman Emas Perdana'],
            [ 'xref_state_id' => 5, 'code' => '71400', 'name' => 'Kawasan Industri Tuanku Jaafar 3'],
            [ 'xref_state_id' => 5, 'code' => '71700', 'name' => 'Taman Gading Indah'],
            [ 'xref_state_id' => 5, 'code' => '71700', 'name' => 'Taman Gading Jaya'],
            [ 'xref_state_id' => 5, 'code' => '71700', 'name' => 'Taman Kayangan'],
            [ 'xref_state_id' => 5, 'code' => '71700', 'name' => 'Pusat Perniagaan Bunga Raya'],
            [ 'xref_state_id' => 5, 'code' => '71700', 'name' => 'Taman Beringin Jaya'],
            [ 'xref_state_id' => 5, 'code' => '71700', 'name' => 'Laman Suria '],
            [ 'xref_state_id' => 5, 'code' => '71700', 'name' => 'Taman Murni'],
            [ 'xref_state_id' => 5, 'code' => '71700', 'name' => 'Taman Sri Gading'],
            [ 'xref_state_id' => 5, 'code' => '71700', 'name' => 'Kawasan Perindustrian Ringan College Heights'],
            [ 'xref_state_id' => 5, 'code' => '71700', 'name' => 'Bandar Baru Mantin'],
            [ 'xref_state_id' => 5, 'code' => '71760', 'name' => 'Kompleks Pendidikan Bandar Enstek'],
            [ 'xref_state_id' => 5, 'code' => '71760', 'name' => 'Taman Timur Enstek'],
            [ 'xref_state_id' => 5, 'code' => '71760', 'name' => 'Jalan Timur 1/2'],
            [ 'xref_state_id' => 5, 'code' => '71760', 'name' => 'Epson College'],
            [ 'xref_state_id' => 5, 'code' => '71800', 'name' => 'Desa Cempaka'],
            [ 'xref_state_id' => 5, 'code' => '71800', 'name' => 'Bandar Nilai Impian'],
            [ 'xref_state_id' => 5, 'code' => '71800', 'name' => 'Laman Alamanda'],
            [ 'xref_state_id' => 5, 'code' => '71800', 'name' => 'Taman Yadin Impiana'],
            [ 'xref_state_id' => 5, 'code' => '71800', 'name' => 'Laman Komersial Areca'],
            [ 'xref_state_id' => 5, 'code' => '71800', 'name' => 'Taman Iris'],
            [ 'xref_state_id' => 5, 'code' => '71800', 'name' => 'Taman Desa Hijauan'],
            [ 'xref_state_id' => 5, 'code' => '71800', 'name' => 'Laman Cempaka'],
            [ 'xref_state_id' => 5, 'code' => '71800', 'name' => 'Laman Seroja'],
            [ 'xref_state_id' => 5, 'code' => '71800', 'name' => 'Taman Desa Cempaka 2'],
            [ 'xref_state_id' => 5, 'code' => '71800', 'name' => 'Putra Point'],
            [ 'xref_state_id' => 5, 'code' => '71800', 'name' => 'Pusat Perniagaan Desa Kolej'],
            [ 'xref_state_id' => 5, 'code' => '71800', 'name' => 'Taman Amra'],
            [ 'xref_state_id' => 5, 'code' => '71800', 'name' => 'Bukit Citra Residensi'],
            [ 'xref_state_id' => 5, 'code' => '71800', 'name' => 'Jalan Desa Kasia 2/1A'],
            [ 'xref_state_id' => 5, 'code' => '71800', 'name' => 'Laman Azalea'],
            [ 'xref_state_id' => 5, 'code' => '71800', 'name' => 'Laman Galla'],
            [ 'xref_state_id' => 5, 'code' => '71800', 'name' => 'Taman Bucida Hijauan'],
            [ 'xref_state_id' => 5, 'code' => '71800', 'name' => 'Taman Desa Mayang Sari'],
            [ 'xref_state_id' => 5, 'code' => '71900', 'name' => 'Bukit Ara Perdana'],
            [ 'xref_state_id' => 5, 'code' => '71900', 'name' => 'Taman Cermai Impian'],
            [ 'xref_state_id' => 5, 'code' => '71900', 'name' => 'Taman Sri Rambai'],
            [ 'xref_state_id' => 5, 'code' => '71900', 'name' => 'Jalan Koperasi Labu 1'],
            [ 'xref_state_id' => 5, 'code' => '71950', 'name' => 'Pusat Dagangan Sendayan'],
            [ 'xref_state_id' => 5, 'code' => '71950', 'name' => 'Taman Hijayu'],
            [ 'xref_state_id' => 5, 'code' => '71950', 'name' => 'Kip Sentral'],
            [ 'xref_state_id' => 5, 'code' => '72120', 'name' => 'Pusat Perniagaan Ara'],
            [ 'xref_state_id' => 5, 'code' => '73000', 'name' => 'Dataran Satria'],
            [ 'xref_state_id' => 5, 'code' => '73000', 'name' => 'Pusat Komersial Delima Indah'],
            [ 'xref_state_id' => 5, 'code' => '73000', 'name' => 'Taman Satria 2'],
            [ 'xref_state_id' => 5, 'code' => '73000', 'name' => 'Taman Kasturi'],
            [ 'xref_state_id' => 5, 'code' => '73200', 'name' => 'Taman Komersial Suria'],
            [ 'xref_state_id' => 5, 'code' => '73200', 'name' => 'Taman Orkid 2'],
            [ 'xref_state_id' => 5, 'code' => '73200', 'name' => 'Taman Melor 2'],
            [ 'xref_state_id' => 5, 'code' => '73400', 'name' => 'Pusat Komersial Pahlawan'],
            [ 'xref_state_id' => 5, 'code' => '73400', 'name' => 'Pusat Perniagaan Harmoni Gemas'],
            [ 'xref_state_id' => 5, 'code' => '73400', 'name' => 'Taman Dataran Suria'],
            [ 'xref_state_id' => 5, 'code' => '73400', 'name' => 'Pusat Komersial Seri Mutiara'],
            [ 'xref_state_id' => 5, 'code' => '73400', 'name' => 'Taman Seri Mutiara']
        ];
        // Seed your data
        foreach ($data_seeds as $seed) {
            XrefPostcode::create($seed);
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
