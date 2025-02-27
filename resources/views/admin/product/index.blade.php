@extends('admin.layout.app')
@section('content')
    <div class="content p-5">
        <h1>Product List</h1>
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
                @foreach($products as $product)
                    <tr>
                        <td>{{$loop->index +1}}</td>
                        <td>{{$product->name}}</td>
                        <td>
                            <form action="{{ route('product.destroy', $product->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this post?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>

        </div>
    </div>
@endsection
