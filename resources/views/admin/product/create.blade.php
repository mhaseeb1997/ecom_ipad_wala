@extends('admin.layout.app')
@section('content')
    <!-- Content Start -->
    <div class="content px-5">
        <h1 class="my-5">Create Product</h1>
        <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-6 mb-3">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                               id="name"
                               placeholder="Name" value="{{ old('name') }}">
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="col-6 mb-3">
                    <div class="form-group">
                        <label for="name">Slug</label>
                        <input type="text" name="slug" class="form-control @error('name') is-invalid @enderror"
                               id="name"
                               placeholder="Slug" value="{{ old('name') }}">
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="col-12 mb-3">
                    <div class="row clone-section">
                        <div class="col-3 mb-2">
                            <select name="variant[color][]" class="form-control form-select">
                                <option value="red">Red</option>
                                <option value="green">Green</option>
                                <option value="blue">Blue</option>
                            </select>
                        </div>
                        <div class="col-3 mb-2">
                            <select name="variant[storage][]" class="form-control form-select">
                                <option value="512">512</option>
                                <option value="64">64</option>
                                <option value="32">32</option>
                            </select>
                        </div>
                        <div class="col-3 mb-2 d-flex align-items-center">
                            <input type="text" name="variant[price][]" class="form-control">
                        </div>
                        <div class="col-3 mb-2 d-flex align-items-center">
                            <input type="text" name="variant[stock_count][]" class="form-control">
                            <button class="btn btn-danger btn-sm ms-2 remove-row" style="display: none;">Remove</button>

                        </div>
                    </div>
                    <div class="col-12 text-end mt-2">
                        <button type="button" class="btn btn-primary btn-sm add-more">Add More</button>
                    </div>
                </div>
                <div class="col-12 mb-3">
                    <input type="file" class="form-control" multiple>
                </div>
                <div class="col-12">
                    <textarea rows="5" class="form-control" name="description"></textarea>
                </div>
            </div>

            <button class="btn btn-success btn-block btn-sm mt-4" type="submit">Submit</button>
        </form>


    </div>
    <!-- Content End -->
@endsection
@push('scripts')
    <script>
        $(document).ready(function () {
            const addMoreButton = $('.add-more');
            const cloneSection = $('.clone-section').first();

            // Add More Button Click
            addMoreButton.on('click', function () {
                const clone = cloneSection.clone(); // Clone the section
                const removeButton = clone.find('.remove-row');

                // Clear Inputs
                clone.find('input').val('');
                removeButton.show(); // Show the remove button

                // Append Cloned Section
                clone.insertAfter(cloneSection.last());

                // Remove Button Click
                removeButton.on('click', function () {
                    clone.remove();
                });
            });
        });

    </script>
@endpush
