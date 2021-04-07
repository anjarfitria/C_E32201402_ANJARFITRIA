@extends('layouts.watermelon2')

@section('content')
    <div class="jumbatron jumbatron-fluid">
        <div class="container">
            <h1 class="display-4">Home Page</h1>
            <p class="lead">This is the Home Page</p>
        </div>
        <p>Nama : {{ $nama }}</p>
        <p>Mata Kuliah</p>
        <ul>
           @foreach($matkul as $p)
           <li>{{ $p }}</li>
           @endforeach
        <ul>
    </div>
@endsection
