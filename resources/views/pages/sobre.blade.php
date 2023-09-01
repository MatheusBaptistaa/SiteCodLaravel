@extends('templates.index')
  
@section('contents')
<section id="sobre">
  <div class="center" >
    <div class="video-container">
        <div class="video-wrapper">
          <iframe
          width="100%"
          height="750px"
          src="https://www.youtube.com/embed/mHDEDDrGYvo?si=6dre7_vFGKKwQBVQ"
          title="YouTube video player"
          frameborder="0"
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
          allowfullscreen
          ></iframe>
        </div>
    </div>
  </div>
</section>

<script>
    $(document).ready(function() {
      $('#ytplayer').YTPlayer({
        videoURL: 'mHDEDDrGYvo', // Código do vídeo do YouTube após "watch?v="
        containment: '.video-background',
        showControls: false,
        autoPlay: true,
        mute: true,
        startAt: 0,
        opacity: 1
      });
    });
  </script>

<script>
    // Verifica se há um fragmento na URL (âncora) e rola até ele
    if (window.location.hash) {
        var target = document.querySelector(window.location.hash);
        if (target) {
            target.scrollIntoView({ behavior: 'smooth' });
        }
    }
</script>
@endsection