@extends('layouts.master')

@section('title')
    Edit Cast
@endsection

@section('table')
@foreach ($data as $i)
<form action="/cast/{{$i->id}}" method="POST">
    @method('PUT')
    @csrf
    <div class="container">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Name</label>
        <input type="text" name="name" class="form-control" id="exampleFormControlInput1" value="{{$i->name}}">
          </div>
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Umur</label>
            <input type="number" name="umur" class="form-control" id="exampleFormControlInput1" value="{{$i->umur}}">
          </div>
          <div class="mb-3">
              <label for="exampleFormControlTextarea1" class="form-label">Bio</label>
              <textarea type="text" name="bio" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$i->bio}}</textarea >
            </div>
    <button type="submit" class="btn btn-primary">Update</button>
    <a href="/cast" class="btn btn-secondary">Back</a>
  </div>
</form>
  @endforeach
    
@endsection