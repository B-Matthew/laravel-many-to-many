@extends('layouts.main-layout')
@section('content')
  <main>
    <div class="container">
      <h2>Ciao {{$name}}</h2>
      <h3>Lista Employee:</h3>
      <ul>
        @foreach ($employees as $employee)
          <li>
            {{$employee -> firstname}} {{$employee -> lastname}} ral: {{$employee -> ral}}$ <br>
            {{$employee -> location -> state}} , {{$employee -> location -> street}} <br>
            @foreach ($employee -> tasks as $task)
              {{$task -> name}}
            @endforeach
          </li>
        @endforeach
      </ul>
    </div>
  </main>
@endsection
