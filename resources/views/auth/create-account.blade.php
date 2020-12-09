@section('page_title', "Create An Account | QwikCare Business Listing")
@extends('layouts.sub-app')
@section('content')
<div class="sub_header_in sticky_header" style="margin-top: -1%;">
    <div class="container">
        <h1>Create Account</h1>
    </div>
    <!-- /container -->
</div>
<!-- /sub_header -->

<main>
    <div class="container margin_60">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-6 col-md-8">
                <div class="box_account">
                    <h3 class="new_client">New Client</h3> <small class="float-right pt-2">* Required Fields</small>
                    <div class="form_container">
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Email*">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password_in_2" id="password_in_2" value="" placeholder="Password*">
                        </div>
                        <hr>
                        <div class="form-group">
                            <label class="container_radio" style="display: inline-block; margin-right: 15px;">Esteemed User
                                <input type="checkbox" name="client_type" id="stcheck" value="private">
                                <span class="checkmark"></span>
                            </label>
                            <label class="container_radio" style="display: inline-block;">Service Provider
                                <input type="checkbox" name="client_type" id="sdcheck" value="company">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <div class="private box">
                            <div class="row no-gutters">
                                <div class="col-6 pr-1">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Name*">
                                    </div>
                                </div>
                                <div class="col-6 pl-1">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Last Name*">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Full Address*">
                                    </div>
                                </div>
                            </div>
                            <!-- /row -->
                            <div class="row no-gutters">
                                <div class="col-6 pr-1">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="City*">
                                    </div>
                                </div>
                                <div class="col-6 pl-1">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Postal Code*">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <div class="custom-select-form">
                                            <select class="wide add_bottom_10" name="country" id="country">
                                                <option value="" selected>Country*</option>
                                                <option value="Europe">Europe</option>
                                                <option value="United states">United states</option>
                                                <option value="Asia">Asia</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /row -->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Telephone *">
                                    </div>
                                </div>
                            </div>
                            <!-- /row -->
                        </div>
                        <!-- /privato -->
                        <div class="company box" style="display: none;">
                            <div class="row no-gutters">
                                <div class="col-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Company Name*">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Full Address">
                                    </div>
                                </div>
                            </div>
                            <!-- /row -->
                            <div class="row no-gutters">
                                <div class="col-6 pr-1">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="City*">
                                    </div>
                                </div>
                                <div class="col-6 pl-1">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Postal Code*">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <div class="custom-select-form">
                                            <select class="wide add_bottom_10" name="country" id="country">
                                                <option value="" selected>Country*</option>
                                                <option value="Europe">Europe</option>
                                                <option value="United states">United states</option>
                                                <option value="Asia">Asia</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /row -->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Telephone *">
                                    </div>
                                </div>
                            </div>
                            <!-- /row -->
                        </div>
                        <!-- /azienda -->
                        <hr>
                        <div class="form-group">
                            <label class="container_check">Accept <a href="#0">Terms and conditions</a>
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <div class="text-center"><input type="submit" value="Register" class="btn_1 full-width"></div>
                        <hr>
                        <!-- <div class="collapse dont-collapse-sm" id="collapse_ft_2">
                            <ul class="links">
                                <li><a href="./sign-in " style="color:black">Already a member. Proceed to Sign-in <span class="icon icon-right-open"></span></a></li>
                            </ul>
                        </div> -->
                    </div>
                    <!-- /form_container -->
                </div>
                <!-- /box_account -->
            </div>
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</main>
<!--/main-->    
@endsection