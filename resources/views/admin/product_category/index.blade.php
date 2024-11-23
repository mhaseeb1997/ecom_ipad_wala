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
                            <button class="btn btn-sm btn-primary">edit</button>
                            <button class="btn btn-sm btn-danger">delete</button>
                        </th>
                    </tr>
                @endforeach
                </tbody>
            </table>

        </div>
    </div>
@endsection
