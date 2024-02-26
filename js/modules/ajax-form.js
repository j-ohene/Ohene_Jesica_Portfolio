export function ajaxForm (){

const form = document.querySelector("#contact-form");
const feedBack = document.querySelector("#feedback");

function regForm(event) {
event.preventDefault();
console.log("Form called");
const thisform = event.currentTarget;
const url = "contact.php";
//console.log(thisform.elements.fname.value);
const formData= 
"lname=" + thisform.elements.lname.value + 
"&fname="+ thisform.elements.fname.value+
"&email="+thisform.elements.email.value+
"&message="+thisform.elements.city.value;
console.log(formData);
fetch(url,{
method:"POST",
headers:{
    "Content-Type":"application/x-www-form-urlencoded"
},
body: formData
})
.then(response =>response.json())
.then(responseText=> {
console.log(responseText);

if(responseText.errors) {
feedBack.innerHTML ="";
responseText.errors.forEach (error => {
    const errorElement = document.createElement("p");
    errorElement.textContent = error;
    feedBack.appendChild(errorElement);
});
} else{
    form.reset();
    const messageElement = document.createElement("p");
    messageElement.textContent = responseText.message;
    feedBack.appendChild(messageElement);
}
})
.catch(error =>{
console.log(error);
const messageElement = document.createElement("p");
messageElement.textContent = "Whoops, it looks like you may be using an older browser, not connected to the internet or the server is having issues."
});
}

form.addEventListener("submit",regForm);

};