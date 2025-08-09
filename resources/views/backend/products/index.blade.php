@extends('layouts.app')
@section('backend')
    <div class="text-end mt-10 mb-5">
        <a href="{{ route('backend.product.create') }}" class="btn btn-primary ">Add Product<i class="ms-3"
                data-feather="plus-circle"></i></a>
    </div>
    <table id="dataTable" class="table table-striped table-responsive">
        <thead>
            <tr>
                <th class="text-center">Sl.</th>
                <th>Title</th>
                <th class="text-center">Category</th>
                <th class="text-center">Price</th>
                <th class="text-center">SKU</th>
                <th class="text-center">Featured</th>
                <th class="text-center">Status</th>
                <th class="text-center">Stock</th>
                <th class="text-center">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $key => $product)
                <tr>
                    <td class="text-center">{{ ++$key }}</td>
                    <td>
                        <div class="row w-100 align-items-center justify-content-between">
                            <div class="col-8">
                                {{ $product->title }}
                            </div>
                            <div class="col-4 text-end">
                                <a href="">
                                    <img width="70px" src="{{ title_imge($product->featured_img) }}" alt="">
                                </a>
                            </div>
                        </div>
                    </td>
                    <td class="text-center">
                        <b>{{ $product->category->category_title ?? 'N/A' }}</b>
                    </td>
                    <td class="text-center">
                        @if ($product->selling_price)
                            <b>{{ number_format($product->selling_price, 2) }}</b> <br> <del
                                style="opacity: 0.6;">{{ number_format($product->price, 2) }}</del>
                        @else
                            <b>{{ number_format($product->price, 2) }}</b>
                        @endif
                    </td>
                    <td class="text-center">
                        {{ $product->sku }}
                    </td>
                    <td class="text-center">
                        @if ($product->featured)
                            <i style="font-size: 24px; color: #ffea01;" class="fa-solid fa-star"></i>
                        @else
                            <i style="font-size: 24px;" class="fa-regular fa-star"></i>
                        @endif
                    </td>
                    <td class="text-center">
                        {{ genaral_status($product->status) }}
                    </td>
                    <td class="text-center">
                        {{ stock_status($product->stock) }}
                    </td>
                    <td class="text-center">
                        <div class="dropdown"> <button class="dropdown-toggle btn btn-primary" aria-expanded="false"
                                data-bs-toggle="dropdown">Show Actions</button>
                            <div class="dropdown-menu w-40">
                                <ul class="dropdown-content">
                                    <li>
                                        <h6 class="dropdown-header py-0">Export Tools</h6>
                                    </li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li> <a href="" class="dropdown-item"> <i data-feather="edit"
                                                class="w-4 h-4 text-gray-700 dark-text-gray-300 me-2"></i> Edit </a>
                                    </li>
                                    <li> <a href="" class="dropdown-item"> <i data-feather="trash-2"
                                                class="w-4 h-4 text-gray-700 dark-text-gray-300 me-2"></i> Delete </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>

    </table>


    @push('styles')
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css"
            integrity="sha512-DxV+EoADOkOygM4IR9yXP8Sb2qwgidEmeqAEmDKIOfPRQZOWbXCzLC6vjbZyy0vPisbH2SyW27+ddLVCN+OMzQ=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
    @endpush
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
