@extends('master')

@section('content')
    
    @foreach ($pedidos as $pedido)

    <li>{{ $pedido->testTitle }}</li>

    @endforeach

    {!! Form::open() !!}

    <div class="form-group"> 

        {!! Form::text('test',null, ['class'=> 'form-control']) !!}


    </div>
               
    {!! Form::close() !!}




@stop
