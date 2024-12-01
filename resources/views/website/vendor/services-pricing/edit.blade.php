@extends('website.vendor.layout.app')

@section('content')
<div class="pad-content">
    <div class="container">
        <div class="title">Services & Pricing</div>
        <div class="row">
            <div class="col-xl-10">
                <form acion="{{ URL::to('/vendor/services-pricing') }}">
                    <div class="categories-container">
                        <div class="categories-container">
                            <div class="category-group form-group">
                                <div class="row">
                                    <div class="col-md-6 col-lg-4 my-auto">
                                        <label>Category</label>
                                        <input type="text" class="form-control" placeholder="Category name" value="Emergency Services">
                                    </div>
                                </div>
                                <div class="services">
                                    <div class="service-group">
                                        <div class="row">
                                            <div class="col-md-6 my-auto resp10">
                                                <input type="text" class="form-control" placeholder="Service" value="Emergency Consultation (after hours)">
                                            </div>
                                            <div class="col-8 col-md-4 my-auto">
                                                <input type="text" class="form-control" placeholder="$0 - $0" value="$100 - $200">
                                            </div>
                                            <div class="col-4 col-md-2 my-auto"></div>
                                        </div>
                                    </div>
                                    <div class="service-group">
                                        <div class="row">
                                            <div class="col-md-6 my-auto resp10">
                                                <input type="text" class="form-control" placeholder="Service" value="General Consultation">
                                            </div>
                                            <div class="col-8 col-md-4 my-auto">
                                                <input type="text" class="form-control" placeholder="$0 - $0" value="$40 - $80">
                                            </div>
                                            <div class="col-4 col-md-2 my-auto">
                                                <button type="button" class="delete-service"><img src="{{ asset('assets/img/frontpanel/delete.svg') }}"></button>
                                                <button type="button" class="add-service"><img src="{{ asset('assets/img/frontpanel/add.svg') }}"></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>   
                            <div class="category-group form-group">
                                <div class="mb5">
                                    <div class="row">
                                        <div class="col-6 my-auto">
                                            <label class="mb0">Category</label>
                                        </div>
                                        <div class="col-6 my-auto text-end">
                                            <div class="link-global">
                                                <a class="delete-category">Delete Category</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 my-auto">
                                        <input type="text" class="form-control" placeholder="Category name" value="Vaccinations">
                                    </div>
                                </div>
                                <div class="services">
                                    <div class="service-group">
                                        <div class="row">
                                            <div class="col-md-6 my-auto resp10">
                                                <input type="text" class="form-control" placeholder="Service" value="Core Vaccinations (e.g., DHPPi for dogs, FVRCP for cats)">
                                            </div>
                                            <div class="col-8 col-md-4 my-auto">
                                                <input type="text" class="form-control" placeholder="$0 - $0" value="$30 - $80">
                                            </div>
                                            <div class="col-4 col-md-2 my-auto">
                                                <button type="button" class="add-service"><img src="{{ asset('assets/img/frontpanel/add.svg') }}"></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="category-group form-group">
                                <div class="mb5">
                                    <div class="row">
                                        <div class="col-6 my-auto">
                                            <label class="mb0">Category</label>
                                        </div>
                                        <div class="col-6 my-auto text-end">
                                            <div class="link-global">
                                                <a class="delete-category">Delete Category</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 my-auto">
                                        <input type="text" class="form-control" placeholder="Category name" value="Diagnostics and Lab Tests">
                                    </div>
                                </div>
                                <div class="services">
                                    <div class="service-group">
                                        <div class="row">
                                            <div class="col-md-6 my-auto resp10">
                                                <input type="text" class="form-control" placeholder="Service" value="Blood Tests (Basic profile)">
                                            </div>
                                            <div class="col-8 col-md-4 my-auto">
                                                <input type="text" class="form-control" placeholder="$0 - $0" value="$80 - $150">
                                            </div>
                                            <div class="col-4 col-md-2 my-auto"></div>
                                        </div>
                                    </div>
                                    <div class="service-group">
                                        <div class="row">
                                            <div class="col-md-6 my-auto resp10">
                                                <input type="text" class="form-control" placeholder="Service" value="Urine Analysis">
                                            </div>
                                            <div class="col-8 col-md-4 my-auto">
                                                <input type="text" class="form-control" placeholder="$0 - $0" value="$40 - $80">
                                            </div>
                                            <div class="col-4 col-md-2 my-auto">
                                                <button type="button" class="delete-service"><img src="{{ asset('assets/img/frontpanel/delete.svg') }}"></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="service-group">
                                        <div class="row">
                                            <div class="col-md-6 my-auto resp10">
                                                <input type="text" class="form-control" placeholder="Service" value="Fecal Analysis">
                                            </div>
                                            <div class="col-8 col-md-4 my-auto">
                                                <input type="text" class="form-control" placeholder="$0 - $0" value="$30 - $60">
                                            </div>
                                            <div class="col-4 col-md-2 my-auto">
                                                <button type="button" class="delete-service"><img src="{{ asset('assets/img/frontpanel/delete.svg') }}"></button>
                                                <button type="button" class="add-service"><img src="{{ asset('assets/img/frontpanel/add.svg') }}"></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>        
                            </div>
                        </div>
                    </div>
                    <div class="link-global">
                        <a class="add-category">Add another category</a>
                    </div>
                    <ul class="l-btn right mt50">
                        <li>
                            <button class="hvr-button w200 white" type="button">Cancel</button>
                        </li>
                        <li>
                            <button class="hvr-button w200" data-coreui-toggle="modal" data-coreui-target="#saveModal" type="button">Save changes</button>
                        </li>
                    </ul>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="saveModal" tabindex="-1" aria-labelledby="saveModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <form action="{{ URL::to('/vendor/services-pricing/view') }}">
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

