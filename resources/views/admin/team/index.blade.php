@extends('layouts/admin')

@section('content')


<div class="text-center"><a class="btn btn-primary"href="{{route('team.create')}}">ajouter</a></div>

<table>

    <thead>
        <tr>
            <th>
                team
            </th>
        </tr>
        <tr>
            <th>id</th>
            <th>image</th>
            <th>texte</th>
            <th>nom</th>
            <th>role</th>
            <th>action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($team as $item)

        <tr>
            <td>{{$item->id}}</td>
            <td><img src="{{asset('storage/'.$item->image)}}" alt=""></td>
            <td>{{$item->text}}</td>
            <td>{{$item->role->role}}</td>
            <td>{{$item->nom}}</td>
            <td><a class="btn btn-warning"href="{{route('team.edit', $item)}}">editer</a></td>
            <td><form method="POST" action="{{route('team.destroy', $item)}}">@csrf

                @method(
                    'delete'
                )

                <button class='btn btn-danger'type="submit">Tout détruire</button>
            </form>
        </td>
        </tr>
            
        @endforeach
    </tbody>
</table>
    
@endsection