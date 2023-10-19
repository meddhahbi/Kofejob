@extends('Layouts.site')

@section('content')
<br><br><br><br><br><br>
    <h1>Liste des articles</h1>
   

   
</style>

<table class="table">
    <thead>
        <tr>
            <th>Titre</th>
            <th>Description</th>
            <th>Auteur</th>
            <th>Image</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($blog as $b)
            <tr>
                <td>{{ $b->titre }}</td>
                <td>{{ $b->description }}</td>
                <td>{{ $b->auteur }}</td>
                <td><img src="{{ asset('uploads/' . $b->image) }}" alt="Blog Image" width="100"></td>
                <td class="table-actions">
                   
                    <form action="{{ route('DestroyBlogAdmin', $b->id) }}" method="POST">
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