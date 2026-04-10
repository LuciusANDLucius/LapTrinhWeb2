
<x-layout-site title="Sản phẩm">
    <style>
        .page-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
        }

        .filter-layout {
            display: grid;
            grid-template-columns: 280px 1fr;
            gap: 40px;
            align-items: start;
        }

        .filter-sidebar {
            background: var(--mmb-white);
            padding: 24px;
            border-radius: 16px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.05);
            border: 1px solid rgba(0,0,0,0.03);
            position: sticky;
            top: 110px;
            transition: all 0.3s ease;
        }
        
        .filter-group {
            margin-bottom: 24px;
            padding-bottom: 20px;
            border-bottom: 1px dashed #e1e1e1;
        }

        .filter-group:last-of-type {
            border-bottom: none;
            padding-bottom: 0;
        }

        .filter-group h4 {
            font-size: 16px;
            color: var(--mmb-primary);
            margin-top: 0;
            margin-bottom: 15px;
            font-weight: 700;
            position: relative;
        }

        .filter-group input[type="text"],
        .filter-group input[type="number"],
        .filter-group select {
            width: 100%;
            padding: 12px 14px;
            border: 1px solid #e1e1e1;
            border-radius: 10px;
            font-size: 14px;
            transition: all 0.3s;
            background: #fafafa;
            box-sizing: border-box;
            color: var(--mmb-dark);
            font-family: inherit;
        }

        .filter-group input:focus,
        .filter-group select:focus {
            outline: none;
            background: white;
            box-shadow: 0 0 0 3px rgba(30, 55, 153, 0.1);
        }

        .price-inputs {
            display: flex;
            gap: 10px;
            align-items: center;
        }

        .price-inputs span {
            color: #a4b0be;
            font-weight: bold;
        }

        .filter-btn {
            width: 100%;
            background: linear-gradient(135deg, var(--mmb-primary), #3c5cd9);
            color: white;
            border: none;
            padding: 14px;
            border-radius: 10px;
            font-weight: 700;
            cursor: pointer;
            transition: 0.3s;
            text-transform: uppercase;
            letter-spacing: 1px;
            font-size: 14px;
            margin-top: 10px;
        }

        .filter-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(30, 55, 153, 0.3);
        }

        .clear-btn {
            width: 100%;
            background: transparent;
            color: #57606f;
            text-align: center;
            display: block;
            text-decoration: none;
            padding: 12px;
            border-radius: 10px;
            font-weight: 600;
            margin-top: 10px;
            transition: 0.3s;
            border: 1px solid #dfe4ea;
            box-sizing: border-box;
        }
        
        .clear-btn:hover {
            background: #f1f2f6;
            color: var(--mmb-dark);
        }

        .radio-list {
            display: flex;
            flex-direction: column;
            gap: 10px;
            max-height: 200px;
            overflow-y: auto;
            padding-right: 5px;
        }
        
        /* Custom Scrollbar */
        .radio-list::-webkit-scrollbar {
            width: 6px;
        }
        .radio-list::-webkit-scrollbar-track {
            background: #f1f1f1; 
            border-radius: 10px;
        }
        .radio-list::-webkit-scrollbar-thumb {
            background: #c1c1c1; 
            border-radius: 10px;
        }
        .radio-list::-webkit-scrollbar-thumb:hover {
            background: #a8a8a8; 
        }

        .radio-list label {
            display: flex;
            align-items: center;
            gap: 10px;
            cursor: pointer;
            color: #555;
            font-size: 14px;
            transition: 0.2s;
            padding: 2px 0;
        }
        
        .radio-list label:hover {
            color: var(--mmb-accent);
        }
        
        input[type="radio"] {
            accent-color: var(--mmb-accent);
            width: 16px;
            height: 16px;
        }

        .product-grid-main {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(240px, 1fr));
            gap: 25px;
        }

        /* Override product card fixed width */
        .product-grid-main .product-card {
            width: 100% !important;
            box-sizing: border-box;
        }

        .pagination-container {
            margin-top: 50px;
            display: flex;
            justify-content: center;
        }
        
        /* Pagination custom style */
        .pagination-container nav {
            display: flex;
            gap: 5px;
        }

        @media (max-width: 900px) {
            .filter-layout {
                grid-template-columns: 1fr;
            }
            .filter-sidebar {
                position: static;
                margin-bottom: 30px;
            }
        }
    </style>

    <div class="page-header">
        <h2 style="margin:0;">Sản phẩm</h2>
    </div>

    <div class="filter-layout">
        <!-- Sidebar Filter -->
        <aside class="filter-sidebar">
            <form action="{{ route('site.product.index') }}" method="GET">
                <div class="filter-group">
                    <h4>Tìm kiếm</h4>
                    <input type="text" name="keyword" value="{{ request('keyword') }}" placeholder="Nhập tên sản phẩm...">
                </div>

                <x-category-filter />

                <x-brand-filter />

                <x-price-filter />

                <div class="filter-group">
                    <h4>Sắp xếp theo</h4>
                    <select name="sort">
                        <option value="newest" {{ request('sort') == 'newest' ? 'selected' : '' }}>Mới nhất</option>
                        <option value="price_asc" {{ request('sort') == 'price_asc' ? 'selected' : '' }}>Giá: Thấp đến Cao</option>
                        <option value="price_desc" {{ request('sort') == 'price_desc' ? 'selected' : '' }}>Giá: Cao xuống Thấp</option>
                        <option value="oldest" {{ request('sort') == 'oldest' ? 'selected' : '' }}>Cũ nhất</option>
                    </select>
                </div>

                <button type="submit" class="filter-btn">Áp dụng lọc</button>
                <a href="{{ route('site.product.index') }}" class="clear-btn">Xóa bộ lọc</a>
            </form>
        </aside>

        <!-- Main Product Area -->
        <div>
            @if($products->count() > 0)
                <div class="product-grid-main">
                    @foreach ($products as $product_item)
                        <x-product-card :product="$product_item" />
                    @endforeach
                </div>

                <div class="pagination-container">
                    {{ $products->links('pagination::bootstrap-4') }} <!-- Using bootstrap-4 style since default tailwind might not work neatly without tailwind loaded, but standard laravel paginator can usually use simple views -->
                </div>
            @else
                <div style="text-align: center; padding: 60px 20px; background: #fff; border-radius: 16px; border: 1px dashed #dcdde1; box-shadow: 0 4px 15px rgba(0,0,0,0.02);">
                    <div style="font-size: 50px; margin-bottom: 20px; opacity: 0.5;">🔍</div>
                    <h3 style="color: var(--mmb-dark); margin-bottom: 10px;">Không tìm thấy sản phẩm!</h3>
                    <p style="color: #636e72;">Rất tiếc, không có sản phẩm nào phù hợp với điều kiện lọc của bạn.</p>
                    <a href="{{ route('site.product.index') }}" style="display: inline-block; margin-top: 20px; padding: 10px 20px; background: var(--mmb-primary); color: white; text-decoration: none; border-radius: 8px; font-weight: bold;">Xóa tìm kiếm</a>
                </div>
            @endif
        </div>
    </div>

</x-layout-site>