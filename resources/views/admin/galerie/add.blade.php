@extends('layouts/admin')

@section('content')

<form action="{{route('galerie.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
      <label for="exampleFormControlFile1">Example file input</label>
      <input type="file" name='image' class="form-control-file" id="image">
    </div>
    <button class="btn btn-primary" type="submit">Envoyé</button>
  </form>
  
@endsection