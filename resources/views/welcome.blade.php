@section('page_title', "Home | QwikCare Business Listing")
@extends('layouts.app')
@section('content')
<main>
    <section class="hero_single version_4">
        <div class="wrapper">
            <livewire:search/>
        </div>
    </section>
    <!-- /hero_single -->
    <div class="bg_color_1">
        <div class="container margin_80_55">
            <div class="main_title_2">
                <span><em></em></span>
                <h2>Popular Categories</h2>
                <p>The popular categories are progressively below.</p>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <a href="" class="grid_item">
                        <figure>
                            <img src="./img/hotel_4.jpg" alt="">
                            <div class="info">
                                <small>0 Listings</small>
                                <h3>Nail Technicians</h3>
                            </div>
                        </figure>
                    </a>
                </div>
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>

    <div class="container-fluid margin_80_55">
        <div class="main_title_2">
            <span><em></em></span>
            <h2>Popular listings</h2>
            <p>The popular listings are progressively below.</p>
        </div>
        <div id="reccomended" class="owl-carousel owl-theme">
            <div class="item">
                <div class="strip grid">
                    <figure>
                        <a href="detail-restaurant" class="wish_bt"></a>
                        <a href="detail-restaurant"><img src="/img/location_1.jpg" class="img-fluid" alt="" width="400" height="266">
                            <div class="read_more"><span>Read more</span></div>
                        </a>
                        <small>Restaurant</small>
                    </figure>
                    <div class="wrapper">
                        <h3><a href="detail-restaurant">Da Alfredo</a></h3>
                        <p>Id placerat tacimates definitionem sea, prima quidam vim no. Duo nobis persecuti cu.</p>
                        <a class="address" href="https://www.google.com/maps/dir//Assistance+%E2%80%93+H%C3%B4pitaux+De+Paris,+3+Avenue+Victoria,+75004+Paris,+Francia/@48.8606548,2.3348734,14z/data=!4m15!1m6!3m5!1s0x47e66e1de36f4147:0xb6615b4092e0351f!2sAssistance+Publique+-+H%C3%B4pitaux+de+Paris+(AP-HP)+-+Si%C3%A8ge!8m2!3d48.8568376!4d2.3504305!4m7!1m0!1m5!1m1!1s0x47e67031f8c20147:0xa6a9af76b1e2d899!2m2!1d2.3504327!2d48.8568361">Get directions</a>
                    </div>
                    <ul>
                        <li><span class="loc_open">Now Open</span></li>
                        <li>
                            <div class="score"><span>Superb<em>350 Reviews</em></span><strong>8.9</strong></div>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- /item -->
            <div class="item">
                <div class="strip grid">
                    <figure>
                        <a href="detail-restaurant" class="wish_bt"></a>
                        <a href="detail-restaurant"><img src="img/location_2.jpg" class="img-fluid" alt="" width="400" height="266">
                            <div class="read_more"><span>Read more</span></div>
                        </a>
                        <small>Bar</small>
                    </figure>
                    <div class="wrapper">
                        <h3><a href="detail-restaurant">Notredam</a></h3>
                        <p>Id placerat tacimates definitionem sea, prima quidam vim no. Duo nobis persecuti cu.</p>
                        <a class="address" href="https://www.google.com/maps/dir//Assistance+%E2%80%93+H%C3%B4pitaux+De+Paris,+3+Avenue+Victoria,+75004+Paris,+Francia/@48.8606548,2.3348734,14z/data=!4m15!1m6!3m5!1s0x47e66e1de36f4147:0xb6615b4092e0351f!2sAssistance+Publique+-+H%C3%B4pitaux+de+Paris+(AP-HP)+-+Si%C3%A8ge!8m2!3d48.8568376!4d2.3504305!4m7!1m0!1m5!1m1!1s0x47e67031f8c20147:0xa6a9af76b1e2d899!2m2!1d2.3504327!2d48.8568361">Get directions</a>
                    </div>
                    <ul>
                        <li><span class="loc_closed">Now Closed</span></li>
                        <li>
                            <div class="score"><span>Good<em>350 Reviews</em></span><strong>7.0</strong></div>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- /item -->
            <div class="item">
                <div class="strip grid">
                    <figure>
                        <a href="detail-shop" class="wish_bt"></a>
                        <a href="detail-shop"><img src="img/location_3.jpg" class="img-fluid" alt="" width="400" height="266">
                            <div class="read_more"><span>Read more</span></div>
                        </a>
                        <small>Shop</small>
                    </figure>
                    <div class="wrapper">
                        <h3><a href="detail-shop">Camden Mark</a></h3>
                        <p>Id placerat tacimates definitionem sea, prima quidam vim no. Duo nobis persecuti cu.</p>
                        <a class="address" href="https://www.google.com/maps/dir//Assistance+%E2%80%93+H%C3%B4pitaux+De+Paris,+3+Avenue+Victoria,+75004+Paris,+Francia/@48.8606548,2.3348734,14z/data=!4m15!1m6!3m5!1s0x47e66e1de36f4147:0xb6615b4092e0351f!2sAssistance+Publique+-+H%C3%B4pitaux+de+Paris+(AP-HP)+-+Si%C3%A8ge!8m2!3d48.8568376!4d2.3504305!4m7!1m0!1m5!1m1!1s0x47e67031f8c20147:0xa6a9af76b1e2d899!2m2!1d2.3504327!2d48.8568361">Get directions</a>
                    </div>
                    <ul>
                        <li><span class="loc_open">Now Open</span></li>
                        <li>
                            <div class="score"><span>Good<em>350 Reviews</em></span><strong>7.0</strong></div>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- /item -->
            <div class="item">
                <div class="strip grid">
                    <figure>
                        <a href="detail-restaurant" class="wish_bt"></a>
                        <a href="detail-restaurant"><img src="img/location_4.jpg" class="img-fluid" alt="" width="400" height="266">
                            <div class="read_more"><span>Read more</span></div>
                        </a>
                        <small>Bar</small>
                    </figure>
                    <div class="wrapper">
                        <h3><a href="detail-restaurant">Bistroter</a></h3>
                        <p>Id placerat tacimates definitionem sea, prima quidam vim no. Duo nobis persecuti cu.</p>
                        <a class="address" href="https://www.google.com/maps/dir//Assistance+%E2%80%93+H%C3%B4pitaux+De+Paris,+3+Avenue+Victoria,+75004+Paris,+Francia/@48.8606548,2.3348734,14z/data=!4m15!1m6!3m5!1s0x47e66e1de36f4147:0xb6615b4092e0351f!2sAssistance+Publique+-+H%C3%B4pitaux+de+Paris+(AP-HP)+-+Si%C3%A8ge!8m2!3d48.8568376!4d2.3504305!4m7!1m0!1m5!1m1!1s0x47e67031f8c20147:0xa6a9af76b1e2d899!2m2!1d2.3504327!2d48.8568361">Get directions</a>
                    </div>
                    <ul>
                        <li><span class="loc_open">Now Open</span></li>
                        <li>
                            <div class="score"><span>Good<em>350 Reviews</em></span><strong>7.0</strong></div>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- /item -->
            <div class="item">
                <div class="strip grid">
                    <figure>
                        <a href="detail-hotel" class="wish_bt"></a>
                        <a href="detail-hotel"><img src="img/location_5.jpg" class="img-fluid" alt="" width="400" height="266">
                            <div class="read_more"><span>Read more</span></div>
                        </a>
                        <small>Hotel</small>
                    </figure>
                    <div class="wrapper">
                        <h3><a href="detail-hotel">Hotel Concorde</a></h3>
                        <p>Id placerat tacimates definitionem sea, prima quidam vim no. Duo nobis persecuti cu.</p>
                        <a class="address" href="https://www.google.com/maps/dir//Assistance+%E2%80%93+H%C3%B4pitaux+De+Paris,+3+Avenue+Victoria,+75004+Paris,+Francia/@48.8606548,2.3348734,14z/data=!4m15!1m6!3m5!1s0x47e66e1de36f4147:0xb6615b4092e0351f!2sAssistance+Publique+-+H%C3%B4pitaux+de+Paris+(AP-HP)+-+Si%C3%A8ge!8m2!3d48.8568376!4d2.3504305!4m7!1m0!1m5!1m1!1s0x47e67031f8c20147:0xa6a9af76b1e2d899!2m2!1d2.3504327!2d48.8568361">Get directions</a>
                    </div>
                    <ul>
                        <li><span class="loc_closed">Now Closed</span></li>
                        <li>
                            <div class="score"><span>Superb<em>350 Reviews</em></span><strong>9.0</strong></div>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- /item -->
            <div class="item">
                <div class="strip grid">
                    <figure>
                        <a href="detail-restaurant" class="wish_bt"></a>
                        <a href="detail-restaurant"><img src="img/location_6.jpg" class="img-fluid" alt="" width="400" height="266">
                            <div class="read_more"><span>Read more</span></div>
                        </a>
                        <small>Bar</small>
                    </figure>
                    <div class="wrapper">
                        <h3><a href="detail-restaurant">Eiffel Bar</a></h3>
                        <p>Id placerat tacimates definitionem sea, prima quidam vim no. Duo nobis persecuti cu.</p>
                        <a class="address" href="https://www.google.com/maps/dir//Assistance+%E2%80%93+H%C3%B4pitaux+De+Paris,+3+Avenue+Victoria,+75004+Paris,+Francia/@48.8606548,2.3348734,14z/data=!4m15!1m6!3m5!1s0x47e66e1de36f4147:0xb6615b4092e0351f!2sAssistance+Publique+-+H%C3%B4pitaux+de+Paris+(AP-HP)+-+Si%C3%A8ge!8m2!3d48.8568376!4d2.3504305!4m7!1m0!1m5!1m1!1s0x47e67031f8c20147:0xa6a9af76b1e2d899!2m2!1d2.3504327!2d48.8568361">Get directions</a>
                    </div>
                    <ul>
                        <li><span class="loc_closed">Now Closed</span></li>
                        <li>
                            <div class="score"><span>Good<em>350 Reviews</em></span><strong>7.5</strong></div>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- /item -->
        </div>
        <!-- /carousel -->
        <div class="container">
            <div class="btn_home_align"><a href="grid-listings-filterscol" class="btn_1 rounded">View all</a></div>
        </div>
        <!-- /container -->
    </div>
    <!-- /container -->

    <div class="call_section image_bg">
        <div class="wrapper">
            <div class="container margin_80_55">
                <div class="main_title_2">
                    <span><em></em></span>
                    <h2>How it Works</h2>
                    <p>.</p>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="box_how wow">
                            <i class="pe-7s-search"></i>
                            <h3>Search Locations</h3>
                            <p>An nec placerat repudiare scripserit, temporibus complectitur at sea, vel ignota fierent eloquentiam id.</p>
                            <span></span>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="box_how">
                            <i class="pe-7s-info"></i>
                            <h3>View Location Info</h3>
                            <p>An nec placerat repudiare scripserit, temporibus complectitur at sea, vel ignota fierent eloquentiam id.</p>
                            <span></span>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="box_how">
                            <i class="pe-7s-like2"></i>
                            <h3>Book, Reach or Call</h3>
                            <p>An nec placerat repudiare scripserit, temporibus complectitur at sea, vel ignota fierent eloquentiam id.</p>
                        </div>
                    </div>
                </div>
                <!-- /row -->
                <p class="text-center add_top_30 wow bounceIn" data-wow-delay="0.5"><a href="create-account" class="btn_1 rounded">Register Now</a></p>
            </div>
        </div>
        <!-- /wrapper -->
    </div>
    <!--/call_section-->
</main>
@endsection