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
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

  @stack('after-styles')
</head>

<body>

  <!-- Header -->
  @include('header')
<div class="container">
  <main class="mx-5">
    @yield('content')
  </main>
</div>
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
