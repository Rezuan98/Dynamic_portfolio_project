<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion sidebar-scroll"  id="accordionSidebar">

  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('dashboard') }}">
      <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
      </div>
      <div class="sidebar-brand-text mx-3">Khairul Leon Portfolio </div>
  </a>

  <!-- Divider -->
  <hr class="sidebar-divider my-0">

  <!-- Nav Item - Dashboard -->
  <li class="nav-item active">
      <a class="nav-link" href="{{ route('dashboard') }}">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider">

 

  <!-- Nav Item - Pages Collapse Menu -->
  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseProfile"
        aria-expanded="true" aria-controls="collapseProfile">
        <i class="fas fa-fw fa-cog"></i>
        <span>Profile Info</span>
    </a>
    <div id="collapseProfile" class="collapse" aria-labelledby="headingProfile" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Custom Components:</h6>
            <a class="collapse-item" href="{{route('add.info')}}">Add Info</a>
            <a class="collapse-item" href="{{route('show.info')}}">Show Info</a>
        </div>
    </div>
</li>

<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseAbout"
        aria-expanded="true" aria-controls="collapseAbout">
        <i class="fas fa-fw fa-cog"></i>
        <span>About Info</span>
    </a>
    <div id="collapseAbout" class="collapse" aria-labelledby="headingAbout" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="{{route('insert.about')}}">Insert About</a>
            <a class="collapse-item" href="{{route('show.about')}}">Show About</a>
        </div>
    </div>
</li>
{{-- <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOverview"
        aria-expanded="true" aria-controls="collapseOverview">
        <i class="fas fa-fw fa-cog"></i>
        <span>Overview</span>
    </a>
    <div id="collapseOverview" class="collapse" aria-labelledby="headingOverview" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="{{route('insert.overview')}}">Insert Overview</a>
            <a class="collapse-item" href="{{route('show.overview')}}">Show Overview</a>
        </div>
    </div>
</li> --}}

<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseskill"
        aria-expanded="true" aria-controls="collapseskill">
        <i class="fas fa-fw fa-cog"></i>
        <span>Skills</span>
    </a>
    <div id="collapseskill" class="collapse" aria-labelledby="headingskill" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="{{route('add.skill')}}">Add Skills</a>
            <a class="collapse-item" href="{{route('show.skill')}}">Show Skills</a>
        </div>
    </div>
</li>
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsemessage"
        aria-expanded="true" aria-controls="collapsemessage">
        <i class="fas fa-fw fa-cog"></i>
        <span>Messages <sup style="color:yellow">{{ $unreadMessageCount ? $unreadMessageCount : "0" }}</sup></span>

    </a>
    <div id="collapsemessage" class="collapse" aria-labelledby="headingmessage" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="{{route('show.unread.message')}}">Show Unread Message</a>
            <a class="collapse-item" href="{{route('show.all.message')}}">Show All Message</a>
        </div>
    </div>
</li>

<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsetestimonial"
        aria-expanded="true" aria-controls="collapsetestimonial">
        <i class="fas fa-fw fa-cog"></i>
        <span>Testimonial </span>

    </a>
    <div id="collapsetestimonial" class="collapse" aria-labelledby="headingtestimonial" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="{{route('add.testimonial')}}">Add Testimonial</a>
            <a class="collapse-item" href="{{route('show.testimonial')}}">Show Testimonial</a>
        </div>
    </div>
</li>
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsesummery"
        aria-expanded="true" aria-controls="collapsesummery">
        <i class="fas fa-fw fa-cog"></i>
        <span>Summery </span>

    </a>
    <div id="collapsesummery" class="collapse" aria-labelledby="headingsummery" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="{{ route('add.summery') }}">Add Summery</a>
            <a class="collapse-item" href="{{ route('show.summery') }}">Show Summery</a>
        </div>
    </div>
</li>
  
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseeducation"
        aria-expanded="true" aria-controls="collapseeducation">
        <i class="fas fa-fw fa-cog"></i>
        <span>Educational Quality </span>

    </a>
    <div id="collapseeducation" class="collapse" aria-labelledby="headingeducation" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="{{ route('add.education') }}">Add Education</a>
            <a class="collapse-item" href="{{ route('show.education') }}">Show Education</a>
        </div>
    </div>
</li>

<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseexperience"
        aria-expanded="true" aria-controls="collapseexperience">
        <i class="fas fa-fw fa-cog"></i>
        <span>Professional Experience </span>

    </a>
    <div id="collapseexperience" class="collapse" aria-labelledby="headingexperience" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="{{ route('add.experience') }}">Add Experience</a>
            <a class="collapse-item" href="{{ route('show.experience') }}">Show Experience</a>
        </div>
    </div>
</li>

<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseservices"
        aria-expanded="true" aria-controls="collapseservices">
        <i class="fas fa-fw fa-cog"></i>
        <span>My Services</span>
    </a>
    <div id="collapseservices" class="collapse" aria-labelledby="headingservices" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="{{route('add.services')}}">Insert Services</a>
            <a class="collapse-item" href="{{route('show.services')}}">Show Services</a>
        </div>
    </div>
</li>

<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseapps"
        aria-expanded="true" aria-controls="collapseapps">
        <i class="fas fa-fw fa-cog"></i>
        <span>Apps </span>

    </a>
    <div id="collapseapps" class="collapse" aria-labelledby="headingapps" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="{{ route('add.apps') }}">Add Apps</a>
            <a class="collapse-item" href="{{ route('show.apps') }}">Show Apps</a>
        </div>
    </div>
</li>
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseproducts"
        aria-expanded="true" aria-controls="collapseproducts">
        <i class="fas fa-fw fa-cog"></i>
        <span>Products </span>

    </a>
    <div id="collapseproducts" class="collapse" aria-labelledby="headingproducts" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="{{ route('add.products') }}">Add products</a>
            <a class="collapse-item" href="{{ route('show.products') }}">Show Products</a>
        </div>
    </div>
</li>
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsebranding"
        aria-expanded="true" aria-controls="collapsebranding">
        <i class="fas fa-fw fa-cog"></i>
        <span>Branding </span>

    </a>
    <div id="collapsebranding" class="collapse" aria-labelledby="headingbranding" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="{{ route('add.branding') }}">Add Branding</a>
            <a class="collapse-item" href="{{ route('show.branding') }}">Show Branding</a>
        </div>
    </div>
</li>
<li class="nav-item">
    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit" class="btn btn-danger m-3">Logout</button>
    </form>
    
</li>
  <!-- Divider -->
  <hr class="sidebar-divider">

  <!-- Heading -->
  
  <!-- Nav Item - Pages Collapse Menu -->
 

  <!-- Nav Item - Charts -->
 

  <!-- Nav Item - Tables -->
 

  <!-- Divider -->
  <hr class="sidebar-divider d-none d-md-block">

  <!-- Sidebar Toggler (Sidebar) -->
 

  

</ul>