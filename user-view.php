<?php
include 'includes/header.php';
?>
<style>
.broadcastlisting span {
    top: 40%;
    z-index: 999;
}

.chatpeoplelisting1 {
    overflow-y: scroll;
    height: 245px;
}

.emojilist {
    padding: 20px 0;
}
</style>
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
                            <div class="userviewbox">
                                <div class="row">
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-8 col-xl-8 col-xxl-8">
                                        <div class="userimg">
                                            <img src="images/user_view.png" class="img-fluid" alt="img">
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 col-xxl-4">
                                        <div class="chatlistnew">
                                            <a href="#">Live Chat</a>
                                            <a href="#"><i class="fa-solid fa-eye"></i> 46,933.00</a>
                                        </div>
                                        <div class="chatpeoplelisting1">
                                            <div class="trenindlist chatpeoplebox">
                                                <img src="images/trending_1.png" class="img-fluid" alt="img">
                                                <h5>John Smith - 3 min ago</h5>
                                                <p>Amazing voice!</p>
                                            </div>
                                            <div class="trenindlist chatpeoplebox">
                                                <img src="images/trending_2.png" class="img-fluid" alt="img">
                                                <h5>Anderson Paak - 3 min ago</h5>
                                                <p>Thank you! </p>
                                            </div>
                                            <div class="trenindlist chatpeoplebox">
                                                <img src="images/trending_3.png" class="img-fluid" alt="img">
                                                <h5>John Smith - 3 min ago</h5>
                                                <p>Amazing voice!</p>
                                            </div>
                                            <div class="trenindlist chatpeoplebox">
                                                <img src="images/trending_4.png" class="img-fluid" alt="img">
                                                <h5>Anderson Paak - 3 min ago</h5>
                                                <p>Thank you! </p>
                                            </div>
                                            <div class="trenindlist chatpeoplebox">
                                                <img src="images/trending_3.png" class="img-fluid" alt="img">
                                                <h5>John Smith - 3 min ago</h5>
                                                <p>Amazing voice!</p>
                                            </div>
                                            <div class="trenindlist chatpeoplebox">
                                                <img src="images/trending_4.png" class="img-fluid" alt="img">
                                                <h5>Anderson Paak - 3 min ago</h5>
                                                <p>Thank you! </p>
                                            </div>
                                        </div>
                                        <div class="emojilist">
                                            <ul>
                                                <li><img src="images/face.png" class="img-fluid" alt="img"></li>
                                                <li><img src="images/face_1.png" class="img-fluid" alt="img"></li>
                                                <li><img src="images/face_2.png" class="img-fluid" alt="img"></li>
                                                <li><img src="images/face_3.png" class="img-fluid" alt="img"></li>
                                                <li><img src="images/face_4.png" class="img-fluid" alt="img"></li>
                                                <li><a href="#" class="gift">Send Gift</a></li>
                                            </ul>
                                            <form>
                                                <div class="formgroup">
                                                    <input type="text" placeholder="| Say something...">
                                                    <img src="images/planeicon.png" class="img-fluid" alt="img">
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row align-items-center pt-5">
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
                                    <div class="col-12 col-sm-12 col-md-8 col-lg-8 col-xl-8 col-xxl-8">
                                        <ul>
                                            <li><a href="#" class="active" data-bs-target="account1">About Anderson
                                                    Paak</a></li>
                                            <li><a href="#" data-bs-target="account2">Gallery</a></li>
                                            <li><a href="#" data-bs-target="account3">Clips</a></li>
                                            <li><a href="#" data-bs-target="account4">Streams</a></li>

                                        </ul>
                                    </div>
                                </div>
                                <div class="contentbox">
                                    <div class="accountsettingbox" id="account1" style="display:block;">
                                        <div class="socailaccountlist mb-3">
                                            <ul>
                                                <li>
                                                    <a href="#"><i class="fa-solid fa-x"></i>@paak.oficial</a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="fa-brands fa-facebook-f"></i>@paak.oficial</a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="fa-brands fa-instagram"></i>@paak.oficial</a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="fa-regular fa-envelope"></i>@paak.oficial</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="loactionlisting mb-3">
                                            <ul>
                                                <li>
                                                    <h3>Location</h3>
                                                    <p>California</p>
                                                </li>
                                                <li>
                                                    <h3>Age</h3>
                                                    <p>38</p>

                                                </li>
                                                <li>
                                                    <h3>Limitless Member since</h3>
                                                    <p>28/04/2024</p>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="loactiondetail">
                                            <p>Anderson .Paak, whose real name is Brandon Paak Anderson, is an American
                                                singer, songwriter, music producer, and drummer born on February 8,
                                                1986, in Oxnard, California. He began his musical career under the name
                                                Breezy Lovejoy, releasing his debut album "O.B.E. Vol. 1" in 2012.
                                                However, it was with his album "Malibu" in 2016 that he gained worldwide
                                                and critical recognition.</p><br>
                                            <p>Anderson .Paak, whose real name is Brandon Paak Anderson, is an American
                                                singer, songwriter, music producer, and drummer born on February 8,
                                                1986, in Oxnard, California. He began his musical career under the name
                                                Breezy Lovejoy, releasing his debut album "O.B.E. Vol. 1" in 2012.
                                                However, it was with his album "Malibu" in 2016 that he gained worldwide
                                                and critical recognition.</p>
                                        </div>
                                    </div>
                                    <div class="accountsettingbox" id="account2">


                                        <div class="owl-carousel owl-theme" id="gallery">
                                            <div class="item">
                                                <div class="row">
                                                    <div
                                                        class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-2 col-xxl-2">
                                                        <div class="gallerybox">
                                                            <img src="images/gallery-1.png" class="img-fluid">
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-2 col-xxl-2">
                                                        <div class="gallerybox">
                                                            <img src="images/gallery-2.png" class="img-fluid">
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-2 col-xxl-2">
                                                        <div class="gallerybox">
                                                            <img src="images/gallery-3.png" class="img-fluid">
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-2 col-xxl-2">
                                                        <div class="gallerybox">
                                                            <img src="images/gallery-1.png" class="img-fluid">
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-2 col-xxl-2">
                                                        <div class="gallerybox">
                                                            <img src="images/gallery-2.png" class="img-fluid">
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-2 col-xxl-2">
                                                        <div class="gallerybox">
                                                            <img src="images/gallery-3.png" class="img-fluid">
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div
                                                        class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-2 col-xxl-2">
                                                        <div class="gallerybox">
                                                            <img src="images/gallery-1.png" class="img-fluid">
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-2 col-xxl-2">
                                                        <div class="gallerybox">
                                                            <img src="images/gallery-2.png" class="img-fluid">
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-2 col-xxl-2">
                                                        <div class="gallerybox">
                                                            <img src="images/gallery-3.png" class="img-fluid">
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-2 col-xxl-2">
                                                        <div class="gallerybox">
                                                            <img src="images/gallery-1.png" class="img-fluid">
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-2 col-xxl-2">
                                                        <div class="gallerybox">
                                                            <img src="images/gallery-2.png" class="img-fluid">
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-2 col-xxl-2">
                                                        <div class="gallerybox">
                                                            <img src="images/gallery-3.png" class="img-fluid">
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div
                                                        class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-2 col-xxl-2">
                                                        <div class="gallerybox">
                                                            <img src="images/gallery-1.png" class="img-fluid">
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-2 col-xxl-2">
                                                        <div class="gallerybox">
                                                            <img src="images/gallery-2.png" class="img-fluid">
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-2 col-xxl-2">
                                                        <div class="gallerybox">
                                                            <img src="images/gallery-3.png" class="img-fluid">
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-2 col-xxl-2">
                                                        <div class="gallerybox">
                                                            <img src="images/gallery-1.png" class="img-fluid">
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-2 col-xxl-2">
                                                        <div class="gallerybox">
                                                            <img src="images/gallery-2.png" class="img-fluid">
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-2 col-xxl-2">
                                                        <div class="gallerybox">
                                                            <img src="images/gallery-3.png" class="img-fluid">
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="row">
                                                    <div
                                                        class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-2 col-xxl-2">
                                                        <div class="gallerybox">
                                                            <img src="images/gallery-1.png" class="img-fluid">
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-2 col-xxl-2">
                                                        <div class="gallerybox">
                                                            <img src="images/gallery-2.png" class="img-fluid">
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-2 col-xxl-2">
                                                        <div class="gallerybox">
                                                            <img src="images/gallery-3.png" class="img-fluid">
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-2 col-xxl-2">
                                                        <div class="gallerybox">
                                                            <img src="images/gallery-1.png" class="img-fluid">
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-2 col-xxl-2">
                                                        <div class="gallerybox">
                                                            <img src="images/gallery-2.png" class="img-fluid">
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-2 col-xxl-2">
                                                        <div class="gallerybox">
                                                            <img src="images/gallery-3.png" class="img-fluid">
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div
                                                        class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-2 col-xxl-2">
                                                        <div class="gallerybox">
                                                            <img src="images/gallery-1.png" class="img-fluid">
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-2 col-xxl-2">
                                                        <div class="gallerybox">
                                                            <img src="images/gallery-2.png" class="img-fluid">
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-2 col-xxl-2">
                                                        <div class="gallerybox">
                                                            <img src="images/gallery-3.png" class="img-fluid">
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-2 col-xxl-2">
                                                        <div class="gallerybox">
                                                            <img src="images/gallery-1.png" class="img-fluid">
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-2 col-xxl-2">
                                                        <div class="gallerybox">
                                                            <img src="images/gallery-2.png" class="img-fluid">
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-2 col-xxl-2">
                                                        <div class="gallerybox">
                                                            <img src="images/gallery-3.png" class="img-fluid">
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div
                                                        class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-2 col-xxl-2">
                                                        <div class="gallerybox">
                                                            <img src="images/gallery-1.png" class="img-fluid">
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-2 col-xxl-2">
                                                        <div class="gallerybox">
                                                            <img src="images/gallery-2.png" class="img-fluid">
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-2 col-xxl-2">
                                                        <div class="gallerybox">
                                                            <img src="images/gallery-3.png" class="img-fluid">
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-2 col-xxl-2">
                                                        <div class="gallerybox">
                                                            <img src="images/gallery-1.png" class="img-fluid">
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-2 col-xxl-2">
                                                        <div class="gallerybox">
                                                            <img src="images/gallery-2.png" class="img-fluid">
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-2 col-xxl-2">
                                                        <div class="gallerybox">
                                                            <img src="images/gallery-3.png" class="img-fluid">
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="row">
                                                    <div
                                                        class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-2 col-xxl-2">
                                                        <div class="gallerybox">
                                                            <img src="images/gallery-1.png" class="img-fluid">
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-2 col-xxl-2">
                                                        <div class="gallerybox">
                                                            <img src="images/gallery-2.png" class="img-fluid">
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-2 col-xxl-2">
                                                        <div class="gallerybox">
                                                            <img src="images/gallery-3.png" class="img-fluid">
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-2 col-xxl-2">
                                                        <div class="gallerybox">
                                                            <img src="images/gallery-1.png" class="img-fluid">
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-2 col-xxl-2">
                                                        <div class="gallerybox">
                                                            <img src="images/gallery-2.png" class="img-fluid">
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-2 col-xxl-2">
                                                        <div class="gallerybox">
                                                            <img src="images/gallery-3.png" class="img-fluid">
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div
                                                        class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-2 col-xxl-2">
                                                        <div class="gallerybox">
                                                            <img src="images/gallery-1.png" class="img-fluid">
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-2 col-xxl-2">
                                                        <div class="gallerybox">
                                                            <img src="images/gallery-2.png" class="img-fluid">
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-2 col-xxl-2">
                                                        <div class="gallerybox">
                                                            <img src="images/gallery-3.png" class="img-fluid">
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-2 col-xxl-2">
                                                        <div class="gallerybox">
                                                            <img src="images/gallery-1.png" class="img-fluid">
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-2 col-xxl-2">
                                                        <div class="gallerybox">
                                                            <img src="images/gallery-2.png" class="img-fluid">
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-2 col-xxl-2">
                                                        <div class="gallerybox">
                                                            <img src="images/gallery-3.png" class="img-fluid">
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div
                                                        class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-2 col-xxl-2">
                                                        <div class="gallerybox">
                                                            <img src="images/gallery-1.png" class="img-fluid">
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-2 col-xxl-2">
                                                        <div class="gallerybox">
                                                            <img src="images/gallery-2.png" class="img-fluid">
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-2 col-xxl-2">
                                                        <div class="gallerybox">
                                                            <img src="images/gallery-3.png" class="img-fluid">
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-2 col-xxl-2">
                                                        <div class="gallerybox">
                                                            <img src="images/gallery-1.png" class="img-fluid">
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-2 col-xxl-2">
                                                        <div class="gallerybox">
                                                            <img src="images/gallery-2.png" class="img-fluid">
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-2 col-xxl-2">
                                                        <div class="gallerybox">
                                                            <img src="images/gallery-3.png" class="img-fluid">
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                    <div class="accountsettingbox" id="account3">
                                        <div class="clipsbox mb-5">
                                            <form>
                                                <div class="formlist">
                                                    <input type="text"
                                                        placeholder="Look for a stream, category, creator or keyword">
                                                    <i class="fa-solid fa-magnifying-glass"></i>

                                                </div>
                                            </form>
                                            <a href="#">Date</a>
                                        </div>

                                        <div class="owl-carousel owl-theme" id="clips">
                                            <div class="item">
                                                <div class="row">
                                                    <div
                                                        class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-4 col-xxl-4">
                                                        <div class="discoverbox">
                                                            <div class="discoverimage">
                                                                <img src="images/dicover/discover_1.png"
                                                                    class="img-fluid" alt="img">

                                                            </div>
                                                            <div class="discoverbody">
                                                                <div class="discoverlist clipsboximg">
                                                                    <img src="images/dicover/discover_small_img.png"
                                                                        class="img-fluid roundimg">
                                                                    <h5>Battle Opening</h5>
                                                                    <p>Clipped by @user</p>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-4 col-xxl-4">
                                                        <div class="discoverbox">
                                                            <div class="discoverimage">
                                                                <img src="images/dicover/discover_1.png"
                                                                    class="img-fluid" alt="img">

                                                            </div>
                                                            <div class="discoverbody">
                                                                <div class="discoverlist clipsboximg">
                                                                    <img src="images/dicover/discover_small_img.png"
                                                                        class="img-fluid roundimg">
                                                                    <h5>Battle Opening</h5>
                                                                    <p>Clipped by @user</p>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-4 col-xxl-4">
                                                        <div class="discoverbox">
                                                            <div class="discoverimage">
                                                                <img src="images/dicover/discover_1.png"
                                                                    class="img-fluid" alt="img">

                                                            </div>
                                                            <div class="discoverbody">
                                                                <div class="discoverlist clipsboximg">
                                                                    <img src="images/dicover/discover_small_img.png"
                                                                        class="img-fluid roundimg">
                                                                    <h5>Battle Opening</h5>
                                                                    <p>Clipped by @user</p>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="row">
                                                    <div
                                                        class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-4 col-xxl-4">
                                                        <div class="discoverbox">
                                                            <div class="discoverimage">
                                                                <img src="images/dicover/discover_1.png"
                                                                    class="img-fluid" alt="img">

                                                            </div>
                                                            <div class="discoverbody">
                                                                <div class="discoverlist clipsboximg">
                                                                    <img src="images/dicover/discover_small_img.png"
                                                                        class="img-fluid roundimg">
                                                                    <h5>Battle Opening</h5>
                                                                    <p>Clipped by @user</p>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-4 col-xxl-4">
                                                        <div class="discoverbox">
                                                            <div class="discoverimage">
                                                                <img src="images/dicover/discover_1.png"
                                                                    class="img-fluid" alt="img">

                                                            </div>
                                                            <div class="discoverbody">
                                                                <div class="discoverlist clipsboximg">
                                                                    <img src="images/dicover/discover_small_img.png"
                                                                        class="img-fluid roundimg">
                                                                    <h5>Battle Opening</h5>
                                                                    <p>Clipped by @user</p>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-4 col-xxl-4">
                                                        <div class="discoverbox">
                                                            <div class="discoverimage">
                                                                <img src="images/dicover/discover_1.png"
                                                                    class="img-fluid" alt="img">

                                                            </div>
                                                            <div class="discoverbody">
                                                                <div class="discoverlist clipsboximg">
                                                                    <img src="images/dicover/discover_small_img.png"
                                                                        class="img-fluid roundimg">
                                                                    <h5>Battle Opening</h5>
                                                                    <p>Clipped by @user</p>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="row">
                                                    <div
                                                        class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-4 col-xxl-4">
                                                        <div class="discoverbox">
                                                            <div class="discoverimage">
                                                                <img src="images/dicover/discover_1.png"
                                                                    class="img-fluid" alt="img">

                                                            </div>
                                                            <div class="discoverbody">
                                                                <div class="discoverlist clipsboximg">
                                                                    <img src="images/dicover/discover_small_img.png"
                                                                        class="img-fluid roundimg">
                                                                    <h5>Battle Opening</h5>
                                                                    <p>Clipped by @user</p>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-4 col-xxl-4">
                                                        <div class="discoverbox">
                                                            <div class="discoverimage">
                                                                <img src="images/dicover/discover_1.png"
                                                                    class="img-fluid" alt="img">

                                                            </div>
                                                            <div class="discoverbody">
                                                                <div class="discoverlist clipsboximg">
                                                                    <img src="images/dicover/discover_small_img.png"
                                                                        class="img-fluid roundimg">
                                                                    <h5>Battle Opening</h5>
                                                                    <p>Clipped by @user</p>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-4 col-xxl-4">
                                                        <div class="discoverbox">
                                                            <div class="discoverimage">
                                                                <img src="images/dicover/discover_1.png"
                                                                    class="img-fluid" alt="img">

                                                            </div>
                                                            <div class="discoverbody">
                                                                <div class="discoverlist clipsboximg">
                                                                    <img src="images/dicover/discover_small_img.png"
                                                                        class="img-fluid roundimg">
                                                                    <h5>Battle Opening</h5>
                                                                    <p>Clipped by @user</p>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accountsettingbox" id="account4">
                                        <div class="clipsbox mb-5">
                                            <form>
                                                <div class="formlist">
                                                    <input type="text"
                                                        placeholder="Look for a stream, category, creator or keyword">
                                                    <i class="fa-solid fa-magnifying-glass"></i>

                                                </div>
                                            </form>
                                            <a href="#">Date</a>
                                        </div>
                                        <div class="owl-carousel owl-theme" id="streams">
                                            <div class="item">
                                                <div class="row">
                                                    <div
                                                        class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-4 col-xxl-4">
                                                        <div class="discoverbox">
                                                            <div class="discoverimage">
                                                                <img src="images/dicover/discover_1.png"
                                                                    class="img-fluid" alt="img">
                                                                <span class="live"><i
                                                                        class="fa-sharp fa-solid fa-circle"></i>Live</span>
                                                            </div>
                                                            <div class="discoverbody">
                                                                <div class="discoverlist clipsboximg">
                                                                    <img src="images/dicover/discover_small_img.png"
                                                                        class="img-fluid roundimg">
                                                                    <h5>REDBULL</h5>
                                                                    <p>Redbull - RAP Battles online from LA,
                                                                        Cal...</p>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-4 col-xxl-4">
                                                        <div class="discoverbox">
                                                            <div class="discoverimage">
                                                                <img src="images/dicover/discover_1.png"
                                                                    class="img-fluid" alt="img">
                                                                <span class="live"><i
                                                                        class="fa-sharp fa-solid fa-circle"></i>Live</span>
                                                            </div>
                                                            <div class="discoverbody">
                                                                <div class="discoverlist clipsboximg">
                                                                    <img src="images/dicover/discover_small_img.png"
                                                                        class="img-fluid roundimg">
                                                                    <h5>REDBULL</h5>
                                                                    <p>Redbull - RAP Battles online from LA,
                                                                        Cal...</p>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-4 col-xxl-4">
                                                        <div class="discoverbox">
                                                            <div class="discoverimage">
                                                                <img src="images/dicover/discover_1.png"
                                                                    class="img-fluid" alt="img">
                                                                <span class="live"><i
                                                                        class="fa-sharp fa-solid fa-circle"></i>Live</span>
                                                            </div>
                                                            <div class="discoverbody">
                                                                <div class="discoverlist clipsboximg">
                                                                    <img src="images/dicover/discover_small_img.png"
                                                                        class="img-fluid roundimg">
                                                                    <h5>REDBULL</h5>
                                                                    <p>Redbull - RAP Battles online from LA,
                                                                        Cal...</p>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="row">
                                                    <div
                                                        class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-4 col-xxl-4">
                                                        <div class="discoverbox">
                                                            <div class="discoverimage">
                                                                <img src="images/dicover/discover_1.png"
                                                                    class="img-fluid" alt="img">
                                                                <span class="live"><i
                                                                        class="fa-sharp fa-solid fa-circle"></i>Live</span>
                                                            </div>
                                                            <div class="discoverbody">
                                                                <div class="discoverlist clipsboximg">
                                                                    <img src="images/dicover/discover_small_img.png"
                                                                        class="img-fluid roundimg">
                                                                    <h5>REDBULL</h5>
                                                                    <p>Redbull - RAP Battles online from LA,
                                                                        Cal...</p>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-4 col-xxl-4">
                                                        <div class="discoverbox">
                                                            <div class="discoverimage">
                                                                <img src="images/dicover/discover_1.png"
                                                                    class="img-fluid" alt="img">
                                                                <span class="live"><i
                                                                        class="fa-sharp fa-solid fa-circle"></i>Live</span>
                                                            </div>
                                                            <div class="discoverbody">
                                                                <div class="discoverlist clipsboximg">
                                                                    <img src="images/dicover/discover_small_img.png"
                                                                        class="img-fluid roundimg">
                                                                    <h5>REDBULL</h5>
                                                                    <p>Redbull - RAP Battles online from LA,
                                                                        Cal...</p>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-4 col-xxl-4">
                                                        <div class="discoverbox">
                                                            <div class="discoverimage">
                                                                <img src="images/dicover/discover_1.png"
                                                                    class="img-fluid" alt="img">
                                                                <span class="live"><i
                                                                        class="fa-sharp fa-solid fa-circle"></i>Live</span>
                                                            </div>
                                                            <div class="discoverbody">
                                                                <div class="discoverlist clipsboximg">
                                                                    <img src="images/dicover/discover_small_img.png"
                                                                        class="img-fluid roundimg">
                                                                    <h5>REDBULL</h5>
                                                                    <p>Redbull - RAP Battles online from LA,
                                                                        Cal...</p>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="row">
                                                    <div
                                                        class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-4 col-xxl-4">
                                                        <div class="discoverbox">
                                                            <div class="discoverimage">
                                                                <img src="images/dicover/discover_1.png"
                                                                    class="img-fluid" alt="img">
                                                                <span class="live"><i
                                                                        class="fa-sharp fa-solid fa-circle"></i>Live</span>
                                                            </div>
                                                            <div class="discoverbody">
                                                                <div class="discoverlist clipsboximg">
                                                                    <img src="images/dicover/discover_small_img.png"
                                                                        class="img-fluid roundimg">
                                                                    <h5>REDBULL</h5>
                                                                    <p>Redbull - RAP Battles online from LA,
                                                                        Cal...</p>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-4 col-xxl-4">
                                                        <div class="discoverbox">
                                                            <div class="discoverimage">
                                                                <img src="images/dicover/discover_1.png"
                                                                    class="img-fluid" alt="img">
                                                                <span class="live"><i
                                                                        class="fa-sharp fa-solid fa-circle"></i>Live</span>
                                                            </div>
                                                            <div class="discoverbody">
                                                                <div class="discoverlist clipsboximg">
                                                                    <img src="images/dicover/discover_small_img.png"
                                                                        class="img-fluid roundimg">
                                                                    <h5>REDBULL</h5>
                                                                    <p>Redbull - RAP Battles online from LA,
                                                                        Cal...</p>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-4 col-xxl-4">
                                                        <div class="discoverbox">
                                                            <div class="discoverimage">
                                                                <img src="images/dicover/discover_1.png"
                                                                    class="img-fluid" alt="img">
                                                                <span class="live"><i
                                                                        class="fa-sharp fa-solid fa-circle"></i>Live</span>
                                                            </div>
                                                            <div class="discoverbody">
                                                                <div class="discoverlist clipsboximg">
                                                                    <img src="images/dicover/discover_small_img.png"
                                                                        class="img-fluid roundimg">
                                                                    <h5>REDBULL</h5>
                                                                    <p>Redbull - RAP Battles online from LA,
                                                                        Cal...</p>

                                                                </div>
                                                            </div>
                                                        </div>
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