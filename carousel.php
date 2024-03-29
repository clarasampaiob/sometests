<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="vocabulary.css">
  <link rel="stylesheet" type="text/css" href="dark-green.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  
</head>
<body>

<div class="d-flex justify-content-between fixed-top border-bottom border-dark-subtle">
     <span class="mt-3 mx-3 mb-2">
      <i class="bi bi-bookmark-dash-fill fs-5 header-lesson-icon header-lesson-icon-color"></i>
      <span class="header-lesson-text header-lesson-text-color">Greetings</span>
    </span>
       <i class="bi bi-heart-fill fs-3 mx-3 mb-1 header-favorite-icon header-favorite-icon-color"></i>
</div>



<!-- <div class="d-flex align-items-center justify-content-center vh-100"> -->
<div id="carouselExample" class="carousel slide">
  <div class="carousel-inner">



    <div class="carousel-item active">
      <div class="d-flex flex-column align-items-center justify-content-center vh-100">
        <!-- flex-column to display everythong as block. The rest of the line centralizes the content -->
        
          <blockquote class="blockquote mb-4 text-center">
            <p class="fs-2 fw-bold mb-0">Hello! What's your name?</p>
            <footer class="text-secondary fs-4">Olá! Qual seu nome?</footer>
          </blockquote>
        


          <div class="btn-group mt-5" role="group" aria-label="Basic outlined example">
           <button type="button" class="btn play-button rounded-circle voc-larger-icon mx-2 border border-0 voc-btn-bg">
                <i class="bi bi-volume-up-fill fs-3 text-white" id="playIcon1"></i>
            </button>
            <audio class="audio-element" src="My_AudioRecord.wav"></audio>
            <button type="button" class="btn btn-outline-secondary record1 rounded-circle voc-larger-icon mx-4 border border-0 voc-btn-bg" data-phrase="Hello! What's your name?" data-lang="en" data-number="1" onclick="speechToText(this)">
                <i class="bi bi-mic-fill fs-4 text-white"></i>
                <img src="bars.svg" style="display: none; height: 30px;" class="recording-icon1">
            </button>
            <button type="button" class="btn border border-0 toggle-star voc-larger-icon rounded-circle mx-2 voc-btn-bg" data-star-fill="false">
                <i class="bi bi-star fs-3 text-white"></i>
            </button>
          </div>
        </div>
    </div> 





    <div class="carousel-item">
      <div class="d-flex flex-column align-items-center justify-content-center vh-100">
        
        <blockquote class="blockquote mb-4 text-center">
            <p class="fs-2 fw-bold mb-0">How much is this pair of sneakers?</p>
            <footer class="text-secondary fs-4">Quanto custa o par de tenis?</footer>
          </blockquote>
            
          <div class="btn-group mt-5" role="group" aria-label="Basic outlined example">
            <button type="button" class="btn play-button rounded-circle voc-larger-icon mx-2 border border-0 voc-btn-bg">
                <i class="bi bi-volume-up-fill fs-3 text-white" id="playIcon1"></i>
            </button>
            <audio class="audio-element" src="speech_mono.wav"></audio>
            <button type="button" class="btn btn-outline-secondary record1 rounded-circle voc-larger-icon mx-4 border border-0 voc-btn-bg" data-phrase="How much is this pair of sneakers?" data-lang="en" data-number="2" onclick="speechToText(this)">
                <i class="bi bi-mic-fill fs-4 text-white"></i>
                <img src="../../libs/animations/bars.svg" style="display: none; height: 30px;" class="recording-icon2">
            </button>
            <button type="button" class="btn border border-0 toggle-star voc-larger-icon rounded-circle mx-2 voc-btn-bg" data-star-fill="false">
                <i class="bi bi-star fs-3 text-white"></i>
            </button>
          </div>
        </div>
        </div> 
    



<div class="carousel-item">
  <div class="d-flex flex-column align-items-center justify-content-center vh-100">

        <blockquote class="blockquote mb-4 text-center">
            <p class="fs-2 fw-bold mb-0">Do you like chocolate?</p>
            <footer class="text-secondary fs-4">Gosta de chocolate?</footer>
          </blockquote>
            
          <div class="btn-group mt-5" role="group" aria-label="Basic outlined example">
            <button type="button" class="btn play-button rounded-circle voc-larger-icon mx-2 border border-0 voc-btn-bg">
                <i class="bi bi-volume-up-fill fs-3 text-white" id="playIcon1"></i>
            </button>
            <audio class="audio-element" src="audio.mp3"></audio>
            <button type="button" class="btn btn-outline-secondary record1 rounded-circle voc-larger-icon mx-4 border border-0 voc-btn-bg" data-phrase="Do you like chocolate?" data-lang="fr" data-number="3" onclick="speechToText(this)">
                <i class="bi bi-mic-fill fs-4 text-white"></i>
                <img src="../../libs/animations/bars.svg" style="display: none; height: 30px;" class="recording-icon3">
            </button>
            <button type="button" class="btn border border-0 toggle-star voc-larger-icon rounded-circle mx-2 voc-btn-bg" data-star-fill="false">
                <i class="bi bi-star fs-3 text-white"></i>
            </button>
          </div>
        </div> 
        </div>
    


<div id="alert-container"></div>



</div>
    </div>
    

<div class="carousel-controls">
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</div>




