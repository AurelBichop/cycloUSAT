@extends('layouts')

@section('content')
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Points de Passages</th>
                <th scope="col">Commentaires</th>
                <th scope="col">Niveau Parcour</th>
                <th scope="col">Date</th>
                <th scope="col">Nb Kilometres</th>
            </tr>
        </thead>
        <tbody>
        @foreach($parcours as $parcour)
            <tr>
                <th scope="row">{{$parcour->id}}</th>
                <td>{{$parcour->points_de_passages}}</td>
                <td>{{$parcour->commentaires}}</td>
                <td>{{$parcour->parcoursNiv}}</td>
                <td>{{date('d-m-Y',strtotime($parcour->date))}}</td>
                <td>{{$parcour->kilometres}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
