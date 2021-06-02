<?php

namespace App\Http\Controllers;
use App\Employee;
use App\Task;
use Illuminate\Http\Request;

class myController extends Controller
{
    public function home() {

      $name ='Matthew';
      $employees = Employee::all();
      return view('pages.home', compact('name','employees'));
    }
}
