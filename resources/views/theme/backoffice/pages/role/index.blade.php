@extends('theme.backoffice.layouts.admin')

@section('title', 'Clínica RodMan | Indice de todo los roles')

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
                      <h4 class="header"> Listado de Roles del sistema </h4>
                      <table>
                        <thead>
                              <tr>
                                  <th>#</th>
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
                                <td><a href="#">Ver</a></td>
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
@endsection

@section('foot')
@endsection
