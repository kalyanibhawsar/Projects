<div class="border-end border-warning h-100 ">
    <div class="text-center">
        <img src="images/d4.png" alt="picture" class="img-fluid rounded-circle mt-5">
        <h5 class="text-white text-center mt-3 st-font">Profile Name</h5>
    </div>
    <nav class="nav flex-column text-center mt-4">
        <a href="{{route('home')}}" class="nav-link {{ Request::routeIs('home')? 'active' : '' }}">Home</a>
        <a href="{{route('service')}}" class="nav-link {{ Request::routeIs('service')? 'active' : '' }}">Services</a>
        <a href="{{route('skill')}}" class="nav-link {{ Request::routeIs('skill')? 'active' : '' }}">Skill</a>
        <a href="{{route('contact')}}" class="nav-link {{ Request::routeIs('contact')? 'active' : '' }}">Contact</a>
    </nav>
</div>