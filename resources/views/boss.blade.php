<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>


        
        <!-- @foreach ($nums as $num)
            <p>Le numéro est : {{$num}}</p>
        @endforeach -->

        @forelse ($nums as $num)
            <p>Le numéro est : {{$num}}</p>
        @empty
            <p>Le numéro est vide</p>
        @endforelse

        
    </body>
</html>