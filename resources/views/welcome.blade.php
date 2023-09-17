<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel Routes</title>

    </head>
    <body>
     <div><h1>Wellcome page!</h1><br />Page: @if (isset($page)) {{ $page }} @endif</div>
     <div>
     <strong>Routes</strong><br />
     <a href="{{ route('page.a') }}">Page a</a><br />

     </div>
    </body>
</html>
