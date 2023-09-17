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
     <a href="/">Home</a><br />
     <a href="/page_a">Page a</a><br />
     <a href="/page_b">Page b</a><br />
     <a href="/page_c">Page c</a><br />
     <a href="/page_d">Page d</a><br />
     <a href="/page_e">Page e</a><br />
     <a href="/page_f">Page f</a><br />
     <a href="/page_g">Page g</a><br />
     <a href="/page_h>Page h</a><br />

     </div>
    </body>
</html>
