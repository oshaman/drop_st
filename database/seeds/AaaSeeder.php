<?php

use Illuminate\Database\Seeder;

class AaaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert(
            [
                ['name'=>'guest'],
                ['name'=>'user'],
                ['name'=>'admin'],
            ]
        );
        DB::table('permissions')->insert(
            [
                ['name'=>'ADMIN_USERS'],
                ['name'=>'VIEW_ADMIN'],
                ['name'=>'VIEW_DATA'],
                ['name'=>'EDIT_DATA'],
            ]
        );
    }
}
