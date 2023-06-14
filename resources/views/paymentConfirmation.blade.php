@extends('layout')

@section('hero')
    <section id="" class="d-flex align-items-center">

        <div class="container">
            <div class="row">


            </div>
        </div>


  </section><!-- End Hero -->
@endsection

@section('main')
    <main id="main">
        <div class="">
            <div class="row justify-content-center">
               <div class="col-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="modal-content text-center">
                                <div class="modal-body">
                                    <h3 class="modal-title">PAYMENT DETAIL SENT TO</h3>
                                    <h5><u>{{session()->get('email')}}</u></h5>
                                    <br>
                                    <br>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Iusto id sapiente accusamus molestiae nisi,
                                    exercitationem dolorem sint repellat sit debitis
                                    voluptates dicta minima dolores quos iure magnam eum atque molestias!
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Iusto id sapiente accusamus molestiae nisi,
                                    exercitationem dolorem sint repellat sit debitis
                                    voluptates dicta minima dolores quos iure magnam eum atque molestias!
                                </div>
                            </div>
                        </div>
                    </div>
               </div>
            </div>
        </div>
    </main>
@endsection
