<!DOCTYPE html>
<html>

<head>
    <title>Home</title>
    <meta charset="UTF-8">
    <meta name="keywords" content="HTML, CSS, JavaScript">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link rel="icon" href="images/favicon.png" type="image/png" sizes="">
    <link href="css/custom.css" rel="stylesheet" type="text/css">
    <link href="https://site-assets.fontawesome.com/releases/v6.0.0/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/animate.css/3.2.3/animate.min.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
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
    </style>
</head>

<body>
    <div class="topbar">
        <div class="container-fluid">

            <div class="row">

                <div class="col-12 col-sm-12 col-md-1 col-lg-1 col-xl-1 col-xxl-1">
                    <div class="sidebar">
                        <div class="topimg">
                            <img src="images/fav.png" class="img-fluid" alt="img">
                        </div>
                        <button class="btn buttonlist" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">


                            <div class="dashboardlist">
                                <img src="images/dashboard.png" class="img-fluid">

                            </div>
                        </button>
                        <div class="dasboardlistbox">
                            <ul>
                                <li>
                                    <a href="#">
                                        <img src="images/vector.png" class="img-fluid" alt="img">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="images/analytics.png" class="img-fluid" alt="img">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="images/sales.png" class="img-fluid" alt="img">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="images/traffic icon.png" class="img-fluid" alt="img">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="images/phone.png" class="img-fluid" alt="img">
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="editlist">
                            <a href="#"><i class="fa-solid fa-pencil"></i></a>
                        </div>
                    </div>

                </div>
                <div class="col-12 col-sm-12 col-md-7 col-lg-7 col-xl-7 col-xxl-7">
                    <div class="row align-items-center">
                        <div class="col-12 col-sm-12 col-md-8 col-lg-8 col-xl-8 col-xxl-8">
                            <div class="formlist">
                                <form>
                                    <div class="formlist">
                                        <input type="text" placeholder="Look for a stream, category, creator or keyword" />
                                        <i class="fa-solid fa-magnifying-glass"></i>
                                        <button>Discover <img src="images/star.png" class="img-fluid discover_img"></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                            <div class="startstreamingbtn">
                                <a href="#"><span class="streamingicon"><i class="fa-solid fa-video"></i></span> Start
                                    Streaming</a>
                            </div>
                        </div>
                    </div>



                </div>

                <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                    <div class="websiteprofile">
                        <ul>
                            <li class="dropdown"><a href="#" class="" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa-solid fa-gear"></i>
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">Register</a></li>
                                    <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal1">Login</a></li>

                                </ul>
                            </li>
                            <li><a href="#">
                                    <i class="fa-sharp fa-regular fa-comments"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="images/profile.png" class="imgfluid" alt="profileimg">
                                </a>
                            </li>
                            <li>
                                <p>Good to see you back</p>
                                <h6>MDX Agency</h6>
                            </li>
                        </ul>
                    </div>
                    <div class="row rightsidebar">
                        <div class="col-12 col-sm-12 col-md-10 col-lg-10 col-xl-10 col-xxl-10"></div>
                        <div class="col-12 col-sm-12 col-md-2 col-lg-2 col-xl-2 col-xxl-2">
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
        <div class="acountsetingbox pt-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                      
                    <div class="creatorbox">
                      <div class="row">
                        <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 col-xxl-3">
                           <div class="creatorsidedashboard">
                              <div class="creatorboxsmall">
                                <img src="images/dashboardimg.png"  class="img-fluid" alt="img">
                                <a href="#" class="livechat">Live Now</a>
                                <h4>Anderson Paak</h4> 
                                <p>9.2M Subscriber</p> 
                              </div>

                              <div class="creatormiddlebox">
                                <h6>Title <span><i class="fa-light fa-pencil"></i></span></h6> 
                                <h5>Anderson Paak & The Free Nationals: NPR Music at your TinyDesk 2024</h5>
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
                                      <img src="images/chart.png"  class="img-fluid" alt="img">
                                        
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
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <div class="livestreaminmgmodal">
 <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
   
      <div class="modal-body">
      <div class="creatorbox">
                      <div class="row">
                        <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 col-xxl-3">
                           <div class="creatorsidedashboard">
                              <div class="creatorboxsmall">
                                <img src="images/dashboardimg.png" class="img-fluid" alt="img">
                                <a href="#" class="livechat">Live Now</a>
                                <h4>Anderson Paak</h4> 
                                <p>9.2M Subscriber</p> 
                              </div>

                              <div class="creatormiddlebox">
                                <h6>Title <span><i class="fa-light fa-pencil"></i></span></h6> 
                                <h5>Anderson Paak &amp; The Free Nationals: NPR Music at your TinyDesk 2024</h5>
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
     
    </div>
    <div class="modalfooter">
      <div class="row align-items-center">
        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
          <div class="templatelist">
           <ul>
            <li><h3>My Favorite Theme V1</h3></li>
            <li><a href="#">Edit</a></li>
           </ul>
          </div> 
        </div>
        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
          <div class="templatelist1">
           <ul>
            <li><a href="#">Cancel</a></li>
            <li><a href="#" class="usetemplate">Use this template <i class="fa-regular fa-plus"></i></a></li>
           </ul>
          </div> 
        </div>
      </div>
    </div>
  </div>
