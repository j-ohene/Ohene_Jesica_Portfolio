
const playerCon = document.querySelector("#player-container");
const player = document.querySelector("video");
const videoControls = document.querySelector("#video-controls");
const playButton = document.querySelector("#play-button");
const pauseButton = document.querySelector ("#pause-button");
const stopButton = document.querySelector ("#stop-button");
const volumeSlider = document.querySelector("#change-vol");
const fullScreen = document.querySelector ("#full-screen");
//functions//
player.controls = false;
//JS loaded, now lets hide the default controls  
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
    //current time is associated with seconds so it would pause then go to the first second//
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

//to find events 

//event listeners//

playButton.addEventListener("click", playVideo);
stopButton.addEventListener("click", stopVideo);
pauseButton.addEventListener("click", pauseVideo);
volumeSlider.addEventListener("change", changeVolume);
(() => {
    let tl = gsap.timeline({
        // yes, we can add it to an entire timeline!
        scrollTrigger: {
          trigger: ".front-end-background",
          pin: true, 
          start: "top top", 
          end: "+=500", //
          scrub: 1, // 
          snap: {
            snapTo: "labels", 
            duration: { min: 0.2, max: 3 },
            delay: 0.2, 
            ease: "power1.inOut", 
          },
        },
    
      
      // add animations and labels to the timeline
      tl.addLabel("start")
        .from(".gear", { scale: 0.3, rotation: 45, autoAlpha: 0 })
        .addLabel("color")
        .from(".gear")
        .addLabel("spin")
        .to(".gear", { rotation: 360 })
        .addLabel("end");

        tl.from("#intro", gsap.to(target, {
          duration:2.5,
          ease: "power1.out",
          y: -50
        }));
        }
   
   
        })();
