@extends('theme.backoffice.layouts.admin')

@section('title', 'Usuarios del sistema')

@section('head')
@endsection

@section('breadcrumbs')
{{-- <li> <a href=""></li> --}}
<li> <a href="{{ route('backoffice.user.index') }}"> Usuarios del sistema</li>
@endsection

@section('dropdown_settings')
{{-- <li> <a href=""></li> --}}
<li><a class="grey-text text-darkeb-2" href="{{ route('backoffice.user.create') }}">Crear usuario</a>
</li>
@endsection

@section('content')
<div class="section">
    <div class="divider"></div>
    <div class="section" id="basic-form">
        <div class="row">
            <div class="col s12">
                    <p class="caption"> <strong>Usuarios del sistema</strong> </p>
                <div class="card">
                    <div class="card-content">
                        <div id="responsive-table">
                            <h4 class="header"></h4>
                            <div class="row">
                                <div class="col s12">
                                    <table class="responsive-table">
                                        <thead>
                                            <tr>
                                                <th>Nombre</th>
                                                <th>Correo</th>
                                                <th>Edad</th>
                                                <th>Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ( $users as $user )
                                            <tr>
                                                <td><a href="{{ route('backoffice.user.show', $user) }}">{{ $user->name }}</a></td>
                                                <td>{{ $user->email }}</td>
                                                <td>{{ $user->dob }}</td>
                                                <td><a href="{{ route('backoffice.user.edit', $user) }}">Editar</a></td>

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
