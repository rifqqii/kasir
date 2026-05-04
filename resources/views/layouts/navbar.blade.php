<nav class="main-header navbar navbar-expand navbar-white navbar-light">

  <!-- KIRI -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="#">
        <i class="fas fa-bars"></i>
      </a>
    </li>
  </ul>

  <!-- KANAN (SATU UL AJA, JANGAN NGADI-NGADI) -->
  <ul class="navbar-nav ml-auto">

    <!-- DROPDOWN USER -->
    <li class="nav-item dropdown">
  <a class="nav-link" data-toggle="dropdown" href="#">
    {{ Auth::user()->nama }} 
    <i class="fas fa-caret-down"></i>
  </a>

  <div class="dropdown-menu dropdown-menu-right">
    <a href="#" class="dropdown-item"
       onclick="document.getElementById('form-logout').submit();">
       
      <i class="fas fa-sign-out-alt mr-2"></i> Sign Out
    </a>
    <a href="{{ route('profile.show') }}" class="dropdown-item">
      <i class="fas fa-user mr-2"></i> Profile
    </a>
  </div>

</li>

    <!-- FULLSCREEN -->
    <li class="nav-item">
      <a class="nav-link" data-widget="fullscreen" href="#">
        <i class="fas fa-expand-arrows-alt"></i>
      </a>
    </li>

  </ul>

</nav>

<form id="form-logout" action="/logout" method="POST" style="display: none">
    @csrf
</form>