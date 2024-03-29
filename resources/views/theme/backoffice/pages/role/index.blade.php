@extends('theme.backoffice.layouts.admin')

@section('title', 'Indice de todos los roles')

@section('head')
@endsection

@section('breadcrumbs')
{{-- <li> <a href=""></li> --}}
<li> <a href="{{ route('backoffice.role.index') }}"> Roles del Sistema</li>
@endsection

@section('dropdown_settings')
{{-- <li> <a href=""></li> --}}
<li><a class="grey-text text-darkeb-2" href="{{ route('backoffice.role.create') }}">Crear rol</a>
</li>
@endsection

@section('content')
<div class="section">
    <div class="divider"></div>
    <div class="section" id="basic-form">
        <div class="row">
            <div class="col s12">
                    <p class="caption"> <strong>Rol del sistema</strong> </p>
                <div class="card">
                    <div class="card-content">
                        <div id="responsive-table">
                            <h4 class="header"></h4>
                            <div class="row">
                                <div class="col s12">
                                    <table class="responsive-table">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Nombre</th>
                                                <th>Descripción</th>
                                                <th>Slug</th>
                                                <th>Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ( $roles as $role )
                                            <tr>
                                                <td>{{ $role->id }}</td>
                                                <td>{{ $role->name }}</td>
                                                <td>{{ $role->description }}</td>
                                                <td>{{ $role->slug }}</td>
                                                <td><a class="waves-effect waves-light btn"
                                                        href="{{ route('backoffice.role.edit', $role) }}">Editar {{$role->name}}</a> <a
                                                        class="waves-effect waves-light btn"
                                                        href="{{ route('backoffice.role.show', $role) }}">Ver {{$role->name}}</td>
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
