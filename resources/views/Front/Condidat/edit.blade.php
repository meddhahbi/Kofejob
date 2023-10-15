@extends('Layouts.site')

@section('content')

    <h1>Modifier le candidat</h1>
    <form action="{{ route('Front.Condidat.update', $condidat->id) }}" method="post">
        @csrf
       
        <div class="form-group">
            <label for="nom">Nom</label>
            <input type="text" name="nom" class="form-control" value="{{ $condidat->nom }}" required>
        </div>
        <div class="form-group">
            <label for="prenom">Prénom</label>
            <input type="text" name="prenom" class="form-control" value="{{ $condidat->prenom }}" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" value="{{ $condidat->email }}" required>
        </div>
        <div class="form-group">
            <label for="lettreMotivation">Lettre de motivation</label>
            <textarea name="lettreMotivation" class="form-control" required>{{ $condidat->lettreMotivation }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Enregistrer les modifications</button>
    </form>
@endsection
