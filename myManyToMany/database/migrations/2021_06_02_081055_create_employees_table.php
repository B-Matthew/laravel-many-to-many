<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();

            $table->string('firstname');
            $table->string('lastname');
            $table->integer('ral');
            $table->bigInteger('location_id')->unsigned()->index();   //collego l'id di location (1) alla table Employee(n)

            $table->timestamps();
          });
        }

        /**
        * Reverse the migrations.
        *
        * @return void
        */
        public function down()
        {
          Schema::dropIfExists('employees');
        }
      }
