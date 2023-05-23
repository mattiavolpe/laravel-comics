<header id="app_header">
  @include("partials.topHeader")

  <div id="header_links">
    <div class="container d-flex justify-content-between align-items-center">
      <div id="logo_wrapper">
        <img height="80" src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="DC Logo">
      </div>
      @include("partials.headerLinks")
      <input type="search" name="searchComics" id="searchComics" class="border-primary">
    </div>
  </div>
  <!-- /#header_links -->
</header>
<!-- /#app_header -->
