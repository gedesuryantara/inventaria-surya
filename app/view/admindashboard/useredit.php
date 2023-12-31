  <!-- Body Design -->
  <div class="body-design">
        <div class="row">

            <!-- Sidebar Design -->
            <div class="col-2">
                <div class="sidebar-design">
                    <div class="logo d-flex justify-content-center">
                        <img src="../../../public/img/logo-inventaria.png" alt="Inventaria Logo" srcset="">
                    </div>
                    <div class="container-sm">
                        <div class="menu-design d-flex flex-column">
                            <div class="dasboard-design">
                                <hr class="line-fill">
                                <a href="#" class="dasboard">
                                    <i class="fa-solid fa-gauge"></i>
                                    Dashboard
                                </a>
                                <hr class="line-fill">
                            </div>
                            <a href="" class="manage-user">
                                <i class="fa-solid fa-circle-user"></i>
                                Manage Users
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Sidebar Design -->


            <div class="col-10">

                <!-- Navbar Design -->
                <div class="navbar-design shadow">
                    <div class="d-flex justify-content-start">
                        <div class="col-12">
                            <div class=" d-flex justify-content-start nav-layout">
                                <i class="fa-regular fa-user"></i>
                                <h1 class="header-text">Manage Users</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Navbar Design -->
                <?php
                  $tostr = $data['UserName'];
                ?>

                <!-- Form Edit User Design -->
                <div class="edit-container container-sm shadow-lg">
                    <h2 class="header-text text-center mb-5">Edit User</h2>
                    <form action="<?= BASEURL ?>/admindashboard/useredit/<?= $tostr['id_user'];?>" method="post">
                        <div class="mb-3 row">
                            <label for="Username" class="col-sm-2 col-form-label">Username</label>
                            <div class="col-sm-10 mb-3">
                                <input type="text" placeholder="Enter Username" value="<?= $tostr['username'];?>" class="form-control" id="Username" name="Username">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="Password" class="col-sm-2 col-form-label">Password</label>
                            <div class="col-sm-10 mb-3">
                                <input type="password" placeholder="Enter Your Password" class="form-control" id="Password" name="Password">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="RePassword" class="col-sm-2 col-form-label">Re Password</label>
                            <div class="col-sm-10">
                                <input type="password" placeholder="Enter Your Re Password" class="form-control" id="RePassword" name="RePassword">
                            </div>
                        </div>
                        <div class="button-G d-flex justify-content-end mt-5">
                            <a type="button" class="cancel-btn btn btn-danger me-2">Close</a>
                            <button type="submit" class="save-btn btn btn-primary ms-2">Save</button>
                        </div>
                    </form>

                </div>
                <!-- End Form Edit User Design -->

            </div>
        </div>
    </div>
    <!-- End Body Design -->