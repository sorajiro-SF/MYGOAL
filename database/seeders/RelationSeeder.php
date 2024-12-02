<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class RelationSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('relations')->insert([
                'relation' => '恋人',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
        ]);

        DB::table('relations')->insert([
            'relation' => '家族',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('relations')->insert([
            'relation' => '知り合い',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('relations')->insert([
            'relation' => '知人',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('relations')->insert([
            'relation' => '先生',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);        
        DB::table('relations')->insert([
            'relation' => '上司',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        }

}
