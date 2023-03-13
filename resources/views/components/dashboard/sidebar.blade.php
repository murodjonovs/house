<div class="vertical-menu">

    <!-- LOGO -->
    <div class="navbar-brand-box">
        <a href="index.html" class="logo logo-dark">
            <span class="logo-sm">
                <img src="@include('components.dashboard.logo')" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="@include('components.dashboard.logo')" alt="" height="20">
            </span>
        </a>
    </div>

    <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect vertical-menu-btn">
        <i class="fa fa-fw fa-bars"></i>
    </button>

    <div data-simplebar class="sidebar-menu-scroll">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled mt-4" id="side-menu">
                <li class="menu-title">Menu</li>
                <li>
                    <a href="{{ route('dashboard.projects.index') }}">
                        <i class="uil-star"></i>
                        <span>Business House</span>
                    </a>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="uil-star"></i>
                        <span>Основной слайдер</span>
                    </a>
                    <ul class="sub-menu mm-collapse" aria-expanded="false">
                        <li><a href="{{ route('dashboard.mainslider.index') }}">Лист</a></li>
                        <li><a href="{{ route('dashboard.mainslider.create') }}">Создать</a></li>
                    </ul>
                </li>
                <li>
                    <a href="{{ route('dashboard.secondslider.index') }}">
                        <i class="uil-star"></i>
                        <span>Слайдеры</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('dashboard.dowload.index') }}">
                        <i class="uil-star"></i>
                        <span>Скачать</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('dashboard.information.index') }}">
                        <i class="uil-star"></i>
                        <span>Информация</span>
                    </a>
                </li>
                
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>