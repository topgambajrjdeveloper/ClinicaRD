@extends('theme.backoffice.layouts.admin')

@section('title', 'Permisos del sistema')

@section('head')
@endsection

@section('breadcrumbs')
{{-- <li> <a href=""></li> --}}
<li> <a href="{{ route('backoffice.permission.index') }}"> Permisos del Sistema</li>
@endsection

@section('dropdown_settings')
{{-- <li> <a href=""></li> --}}
<li><a class="grey-text text-darkeb-2" href="{{ route('backoffice.permission.create') }}">Crear permiso</a>
</li>
@endsection

@section('content')
<div class="section">
    <p class="caption"> <strong>Permisos del sistema</strong> </p>
    <div class="divider"></div>
    <div class="section" id="basic-form">
        <div class="row">
            <div class="col s12">
                <div class="card">
                    <div class="card-content">
                        <div id="responsive-table">
                            <h4 class="header"></h4>
                            <div class="row">
                                <div class="col s12">
                                    <table class="responsive-table">
                                        <thead>
                                            <tr>
                                                <th>Rol</th>
                                                <th>Nombre</th>
                                                <th>Descripción</th>
                                                <th>Slug</th>
                                                <th>Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ( $permissions as $permission )
                                            <tr>
                                                <td>{{ $permission->role_id }}</td>
                                                <td>{{ $permission->name }}</td>
                                                <td>{{ $permission->description }}</td>
                                                <td>{{ $permission->slug }}</td>
                                                <td><a class="waves-effect waves-light btn"
                                                        href="{{ route('backoffice.permission.edit', $permission) }}">Editar </a>
                                                    <a class="waves-effect waves-light btn"
                                                        href="{{ route('backoffice.permission.show', $permission->role) }}">Ver
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

@endsection

@section('foot')
@endsection
