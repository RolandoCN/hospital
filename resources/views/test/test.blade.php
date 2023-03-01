@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Test
            
        </h1>
    
    </section>

    <section class="content">

        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Formulario</h3>

                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                        title="Collapse">
                        <i class="fa fa-minus"></i></button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip"
                        title="Remove">
                        <i class="fa fa-times"></i></button>
                </div>
            </div>
            <div class="box-body">
                <form class="form-horizontal" onsubmit="return validaForm()" autocomplete="off" method="post" action="{{ url('/persona/add') }}">
                    {{ csrf_field() }}
                   
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Nombres</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nombre" placeholder="Nombres">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-2 control-label">Apellidos</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="apellidos" placeholder="Apellidos">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-success btn-sm">Guardar</button>
                        </div>
                    </div>
                
                </form>
            </div>
          
        </div>

    </section>

    <script src="/js/test.js"></script>
@endsection
