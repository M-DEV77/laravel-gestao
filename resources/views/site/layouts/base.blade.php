<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../base.css">
    <title>App Gestão / @yield('titulo')</title>
</head>
<body>
 @component('site.layouts.partials.menuSite')   
  @endcomponent
  
 @component('site.layouts.partials.main')
  @endcomponent

 @component('site.layouts.partials.footer')
  @endcomponent
</body>
</html>
