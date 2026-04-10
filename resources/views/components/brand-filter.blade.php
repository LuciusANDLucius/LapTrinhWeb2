<div class="filter-group">
    <h4>Thương hiệu</h4>
    <div class="radio-list">
        @foreach ($brands as $brand)
            <label>
                <input type="radio" name="brand_id" value="{{ $brand->id }}" 
                    {{ request('brand_id') == $brand->id ? 'checked' : '' }}>
                {{ $brand->name }}
            </label>
        @endforeach
    </div>
</div>