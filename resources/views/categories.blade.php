@section('page_title', "Categories | QwikCare Business Listing")
@extends('layouts.sub-app')
@section('content')
<main>
    <div id="results">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-4 col-10">
                    <h4><strong>0</strong> result for All listing</h4>
                </div>
                <div class="col-lg-9 col-md-8 col-2">
                    <a href="#0" class="side_panel btn_search_mobile"></a> <!-- /open search panel -->
                    <div class="row no-gutters custom-search-input-2 inner">
                        <div class="col-lg-5">
                            <div class="form-group">
                                <input class="form-control" type="text" placeholder="What are you looking for...">
                                <i class="icon_search"></i>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="form-group">
                                <input class="form-control" type="text" placeholder="Where">
                                <i class="icon_pin_alt"></i>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <select class="wide">
                                <option>All Categories</option>
                                <option>Shops</option>
                                <option>Hotels</option>
                                <option>Restaurants</option>
                                <option>Bars</option>
                                <option>Events</option>
                                <option>Fitness</option>
                            </select>
                        </div>
                        <div class="col-lg-1">
                            <input type="submit" value="Search">
                        </div>
                    </div>
                </div>
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /results -->

    <div class="filters_listing version_2  sticky_horizontal">
        <div class="container">
            <ul class="clearfix">
                <li>
                    <div class="switch-field">
                        <input type="radio" id="all" name="listing_filter" value="all" checked>
                        <label for="all">All</label>
                        <input type="radio" id="popular" name="listing_filter" value="popular">
                        <label for="popular">Popular</label>
                        <input type="radio" id="latest" name="listing_filter" value="latest">
                        <label for="latest">Latest</label>
                    </div>
                </li>
            </ul>
        </div>
        <!-- /container -->
    </div>
    <!-- /filters -->

    <div class="collapse" id="collapseMap">
        <div id="map" class="map"></div>
    </div>
    <!-- /Map -->

    <div class="container margin_60_35">
        <div class="row">
            <aside class="col-lg-3" id="sidebar">
                <div id="filters_col">
                    <a data-toggle="collapse" href="#collapseFilters" aria-expanded="false" aria-controls="collapseFilters" id="filters_col_bt">Filters </a>
                    <div class="collapse show" id="collapseFilters">
                        <div class="filter_type">
                            <h6>Category</h6>
                            <ul>
                                <li>
                                    <label class="container_check">Restaurants <small>245</small>
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                </li>
                                <li>
                                    <label class="container_check">Shops <small>43</small>
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                </li>
                                <li>
                                    <label class="container_check">Bars <small>13</small>
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                </li>
                                <li>
                                    <label class="container_check">Events <small>65</small>
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                </li>
                            </ul>
                        </div>
                        <div class="filter_type">
                            <h6>Price Range</h6>
                            <div class="distance">Price Limits <span></span> USD</div>
                            <input type="range" min="10" max="100" step="10" value="30" data-orientation="horizontal">
                        </div>
                    </div>
                    <!--/collapse -->
                </div>
                <!--/filters col-->
            </aside>
            <!-- /aside -->

            <div class="col-lg-9">
                <div class="strip list_view">
                    <div class="row no-gutters">
                        <div class="col-lg-5">
                            <figure>
                                <a href="detail-restaurant.html"><img src="img/location_1.jpg" class="img-fluid" alt="">
                                    <div class="read_more"><span>Read more</span></div>
                                </a>
                                <small>Bar</small>
                            </figure>
                        </div>
                        <div class="col-lg-7">
                            <div class="wrapper">
                                <a href="#0" class="wish_bt"></a>
                                <h3><a href="detail-restaurant.html">Da Alfredo</a></h3>
                                <small>27 Old Gloucester St</small>
                                <p>Dicam diceret ut ius, no epicuri dissentiet philosophia vix. Id usu zril tacimates neglegentur. Eam id legimus torquatos cotidieque, usu decore percipitur definitiones ex, nihil utinam recusabo mel no.</p>
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
                </div>
                <!-- /strip list_view -->
                <div class="strip list_view">
                    <div class="row no-gutters">
                        <div class="col-lg-5">
                            <figure>
                                <a href="detail-restaurant.html"><img src="img/location_2.jpg" class="img-fluid" alt="">
                                    <div class="read_more"><span>Read more</span></div>
                                </a>
                                <small>Bar</small>
                            </figure>
                        </div>
                        <div class="col-lg-7">
                            <div class="wrapper">
                                <a href="#0" class="wish_bt"></a>
                                <h3><a href="detail-restaurant.html">Limon Bar</a></h3>
                                <small>438 Rush Green Road, Romford</small>
                                <p>Dicam diceret ut ius, no epicuri dissentiet philosophia vix. Id usu zril tacimates neglegentur. Eam id legimus torquatos cotidieque, usu decore percipitur definitiones ex, nihil utinam recusabo mel no.</p>
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
                </div>
                <!-- /strip list_view -->
                <div class="strip list_view">
                    <div class="row no-gutters">
                        <div class="col-lg-5">
                            <figure>
                                <a href="detail-shop.html"><img src="img/location_3.jpg" class="img-fluid" alt="">
                                    <div class="read_more"><span>Read more</span></div>
                                </a>
                                <small>Shop</small>
                            </figure>
                        </div>
                        <div class="col-lg-7">
                            <div class="wrapper">
                                <a href="#0" class="wish_bt"></a>
                                <h3><a href="detail-shop.html">Mary Boutique</a></h3>
                                <small>43 Stephen Road, Bexleyheath</small>
                                <p>Dicam diceret ut ius, no epicuri dissentiet philosophia vix. Id usu zril tacimates neglegentur. Eam id legimus torquatos cotidieque, usu decore percipitur definitiones ex, nihil utinam recusabo mel no.</p>
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
                </div>
                <!-- /strip list_view -->
                <div class="strip list_view">
                    <div class="row no-gutters">
                        <div class="col-lg-5">
                            <figure>
                                <a href="detail-restaurant.html"><img src="img/location_4.jpg" class="img-fluid" alt="">
                                    <div class="read_more"><span>Read more</span></div>
                                </a>
                                <small>Bar</small>
                            </figure>
                        </div>
                        <div class="col-lg-7">
                            <div class="wrapper">
                                <a href="#0" class="wish_bt"></a>
                                <h3><a href="detail-restaurant.html">Garden Bar</a></h3>
                                <small>40 Beechwood Road, Sanderstead</small>
                                <p>Dicam diceret ut ius, no epicuri dissentiet philosophia vix. Id usu zril tacimates neglegentur. Eam id legimus torquatos cotidieque, usu decore percipitur definitiones ex, nihil utinam recusabo mel no.</p>
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
                </div>
                <!-- /strip list_view -->

                <div class="strip list_view">
                    <div class="row no-gutters">
                        <div class="col-lg-5">
                            <figure>
                                <a href="detail-hotel.html"><img src="img/location_5.jpg" class="img-fluid" alt="">
                                    <div class="read_more"><span>Read more</span></div>
                                </a>
                                <small>Hotel</small>
                            </figure>
                        </div>
                        <div class="col-lg-7">
                            <div class="wrapper">
                                <a href="#0" class="wish_bt"></a>
                                <h3><a href="detail-hotel.html">Mariott Hotel</a></h3>
                                <small>213 Malden Road, New Malden</small>
                                <p>Dicam diceret ut ius, no epicuri dissentiet philosophia vix. Id usu zril tacimates neglegentur. Eam id legimus torquatos cotidieque, usu decore percipitur definitiones ex, nihil utinam recusabo mel no.</p>
                                <a class="address" href="https://www.google.com/maps/dir//Assistance+%E2%80%93+H%C3%B4pitaux+De+Paris,+3+Avenue+Victoria,+75004+Paris,+Francia/@48.8606548,2.3348734,14z/data=!4m15!1m6!3m5!1s0x47e66e1de36f4147:0xb6615b4092e0351f!2sAssistance+Publique+-+H%C3%B4pitaux+de+Paris+(AP-HP)+-+Si%C3%A8ge!8m2!3d48.8568376!4d2.3504305!4m7!1m0!1m5!1m1!1s0x47e67031f8c20147:0xa6a9af76b1e2d899!2m2!1d2.3504327!2d48.8568361">Get directions</a>
                            </div>
                            <ul>
                                <li><span class="loc_open">Now Open</span></li>
                                <li>
                                    <div class="score"><span>Good<em>350 Reviews</em></span><strong>7.5</strong></div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /strip list_view -->

                <p class="text-center"><a href="#0" class="btn_1 rounded add_top_30">Load more</a></p>
            </div>
            <!-- /col -->
        </div>
    </div>
    <!-- /container -->

</main>
@endsection