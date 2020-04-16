@extends('layouts/admin')

@section('content')

<form action="{{route('role.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
      <label for="exampleFormControlFile1">Role</label>
      <input type="text" name='role' class="form-control-file" id="image">
    </div>

    <div class="form-group">
        <label for="exampleFormControlFile1">Special</label>
        <input type="checkbox" name='special' class="mx-2" id="image">
      </div>

      
    <button class="btn btn-primary" type="submit">Envoyé</button>
  </form>
  
@endsection