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
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-12 col-md-6 col-lg-3 p-1 d-flex justify-content-center">
                                    <a
                                        href="./user.php"
                                        class="d-block w-auto border-main rounded-lg"
                                    >
                                        <img
                                            src="./source/media/category_icons/profile.jpg"
                                            alt="profile-image"
                                            class="img-fluid"
                                        >
                                    </a>
                                </div>
                                <div class="col-12 col-md-6 col-lg-9 p-1 pl-3 mt-4 mt-md-0">
                                    <h4 class="main-color-font mb-0">
                                        John Doe
                                    </h4>
                                    <small class="card-subtitle text-muted">SUB: Heart Specialist</small>
                                    <p class="card-text">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem distinctio
                                        nesciunt doloribus sint! Vero vitae esse culpa est illum sapiente quasi
                                        laudantium, qui alias aliquid fugit ea sequi quae perspiciatis!
                                    </p>
                                    <div class="border text-center p-2 rounded">
                                        <span class="main-color-font text-uppercase">verified user</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Contact -->
                <div class="card main-card my-1 mb-4">
                    <div class="card-body">
                        <h4 class="card-title text-uppercase">CONTACT & INFO</h4>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-12 col-md-4 d-flex justify-content-center p-2">
                                    <button class="w-75 btn btn-outline-info vote-btn">E-mail</button>
                                </div>
                                <div class="col-12 col-md-4 d-flex justify-content-center p-2">
                                    <button class="w-75 btn btn-outline-info vote-btn">Phone</button>
                                </div>
                                <div class="col-12 col-md-4 d-flex justify-content-center p-2">
                                    <button class="w-75 btn btn-outline-info vote-btn">Web</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Contact -->

                <!-- comment section -->
                <div class="card main-card my-1">
                    <div class="card-body">
                        <h4 class="card-title text-uppercase">Leave a Message / Comment:</h4>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-12 py-2 my-2">
                                    <form action="">
                                        <div class="input-group">
                                            <input
                                                type="text"
                                                class="form-control p-4 search-input"
                                                placeholder="Post message"
                                                aria-label="Recipient's username"
                                                aria-describedby="comment-btn"
                                            >
                                            <div class="input-group-append">
                                                <button
                                                    class="btn btn-outline-secondary vote-btn"
                                                    type="button"
                                                    id="comment-btn"
                                                >SEND</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- Comments -->
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-12 col-lg-3 my-4 my-md-2 mb-md-4">
                <!-- Popular categories -->
                <div class="card card-body main-card">
                    <small class="text-muted mb-2">Recent Posts by:</small>
                    <div class="card-title">
                        <a
                            href="#"
                            class="text-decoration-none h5 main-color-font"
                        >John Doe</a>
                    </div>
                    <?php for ($i=0; $i <= 4 ; $i++):?>
                    <div class="border rounded p-2 my-2">
                        <a
                            href="./post.php"
                            class="text-decoration-none main-color-font text-truncate d-block"
                        >Lorem ipsum dolor sit amet consectetur</a>
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