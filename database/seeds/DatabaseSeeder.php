<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('permis_type')->insert([
                'label' => 'A1',
                'h_drive_price' => '23',
                'h_code_price' => '8',
                'created_at' => date('Y-m-d h:m:s'),
                'updated_at' => date('Y-m-d h:m:s'),
        ]);
        DB::table('permis_type')->insert([
                'label' => 'A',
                'h_drive_price' => '23',
                'h_code_price' => '8',
                'created_at' => date('Y-m-d h:m:s'),
                'updated_at' => date('Y-m-d h:m:s'),
        ]);
        DB::table('permis_type')->insert([
                'label' => 'B',
                'h_drive_price' => '23',
                'h_code_price' => '8',
                'created_at' => date('Y-m-d h:m:s'),
                'updated_at' => date('Y-m-d h:m:s'),
        ]);
        DB::table('permis_type')->insert([
                'label' => 'B+E',
                'h_drive_price' => '23',
                'h_code_price' => '8',
                'created_at' => date('Y-m-d h:m:s'),
                'updated_at' => date('Y-m-d h:m:s'),
        ]);
        DB::table('permis_type')->insert([
                'label' => 'C',
                'h_drive_price' => '23',
                'h_code_price' => '8',
                'created_at' => date('Y-m-d h:m:s'),
                'updated_at' => date('Y-m-d h:m:s'),
        ]);
        DB::table('permis_type')->insert([
                'label' => 'C+E',
                'h_drive_price' => '23',
                'h_code_price' => '8',
                'created_at' => date('Y-m-d h:m:s'),
                'updated_at' => date('Y-m-d h:m:s'),
        ]);
        DB::table('permis_type')->insert([
            'label' => 'D',
            'h_drive_price' => '23',
            'h_code_price' => '8',
            'created_at' => date('Y-m-d h:m:s'),
            'updated_at' => date('Y-m-d h:m:s'),
    ]);
        DB::table('permis_type')->insert([
        'label' => 'D1',
        'h_drive_price' => '23',
        'h_code_price' => '8',
        'created_at' => date('Y-m-d h:m:s'),
        'updated_at' => date('Y-m-d h:m:s'),
]);
        DB::table('permis_type')->insert([
        'label' => 'D+E',
        'h_drive_price' => '23',
        'h_code_price' => '8',
        'created_at' => date('Y-m-d h:m:s'),
        'updated_at' => date('Y-m-d h:m:s'),
]);
        DB::table('permis_type')->insert([
        'label' => 'H',
        'h_drive_price' => '23',
        'h_code_price' => '8',
        'created_at' => date('Y-m-d h:m:s'),
        'updated_at' => date('Y-m-d h:m:s'),
]);
        DB::table('exammen_type')->insert([
        'label' => 'conduit',
        'created_at' => date('Y-m-d h:m:s'),
        'updated_at' => date('Y-m-d h:m:s'),
]);
        DB::table('exammen_type')->insert([
        'label' => 'code',
        'created_at' => date('Y-m-d h:m:s'),
        'updated_at' => date('Y-m-d h:m:s'),
]);
    }
}
