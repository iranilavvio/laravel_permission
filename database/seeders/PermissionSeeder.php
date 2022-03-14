<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $attr = ['show karyawan', 'create karyawan', 'edit karyawan', 'delete karyawan', 'show absensi', 'print absensi', 'show gaji', 'edit gaji', 'print gaji'];

        foreach ($attr as $value) {
            Permission::create([
                'name' => $value,
            ]);
        }
    }
}
