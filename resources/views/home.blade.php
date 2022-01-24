@extends('layouts.home')
<header style="background-color: #fff;">
    <x-navbar />
    <x-carousel />
</header>

<main class="mt-5">
    <div class="container">
        <!--Section: Content-->
        <section id="section">
            <div class="row ">
                <div class="col-md-6 gx-5 mb-3 mt-3">
                    <div class="bg-image hover-overlay ripple shadow-2-strong rounded-5" data-mdb-ripple-color="light">
                        <img src="https://static3.cbrimages.com/wordpress/wp-content/uploads/2020/12/infinite-frontier-header.jpg" class="img-fluid" />
                        <p class="">Foto : Infinite Frontier</p>
                        <a href="#!">
                            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                        </a>
                    </div>
                </div>

                <div class="col-md-6 gx-5 mb-3 mt-3">
                    <h4><strong>Cara membaca komik</strong></h4>
                    <p class="text-muted mb-3">
                        Tidak perlu membaca semua komik yang terbit dari tahun 1937 sampai sekarang untuk mengerti kontinuitas DC Universe. Cukup membaca dari karakter yang disukai dan ikuti beberapa event terbaru.
                    </p>
                    <p><strong>Apa itu Event di komik?</strong></p>
                    <p class="text-muted">
                        Cerita skala besar yang menuntun arah jalan kontinuitas karakter dan universe. Contohnya seperti event Crisis On Infinite Earths (1986) yang mengakibatkan rebootnya DC Universe.
                    </p>
                </div>
            </div>
        </section>
        <!--Section: Content-->

        <hr class="my-5" />

        <!--Section: Content-->
        <section class="text-center">
            <h4 class="mb-5"><strong>Era Dunia Perkomikan</strong></h4>

            <div class="row">
                <div class="col-lg-4 col-md-12 mb-4">
                    <div class="card">
                        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                            <img src="https://i.ytimg.com/vi/aV6c8arunyI/maxresdefault.jpg" class="img-fluid" />
                            <a href="#!">
                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                            </a>
                        </div>
                        <div class="card-body size">
                            <h5 class="card-title">Golden Age (1938-1956)</h5>
                            <p class="card-text">
                                Komik-komik yang terbit di tahun ini disebut dengan Golden Age. Contohnya Action Comics #1 kemunculan Superman pertama kali, Detective Comics #27 kemunculan Batman pertama kali.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card">
                        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                            <img src="https://static0.cbrimages.com/wordpress/wp-content/uploads/2021/03/DC-Silver-Age-Feature-Image.jpg?q=50&fit=crop&w=960&h=500&dpr=1.5" class="img-fluid" />
                            <a href="#!">
                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                            </a>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Silver Age (1956-1970)</h5>
                            <p class="card-text">
                                Contoh komik yang terbit di era ini ialah kemunculan The Flash (Barry Allen) di Showcase #4 dan tim Justice League of America di The Brave and The Bold #28.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card">
                        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                            <img src="https://13thdimension.com/wp-content/uploads/2020/09/Screen-Shot-2020-09-12-at-6.15.53-PM-copy.png" class="img-fluid" />
                            <a href="#!">
                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                            </a>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Bronze Age (1970-1986)</h5>
                            <p class="card-text">
                                Contoh komik yang terbit di era ini ialah Jack Kirby's Fourth World di New Gods #1 bercerita tentang dewa dewa seperti Darkseid, Steppenwolf, Orion, dan Mister Miracle.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card">
                    <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                        <img src="https://static3.cbrimages.com/wordpress/wp-content/uploads/2020/12/infinite-frontier-header.jpg" class="img-fluid" />
                        <a href="#!">
                            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                        </a>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Modern Age (1986-sekarang)</h5>
                        <p class="card-text">
                            Di era inilah kontinuitas universe sudah tersusun rapi dan saat yang tepat untuk para pembaca baru mulai memasuki dunia komik atau pembaca lama yang bosan dengan komik era sebelumnya. Di era ini DC mereboot kontinuitasnya agar mudah dimengerti oleh pembaca baru.
                        </p>
                    </div>
                </div>
            </div>
    </div>
    </section>
    </div>
</main>

<!--End Main layout-->
<hr class="m-0" />

<x-footer />