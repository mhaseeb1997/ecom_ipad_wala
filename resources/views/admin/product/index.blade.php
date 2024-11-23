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

                </tbody>
            </table>

        </div>
    </div>
@endsection
