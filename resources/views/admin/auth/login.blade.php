@extends('admin.auth.layout')

@section('content')
    <div class="auth">
        <div class="abs">
            <img src="{{ asset('assets/img/admin/bg-login.png') }}" alt="" title="">
        </div>
        <div class="tbl">
            <div class="cell">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-5 offset-lg-7">
                            <div class="pad">
                                <div class="t1">Log in to your account</div>
                                <div class="box-error">Your password is incorrect or this account doesn’t exist. Please try again.</div>
                                <form>
                                    <div class="form-group error">
                                        <label>Email address<span class="red">*</span></label>
                                        <input class="form-control" type="text" name=""/>
                                        <div class="required">Please input a valid email address</div>
                                    </div>
                                    <div class="form-group mb8">
                                        <label>Password<span class="red">*</span></label>
                                        <input class="form-control" type="password" name=""/>
                                        <div class="required">This field is required</div>
                                    </div>
                                    <div class="link">
                                        <a href="{{ URL::to('/forgot') }}">Forgot password?</a>
                                    </div>
                                    <div class="link-btn">
                                        <button class="hvr-button" disabled type="submit">Login in</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
<script type="text/javascript">
$(document).ready(function() {
    
});
</script>
@endsection
