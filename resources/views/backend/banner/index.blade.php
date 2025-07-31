@extends('layouts.app')
@section('backend')
    <div class="text-end mt-10 mb-5">
        {{-- Button text changed to "Add Banner" --}}
        <a href="{{ route('backend.banner.create') }}" class="btn btn-primary">Add Banner<i class="ms-3"
                data-feather="plus-circle"></i></a>
    </div>
    <table id="dataTable" class="table table-striped table-responsive">
        <thead>
            <tr>
                <th class="text-center">Image</th>
                <th class="text-center">Sub Heading</th>
                <th class="text-center">Heading</th>
                <th class="text-center">Details</th> {{-- নতুন যোগ করা হয়েছে --}}
                <th class="text-center">Button Name</th>
                <th class="text-center">Button Link</th> {{-- নতুন যোগ করা হয়েছে --}}
                {{-- <th class="text-center">Status</th> --}}
                <th class="text-center">Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse($banners as $banner)
                <tr>
                    <td class="text-center">
                        <img width="100px" src="{{ asset('storage/' . $banner->image) }}" alt="{{ $banner->heading }}">
                    </td>
                    <td class="text-center">{{ $banner->sub_heading }}</td>
                    <td class="text-center">{{ $banner->heading }}</td>
                    <td class="text-center">{{ Str::limit($banner->details, 30) }}</td> {{-- নতুন যোগ করা হয়েছে --}}
                    <td class="text-center">{{ $banner->button_name }}</td>
                    <td class="text-center">{{ $banner->button_link }}</td> {{-- নতুন যোগ করা হয়েছে --}}
                    {{-- <td class="text-center">
            @if ($banner->status)
                <a href="{{ route('backend.banner.status.update', $banner->id) }}" class="btn btn-success btn-sm">Active</a>
            @else
                <a href="{{ route('backend.banner.status.update', $banner->id) }}" class="btn btn-warning btn-sm">Inactive</a>
            @endif
        </td> --}}
                    <td class="text-center">
                        {{-- Action Buttons --}}
                        {{-- Action Buttons (A Simpler Way) --}}
                        <a href="{{ route('backend.banner.edit', $banner->id) }}" class="btn btn-info w-24 me-1"
                            title="Edit">
                            Edit <i data-feather="edit" class="w-4 h-4 ms-2"></i>
                        </a>
                        <form action="{{ route('backend.banner.destroy', $banner->id) }}" method="POST" class="d-inline"
                            onsubmit="return confirm('Are you sure you want to delete this banner?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger w-24 me-1 mt-2" title="Delete">
                                Delete<i data-feather="trash" class="w-4 h-4 ms-2"></i>
                            </button>
                        </form>
                        </div>
                    </td>
                </tr>
            @empty
                <tr>
                    {{-- এখানে colspan="6" এর পরিবর্তে colspan="8" হবে --}}
                    <td colspan="8" class="text-center">No banners found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    @push('scripts')
        <script>
            $(document).ready(function() {
                $('#dataTable').DataTable({
                    responsive: true
                });
            });
        </script>
    @endpush
@endsection
