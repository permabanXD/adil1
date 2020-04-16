@extends('layouts/admin')

@section('content')

<form action="{{route('contact.update', $contact)}}" method="POST" enctype="multipart/form-data">
@csrf
@method(
    'PUT'
)
    <div class="form-group">
      <label for="exampleFormControlFile1">Example file input</label>
      <input value="{{$contact->adresse}}" type="text" name='adresse' class="form-control-file" id="adresse">
      
    </div>

    <div class="form-group">
        <label for="exampleFormControlFile1">Example file input</label>
        <input value="{{$contact->email}}" type="email" name='email' class="form-control-file" id="">
        
      </div>

      <div class="form-group">
        <label for="exampleFormControlFile1">Example file input</label>
        <input value="{{$contact->numero}}" type="text" name='numero' class="form-control-file" id="">
        
      </div>

    <button class="btn btn-primary" type="submit">Envoyé</button>
  </form>

  
@endsection