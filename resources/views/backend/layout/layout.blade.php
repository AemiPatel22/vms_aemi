<!DOCTYPE html>
<html lang="en">

@include('backend.includes.header')

   <body>
      <div class="main-wrapper">

        @include('backend.includes.body_header')

        @include('backend.includes.sidebar')
        @include('backend.includes.modal')

         <div class="page-wrapper">

            @yield('section')

         </div>
      </div>
      @include('backend.includes.footer')
   </body>
</html>
