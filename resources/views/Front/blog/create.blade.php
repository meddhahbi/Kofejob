@extends('Layouts.site')

@section('content')
<br><br><br><br><br><br>
    <h1>Ajouter un article</h1>
    <form action="{{ route('StoreBlog') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="nom">Titre </label>
            <input type="text" name="titre" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="prenom">Description</label>
            <input type="text" name="description" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="email">Auteur</label>
            <input type="text" name="auteur" class="form-control" required>
        </div>

        <div class="form-group">
                <label  for="inputImage">Image:</label>
                <input
                    type="file"
                    name="image"
                    id="inputImage"
                    class="form-control ">
   
            </div>
        
        <button type="submit" class="btn btn-primary">Ajouter</button>
    </form>
@endsection