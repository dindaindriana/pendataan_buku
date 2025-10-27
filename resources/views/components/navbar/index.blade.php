<nav class="navbar navbar-expand-lg bg-body-secondary">
  <div class="container ">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <x-navbar.link href="/">Home</x-navbar.link>
        <x-navbar.link href="#">Daftar Buku</x-navbar.link>
        <x-navbar.link href="#">Kategori Buku</x-navbar.link>
        <x-navbar.link href="{{ route('users.index') }}">Users</x-navbar.link>
      </div>
    </div>
  </div>
</nav>