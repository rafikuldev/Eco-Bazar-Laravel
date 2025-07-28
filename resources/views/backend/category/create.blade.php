@extends('layouts.app')
@section('backend')

<div class="card">
    <div class="card-header">
    Create Category
    </div>
    <div class="card-body">
      <form action="{{ route('backend.category.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
          <div class="col-lg-6">
            <div class="form-group">
             <label for="category_name">Category Name <b class="text-theme-6">*</b></label>
             <input name="category_title" id="category_name" type="text" class="form-control" placeholder="Example: Electronics....">
              @error('category_title')
              <div class="alert text-theme-6 alert-dismissible fade show d-flex align-items-center ">
              <i data-feather="alert-circle" class="w-6 h-6 me-2"></i>
                {{ $message }}
              </div>
              @enderror
            </div>
          </div>
          <div class="col-lg-6">
            <div class="form-group">
             <label for="category_url">Category URL <b class="text-theme-6">*</b></label>
             <input name="slug" id="category_url" type="text" class="form-control" placeholder="Example: electronics">
             @error('slug')
        <div class="alert text-theme-6 alert-dismissible fade show d-flex align-items-center">
          <i data-feather="alert-circle" class="w-6 h-6 me-2"></i>
          {{ $message }}
        </div>
        @enderror
            </div>
          </div>
        </div>
        <input type="file" class="icon mt-10" name="icon" id="icon" >
        @error('icon')
        <div class="alert text-theme-6 alert-dismissible fade show d-flex align-items-center mb-2">
          <i data-feather="alert-circle" class="w-6 h-6 me-2"></i>
          {{ $message }}
        </div>
        @enderror
        <button class="btn btn-primary w-full">Submit</button>
      </form>
    </div>
</div>



@push('scripts')
<script>
  $(document).ready(function() {
    $('#category_name').keyup(function() {
      let value = $(this).val()
      value = value.replaceAll(' ', '-').toLowerCase()
      $('#category_url').val(value)
    })
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