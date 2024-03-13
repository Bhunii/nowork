<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\TypeLanguage;

class TypeLanguagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $typeLanguage1 = New TypeLanguage();
        $typeLanguage1->name = 'INGLES';
        $typeLanguage1->level  = 'A1';
        $typeLanguage1->save();

        $typeLanguage2 = New TypeLanguage();
        $typeLanguage2->name = 'INGLES';
        $typeLanguage2->level  = 'A2';
        $typeLanguage2->save();

        $typeLanguage3 = New TypeLanguage();
        $typeLanguage3->name = 'INGLES';
        $typeLanguage3->level  = 'B1';
        $typeLanguage3->save();

        $typeLanguage4 = New TypeLanguage();
        $typeLanguage4->name = 'INGLES';
        $typeLanguage4->level  = 'B2';
        $typeLanguage4->save();

        $typeLanguage5 = New TypeLanguage();
        $typeLanguage5->name = 'INGLES';
        $typeLanguage5->level  = 'C1';
        $typeLanguage5->save();

        $typeLanguage6 = New TypeLanguage();
        $typeLanguage6->name = 'INGLES';
        $typeLanguage6->level  = 'C2';
        $typeLanguage6->save();

        $typeLanguage7 = New TypeLanguage();
        $typeLanguage7->name = 'ALEMAN';
        $typeLanguage7->level  = 'A1';
        $typeLanguage7->save();

        $typeLanguage8 = New TypeLanguage();
        $typeLanguage8->name = 'ALEMAN';
        $typeLanguage8->level  = 'A2';
        $typeLanguage8->save();

        $typeLanguage9 = New TypeLanguage();
        $typeLanguage9->name = 'ALEMAN';
        $typeLanguage9->level  = 'B1';
        $typeLanguage9->save();

        $typeLanguage10 = New TypeLanguage();
        $typeLanguage10->name = 'ALEMAN';
        $typeLanguage10->level  = 'B2';
        $typeLanguage10->save();

        $typeLanguage11 = New TypeLanguage();
        $typeLanguage11->name = 'ALEMAN';
        $typeLanguage11->level  = 'C1';
        $typeLanguage11->save();

        $typeLanguage12 = New TypeLanguage();
        $typeLanguage12->name = 'ALEMAN';
        $typeLanguage12->level  = 'C2';
        $typeLanguage12->save();

        $typeLanguage13 = New TypeLanguage();
        $typeLanguage13->name = 'RUSO';
        $typeLanguage13->level  = 'A1';
        $typeLanguage13->save();

        $typeLanguage14 = New TypeLanguage();
        $typeLanguage14->name = 'RUSO';
        $typeLanguage14->level  = 'A2';
        $typeLanguage14->save();

        $typeLanguage15 = New TypeLanguage();
        $typeLanguage15->name = 'RUSO';
        $typeLanguage15->level  = 'B1';
        $typeLanguage15->save();

        $typeLanguage16 = New TypeLanguage();
        $typeLanguage16->name = 'RUSO';
        $typeLanguage16->level  = 'B2';
        $typeLanguage16->save();

        $typeLanguage17 = New TypeLanguage();
        $typeLanguage17->name = 'RUSO';
        $typeLanguage17->level  = 'C1';
        $typeLanguage17->save();

        $typeLanguage18 = New TypeLanguage();
        $typeLanguage18->name = 'RUSO';
        $typeLanguage18->level  = 'C2';
        $typeLanguage18->save();


    }
}
