<header class="sticky-top">
        <!-- Navbar -->
        <nav class="navbar navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="{{ URL('image/2.jpg') }}" width="40" height="40" class="d-inline-block align-top" alt="">
                    NCC Army
                </a>
            </div>
        </nav>
    </header>
    <main>
        <div class="container-fluid">
            <div class="row flex-nowrap">
                <!-- Sidebar -->
                <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark sidebar sticky-top">
                    <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                        <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                            <span class="fs-5 d-none d-sm-inline">Menu</span>
                        </a>
                        <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                            <li class="nav-item">
                                <a href="/" class="nav-link align-middle px-0">
                                    <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Home</span>
                                </a>
                            </li>



                            <li class="nav-item">
                                <a href="add_cadet" class="nav-link align-middle px-0">
                                    <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Add Cadets</span>
                                </a>
                            </li>
            
                            <li class="nav-item">
                                <a href="/view_data" class="nav-link align-middle px-0">
                                    <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">View Data</span>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="/add_department" class="nav-link align-middle px-0">
                                    <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Add Departments</span>
                                </a>
                            </li>

                            <!-- Other menu items -->
                        </ul>
                        <!-- Dropdown menu -->
                        <hr>
                        <div class="dropdown pb-4">
                            <!-- Dropdown button -->
                        </div>
                    </div>
                </div>