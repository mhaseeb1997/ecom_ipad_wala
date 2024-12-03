@extends('front.layout.main')
@section('front')

    <div class="container">
        <div class="login-containerr" style="margin:50px auto;">
            <div class="row position-relative">
                @if (session('success'))
                    <div style="color: green; margin-bottom: 10px;">
                        {{ session('success') }}
                    </div>
                @endif
                    @if ($errors->any())
                        <div>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li style="color: red;">{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <div class="col-lg-5 col-12">
                    <h2>Login</h2>
                    <form action="{{route('front-login')}}" method="POST">
                        @csrf
                        <label class="form-label">Email</label>
                        <div class="mb-3">
                            <input type="text" class="form-control" name="email"
                                   placeholder="Email or Phone Number"
                                   required>
                        </div>
                        <label class="form-label">Password</label>
                        <div class="mb-3">
                            <input type="password" name="password" class="form-control" placeholder="Enter Password"
                                   required>
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn" style="width: 100%; background-color: rgb(12, 185, 12);">
                                Sign in
                            </button>
                        </div>
                    </form>
                </div>
                <div class="col-lg-1 col-sm-12">
                    <div class="separator">
                        <div class="circle">
                            <span>OR</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-12">
                    <h2>Sign up</h2>

                    <form action="{{route('front-register')}}" method="POST">
                        @csrf
                        <label class="form-label">Full Name</label>
                        <div class="mb-3">
                            <input type="text" class="form-control" name="name" placeholder="Name" required>
                        </div>


                        <label class="form-label">Email</label>
                        <div class="mb-3">
                            <input type="email" class="form-control" name="email" placeholder="Email" required>
                        </div>

                        <label class="form-label">Mobile</label>
                        <div class="mb-3">
                            <input type="text" class="form-control" name="mobile" placeholder="Phone Number" required>
                        </div>


                        <label class="form-label">Password</label>
                        <div class="mb-3">
                            <input type="password" name="password" class="form-control" placeholder="Enter Password"
                                   required>
                        </div>

                        <label class="form-label">Confirm Password</label>
                        <div class="mb-3">
                            <input type="password" name="password_confirmation" class="form-control"
                                   placeholder="Confirm Password" required>
                        </div>

                        <div class="mb-3">
                            <button type="submit" class="btn" style="width: 100%; background-color: rgb(12, 185, 12);">
                                Sign Up
                            </button>
                        </div>
                    </form>

                </div>

            </div>
        </div>
    </div>

@endsection
@push('front-js')
    <script>
        function toggleSearch() {
            const searchContainer = document.getElementById("searcher");
            if (searchContainer.style.display === "none" || searchContainer.style.display === "") {
                searchContainer.style.display = "block";
            } else {
                searchContainer.style.display = "none";
            }
        }
    </script>
@endpush
