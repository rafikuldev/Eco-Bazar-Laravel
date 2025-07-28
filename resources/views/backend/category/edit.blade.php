{{-- resources/views/backend/category/edit.blade.php --}}

@extends('layouts.app')
@section('backend')

<div class="card">
    <div class="card-header">
        <h5 class="card-title">Edit Category</h5>
    </div>
    <div class="card-body">
        <form action="{{ route('backend.category.update', $category->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="category_title" class="form-label">Category Title</label>
                <input type="text" 
                       class="form-control @error('category_title') is-invalid @enderror" 
                       id="category_title" 
                       name="category_title" 
                       value="{{ old('category_title', $category->category_title) }}">
                @error('category_title')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="icon" class="form-label">Category Icon</label>
                <input type="file" class="icon form-control @error('icon') is-invalid @enderror" id="icon" name="icon">
                @error('icon')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label>Current Icon:</label>
                <img src="{{ title_imge($category->icon) }}" alt="{{ $category->category_title }}" width="100">
            </div>

            <div class="text-end">
                <button type="submit" class="btn btn-primary">Update Category</button>
                <a href="{{ route('backend.category.index') }}" class="btn btn-secondary">Cancel</a>
            </div>
        </form>
    </div>
</div>



@push('scripts')
<script>
  $(document).ready(function() {
    // Initialize FilePond
    FilePond.registerPlugin(FilePondPluginImagePreview);
    $('.icon').filepond({
      storeAsFile: true,
      allowImagePreview: true,
    });
    // filepond end
  });
</script>
@endpush

@endsection