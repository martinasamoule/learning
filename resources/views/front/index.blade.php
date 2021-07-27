@extends('front.inc.layout')
    @section('content')

   

     <!-- banner part start-->
     <section class="banner_part">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-xl-6">
                    <div class="banner_text">
                        <div class="banner_text_iner">
                            <h5>{{ json_decode($banner->content)->title }}</h5>
                            <h1>{{ json_decode($banner->content)->subtitle }}</h1>
                            <p>{{ json_decode($banner->content)->desc }}</p>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner part start-->
  

    <!-- member_counter counter start -->
    <section class="member_counter">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="single_member_counter">
                        <span class="counter">{{ $courses_counter }}</span>
                        <h4>All Courses</h4>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single_member_counter">
                        <span class="counter">{{ $trainers_counter }}</span>
                        <h4> All Trainers</h4>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single_member_counter">
                        <span class="counter">{{ $students_counter }}</span>
                        <h4>Students</h4>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <!-- member_counter counter end -->

 
   <!--::review_part start::-->
   <section class="special_cource padding_top">
        <div class="container">
            <div class="row justify-content-center">
               <!-- <div class="col-xl-5"> -->
                    <div class="section_tittle text-center">
                        <p>popular courses</p>
                       <a> <h2>New Courses</h2> </a>
                <!--    </div> -->
                </div>
            </div>
            <div class="row">
           
        </div>
    </section>
    <!--::blog_part end::-->

  

  

    @endsection