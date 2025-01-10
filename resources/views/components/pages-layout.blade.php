<!DOCTYPE html>
<html lang="en">
@include('pages_includes.head')
<body>
   
    @include('pages_includes.nav')
      
    {{ $slot }}


@include('pages_includes.footer')
   
</body>
</html>