@extends('layouts.app')
@section('backend')
@push('styles')
    {{-- Add any specific styles for this page, e.g., for FilePond --}}
    <link href="https://unpkg.com/filepond/dist/filepond.css" rel="stylesheet">
    <link href="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css" rel="stylesheet">
@endpush

<div class="card">
    <div class="card-header">
        <h3 class="fs-4xl text-center my-4 text-theme-1 fw-medium lh-1">Edit Product</h3>
    </div>
    <div class="card-body">
        <form action="{{ route('backend.product.update', $product->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="row">
                {{-- Left Side: Text Inputs --}}
                <div class="col-lg-8">
                    <div class="form-group mb-4">
                        <label for="product_name" class="form-label">Product Name <b class="text-danger">*</b></label>
                        <input type="text" name="title" id="product_name" class="form-control" value="{{ old('title', $product->title) }}">
                    </div>

                    <div class="row mb-4">
                        <div class="col-lg-4">
                            <label for="product_price" class="form-label">Price <b class="text-danger">*</b></label>
                            <input type="number" step="0.01" name="price" id="product_price" class="form-control" value="{{ old('price', $product->price) }}">
                        </div>
                        <div class="col-lg-4">
                            <label for="selling_price" class="form-label">Selling Price</label>
                            <input type="number" step="0.01" name="selling_price" id="selling_price" class="form-control" value="{{ old('selling_price', $product->selling_price) }}">
                        </div>
                        <div class="col-lg-4">
                            <label for="product_sku" class="form-label">Product SKU</label>
                            <input type="text" name="sku" id="product_sku" class="form-control" value="{{ old('sku', $product->sku) }}">
                        </div>
                    </div>

                    <div class="form-group mb-4">
                        <label for="short_details" class="form-label">Short Details</label>
                        <textarea name="short_details" id="short_details" class="form-control">{{ old('short_details', $product->short_details) }}</textarea>
                    </div>

                    {{-- Add other text areas like long_details, additional_info if needed --}}

                </div>

                {{-- Right Side: Images and Category --}}
                <div class="col-lg-4">
                    <div class="form-group mb-4">
                        <label for="category" class="form-label">Category <b class="text-danger">*</b></label>
                        <select name="category" id="category" class="form-control form-select">
                            <option disabled>Select Category</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}" {{ $product->category_id == $category->id ? 'selected' : '' }}>
                                    {{ $category->category_title }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group mb-4">
                        <label class="form-label">Featured Image</label>
                        <input type="file" name="featured_img" class="filepond">
                        <p class="mt-2">Current Image:</p>
                        <img src="{{ title_imge($product->featured_img) }}" alt="Featured Image" width="100" class="img-thumbnail">
                    </div>

                     <div class="form-group mb-4">
                        <label class="form-label">Gallery Images</label>
                        <input type="file" name="gall_img[]" class="filepond" multiple>
                         {{-- You can add a loop here to display current gallery images if needed --}}
                    </div>
                </div>
            </div>

            <hr>

            <div class="row my-4">
                 <div class="col-lg-4">
                    <div class="form-check form-switch">
                        <input type="checkbox" value="1" name="status" id="product_status" class="form-check-input" {{ $product->status ? 'checked' : '' }}>
                        <label for="product_status" class="form-check-label">Product Status</label>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-check form-switch">
                        <input type="checkbox" value="1" name="featured" id="product_featured" class="form-check-input" {{ $product->featured ? 'checked' : '' }}>
                         <label for="product_featured" class="form-check-label">Featured Product</label>
                    </div>
                </div>
                 <div class="col-lg-4">
                    <div class="form-check form-switch">
                        <input type="checkbox" value="1" name="stock" id="product_stock" class="form-check-input" {{ $product->stock ? 'checked' : '' }}>
                        <label for="product_stock" class="form-check-label">In Stock</label>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary w-100">Update Product</button>
        </form>
    </div>
</div>

@push('scripts')
{{-- Scripts for FilePond --}}
<script src="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.js"></script>
<script src="https://unpkg.com/filepond/dist/filepond.js"></script>
<script>
    // Register the plugin
    FilePond.registerPlugin(FilePondPluginImagePreview);
    // Get a reference to the file input elements
    const inputElements = document.querySelectorAll('input.filepond');
    // Create a FilePond instance for each element
    Array.from(inputElements).forEach(inputElement => {
        FilePond.create(inputElement);
    })
</script>
@endpush
@endsection
