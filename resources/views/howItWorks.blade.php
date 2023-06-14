@extends('layout')

@section('main')
  <main id="main" style="margin-top: 100px;">
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>How it works</h2>
          <p>We've made it easy for you to book. Here's how.</p>
        </div>

        <div class="row content">
          <div class="col-lg-6">
            <p>
               <b>1. Search for your trip</b>
               <ul>
                   <li><i class="ri-check-double-line"></i> Make sure to enter your departure and arrival locations, in addition to the departure date and hit the search button.</li>
               </ul>
            </p>

            <p>
               <b>2. Choose your trip and pay for your ticket</b>
               <ul>
                   <li><i class="ri-check-double-line"></i>Take a look at the results available for your trip and select the one that best meets your needs.</li>
                    <li><i class="ri-check-double-line"></i>Review your selection, enter the passenger's details and pay for your trip with online payment, mobile banking, bank deposit, ethio telecom payment and credit card.</li>
               </ul>
            </p>

          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <p>
               <b>3. You're all set! </b>
               <ul>
                   <li><i class="ri-check-double-line"></i>Your trip is booked and you get sms and email for your ticket confirmation.</li>
                   <li><i class="ri-check-double-line"></i>Please arrive at the pick-up point a minimum of 15 minutes before departure. Please have your SMS or email confirmation (or ticket printout in some cases) and government issues personal identification ready while boarding</li>
               </ul>
            </p>
           <!-- <a href="#" class="btn-learn-more">Learn More</a> -->
          </div>
        </div>

      </div>
    </section>


  </main>
@endsection
