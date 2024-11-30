@extends('admin.layout.app')

@section('content')
<div class="pad-content">
    <div class="container">
        <div class="back">
            <a href="{{ URL::to('/admin/content-management/faq') }}"><img src="{{ asset('assets/img/admin/back.svg') }}" alt="" title=""> <span class="text">Back to listings</span></a>
        </div>
        <div class="title">General FAQ</div>
        <div class="row">
            <div class="col-md-9">
                <div class="box-faq">
                    <div class="form-faq">
                        <div class="mb20">
                            <div class="row">
                                <div class="col-md-6 my-auto">
                                    <div class="t-faq">Question 1</div>
                                </div>
                                <!-- <div class="col-md-6 my-auto text-end">
                                    <div class="delete-faq">Delete question</div>
                                </div> -->
                            </div>
                        </div>
                        <div class="mb15">
                            <div class="tbl">
                                <div class="cell w100">
                                    <div class="t2-faq">Question</div>
                                </div>
                                <div class="cell">
                                    <input placeholder="Question goes here" type="text" class="form-control" name="" required/>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="tbl">
                                <div class="cell w100">
                                    <div class="t2-faq">Answer</div>
                                </div>
                                <div class="cell">
                                    <textarea placeholder="Answer goes here" type="message" class="form-control" name="" required></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-faq">
                        <div class="mb20">
                            <div class="row">
                                <div class="col-md-6 my-auto">
                                    <div class="t-faq">Question 2</div>
                                </div>
                                <div class="col-md-6 my-auto text-end">
                                    <div class="delete-faq">Delete question</div>
                                </div>
                            </div>
                        </div>
                        <div class="mb15">
                            <div class="tbl">
                                <div class="cell w100">
                                    <div class="t2-faq">Question</div>
                                </div>
                                <div class="cell">
                                    <input placeholder="Question goes here" type="text" class="form-control" name="" required/>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="tbl">
                                <div class="cell w100">
                                    <div class="t2-faq">Answer</div>
                                </div>
                                <div class="cell">
                                    <textarea placeholder="Answer goes here" type="message" class="form-control" name="" required></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-faq">
                        <div class="mb20">
                            <div class="row">
                                <div class="col-md-6 my-auto">
                                    <div class="t-faq">Question 3</div>
                                </div>
                                <div class="col-md-6 my-auto text-end">
                                    <div class="delete-faq">Delete question</div>
                                </div>
                            </div>
                        </div>
                        <div class="mb15">
                            <div class="tbl">
                                <div class="cell w100">
                                    <div class="t2-faq">Question</div>
                                </div>
                                <div class="cell">
                                    <input placeholder="Question goes here" type="text" class="form-control" name="" required/>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="tbl">
                                <div class="cell w100">
                                    <div class="t2-faq">Answer</div>
                                </div>
                                <div class="cell">
                                    <textarea placeholder="Answer goes here" type="message" class="form-control" name="" required></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-faq">
                        <div class="mb20">
                            <div class="row">
                                <div class="col-md-6 my-auto">
                                    <div class="t-faq">Question 4</div>
                                </div>
                                <div class="col-md-6 my-auto text-end">
                                    <div class="delete-faq">Delete question</div>
                                </div>
                            </div>
                        </div>
                        <div class="mb15">
                            <div class="tbl">
                                <div class="cell w100">
                                    <div class="t2-faq">Question</div>
                                </div>
                                <div class="cell">
                                    <input placeholder="Question goes here" type="text" class="form-control" name="" required/>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="tbl">
                                <div class="cell w100">
                                    <div class="t2-faq">Answer</div>
                                </div>
                                <div class="cell">
                                    <textarea placeholder="Answer goes here" type="message" class="form-control" name="" required></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-faq">
                        <div class="mb20">
                            <div class="row">
                                <div class="col-md-6 my-auto">
                                    <div class="t-faq">Question 5</div>
                                </div>
                                <div class="col-md-6 my-auto text-end">
                                    <div class="delete-faq">Delete question</div>
                                </div>
                            </div>
                        </div>
                        <div class="mb15">
                            <div class="tbl">
                                <div class="cell w100">
                                    <div class="t2-faq">Question</div>
                                </div>
                                <div class="cell">
                                    <input placeholder="Question goes here" type="text" class="form-control" name="" required/>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="tbl">
                                <div class="cell w100">
                                    <div class="t2-faq">Answer</div>
                                </div>
                                <div class="cell">
                                    <textarea placeholder="Answer goes here" type="message" class="form-control" name="" required></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="link-global click-add">Add another question</div>
                <ul class="l-btn right mt50">
                    <li>
                        <a href="{{ URL::to('/admin/content-management/faq') }}">
                            <button class="hvr-button white" type="button">Cancel</button>
                        </a>
                        <button class="hvr-button white" type="button" data-coreui-toggle="modal" data-coreui-target="#cancelModal">Cancel</button>
                    </li>
                    <li>
                        <button class="hvr-button" type="button" data-coreui-toggle="modal" data-coreui-target="#savechangesModal">Save changes</button>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="cancelModal" aria-labelledby="cancelModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="mb15">
                <div class="row row4">
                    <div class="col-10 my-auto">
                        <div class="t-pop">Leave page without saving</div>
                    </div>
                    <div class="col-2 my-auto text-end">
                        <div class="close" data-coreui-dismiss="modal">
                            <img src="{{ asset('assets/img/close.svg') }}" alt="" title="">
                        </div>
                    </div>
                </div>
            </div>
            <form action="{{ URL::to('/admin/content-management/faq') }}">
                <div class="bdy-pop">
                    <p>Are you sure you want to leave this page? Any changes made to this page will not be saved.</p>
                </div>
                <ul class="l-btn right">
                    <li>
                        <button class="hvr-button w120 white" data-coreui-dismiss="modal" type="button">Cancel</button>
                    </li>
                    <li>
                        <button class="hvr-button w120" type="submit">Save</button>
                    </li>
                </ul>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="savechangesModal" aria-labelledby="savechangesModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="mb15">
                <div class="row row4">
                    <div class="col-10 my-auto">
                        <div class="t-pop">Save changes</div>
                    </div>
                    <div class="col-2 my-auto text-end">
                        <div class="close" data-coreui-dismiss="modal">
                            <img src="{{ asset('assets/img/close.svg') }}" alt="" title="">
                        </div>
                    </div>
                </div>
            </div>
            <form action="{{ URL::to('/admin/content-management/faq') }}">
                <div class="bdy-pop">
                    <p>Are you sure you want to save changes? Once saved, content will be published on the website.</p>
                </div>
                <ul class="l-btn right">
                    <li>
                        <button class="hvr-button w120 white" data-coreui-dismiss="modal" type="button">Cancel</button>
                    </li>
                    <li>
                        <button class="hvr-button w120" type="submit">Save</button>
                    </li>
                </ul>
            </form>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script type="text/javascript">
    $(document).ready(function () {
        $('.nav-group-faq a').addClass('active');
    });

    document.querySelector('.click-add').addEventListener('click', () => {
        const questionCount = document.querySelectorAll('.form-faq').length;
        const newForm = document.createElement('div');
        
        newForm.classList.add('form-faq');
        newForm.innerHTML = `
            <div class="mb20">
                <div class="row">
                    <div class="col-md-6 my-auto">
                        <div class="t-faq">Question ${questionCount + 1}</div>
                    </div>
                    <div class="col-md-6 my-auto text-end">
                        <div class="delete-faq">Delete question</div>
                    </div>
                </div>
            </div>
            <div class="mb15">
                <div class="tbl">
                    <div class="cell w100"><div class="t2-faq">Question</div></div>
                    <div class="cell"><input placeholder="Question goes here" type="text" class="form-control" required/></div>
                </div>
            </div>
            <div>
                <div class="tbl">
                    <div class="cell w100"><div class="t2-faq">Answer</div></div>
                    <div class="cell"><textarea placeholder="Answer goes here" class="form-control" required></textarea></div>
                </div>
            </div>
        `;
        
        document.querySelector('.box-faq').appendChild(newForm);
        updateQuestionNumbers();
    });

    document.querySelector('.box-faq').addEventListener('click', (e) => {
        if (e.target.classList.contains('delete-faq')) {
            e.target.closest('.form-faq').remove();
            updateQuestionNumbers();
        }
    });

    function updateQuestionNumbers() {
        document.querySelectorAll('.form-faq .t-faq').forEach((el, i) => {
            el.textContent = `Question ${i + 1}`;
        });
    }
</script>
@endsection