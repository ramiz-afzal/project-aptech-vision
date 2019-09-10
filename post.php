<?php require './includes/header.inc.php'?>
<?php require './includes/nav.inc.php'?>

<!-- Main Body Start -->
<main>
    <div class="container my-4">
        <div class="row">
            <div class="col-12 col-lg-9 pr-3 pr-lg-2">
                <!-- Main post content -->
                <div class="card main-card my-2 mb-4">
                    <div class="card-body">
                        <h4 class="card-title">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt,
                            voluptatibus.</h4>
                        <div class="card-subtitle">
                            <small class="text-muted">Date: 29, April, 2019</small>
                        </div>
                        <p class="card-text my-4">
                            Lorem ipsum dolor,sit amet consectetur adipisicing elit. Corporis perferendis reiciendis,
                            omnis aperiam nemo recusandae expedita voluptatum velit nobis quae quo eveniet iusto. Qui
                            dolores earum illum provident, voluptates vitae?
                        </p>
                        <div class="card-body">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-6 p-2">
                                        <button class="w-100 btn btn-outline-info vote-btn">
                                            <span><i class="fas fa-chevron-up m-1"></i></span>
                                            <span>UP vote</span>
                                        </button>
                                    </div>
                                    <div class="col-6 p-2">
                                        <button class="w-100 btn btn-outline-info vote-btn">
                                            <span><i class="fas fa-chevron-down m-1"></i></span>
                                            <span>Down vote</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- comment section -->
                <div class="card main-card my-1">
                    <div class="card-body">
                        <h4 class="card-title">COMMENTS</h4>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-12 py-2 my-2">
                                    <form action="">
                                        <div class="input-group">
                                            <input
                                                type="text"
                                                class="form-control p-4 search-input"
                                                placeholder="Post a comment"
                                                aria-label="Recipient's username"
                                                aria-describedby="comment-btn"
                                            >
                                            <div class="input-group-append">
                                                <button
                                                    class="btn btn-outline-secondary vote-btn"
                                                    type="button"
                                                    id="comment-btn"
                                                >POST</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- Comments -->
                            <?php for ($i=0; $i <= 10; $i++):?>
                            <div class="row my-3">
                                <div class="col-12">
                                    <div class="card card-body">
                                        <div class="card-title mb-1">
                                            <a
                                                href="./user.php"
                                                class="text-decoration-none main-color-font"
                                            >Ramiz Afzal</a>
                                        </div>
                                        <small class="card-subtitle text-muted mb-2">
                                            <span>20,09,2019</span></small>
                                        <div class="card-text">
                                            <p>
                                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corrupti dolor
                                                inventore quae rerum, soluta assumenda?
                                            </p>
                                        </div>
                                        <div class="card card-body p-1 d-flex flex-row align-items-center">
                                            <button class="btn btn-outline-info vote-btn">
                                                <i class="fas fa-chevron-up"></i>
                                            </button>
                                            <span class="main-color-font text-center mx-2 p-2 ">124</span>
                                            <button class="btn btn-outline-info vote-btn">
                                                <i class="fas fa-chevron-down"></i>
                                            </button>

                                            <div class="card-title mb-0 ml-auto">
                                                <a
                                                    href="#"
                                                    class="main-color-font text-decoration-none"
                                                >
                                                    <span>Reply</span>
                                                    <span><i class="fas fa-reply m-1"></i></span>
                                                </a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <?php endfor?>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-12 col-lg-3 my-4 my-md-2 mb-md-4">
                <!-- Popular categories -->
                <div class="card card-body main-card">
                    <small class="text-muted mb-2">Posted by:</small>
                    <div class="card-title">
                        <a
                            href="./user.php"
                            class="text-decoration-none h5 main-color-font"
                        >Ramiz Afzal</a>
                    </div>
                    <small class="card-subtitle pb-2">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque, enim.
                    </small>
                    <div class="border text-center p-2 rounded">
                        <span class="main-color-font text-uppercase">verified user</span>
                    </div>
                    <button class="btn btn-outline-info vote-btn mt-2 text-capitalize">Visit profile</button>
                </div>

                <!-- Similar posts -->
                <div class="card card-body main-card my-4">
                    <small class="text-muted mb-2">Similar Posts:</small>
                    <?php for ($i=0; $i <= 10 ; $i++):?>
                    <div class="border rounded p-2 my-2">
                        <a
                            href="./post.php"
                            class="text-decoration-none main-color-font"
                        >Lorem ipsum dolor sit amet consectetur
                            adipisicing
                            elit. Enim, assumenda.</a>
                        <div class="text-right text-muted p-1">
                            <small>Veiws:</small>
                            <small>19K</small>
                        </div>
                    </div>
                    <?php endfor ?>
                </div>

            </div>
        </div>
    </div>
</main>
<!-- Main Body End -->

<?php require './includes/footer.inc.php'?>