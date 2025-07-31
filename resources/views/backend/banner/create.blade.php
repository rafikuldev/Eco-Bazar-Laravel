@extends('layouts.app')
@section('backend')

<div class="card">
    <div class="card-header">
    Create Banner
    </div>
    <div class="card-body">
        <form action="{{ route('backend.banner.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="sub_heading" class="form-label">Sub Heading</label>
                <input type="text" class="form-control" id="sub_heading" placeholder="Enter sub heading" name="sub_heading" >
                @error('sub_heading')
                <div class="text-theme-6">
                    <i data-feather="alert-circle" class="w-6 h-6 me-2"></i>
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="heading" class="form-label">Heading</label>
                <input type="text" class="form-control" id="heading" placeholder="Enter heading" name="heading" >
                @error('heading')
                <div class="text-theme-6">
                    <i data-feather="alert-circle" class="w-6 h-6 me-2"></i>
                    {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="details" class="form-label">Details</label>
                <textarea placeholder="Enter details" class="form-control" id="details" name="details" rows="3"></textarea>
                @error('details')
                <div class="text-theme-6">
                    <i data-feather="alert-circle" class="w-6 h-6 me-2"></i>
                    {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="button_name" class="form-label">Button Name</label>
                        <input type="text" placeholder="Enter button name" class="form-control" id="button_name" name="button_name">
                        @error('button_name')
                        <div class="text-theme-6">
                            <i data-feather="alert-circle" class="w-6 h-6 me-2"></i>
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
            </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="button_link" class="form-label">Button Link</label>
                        <input type="text" class="form-control" id="button_link" placeholder="Enter button link" name="button_link">
                        @error('button_link')
                        <div class="text-theme-6">
                            <i data-feather="alert-circle" class="w-6 h-6 me-2"></i>
                            {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                <input type="file" class="form-control icon" id="image" name="image">
                @error('image')
                <div class="text-theme-6">
                    <i data-feather="alert-circle" class="w-6 h-6 me-2"></i>
                    {{ $message }}
                </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary w-full">Submit</button>
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
