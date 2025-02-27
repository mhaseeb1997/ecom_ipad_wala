@extends('admin.layout.app')
@section('content')
    <div class="content p-5">
        <h1>Product Category List</h1>
        <div class="card-body">
            <table id="category-table" class="table table-bordered table-hover">

                <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($productCategories as $key => $data)
                    <tr>
                        <th>{{$key + 1}}</th>
                        <th>{{$data->name}}</th>
                        <th>
                            <form action="{{ route('product-category.destroy', $data->id) }}" method="POST"
                                  onsubmit="return confirm('Are you sure you want to delete this post?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </th>
                    </tr>
                @endforeach
                </tbody>
            </table>

        </div>
    </div>
@endsection
