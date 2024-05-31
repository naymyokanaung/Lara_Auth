@extends('layouts.app-master')
@section('content')
    <section>
        <div class="container mt-5 text-center">
            <h1 class="mb-4 text-center">Product List</h1>
            <div class="row justify-content-center">
              <div class="col-md-4">
                <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title">{{$product->name}}</h5>
                    <p class="card-text">{{$product->description}}</p>
                    <p class="card-text"><strong>Price:</strong> ${{$product->price}}</p>
                </div>
                <div class="card-footer">
                    <small class="text-muted">Created by {{$product->created_by}}</small><span class="text-muted mx-5">|</span>
                    <small class="text-muted float-right">Updated by {{$product->updated_by}}</small>
                </div>
                <div class="card-footer">
                    <a href="{{route('product.index')}}" class="btn btn-secondary">Back</a>
                </div>
                </div>
              </div>
            </div>
        </div>
    </section>
@endsection