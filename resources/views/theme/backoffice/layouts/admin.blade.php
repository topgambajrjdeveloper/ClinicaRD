<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <title>@yield('title')</title>
  @include('theme.backoffice.layouts.includes.head')
</head>
<body>
  @include('theme.backoffice.layouts.includes.loading')
  @include('theme.backoffice.layouts.includes.header')
  <div id="main">
    <div class="wrapper">
      @include('theme.backoffice.layouts.includes.sidebar-left')
      <section id="content">
        @yield('content')
      </section>
      @include('theme.backoffice.layouts.includes.sidebar-right')
    </div>
  </div>
  @include('theme.backoffice.layouts.includes.footer')
  @include('theme.backoffice.layouts.includes.foot')
</body>
</html>
