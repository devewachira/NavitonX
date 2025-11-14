<section class="carousel carousel-slider center fullpage-slider">
    @if($sliders)
        @foreach($sliders as $slider)
            @php
                $titleWords = explode(' ', $slider->title);
                $lastWord = array_pop($titleWords);
            @endphp
            <div class="carousel-item" style="background-image: url({{Storage::url('slider/'.$slider->image)}})" href="#{{$slider->id}}!">
            <div class="overlay"></div> <!-- Dimming overlay -->    
            <div class="slider-content">
                    <h2 class="hero-title">
                        {{ implode(' ', $titleWords) }}
                        <span class="mintylime-accent-text">{{ $lastWord }}</span>
                    </h2>
                    <p class="mintylime-subtitle">{{ $slider->description }}</p>
                </div>
            </div>
        @endforeach
    @else 
        <div class="carousel-item amber indigo-text" style="background-image: url({{ asset('frontend/images/real_estate.jpg') }})" href="#1!">
            <h2>Slider Title goes here</h2>
            <p class="indigo-text">Slider description goes here</p>
        </div>
    @endif
</section>
<!-- Vist codeastro.com for more projects -->

<style>
    /* Make the home slider take the full viewport height */
    .fullpage-slider,
    .carousel.carousel-slider.fullpage-slider {
        height: 100vh;
    }

    .carousel-item {
    position: relative;
    background-size: cover;
    background-position: center center;
    height: 100vh; /* full viewport height */
    width: 100%;
}

.carousel-item .overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: rgba(10, 22, 40, 0.65); /* darker MintyLime overlay for better text contrast */
    z-index: 1;
}

.carousel-item .slider-content {
    position: relative;
    z-index: 2; /* Ensures content is on top of the overlay */
    padding: 20px;
    text-align: center;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center; /* center vertically */
    height: 100%;
}

/* Bigger hero title */
.carousel.carousel-slider .carousel-item h2.hero-title {
    color: var(--ml-text-primary);
    font-size: clamp(3.4rem, 5.5vw, 4.8rem); /* strong but controlled */
    font-weight: 800;
    letter-spacing: 0.04em;
    line-height: 1.05;
    max-width: 960px;
    margin: 0 auto 1.3rem;
    text-shadow: 0 4px 18px rgba(0, 0, 0, 0.9);
}

/* Accent word on its own line inside the hero title */
.carousel.carousel-slider .carousel-item h2.hero-title .mintylime-accent-text {
    display: block;
    margin-top: 0.15em;
    color: var(--ml-primary);
}

.carousel.carousel-slider .carousel-item p.mintylime-subtitle {
    color: var(--ml-text-secondary);
    font-size: 1.7rem; /* noticeably larger description */
    line-height: 1.9;
    max-width: 1000px;
    margin: 0.8rem auto 0;
    text-shadow: 0 3px 14px rgba(0, 0, 0, 0.9);
}

</style>