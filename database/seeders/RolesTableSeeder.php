<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role1 = New Role;
        $role1->role_name = 'ADMINISTRATOR';
        $role1->description  = 'ADMINISTRADOR DE USUARIOS';
        $role1->save();

        $role2 = New Role;
        $role2->role_name = 'INSTRUCTOR';
        $role2->description  = 'USUARIO INSTRUCTOR - FORMADOR';
        $role2->save();

        $role3 = New Role;
        $role3->role_name = 'RECRUITER';
        $role3->description  = 'USUARIO RECLUTADOR DE TALENTO HUMANO';
        $role3->save();

        $role4 = New Role;
        $role4->role_name = 'CANDIDATE';
        $role4->description  = 'USUARIO CANDIDATO A OCUPAR UNA VACANTE LABORAL';
        $role4->save();
    }
}
