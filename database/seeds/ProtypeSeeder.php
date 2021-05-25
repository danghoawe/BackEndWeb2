<?php
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

class ProtypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('protypes')->insert([
            'nameProtype' => "Phone",
        ]);
        DB::table('protypes')->insert([
            'nameProtype' => "Headphone",
        ]);
        DB::table('protypes')->insert([
            'nameProtype' => "Battery backup",
        ]);
        DB::table('protypes')->insert([
            'nameProtype' => "Battery Phone",
        ]);
        DB::table('protypes')->insert([
            'nameProtype' => "Speaker",
        ]);     
        DB::table('protypes')->insert([
            'nameProtype' => "Laptop",
        ]);     
    }
}
