<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\SelectionStatus;

class SelectionStatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $selectionStatus1 = New SelectionStatus();
        $selectionStatus1->name = 'POSTULADO';
        $selectionStatus1->description  = 'CANDIDATO POSTULADO A UNA VACANTE';
        $selectionStatus1->save();

        $selectionStatus2 = New SelectionStatus();
        $selectionStatus2->name = 'PENDIENTE';
        $selectionStatus2->description  = 'CANDIDATO EN ESPERA DE REVISION';
        $selectionStatus2->save();

        $selectionStatus3 = New SelectionStatus();
        $selectionStatus3->name = 'APROBADO';
        $selectionStatus3->description  = 'CANDIDATO APROBADO PARA LA SIGUIENTE ETAPA';
        $selectionStatus3->save();

        $selectionStatus4 = New SelectionStatus();
        $selectionStatus4->name = 'RECHAZADO';
        $selectionStatus4->description  = 'CANDIDATO RECHAZADO';
        $selectionStatus4->save();

        $selectionStatus5 = New SelectionStatus();
        $selectionStatus5->name = 'EN PROCESO';
        $selectionStatus5->description  = 'CANDIDATO EN PROCESO DE EVALUACION';
        $selectionStatus5->save();

        $selectionStatus6 = New SelectionStatus();
        $selectionStatus6->name = 'CONTRATADO';
        $selectionStatus6->description  = 'CANDIDATO CONTRATADO';
        $selectionStatus6->save();
    }
}
