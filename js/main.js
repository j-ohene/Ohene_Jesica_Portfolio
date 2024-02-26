import {scrollTrigger} from "./modules/scrolltrigger.js";
import {videoPlayer} from "./modules/videoPlayer.js";
import {ajaxForm} from "./modules/ajax-form.js";



if(document.body.dataset==='home'){
    videoPlayer();
    ajaxForm();
  } else if (document.body.dataset.page==='gallery'){
    scrollTrigger();
  };