@extends('admin.auth.layout')

@section('content')
    <div class="bg-password">
        <div class="tbl">
            <div class="cell">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-9 col-lg-7 col-xl-5">
                            <div class="logo">
                                <img src="{{ asset('assets/img/admin/logo.png') }}" alt="" title=""/>
                            </div>
                            <div class="title">Forgot Password</div>
                            <div class="bdy">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                <p>Vestibulum a dui sapien. Ut vulputate fermentum.</p>
                            </div>
                            <form method="POST" action="">
                                @csrf
                                <div class="form-group">
                                    <label class="big">Email</label>
                                    <input type="email" placeholder="Enter your email address" class="form-control big @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                    @error('email')
                                        <div class="invalid-feedback" role="alert">{{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <button class="hvr-button big full" type="submit">Send Reset Instructions</button>
                                <div class="link">
                                    <a href="{{ URL::to('/backpanel/login') }}">Back to Login</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="cp">&copy; <?php echo date('Y'); ?> Company Name. All rights reserved.</div>
    </div>
@endsection
