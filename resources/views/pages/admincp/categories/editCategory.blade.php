@extends('dashboard_master')
@section('dashboard_content')
<h1 class="medium-heading">Update Category</h1>
<div class="category__wrapper">
    <form class="category__form" action="{{ route('admin.update.category', $editData->id) }}" method="POST">
        @csrf
        <div class="category__info">
            <h4>Basic Information</h4>
            <input class="category__nameInput" type="text" name="cat_name" id="cat_name" value="{{ $editData->name }}" placeholder="Category Name" minlength="3" required>

            @error('cat_name')
            <span class="text-danger">{{ $message }}</span>
            @enderror
            <div class="category__formBtn">
                <input type="submit" value="Update Category">
            </div>
        </div>
        <div class="category__visibility">
            <h4>Visibility</h4>
            <div class="category__visibilityRow">
                <input type="radio" name="category__visibilityOpt" value="1" id="category__visibilityOpt1" {{ ($editData->visibility == 1)? "checked='checked'":"" }}>
                <label for="category__visibilityOpt1">Public</label>
            </div>
            <div class="category__visibilityRow">
                <input type="radio" name="category__visibilityOpt" value="2" id="category__visibilityOpt2" {{ ($editData->visibility == 2)? "checked='checked'":"" }}>
                <label for="category__visibilityOpt2">Hidden</label>
            </div>

            @error('category__visibilityOpt')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
    </form>
</div>
@endsection