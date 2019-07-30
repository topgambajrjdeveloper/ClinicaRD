@extends('theme.backoffice.layouts.admin')

@section('title', 'Ver Rol')

@section('head')
@endsection

@section('breadcrumbs')
{{-- <li> <a href=""></li> --}}
<li> <a href="{{ route('backoffice.role.index') }}"> Roles del Sistema</li>
<li> {{ $role->name }}</li>
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
                                                    <h4> Rol: {{ $role->name }}</h4>
                                                    <p> Descripción: {{ $role->description }}</p>
                                                    <p> Slug: {{ $role->slug }}</p>
                                                </div>
                                                <div class="card-content">
                                                    <table class="responsive-table">
                                                        <thead>
                                                            <tr>
                                                                <th>Nombre</th>
                                                                <th>Descripción</th>
                                                                <th>Slug</th>
                                                                <th>Acciones</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ( $permissions as $permission )
                                                            <tr>
                                                                <td>{{ $permission->name }}</td>
                                                                <td>{{ $permission->description }}</td>
                                                                <td>{{ $permission->slug }}</td>
                                                                <td><a href="{{ route('backoffice.permission.edit', $permission) }}">Editar {{$permission->role->name}}</a>
                                                                    <a href="{{ route('backoffice.permission.show', $permission->role) }}">Ver
                                                                        {{$permission->role->name}}</td>
                                                            </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>
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
    function enviar_form() {
        document.delete_form.submit();
    }
</script>
@endsection
