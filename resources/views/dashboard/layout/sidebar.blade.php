<ul class="menu-inner py-1">
    <!-- Dashboard -->
    <li class="menu-item">
      <a href="/dashboard" class="menu-link">
        <i class="menu-icon tf-icons bx bx-home-circle"></i>
        <div data-i18n="Analytics">Dashboard</div>
      </a>
    </li>

    {{-- Sidebar Post --}}
    <li class="menu-item">
        <a href="" class="menu-link menu-toggle">
          <i class="menu-icon tf-icons bx 
          bxs-card"></i>
          <div data-i18n="Layouts">Post</div>
        </a>

        <ul class="menu-sub">
          <a href="/dashboard/posts" class="menu-link menu-link">
            <i class="menu-icon tf-icons bx bx-list-ul"></i>
            <div data-i18n="Layouts">Semua Post</div>
          </a>
        </ul>

        <ul class="menu-sub">
          <a href="/dashboard/posts/create" class="menu-link menu-link">
            <i class="menu-icon tf-icons bx bxs-pencil"></i>
            <div data-i18n="Layouts">Tambah Post</div>
          </a>
        </ul>

        <ul class="menu-sub">
          <a href="/dashboard/category" class="menu-link menu-link">
            <i class="menu-icon tf-icons bx 
            bx-list-plus"></i>
            <div data-i18n="Layouts">Category</div>
          </a>
        </ul>
    </li>


    {{-- Sidebar Pages --}}
    <li class="menu-item">
      <a href="" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons bx 
        bxs-bookmarks"></i>
        <div data-i18n="Layouts">Halaman</div>
      </a>

      <ul class="menu-sub">
        <a href="/dashboard/pages" class="menu-link menu-link">
          <i class="menu-icon tf-icons bx bx-list-ul"></i>
          <div data-i18n="Layouts">Semua Halaman</div>
        </a>
      </ul>

      <ul class="menu-sub">
        <a href="/dashboard/pages/create" class="menu-link menu-link">
          <i class="menu-icon tf-icons bx 
          bx-edit-alt"></i>
          <div data-i18n="Layouts">Tambah Halaman</div>
        </a>
      </ul>

      <li class="menu-header small text-uppercase">
        <span class="menu-header-text">Pengaturan</span>
      </li>
      <li class="menu-item">
        <a href="" class="menu-link menu-toggle">
          <i class="menu-icon tf-icons bx bxs-wrench"></i>
          <div data-i18n="Layouts">Kelola Akun</div>
        </a>
        <ul class="menu-sub">
          <a href="/dashboard/user/" class="menu-link menu-link">
            <i class="menu-icon tf-icons bx bxs-user"></i>
            <div data-i18n="Layouts">Profil</div>
          </a>
        </ul>
        <ul class="menu-sub">
          <a href="/dashboard/user/password" class="menu-link menu-link">
            <i class="menu-icon tf-icons bx bxs-key"></i>
            <div data-i18n="Layouts">Password</div>
          </a>
        </ul>
        <li class="menu-item">
          <a href="" class="menu-link menu-toggle">
            <i class="menu-icon tf-icons bx bxs-grid"></i>
            <div data-i18n="Layouts">Menu</div>
          </a>
          <ul class="menu-sub">
            <a href="/dashboard/menu/header" class="menu-link menu-link">
              <i class="menu-icon tf-icons bx bx-dock-top"></i>
              <div data-i18n="Layouts">Menu Header</div>
            </a>
          </ul>
          <ul class="menu-sub">
            <a href="/dashboard/menu/footer" class="menu-link menu-link">
              <i class="menu-icon tf-icons bx bx-dock-bottom"></i>
              <div data-i18n="Layouts">Menu Footer</div>
            </a>
          </ul>
  </ul>
</aside>
<!-- / Menu -->