<?php
include 'includes/header.php';
?>
<style>
    .broadcastlisting span {
        top: 40%;
        z-index: 999;
    }

    .dasboardlistbox.rightsidelist {
        margin: 0px 0;
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
                            <div class="layoutscreen">
                                <div class="row">
                                    <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 col-xxl-3">
                                        <div class="widget">
                                            <ul>
                                                <li class="active"><a href="stream-creator-studio-preview.php"><i class="fa-sharp fa-solid fa-clapperboard-play"></i>Preview</a></li>
                                                <li><a href="#"><i class="fa-regular fa-comments"></i>Chat</a></li>
                                                <li><a href="#"><i class="fa-solid fa-user"></i>Followers Stats</a></li>
                                                <li><a href="#"><i class="fa-solid fa-circle-dollar"></i>Donors Stats</a></li>
                                                <li><a href="#"><i class="fa-solid fa-grid"></i>Container</a></li>
                                                <li><a href="#"><i class="fa-solid fa-chart-pie"></i>General Stats</a></li>
                                                <li><a href="#"><i class="fa-solid fa-chart-line"></i>Activity</a></li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                        <div class="broadcastlisting middlepic mb-5">
                                            <input type="file">
                                            <span><i class="fa-regular fa-plus"></i></span>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                                <div class="broadcastlisting wigetselection mb-5">
                                                    <input type="file">

                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                                <div class="broadcastlisting wigetselection  mb-5">
                                                    <input type="file">

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 col-xxl-3">
                                        <div class="broadcastlisting rightsidepic wigetselection mb-5">
                                            <input type="file">

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-1 col-lg-1 col-xl-1 col-xxl-1">
                            <div class="rightbar">
                                <div class="dasboardlistbox rightsidelist" id="rightsidebar">
                                    <a href="#"><img src="images/progress.png" class="img-fluid progress" alt="img"></a>
                                    <br>
                                    <div class="profileimg pt-3">
                                        <img src="images/avatar_1.png" class="img-fluid" alt="img">
                                    </div>
                                    <div class="profileimg pt-3">
                                        <img src="images/avatar_2.png" class="img-fluid" alt="img">
                                    </div>
                                    <div class="profileimg pt-3">
                                        <img src="images/avatar_3.png" class="img-fluid" alt="img">
                                    </div>
                                    <div class="profileimg pt-3">
                                        <img src="images/avatar_4.png" class="img-fluid" alt="img">
                                    </div>
                                    <br>
                                    <a href="#"><img src="images/user.png" class="img-fluid userlist" alt="img"></a>
                                    <br>
                                    <div class="profileimg pt-3">
                                        <img src="images/avatar_1.png" class="img-fluid" alt="img">
                                    </div>
                                    <div class="profileimg pt-3">
                                        <img src="images/avatar_2.png" class="img-fluid" alt="img">
                                    </div>
                                    <div class="profileimg pt-3">
                                        <img src="images/avatar_3.png" class="img-fluid" alt="img">
                                    </div>
                                    <div class="profileimg pt-3">
                                        <img src="images/avatar_4.png" class="img-fluid" alt="img">
                                    </div>

                                </div>
                                <div class="trendinglist hidden" id="trendinglist">
                                    <div class="treninglist">
                                        <div class="creatersbox">
                                            <a href="#" class="creators_img"><img src="images/progress.png"
                                                    class="img-fluid" alt="img"></a>


                                            <h6> Trending Creators</h6>



                                            <a href="#" class="explore">Explore Trends</a>

                                        </div>
                                        <div class="trendinglistbox">
                                            <div class="creatorsbox">
                                                <img src="images/avatar_1.png" class="img-fluid" alt="img">
                                                <h4>@Laktar0th</h4>
                                                <p>4.521.256 Followers</p>
                                            </div>
                                            <div class="creatorsbox">
                                                <img src="images/avatar_2.png" class="img-fluid" alt="img">
                                                <h4>@MyLulu300</h4>
                                                <p>1.521.256 Followers</p>
                                            </div>
                                            <div class="creatorsbox">
                                                <img src="images/avatar_3.png" class="img-fluid" alt="img">
                                                <h4>@Dae765lo</h4>
                                                <p>23.521.256 Followers</p>
                                            </div>
                                            <div class="creatorsbox">
                                                <img src="images/avatar_4.png" class="img-fluid" alt="img">
                                                <h4>@TheJonsieGames</h4>
                                                <p>521.256 Followers</p>
                                            </div>

                                        </div>
                                        <div class="creatersbox pt-4">
                                            <a href="#" class="creators_img1"><img src="images/chat.png"
                                                    class="img-fluid" alt="img"></a>


                                            <h6> Social</h6>


                                            <a href="#" class="explore">Go to chat list</a>

                                        </div>
                                        <div class="trendinglistbox">
                                            <div class="creatorsbox">
                                                <img src="images/avatar_1.png" class="img-fluid" alt="img">
                                                <h4>@Laktar0th</h4>
                                                <p>4.521.256 Followers</p>
                                            </div>
                                            <div class="creatorsbox">
                                                <img src="images/avatar_2.png" class="img-fluid" alt="img">
                                                <h4>@MyLulu300</h4>
                                                <p>1.521.256 Followers</p>
                                            </div>
                                            <div class="creatorsbox">
                                                <img src="images/avatar_3.png" class="img-fluid" alt="img">
                                                <h4>@Dae765lo</h4>
                                                <p>23.521.256 Followers</p>
                                            </div>
                                            <div class="creatorsbox">
                                                <img src="images/avatar_4.png" class="img-fluid" alt="img">
                                                <h4>@TheJonsieGames</h4>
                                                <p>521.256 Followers</p>
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
    </section>
</main>

<?php
include 'includes/footer.php';
?>