</div>
</div>
    <div class="rigisterlist">
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel"><img src="images/fav.png" class="img-fluid" alt="img"></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form autocomplete="off">
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="floatingInput" placeholder="">
                                        <label for="floatingInput">Username</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="password" class="form-control" id="floatingInput" placeholder="">
                                        <label for="floatingInput">Password</label>
                                    </div>
                                    <div class="form-group mb-3">

                                        <label>Date of birth</label>
                                        <div class="row">
                                            <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                                <input type="month" class="form-control" placeholder="Month">
                                            </div>
                                            <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                                <input type="number" class="form-control" placeholder="Day" min="1" max="31">
                                            </div>
                                            <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                                <input type="number" class="form-control" placeholder="Year" min="1900" max="2100">
                                            </div>
                                        </div>

                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="email" class="form-control" id="floatingInput" placeholder="">
                                        <label for="floatingInput">Email address</label>
                                    </div>
                                    <p class="accounttext">You’ll need to verify that you own this email account</p>
                                    <br>
                                    <p class="clcikingpolicy">By clicking Sign Up, you are agreeing to Limitless <a href="#">Terms of Service</a> and are acknowledging our <a href="#">Privacy Notice</a> applies.</p>
                                    <div class="formgroup">
                                        <button type="button" class="btn">Sign Up</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>


    <div class="rigisterlist login">
        <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel"><img src="images/fav.png" class="img-fluid" alt="img"></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form autocomplete="off">
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="floatingInput" placeholder="">
                                        <label for="floatingInput">Username - Email</label>
                                    </div>
                                    <div class="form-floating mb-1">
                                        <input type="password" class="form-control" id="floatingInput" placeholder="">
                                        <label for="floatingInput">Password</label>
                                    </div>


                                    <p class="clcikingpolicy"> <a href="#">Trouble lto logging in?</a></p>
                                    <div class="formgroup">
                                        <button type="button" class="btn">Login</button><br>
                                        <p class="clcikingpolicy loginpolicy">Don’t have an account? <a href="#">Sign up</a></p>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>


    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header">

            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div class="topimg">
                <img src="images/fav.png" class="img-fluid" alt="img">
            </div>
            <ul>
                <li>
                    <a href="index.php">
                        <i class="fa-solid fa-house"></i>
                        Dashboard
                    </a>
                </li>
                <li>
                    <a href="account.php">
                        <i class="fa-solid fa-gear"></i>
                        Account Setting
                    </a>
                </li>
                <li>
                    <a href="profile.php">
                        <i class="fa-solid fa-user"></i>
                        Profile
                    </a>
                </li>
                <li>
        <a href="user-view.php">
        <i class="fa-solid fa-user"></i>
         User View
        </a>
      </li>
            </ul>

        </div>
    </div>



    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/tilt.js@1.1.21/dest/tilt.jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/parallax/3.1.0/parallax.min.js"></script>
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.2/TweenMax.min.js"></script>-->
    <!-- <script src="js/gsap.js"></script> -->
    <!-- <script src="js/ScrollSmoother.js"></script> -->
    <!-- <script src="js/ScrollToPlugin.min.js"></script> -->
    <!-- <script src="js/ScrollTrigger.min.js"></script> -->
    <!--<script src="js/CustomEase.min.js"></script>-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
    <script src="js/lazyload.min.js"></script>
    <script src="js/custom.js"></script>



    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const rightSidebar = document.getElementById("rightsidebar");
            const trendingList = document.getElementById("trendinglist");

            rightSidebar.addEventListener("click", function() {
                trendingList.classList.add("visible");
                trendingList.classList.remove("hidden");
                rightSidebar.style.display = "none";
            });

            trendingList.addEventListener("click", function() {
                trendingList.classList.add("hidden");
                trendingList.classList.remove("visible");
                setTimeout(() => {
                    rightSidebar.style.display = "block";
                }, 300); // Match this duration with the CSS transition duration
            });
        });
    </script>
    <script>
        function toggleFixedSidebar() {
            var sidebar = document.querySelector('.sidebar');
            if (window.scrollY > 200) {
                sidebar.classList.add('fixed');
            } else {
                sidebar.classList.remove('fixed');
            }
        }

        // Add event listener to window scroll
        window.addEventListener('scroll', toggleFixedSidebar);
    </script>
    <script>
        $(".accountmainbox ul li a").click(function() {
            var target = $(this).attr("data-bs-target");
            $(".accountmainbox ul li a").removeClass("active");
            $(this).addClass('active');
            $("#" + target).fadeIn("slow").siblings(".accountsettingbox").hide();
            return false;
        })
        $(".onlinelist ul li a").click(function() {
            var a = $(this).attr("data-target");
            $(".onlinelist ul li a").removeClass("active");
            $(this).addClass("active");
            $("#" + a).fadeIn("slow").siblings(".tabbox").hide();
            return false;
        });
    </script>

    <script>
        $('#clips').owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 1
                }
            }
        })
        $('#gallery').owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 1
                }
            }
        })
        $('#streams').owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 1
                }
            }
        })
    </script>
</body>

</html>