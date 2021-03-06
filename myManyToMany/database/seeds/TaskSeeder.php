<?php

use Illuminate\Database\Seeder;
use App\Task;
use App\Employee;
class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      factory(Task::class , 20) ->create()
      ->each(function($task){

        $employee = Employee::inRandomOrder()->limit(rand(2,8))->get(); // ???????
        $task -> employees() ->  attach($employee);
        $task -> save();
      });
    }
}
