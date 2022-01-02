<div class="auth-wrapper">
    <div class="auth-content container">
        <div class="card">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <a href="{{ route('home-blog')  }}">
                                <div class="d-flex justify-content-center align-items-center mb-4">

                                    <img src="{{asset("admin/assets/images/favico.ico")}}" alt="Logo Viva Andaz" class="img-fluid">

                                    <span class="ml-3 font-weight-bold">Viva Andaz</span>
                                </div>
                            </a>

                        <h4 class="mb-5 text-center f-w-400">Login into your account</h4>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="feather icon-mail"></i></span>
                            </div>
                            <input type="email" id="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email address">
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="feather icon-lock"></i></span>
                            </div>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>

                        <div class="form-group text-left mt-2">
                            <div class="checkbox checkbox-primary d-inline">
                                <input type="checkbox" id="checkbox-fill-a1" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label for="checkbox-fill-a1" class="cr"> Remember Me </label>
                            </div>
                        </div>
                        <button class="btn btn-primary mb-4">Login</button>
                        <p class="mb-2 text-muted">Forgot password? <a href="{{ route('password.request') }}" class="f-w-400">Reset</a></p>
                        </form>
                    </div>
                </div>
                <div class="col-md-6 d-none d-md-block">
                    <img src="{{asset("admin/assets/images/auth-bg.jpg")}}" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</div>
