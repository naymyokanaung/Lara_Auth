@extends('layouts.app-master')

@section('content')
    <section>
        <div class="container mt-3 col-md-8">
            <h2>Edit Product-{{$product->id}}</h2>
            <form action="{{ route('product.update', $product->id)}}" method="POST">
                @csrf
                @method('put')
                <div class="form-group m-2">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{$product->name}}">
                    <span class="text-danger">
                        @error('name')
                            {{$message}}
                        @enderror
                    </span>
                </div>
                <div class="form-group m-2">
                    <label for="price">Price:</label>
                    <input type="number" class="form-control" id="price" name="price" value="{{$product->price}}">
                    <span class="text-danger">
                        @error('price')
                            {{$message}}
                        @enderror
                    </span>
                </div>
                <div class="form-group m-2">
                    <label for="description">Description:</label>
                    <textarea class="form-control" id="description" name="description" rows="3">{{$product->description}}</textarea>
                    <span class="text-danger">
                        @error('description')
                            {{$message}}
                        @enderror
                    </span>
                </div>
                <div class="form-group m-2 d-flex justify-content-between">
                    <a href="{{ route('product.index') }}" class="btn btn-secondary">Back</a>
                    <button type="submit" class="btn btn-success ml-auto">Submit</button>
                </div>
            </form>
        </div>
    </section>
@endsection