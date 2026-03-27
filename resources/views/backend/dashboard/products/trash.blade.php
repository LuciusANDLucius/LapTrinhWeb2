<x-layout-admin>
    <div class="card p-4 shadow-sm">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h5 class="fw-bold mb-0 text-uppercase text-danger">Thùng rác sản phẩm</h5>
            <a href="{{ route('products.index') }}" class="btn btn-info btn-sm text-white">
                <span class="material-symbols-outlined v-middle">arrow_back</span> Quay lại danh sách
            </a>
        </div>

        <div class="table-responsive">
            <table class="table table-hover table-bordered align-middle">
                <thead class="table-secondary">
                    <tr>
                        <th width="50">ID</th>
                        <th width="100">Hình ảnh</th>
                        <th>Tên sản phẩm</th>
                        <th>Giá bán</th>
                        <th>Ngày xóa</th>
                        <th width="150">Hành động</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($products as $product)
                    <tr>
                        <td>{{ $product->id }}</td>
                        <td>
                            <img src="{{ asset('images/products/'.$product->image) }}" 
                                 class="img-thumbnail" style="width: 60px; height: 60px; object-fit: cover;"
                                 onerror="this.src='{{ asset('images/no-image.png') }}'">
                        </td>
                        <td>{{ $product->name }}</td>
                        <td class="text-danger fw-bold">{{ number_format($product->price) }}đ</td>
                        <td>{{ $product->deleted_at->format('d/m/Y H:i') }}</td>
                        <td>
                            <a href="{{ route('products.restore', $product->id) }}" class="btn btn-sm btn-success" title="Khôi phục">
                                <span class="material-symbols-outlined" style="font-size: 18px;">restore</span>
                            </a>

                            <form action="{{ route('products.forceDelete', $product->id) }}" method="POST" class="d-inline">
                                @csrf @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Bạn có chắc chắn muốn xóa vĩnh viễn sản phẩm này?')">
                                    <span class="material-symbols-outlined" style="font-size: 18px;">delete_forever</span>
                                </button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="6" class="text-center text-muted">Thùng rác trống</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <div class="mt-4 d-flex justify-content-center">
            {{ $products->links() }}
        </div>
    </div>
</x-layout-admin>

<style>
    .v-middle { vertical-align: middle; font-size: 18px; }
</style>