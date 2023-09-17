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
     <a href="/page_a/a">Page a: accept any parameter</a><br />
     <a href="/page_b/b">Page b: route with name</a><br />
     <a href="/page_c/onlyletters">Page c: only letters</a><br />
     <a href="/page_d/1234">Page d: only numbers</a><br />
     <a href="/page_e/1234/onlyletters">Page e: only numbers/only letters</a><br />
     <a href="/page_f/1234onlyletters">Page f: only numbers/only letters using different method</a><br />
     <a href="/page_g/b7c91937-74b2-4230-97cf-92433cc6dd9a">Page g: accept uuid as parameter</a><br />
     <a href="/page_h/this_is_optional">Page h: with optional parameter</a><br />
     </div>
    </body>
</html>
