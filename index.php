<?php require './includes/header.inc.php'?>
<?php require './includes/nav.inc.php'?>

<!-- Main Body Start -->
<main>
    <div class="container my-4">
        <div class="row">

            <div class="col-12 col-lg-9 pr-3 pr-lg-2">
                <!-- Panel headinf -->
                <span class="font-weight-bold h5 my-2 py-1 d-block main-heading"> Popular Posts:</span>

                <?php for($i=0;$i <= 10; $i++):?>
                <div class="card main-card my-2 mb-4">
                    <div class="card-body">
                        <a
                            href="post.php"
                            class="text-decoration-none main-color-font"
                        >
                            <h5 class="card-title">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eligendi,
                                corporis.</h5>
                        </a>
                        <h6 class="card-subtitle mb-2 text-muted">10,Aug, 2019</h6>
                        <p class="card-text">
                            Some quick example text to build on the card title and make up the bulk of the card's
                            content.
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, inventore?
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque, quibusdam.
                        </p>
                        <div class="card-body p-1">
                            <div class="container-fluid">
                                <div class="row">
                                    <div
                                        class="col-4 col-md-4 col-lg-2 d-flex justify-content-center align-items-center">
                                        <i class="fas fa-chevron-up"></i>
                                        <span class="m-1">10000</span>
                                    </div>
                                    <div
                                        class="col-4 col-md-4 col-lg-2 d-flex justify-content-center align-items-center">
                                        <i class="fas fa-chevron-down"></i>
                                        <span class="m-1">10000</span>
                                    </div>
                                    <div
                                        class="col-4 col-md-4 col-lg-2 d-flex justify-content-center align-items-center">
                                        <i class="far fa-comment-alt"></i>
                                        <span class="m-1">10000</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- </div> -->
                    </div>
                </div>
                <?php endfor ?>

            </div>

            <div class="col-12 col-lg-3">
                <!-- Popular categories -->
                <span class="font-weight-bold h5 my-2 py-1 d-block main-heading"> Popular Categories:</span>
                <div class="w-100 card main-card my-2 mb-4 p-2">
                    <div class="container-fluid">
                        <div class="row">

                            <?php for($i=0;$i <= 10; $i++):?>
                            <div class="p-sm-1 p-lg-0 col-12 col-md-6 col-lg-12 ">
                                <div class="border rounded my-1 p-0">
                                    <div class="d-flex p-1">
                                        <div
                                            style="width: 52px; height:52px;"
                                            class="main-color rounded-lg p-2"
                                        >
                                            <a href="#">
                                                <img
                                                    src="./source/media/category_icons/Pain.png"
                                                    alt="category-image"
                                                    class="img-fluid"
                                                >
                                            </a>
                                        </div>
                                        <div class="d-flex flex-column ml-2">
                                            <a
                                                href="./allposts.php"
                                                class="text-decoration-none"
                                            >
                                                <span class="card-title m-0 font-weight-bold">Pain & Body Ache</span>
                                            </a>
                                            <span class="m-0 p-0">
                                                <span class="main-color-font">Posts:</span>
                                                <span class="text-muted ">1430</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <?php endfor?>

                        </div>
                    </div>
                </div>

                <!-- Top users -->
                <span class="font-weight-bold h5 my-2 py-1 d-block main-heading">Top Contributers:</span>
                <div class="w-100 card main-card my-2 mb-4 p-2">
                    <div class="container-fluid">
                        <div class="row">

                            <?php for($i=0;$i <= 10; $i++):?>
                            <div class="p-sm-1 p-lg-0 col-12 col-md-6 col-lg-12">
                                <div class="border rounded my-1 p-1 main-color-light">
                                    <div class="d-flex flex-column">
                                        <div class="d-flex flex-row align-items-center">
                                            <div
                                                style="width: 32px; height:32px; overflow:hidden;"
                                                class="bg-light rounded-lg d-flex justify-content-center align-items-center m-1"
                                            >
                                                <a href="user.php"><img
                                                        class="img-fluid"
                                                        src="./source/media/category_icons/profile.jpg"
                                                        alt=""
                                                    ></a>
                                            </div>
                                            <a
                                                href="user.php"
                                                class="text-decoration-none main-color-font"
                                            >
                                                <span class="card-title m-0 font-weight-bold">John Doe</span>
                                            </a>
                                        </div>
                                        <div
                                            class="d-flex flex-row justify-content-around justify-content-lg-between px-1">
                                            <span>
                                                <small class="font-weight-bold main-color-font">Veiws:</small>
                                                <small>190</small>
                                            </span>
                                            <span>
                                                <small class="font-weight-bold main-color-font">Posts:</small>
                                                <small>19001</small>
                                            </span>
                                            <span>
                                                <small class="font-weight-bold main-color-font">Votes:</small>
                                                <small>175</small>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php endfor?>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</main>
<!-- Main Body End -->

<?php require './includes/footer.inc.php'?>