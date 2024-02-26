import {scrollTrigger} from "./modules/scrolltrigger.js";
import {videoPlayer} from "./modules/videoPlayer.js";




if(document.body.dataset==='home'){
    videoPlayer();
  } else if (document.body.dataset.page==='gallery'){
    scrollTrigger();
  };