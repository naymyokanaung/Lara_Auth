@extends('layouts.app-master')

@section('content')
    <section>
        <div class="container mt-5">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h1>Product List</h1>
                <a href="{{route('product.create')}}" class="btn btn-primary">Add Product</a>
              </div>
            <div class="table-responsive">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Description</th>
                    <th scope="col">Created By</th>
                    <th scope="col">Updated By</th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                    <tr>
                        <th scope="row">{{$loop->iteration}}</th>
                        <td>{{$product->name}}</td>
                        <td>{{$product->price}}</td>
                        <td>{{$product->description}}</td>
                        <td>{{$product->created_by}}</td>
                        <td>{{$product->updated_by}}</td>
                        <td class="d-flex">
                            <a href="{{route('product.show', $product->id)}}" class="btn btn-info mx-2">Details</a>
                            <a href="{{route('product.edit', $product->id)}}" class="btn btn-warning mx-2">Edit</a>
                            <form action="{{route('product.destroy', $product->id)}}" method="POST">
                                @csrf
                                @method('delete')
                                <button class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach                  
                </tbody>
              </table>
            </div>
          </div>
    </section>
@endsection