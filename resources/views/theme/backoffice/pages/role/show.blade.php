@extends('theme.backoffice.layouts.admin')

@section('title', 'Clínica RodMan | Ver roles')

@section('head')
@endsection

@section('content')
<div class="section">
    <div id="basic-form" class="section">
                {{ csrf_field() }}
          <div class="row">
            <div class="col s12 m8 offset-m2">
              <div class="card-panel">
                <div class="row">
                    <div class="divider"></div>
                    <div id="horizontal-card" class="section">
                      <h4 class="header"> <strong>Rol de:</strong> {{ $role->name }} </h4>
                      <div class="row">
                        <div class="col s12 m12 l12">
                          <div class="row">
                            <div class="col s12 m6 l6">
                              <div class="card horizontal">
                                <div class="card-image">
                                  <img src="/images/role/admin.svg">
                                </div>
                                <div class="card-stacked">
                                    <div class="card-content text-center">
                                        <p><strong>Rol: </strong> {{ $role->name }}</p>
                                    </div>
                                    <div class="card-content text-center">
                                        <p> <strong>Descricción: </strong> {{ $role->description }}</p>
                                        <p><strong>Slug: </strong> {{ $role->slug }}</p>
                                    </div>
                                  <div class="card-action">
                                    <a  href="{{ route('backoffice.role.index') }}"> Volver</a> 
                                    <a  href="#" onclick="enviar_form()"> Eliminar</a> 
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>
              </div>
            </div>
          </div>          
    </div>
</div>
<form method="post" action="{{ route('backoffice.role.destroy', $role) }}" name="delete_form">
        {{ csrf_field() }}
        {{ method_field('DELETE') }}
</form>
@endsection

@section('foot')
    <script>
        function enviar_form()
        {
            document.delete_form.submit();       
        }
    </script>
@endsection
