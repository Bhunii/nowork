<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user1= New User;
        $user1->doc_type='CC';
        $user1->doc_num='1014738805';
        $user1->name='ISAAC';
        $user1->last_name='REVELO';
        $user1->phone='3148982371';
        $user1->genre='M';
        $user1->user_name='IsaakR';
        $user1->email='isaacrevelo@gmail.com';
        $user1->password='123456789';
        $user1->save();

        $user1= New User;
        $user1->doc_type='CC';
        $user1->doc_num='349249382';
        $user1->name='BRAYAN';
        $user1->last_name='CAPERA';
        $user1->phone='3342985462';
        $user1->genre='M';
        $user1->user_name='BraySti';
        $user1->email='brayanstiben@gmail.com';
        $user1->password='123456789';
        $user1->save();

        $user1= New User;
        $user1->doc_type='CC';
        $user1->doc_num='12387497621';
        $user1->name='JUAN';
        $user1->last_name='SALGADO';
        $user1->phone='3735897394';
        $user1->genre='M';
        $user1->user_name='JSalgadov';
        $user1->email='juansalgado@gmail.com';
        $user1->password='123456789';
        $user1->save();

        $user1= New User;
        $user1->doc_type='CC';
        $user1->doc_num='4237675934';
        $user1->name='NICOLAS';
        $user1->last_name='BARRETO';
        $user1->phone='387697809';
        $user1->genre='M';
        $user1->user_name='Nicoilas';
        $user1->email='nicolasbarreto@gmail.com';
        $user1->password='123456789';
        $user1->save();
    }
}
