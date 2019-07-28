@extends('theme.backoffice.layouts.admin')

@section('title', 'Clínica RodMan | Ver todos los roles')

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
                                  <img src="/images/gallary/11.png">
                                </div>
                                <div class="card-stacked">
                                  <div class="card-content">
                                    <p>I am a very simple card with link. I am good at containing small bits of information.</p>
                                  </div>
                                  <div class="card-action">
                                    <a href="#">This is a link</a>
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
@endsection

@section('foot')
@endsection
