<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class UserAssignSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // assign super admin
        $superAdmin = User::find(1);
        $superAdmin->assignRole('super admin');

        // assign karyawan
        $karyawan = User::find(2);
        $karyawan->assignRole('karyawan');

        // assign role karyawan to permission
        // $role = Role::find(2); // karyawan
        // $role->givePermissionTo('show absensi', 'show gaji');

        // assign HR
        $hr = User::find(3);
        $hr->assignRole('hr');

        // assign role HR to permission
        $role = Role::find(3); // HR
        $role->givePermissionTo('show karyawan', 'create karyawan', 'edit karyawan', 'delete karyawan', 'edit gaji', 'print absensi');

        // assign keuangan
        $keuangan = User::find(4);
        $keuangan->assignRole('keuangan');

        // assign role keuangan to permission
        $role = Role::find(4); // keuangan
        $role->givePermissionTo('show karyawan', 'show gaji', 'print gaji');

       // assign direktur
       $direktur = User::find(5);
       $direktur->assignRole('direktur');
       $direktur->givePermissionTo('show karyawan', 'show gaji');
    }
}
