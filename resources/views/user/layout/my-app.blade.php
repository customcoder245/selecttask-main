@include('user.layout.head')
@php 
 $user_id=Auth::user()->id;
@endphp

 <header class="adminHeader d-flex">
        <a class="navbar-brand site-Logo" href="{{ url('/')}}"><img src="{{ url('/public/user/')}}/assets/images/logo.svg" alt="" class="img-fluid"></a>
        <ul class="mainNav-1 ml-auto d-flex">
            <li>
                <span class="rightImg"><img src="{{ get_profile_image_src($user_id)}}" alt=""></span>
            </li>
        </ul>
    </header>
    <figure class="aboutBanner">
        <img src="{{ get_cover_image_src($user_id) }}" alt="">
    </figure>

 @yield('content')

@include('user.layout.footer')