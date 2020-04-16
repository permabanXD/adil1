@extends('layouts/admin')

@section('content')

<form action="{{route('team.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
      <label for="exampleFormControlFile1">Image</label>
      <input type="file" name='image' class="form-control-file" id="image">
    </div>

    <div class="form-group">
      <label for="exampleFormControlFile1">Nom</label>
      <input type="text" name='nom' class="form-control-file" id="nom">
    </div>
    
    <div class="form-group">
      <label for="exampleFormControlFile1">Text</label>
      <input type="text" name='text' class="form-control-file" id="text">
    </div>

    <div class="form-group">
      <label for="exampleFormControlFile1">Text</label>
     <select  name="role" id="">
       @foreach ($role as $item)

     <option value="{{$item->id}}">{{$item->role}}</option>
           
       @endforeach
     </select>
    </div>
    
    <button class="btn btn-primary" type="submit">Envoyé</button>
  </form>

@endsection