@extends('layout')

@section('main')
    <main id="main">


    <!-- ======= About Us Section ======= -->
    <section id="about" class="about section__top__padding">
      <div class="container" data-aos="fade-up">

            <div class="section-title">
            <h2>ABOUT US</h2>

            </div>

            <div class="row content">
                <div class="col-lg-12">
                    <div class="row d-flex justify-content-center">
                        <h1 class="logo mb-3"><a href="/"><img src="{{asset('img/logo/LogoColor.png')}}" width="200"></a></h1>
                    </div>
                    <div>
                        <span style="color: #009f4e;"><b>NUB BUS</b></span> is a digital omnichannel booking platform that enables travelers book and buy bus tickets online and via call center.
                        It provides travelers the ability to manage their trips from their phones, tablets and computers including ticket booking,
                        digital payment options, trip tracking, and reviewing bus service providers. It will enable bus operators digitize their ticket
                        sales process through contactless payments and data analytics ability to improve customer services. We take customer satisfaction seriously!
                        That is why we provide superior customer support from booking to boarding.
                    </div>
                </div>

            </div>

      </div>
    </section><!-- End About Us Section -->



  </main><!-- End #main -->

@endsection
