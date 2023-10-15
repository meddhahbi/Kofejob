@extends('Layouts.site')

@section('content')
<br><br><br><br><br><br>
    <h1>Ajouter un candidat</h1>
    <form action="{{ route('Front.Condidat.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nom">Nom</label>
            <input type="text" name="nom" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="prenom">Prénom</label>
            <input type="text" name="prenom" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="lettreMotivation">Lettre de motivation</label>
            <textarea name="lettreMotivation" class="form-control" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Ajouter</button>
    </form>
@endsection
    