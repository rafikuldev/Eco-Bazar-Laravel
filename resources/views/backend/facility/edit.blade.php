@extends('layouts.app')
@section('backend')
<div class="card">
    <div class="card-header">Edit Facility</div>
    <div class="card-body">
        <form action="{{ route('backend.facility.update', $facility->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="icon" class="form-label">New Icon Image (Optional)</label>
                <input type="file" class="filepond" id="icon" name="icon">
                 @error('icon')
                    <div class="text-danger mt-1">{{ $message }}</div>
                @enderror
                <div class="mt-2">
                    <p>Current Icon:</p>
                    <img src="{{ asset('storage/' . $facility->icon) }}" alt="{{ $facility->title }}" width="100" class="img-thumbnail">
                </div>
            </div>
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $facility->title) }}" required>
                 @error('title')
                    <div class="text-danger mt-1">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="subtitle" class="form-label">Subtitle</label>
                <input type="text" class="form-control" id="subtitle" name="subtitle" value="{{ old('subtitle', $facility->subtitle) }}" required>
                 @error('subtitle')
                    <div class="text-danger mt-1">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Update Facility</button>
        </form>
    </div>
</div>

@push('scripts')
{{-- Make sure you have FilePond JS and CSS included in your main layout file --}}
<script src="https://unpkg.com/filepond/dist/filepond.js"></script>
<script>
    // Initialize FilePond
    const inputElement = document.querySelector('input[type="file"].filepond');
    FilePond.create(inputElement);
</script>
@endpush

@endsection
