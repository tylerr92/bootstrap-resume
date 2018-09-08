<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>@yield('title', app_name())</title>
  <meta name="description" content="@yield('meta_description', 'Tyler Radlicks Resume and Portfolio')">
  <meta name="author" content="@yield('meta_author', 'Tyler Radlick')">
  @yield('meta')

  @stack('before-styles')

  {{ style(mix('css/app.css')) }}

  @stack('after-styles')
</head>

<body>

  <!-- Header -->
  @include('header')

  @yield('content')

  <!-- Footer -->
  @include('footer')

  <!-- Scripts -->
  @stack('before-scripts')
  {!! script(mix('js/manifest.js')) !!}
  {!! script(mix('js/vendor.js')) !!}
  {!! script(mix('js/app.js')) !!}
  @stack('after-scripts')
</body>

</html>
