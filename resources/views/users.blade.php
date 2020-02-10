@extends ('layouts.app')

@section('content')
<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Liste de compétences</title>
</head>
<body>
<h1> Utilisateurs </h1>

<table>
    <thead>
        <tr>
            <td>id</td>
            <td>name</td>
            <td>email</td>
            <td>competences</td>
        </tr>
    </thead>
    <tbody>    
            <tr>
                <th> {{ $users -> id }} </th>
                <td> {{ $users -> name }} </td>
                <td> {{ $users -> email }} </td>
                <td>
                    @foreach ($users->skills as $skill)
                        {{ $skill -> name }}  {{ $skill->pivot -> level }}
                    @endforeach
                </td>
            </tr>
            
        
    </tbody>
</table>


<a href="{{ route('skill_user') }}">Ajouter une Compétence</a>
</body>
</html>
@endsection