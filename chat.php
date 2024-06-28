<?php
include 'includes/header.php';
?>
<style>
    .chatpeoplelisting {
        overflow-y: hidden;
        height: auto;
        margin-bottom: 30px;
    }

    .trenindlist h5 {
        font-size: 13px;

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
                        <div class="col-12 col-sm-12 col-md-11 col-lg-11 col-xl-11 col-xxl-11">

                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 col-xxl-3">
                                    <div class="chatlistbox">
                                        <div class="searchchat">
                                            <form>
                                                <div class="chatlistform">
                                                    <input type="text" placeholder="Search conversation">
                                                    <i class="fa-solid fa-magnifying-glass"></i>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="chatpeoplelisting">
                                            <div class="trenindlist chatingbox chatactive">
                                                <img src="images/trending_1.png" class="img-fluid" alt="img">
                                                <h5>John Smith - 3 min ago</h5>
                                                <p>Amazing voice!</p>
                                            </div>
                                            <div class="trenindlist chatingbox">
                                                <img src="images/trending_2.png" class="img-fluid" alt="img">
                                                <h5>Anderson Paak - 3 min ago</h5>
                                                <p>Thank you! </p>
                                            </div>
                                            <div class="trenindlist chatingbox">
                                                <img src="images/trending_3.png" class="img-fluid" alt="img">
                                                <h5>John Smith - 3 min ago</h5>
                                                <p>Amazing voice!</p>
                                            </div>
                                            <div class="trenindlist chatingbox">
                                                <img src="images/trending_4.png" class="img-fluid" alt="img">
                                                <h5>Anderson Paak - 3 min ago</h5>
                                                <p>Thank you! </p>
                                            </div>
                                            <div class="trenindlist chatingbox">
                                                <img src="images/trending_3.png" class="img-fluid" alt="img">
                                                <h5>John Smith - 3 min ago</h5>
                                                <p>Amazing voice!</p>
                                            </div>
                                            <div class="trenindlist chatingbox">
                                                <img src="images/trending_4.png" class="img-fluid" alt="img">
                                                <h5>Anderson Paak - 3 min ago</h5>
                                                <p>Thank you! </p>
                                            </div>
                                            <div class="trenindlist chatingbox">
                                                <img src="images/trending_2.png" class="img-fluid" alt="img">
                                                <h5>John Smith - 3 min ago</h5>
                                                <p>Amazing voice!</p>
                                            </div>
                                            <div class="trenindlist chatingbox">
                                                <img src="images/trending_3.png" class="img-fluid" alt="img">
                                                <h5>John Smith - 3 min ago</h5>
                                                <p>Amazing voice!</p>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                    <div class="icomingchatlist">
                                        <div class="chatendingbox">
                                            <div class="senderlist">
                                                <h2>Migryon:</h2>
                                            </div>

                                            <div class="chatmessaage">
                                                <p>Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet</p>
                                            </div>
                                            <div class="chatonlinebox">
                                                <img src="images/trending_2.png" alt="img" class="img-fluid">
                                                <div class="chatmessaagebox accordion-body">
                                                    <p>Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet</p>
                                                </div>
                                            </div>

                                            <div class="incommingmesagebox pb-5">
                                                <p>Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet</p>
                                            </div>

                                            <div class="chatonlinebox pt-5">
                                                <img src="images/trending_2.png" alt="img" class="img-fluid">
                                                <div class="chatmessaagebox accordion-body">
                                                    <p>Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="emojilist">
                                            <div class="emojibox">
                                                <ul>
                                                    <li><img src="images/face.png" class="img-fluid" alt="img"></li>
                                                    <li><img src="images/face_1.png" class="img-fluid" alt="img"></li>
                                                    <li><img src="images/face_2.png" class="img-fluid" alt="img"></li>
                                                    <li><img src="images/face_3.png" class="img-fluid" alt="img"></li>
                                                    <li><img src="images/face_4.png" class="img-fluid" alt="img"></li>

                                                </ul>
                                                <a href="#" class="gift">Send Gift</a>
                                            </div>
                                            <form>
                                                <div class="formgroup">
                                                    <input type="text" placeholder="| Say something...">
                                                    <img src="images/planeicon.png" class="img-fluid" alt="img">
                                                </div>
                                            </form>
                                        </div>

                                    </div>

                                </div>
                                <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 col-xxl-3">
                                    <div class="chatpeoplelisting chatactivebox">
                                        <div class="friendslist">
                                            <a href="#" class="friends"><i class="fa-regular fa-user-group"></i>Friends</a>
                                            <a href="#" class="search"><i class="fa-regular fa-magnifying-glass"></i></a>
                                        </div>
                                        <div class="trenindlist chatingbox1">
                                            <img src="images/trending_1.png" class="img-fluid" alt="img">
                                            <h5>John Smith - 3 min ago</h5>

                                        </div>
                                        <div class="trenindlist chatingbox1">
                                            <img src="images/trending_2.png" class="img-fluid" alt="img">
                                            <h5>Anderson Paak - 3 min ago</h5>

                                        </div>
                                        <div class="trenindlist chatingbox1">
                                            <img src="images/trending_3.png" class="img-fluid" alt="img">
                                            <h5>John Smith - 3 min ago</h5>

                                        </div>
                                        <div class="trenindlist chatingbox1">
                                            <img src="images/trending_4.png" class="img-fluid" alt="img">
                                            <h5>Anderson Paak - 3 min ago</h5>

                                        </div>
                                        <div class="trenindlist chatingbox1">
                                            <img src="images/trending_3.png" class="img-fluid" alt="img">
                                            <h5>John Smith - 3 min ago</h5>

                                        </div>
                                        <div class="trenindlist chatingbox1">
                                            <img src="images/trending_4.png" class="img-fluid" alt="img">
                                            <h5>Anderson Paak - 3 min ago</h5>

                                        </div>
                                        <div class="trenindlist chatingbox1">
                                            <img src="images/trending_2.png" class="img-fluid" alt="img">
                                            <h5>John Smith - 3 min ago</h5>

                                        </div>
                                        <div class="trenindlist chatingbox1">
                                            <img src="images/trending_3.png" class="img-fluid" alt="img">
                                            <h5>John Smith - 3 min ago</h5>

                                        </div>
                                        <div class="trenindlist chatingbox1">
                                            <img src="images/trending_4.png" class="img-fluid" alt="img">
                                            <h5>Anderson Paak - 3 min ago</h5>

                                        </div>
                                        <div class="trenindlist chatingbox1">
                                            <img src="images/trending_4.png" class="img-fluid" alt="img">
                                            <h5>Anderson Paak - 3 min ago</h5>

                                        </div>
                                        <div class="trenindlist chatingbox1">
                                            <img src="images/trending_2.png" class="img-fluid" alt="img">
                                            <h5>John Smith - 3 min ago</h5>

                                        </div>
                                        <div class="trenindlist chatingbox1">
                                            <img src="images/trending_3.png" class="img-fluid" alt="img">
                                            <h5>John Smith - 3 min ago</h5>

                                        </div>
                                        <div class="trenindlist chatingbox1">
                                            <img src="images/trending_4.png" class="img-fluid" alt="img">
                                            <h5>Anderson Paak - 3 min ago</h5>

                                        </div>
                                        <div class="trenindlist chatingbox1">
                                            <img src="images/trending_4.png" class="img-fluid" alt="img">
                                            <h5>Anderson Paak - 3 min ago</h5>

                                        </div>
                                        <div class="trenindlist chatingbox1">
                                            <img src="images/trending_2.png" class="img-fluid" alt="img">
                                            <h5>John Smith - 3 min ago</h5>

                                        </div>
                                        <div class="trenindlist chatingbox1">
                                            <img src="images/trending_3.png" class="img-fluid" alt="img">
                                            <h5>John Smith - 3 min ago</h5>

                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-1 col-lg-1 col-xl-1 col-xxl-1">
                        <?php
                                        include 'includes/rightbar.php';
                                    ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <?php
    include 'includes/footer.php';
    ?>