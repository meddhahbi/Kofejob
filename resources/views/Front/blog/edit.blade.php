@extends('Layouts.site')

@section('content')
<br><br><br><br><br><br>  
    <h1>Modifier l'article</h1>
    <form action="{{ route('UpdateBlog', $blog->id) }}" method="post" enctype="multipart/form-data">
        @csrf
       
        <div class="form-group">
            <label for="titre">Titre</label>
            <input type="text" name="titre" class="form-control" value="{{ $blog->titre }}" required>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <input type="text" name="description" class="form-control" value="{{ $blog->description }}" required>
        </div>
        <div class="form-group">
            <label for="auteur">Auteur</label>
            <input type="text" name="auteur" class="form-control" value="{{ $blog->auteur }}" required>
        </div>
        <div class="form-group">
            <label for="image">Image</label>
            <input type="file" name="image" class="form-control" value="{{ $blog->image }}" required>
        </div>
      
        
        <button type="submit" class="btn btn-primary">mettre a jour</button>
    </form>
@endsection