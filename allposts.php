<?php require './includes/header.inc.php'?>
<?php require './includes/nav.inc.php'?>

<!-- Main Body Start -->
<main>
    <div class="container my-4">
        <div class="row">
            <div class="col-12">
                <span class="font-weight-bold h5 my-2 py-1 d-block main-heading text-truncate"> Popular Posts:</span>

                <!-- Reaust page start -->
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
                <!-- Reaust page end -->
            </div>
        </div>
    </div>
</main>
<!-- Main Body End -->

<?php require './includes/footer.inc.php'?>