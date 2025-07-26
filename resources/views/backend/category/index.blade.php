@extends('layouts.app')
@section('backend')

<div class="text-end mt-10 mb-5">
    <a href="{{ url('backend/category/create') }}" class="btn btn-primary ">Add Category<i class="ms-3" data-feather="plus-circle"></i></a>
</div>
<table id="dataTable" class="table table-striped table-responsive">
    <thead>
        <tr>
            <th>Sl.</th>
            <th>Title</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        
    </tbody>

</table>






@endsection