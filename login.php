<?php require './includes/header.inc.php'?>
<!-- login/sign-up page start -->

<main>
    <div class="container">
        <div class="row min-vh-100 d-flex justify-content-center align-items-center">
            <div class="col-12 col-md-10 col-lg-6 ">
                <div class="card card-body main-card">
                    <div class="container">
                        <div class="row d-flex justify-content-center">
                            <div class="d-block mb-4">
                                <a
                                    href="./"
                                    style="width:170px;"
                                    class="d-block"
                                ><img
                                        class="img-fluid"
                                        src="./source/media/logo.png"
                                        alt="totky.pk"
                                    >
                                </a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6 p-1 text-center">
                                <button
                                    class="w-100 sign-up-toggle py-2 btn btn-outline-info vote-btn active-main"
                                    data-toggle="collapse"
                                    data-target=".multi-collapse"
                                    aria-expanded="false"
                                    aria-controls="multiCollapseExample1 multiCollapseExample2"
                                >
                                    Login
                                </button>
                            </div>
                            <div class="col-6 p-1 text-center">
                                <button
                                    class="w-100 sign-up-toggle py-2 btn btn-outline-info vote-btn"
                                    data-toggle="collapse"
                                    data-target=".multi-collapse"
                                    aria-expanded="false"
                                    aria-controls="multiCollapseExample1 multiCollapseExample2"
                                >
                                    Sign-up
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card overflow-hidden card-body main-card my-4">
                    <div class="form-wrapper">
                        <div
                            class="collapse show multi-collapse"
                            id="multiCollapseExample2"
                        >
                            <form>
                                <div class="form-group">
                                    <input
                                        type="text"
                                        class="form-control"
                                        placeholder="Email or Username"
                                    >
                                </div>
                                <div class="form-group">
                                    <input
                                        type="password"
                                        class="form-control"
                                        placeholder="Password"
                                    >
                                    <small><a
                                            href="#"
                                            class="main-color-font text-decoration-none p-1"
                                        >Forget Password?</a></small>
                                </div>
                                <div class="text-center">
                                    <button class="btn btn-outline-info vote-btn w-50">
                                        Log-in
                                    </button>
                                </div>
                            </form>
                        </div>
                        <div
                            class="collapse multi-collapse"
                            id="multiCollapseExample2"
                        >
                            <form>
                                <div class="form-group">
                                    <input
                                        type="text"
                                        class="form-control"
                                        placeholder="Name"
                                    >
                                </div>
                                <div class="form-group">
                                    <input
                                        type="email"
                                        class="form-control"
                                        placeholder="Email"
                                    >
                                </div>
                                <div class="form-group">
                                    <input
                                        type="text"
                                        class="form-control"
                                        placeholder="Username"
                                    >
                                </div>
                                <div class="form-group">
                                    <input
                                        type="text"
                                        class="form-control"
                                        placeholder="Phone"
                                    >
                                </div>
                                <div class="form-group">
                                    <input
                                        type="password"
                                        class="form-control"
                                        placeholder="Password"
                                    >
                                </div>
                                <div class="form-group">
                                    <input
                                        type="password"
                                        class="form-control"
                                        placeholder="Confirm Password"
                                    >
                                </div>
                                <div class="text-center">
                                    <button class="btn btn-outline-info vote-btn w-50">
                                        Sign-up
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</main>

<!-- login/sign-up page end -->
<?php require './includes/footer.inc.php'?>