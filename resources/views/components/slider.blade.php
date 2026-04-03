<div class="slider-container" id="main-slider">
    <div class="slider-wrapper" id="slider-wrapper">
        @foreach($slides as $slide)
        <div class="slider-slide">
            <img src="{{ $slide['image'] }}" alt="{{ $slide['title'] }}">
            <div class="slider-content">
                <h2>{{ $slide['title'] }}</h2>
                <p>{{ $slide['description'] }}</p>
                <a href="{{ $slide['link'] }}" class="slider-btn">Khám phá</a>
            </div>
        </div>
        @endforeach
    </div>
    
    <button class="slider-nav slider-prev" id="slider-prev" aria-label="Previous slide">❮</button>
    <button class="slider-nav slider-next" id="slider-next" aria-label="Next slide">❯</button>
    
    <div class="slider-dots" id="slider-dots"></div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const wrapper = document.getElementById('slider-wrapper');
        const slides = document.querySelectorAll('.slider-slide');
        const prevBtn = document.getElementById('slider-prev');
        const nextBtn = document.getElementById('slider-next');
        const dotsContainer = document.getElementById('slider-dots');
        
        let currentIndex = 0;
        const totalSlides = slides.length;
        
        // Create dots
        slides.forEach((_, index) => {
            const dot = document.createElement('div');
            dot.classList.add('slider-dot');
            if (index === 0) dot.classList.add('active');
            dot.addEventListener('click', () => goToSlide(index));
            dotsContainer.appendChild(dot);
        });
        
        const dots = document.querySelectorAll('.slider-dot');
        
        function updateDots() {
            dots.forEach((dot, index) => {
                dot.classList.toggle('active', index === currentIndex);
            });
        }
        
        function goToSlide(index) {
            currentIndex = index;
            wrapper.style.transform = `translateX(-${currentIndex * 100}%)`;
            updateDots();
        }
        
        function nextSlide() {
            currentIndex = (currentIndex + 1) % totalSlides;
            goToSlide(currentIndex);
        }
        
        function prevSlide() {
            currentIndex = (currentIndex - 1 + totalSlides) % totalSlides;
            goToSlide(currentIndex);
        }
        
        nextBtn.addEventListener('click', nextSlide);
        prevBtn.addEventListener('click', prevSlide);
        
        // Auto slide interval
        let slideInterval = setInterval(nextSlide, 5000);
        
        // Pause on hover
        const container = document.getElementById('main-slider');
        container.addEventListener('mouseenter', () => clearInterval(slideInterval));
        container.addEventListener('mouseleave', () => slideInterval = setInterval(nextSlide, 5000));
    });
</script>