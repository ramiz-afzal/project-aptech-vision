    <!-- menu items -->
    <div class="nav-menu">
        <a
            href="#"
            class="nav-icon"
        ><span><i class="fas fa-times"></i></span></a>
        <ul class="list-unstyled text-center">
            <li><a href="#">Home</a></li>
            <li
                data-toggle="collapse"
                data-target="#collapseExample"
            ><a href="#">Category <i class="fas fa-caret-down"></i></a>
                <ul
                    class="collapse list-unstyled text-center"
                    id="collapseExample"
                >
                    <li><small><a href="#">Link 1</a></small></li>
                    <li><small><a href="#">Link 2</a></small></li>
                    <li><small><a href="#">Link 3</a></small></li>
                    <li><small><a href="#">Link 4</a></small></li>
                    <li><small><a href="#1">Link 5</a></small></li>
                </ul>
            </li>
            <li><a href="#">Privacy Policy</a></li>
            <li><a href="#">Contact us</a></li>
            <li><a href="#">About us</a></li>
        </ul>
    </div>
    <!-- menu items -->
    <nav
        class="bg-white p-1 p-md-2 px-md-4"
        id="main-nav"
    >
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 mt-2 d-flex flex-row justify-content-between align-items-center">
                    <div class="w-50">
                        <a
                            href="./"
                            style="width:170px;"
                            class="d-block"
                        ><img
                                class="img-fluid"
                                src="./source/media/logo.png"
                                alt="totky.pk"
                            ></a>
                    </div>
                    <div class="w-50 d-flex justify-content-end">
                        <div class="user-icon p-1"><a href="./login.php"><span><i
                                        class="fas fa-user-circle"></i></span></a></div>
                        <div
                            id="menu-toggle"
                            class="user-icon p-1 ml-2"
                        ><a href="#"><span><i class="fas fa-bars"></i></span></a></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 mt-1 py-2">
                    <form action="">
                        <div class="input-group">
                            <input
                                type="text"
                                class="form-control py-4 search-input"
                                placeholder="Search"
                                aria-label="Recipient's username"
                                aria-describedby="button-addon2"
                            >
                            <div class="input-group-append">
                                <button
                                    class="btn font-weight-light search-btn"
                                    type="button"
                                    id="button-addon2"
                                ><i class="fas fa-search"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </nav>