@section('page_title', "Sign In | QwikCare Business Listing")
@extends('layouts.sub-app')
@section('content')
<div class="sub_header_in sticky_header" style="margin-top: -1%;">
    <div class="container">
        <h1>Sign Into Your Account</h1>
    </div>
    <!-- /container -->
</div>
<!-- /sub_header -->

<main>
    <div class="container margin_60">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-6 col-md-8">
                <div class="box_account">
                    <h3 class="client">Client Pass</h3> 
                    <div class="form_container">
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Email*">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password_in_2" id="password_in_2" value="" placeholder="Password*">
                        </div>
                        <hr>                       
                        <div class="text-center"><input type="submit" value="Register" class="btn_1 full-width"></div>
                        <hr>
                        <div class="collapse dont-collapse-sm" id="collapse_ft_2">
                            <ul class="links">
                                <li><a href="./create-account " style="color:black">Not a member. Proceed to Create account <span class="icon icon-right-open"></span></a></li>
                            </ul>
                        </div>
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
<script>
    var checkst = document.getElementById('stcheck');
    var checksd = document.getElementById('sdcheck');

    if (checkst.checked){
        checksd.disabled = true;
    }
    else  {
        checksd.disabled = false;
    }
</script>
@endsection