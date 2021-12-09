@extends('layouts.master')

@section('title')
    Create Cast
@endsection

@section('table')
<form action="/cast" method="POST">
    @csrf
    <div class="container">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Name</label>
            <input type="text" name="name" class="form-control" id="exampleFormControlInput1" >
          </div>
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Umur</label>
            <input type="number" name="umur" class="form-control" id="exampleFormControlInput1" >
          </div>
          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Bio</label>
            <textarea type="text" name="bio" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>
          <button type="submit" class="btn btn-success">Save</button>
        </div>
    
  </form>
    
@endsection