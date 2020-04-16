@extends('layouts/admin')

@section('content')

<form action="{{route('role.update',$role)}}" method="POST" enctype="multipart/form-data">
    @csrf

    @method('PUT')
    <div class="form-group">
      <label for="exampleFormControlFile1">Role</label>
    <input value="{{$role->role}}" type="text" name='role' class="form-control-file" id="image">
    </div>

    <div class="form-group">
        <label for="exampleFormControlFile1">Special</label>
        <input @if($role->special==true) checked @endif type="checkbox" name='special' class="mx-2" id="">
      </div>

      
    <button class="btn btn-primary" type="submit">Envoyé</button>
  </form>
  
@endsection