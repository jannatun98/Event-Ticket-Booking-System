@extends('backend.master')

@section('concert')

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />

<div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-sm-8 col-lg-6">
            
           
          </div>
        </div>
        <div class="row">
          <!-- Single Advisor-->
          <div class="col-md-4"></div>
          <div class="col-md-4">
            <div class="single_advisor_profile wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
              <!-- Team Thumb-->
              <div class="advisor_thumb"><img width="300px" src="https://www.pinkvilla.com/imageresize/bts_the_best_cp_main.jpg?width=752&t=pvorg" alt="">
             
              <!-- Team Details-->
              <div>
                <h6>BTS</h6>
                <p class="designation">Contact - 0123456789</p>
                <p class="designation">Busan, South Korea</p>
                <p class="designation">Singer, Dancer</p>
              </div>
            </div>
          </div>
          <div class="col-md-4"></div>
        </div>
      
      @endsection