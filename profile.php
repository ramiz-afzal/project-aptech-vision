<?php require './includes/header.inc.php'?>
<?php require './includes/nav.inc.php'?>

<!-- Main Body Start -->
<main>
    <div class="container my-4">
        <div class="row">
            <div class="col-12 col-lg-9 pr-3 pr-lg-2">

                <!-- Create post section start -->
                <div class="card main-card my-2 mb-4">
                    <div class="card-body">
                        <div class="d-flex flex-column">
                            <span class="main-color-font h4">
                                Got something to share?
                            </span>
                            <a
                                href="./create-post.php"
                                class="btn btn-outline-info btn-lg vote-btn text-uppercase font-weight-light w-25 mt-3"
                            >CREATE POST</a>
                        </div>
                    </div>
                </div>
                <!-- Create post section end -->


                <!-- my posts section start -->
                <div class="card main-card my-2 mb-4">
                    <div class="card-body">
                        <small class="text-muted mb-2">My posts:</small>

                        <?php for ($i=0; $i <= 9 ; $i++):?>

                        <div class="border rounded p-2 my-2">
                            <a
                                href="./post.php"
                                class="text-decoration-none main-color-font text-truncate d-block"
                            >Lorem ipsum dolor sit amet consectetur</a>
                            <div class="text-muted p-1">
                                <a
                                    href="#"
                                    class="btn btn-outline-info btn-sm vote-btn"
                                >Edit</a>
                                <a
                                    href="#"
                                    class="btn btn-outline-info btn-sm vote-btn"
                                >Delete</a>
                            </div>
                        </div>

                        <?php endfor ?>
                    </div>
                </div>
                <!-- my posts section end -->

                <!-- my stats start -->
                <div class="card main-card my-2 mb-4">
                    <div class="card-body">
                        <small class="text-muted mb-2">My stats:</small>

                        <div class="row p-2">
                            <div class="col-12 d-flex align-items-center">
                                <span>From: </span>
                                <input
                                    type="date"
                                    name=""
                                    id=""
                                    class="m-1 p-1 border rounded"
                                >
                                <span>To:</span>
                                <input
                                    type="date"
                                    name=""
                                    id=""
                                    class="m-1 p-1 border rounded"
                                >
                                <a
                                    href="#"
                                    class="btn btn-sm btn-outline-info vote-btn m-1 p-1"
                                >Get</a>
                            </div>
                        </div>

                        <hr>

                        <div class="row p-2">
                            <div class="col-3">
                                <div class="border rounded p-2 m-1 d-flex flex-column justify-content-center">
                                    <small class="main-color-font d-block">Veiws:</small>
                                    <span class="">2071</span>
                                </div>
                            </div>

                            <div class="col-3">
                                <div class="border rounded p-2 m-1">
                                    <small class="main-color-font d-block">Up-votes:</small>
                                    <span class="">2071</span>
                                </div>
                            </div>

                            <div class="col-3">
                                <div class="border rounded p-2 m-1">
                                    <small class="main-color-font d-block">Down-votes:</small>
                                    <span class="">2071</span>
                                </div>
                            </div>

                            <div class="col-3">
                                <div class="border rounded p-2 m-1">
                                    <small class="main-color-font d-block">Comments:</small>
                                    <span class="">2071</span>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- my stats end -->

            </div>

            <div class="col-12 col-lg-3 my-4 my-md-2 mb-md-4">
                <!-- Main profile info start -->
                <div class="card card-body main-card mb-4">
                    <small class="text-muted mb-2">My info:</small>
                    <div class="d-flex justify-content-center">
                        <a
                            href="./user.php"
                            class="d-inline-block border-main rounded-lg"
                        >
                            <img
                                src="./source/media/category_icons/profile.jpg"
                                alt="profile-image"
                                class="img-fluid"
                            >
                        </a>
                    </div>
                    <div class="border rounded p-2 my-2">
                        <small class="main-color-font d-block">Name:</small>
                        <span class="d-block text-truncate">John Doe</span>
                    </div>
                    <div class="border rounded p-2 my-2">
                        <small class="main-color-font d-block">Sub title:</small>
                        <span class="d-block text-truncate">Phd. in Psychology</span>
                    </div>
                    <div class="border rounded p-2 my-2">
                        <small class="main-color-font d-block">Bio:</small>
                        <span class="d-block text-truncate">Lorem ipsum dolor sit amet, consectetur adipisicing
                            elit. Iure
                            eos, expedita consectetur quis voluptatibus voluptatem. Autem quidem neque sit velit quo,
                            corporis cumque et sed.</span>
                    </div>
                    <div class="border rounded p-2 my-2">
                        <small class="main-color-font d-block">Age:</small>
                        <span class="d-block text-truncate">32</span>
                    </div>
                    <div class="border rounded p-2 my-2">
                        <small class="main-color-font d-block">Address:</small>
                        <span class="d-block text-truncate">H#1, St# 24, Downtown, Some Area, NY</span>
                    </div>
                    <div class="border rounded p-2 my-2">
                        <small class="main-color-font d-block">Phone:</small>
                        <span class="d-block text-truncate">+92 2300 45678</span>
                    </div>
                    <div class="border rounded p-2 my-2">
                        <small class="main-color-font d-block">Email:</small>
                        <span class="d-block text-truncate">jonny_doe@example.com</span>
                    </div>
                    <div class="border rounded p-2 my-2">
                        <small class="main-color-font d-block">Web:</small>
                        <span class="d-block text-truncate">N/A</span>
                    </div>

                    <a
                        href="./edit-profile.php"
                        class="d-block btn vote-btn mt-2"
                    >Edit info</a>

                </div>
                <!-- Main profile info end -->



                <div class="card card-body main-card">
                    <small class="text-muted mb-2">Account Verfication:</small>

                    <a
                        href="#"
                        class="btn btn-outline-info vote-btn p-1 my-2"
                    >Request Approvel</a>


                    <span class="border rounded p-1 my-2 text-center text-info">Pending Approvel</span>



                    <span class="border rounded p-1 my-2 text-center text-success">Verified</span>


                    <span class="border rounded p-1 my-2 text-center text-danger">Approvel Denied</span>
                    <a
                        href="#"
                        class="btn btn-outline-info vote-btn p-1 my-2"
                    >Request again</a>


                </div>
            </div>
        </div>
    </div>
</main>
<!-- Main Body End -->

<?php require './includes/footer.inc.php'?>