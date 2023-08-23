<ul class="nav">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="#">Laravel</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="/">Beranda</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="/action/index">Daftar pengunjung</a>
  </li>

    @guest
  
  <li class="nav-item">
    <a class="nav-link" href="/auth/register"> register</a>
    <a class="nav-link" href="/auth/login"> login</a>
  </li>
    @else
    <li class="userlogin btn btn-primary">
  {{ Auth::user()->username }}
  <p>  <a href="/auth/logout">logout</p>
    </li>
    @endguest




</ul>