<script>
        // Audio Player
        const playButtons = document.querySelectorAll('.play-button');
        const audioElements = document.querySelectorAll('.audio-element');

        playButtons.forEach((playButton, index) => {
            const playIcon = playButton.querySelector('i');
            const audioElement = audioElements[index];

            playButton.addEventListener('click', function () {
                if (audioElement.paused) {
                    audioElement.play();
                    playIcon.classList.remove('bi-volume-up-fill');
                    playIcon.classList.add('bi-pause-fill');
                } else {
                    audioElement.pause();
                    playIcon.classList.remove('bi-pause-fill');
                    playIcon.classList.add('bi-volume-up-fill');
                }
            });

            audioElement.addEventListener('ended', function () {
                playIcon.classList.remove('bi-pause-fill');
                playIcon.classList.add('bi-volume-up-fill');
            });
        });




        // Set Star Favorite
        let isStarFill = false;
        const toggleButtons = document.querySelectorAll('.toggle-star');

        toggleButtons.forEach((button) => {
            button.addEventListener('click', function () {
                const icon = button.querySelector('i');
                let isStarFill = button.getAttribute('data-star-fill') === 'true';
                // data-star-fill value is compared to true, isStarFill saves that result

                isStarFill = !isStarFill;
                button.setAttribute('data-star-fill', isStarFill);
                // isStarFill receives the opposite value and set it to the data-star-fill

                if (isStarFill) {
                    icon.classList.remove('bi-star');
                    icon.classList.add('bi-star-fill', 'text-warning');
                } else {
                    icon.classList.remove('bi-star-fill', 'text-warning');
                    icon.classList.add('bi-star');
                }
            });
        });




        // Speech to Text Browser JS
        let SpeechRecognition =
          window.SpeechRecognition || window.webkitSpeechRecognition,
          recognition,
          isRecording = false;

        function speechToText(button){
          const phraseUpper = button.getAttribute("data-phrase");
          const phraseLowPoints = phraseUpper.toLowerCase();
          const phraseTrim = phraseLowPoints.replace(/[?!:.,@-]/g, ''); // Remove Ponctuation
          const phrase = phraseTrim.trim();
          const lang = button.getAttribute("data-lang");
          const number = button.getAttribute("data-number");
          let recBtnNum = "record" + number;
          let iconBtnNum = "recording-icon" + number;
          const recordBtn = document.querySelector(`.${recBtnNum}`);
          const recordingIcon = document.querySelector(`.${iconBtnNum}`);
          console.log("Phrase:", phrase);
          console.log("Language:", lang);
          console.log("Number:", number);
          // console.log(recordBtn);
          // console.log("chegou aqui");
          // console.log(isRecording);

          try {
            if (isRecording) {
              recognition.stop(); // Stop the recognition if already recording
              isRecording = false;
              recordingIcon.style.display = "none"; // Hide the recording icon
              recordBtn.querySelector("i").style.display = "inline"; // Show the mic icon
              // console.log("no try");
              // console.log(isRecording);
            } else {
              recognition = new SpeechRecognition();
              recognition.lang = lang; // Set the language to French
              recognition.interimResults = true;
              recognition.continuous = true; // Set continuous listening HERE
              recordingIcon.style.display = "inline"; // Show the recording icon
              recordBtn.querySelector("i").style.display = "none"; // Hide the mic icon
              recognition.start();
              isRecording = true; // Update recording state
              // console.log("no else");
              // console.log(isRecording);
              recognition.onresult = (event) => {
                const speechResult = event.results[0][0].transcript;
                // Detect when interim results
                if (event.results[0].isFinal) {
                  // console.log(speechResult);
                  transcript = speechResult;
                  console.log(transcript);
                  recognition.stop();
                  transcriptClean = transcript.replace(/[.,?!]/g, '');
                  transcriptTrim = transcriptClean.trim();

                  if (transcriptTrim == phrase) {
                    showAlert('Well Done!', 'success'); 
                  } else {
                    showAlert('Try again! Your sentence: ' + transcriptTrim, 'danger');
                  }
                }
              };
              recognition.onspeechend = () => {
                if (isRecording) {
                  recognition.stop(); // Stop the recognition if already recording
                  isRecording = false;
                  recordingIcon.style.display = "none"; // Hide the recording icon
                  recordBtn.querySelector("i").style.display = "inline"; // Show the mic icon
                  // console.log("no speech end");
                  // console.log(isRecording);
                }
              };
              recognition.onerror = (event) => {
                isRecording = false; // Update recording state
                if (event.error === "no-speech") {
                  console.log("No speech was detected. Stopping...");
                } else if (event.error === "audio-capture") {
                  console.log("No microphone was found. Ensure that a microphone is installed.");
                } else if (event.error === "not-allowed") {
                  console.log("Permission to use the microphone is blocked.");
                } else if (event.error === "aborted") {
                  console.log("Listening Stopped.");
                } else {
                  console.log("Error occurred in recognition: " + event.error);
                }
                recordingIcon.style.display = "none"; // Hide the recording icon
                recordBtn.querySelector("i").style.display = "inline"; // Show the mic icon
              };
            }
          } catch (error) {
            console.log(error);
          }
        }


        function showAlert(message, alertType) {
          // Get Alert Container Div
          const alertContainer = document.getElementById('alert-container'); 

          // Create Alert Element.
          const alertDiv = document.createElement('div');
          alertDiv.className = `alert alert-${alertType} text-center`;
          alertDiv.textContent = message;
          alertDiv.style.position = 'fixed';
          alertDiv.style.margin = '0';
          alertDiv.style.left = '0';
          alertDiv.style.right = '0';
          alertDiv.style.bottom = '0';
          alertDiv.style.zIndex = '1000'; // Ensure it's above other elements

          // Append the Alert to the Container.
          alertContainer.appendChild(alertDiv);

          // Automatically close the alert after a set time (e.g., 5 seconds).
          setTimeout(function () {
            alertDiv.remove();
          }, 4000); // Adjust the time in milliseconds as needed.
        }


            
    </script>




</body>
</html>
