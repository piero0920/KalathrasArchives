<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- Change date -->
  <title>Lunes 2021-08-23</title>
  <link rel="stylesheet" href="/css/video.css" type="text/css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>
<body>
  <div id="info">
    <img src="https://i.imgur.com/DuwsyPJ.png" alt="">
  </div> 
  <div class="aaa">
    <div class="donde">
      <div class="container">
        <div class="video-container" id="video-container">
          <div class="playback-animation" id="playback-animation">
            <svg class="playback-icons">
              <use class="hidden" href="#play-icon"></use>
              <use href="#pause"></use>
            </svg>
          </div>
            <!-- Change poster date -->
          <video oncontextmenu="return false;" controls class="video" id="video" preload="metadata" poster="/img/2021-08-23.png">
              <!-- Change src $vod[date] -->
            <source src="<?php include "../include/vod.php"; echo $vod[20210823];?>" type="video/mp4"></source>
          </video>
          <div class="video-upper-controls hidden" id="upper-controls">
              <div class="upper-right">
                <button class="player" data-title="Hide/Show Description" id="eye-button">
                  <svg class="eye-icons">
                    <use href="#hide-eye"></use>
                    <use href="#show-eye"class="hidden"></use>
                  </svg>
                </button>
              </div>  
          </div>
    
          <div class="video-controls hidden" id="video-controls">
            <div class="video-progress">
              <progress id="progress-bar" value="0" min="0"></progress>
              <input class="seek" id="seek" value="0" min="0" type="range" step="1">
              <div class="seek-tooltip" id="seek-tooltip">00:00:00</div>
            </div>
    
            <div class="bottom-controls">
              <div class="left-controls">
                <button class="player"data-title="Play (k)" id="play">
                  <svg class="playback-icons">
                    <use href="#play-icon"></use>
                    <use class="hidden" href="#pause"></use>
                  </svg>
                </button>
    
                <div class="volume-controls">
                  <button data-title="Mute (m)" class="player volume-button" id="volume-button">
                    <svg>
                      <use class="hidden" href="#volume-mute"></use>
                      <use class="hidden" href="#volume-low"></use>
                      <use href="#volume-high"></use>
                    </svg>
                  </button>
    
                  <input class="volume" id="volume" value="1"
                  data-mute="0.5" type="range" max="1" min="0" step="0.01">
                </div>
    
                <div class="time">
                  <time id="time-elapsed">00:00:00</time>
                  <span> / </span>
                  <time id="duration">00:00:00</time>
                </div>
              </div>
    
              <div class="right-controls">
                  <!-- Change Download href="link" -->
                <a style="color:transparent;" target="_blank" href="https://drive.google.com/uc?export=download&id=1PkQVzVB75q4RtPIwFkhdtEhhiXTPm79M">   
                    <button data-title="Download" class="player">
                        <svg>
                            <use href="#download"></use>
                        </svg>
                    </button>
                </a>    
                <button data-title="PIP (p)" class="player pip-button" id="pip-button">
                  <svg>
                    <use href="#pip"></use>
                  </svg>
                </button>
                <button data-title="Full screen (f)" class="player fullscreen-button" id="fullscreen-button">
                  <svg>
                    <use href="#fullscreen"></use>
                    <use href="#fullscreen-exit" class="hidden"></use>
                  </svg>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="donde2">
        <!-- Change poster if chatVivo="https://i.imgur.com/N2Dh5X6.png" | chatMuerto="https://i.imgur.com/LFAlVOa.png" -->
      <video oncontextmenu="return false;" class="video2" id="video2"  muted poster="https://i.imgur.com/N2Dh5X6.png">
          <!-- Change src $chat[date] -->
        <source type="video/mp4" src="<?php include "../include/chat.php"; echo $chat[20210823];?>"></source>
      </video>
    </div>
    <div id="des" class="des">
        <!-- Change title -->
        <h2>INCREIBLE TITULO DE LUNES EN 5 MINUTOS!!!</h2>
        <div class="botones">
            <!-- Change/add/remove parts if needed -->
            <a class="icon-button twitter"><i class="material-icons">filter_1</i><span></span></a>
        </div>
    </div>
  </div>

  <svg style="display: none">
    <defs>
      <symbol id="pause" viewBox="0 0 24 24">
        <path d="M14.016 5.016h3.984v13.969h-3.984v-13.969zM6 18.984v-13.969h3.984v13.969h-3.984z"></path>
      </symbol>

      <symbol id="play-icon" viewBox="0 0 24 24">
        <path d="M8.016 5.016l10.969 6.984-10.969 6.984v-13.969z"></path>
      </symbol>

      <symbol id="volume-high" viewBox="0 0 24 24">
      <path d="M14.016 3.234q3.047 0.656 5.016 3.117t1.969 5.648-1.969 5.648-5.016 3.117v-2.063q2.203-0.656 3.586-2.484t1.383-4.219-1.383-4.219-3.586-2.484v-2.063zM16.5 12q0 2.813-2.484 4.031v-8.063q1.031 0.516 1.758 1.688t0.727 2.344zM3 9h3.984l5.016-5.016v16.031l-5.016-5.016h-3.984v-6z"></path>
      </symbol>

      <symbol id="volume-low" viewBox="0 0 24 24">
      <path d="M5.016 9h3.984l5.016-5.016v16.031l-5.016-5.016h-3.984v-6zM18.516 12q0 2.766-2.531 4.031v-8.063q1.031 0.516 1.781 1.711t0.75 2.32z"></path>
      </symbol>

      <symbol id="volume-mute" viewBox="0 0 24 24">
      <path d="M12 3.984v4.219l-2.109-2.109zM4.266 3l16.734 16.734-1.266 1.266-2.063-2.063q-1.547 1.313-3.656 1.828v-2.063q1.172-0.328 2.25-1.172l-4.266-4.266v6.75l-5.016-5.016h-3.984v-6h4.734l-4.734-4.734zM18.984 12q0-2.391-1.383-4.219t-3.586-2.484v-2.063q3.047 0.656 5.016 3.117t1.969 5.648q0 2.203-1.031 4.172l-1.5-1.547q0.516-1.266 0.516-2.625zM16.5 12q0 0.422-0.047 0.609l-2.438-2.438v-2.203q1.031 0.516 1.758 1.688t0.727 2.344z"></path>
      </symbol>

      <symbol id="fullscreen" viewBox="0 0 24 24">
      <path d="M14.016 5.016h4.969v4.969h-1.969v-3h-3v-1.969zM17.016 17.016v-3h1.969v4.969h-4.969v-1.969h3zM5.016 9.984v-4.969h4.969v1.969h-3v3h-1.969zM6.984 14.016v3h3v1.969h-4.969v-4.969h1.969z"></path>
      </symbol>

      <symbol id="fullscreen-exit" viewBox="0 0 24 24">
      <path d="M15.984 8.016h3v1.969h-4.969v-4.969h1.969v3zM14.016 18.984v-4.969h4.969v1.969h-3v3h-1.969zM8.016 8.016v-3h1.969v4.969h-4.969v-1.969h3zM5.016 15.984v-1.969h4.969v4.969h-1.969v-3h-3z"></path>
      </symbol>

      <symbol id="pip" viewBox="0 0 24 24">
      <path d="M21 19.031v-14.063h-18v14.063h18zM23.016 18.984q0 0.797-0.609 1.406t-1.406 0.609h-18q-0.797 0-1.406-0.609t-0.609-1.406v-14.016q0-0.797 0.609-1.383t1.406-0.586h18q0.797 0 1.406 0.586t0.609 1.383v14.016zM18.984 11.016v6h-7.969v-6h7.969z"></path>
      </symbol>
      
      <symbol id="show-eye" viewBox="0 0 24 24">
      <path d="M15.5 12a3.5 3.5 0 11-7 0 3.5 3.5 0 017 0z"></path><path fill-rule="evenodd" d="M12 3.5c-3.432 0-6.125 1.534-8.054 3.24C2.02 8.445.814 10.352.33 11.202a1.6 1.6 0 000 1.598c.484.85 1.69 2.758 3.616 4.46C5.876 18.966 8.568 20.5 12 20.5c3.432 0 6.125-1.534 8.054-3.24 1.926-1.704 3.132-3.611 3.616-4.461a1.6 1.6 0 000-1.598c-.484-.85-1.69-2.757-3.616-4.46C18.124 5.034 15.432 3.5 12 3.5zM1.633 11.945c.441-.774 1.551-2.528 3.307-4.08C6.69 6.314 9.045 5 12 5c2.955 0 5.309 1.315 7.06 2.864 1.756 1.553 2.866 3.307 3.307 4.08a.111.111 0 01.017.056.111.111 0 01-.017.056c-.441.774-1.551 2.527-3.307 4.08C17.31 17.685 14.955 19 12 19c-2.955 0-5.309-1.315-7.06-2.864-1.756-1.553-2.866-3.306-3.307-4.08A.11.11 0 011.616 12a.11.11 0 01.017-.055z"></path>
      </symbol>
      
      <symbol id="hide-eye" viewBox="0 0 24 24">
      <path d="M8.052 5.837A9.715 9.715 0 0112 5c2.955 0 5.309 1.315 7.06 2.864 1.756 1.553 2.866 3.307 3.307 4.08a.11.11 0 01.016.055.122.122 0 01-.017.06 16.766 16.766 0 01-1.53 2.218.75.75 0 101.163.946 18.253 18.253 0 001.67-2.42 1.607 1.607 0 00.001-1.602c-.485-.85-1.69-2.757-3.616-4.46C18.124 5.034 15.432 3.5 12 3.5c-1.695 0-3.215.374-4.552.963a.75.75 0 00.604 1.373z"></path><path fill-rule="evenodd" d="M19.166 17.987C17.328 19.38 14.933 20.5 12 20.5c-3.432 0-6.125-1.534-8.054-3.24C2.02 15.556.814 13.648.33 12.798a1.606 1.606 0 01.001-1.6A18.305 18.305 0 013.648 7.01L1.317 5.362a.75.75 0 11.866-1.224l20.5 14.5a.75.75 0 11-.866 1.224l-2.651-1.875zM4.902 7.898c-1.73 1.541-2.828 3.273-3.268 4.044a.118.118 0 00-.017.059c0 .015.003.034.016.055.441.774 1.551 2.527 3.307 4.08C6.69 17.685 9.045 19 12 19c2.334 0 4.29-.82 5.874-1.927l-3.516-2.487a3.5 3.5 0 01-5.583-3.949L4.902 7.899z"></path>
      </symbol>
      
      <symbol id="download" viewBox="0 0 24 24">
      <path d="M4.97 11.03a.75.75 0 111.06-1.06L11 14.94V2.75a.75.75 0 011.5 0v12.19l4.97-4.97a.75.75 0 111.06 1.06l-6.25 6.25a.75.75 0 01-1.06 0l-6.25-6.25zm-.22 9.47a.75.75 0 000 1.5h14.5a.75.75 0 000-1.5H4.75z"></path>
      </symbol>
    </defs>
  </svg>
  
  <script src="/js/player.js"></script>
</body>
</html>
