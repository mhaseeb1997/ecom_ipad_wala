@extends('admin.layout.app')
@section('content')
    <!-- Content Start -->
    <div class="content px-5">
        <h1 class="my-5">Create Category</h1>
        <form action="{{ route('product-category.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name"
                       placeholder="Enter factory name" value="{{ old('name') }}">
                @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <button class="btn btn-success btn-block btn-sm mt-4" type="submit">Submit</button>
        </form>




    </div>
    <!-- Content End -->
@endsection
