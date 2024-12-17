<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Crudapp</title>
        </head>
 <body>
 <form method="POST" action="/" enctype="multipart/form-data">
    @csrf
    <input type="file" name="image" id="image">
    <button>Submit</button>
</form>
<div class="image">
<img src="{{ asset(session(`uploads/${image}`)) }}" alt="Uploaded Image" style="max-width: 100%; height: auto;">
</div>
 </body>
</html>
