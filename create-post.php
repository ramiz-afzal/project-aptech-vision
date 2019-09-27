<?php require './includes/header.inc.php'?>
<?php require './includes/nav.inc.php'?>


<!-- Main Body Start -->
<main>
    <div class="container my-4">
        <form action="">
            <div class="row">
                <!-- Main content column stat -->
                <div class="col-12 col-lg-9 pr-3 pr-lg-2">
                    <div class="card main-card my-2 mb-4">
                        <div class="card-body">

                            <div class="form-group">
                                <label
                                    class="main-color-font"
                                    for=""
                                >Post title:
                                    <sup class="font-weight-bold">*</sup>
                                </label>
                                <input
                                    class="form-control"
                                    type="text"
                                    name="title"
                                    required
                                >
                            </div>

                            <div class="form-group content-editor">
                                <label
                                    class="main-color-font"
                                    for=""
                                >Post content:
                                    <sup class="font-weight-bold">*</sup>
                                </label>
                                <div
                                    id="editor"
                                    class="form-control"
                                    required
                                >
                                </div>
                            </div>

                            <div class="form-group">
                                <label
                                    class="main-color-font"
                                    for=""
                                >
                                    Attach post picture:
                                </label>
                                <br>
                                <input
                                    class="form-control-file"
                                    type="file"
                                    name=""
                                    id=""
                                >
                            </div>

                        </div>
                    </div>
                </div>
                <!-- Main content column end -->

                <!-- Sidear Column start -->
                <div class="col-12 col-lg-3 my-4 my-md-2 mb-md-4">

                    <div class="card card-body main-card">
                        <div class="from-group">
                            <label
                                class="main-color-font"
                                for=""
                            >
                                Select category:
                                <sup class="font-weight-bold">*</sup>
                            </label>
                            <br>
                            <select class="form-control form-control-sm vote-btn">
                                <option>Select</option>
                                <option>Category 1</option>
                                <option>Category 2</option>
                                <option>Category 3</option>
                                <option>Category 4</option>

                            </select>
                        </div>
                        <br>
                        <div class="from-group">
                            <label
                                class="main-color-font"
                                for=""
                            >
                                Post visiablity:
                            </label>
                            <br>
                            <select class="form-control form-control-sm vote-btn">
                                <option>Public</option>
                                <option>Private</option>
                            </select>
                        </div>
                    </div>


                    <div class="card card-body main-card mt-4">
                        <button
                            type="submit"
                            class="btn btn-outline-info vote-btn"
                        >Submit</button>
                    </div>

                </div>
                <!-- Sidear Column end -->
            </div>
        </form>
    </div>
</main>
<!-- Main Body End -->

<?php require './includes/footer.inc.php'?>