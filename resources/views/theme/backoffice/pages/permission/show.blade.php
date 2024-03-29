@extends('theme.backoffice.layouts.admin')

@section('title', 'Ver permisos')

@section('head')
@endsection

@section('breadcrumbs')
{{-- <li> <a href=""></li> --}}
<li> <a href="{{ route('backoffice.permission.index') }}"> Permisos del Sistema</li>
<li> {{ $permission->name }}</li>
@endsection

@section('content')
<div class="section">
    <div id="basic-form" class="section">
        {{ csrf_field() }}
        <div class="row">
            <div class="col s12 m12 l12">
                <div class="card-panel">
                    <div class="row">
                        <div class="divider"></div>
                        <div id="horizontal-card" class="section">
                            <div class="row">
                                <div class="">
                                    <div class="">
                                        <div class="card">
                                            <div class="card-stacked">
                                                <div class="card-content">
                                                    <h4> Rol: {{ $permission->name }}</h4>
                                                    <p> Descripción: {{ $permission->description }}</p>
                                                    <p> Slug: {{ $permission->slug }}</p>
                                                </div>
                                                <div class="card-content">
                                                    <a href="{{ route('backoffice.permission.edit', $permission)}}">Editar</a>
                                                    <a href="#" onclick="enviar_form()">Eliminar</a>
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

<form method="post" action="{{ route('backoffice.permission.destroy', $permission) }}" name="delete_form">
    {{ csrf_field() }}
    {{ method_field('DELETE') }}
</form>
@endsection

@section('foot')
<script>
    function enviar_form() {
        document.delete_form.submit();
    }
</script>
@endsection
