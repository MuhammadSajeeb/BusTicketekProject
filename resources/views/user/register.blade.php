@extends('layout')
<style>
    .login-box, .register-box {
        width: 360px;
        margin: 0 auto;
    }
    .form-gp {
        position: relative;
        margin-bottom: 15px;
    }
    .icons {
        position: absolute;
        top: 14px;
        right: 10px;
        font-size: 12px;
        color: #666;
    }
</style>
@section('main')
    <section class="section__top__padding">
        <div class="l-main-container">
            <div class="login-area login-s2">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-10 mx-auto">
                            <div class="login-box">
                                <form action="{{route('user.register')}}" method="post">
                                    @csrf
                                    <div class="login-form-head text-center">
                                        <h4><strong>Sign Up</strong></h4>
                                        <p>Hello there, Sign up and start managing your Dashboard</p>
                                    </div>
                                    @if ($errors->any())
                                        @foreach ($errors->all() as $error)
                                            <div>{{$error}}</div>
                                        @endforeach
                                    @endif
                                    <div id="loginErr"></div>

                                    <div class="login-form-body">
                                        <div class="form-gp">
                                            <input id="name" type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Name" value="{{old('name')}}">
                                            <i class="fa fa-user icons"></i>
                                            @error('name')<sapn class="text-danger">{{$message}}</sapn>@enderror
                                        </div>
                                        <div class="form-gp">
                                            <input id="phone" class="form-control @error('phone') is-invalid @enderror" type="text" name="phone" value="{{old('phone')}}" placeholder="Mobile Number (Optional)">
                                            <i class="fa fa-phone icons"></i>
                                            @error('phone')<sapn class="text-danger">{{$message}}</sapn>@enderror
                                        </div>
                                        <div class="form-gp">
                                            <input id="email" type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" value="{{old('email')}}">
                                            <i class="fa fa-envelope icons"></i>
                                            @error('email')<sapn class="text-danger">{{$message}}</sapn>@enderror
                                        </div>
                                        <div class="form-gp">
                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password">
                                            <i class="fa fa-eye eye_icon icons"></i>
                                            @error('password')<sapn class="text-danger">{{$message}}</sapn>@enderror
                                        </div>
                                        <div class="form-gp">
                                            <input id="password" type="password" name="password_confirmation"  class="form-control @error('password_confirmation') is-invalid @enderror" required=""
                                                   placeholder="Password">
                                            <i class="fa fa-eye eye_icon icons"></i>
                                        </div>

                                        <div class="submit-btn-area">
                                            <button id="form_submit" type="submit" class="form-control btn btn-success">Submit <i
                                                    class="fa fa-arrow-right"></i></button>
                                        </div>
                                        <div class="form-footer text-center mt-4">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
