<h1>ENCUESTA DE SATISFACCION</h1>

{!! Form::open(['url' => 'foo/bar']) !!}

{!!  Form::label('p1', 'Cómo considera la apariencia del restaurante:') !!}
<br><br>
 {!! Form::radio('rp1', 'Excelente', true) !!} {!!  Form::label('lp1', 'Excelente:') !!}
 {!! Form::radio('rp1', 'Buena', false) !!} {!!  Form::label('lp1', 'Buena') !!}
 {!! Form::radio('rp1', 'Regular', false) !!} {!!  Form::label('lp1', 'Regular') !!}
 {!! Form::radio('rp1', 'Mala', false) !!} {!!  Form::label('lp1', 'Mala') !!}
{!! Form::close() !!}
