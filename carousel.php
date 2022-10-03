    <!--carousel section code-->
    <div class="container-fluid  px-lg-0 mb-4 ">
        <div class="swiper swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="images/carouseln/1.png" class="w-100 d-block carousel-img" >
                </div>
                <div class="swiper-slide">
                    <img src="images/carouseln/2.png" class="w-100 d-block carousel-img">
                </div>
                <div class="swiper-slide">
                    <img src="images/carouseln/3.png" class="w-100 d-block carousel-img">
                </div>
                <div class="swiper-slide">
                    <img src="images/carouseln/4.png"  class="w-100 d-block carousel-img">
                </div>
                <div class="swiper-slide">
                    <img src="images/carouseln/5.png" class="w-100 d-block carousel-img">
                </div>
                <div class="swiper-slide">
                    <img src="images/carouseln/6.png" class="w-100 d-block carousel-img">
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script>
        //javascript code for carousel swiper
        var swiper=new Swiper(".swiper-container",{
            spaceBetween:30,
            effect:"fade",
            loop:true,
            autoplay:{
                delay:3500,
                disableOnInteraction:false,

            }
        });
    </script>