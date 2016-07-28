 function alertMe(){
 	alert("It's working.");
 }

  function changeImage(element) {
     element.src = element.bln ? "images/taken.png" : "images/user.png" ;
     element.bln = !element.bln;  /* assigns opposite boolean value always */
 }