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
                                                    <h4> Rol: {{ $permissions->name }}</h4>
                                                    <p> Descripción: {{ $permissions->description }}</p>
                                                    <p> Slug: {{ $permissions->slug }}</p>
                                                </div>
                                                <div class="card-content">

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
