<!-- Sidebar Start -->
<div class="sidebar pe-4 pb-3">
    <nav class="navbar bg-light navbar-light">
        <a href="/" class="navbar-brand mx-4 mb-3">
            <h3 class="text-primary"><i class="fa fa-hashtag me-2"></i>Ipad Wala</h3>
        </a>
        <div class="navbar-nav w-100">
            <a href="{{route('dashboard')}}" class="nav-item nav-link active"><i
                    class="fa fa-tachometer-alt me-2"></i>Dashboard</a>

            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i
                        class="fa fa-laptop me-2"></i>Category</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="{{route('product-category.index')}}" class="dropdown-item">Index</a>
                    <a href="{{route('product-category.create')}}" class="dropdown-item">Create</a>
                </div>
            </div>

            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i
                        class="fa fa-laptop me-2"></i>Product</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="{{route('product.index')}}" class="dropdown-item">Index</a>
                    <a href="{{route('product.create')}}" class="dropdown-item">Create</a>
                </div>
            </div>

            <a href="{{route('order_detail')}}" class="nav-item nav-link"><i
                    class="fa fa-laptop me-2"></i>Orders</a>

        </div>
    </nav>
</div>
<!-- Sidebar End -->
