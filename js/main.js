import {scrollTrigger} from "./modules/scrolltrigger.js";
import {ajaxForm} from "./modules/ajax-form.js";



if(document.body.dataset==='home'){
   
    ajaxForm();
  } else if (document.body.dataset.page==='gallery'){
    scrollTrigger();
  };