@extends('Plantilla')

@section('contenido')

        @if (session()->has('confirmacion'))

        {!!
            "<script>
            Swal.fire(
            'Bien hecho!',
            'Tu recuerdo se guardó!',
            'success'
            )
            </script>
        "!!}
            
        @endif


    <div class="container mt-5 col-md-7">
        <h1 class="display-2 text-center mb-5 fw-bold"> Registrar </h1>
        @if ($errors->any())
        @foreach ($errors->all() as $error)    
        
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>{{ $error }}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        @endforeach
        @endif
            
       

        <div class="card text-center  mb-5 ">

            <div class="card-header fw-bold"> 
                QUERIDO DIARIO !... 
            </div>

            <div class="card-body">
                <form  class="m-4" method="post" action="{{route('recuerdo.store')}}">
                    
                    @csrf

                    <div class="mb-3">
                        <label class="form-label fw-bold" > Título : </label>
                        <input  type="text" class="form-control"
                                        name="txtTitulo" 
                                        placeholder="ingrese un titulo" 
                                        value="{{old('txtTitulo')}}"
                                        />
                                       <p class="text-warning fst-italic fw-bold">
                                        {{$errors->first('txtTitulo')}}
                                       </p> 
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold" > Recuerdo : </label>
                        <input  type="text" class="form-control"
                                        name="txtRecuerdo" 
                                        placeholder="ingrese el contenido del recuerdo" 
                                        value="{{old('txtRecuerdo')}}"
                                        />
                                        <p class="text-warning fst-italic fw-bold">
                                        {{$errors->first('txtRecuerdo')}}
                                        </p> 
                    </div>
 
                    
            </div>

            <div class="card-footer text-muted">
                <div class="d-grid gap-2 col-6 mx-auto mt-2 mb-2">
                    <button class="btn btn-warning fw-bold" type="submit"> Guardar recuerdo </button>
            </div>
            
        </form>
            </div>

          </div>

    </div>
    

@stop
