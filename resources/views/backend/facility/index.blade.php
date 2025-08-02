@extends('layouts.app')
@section('backend')
    <div class="text-end mt-10 mb-5">
        <a href="{{ route('backend.facility.create') }}" class="btn btn-primary">Add Facility Card<i class="ms-3"
                data-feather="plus-circle"></i></a>
    </div>

    <div class="card">
        <div class="card-header">
            <h4 class="card-title">All Facility Cards</h4>
        </div>
        <div class="card-body">
            <table id="dataTable" class="table table-striped table-responsive">
                <thead>
                    <tr>
                        <th class="text-center">Icon</th>
                        <th class="text-center">Title</th>
                        <th class="text-center">Subtitle</th>
                        <th class="text-center">Status</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($facilities as $facility)
                        <tr>
                            <td class="text-center">
                                <img width="50px" src="{{ asset('storage/' . $facility->icon) }}"
                                    alt="{{ $facility->title }}">
                            </td>
                            <td class="text-center">{{ $facility->title }}</td>
                            <td class="text-center">{{ $facility->subtitle }}</td>
                            <td class="text-center">
                                @if ($facility->status)
                                    <a href="{{ route('backend.facility.status.update', $facility->id) }}"
                                        class="btn btn-elevated-rounded-primary btn-success w-24 d-inline-block me-1 mb-2">Active</a>
                                @else
                                    <a href="{{ route('backend.facility.status.update', $facility->id) }}"
                                        class="btn btn-elevated-rounded-primary btn-danger w-24 d-inline-block me-1 mb-2">Inactive</a>
                                @endif
                            </td>
                            <td class="text-center">
                                <a href="{{ route('backend.facility.edit', $facility->id) }}"
                                    class="btn btn-info w-24 me-2 text-white" title="Edit">
                                    Edit
                                    <i data-feather="edit" class="ms-2 w-4 h-4"></i>
                                </a>

                                <form action="{{ route('backend.facility.destroy', $facility->id) }}" method="POST"
                                    class="d-inline delete-form">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger w-24 me-1 mt-2" title="Delete">
                                        Delete
                                        <i data-feather="trash-2" class="ms-2 w-4 h-4"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    @push('scripts')
        <script>
            $(document).ready(function() {
                $('#dataTable').DataTable({
                    responsive: true,
                    language: {
                        emptyTable: "No facilities found. Please create one."
                    }
                });

                // SweetAlert2 for delete confirmation
                $('.delete-form').on('submit', function(e) {
                    e.preventDefault();
                    var form = this;

                    Swal.fire({
                        title: 'Are you sure?',
                        text: "You won't be able to revert this!",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Yes, delete it!'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            form.submit();
                        }
                    })
                });
                filepond(

                    document.querySelector('input[type="file"].filepond')
                ).on('processfile', (error, file) => {
                    if (error) {
                        console.error('File processing error:', error);
                        return;
                    }
                    console.log('File processed successfully:', file);
                }
                );
            });
        </script>
    @endpush
@endsection
