<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class adminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'=>'Rifian Fernando',
            'email'=> 'rifian.fernando@binus.ac.id',
            'password' =>bcrypt('aktivisBNCC33'),
            'is_admin' => true,
        ]);
    }
}
