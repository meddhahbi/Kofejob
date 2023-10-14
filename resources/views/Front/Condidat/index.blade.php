@extends('Layouts.site')

@section('content')
<br><br><br><br><br><br>
    <h1>Liste des candidats</h1>
   
    <a href="{{ route('Front.Condidat.create') }}" class="btn btn-primary">Ajouter un candidat</a>

    <table class="table">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Email</th>
                <th>lettre Motivation</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($condidats as $condidat)
                <tr>
                    <td>{{ $condidat->nom }}</td>
                    <td>{{ $condidat->prenom }}</td>
                    <td>{{ $condidat->email }}</td>
                    <td>{{ $condidat->lettreMotivation }}</td>
                    <td>
                       
                        <a href="{{ route('Front.Condidat.edit', $condidat->id) }}" class="btn btn-warning">Modifier</a>
                        <form action="{{ route('Front.Condidat.destroy', $condidat->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
