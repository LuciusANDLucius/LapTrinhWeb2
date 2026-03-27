<x-layout-admin>
    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="card p-4 shadow-sm">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h5 class="fw-bold mb-0 text-uppercase text-primary">Thêm sản phẩm mới</h5>
                <div>
                    <button type="submit" class="btn btn-primary btn-sm">
                        <span class="material-symbols-outlined v-middle">save</span> Lưu sản phẩm
                    </button>
                    <a href="{{ route('products.index') }}" class="btn btn-secondary btn-sm">
                        <span class="material-symbols-outlined v-middle">arrow_back</span> Quay lại
                    </a>
                </div>
            </div>

            <div class="row">
                <div class="col-md-9">
                    <div class="mb-3">
                        <label class="form-label fw-bold">Tên sản phẩm</label>
                        <input type="text" name="name" class="form-control" placeholder="Nhập tên sản phẩm" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-bold">Mô tả sản phẩm</label>
                        <textarea name="description" class="form-control" rows="5" placeholder="Nhập mô tả chi tiết"></textarea>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-bold">Giá bán (Price)</label>
                            <input type="number" name="price" class="form-control" placeholder="Ví dụ: 200000" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-bold">Giá khuyến mãi (Price Sale)</label>
                            <input type="number" name="price_sale" class="form-control" placeholder="Ví dụ: 150000">
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="mb-3">
                        <label class="form-label fw-bold">Danh mục</label>
                        <select name="category_id" class="form-select" required>
                            <option value="">Chọn danh mục</option>
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-bold">Thương hiệu</label>
                        <select name="brand_id" class="form-select" required>
                            <option value="">Chọn thương hiệu</option>
                            @foreach($brands as $brand)
                                <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-bold">Số lượng (Qty)</label>
                        <input type="number" name="qty" class="form-control" value="1" min="1">
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-bold">Hình ảnh đại diện</label>
                        <input type="file" name="image" class="form-control" onchange="previewImage(this)">
                        <div class="mt-2 text-center">
                            <img id="img-preview" src="{{ asset('images/no-image.png') }}" 
                                 class="img-thumbnail" style="max-height: 150px; display: block; margin: 0 auto;">
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-bold">Trạng thái</label>
                        <select name="status" class="form-select">
                            <option value="1">Xuất bản</option>
                            <option value="2">Chưa xuất bản</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </form>
</x-layout-admin>

<script>
    // Hàm xem trước ảnh khi chọn file
    function previewImage(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                document.getElementById('img-preview').src = e.target.result;
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
</script>

<style>
    .v-middle { vertical-align: middle; font-size: 18px; }
    .form-label { color: #333; }
</style>