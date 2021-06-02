<?php

use Illuminate\Database\Seeder;
use App\Employee;
use App\Location;
class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      factory(Employee::class , 20) -> make()
      ->each(function($employee){

        $location = Location:: inRandomOrder() -> first();
        $employee -> location() -> associate($location);     //creo una var faccio partire la funzione location ed associo il return della funzione alla variabil
        $employee -> save();
      });
    }
}
