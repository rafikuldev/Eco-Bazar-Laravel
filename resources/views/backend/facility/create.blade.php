@extends('layouts.app')
@section('backend')
<div class="card">
    <div class="card-header">Create Facility</div>
    <div class="card-body">
        <form action="{{ route('backend.facility.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="icon" class="form-label">Icon Image</label>
                {{-- FilePond input --}}
                <input type="file" class="filepond" id="icon" name="icon" placeholder="Upload Icon" required>
                @error('icon')
                    <div class="text-danger mt-1">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" placeholder="Enter Title" name="title" value="{{ old('title') }}" required>
                 @error('title')
                    <div class="text-danger mt-1">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="subtitle" class="form-label">Subtitle</label>
                <input type="text" class="form-control" id="subtitle" placeholder="Enter Subtitle" name="subtitle" value="{{ old('subtitle') }}" required>
                 @error('subtitle')
                    <div class="text-danger mt-1">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary w-full">Create Facility</button>
        </form>
    </div>
</div>

@push('scripts')
{{-- Make sure you have FilePond JS and CSS included in your main layout file --}}
<script>
    // Initialize FilePond
    FilePond.registerPlugin(FilePondPluginImagePreview);
    $('input.filepond').filepond({
      storeAsFile: true,
      allowImagePreview: true,
    });
</script>
@endpush

@endsection
