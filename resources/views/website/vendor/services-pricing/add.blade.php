@extends('website.vendor.layout.app')

@section('content')
<div class="pad-content">
    <div class="container">
        <div class="title">Services & Pricing</div>
        <div class="row">
            <div class="col-lg-9">
                <!-- <div class="box-category">
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
                </ul> -->
                <div id="categories-container">
                    <div class="category-group">
                        <label>Category</label>
                        <input type="text" class="category-name" placeholder="Category name">
                        <div class="services">
                            <div class="service-group">
                                <input type="text" class="service-name" placeholder="Service">
                                <input type="text" class="service-price" placeholder="$0 - $0">
                                <button type="button" class="add-service">+</button>
                            </div>
                        </div>
                    </div>
                </div>
                <button type="button" id="add-category">Add another category</button>
                <button type="button">Cancel</button>
                <button type="button">Save changes</button>
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

    document.addEventListener("DOMContentLoaded", function () {
        const categoriesContainer = document.getElementById("categories-container");
        const addCategoryButton = document.getElementById("add-category");
        function createServiceElement(isFirstService = false) {
            const serviceGroup = document.createElement("div");
            serviceGroup.classList.add("service-group");
            if (isFirstService) {
                serviceGroup.innerHTML = `
                    <input type="text" class="service-name" placeholder="Service">
                    <input type="text" class="service-price" placeholder="$0 - $0">
                `;
            } else {
                serviceGroup.innerHTML = `
                    <input type="text" class="service-name" placeholder="Service">
                    <input type="text" class="service-price" placeholder="$0 - $0">
                    <button type="button" class="add-service">+</button>
                    <button type="button" class="delete-service">🗑</button>
                `;

                const addServiceButton = serviceGroup.querySelector(".add-service");
                addServiceButton.addEventListener("click", () => {
                    const serviceContainer = serviceGroup.parentElement;
                    serviceContainer.appendChild(createServiceElement());
                });

                const deleteServiceButton = serviceGroup.querySelector(".delete-service");
                deleteServiceButton.addEventListener("click", () => {
                    serviceGroup.remove();
                });
            }
            return serviceGroup;
        }
        function createCategoryElement() {
            const categoryGroup = document.createElement("div");
            categoryGroup.classList.add("category-group");

            categoryGroup.innerHTML = `
                <label>Category</label>
                <input type="text" class="category-name" placeholder="Category name">
                <div class="services">
                    <div class="service-group">
                        <input type="text" class="service-name" placeholder="Service">
                        <input type="text" class="service-price" placeholder="$0 - $0">
                        <button type="button" class="add-service">+</button>
                    </div>
                </div>
                <a href="#" class="delete-category">Delete category</a>
            `;

            const servicesContainer = categoryGroup.querySelector(".services");
            const deleteCategoryButton = categoryGroup.querySelector(".delete-category");
            const addServiceButton = categoryGroup.querySelector(".add-service");

            addServiceButton.addEventListener("click", () => {
                servicesContainer.appendChild(createServiceElement());
            });

            deleteCategoryButton.addEventListener("click", (e) => {
                e.preventDefault();
                categoryGroup.remove();
            });
            return categoryGroup;
        }
        addCategoryButton.addEventListener("click", () => {
            categoriesContainer.appendChild(createCategoryElement());
        });

        const initialAddServiceButton = categoriesContainer.querySelector(".add-service");
        initialAddServiceButton.addEventListener("click", () => {
            const initialServicesContainer = categoriesContainer.querySelector(".services");
            initialServicesContainer.appendChild(createServiceElement());
        });
    });

</script>
@endsection