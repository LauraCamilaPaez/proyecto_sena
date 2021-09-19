<div class="side-content-wrap">
    <div class="sidebar-left open rtl-ps-none" data-perfect-scrollbar="" data-suppress-scroll-x="true">
        <ul class="navigation-left">
            <li class="nav-item" data-item="dashboard"><a class="nav-item-hold" href="#">
                    <i class="nav-icon fas fa-desktop"></i>
                    <span class="nav-text">Dashboard</span></a>
                <div class="triangle"></div>
            </li>
            <li class="nav-item"><a class="nav-item-hold" href="{{ route('products.index') }}">
                    <i class="nav-icon fas fa-utensils"></i>
                    <span class="nav-text">Productos</span></a>
                <div class="triangle"></div>
            </li>

        </ul>
    </div>
    <div class="sidebar-left-secondary rtl-ps-none" data-perfect-scrollbar="" data-suppress-scroll-x="true">
        <ul class="childNav" data-parent="dashboard">
            <li class="nav-item"><a href="{{ url('dashboard') }}"><i class="nav-icon i-Clock-3"></i><span
                        class="item-name">Ir al dashbord</span></a></li>

        </ul>
    </div>
    <div class="sidebar-overlay"></div>
</div>
