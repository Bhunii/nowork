<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Municipality;

class MunicipalitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $municipality1= New Municipality;
        $municipality1->code_departament='05';
        $municipality1->code='021';
        $municipality1->name='ALEJANDRIA';
        $municipality1->save();

        $municipality2= New Municipality;
        $municipality2->code_departament='11';
        $municipality2->code='001';
        $municipality2->name='SANTA FE DE BOGOTA';
        $municipality2->save();

        $municipality3= New Municipality;
        $municipality3->code_departament='13';
        $municipality3->code='620';
        $municipality3->name='SAN CRISTOBAL';
        $municipality3->save();

        $municipality4= New Municipality;
        $municipality4->code_departament='15';
        $municipality4->code='109';
        $municipality4->name='BUENAVISTA';
        $municipality4->save();

        $municipality5= New Municipality;
        $municipality5->code_departament='17';
        $municipality5->code='013';
        $municipality5->name='AGUADAS';
        $municipality5->save();

        $municipality6= New Municipality;
        $municipality6->code_departament='18';
        $municipality6->code='460';
        $municipality6->name='MILAN';
        $municipality6->save();

        $municipality7= New Municipality;
        $municipality7->code_departament='19';
        $municipality7->code='050';
        $municipality7->name='ARGELIA';
        $municipality7->save();

        $municipality8= New Municipality;
        $municipality8->code_departament='20';
        $municipality8->code='383';
        $municipality8->name='LA GLORIA';
        $municipality8->save();

        $municipality9= New Municipality;
        $municipality9->code_departament='23';
        $municipality9->code='CHIMA';
        $municipality9->name='168';
        $municipality9->save();

        $municipality10= New Municipality;
        $municipality10->code_departament='25';
        $municipality10->code='019';
        $municipality10->name='ALBAN';
        $municipality10->save();

        $municipality11= New Municipality;
        $municipality11->code_departament='27';
        $municipality11->code='073';
        $municipality11->name='BAGADO';
        $municipality11->save();

        $municipality12= New Municipality;
        $municipality12->code_departament='41';
        $municipality12->code='396';
        $municipality12->name='LA PLATA';
        $municipality12->save();

        $municipality13= New Municipality;
        $municipality13->code_departament='44';
        $municipality13->code='279';
        $municipality13->name='FONSECA';
        $municipality13->save();

        $municipality14= New Municipality;
        $municipality14->code_departament='47';
        $municipality14->code='205';
        $municipality14->name='CONCORDIA';
        $municipality14->save();

        $municipality15= New Municipality;
        $municipality15->code_departament='50';
        $municipality15->code='226';
        $municipality15->name='CUMARAL';
        $municipality15->save();

        $municipality16= New Municipality;
        $municipality16->code_departament='52';
        $municipality16->code='435';
        $municipality16->name='MALLAMA';
        $municipality16->save();

        $municipality17= New Municipality;
        $municipality17->code_departament='54';
        $municipality17->code='518';
        $municipality17->name='PAMPLONA';
        $municipality17->save();

        $municipality18= New Municipality;
        $municipality18->code_departament='63';
        $municipality18->code='548';
        $municipality18->name='PIJAO';
        $municipality18->save();

        $municipality19= New Municipality;
        $municipality19->code_departament='66';
        $municipality19->code='170';
        $municipality19->name='DOS QUEBRADAS';
        $municipality19->save();

        $municipality20= New Municipality;
        $municipality20->code_departament='68';
        $municipality20->code='229';
        $municipality20->name='CURITI';
        $municipality20->save();

        $municipality21= New Municipality;
        $municipality21->code_departament='70';
        $municipality21->code='742';
        $municipality21->name='SINCE';
        $municipality21->save();

        $municipality22= New Municipality;
        $municipality22->code_departament='73';
        $municipality22->code='067';
        $municipality22->name='ATACO';
        $municipality22->save();

        $municipality23= New Municipality;
        $municipality23->code_departament='76';
        $municipality23->code='520';
        $municipality23->name='PALMIRA';
        $municipality23->save();

        $municipality24= New Municipality;
        $municipality24->code_departament='81';
        $municipality24->code='794';
        $municipality24->name='TAME';
        $municipality24->save();

        $municipality25= New Municipality;
        $municipality25->code_departament='85';
        $municipality25->code='139';
        $municipality25->name='MANI';
        $municipality25->save();

        $municipality26= New Municipality;
        $municipality26->code_departament='86';
        $municipality26->code='568';
        $municipality26->name='PUERTO ASIS';
        $municipality26->save();

        $municipality27= New Municipality;
        $municipality27->code_departament='88';
        $municipality27->code='564';
        $municipality27->name='PROVIDENCIA';
        $municipality27->save();

        $municipality28= New Municipality;
        $municipality28->code_departament='91';
        $municipality28->code='430';
        $municipality28->name='LA VICTORIA';
        $municipality28->save();

        $municipality29= New Municipality;
        $municipality29->code_departament='94';
        $municipality29->code='884';
        $municipality29->name='PUERTO COLOMBIA';
        $municipality29->save();

        $municipality30= New Municipality;
        $municipality30->code_departament='95';
        $municipality30->code='015';
        $municipality30->name='CALAMAR';
        $municipality30->save();

        $municipality31= New Municipality;
        $municipality31->code_departament='08';
        $municipality31->code='758';
        $municipality31->name='SOLEDAD';
        $municipality31->save();

        $municipality32= New Municipality;
        $municipality32->code_departament='97';
        $municipality32->code='511';
        $municipality32->name='PACOA';
        $municipality32->save();

        $municipality33= New Municipality;
        $municipality33->code_departament='99';
        $municipality33->code='572';
        $municipality33->name='SANTA RITA';
        $municipality33->save();

    }
}
