<style>
    @import url("http://fonts.cdnfonts.com/css/gotham");

    /* Font */
    .gotham {
        font-family: "Gotham Ultra", sans-serif;
        font-weight: 700px;
    }

    .gotham-child {
        font-family: "Gotham Book", sans-serif;
    }

    /* Header Styling */
    /* Carousel styling */
    #introCarousel,
    .carousel-inner,
    .carousel-item,
    .carousel-item.active {
        height: 100vh;

    }

    .carousel-item:nth-child(1) {
        background-image: url("https://images.hdqwalls.com/wallpapers/dc-universe-4k-z9.jpg");
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center center;

    }

    .carousel-item:nth-child(2) {
        background-image: url("https://www.teahub.io/photos/full/174-1745061_justice-society-of-america-alex-ross.jpg");
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center center;
    }

    .carousel-item:nth-child(3) {
        background-image: url("https://static3.cbrimages.com/wordpress/wp-content/uploads/2020/12/infinite-frontier-header.jpg");
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center center;
    }
</style>
<script src="https://cdn.tailwindcss.com"></script>
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="mask" style="background-color: rgba(0, 0, 0, 0.6);">
                <div class="d-flex justify-content-center align-items-center h-100">
                    <div class="text-white text-center">
                        <h1 class="mb-3 gotham text-5xl">DC MULTIVERSE</h1>
                        <h5 class="mb-4 gotham-chlid text-2xl">The Ultimate Reading Order</h5>
                        <a class="btn btn-outline-light btn-lg m-2 " href="#section" role="button" rel="nofollow">START</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <div class="mask" style="background-color: rgba(0, 0, 0, 0.3);">
                <div class="d-flex justify-content-center align-items-center h-100">
                    <div class="text-white text-center">
                        <h2 class="text-2xl">Justice Society of America</h2>
                        <p class="text-2xl">The first supehero team in the World</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-item">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>

</div>