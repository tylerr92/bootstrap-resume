<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>@yield('title', app_name())</title>
  <meta name="description" content="@yield('meta_description', 'Tyler Radlicks Resume and Portfolio')">
  <meta name="author" content="@yield('meta_author', 'Tyler Radlick')">
  <style type="text/css">{{ file_get_contents(app_path() . '/../resources/views/emails/email-bootstrap.css') }}</style>
</head>
<body class="bg-light">
  <div class="container">
    <main class="mt-4">
      @yield('content')
    </main>
  </div>
</body>
</html>
