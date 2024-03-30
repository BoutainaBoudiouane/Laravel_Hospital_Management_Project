<?php

namespace Database\Seeders;

use App\Models\Patient;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class PatientTableSeeder extends Seeder
{

    public function run()
    {
        $Patients = new Patient();
        $Patients->email = 'ghita@gmail.com';
        $Patients->Password = Hash::make('12345678');
        $Patients->Date_Birth = '2006-06-30';
        $Patients->Phone = '123456789';
        $Patients->Gender = 2;
        $Patients->Blood_Group = 'A+';
        $Patients->save();

        //insert trans
        $Patients->name = 'ghita';
        $Patients->Address = 'Essalam';
        $Patients->save();
    }
}
