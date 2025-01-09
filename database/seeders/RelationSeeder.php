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
        $arr=['友人','恋人','家族','親','知り合い','知人','先生','生徒','上司','部下','同僚'];
        $at = new DateTime();
        foreach ($arr as $pref) {
            DB::table('relations')->insert([
                'relation' => $pref,
                'created_at' => $at,
                'updated_at' => $at,
            ]);
        }
    }
}
