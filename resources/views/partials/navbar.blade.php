<div class="h-30 bg-primary text-white">
  <div class="container d-flex justify-content-end">
    <div class="py-1 px-4">DC POWER ™ VICA ®</div>
  
    <div class="py-1 px-4">ADDITIONAL DC SITES</div>
  </div>
</div>

<nav class="navbar navbar-expand-sm navbar-light">
  <div class="container">
    <a class="navbar-brand" href="{{ url('/') }}">
      <img src="{{ asset('images/dc-logo.png') }}" alt="logo dc">
    </a>

    <button class="navbar-toggler" type="button" data-toggle="collapse"
      data-target="#navbarID" aria-controls="navbarID" aria-expanded="false"
      aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarID">
      <div class="navbar-nav">
        <a class="nav-link" aria-current="page" href="{{ url('/characters') }}">characters</a>
        <a class="nav-link" aria-current="page" href="{{ url('/comics') }}">comics</a>
        <a class="nav-link" aria-current="page" href="{{ url('/movies') }}">movies</a>
        <a class="nav-link" aria-current="page" href="{{ url('/tv') }}">tv</a>
        <a class="nav-link" aria-current="page" href="{{ url('/games') }}">games</a>
        <a class="nav-link" aria-current="page" href="{{ url('/collectibles') }}">collectibles</a>
        <a class="nav-link" aria-current="page" href="{{ url('/video') }}">video</a>
        <a class="nav-link" aria-current="page" href="{{ url('/fans') }}">fans</a>
        <a class="nav-link" aria-current="page" href="{{ url('/news') }}">news</a>
        <a class="nav-link" aria-current="page" href="{{ url('/shop') }}">shop</a>

        <input type="search" placeholder="Search" id="">
      </div>
    </div>

  </div>
</nav>