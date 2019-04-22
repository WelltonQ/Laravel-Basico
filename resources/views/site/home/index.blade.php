@extends('site.templates.template1')

@section('content')

    <h1> Home Page </h1>
    {{ $var1 }}
    
    @if($var1 == '1234')
    <p>É igual!</p>
    @else
    <p>É diferente!</p>
    @endif

    @unless($var1 == 123)
    <p>Não é igual... Unless</p>
    @endunless

    @for($i = 0 ; $i <= 10; $i++)
        <p>Valor: {{$i}}</p>
    @endfor


@endsection

    @push('scripts')
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    @endpush