@extends('theme.backoffice.layouts.admin')

@section('title', 'Asignar Roles')

@section('head')
@endsection

@section('breadcrumbs')
{{-- <li> <a href=""></li> --}}
  <li> <a href="{{ route('backoffice.role.index') }}"> Usuarios del Sistema</li>
    <li> <a href="{{ route('backoffice.role.show', $user ) }}">{{ $user->name }}</li>
  <li>Asignar roles</li>
@endsection

@section('dropdown_settings')
{{-- <li> <a href=""></li> --}}
@endsection

@section('content')
<div class="section">
  <div id="basic-form" class="section">
    <div class="row">
      <div class="col s12 m8 offset-m2">
        <div class="card-panel">
          <h4 class="header2">Selecciona los roles que deseas asignar</h4>
          <div class="row">
            <form class="col s12" method="post" action="{{ route('backoffice.user.role_assign', $user) }}">
                {{ csrf_field() }}
                    @foreach ($roles as $role)
                    <p>
                        <input type="checkbox" id="{{ $role->id }}" name="roles[]"/>
                        <label>
                            <span>{{ $role->name }}</span>
                        </label>
                    </p>
                    @endforeach

              <div class="row">
                <div class="input-field col s12">
                  <button class="btn waves-effect waves-light right" type="submit">Asignar roles
                    <i class="material-icons right">send</i>
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection

@section('foot')
@endsection
