<?php
include 'includes/header.php';
?>
<style>
    .chatpeoplelisting {
        overflow-y: scroll;
        height: 714px;
        margin-bottom: 30px;
    }

    .emojilist ul li {
        margin: 0 0px;
        list-style: none;
    }

    .wigetfunction {
        width: 200px;
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
                            <div class="creatorbox">
                                <div class="row">
                                    <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 col-xxl-3">
                                        <div class="creatorsidedashboard">
                                            <div class="titlebox">
                                                <div class="creatorboxsmall">
                                                    <img src="images/dashboardimg.png" class="img-fluid" alt="img">
                                                    <a href="#" class="livechat">Live Now</a>
                                                    <h4>Anderson Paak</h4>
                                                    <p>9.2M Subscriber</p>
                                                </div>

                                                <div class="creatormiddlebox">
                                                    <h6>Title <span><i class="fa-light fa-pencil"></i></span></h6>
                                                    <h5>Anderson Paak & The Free Nationals: NPR Music at your TinyDesk 2024</h5>
                                                </div>

                                            </div>
                                            <div class="categorylist">
                                                <h5>Category</h5>
                                                <a href="#"><i class="fa-regular fa-music"></i>Music</a>
                                            </div>
                                            <div class="topfollowersbox">
                                                <h3>Top Followers</h3>
                                                <ul>
                                                    <li>
                                                        <img src="images/follower_1.png" class="img-fluid">
                                                    </li>
                                                    <li>
                                                        <img src="images/follower_2.png" class="img-fluid">
                                                    </li>
                                                    <li>
                                                        <img src="images/follower_3.png" class="img-fluid">
                                                    </li>
                                                    <li>
                                                        <img src="images/follower_4.png" class="img-fluid">
                                                    </li>
                                                    <li>
                                                        <img src="images/follower_5.png" class="img-fluid">
                                                    </li>
                                                    <li>
                                                        <img src="images/follower_6.png" class="img-fluid">
                                                    </li>
                                                    <li>
                                                        <img src="images/follower_7.png" class="img-fluid">
                                                    </li>
                                                    <li>
                                                        <img src="images/follower_8.png" class="img-fluid">
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="topdonors">
                                                <h3>Top Donors</h3>
                                                <ul>
                                                    <li>
                                                        <img src="images/follower_1.png" class="img-fluid">
                                                    </li>
                                                    <li>
                                                        <img src="images/follower_2.png" class="img-fluid">
                                                    </li>
                                                    <li>
                                                        <img src="images/follower_3.png" class="img-fluid">
                                                    </li>
                                                    <li>
                                                        <img src="images/follower_4.png" class="img-fluid">
                                                    </li>
                                                    <li>
                                                        <img src="images/follower_5.png" class="img-fluid">
                                                    </li>
                                                    <li>
                                                        <img src="images/follower_6.png" class="img-fluid">
                                                    </li>
                                                    <li>
                                                        <img src="images/follower_7.png" class="img-fluid">
                                                    </li>
                                                    <li>
                                                        <img src="images/follower_8.png" class="img-fluid">
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                        <div class="dashboradimg">
                                            <img src="images/user_view.png" class="img-fluid" alt="img">
                                        </div>

                                        <div class="row pt-5">
                                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                                <div class="activitytext">
                                                    <h5>Activity</h5>
                                                    <img src="images/chart.png" class="img-fluid" alt="img">

                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                                <div class="activitytext">
                                                    <h5>Stats</h5>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                                        <div class="sessionbox">
                                                            <div class="sessionlist">
                                                                <span><i class="fa-regular fa-rocket"></i></span>
                                                                <h5>Session</h5>
                                                                <h4>45:56</h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                                        <div class="sessionbox">
                                                            <div class="sessionlist">
                                                                <span><i class="fa-regular fa-user"></i></span>
                                                                <h5>Followers</h5>
                                                                <h4>8000</h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                                        <div class="sessionbox">
                                                            <div class="sessionlist">
                                                                <span><i class="fa-regular fa-rocket"></i></span>
                                                                <h5>Session</h5>
                                                                <h4>45:56</h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                                        <div class="sessionbox">
                                                            <div class="sessionlist">
                                                                <span><i class="fa-regular fa-user"></i></span>
                                                                <h5>Followers</h5>
                                                                <h4>8000</h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                                        <div class="sessionbox">
                                                            <div class="sessionlist">
                                                                <span><i class="fa-regular fa-rocket"></i></span>
                                                                <h5>Session</h5>
                                                                <h4>45:56</h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                                        <div class="sessionbox">
                                                            <div class="sessionlist">
                                                                <span><i class="fa-regular fa-user"></i></span>
                                                                <h5>Followers</h5>
                                                                <h4>8000</h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 col-xxl-3">
                                        <div class="chatlistnew">
                                            <a href="#">Live Chat</a>
                                            <a href="#"><i class="fa-solid fa-eye"></i> 46,933.00</a>
                                        </div>
                                        <div class="chatpeoplelisting">
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
                                            <div class="trenindlist chatpeoplebox">
                                                <img src="images/trending_2.png" class="img-fluid" alt="img">
                                                <h5>John Smith - 3 min ago</h5>
                                                <p>Amazing voice!</p>
                                            </div>
                                            <div class="trenindlist chatpeoplebox">
                                                <img src="images/trending_3.png" class="img-fluid" alt="img">
                                                <h5>John Smith - 3 min ago</h5>
                                                <p>Amazing voice!</p>
                                            </div>
                                            <div class="trenindlist chatpeoplebox">
                                                <img src="images/trending_4.png" class="img-fluid" alt="img">
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
                                                <img src="images/trending_3.png" class="img-fluid" alt="img">
                                                <h5>John Smith - 3 min ago</h5>
                                                <p>Amazing voice!</p>
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
                                            <a href="#" class="creators_img"><img src="images/progress.png" class="img-fluid" alt="img"></a>


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
                                            <a href="#" class="creators_img1"><img src="images/chat.png" class="img-fluid" alt="img"></a>


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



                        <div class="wigetfunction">
                            <ul>
                                <li><a href="#" id="colorPickerIcon"><i class="fa-regular fa-palette"></i></a></li>
                                <li><a href="#"><i class="fa-solid fa-rotate-left"></i></a></li>
                                <li><a href="#"><i class="fa-solid fa-rotate-right"></i></a></li>
                                <li><a href="#"><i class="fa-solid fa-file-lines"></i></a></li>
                                <li><a href="#"><i class="fa-regular fa-video"></i></a></li>
                            </ul>
                            <input type="color" id="colorPicker">
                        </div>





                        <script>
                            // Get the icon and color picker elements
                            const colorPickerIcon = document.getElementById('colorPickerIcon');
                            const colorPicker = document.getElementById('colorPicker');

                            // Add a click event listener to the icon
                            colorPickerIcon.addEventListener('click', function(event) {
                                event.preventDefault(); // Prevent the default link behavior
                                colorPicker.click(); // Trigger the color picker
                            });

                            // Optional: Add a change event listener to the color picker to do something with the selected color
                            colorPicker.addEventListener('input', function() {
                                console.log('Selected color:', colorPicker.value);
                                // You can also apply the selected color to some element, for example:
                                // document.body.style.backgroundColor = colorPicker.value;
                            });
                        </script>


</main>

<?php
include 'includes/footer.php';
?>