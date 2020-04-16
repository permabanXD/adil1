@extends('layouts/admin')

@section('content')




<table>

    <thead>
        <tr>
            <th>
                newsletter
            </th>
        </tr>
        <tr>
            <th>id</th>
            <th>nom</th>
            <th>email</th>
            <th>text</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($newsletter as $item)

        <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->nom}}</td>
            <td>{{$item->email}}</td>
            <td>{{$item->text}}</td>
            
        </tr>
            
        @endforeach
    </tbody>
</table>
    
@endsection