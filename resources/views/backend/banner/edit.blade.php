@extends('layouts.app')
@section('backend')

<div class="card">
    <div class="card-header">
        Edit Banner
    </div>
    <div class="card-body">
        <form action="{{ route('backend.banner.update', $banner->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT') {{-- আপডেট করার জন্য এটি খুবই গুরুত্বপূর্ণ --}}

            {{-- Sub Heading --}}
            <div class="mb-3">
                <label for="sub_heading" class="form-label">Sub Heading</label>
                <input type="text" class="form-control" id="sub_heading" name="sub_heading" value="{{ old('sub_heading', $banner->sub_heading) }}">
                @error('sub_heading')
                    <div class="text-danger mt-1">{{ $message }}</div>
                @enderror
            </div>

            {{-- Heading --}}
            <div class="mb-3">
                <label for="heading" class="form-label">Heading</label>
                <input type="text" class="form-control" id="heading" name="heading" value="{{ old('heading', $banner->heading) }}">
                @error('heading')
                    <div class="text-danger mt-1">{{ $message }}</div>
                @enderror
            </div>

            {{-- Details --}}
            <div class="mb-3">
                <label for="details" class="form-label">Details</label>
                <textarea class="form-control" id="details" name="details" rows="3">{{ old('details', $banner->details) }}</textarea>
                @error('details')
                    <div class="text-danger mt-1">{{ $message }}</div>
                @enderror
            </div>

            <div class="row">
                {{-- Button Name --}}
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="button_name" class="form-label">Button Name</label>
                        <input type="text" class="form-control" id="button_name" name="button_name" value="{{ old('button_name', $banner->button_name) }}">
                        @error('button_name')
                            <div class="text-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                {{-- Button Link --}}
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="button_link" class="form-label">Button Link</label>
                        <input type="text" class="form-control" id="button_link" name="button_link" value="{{ old('button_link', $banner->button_link) }}">
                        @error('button_link')
                            <div class="text-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>

            {{-- Image --}}
            <div class="mb-3">
                <label for="image" class="form-label">Change Image (Optional)</label>
                <input type="file" class="form-control" id="image" name="image">
                @error('image')
                    <div class="text-danger mt-1">{{ $message }}</div>
                @enderror
                <div class="mt-2">
                    <p>Current Image:</p>
                    <img src="{{ asset('storage/' . $banner->image) }}" alt="{{ $banner->heading }}" width="150" class="img-thumbnail">
                </div>
            </div>

            <button type="submit" class="btn btn-primary w-full">Update Banner</button>
        </form>
    </div>
</div>

@endsection
