<?php
include 'includes/header.php';
?>

<style>
    .dasboardlistbox.rightsidelist {
        margin: 0px 0;
    }

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
                                <div class="col-12 col-sm-12 col-md-7 col-lg-7 col-xl-7 col-xxl-7">
                                    <div class="calenderbox1">
                                        <div class="row">
                                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                                <div class="calenderbox">
                                                    <h3>Schedule Tasks</h3>
                                                    <div id="datepicker1"></div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                                <div class="daylist">
                                                    <ul>
                                                        <li><a href="#" class="dayactive" day-target="dabox1">Day</a></li>
                                                        <li><a href="#" day-target="dabox2">Week</a></li>
                                                        <li><a href="#" day-target="dabox3">Month</a></li>
                                                        <li><a href="#" day-target="dabox4">Year</a></li>
                                                    </ul>
                                                </div>
                                                <div class="daycontent">
                                                    <div class="daybox" id="dabox1" style="display: block;">
                                                        <form>
                                                            <div class="titlebox1">
                                                                <label>Title</label>
                                                                <input type="text" placeholder="" class="title">
                                                            </div>
                                                            <div class="titlebox1">
                                                                <label class="content">Content</label>
                                                                <label class="subtask"><input type="checkbox">Add subtask</label>
                                                                <textarea></textarea>
                                                            </div>
                                                            <div class="elementslist">
                                                                <ul>
                                                                    <li><a href="#"><i class="fa-solid fa-paperclip"></i>Elements</a></li>
                                                                    <li><a href="#"><i class="fa-solid fa-calendar-clock"></i>Date</a></li>
                                                                    <li><a href="#"><i class="fa-solid fa-user-group"></i>Assign to</a></li>
                                                                </ul>
                                                                <button>Save</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <div class="daybox" id="dabox2">
                                                        <form>
                                                            <div class="titlebox1">
                                                                <label>Title</label>
                                                                <input type="text" placeholder="" class="title">
                                                            </div>
                                                            <div class="titlebox1">
                                                                <label class="content">Content</label>
                                                                <label class="subtask"><input type="checkbox">Add subtask</label>
                                                                <textarea></textarea>
                                                            </div>
                                                            <div class="elementslist">
                                                                <ul>
                                                                    <li><a href="#"><i class="fa-solid fa-paperclip"></i>Elements</a></li>
                                                                    <li><a href="#"><i class="fa-solid fa-calendar-clock"></i>Date</a></li>
                                                                    <li><a href="#"><i class="fa-solid fa-user-group"></i>Assign to</a></li>
                                                                </ul>
                                                                <button>Save</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <div class="daybox" id="dabox3">
                                                        <form>
                                                            <div class="titlebox1">
                                                                <label>Title</label>
                                                                <input type="text" placeholder="" class="title">
                                                            </div>
                                                            <div class="titlebox1">
                                                                <label class="content">Content</label>
                                                                <label class="subtask"><input type="checkbox">Add subtask</label>
                                                                <textarea></textarea>
                                                            </div>
                                                            <div class="elementslist">
                                                                <ul>
                                                                    <li><a href="#"><i class="fa-solid fa-paperclip"></i>Elements</a></li>
                                                                    <li><a href="#"><i class="fa-solid fa-calendar-clock"></i>Date</a></li>
                                                                    <li><a href="#"><i class="fa-solid fa-user-group"></i>Assign to</a></li>
                                                                </ul>
                                                                <button>Save</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <div class="daybox" id="dabox4">
                                                        <form>
                                                            <div class="titlebox1">
                                                                <label>Title</label>
                                                                <input type="text" placeholder="" class="title">
                                                            </div>
                                                            <div class="titlebox1">
                                                                <label class="content">Content</label>
                                                                <label class="subtask"><input type="checkbox">Add subtask</label>
                                                                <textarea></textarea>
                                                            </div>
                                                            <div class="elementslist">
                                                                <ul>
                                                                    <li><a href="#"><i class="fa-solid fa-paperclip"></i>Elements</a></li>
                                                                    <li><a href="#"><i class="fa-solid fa-calendar-clock"></i>Date</a></li>
                                                                    <li><a href="#"><i class="fa-solid fa-user-group"></i>Assign to</a></li>
                                                                </ul>
                                                                <button>Save</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="calenderbox1">
                                        <h3>Todays Tasks</h3>
                                        <div class="row">
                                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                                <div class="taskbox">
                                                    <div class="taskbody">
                                                        <h4>Lorem Ipsum</h4>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                                                        <div class="tasklsit">
                                                            <ul>
                                                                <li><a href="#"></a></li>
                                                                <li><a href="#">+3</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="taskbottom">
                                                            <ul>
                                                                <li><a href="#"><i class="fa-regular fa-paperclip"></i>2</a></li>
                                                                <li><a href="#"><i class="fa-regular fa-square-check"></i>4/16</a></li>
                                                            </ul>
                                                            <a href="#" class="done"><i class="fa-regular fa-clock"></i>Done</a>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                                <div class="taskbox">
                                                    <div class="taskbody">
                                                        <h4>Lorem Ipsum</h4>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                                                        <div class="tasklsit">
                                                            <ul>
                                                                <li><a href="#"></a></li>
                                                                <li><a href="#">+3</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="taskbottom">
                                                            <ul>
                                                                <li><a href="#"><i class="fa-regular fa-paperclip"></i>2</a></li>
                                                                <li><a href="#"><i class="fa-regular fa-square-check"></i>4/16</a></li>
                                                            </ul>
                                                            <a href="#" class="done"><i class="fa-regular fa-clock"></i>Done</a>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-5 col-lg-5 col-xl-5 col-xxl-5">
                                    <div class="calenderboxlistright">
                                        <div class="calenderboxlistrightlist">
                                            <p>13 - 20 March 2024</p>
                                            <div class="daylist1">
                                                <ul>
                                                    <li><a href="#" class="dayactive1" day-target="daybox1">Day</a></li>
                                                    <li><a href="#" day-target="daybox6">Week</a></li>
                                                    <li><a href="#" day-target="daybox7">Month</a></li>
                                                    <li><a href="#" day-target="daybox8">Year</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="calenderboxlistrightlistbody">
                                            <div class="calenderboxlistrightlistlisting">
                                                <h5>AM06:00 </h5>
                                                <div class="morning6">
                                                    <h5><span>Morining Routine</span> 06:00 AM</h5>
                                                </div>
                                            </div>
                                            <div class="calenderboxlistrightlistlisting pt-5">
                                                <h5>AM07:00 </h5>
                                                <div class="morning7">
                                                    <h5><span>Weekly Planning </span> 07:00 AM</h5>
                                                </div>
                                            </div>
                                            <div class="calenderboxlistrightlistlisting pt-5">
                                                <h5>AM08:00 </h5>
                                                <div class="morning8">
                                                    <h5><span>Business Calls </span> 08:00 AM</h5>
                                                    <img src="images/circle.png" class="img-fluid">
                                                </div>
                                            </div>
                                            <div class="calenderboxlistrightlistlisting pt-5">
                                                <h5>AM09:00 </h5>
                                            </div>
                                            <div class="calenderboxlistrightlistlisting pt-5">
                                                <h5>AM010:00 </h5>
                                            </div>
                                            <div class="calenderboxlistrightlistlisting pt-5">
                                                <h5>AM011:00 </h5>
                                                <div class="morning11">
                                                    <h5><span>Marketing Team Meeting</span> 10:30 AM</h5>
                                                </div>
                                            </div>
                                            <div class="calenderboxlistrightlistlisting pt-5">
                                                <h5>AM012:00 </h5>
                                                <div class="morning12">
                                                    <h5>Creating new design layouts</h5>
                                                    <p>inspiration research 10:45 AM</p>
                                                </div>
                                            </div>
                                            <div class="calenderboxlistrightlistlisting pt-5">
                                                <h5>AM01:00 </h5>
                                                <div class="morning1">
                                                    <h5><span>Design Meeting </span> 12:50 AM</h5>

                                                </div>
                                            </div>
                                            <div class="calenderboxlistrightlistlisting pt-5">
                                                <h5>AM2:00 </h5>
                                            </div>
                                            <div class="calenderboxlistrightlistlisting pt-5">
                                                <h5>AM3:00 </h5>
                                            </div>
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