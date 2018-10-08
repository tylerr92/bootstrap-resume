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

  <!-- Include webpack stylesheet -->
  {{ style(mix('css/app.css')) }}

  <!-- Fontawsome 5 -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous" />
  <!-- TempusDominus DateTime Picker CSS -->
  <link rel="stylesheet" href="css/tempusdominus-bootstrap-4.css" />
  <!-- sweetalert2 JS -->
  <script src="https://unpkg.com/sweetalert2@7.18.0/dist/sweetalert2.all.js"></script>

  <!-- Google Analytics Tracking Code -->
  {!! config('site-settings.tracking_code') !!}

  @stack('after-styles')
</head>

<body>

  <!-- Header -->
  @include('header')

  <!-- Start Container -->
  <div class="container">
    <main class="mx-5">
      <!-- Laravel Errors -->
      @if ($errors->any())
      <script>
        swal({
          title: 'Error',
          text: 'Your form submission failed. Try again.',
          type: 'error',
          showConfirmButton: false,
          showCancelButton: true,
          cancelButtonText: 'Try Again',
          onClose: () => {
            $("#contactModal").modal() }
        })
      </script>
      @endif

      <!-- Display Custom Alerts -->
      @include('sweetalert::alert')

      @yield('content')
    </main>
  </div>

  <!-- Footer -->
  @include('footer')

  <!-- Scripts -->
  <!-- Moment JS Script -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"></script>

  @stack('before-scripts')
  {!! script(mix('js/manifest.js')) !!}
  {!! script(mix('js/vendor.js')) !!}
  {!! script(mix('js/app.js')) !!}
  @stack('after-scripts')
</body>

</html>
