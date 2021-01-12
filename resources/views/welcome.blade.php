<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Laravel</title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
  <link href="{{asset('css/app.css')}}" rel="stylesheet">
  <!-- Styles -->


  <style>
    body {
      font-family: 'Nunito';
    }
  </style>
</head>

<body>

  <div id="app" class="content">

    <estudiante-component></estudiante-component>

    <hr>

    <docente-component></docente-component>

  </div>
  <script src="{{asset('js/app.js')}}"></script>
</body>

</html>