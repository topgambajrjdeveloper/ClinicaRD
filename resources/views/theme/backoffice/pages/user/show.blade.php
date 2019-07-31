@extends('theme.backoffice.layouts.admin')

@section('title', $user->name)

@section('head')
@endsection

@section('breadcrumbs')
{{-- <li> <a href=""></li> --}}
<li> <a href="{{ route('backoffice.user.index') }}"> Usuarios del Sistema</li>
<li> {{ $user->name }}</li>
@endsection

@section('content')
<div class="section">
    <div class="divider"></div>
    <div id="basic-form" class="caption">
        <div class="row">
            <div class="col s12 m8">
                <div class="card">
                    <div class="card-content">
                        <span class="card-title">{{ $user->name }}</span>
                    </div>
                    <div class="card-action">
                        <a href=""></a>
                        <a href=""></a>
                    </div>
                </div>
            </div>
            <div class="col s12 m4">
                @include('theme.backoffice.pages.user.includes.menu_nav')
            </div>
        </div>
    </div>
</div>

<form method="post" action="{{ route('backoffice.user.destroy', $user) }}" name="delete_form">
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