<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <form>
                <div class="mb15">
                    <div class="row row4">
                        <div class="col-10 my-auto">
                            <div class="t-pop">Delete category</div>
                        </div>
                        <div class="col-2 my-auto text-end">
                            <div class="close" data-coreui-dismiss="modal">
                                <img src="{{ asset('assets/img/close.svg') }}" alt="" title="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bdy-pop">
                    <p>Are you sure you want to delete this category? All listed services and price range in that category will be deleted as well.</p>
                </div>
                <ul class="l-btn right">
                    <li>
                        <button class="hvr-button w120 white" data-coreui-dismiss="modal" type="button">Cancel</button>
                    </li>
                    <li>
                        <button id="confirmDeleteCategory" class="hvr-button w120" type="button">Confirm</button>
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
        $('.nav-group-services a').addClass('active');
    });

    document.addEventListener('click', (e) => {
        const categoriesContainer = document.querySelector('.categories-container');

        if (e.target.matches('.add-category')) {
            categoriesContainer.insertAdjacentHTML(
                'beforeend',
                `
                <div class="category-group form-group">
                    <div class="mb5">
                        <div class="row">
                            <div class="col-6 my-auto">
                                <label class="mb0">Category</label>
                            </div>
                            <div class="col-6 my-auto text-end">
                                <div class="link-global">
                                    <a class="delete-category">Delete Category</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 my-auto">
                            <input type="text" class="form-control" placeholder="Category name">
                        </div>
                    </div>
                    <div class="services">
                        <div class="service-group">
                            <div class="row">
                                <div class="col-md-6 my-auto resp10">
                                    <input type="text" class="form-control" placeholder="Service">
                                </div>
                                <div class="col-8 col-md-4 my-auto">
                                    <input type="text" class="form-control" placeholder="$0 - $0">
                                </div>
                                <div class="col-4 col-md-2 my-auto">
                                    <button type="button" class="add-service"><img src="{{ asset('assets/img/frontpanel/add.svg') }}"></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>`
            );
        } else if (e.target.matches('.delete-category')) {
            categoryToDelete = e.target.closest('.category-group');
            new coreui.Modal(document.getElementById('deleteModal')).show();
        } else if (e.target.matches('.add-service')) {
            const services = e.target.closest('.services');
            services.querySelectorAll('.add-service').forEach((btn) => btn.remove());
            services.insertAdjacentHTML(
                'beforeend',
                `<div class="service-group">
                    <div class="row">
                        <div class="col-md-6 my-auto resp10">
                            <input type="text" class="form-control" placeholder="Service">
                        </div>
                        <div class="col-8 col-md-4 my-auto">
                            <input type="text" class="form-control" placeholder="$0 - $0">
                        </div>
                        <div class="col-4 col-md-2 my-auto">
                            <button type="button" class="delete-service"><img src="{{ asset('assets/img/frontpanel/delete.svg') }}"></button>
                            <button type="button" class="add-service"><img src="{{ asset('assets/img/frontpanel/add.svg') }}"></button>
                        </div>
                    </div>
                </div>`
            );
        } else if (e.target.matches('.delete-service')) {
            const services = e.target.closest('.services');
            e.target.closest('.service-group').remove();
            const lastServiceGroup = services.querySelector('.service-group:last-child');
            if (lastServiceGroup && !lastServiceGroup.querySelector('.add-service')) {
                lastServiceGroup.querySelector('.col-md-2').insertAdjacentHTML(
                    'beforeend',
                    `<button type="button" class="add-service"><img src="{{ asset('assets/img/frontpanel/add.svg') }}"></button>`
                );
            }
        }
    });

    document.getElementById('confirmDeleteCategory').addEventListener('click', () => {
        categoryToDelete?.remove();
        categoryToDelete = null;
        coreui.Modal.getInstance(document.getElementById('deleteModal')).hide();
    });


</script>
@endsection