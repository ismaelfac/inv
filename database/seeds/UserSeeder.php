<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::create([
            'name' => 'ISMAEL E. LASTRE ALVAREZ',
            'email' => 'ismaelfac@gmail.com',
            'password' => bcrypt('BrwQ12-123'),
        ]);
        User::create([
            'name' => 'ELIANA ROBLES',
            'email' => 'directora@inversionesyproyectos.com',
            'password' => bcrypt('Inversiones'),
        ]);
        User::create([
            'name' => 'VALERIA VASQUEZ CUESTA',
            'email' => 'vvasquez02@gmail.com',
            'password' => bcrypt('BrwQ12-123'),
        ]);
    }
}
