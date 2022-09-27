    <?php include 'header.php';?>
    <?php include 'navbar.php';?>

    <!-- about-us page -->
    <div class="my-5 px-4">
        <h2 class="fw-bold h-font text-center">ABOUT US</h2>
        <div class="h-line bg-dark"></div>
        <p class="text-center mt-3">
            SunView Hotel is located in the city of Galle, a UNESCO World Heritage Site.
            we offers rooms with cable TV, ayurved spa,resturant,surfing,an outdoor pool,<br>free parking.
            Free Wi-Fi access is available at all areas.Through this hotel and those facilities 
            we hope to give amazing eperience to our guests.
        </p>
    </div>

    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-lg-6 col-md-5 mb-4 order-lg-1 order-md-1 order-2">
                <h3 class="mb-3">Kaveesha Deshan</h3>
                <p>
                    As a manager and co-founder of our hotel I always try give best experience to our guests with my talented staff.
            </div>
            <div class="col-lg-5 col-md-5 mb-4 order-lg-2 order-md-2 order-1">
                <img src="images/about/manager.jpg" class="w-100  wowload fadeInUp">
            </div>
        </div> 
    </div>

    <div class="container mt-5 wowload fadeInUp">
        <div class="row">
            <div class="col-lg-3 col-md-6 mb-4 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                    <img src="images/about/customers.svg" width="70px">
                    <h4 class="mt-3">1200+ Customers</h4>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                    <img src="images/about/hotel.svg" width="70px">
                    <h4 class="mt-3">100+ ROOMS</h4>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 px-4 ">
                <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                    <img src="images/about/rating.svg" width="70px">
                    <h4 class="mt-3">150+ REVIEWS</h4>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 px-4 ">
                <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                    <img src="images/about/staff.svg" width="70px">
                    <h4 class="mt-3">200+ STAFF</h4>
                </div>
            </div>
        </div>
    </div>
       <!-- management team section -->
    <h3 class="my-5 fw-bold h-font text-center">MANAGEMENT TEAM</h3>


    <div class="container px-4  wowload fadeInUp">
        <div class="swiper mySwiper">
            <div class="swiper-wrapper mb-5">
                <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                    <img src="images/about/w1.jpg" class="w-100">
                    <h5 class="mt-2">Kaveesha Shahini</h5>
                </div>
                <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                    <img src="images/about/w2.jpg" class="w-100">
                    <h5 class="mt-2">Sharmila Nithya</h5>
                </div>
                <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                    <img src="images/about/man.jpg" class="w-100">
                    <h5 class="mt-2">Priyanjith Bandara</h5>
                </div>
                <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                    <img src="images/about/w3.jpg" class="w-100">
                    <h5 class="mt-2">Deepthi Saduni</h5>
                </div>
                <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                    <img src="images/about/.jpg" class="w-100">
                    <h5 class="mt-2">Dilan Abenayaka</h5>
                </div>
                <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                    <img src="images/about/women.jpg" class="w-100">
                    <h5 class="mt-2">Dahami Divyanjali</h5>
                </div>
                
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>


    <!-- footer php file -->
    <?php require('footer.php');?>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script>
        var swiper=new Swiper(".mySwiper",{
            slidesPerView:4,
            spaceBetween:40,
            pagination:{
                el:".swiper-pagination",
            },
            breakpoints:{
                320:{
                    slidesPerView:1,
                },
                640:{
                    slidesPerView:1,
                },
                768:{
                    slidesPerView:3,
                },
                1024:{
                    slidesPerView:3,
                },
            }
        })
    </script>



