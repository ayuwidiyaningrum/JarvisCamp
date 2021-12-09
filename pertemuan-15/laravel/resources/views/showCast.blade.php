@extends('layouts.master')

@section('title')
    Show Cast
@endsection

@section('table')
<div class="card">
  @foreach ($data as $i)
        <div class="card-header">
          Show Cast
        </div>
        <div class="card-body">
          <h5 class="card-text">Nama : {{$i->name}}</h5>
          <h5 class="card-text">Umur :  {{$i->umur}}</h5>
          <h5 class="card-text">Bio :  {{$i->bio}}</h5>
          <a href="/cast" class="btn btn-primary">close</a>
        </div>
        @endforeach
      </div>
@endsection