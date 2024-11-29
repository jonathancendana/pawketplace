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
                            <div class="title">Create New Password</div>
                            <div class="bdy">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                <p>Vestibulum a dui sapien. Ut vulputate fermentum.</p>
                            </div>
                            <form method="POST" action="">
                                @csrf
                                <div class="form-group">
                                    <label class="big">Password</label>
                                    <div class="pos-rel">
                                        <input id="password" type="password" class="form-control big" name="password" required autocomplete="current-password">
                                        <div toggle="#password">
                                            <img class="toggle-password big eye-show open-eye" src="{{ asset('assets/img/admin/show.png') }}" alt="" title=""/>
                                            <img  class="toggle-password big eye-hide" src="{{ asset('assets/img/admin/hide.png') }}" alt="" title=""/>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="big">Confirm Password</label>
                                    <div class="pos-rel">
                                        <input id="password2" type="password" class="form-control big" name="password2" required autocomplete="current-password">
                                        <div toggle="#password2">
                                            <img class="toggle-password big eye-show open-eye" src="{{ asset('assets/img/admin/show.png') }}" alt="" title=""/>
                                            <img  class="toggle-password big eye-hide" src="{{ asset('assets/img/admin/hide.png') }}" alt="" title=""/>
                                        </div>
                                    </div>
                                </div>
                                <button class="hvr-button full big" type="submit">Submit</button>
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

@section('scripts')
<script type="text/javascript">
$(document).ready(function() {
    $(".toggle-password").click(function() {
        var input = $(this).closest('.pos-rel').find('input');
        var eyeShow = $(this).closest('.pos-rel').find('.eye-show');
        var eyeHide = $(this).closest('.pos-rel').find('.eye-hide');

        if (input.attr("type") === "password") {
            input.attr("type", "text");
            eyeShow.removeClass("open-eye");
            eyeHide.addClass("open-hide");
        } else {
            input.attr("type", "password");
            eyeShow.addClass("open-eye");
            eyeHide.removeClass("open-hide");
        }
    });
});
</script>
@endsection
