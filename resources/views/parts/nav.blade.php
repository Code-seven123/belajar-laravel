<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="/">Belajar Laravel</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link {{ ( $title == 'Home' ) ? 'active' : '' }}" aria-current="page" href="/home">Home</a>
          <a class="nav-link {{ ( $title == 'Profil' ) ? 'active' : '' }}" href="/profil">profil</a>
          <a class="nav-link {{ ( $title == 'About' ) ? 'active' : '' }}" href="/about">about</a>
        </div>
      </div>
    </div>
  </nav>