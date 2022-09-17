<?php
    require_once('db.php');
    include 'header.php';
?>

    <!-- banner -->
    <div class="banner">
        <img src="images/banner/banner-pool-f15.jpg" class="img-responsive" alt="slide">
        <div class="welcome-message">
            <div class="wrap-info">
                <div class="information">
                    <h1  class="animated fadeInDown">Hotel SunView</h1>
                    <p class="animated fadeInUp">Most luxurious hotel in Sri Lanka with excellent customer service.</p>
                </div>
                <a href="#information" class="arrow-nav scroll wowload fadeInDownBig"><i class="fa fa-angle-down"></i></a>
            </div>
        </div>
    </div>
    <!-- banner-->


    <!-- reservation-information -->
    <div id="information" class="spacer reserve-info ">
        <div class="container">
            <div class="row">
                <div class="col-sm-7 col-md-8">
                    <div class="embed-responsive embed-responsive-16by9 wowload fadeInLeft"><iframe  class="embed-responsive-item" src="https://www.youtube.com/embed/A-yYTkfrHR0" width="100%" height="400" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe></div>
                </div>
                <div class="col-sm-5 col-md-4">
                    <h3>Reservation</h3>
                    <form role="form" class="wowload fadeInRight" method="post">
                        <div class="form-group">
                            <input type="text" name="name" class="form-control"  placeholder="Name">
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" class="form-control"  placeholder="Email">
                        </div>
                        <div class="form-group">
                            <input type="Phone" name="phone" class="form-control"  placeholder="Phone">
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-xs-6">
                                    <select class="form-control" name="no_rooms">
                                        <option value="no">No. of Rooms</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                                <div class="col-xs-6">
                                    <select class="form-control" name="no_adults">
                                        <option value="no">No. of Adults</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div></div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-xs-4">
                                    <select class="form-control col-sm-2" name="day" id="day">
                                        <option value="no">Day</option>
                                        <option value="01">1</option>
                                        <option value="02">2</option>
                                        <option value="03">3</option>
                                        <option value="04">4</option>
                                        <option value="05">5</option>
                                        <option value="06">6</option>
                                        <option value="07">7</option>
                                        <option value="08">8</option>
                                        <option value="09">9</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                        <option value="13">13</option>
                                        <option value="14">14</option>
                                        <option value="15">15</option>
                                        <option value="16">16</option>
                                        <option value="17">17</option>
                                        <option value="18">18</option>
                                        <option value="19">19</option>
                                        <option value="20">20</option>
                                        <option value="21">21</option>
                                        <option value="22">22</option>
                                        <option value="23">23</option>
                                        <option value="24">24</option>
                                        <option value="25">25</option>
                                        <option value="26">26</option>
                                        <option value="27">27</option>
                                        <option value="28">28</option>
                                        <option value="29">29</option>
                                        <option value="30">30</option>
                                        <option value="31">31</option>

                                    </select>
                                </div>
                                <div class="col-xs-4">
                                    <select class="form-control col-sm-2" name="month" id="month">
                                        <option value="no">Month</option>
                                        <option value="01">January</option>
                                        <option value="02">February</option>
                                        <option value="03">March</option>
                                        <option value="04">April</option>
                                        <option value="05">May</option>
                                        <option value="06">June</option>
                                        <option value="07">July</option>
                                        <option value="08">August</option>
                                        <option value="09">September</option>
                                        <option value="10">October</option>
                                        <option value="11">November</option>
                                        <option value="12">December</option>
                                    </select>
                                </div>
                                <div class="col-xs-4">
                                    <select class="form-control" name="year">
                                        <option value="no">Year</option>
                                        <option value="2017">2017</option>
                                        <option value="2018">2018</option>
                                        <option value="2019">2019</option>
                                        <option value="2020">2020</option>
                                        <option value="2021">2021</option>
                                        <option value="2022">2022</option>
                                        <option value="2023">2023</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="message" placeholder="Message" rows="4"></textarea>
                        </div>
                        <input type="submit" class="btn btn-primary" value="Request" name="submit">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- reservation-information -->



    <!-- services -->
    <div class="spacer services wowload fadeInUp">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <!-- RoomCarousel -->
                    <div id="RoomCarousel" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="item active"><img src="images/carousel/r1.jpg" class="img-responsive" alt="slide"></div>
                            <div class="item  height-full"><img src="images/carousel/r2.jpg" class="img-responsive" alt="slide"></div>
                            <div class="item  height-full"><img src="images/carousel/r3.jpg" class="img-responsive" alt="slide"></div>
                        </div>
                        <!-- Controls -->
                        <a class="left carousel-control" href="#RoomCarousel" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                        <a class="right carousel-control" href="#RoomCarousel" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
                    </div>
                    <!-- RoomCarousel-->
                    <div class="caption">Rooms<a href="#" class="pull-right"><i class="fa fa-edit"></i></a></div>
                </div>


                <div class="col-sm-4">
                    <!-- RoomCarousel -->
                    <div id="TourCarousel" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="item active"><img src="images/carousel/p1.jpg" class="img-responsive" alt="slide"></div>
                            <div class="item  height-full"><img src="images/carousel/p2.jpg" class="img-responsive" alt="slide"></div>
                            <div class="item  height-full"><img src="images/carousel/p3.jpg"  class="img-responsive" alt="slide"></div>
                        </div>
                        <!-- Controls -->
                        <a class="left carousel-control" href="#TourCarousel" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                        <a class="right carousel-control" href="#TourCarousel" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
                    </div>
                    <!-- RoomCarousel-->
                    <div class="caption">Places To Visit<a href="#" class="pull-right"><i class="fa fa-edit"></i></a></div>
                </div>


                <div class="col-sm-4">
                    <!-- RoomCarousel -->
                    <div id="FoodCarousel" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="item active"><img src="images/carousel/f1.jpg" class="img-responsive" alt="slide"></div>
                            <div class="item  height-full"><img src="images/carousel/f2.jpg"  class="img-responsive" alt="slide"></div>
                            <div class="item  height-full"><img src="images/carousel/f3.jpg"  class="img-responsive" alt="slide"></div>
                        </div>
                        <!-- Controls -->
                        <a class="left carousel-control" href="#FoodCarousel" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                        <a class="right carousel-control" href="#FoodCarousel" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
                    </div>
                    <!-- RoomCarousel-->
                    <div class="caption">Food and Drinks<a href="#" class="pull-right"><i class="fa fa-edit"></i></a></div>
                </div>
            </div>
        </div>
    </div>
    <!-- services -->

<?php include 'footer.php';?>