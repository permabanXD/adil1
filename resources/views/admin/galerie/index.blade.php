@extends('layouts/admin')

@section('content')


<div class="text-center"><a class="btn btn-primary"href="{{route('galerie.create')}}">ajouter</a></div>

<table>

    <thead>
        <tr>
            <th>
                galerie
            </th>
        </tr>
        <tr>
            <th>id</th>
            <th>image</th>
            <th>action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($images as $item)

        <tr>
            <td>{{$item->id}}</td>
            <td><img src="{{asset('storage/'.$item->image)}}" alt=""></td>
            <td><a class="btn btn-warning"href="{{route('galerie.edit', $item)}}">editer</a></td>
            <td><form method="POST" action="{{route('galerie.destroy', $item)}}">@csrf

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