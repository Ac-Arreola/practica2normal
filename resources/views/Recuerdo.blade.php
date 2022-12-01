@extends('Plantilla')

@section('contenido')

@if (session()->has('Actualizar'))

{!!
    "<script>
    Swal.fire(
    'Bien hecho!',
    'Tu recuerdo se actualizó!',
    'success'
    )
    </script>
"!!}
    
@endif

@if (session()->has('Eliminar'))
    <script>
    Swal.fire(
    'Bien hecho!',
    'Tu recuerdo se eliminó correctamente!',
    'success'
    )
    </script>
    
@endif

    <h1 class="display-1 mt-4 mb-4 text-center fw-bold"> Consultar Recuerdos </h1>
    
    {{--for each para iterar cada uno de los recuerdos
    consulta rec que voy a iterar a traves de consulta y que quiero acceder al campo fecha--}}
    @foreach ($ConsultaRec as $consulta)
    
     {{--usamos un grid para decirle que solo ocupe 6 espacios--}}
    <div class="container col-md-6 mb-5">


        {{--card para iterar los registros--}}
        <div class="card text-center">

            {{--card header--}}
            <div class="card-header">
                <h5 class="text-primary text-center"> {{$consulta->fecha}} </h5>
            </div>

            {{--card body--}}
            <div class="card-body">

                    <h5 class="card-title">  {{$consulta->titulo}}  </h5>
                    <p class="card-text">  {{$consulta->recuerdo}}    </p>
            </div>

            {{--card footer--}}
            <div class="card-footer text-muted">
                <a href="{{route('recuerdo.edit',$consulta->idRecuerdos)}}" class="btn btn-warning">Actualizar</a>
                <a href="{{route('recuerdo.show',$consulta->idRecuerdos)}}" class="btn btn-danger">Eliminar</a>
            </div>

          </div>

    </div>
    @endforeach
@stop
