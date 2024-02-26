import {scrollTrigger} from "./modules/scrolltrigger.js";
import {videoPlayer} from "./modules/videoPlayer.js";
import{cardSlider} from "./modules/cardslider.js";




if(document.body.dataset==='home'){
    videoPlayer();
    cardSlider();
  } else if (document.body.dataset.page==='gallery'){
    scrollTrigger();
  };