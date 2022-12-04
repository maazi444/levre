@extends('dashboard_master')
@section('dashboard_content')
<h1 class="medium-heading">Add Products</h1>
<div class="category__wrapper">
    <form class="category__form" action="{{ route('admin.store.product') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="category__info">
            <h4>Basic Information</h4>
            <div class="product__info">
                <!-- Product Name Start -->
                <input class="category__nameInput" type="text" name="prod_name" id="prod_name" placeholder="Product Name" minlength="3" required>
                <!-- Product Name End -->

                <!-- Product Category Start -->
                <select class="category__nameInput" name="prod_category" id="prod_category" required>
                    <option value="" selected="" disabled>Product Category</option>
                    @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
                <!-- Product Category End -->
            </div>

            <!-- Product Description Start -->
            <textarea class="category__nameInput" name="prod_desc" id="prod_desc" cols="30" rows="10" placeholder="Product description" required>Product description goes here...</textarea>
            <!-- Product Description End -->

            <!-- Product Price & Quantity Start -->
            <div class="product__info">
                <!-- Product Price Start -->
                <input class="category__nameInput" type="number" name="prod_price" id="prod_price" placeholder="Product Price: $10" required>
                <!-- Product Price End -->

                <!-- Product Quantity Start -->
                <input class="category__nameInput" type="number" name="prod_quantity" id="prod_quantity" placeholder="Product Quantity: 10" required>
                <!-- Product Quantity End -->
            </div>
            <!-- Product Price & Quantity End -->

            @error('prod_name')
            <span class="text-danger">{{ $message }}</span>
            @enderror
            <!-- Add Product Btn Start -->
            <div class="category__formBtn">
                <input type="submit" value="Add Product">
            </div>
            <!-- Add Product Btn End -->
        </div>
        <div class="category__visibility">
            <h4>Image</h4>
            <div class="category__visibilityRow">
                <label for="image" class="product__imageLabel">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                        <path fill-rule="evenodd" d="M1.5 6a2.25 2.25 0 012.25-2.25h16.5A2.25 2.25 0 0122.5 6v12a2.25 2.25 0 01-2.25 2.25H3.75A2.25 2.25 0 011.5 18V6zM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0021 18v-1.94l-2.69-2.689a1.5 1.5 0 00-2.12 0l-.88.879.97.97a.75.75 0 11-1.06 1.06l-5.16-5.159a1.5 1.5 0 00-2.12 0L3 16.061zm10.125-7.81a1.125 1.125 0 112.25 0 1.125 1.125 0 01-2.25 0z" clip-rule="evenodd" />
                    </svg>
                </label>
                <h3>Product Image</h3>
                <!-- Product Image Start -->
                <input type="file" id="image" name="image" class="product__imageInput" required>
                <!-- Product Image End -->
            </div>
            <img class="product_previewImage" id="showImage" src="{{ (!empty($user->image))? url('upload/images/'.$user->image) : url('upload/no_image.jpg') }}">
        </div>
    </form>
</div>

<script>
    $(document).ready(function() {
        $('#image').change(function(e) {
            let reader = new FileReader();
            reader.onload = function(e) {
                $('#showImage').attr('src', e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    });
</script>
@endsection