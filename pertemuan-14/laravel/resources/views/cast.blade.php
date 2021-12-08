@extends('layouts.master')

@section('title')
    Table Cast
@endsection

@section('table')

<div class="card">
    <div class="card-header">
      <h2 class="card-title">DATA CAST</h2>
      <br>
      <a href="/cast/create" class="btn btn-primary">Create</a>
    </div>
    <!-- /.card-header -->
    <div class="card-body p-0">
      <table class="table table-striped">
        <thead>
          <tr>
            <th>No</th>
            <th>Name</th>
            <th>Umur</th>
            <th>Bio</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($data as $item => $i)
          <tr>
          <td scope="row">{{$item+1}}</td>
            <td>{{$i->name}}</td>
            <td>{{$i->umur}}</td>
            <td>{{$i->bio}}</td>
            <td>
            <form action="/cast/{{$i->id}}" method="post">
            @csrf
            @method('DELETE')
            <a href="/cast/{{$i->id}}" class="btn btn-info">Show</a>
            <a href="/cast/{{$i->id}}/edit" class="btn btn-warning">Edit</a>
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
        </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    <!-- /.card-body -->
  </div>

    
@endsection