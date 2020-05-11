<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

		$usr 			= new User;
    	$usr->fullname  = 'David Andres Betancourth Botero';
    	$usr->email     = 'betancourthbotero@gmail.com';
    	$usr->phone     = '30172';
    	$usr->birthdate = '1992-04-28';
    	$usr->gender    = 'Male';
    	$usr->address   = 'Calle con Carrera';
    	$usr->password  = bcrypt('12345');
    	$usr->role      = 'admin';
    	$usr->save();


       factory(App\User::class, 300)->create();
    }
}
