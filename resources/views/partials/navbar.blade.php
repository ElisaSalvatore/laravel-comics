<nav class="navbar navbar-expand-sm navbar-light">
  <div class="container">
    <a class="navbar-brand" href=""{{ url('/') }}"">
      <img src="{{ asset('images/dc-logo.png') }}" alt="logo dc">
    </a>

    <button class="navbar-toggler" type="button" data-toggle="collapse"
      data-target="#navbarID" aria-controls="navbarID" aria-expanded="false"
      aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarID">
      <div class="navbar-nav">
        <a class="nav-link" aria-current="page" href="{{ url('/') }}">characters</a>
        <a class="nav-link" aria-current="page" href="{{ url('/') }}">comics</a>
        <a class="nav-link" aria-current="page" href="{{ url('/') }}">movies</a>
        <a class="nav-link" aria-current="page" href="{{ url('/') }}">tv</a>
        <a class="nav-link" aria-current="page" href="{{ url('/') }}">games</a>
        <a class="nav-link" aria-current="page" href="{{ url('/') }}">collectibles</a>
        <a class="nav-link" aria-current="page" href="{{ url('/') }}">video</a>
        <a class="nav-link" aria-current="page" href="{{ url('/') }}">fans</a>
        <a class="nav-link" aria-current="page" href="{{ url('/') }}">news</a>
        <a class="nav-link" aria-current="page" href="{{ url('/') }}">shop</a>

        <input type="search" placeholder="Search" id="">
      </div>
    </div>

  </div>
</nav>