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
              <div class="advisor_thumb"><img width="300px" src="https://i.pinimg.com/736x/87/9b/40/879b40baec6ceed19d4025d323bb9915.jpg" alt="">
             
              <!-- Team Details-->
              <div>
                <h6>Booking Details</h6>
                <p class="designation">10</p>
                <p class="designation">200</p>
                <p class="designation">Quantity = 3</p>
                <p class="designation">Unit Price = 3000 TK</p>
                <p class="designation">Sub Total = 9000 TK</p>
              </div>
            </div>
          </div>
          <div class="col-md-4"></div>
        </div>
      
      @endsection