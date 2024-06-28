<?php
include 'includes/header.php';
?>
<main>
    <?php
    include 'includes/sidebar.php';
    ?>


    <section class="sec-main">
        <div class="container-fluid">
            <div class="inner-area">
                <div class="container-ct">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-10 col-lg-11 col-xl-11 col-xxl-11">
                            <div class="row align-items-center">
                                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                    <div class="accountbox">
                                        <img src="images/account_1.png" class="img-fluid">
                                        <h3>Anderson Paak</h3>
                                        <p>9.2M Subscriber</p>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                    <div class="accountbtn">
                                        <a href="#" class="followersbtn">View Followers</a>
                                        <a href="#" class="donoarsbtn">View Donors</a>
                                    </div>
                                </div>
                            </div>
                            <div class="accountmainbox">
                                <div class="row">
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                        <ul>
                                            <li><a href="#" class="active" data-bs-target="account1">About Me</a></li>
                                            <li><a href="#" data-bs-target="account2">Security</a></li>
                                            <li><a href="#" data-bs-target="account3">Media</a></li>
                                            <li><a href="#" data-bs-target="account4">Streams</a></li>
                                            <li><a href="#" data-bs-target="account5">Delete Account</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="contentbox">
                                    <div class="accountsettingbox" id="account1" style="display:block;">
                                        <div class="row pt-5">
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-3 col-xl-3 col-xxl-3">
                                                <div class="accountimg1">
                                                    <img src="images/account.png" class="img-fluid" alt="img">
                                                    <input type="file" class="uploadimg">
                                                    <a href="#" class="imageupload">

                                                        <i class="fa-solid fa-pencil"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-9 col-xl-9 col-xxl-9">
                                                <form>
                                                    <div class="row">
                                                        <div
                                                            class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-3 col-xxl-3">
                                                            <div class="form-floating mb-3">
                                                                <input type="text" class="form-control"
                                                                    id="floatingInput" placeholder="Anderson Paak">
                                                                <label for="floatingInput">Name</label>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-3 col-xxl-3">
                                                            <div class="form-floating mb-3">
                                                                <input type="text" class="form-control"
                                                                    id="floatingInput" placeholder="@AndersonPaak">
                                                                <label for="floatingInput">Username</label>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-3 col-xxl-3">
                                                            <div class="form-floating mb-3">
                                                                <input type="tel" class="form-control"
                                                                    id="floatingInput" placeholder="+1 2354897545487">
                                                                <label for="floatingInput">Phone Number</label>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-3 col-xxl-3">
                                                            <div class="form-floating mb-3">
                                                                <input type="email" class="form-control"
                                                                    id="floatingInput"
                                                                    placeholder="hi@andersonpaak.com">
                                                                <label for="floatingInput">Email</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row pt-3">
                                                        <div
                                                            class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-3 col-xxl-3">
                                                            <div class="form-floating mb-3">
                                                                <input type="date" class="form-control"
                                                                    id="floatingInput" placeholder="Anderson Paak"
                                                                    style="color: #fff;">
                                                                <label for="floatingInput">Limitless Member
                                                                    since</label>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-3 col-xxl-3">
                                                            <div class="form-floating mb-3">
                                                                <input type="date" class="form-control"
                                                                    id="floatingInput" placeholder="@AndersonPaak"
                                                                    style="color: #fff;">
                                                                <label for="floatingInput">Birth Date</label>
                                                            </div>
                                                        </div>

                                                        <div
                                                            class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                                            <div class="form-floating mb-3">
                                                                <input type="text" class="form-control"
                                                                    id="floatingInput"
                                                                    placeholder="Pasadena, Cr 2345 RT Strand Unit 45667 - 98. CA, US. 16066.">
                                                                <label for="floatingInput">Location</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row pt-3">
                                                        <div
                                                            class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 col-xxl-3">
                                                            <div class="form-floating mb-3">
                                                                <input type="text" class="form-control"
                                                                    id="floatingInput" placeholder="">
                                                                <label for="floatingInput">Category</label>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 col-xxl-3">
                                                            <div class="form-floating mb-3">
                                                                <input type="text" class="form-control"
                                                                    id="floatingInput" placeholder="+10:00 ETD">
                                                                <label for="floatingInput">Time Zone</label>
                                                            </div>
                                                        </div>

                                                        <div
                                                            class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 col-xxl-3">
                                                            <div class="form-floating mb-3">
                                                                <input type="text" class="form-control"
                                                                    id="floatingInput" placeholder="USD Dolar">
                                                                <label for="floatingInput">Currency</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row pt-3">
                                                        <div
                                                            class="col-12 col-sm-12 col-md-9 col-lg-9 col-xl-9 col-xxl-9">
                                                            <div class="form-floating mb-3">
                                                                <textarea placeholder=""
                                                                    class="form-control"></textarea>
                                                                <label for="floatingInput">Profile Description</label>
                                                            </div>
                                                        </div>



                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accountsettingbox" id="account2">

                                        <div class="row pt-5 justify-content-center">
                                            <div class="col-12 col-sm-12 col-md-10 col-lg-10 col-xl-10 col-xxl-10">
                                                <div class="row ">
                                                    <div
                                                        class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                                        <div class="form-floating mb-3">
                                                            <input type="Password" class="form-control"
                                                                id="floatingInput" placeholder="">
                                                            <label for="floatingInput">Password</label>
                                                        </div>
                                                        <div class="form-floating mb-3">
                                                            <input type="Password" class="form-control"
                                                                id="floatingInput" placeholder="">
                                                            <label for="floatingInput">New Password</label>
                                                        </div>
                                                        <div class="form-floating mb-3">
                                                            <input type="email" class="form-control" id="floatingInput"
                                                                placeholder="">
                                                            <label for="floatingInput">Recovery Email</label>
                                                        </div>
                                                        <div class="form-group mb-3">
                                                            <ul>
                                                                <li>
                                                                    <label>
                                                                        <input type="radio">
                                                                        Turn on 2-Step verification
                                                                    </label>
                                                                </li>
                                                                <li>
                                                                    <label>
                                                                        <input type="radio">
                                                                        Delete data from all devices
                                                                    </label>
                                                                </li>
                                                            </ul>


                                                        </div>
                                                        <div class="form-group mt-3">
                                                            <label>Devices With Account</label>

                                                            <div class="row">
                                                                <div
                                                                    class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                                                    <input type="text" class="form-control"
                                                                        id="floatingInput"
                                                                        placeholder="x IOS 16.9 Iphone">
                                                                </div>
                                                                <div
                                                                    class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                                                    <input type="text" class="form-control"
                                                                        id="floatingInput"
                                                                        placeholder="x MACOS M2 Macbook Pro">
                                                                </div>
                                                                <div
                                                                    class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                                                    <input type="text" class="form-control"
                                                                        id="floatingInput"
                                                                        placeholder="x WN11 Asus Laptop">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <div class="accountsettingbox" id="account3">
                                 
                                </div> -->
                                    <div class="accountsettingbox" id="account4">
                                        <div class="row pt-5 justify-content-center">
                                            <div class="col-12 col-sm-12 col-md-10 col-lg-10 col-xl-10 col-xxl-10">
                                                <div class="row ">
                                                    <div
                                                        class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                                        <div class="form-floating mb-3">
                                                            <input type="text" class="form-control" id="floatingInput"
                                                                placeholder="">
                                                            <label for="floatingInput">Video Quality</label>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="row ">
                                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                                        <div class="form-floating mb-3">
                                                            <input type="text" class="form-control" id="floatingInput"
                                                                placeholder="">
                                                            <label for="floatingInput">Base (Canvas Resolution)</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                                        <div class="form-floating mb-3">
                                                            <input type="text" class="form-control" id="floatingInput"
                                                                placeholder="">
                                                            <label for="floatingInput">Output (Scaled)
                                                                Resolution</label>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="row ">
                                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                                        <div class="form-floating mb-3">
                                                            <input type="text" class="form-control" id="floatingInput"
                                                                placeholder="">
                                                            <label for="floatingInput">Downscale Filter</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                                        <div class="form-floating mb-3">
                                                            <input type="text" class="form-control" id="floatingInput"
                                                                placeholder="">
                                                            <label for="floatingInput">Output (Scaled)
                                                                Resolution</label>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="row ">
                                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                                        <div class="form-floating mb-3">
                                                            <input type="text" class="form-control" id="floatingInput"
                                                                placeholder="">
                                                            <label for="floatingInput">Video BitRate</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                                        <div class="form-floating mb-3">
                                                            <input type="text" class="form-control" id="floatingInput"
                                                                placeholder="">
                                                            <label for="floatingInput">Video BitRate</label>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="row ">
                                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                                        <div class="form-floating mb-3">
                                                            <input type="text" class="form-control" id="floatingInput"
                                                                placeholder="">
                                                            <label for="floatingInput">Desktop Audio</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                                        <div class="form-floating mb-3">
                                                            <input type="text" class="form-control" id="floatingInput"
                                                                placeholder="">
                                                            <label for="floatingInput">Mic/Auxiliary Audio</label>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accountsettingbox" id="account5">
                                        <div class="row justify-content-center">
                                            <div class="col-12 col-sm-12 col-md-9 col-lg-9 col-xl-9 col-xxl-9">
                                                <div class="deleteaccountbox">
                                                    <img src="images/account_1.png" class="img-fluid deleteaccountbox"
                                                        alt="img">
                                                    <div class="deleteaccountbody">
                                                        <h3>You Are Deactivating Your Account</h3>
                                                        <p>For extra security, this requires you to confirm your email
                                                            or phone number when you reset you sign password. Learn More
                                                        </p>
                                                        <form>
                                                            <div class="form-group text-center mb-3">
                                                                <label>
                                                                    <input type="checkbox">
                                                                    I confirm my account deactivation
                                                                </label>

                                                            </div>
                                                            <button type="submit" class="deactivateaccount">Deactivate
                                                                Account</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-2 col-lg-1 col-xl-1 col-xxl-1">
                            <?php
                                include 'includes/rightbar.php';
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>

<?php
include 'includes/footer.php';
?>