<?php
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

class ManufactureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('manufactures')->insert([
            'nameManufacture' => "Apple",         
        ]);
        DB::table('manufactures')->insert([
            'nameManufacture' => "SamSung",         
        ]);
        DB::table('manufactures')->insert([
            'nameManufacture' => "Realme",         
        ]);
        DB::table('manufactures')->insert([
            'nameManufacture' => "Xiaomi",         
        ]);
        DB::table('manufactures')->insert([
            'nameManufacture' => "Oppo",         
        ]);
        DB::table('manufactures')->insert([
            'nameManufacture' => "Vsmart",         
        ]);
        DB::table('manufactures')->insert([
            'nameManufacture' => "Macbook",         
        ]);
        DB::table('manufactures')->insert([
            'nameManufacture' => "Msi",         
        ]);

    }
}
