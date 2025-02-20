<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Yuru Online</title>
    <link href="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.snow.css" rel="stylesheet" />

    @vite(['resources/js/app.js', 'resources/css/app.css'])
</head>
<body>
    <div id="app"></div> <!-- This is where your Vue app will mount -->

    <script src="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.js"></script>
    <script>
        const quill = new Quill('#quill_editor', {
          theme: 'snow'
        });
      </script>
</body>
</html>
