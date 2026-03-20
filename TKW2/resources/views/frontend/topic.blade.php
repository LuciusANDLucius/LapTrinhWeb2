<x-layout-site title="Chủ đề bài viết">

    <div style="margin-bottom: 30px;">
        <h2>Chủ đề bài viết</h2>
        <p style="color: #636e72;">Khám phá các bài viết theo từng chủ đề bạn quan tâm.</p>
    </div>

    <div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(250px, 1fr)); gap: 20px;">
        @foreach ($topics as $topic)
            <a href="#" style="text-decoration: none; color: inherit;">
                <div style="
                    background: white;
                    padding: 30px 20px;
                    border-radius: 15px;
                    text-align: center;
                    box-shadow: 0 4px 15px rgba(0,0,0,0.05);
                    transition: all 0.3s ease;
                    border: 1px solid #f0f0f0;
                " 
                onmouseover="this.style.transform='translateY(-5px)'; this.style.borderColor='#007bff';"
                onmouseout="this.style.transform='translateY(0)'; this.style.borderColor='#f0f0f0';">
                    
                    <div style="
                        width: 60px;
                        height: 60px;
                        background: rgba(0, 123, 255, 0.1);
                        color: #007bff;
                        border-radius: 50%;
                        display: flex;
                        align-items: center;
                        justify-content: center;
                        margin: 0 auto 15px;
                        font-size: 24px;
                        font-weight: bold;
                    ">
                        #
                    </div>

                    <h3 style="margin: 0; font-size: 18px; color: #2d3436;">
                        {{ $topic->name }}
                    </h3>
                    
                    <p style="font-size: 14px; color: #b2bec3; margin-top: 10px;">
                        Xem các bài viết →
                    </p>
                </div>
            </a>
        @endforeach
    </div>

</x-layout-site>