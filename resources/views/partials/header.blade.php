<header id="app_header">
  @include("partials.topHeader")

  <div id="header_links" class="py-3">
    <div class="container d-flex justify-content-between align-items-center">
      <div id="logo_wrapper">
        <img height="80" src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="DC Logo">
      </div>
      <nav>
        <ul id="links" class="d-flex justify-content-center align-items-center gap-4">
          @foreach($pages as $page)
          <li class="text-uppercase fw-bold border-primary {{ Route::currentRouteName() === $page ? 'link_active' : ''}}">
            {{ $page }}
          </li>
          @endforeach
        </ul>
      </nav>
      <input type="search" name="searchComics" id="searchComics" class="border-primary">
    </div>
  </div>
  <!-- /#header_links -->
</header>
<!-- /#app_header -->
