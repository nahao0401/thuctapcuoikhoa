@extends('layouts.app')

@section('content')
    <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-xl-10 col-lg-12 col-md-9">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                    <div class="col-lg-6 d-flex justify-content-center align-items-center">
                        <img class="rounded-square" style="width:26.5rem;" src="{{ asset('public/img/login.jpg') }}" alt="Login Image">
                    </div>
                        <div class="col-lg-6">
                            <div class="p-5">
                                
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Đăng nhập</h1>
                                </div>
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf

                                    <div class="row mb-3">
                                        <label for="email" class="col-md-4 col-form-label text-md-end">Tài khoản</label>

                                        <div class="col-md-7">
                                            <input id="email" type="text" class="form-control {{ ($errors->has('email') || $errors->has('username')) ? 'is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="Email, Tên đăng nhập hoặc Điện thoại" autofocus>

                                            @if($errors->has('email') || $errors->has('username'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ empty($errors->first('email')) ? $errors->first('username') : $errors->first('email') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="password" class="col-md-4 col-form-label text-md-end">Mật khẩu</label>

                                        <div class="col-md-7">
                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-md-6 offset-md-4">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                                <label class="form-check-label" for="remember">
                                                    Nhớ mật khẩu
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-0">
                                        <div class="col-md-8 offset-md-3 text-center">
                                            <button type="submit" class="btn btn-primary">
                                                Đăng nhập
                                            </button>

                                            @if (Route::has('password.request'))
                                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                                    Quên mật khẩu
                                                </a>
                                            @endif
                                        </div>
                                    </div>
                                </form>
                                <hr>
                                <div class="col-md-8 offset-md-3 text-center">
                                    <a class="large" href="{{ route('register') }}">Đăng ký</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

    </div>
@endsection
