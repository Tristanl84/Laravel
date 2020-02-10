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

  <ul>
  @foreach ($users_admin as $user)
      <li> {{ $user -> id }} </li>
      <li> {{ $user -> name }} </li>
      <li> {{ $user -> email }} </li> <br>
  @endforeach
  </ul>
 
</table> 

</body>
</html>
@endsection