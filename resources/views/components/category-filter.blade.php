<div class="filter-group">
    <h4>Danh mục</h4>
    <div class="radio-list">
        <label>
            <input type="radio" name="category_id" value="" {{ request('category_id') == '' ? 'checked' : '' }}> Tất cả danh mục
        </label>
        @foreach($categories as $cat)
        <label>
            <input type="radio" name="category_id" value="{{ $cat->id }}" {{ request('category_id') == $cat->id ? 'checked' : '' }}> {{ $cat->name }}
        </label>
        @endforeach
    </div>
</div>
