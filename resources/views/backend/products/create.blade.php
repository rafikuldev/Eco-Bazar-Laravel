@extends('layouts.app')
@section('backend')
@push('styles')
    <link rel="stylesheet" href="{{ asset('backend/dist/css/rte_theme_default.css') }}"/>
@endpush
@push('scripts')
    <script src="{{ asset('backend/dist/js/rte.js') }}"></script>
    <script src="{{ asset('backend/dist/js/all_plugins.js') }}"></script>
@endpush
    <div class="card">
        <div class="card-header">
            <h3 class="fs-4xl text-center my-4 text-theme-1 fw-medium lh-1">Add New Product</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('backend.product.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="row">
                    {{-- Text Part --}}
                    <div class="col-lg-8">
                        <div class="form-group">
                            <label for="product_name" class="form-label">Product Name <b class="text-theme-6">*</b></label>
                            <input type="text" name="title" id="product_name" class="form-control">
                        </div>
                        <div class="row mt-5">
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="product_price" class="form-label">Product Price <b
                                            class="text-theme-6">*</b></label>
                                    <input type="number" name="price" id="product_discount_price" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="product_discount_price" class="form-label">Product Discount Price</label>
                                    <input type="number" name="selling_price" id="product_discount_price" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="product_discount_price" class="form-label">Product SKU</label>
                                    <input type="text" name="sku" id="product_discount_price" class="form-control">
                                </div>
                            </div>
                        </div>
                        {{-- toggle --}}
                        <div class="row mt-5">
                            <div class="col-lg-4">
                                <div class="form-check form-switch w-full w-sm-auto ms-sm-auto mt-3 mt-sm-0 ps-0">
                                    <label for="product_price" class="form-check-label ms-0 ms-sm-2">Product Status
                                    </label>
                                    <input type="checkbox" value="{{ true }}" data-target="#basic-accordion" name="status" id="product_status" class="show-code form-check-input me-0 ms-3">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-check form-switch w-full w-sm-auto ms-sm-auto mt-3 mt-sm-0 ps-0">
                                    <label for="product_price" class="form-check-label ms-0 ms-sm-2">Product Featured
                                    </label>
                                    <input type="checkbox" value="{{ true }}" data-target="#basic-accordion" name="featured" id="product_featured" class="show-code form-check-input me-0 ms-3">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-check form-switch w-full w-sm-auto ms-sm-auto mt-3 mt-sm-0 ps-0">
                                    <label for="product_price" class="form-check-label ms-0 ms-sm-2">Product Stock
                                    </label>
                                    <input type="checkbox" value="{{ true }}" data-target="#basic-accordion" name="stock" id="product_stock" class="show-code form-check-input me-0 ms-3">
                                </div>
                            </div>
                        </div>
                        <div class="form-group mt-4">
                            <label for="short_details" class="form-label">Short Details</label>
                            <textarea  name="short_details" id="short_details"
                            class="form-control"></textarea>
                        </div>
                        <div class="form-group mt-4">
                            <label for="long_details" class="form-label">Long Details</label>
                            <textarea  name="long_details" id="long_details"
                            class="form-control"></textarea>
                        </div>
                        <div class="form-group mt-4">
                            <label for="additional_info" class="form-label">Additional Info</label>
                            <textarea  name="additional_info" id="additional_info"
                            class="form-control"></textarea>
                        </div>
                    </div>
                    {{-- Image part --}}
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="featured_img" class="form-label">Featured img <b class="text-theme-6">*</b></label>
                            <input type="file" name="featured_img" id="featured_img" class="form-control featuredImage">
                            @error('featured_img')
                                <span class="text-theme-6">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="gallery_img" class="form-label">Gallery Image</label>
                            <input type="file" name="gallImg[]" id="gallery_img" class="form-control gallImage" multiple>
                            @error('gallImg.*')
                                <span class="text-theme-6">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="category" class="form-label">Select Category</label>
                            <select name="category" id="category" class="form-control form-select form-select-lg">
                                <option disabled selected> Select Category</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->category_title }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <button class="btn btn-primary w-full">Submit</button>
            </form>
        </div>
    </div>



    @push('scripts')
        <script>
            $(document).ready(function() {
                // $('#category_name').keyup(function() {
                //     let value = $(this).val()
                //     value = value.replaceAll(' ', '-').toLowerCase()
                //     $('#category_url').val(value)
                // })
                // Initialize FilePond
                FilePond.registerPlugin(FilePondPluginImagePreview);
                $('.featuredImage').filepond({
                    storeAsFile: true,
                    allowImagePreview: true,
                });
                $('.gallImage').filepond({
                    storeAsFile: true,
                    allowImagePreview: true,
                    multiple: true,
                });
                // filepond end
                new RichTextEditor("#short_details");
                new RichTextEditor("#long_details");
                new RichTextEditor("#additional_info");
            });
        </script>
    @endpush
@endsection
