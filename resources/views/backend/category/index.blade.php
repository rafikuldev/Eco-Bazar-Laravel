@extends('layouts.app')
@section('backend')

<div class="text-end mt-10 mb-5">
    <a href="{{ route('backend.category.create') }}" class="btn btn-primary ">Add Category<i class="ms-3" data-feather="plus-circle"></i></a>
</div>
<table id="dataTable" class="table table-striped table-responsive">
    <thead>
        <tr>
            <th class="text-center">Sl.</th>
            <th>Title</th>
            <th class="text-center">Status</th>
            <th class="text-center">Action</th>
        </tr>
    </thead>
    <tbody>
        @forelse($categories as $key=>$category)
        <tr>
            <td class="text-center"> {{ ++$key }} </td>
            <td class="w-50">
                <div class="row w-100 align-items-center justify-content-between">
                    <div class="col-8">
                        {{ $category->category_title }}
                    </div>
                    <div class="col-4 text-end">
                        <img width="70px" src="{{ title_imge($category->icon) }}" alt="">
                    </div>
                </div>
            </td>
            <td class="text-center">
                {{ genaral_status($category->status, route('backend.category.update.status', $category->id))  }}
            </td>
            <td class="text-center">
                <a href="{{ route('backend.category.edit', $category->id) }}" class="btn btn-primary me-1 mb-2"> <i data-feather="edit" class="w-5 h-5"></i> </a>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="4" class="text-center">No categories found.</td>
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
