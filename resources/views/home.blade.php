<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, minimal-ui">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Icon Internel App</title>
  <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
  <div id="app">
    <v-app id="inspire">
      <app-home></app-home>
    </v-app>
  </div>


  <script type="text/javascript" src="{{asset('js/app.js')}}"></script>
</body>
</html>
