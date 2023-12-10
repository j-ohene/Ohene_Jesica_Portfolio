//variables//

const playerCon = document.querySelector("#player-container");
const player = document.querySelector("video");
//if theres more thsn 1 video document.querySelectorAll("video")//
const videoControls = document.querySelector("#video-controls");
const playButton = document.querySelector("#play-button");
const pauseButton = document.querySelector ("#pause-button");
const stopButton = document.querySelector ("#stop-button");
const volumeSlider = document.querySelector("#change-vol");
const fullScreen = document.querySelector ("#full-screen");
//functions//
player.controls = false;
  
player.controls = false;
videoControls.classList.remove('hidden')

function playVideo() {
    player.play();
}
function pauseVideo(){
    player.pause();
}
function stopVideo(){
    player.pause();
    player.currentTime = 1;
}
function changeVolume(){
    player.volume = volumeSlider.value;
    console.log(volumeSlider.value);
}
//event listeners//

playButton.addEventListener("click", playVideo);
stopButton.addEventListener("click", stopVideo);
pauseButton.addEventListener("click", pauseVideo);
volumeSlider.addEventListener("change", changeVolume);