<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TypeArticleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('type_articles')->insert([
            ["nom"=>"voiture"],
            ["nom"=>"immobilier"],
            ["nom"=>"Appareils Electroniques"],
            ["nom"=>"Salle"]
        ]);
    }
}
