<!-- HEADER MOBILE-->
<header class="header-mobile d-block d-lg-none">
    <div class="header-mobile__bar">
        <div class="container-fluid">
            <div class="header-mobile-inner">
                <a class="logo" href="index.html">
                    <img src="{{ asset('images/icon/logoDMgo.png')}}" style="width: 60%" />
                </a>
                <button class="hamburger hamburger--slider" type="button">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
            </div>
        </div>
    </div>
    <nav class="navbar-mobile">
        <div class="container-fluid">
            <ul class="navbar-mobile__list list-unstyled">
                <li class="has-sub">
                    <a class="js-arrow" href="#">
                        <i class='bx bxs-dashboard' ></i>Dashboard</a>
                    <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                        <li>
                            <a href="/admin">Admin</a>
                        </li>
                    </ul>
                </li>
                <li class="has-sub">
                    <a class="js-arrow" href="#">
                        <i class='bx bx-user'></i>Manage User</a>
                    <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                        <li>
                            <a href="/admin/employees">Employee</a>
                        </li>
                    </ul>
                </li>
                <li class="has-sub">
                    <a class="js-arrow" href="#">
                        <i class='bx bx-data'></i>Manage Shift</a>
                    <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                        <li>
                            <a href="/report">Report</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="/createB">
                        <i class='bx bxs-store'></i>Create Branch</a>
                </li>
                <li>
                    <a href="/manageP">
                        <i class='bx bxs-component'></i>Manage Parcels</a>
                </li>



            </ul>
        </div>
    </nav>
</header>
<!-- END HEADER MOBILE-->
