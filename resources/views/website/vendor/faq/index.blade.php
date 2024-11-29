@extends('vendor.layout.app')

@section('content')
<div class="pad-content">
    <div class="container">
        <div class="title">Frequently asked questions</div>
        <div class="row">
            <div class="col-lg-10">
                <div class="accordion">
                    <div class="item">
                        <div class="nm">
                            <button class="accordion-button collapsed" type="button" data-coreui-toggle="collapse" data-coreui-target="#faq1" aria-expanded="false" aria-controls="faq1">Question 1 goes here, description etc etc etc?</button>
                        </div>
                        <div id="faq1" class="accordion-collapse collapse">
                            <div class="body">
                                <p>Answer for question 1 goes here.  Description goes here, description goes here, description goes here, description goes here description goes here, description goes here, description goes here etc </p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="nm">
                            <button class="accordion-button collapsed" type="button" data-coreui-toggle="collapse" data-coreui-target="#faq2" aria-expanded="false" aria-controls="faq2">Question 2 goes here, description etc etc etc?</button>
                        </div>
                        <div id="faq2" class="accordion-collapse collapse">
                            <div class="body">
                                <p>Answer for question 2 goes here.  Description goes here, description goes here, description goes here, description goes here description goes here, description goes here, description goes here etc </p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="nm">
                            <button class="accordion-button collapsed" type="button" data-coreui-toggle="collapse" data-coreui-target="#faq3" aria-expanded="false" aria-controls="faq3">Question 3 goes here, description etc etc etc?</button>
                        </div>
                        <div id="faq3" class="accordion-collapse collapse">
                            <div class="body">
                                <p>Answer for question 3 goes here.  Description goes here, description goes here, description goes here, description goes here description goes here, description goes here, description goes here etc </p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="nm">
                            <button class="accordion-button collapsed" type="button" data-coreui-toggle="collapse" data-coreui-target="#faq4" aria-expanded="false" aria-controls="faq4">Question 4 goes here, description etc etc etc?</button>
                        </div>
                        <div id="faq4" class="accordion-collapse collapse">
                            <div class="body">
                                <p>Answer for question 4 goes here.  Description goes here, description goes here, description goes here, description goes here description goes here, description goes here, description goes here etc </p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="nm">
                            <button class="accordion-button collapsed" type="button" data-coreui-toggle="collapse" data-coreui-target="#faq5" aria-expanded="false" aria-controls="faq5">Question 5 goes here, description etc etc etc?</button>
                        </div>
                        <div id="faq5" class="accordion-collapse collapse">
                            <div class="body">
                                <p>Answer for question 5 goes here.  Description goes here, description goes here, description goes here, description goes here description goes here, description goes here, description goes here etc </p>
                            </div>
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
    $(document).ready(function () {
        $('.nav-group-faq a').addClass('active');
    });
</script>
@endsection