 @extends('components.home.mainLayout')
 @section('content')
     @include('components.layout.Home.header')

     <div id="page_wrapper" class="wrapper">
         @include('components.layout.Home.about-personal')
         @include('components.layout.Home.services')
     </div>
 @endsection
