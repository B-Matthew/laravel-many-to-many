<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('employee_task', function (Blueprint $table) {
          $table->foreign('task_id','taskemployee')  //nome id , nome downdrop
                ->references('id')
                ->on('tasks'); //prendo l'id dalla tabella task per collegarlo alla tabella ponte

          $table->foreign('employee_id','employeetask')
                ->references('id')
                ->on('employees');
      });

      Schema::table('employees', function (Blueprint $table) {
          $table->foreign('location_id','employeelocation')
                ->references('id')
                ->on('locations');  // prendo l'id dalla tabella fonte
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::table('employee_task', function (Blueprint $table) {
          $table->dropforeign('taskemployee');  //drop con nome Schema

          $table->dropforeign('employeetask');  //drop con nome Schema
        });

      Schema::table('employees', function (Blueprint $table) {
          $table->dropforeign('employeelocation');  //drop con nome Schema
        });
    }
}
