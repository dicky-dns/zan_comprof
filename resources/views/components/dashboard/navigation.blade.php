<header class="header body-pd" id="header">
    <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
    <div class="btn-group" role="button" onkeydown="">
        <div class="d-flex" data-bs-toggle="dropdown" aria-expanded="false">
            <span class="my-auto me-3">{{ session('user')->name }}</span>
            <div class="header_img">
                <img src="{{ asset('assets/img/user.jpg') }}" alt="">
            </div>
        </div>
        <ul class="dropdown-menu dropdown-menu-end shadow">
            <li>
                <button class="dropdown-item" type="button" data-bs-toggle="modal" data-bs-target="#logoutModal">
                    <i class='bx bx-log-out me-2'></i> Sign Out
                </button>
            </li>
        </ul>
    </div>
</header>
<div class="l-navbar sidebar-show" id="nav-bar">
    <nav class="nav">
        <div>
            <a href="#" class="nav_logo">
                <i class='bx bx-layer nav_logo-icon'></i>
                <span class="nav_logo-name">Zweena </span>
            </a>
            <div class="nav_list">
                <a href="{{ route('dashboard_pesan') }}"
                    class="nav_link {{ Request::segment(2) == 'pesan' ? 'active' : '' }}">
                    <i class='bx bx-message-detail nav_icon'></i>
                    <span class="nav_name">Pesan</span>
                </a>
                <a href="{{ route('dashboard_enquiry') }}"
                    class="nav_link {{ Request::segment(2) == 'enquiry' ? 'active' : '' }}">
                    <i class='bx bx-message-square-detail nav_icon'></i>
                    <span class="nav_name">Enquiry</span>
                </a>
                <a href="{{ route('dashboard_artikel') }}"
                    class="nav_link {{ Request::segment(2) == 'artikel' ? 'active' : '' }}">
                    <i class='bx bx-news nav_icon'></i>
                    <span class="nav_name">Artikel</span>
                </a>
                <a href="{{ route('dashboard_kategori') }}"
                    class="nav_link {{ Request::segment(2) == 'kategori' ? 'active' : '' }}">
                    <i class='bx bx-bookmark nav_icon'></i>
                    <span class="nav_name">Kategori Produk</span>
                </a>
                <a href="{{ route('dashboard_subkategori') }}"
                    class="nav_link {{ Request::segment(2) == 'subkategori' ? 'active' : '' }}">
                    <i class='bx bx-bookmarks nav_icon'></i>
                    <span class="nav_name">Sub-Kategori Produk</span>
                </a>
                <a href="{{ route('dashboard_produk') }}"
                    class="nav_link {{ Request::segment(2) == 'produk' ? 'active' : '' }}">
                    <i class='bx bx-folder nav_icon'></i>
                    <span class="nav_name">Produk</span>
                </a>
                <a href="{{ route('dashboard_users') }}"
                    class="nav_link {{ Request::segment(2) == 'users' ? 'active' : '' }}">
                    <i class='bx bx-user nav_icon'></i>
                    <span class="nav_name">Pengguna</span>
                </a>

            </div>
        </div>
    </nav>
</div>

<!-- Logout Modal -->
<div class="modal fade" id="logoutModal" tabindex="-1" aria-labelledby="logoutModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="logoutModalLabel">Konfirmasi Logout</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Apakah kamu yakin ingin keluar dashboard panel?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <a href="{{ route('logout') }}" class="btn btn-primary">Yes, sign out</a>
            </div>
        </div>
    </div>
</div>

<script type='text/javascript'>
    const showNavbar = (toggleId, navId, bodyId, headerId) => {
        const toggle = document.getElementById(toggleId),
            nav = document.getElementById(navId),
            bodypd = document.getElementById(bodyId),
            headerpd = document.getElementById(headerId)

        if (toggle && nav && bodypd && headerpd) {
            toggle.addEventListener('click', () => {
                nav.classList.toggle('sidebar-show')
                toggle.classList.toggle('bx-x')
                bodypd.classList.toggle('body-pd')
                headerpd.classList.toggle('body-pd')
            })
        }
    }

    document.addEventListener("DOMContentLoaded", function(event) {
        showNavbar('header-toggle', 'nav-bar', 'body-pd', 'header')
    });
</script>
