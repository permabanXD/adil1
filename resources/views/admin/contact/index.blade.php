@extends('layouts/admin')

@section('content')




<table>

    <thead>
        <tr>
            <th>
                Contact
            </th>
        </tr>
        <tr>
            <th>numero</th>
            <th>email</th>
            <th>adresse</th>
            <th>action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($contact as $item)

        <tr>
            <td>{{$item->numero}}</td>
            <td>{{$item->email}}</td>
            <td>{{$item->adresse}}</td>
            <td><a class="btn btn-warning"href="{{route('contact.edit', $item)}}">editer</a></td>
            
       
        </tr>
            
        @endforeach
    </tbody>
</table>
    
@endsection