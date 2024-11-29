<!DOCTYPE html>
<html lang="en">
<head>
    <base href="./">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no"> -->
    <!-- <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="manifest" href="assets/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="assets/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff"> -->
    <!-- Vendors styles-->
    <!-- <link rel="stylesheet" href="{{ asset('css/simplebar.css') }}"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=2.0"/>
    <title>Pawketplace - Pet Parent</title>
    @yield('css')
    <link href="{{ asset('css/coreui.min.css') }}" rel="stylesheet">
    <!-- <link rel="stylesheet" href="css/vendors/simplebar.css"> -->
    <!-- Main styles for this application-->
    <link href="{{ asset('js/clockpicker/jquery-clockpicker.css') }}" rel="stylesheet"/>
    <link href="{{ asset('js/select2/select2.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('js/jquery-ui/jquery-ui.css') }}" rel="stylesheet">
    <link href="{{ asset('js/jquery-ui/jquery-ui.theme.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/dataTables.bootstrap4.css') }}" rel="stylesheet">
    <link href="{{ asset('css/fonts.css') }}" rel="stylesheet"/>
    <link href="{{ asset('css/frontpanel/style.css') }}" rel="stylesheet"/>
</head>
<body>
    @include('website.pet-parent.layout.sidebar')
    <div class="wrapper d-flex flex-column min-vh-100">
        @include('website.pet-parent.layout.header')
        <div class="body flex-grow-1">
            <div class="pt120">
                @yield('content')
            </div>
        </div>
    </div>
    
    <!-- <div class="modal fade" id="successModal" aria-labelledby="successModal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="mb15">
                    <div class="row row4">
                        <div class="col-10 my-auto">
                            <div class="t-pop">Form submitted successfully</div>
                        </div>
                        <div class="col-2 my-auto text-end">
                            <div class="close" data-coreui-dismiss="modal">
                                <img src="{{ asset('assets/img/close.svg') }}" alt="" title="">
                            </div>
                        </div>
                    </div>
                    <div class="box-pop success">
                        <div class="img">
                            <img src="{{ asset('assets/img/modal-success.svg') }}" alt="" title="">
                        </div>
                        <div class="bdy">
                            <p>Thank you for reaching out! Your form has been submitted. You should receive a response in your email inbox within the next few working days.</p>
                        </div>
                    </div>
                    <ul class="l-btn right">
                        <li>
                            <button class="hvr-button white" type="button" data-coreui-dismiss="modal">Close</button>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="failedModal" aria-labelledby="failedModal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="mb15">
                    <div class="row row4">
                        <div class="col-10 my-auto">
                            <div class="t-pop">Failed to submit form</div>
                        </div>
                        <div class="col-2 my-auto text-end">
                            <div class="close" data-coreui-dismiss="modal">
                                <img src="{{ asset('assets/img/close.svg') }}" alt="" title="">
                            </div>
                        </div>
                    </div>
                    <div class="box-pop failed">
                        <div class="img">
                            <img src="{{ asset('assets/img/modal-failed.svg') }}" alt="" title="">
                        </div>
                        <div class="bdy">
                            <p>There was an error submitting your form.</p>
                            <p>Please try again.</p>
                        </div>
                    </div>
                    <ul class="l-btn right">
                        <li>
                            <button class="hvr-button white" type="button" data-coreui-dismiss="modal">Close</button>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div> -->

    <div class="bg-loading" style="background: transparent !important;">
        <div class="abs">
            <img src="{{ asset('assets/img/admin/loading.gif') }}" alt="" title=""/>
        </div>
    </div>
    <!-- CoreUI and necessary plugins-->
    <script src="{{ asset('js/coreui.bundle.min.js') }}"></script>
    <!-- <script src="node_modules/simplebar/dist/simplebar.min.js"></script> -->
    <script>
    // if (document.body.classList.contains('dark-theme')) {
    //     var element =  document.getElementById('btn-dark-theme');
    //     if (typeof(element) != 'undefined' && element != null) {
    //         document.getElementById('btn-dark-theme').checked = true;
    //     }
    // } else {
    //     var element =  document.getElementById('btn-light-theme');
    //     if (typeof(element) != 'undefined' && element != null) {
    //         document.getElementById('btn-light-theme').checked = true;
    //     }
    // }
    // function handleThemeChange(src) {
    //     var event = document.createEvent('Event');
    //     event.initEvent('themeChange', true, true);

    //     if (src.value === 'light' ) {
    //         document.body.classList.remove('dark-theme');
    //     }
    //     if (src.value === 'dark' ) {
    //         document.body.classList.add('dark-theme');
    //     }
    //     document.body.dispatchEvent(event);
    // }

    </script>
    {{--<script>
        var web_url = "{{ route('home') }}";
    </script>--}}
    <!-- Plugins and scripts required by this view-->
    <!-- <script src="{{ asset('js/chart.min.js') }}"></script> -->
    <script src="{{ asset('js/coreui-chartjs.js') }}"></script>
    <script src="{{ asset('js/coreui-utils.js') }}"></script>
    <!-- <script src="{{ asset('js/main.js') }}"></script> -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/clockpicker/jquery-clockpicker.js') }}"></script>
    <script src="{{ asset('js/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('js/jquery-ui/jquery-ui.js') }}"></script>
    <script src="{{ asset('js/jquery.ui.touch-punch.min.js') }}"></script>
    <script src="{{ asset('js/signature/jquery.signature.js') }}"></script>
    <script src="{{ asset('js/select2/select2.min.js') }}"></script>
    <script src="{{ asset('js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('js/datatables.js') }}"></script>
    <script src="{{ asset('js/web.js') }}"></script>
    <!-- <script src="{{ asset('js/custom.js') }}"></script> -->
    <script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
    <script src="{{ asset('js/tinymce/tinymce.min.js') }}"></script>
    <script>
        $(function() {
            var route_prefix = "url-to-filemanager";
            $('.lfm').filemanager('image', {
                route_prefix
            });
            
            @if(Session::has('success'))
                $('#modal-body').html('{!!Session::get('success')!!}');
                $('#successModal').modal('show');
            @endif
        });
    </script>
    <script>
        var editor_config = {
          path_absolute : "/",
          selector: "textarea.my-editor",
          plugins: [
            "advlist autolink lists link image charmap print preview hr anchor pagebreak",
            "searchreplace wordcount visualblocks visualchars code fullscreen",
            "insertdatetime media nonbreaking save table contextmenu directionality",
            "emoticons template paste textcolor colorpicker textpattern"
          ],
          toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media | fontsizeselect",
          relative_urls: false,
          remove_script_host : false,
          convert_urls : true,
          file_browser_callback : function(field_name, url, type, win) {
            var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
            var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

            var cmsURL = editor_config.path_absolute + 'filemanager?field_name=' + field_name;
            if (type == 'image') {
              cmsURL = cmsURL + "&type=Images";
            } else {
              cmsURL = cmsURL + "&type=Files";
            }

            tinyMCE.activeEditor.windowManager.open({
              file : cmsURL,
              title : 'Filemanager',
              width : x * 0.8,
              height : y * 0.8,
              resizable : "yes",
              close_previous : "no"
            });
          }
        };

        tinymce.init(editor_config);
    </script>
    @yield('scripts')
    @yield('scripts-dash')

</body>
</html>