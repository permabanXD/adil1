@extends('layouts/admin')

@section('content')


<div class="text-center"><a class="btn btn-primary"href="{{route('role.create')}}">ajouter</a></div>

<table>

    <thead>
        <tr>
            <th>
                role
            </th>
        </tr>
        <tr>
            <th>id</th>
            <th>role</th>
            <th>special</th>
            <th>action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($role as $item)

        <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->role}}</td>
            <td>{{$item->special}}</td>
            <td><a class="btn btn-warning"href="{{route('role.edit', $item)}}">editer</a></td>
            <td><form method="POST" action="{{route('role.destroy', $item)}}">@csrf

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