<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class FromSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    DB::table('froms')->insert([
            'from' => '秋田',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
    ]);

    DB::table('froms')->insert([
        'from' => '神奈川',
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
]);
    }
}
