@extends('layouts.auth-master')

@section('content')
    <form action="/register" method="post">
        @csrf
        <div class="form-group mb-2">
            <label for="">User Name</label>
            <input class="form-control" type="text" name="name" id="" placeholder="Enter your name" value="{{old('name')}}">
            @if ($errors->has('name'))
                <span class="text-danger">{{$errors->first('name')}}</span>
            @endif
        </div>

        <div class="form-group mb-2">
            <label for="">Email</label>
            <input class="form-control" type="email" name="email" id="" placeholder="Enter your mail" value="{{old('email')}}">
            @if ($errors->has('email'))
                <span class="text-danger">{{$errors->first('email')}}</span>
            @endif
        </div>

        <div class="form-group mb-2">
            <label for="">Password</label>
            <input class="form-control" type="password" name="password" id="" placeholder="Enter your password">
            @if ($errors->has('password'))
                <span class="text-danger">{{$errors->first('password')}}</span>
            @endif
        </div>

        <div class="form-group mb-2">
            <label for="">Confirm Password</label>
            <input class="form-control" type="password" name="confirm_password" id="" placeholder="Confirm your password">
            @if ($errors->has('confirm_password'))
                <span class="text-danger">{{$errors->first('confirm_password')}}</span>
            @endif
        </div>

        <a href="/" class="btn btn-md btn-secondary">Cancel</a>
        <button type="submit" class="btn btn-md btn-primary float-end">Submit</button>
    </form>
@endsection