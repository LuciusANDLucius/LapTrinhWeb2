<x-layout-admin>
    <div class="card p-4 shadow-sm">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h5 class="fw-bold mb-0 text-uppercase">Quản lý sản phẩm (0192)</h5>
            <div>
                <a href="{{ route('products.create') }}" class="btn btn-primary btn-sm">
                    <span class="material-symbols-outlined v-middle">add</span> Thêm mới
                </a>
                <a href="{{ route('products.trash') }}" class="btn btn-secondary btn-sm">
                    <span class="material-symbols-outlined v-middle">delete</span> Thùng rác
                </a>
            </div>
        </div>

        <div class="table-responsive">
            <table class="table table-hover table-bordered align-middle">
                <thead class="table-dark">
                    <tr>
                        <th width="50">ID</th>
                        <th width="100">Hình ảnh</th>
                        <th>Tên sản phẩm</th>
                        <th>Danh mục</th>
                        <th>Giá bán</th>
                        <th width="180">Hành động</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($products as $product)
                    <tr>
                        <td>{{ $product->id }}</td>
                        <td>
                            {{-- SỬA 1: Đảm bảo đường dẫn ảnh đúng với thư mục trong public --}}
                            <img src="{{ asset('images/products/'.$product->image) }}" class="img-thumbnail" style="max-width: 80px;" onerror="this.src='{{ asset('images/no-image.png') }}'">
                        </td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->category->name ?? 'N/A' }}</td>
                        {{-- SỬA 2: Đổi price_buy thành price cho đúng với cột trong Database (0192product) --}}
                        <td class="text-danger fw-bold">{{ number_format($product->price) }}đ</td>
                        <td>
                            <a href="{{ route('products.edit', $product->id) }}" class="btn btn-sm btn-info text-white" title="Cập nhật">
                                <span class="material-symbols-outlined" style="font-size: 18px;">edit</span>
                            </a>
                            <a href="#" class="btn btn-sm btn-success" title="Trạng thái">
                                <span class="material-symbols-outlined" style="font-size: 18px;">sync</span>
                            </a>
                            <form action="{{ route('products.destroy', $product->id) }}" method="POST" class="d-inline">
                                @csrf @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Xóa vào thùng rác?')">
                                    <span class="material-symbols-outlined" style="font-size: 18px;">delete</span>
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        {{-- Phân trang: Sẽ tự động nhỏ lại nếu bạn đã sửa AppServiceProvider --}}
        <div class="mt-4 d-flex justify-content-center">
            {{ $products->links() }}
        </div>
    </div>
</x-layout-admin>

<style>
    .v-middle { vertical-align: middle; font-size: 18px; }
    /* SỬA 3: Đảm bảo ảnh không bị méo khi hiển thị */
    .table img { object-fit: cover; width: 60px; height: 60px; }
</style>