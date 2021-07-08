<?php include('header.php'); ?>

<main class="video" tabindex="-1">
    <h1 class="visually-hidden">Vídeo</h1>
    <div class="container">
        <div id="video-thumb" style="background-image: url('https://img.youtube.com/vi/8c6ySS2AxF0/maxresdefault.jpg');" aria-hidden="true"></div>
        <div class="player" aria-hidden="true">
            <div id="player" data-id="8c6ySS2AxF0"></div>
        </div>
        <div class="play-button">
            <button class="play-btn" href="https://www.youtube.com/watch?v=8c6ySS2AxF0" data-fancybox="video" aria-label="Play Vídeo">
                <i class="fas fa-play"></i>
            </button>
        </div>
    </div>
</main>

<?php include('footer.php'); ?>