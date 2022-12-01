@extends('Plantilla')

@section('contenido')




    <div class="container mt-5 col-md-7">
        <h1 class="display-2 text-center mb-5 fw-bold"> Eliminar recuerdo </h1>
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
                {{ date('D/M/Y') }}
            </div>

            <div class="card-body">
                

                    <div class="mb-3">
                        
                        <label class="form-label fw-bold" > <h2> ¿ Deseas eliminar el recuerdo? ... </h2></label>
                        <h3><label>{{$consultaId->titulo}}</label></h3>
                        <label >{{$consultaId->recuerdo}}</label>
                        
                    </div>
                    
            </div>

            <form method="POST" action="{{route('recuerdo.destroy',$consultaId->idRecuerdos)}}">
                    
                @csrf
                {{--//disfrazate de delete para que te deje pasar la ruta--}}
                @method('delete')
                

            <div class="card-footer text-muted">
                    <a type="button" class="btn btn-warning fw-bold " href="{{route('recuerdo.index')}}" type="submit" > Cancelar </a>
                    
                    <button type="submit" class="btn btn-danger fw-bold " > si, autorizo </button>

               
            </div>
               </form>      
                    
                
            
            
            </div>

          </div>

    
    

@stop
