<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite(["resources/css/app.css","resources/js/app.js"])

  <title>Laracars</title>
</head>
<body>
  @include("layouts.partials.header")
  @yield("content")
</body>
</html>