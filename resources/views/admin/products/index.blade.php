@extends('admin.layouts.main')
@section('body')
    <div class="col-lg-12 grid-margin stretch-card min-vh-100">
        <div class="card min-vh-100">
            <div class="card-body py-5">
                <h4 class="card-title">All Products</h4>
                @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>product name</th>
                                <th>price</th>
                                <th>description</th>
                                <th>Quantity</th>
                                <th>image</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $product->name }}</td>
                                    <td>{{ $product->price }}</td>
                                    <td>{{ $product->desc }}</td>
                                    <td>{{ $product->quantity }}</td>
                                    <td><img src="{{ asset('storage/' . $product->image) }}" alt="Product Image" width="50"></td>
                                </tr>
                            @endforeach
                       

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
