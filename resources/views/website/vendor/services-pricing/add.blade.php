@extends('vendor.layout.app')

@section('content')
<div class="pad-content">
    <div class="container">
        <div class="title">Services & Pricing</div>
        <div class="row">
            <div class="col-lg-9">
                    <div class="box-category">
                        <div class="form-group">
                            <label>Category</label>
                            <input type="text" class="form-control w380" name="" placeholder="Category name"/>
                            <div class="required">This field is required</div>
                            <div class="category-container">
                                <div class="services-row">
                                    <div class="services">
                                        <div class="tbl tbl-services">
                                            <div class="cell">
                                                <input type="text" class="form-control" placeholder="Service"/>
                                            </div>
                                            <div class="cell w170">
                                                <input type="text" class="form-control" placeholder="$0 - $0"/>
                                            </div>
                                            <div class="cell w80">
                                                <button class="delete-row" style="display: none;"><img src="{{ asset('assets/img/admin/delete-services.svg') }}" alt="" title=""/></button>
                                                <button class="add-row"><img src="{{ asset('assets/img/admin/add.svg') }}" alt="" title=""/></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="link-global">Add another category</div>
                    <ul class="l-btn right mt50">
                        <li>
                            <a href="#">
                                <button type="button" class="hvr-button white w200">Cancel</button>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <button type="submit" class="hvr-button w200">Save Changes</button>
                            </a>
                        </li>
                    </ul>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script type="text/javascript">
    $(document).ready(function () {
        $('.nav-group-services a').addClass('active');
    });

    document.addEventListener('DOMContentLoaded', function () {
        const container = document.querySelector('.category-container');
        container.addEventListener('click', function (e) {
            if (e.target.classList.contains('add-row')) {
                const newRow = document.createElement('div');
                newRow.classList.add('services-row');
                newRow.innerHTML = `
                    <div class="services">
                        <div class="tbl tbl-services">
                            <div class="cell">
                                <input type="text" class="form-control" placeholder="Service"/>
                            </div>
                            <div class="cell w170">
                                <input type="text" class="form-control" placeholder="$0 - $0"/>
                            </div>
                            <div class="cell w80">
                                <button class="delete-row"><img src="{{ asset('assets/img/admin/delete-services.svg') }}" alt="" title=""/></button>
                                <button class="add-row"><img src="{{ asset('assets/img/admin/add.svg') }}" alt="" title=""/></button>
                            </div>
                        </div>
                    </div>
                `;
                container.appendChild(newRow);
                e.target.style.display = 'none';
            }
            if (e.target.classList.contains('delete-row')) {
                const rowToDelete = e.target.closest('.services-row');
                container.removeChild(rowToDelete);
                const lastRow = container.querySelector('.services-row:last-child .add-row');
                if (lastRow) lastRow.style.display = 'inline-block';
            }
        });
    });
</script>
@endsection