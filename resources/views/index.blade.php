<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Fraudet</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
    </head>
    <body>
      {{ Form::open(array('url' => 'lkcrawl')) }}
        {{ Form::label('l-link', 'URL : ') }}
        {{ Form::text('link', '', ['class'=>'form-']) }}
        {{ Form::submit('Search') }}
      {{ Form::close() }}
    </body>
</html>
