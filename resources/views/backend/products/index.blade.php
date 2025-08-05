@extends('layouts.app')
@section('backend')

<div class="text-end mt-10 mb-5">
    <a href="{{ route('backend.product.create') }}" class="btn btn-primary ">Add Product<i class="ms-3" data-feather="plus-circle"></i></a>
</div>
<table id="dataTable" class="table table-striped table-responsive">
    <thead>
        <tr>
            <th class="text-center">Sl.</th>
            <th>Title</th>
            <th class="text-center">Category</th>
            <th class="text-center">Price</th>
            <th class="text-center">SKU</th>
            <th class="text-center">SKU</th>
            <th class="text-center">Featured</th>
            <th class="text-center">Status</th>
            <th class="text-center">Stock</th>
            <th class="text-center">Action</th>
        </tr>
    </thead>
    <tbody>

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
