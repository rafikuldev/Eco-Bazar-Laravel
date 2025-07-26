@extends('layouts.app')
@section('backend')

<div class="card">
    <div class="card-header">
    Create Category
    </div>
    <div class="card-body">
      <form action="">
        @csrf
        <div class="row">
          <div class="col-lg-6">
            <div class="form-group">
             <label for="category_name">Category Name <b class="text-theme-6">*</b></label>
             <input id="category_name" type="text" class="form-control" placeholder="Example: Electronics....">
            </div>
          </div>
          <div class="col-lg-6">
            <div class="form-group">
             <label for="category_url">Category URL <b class="text-theme-6">*</b></label>
             <input id="category_url" type="text" class="form-control" placeholder="Example: electronics">
            </div>
          </div>
        </div>
        <input type="file"class="icon mt-10" name="icon" id="icon" >
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
    $('.icon').filepond();
    // filepond end
  });
</script>
@endpush


@endsection