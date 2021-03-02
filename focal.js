/*var index = 0;
show();
function show(){ 
	var i;
	var slides = document.getElementsByClassName("slider");
	for(i=0;i<slides.length;i++) {
		slides[i].style.display ="none";
	}
	index = index+1;
	if(index>slides.length){
		index = 1;
	}
	slides[index-1].style.display="block";

	setTimeout(show,2000);
}*/

var nav = document.getElementById('nav');

       window.onscroll = function () {

         if(window.pageYOffset > 100){

          nav.style.position = "fixed";
          nav.style.top = 0;

          }else{
            // nav.style.position = "absolute";
            nav.style.position = 'relative'; //fixed
            nav.style.top = 100;
          }
       }
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
var widhtLi1 , widhtLi2 , widhtLi3 , widhtLi4;
setTimeout(function(){
     window.widhtLi1 =  document.getElementById("liner1").style.width="95%";
}, 100);
setTimeout(function(){
    window.widhtLi2 =  document.getElementById("liner2").style.width="60%";
}, 100);
setTimeout(function(){
    window.widhtLi3 =   document.getElementById("liner3").style.width="80%";
}, 100);
setTimeout(function(){
    window.widhtLi4  =   document.getElementById("liner4").style.width="100%";
}, 100);
	   
	   
	   
var count = 0;
function counter1()
{
document.getElementById("liner1").innerHTML = count + "%";
//    alert(count);
    if(count+"%" != window.widhtLi1)
        count++;
   setTimeout(counter1, 50);
}
function myFunction1() {
    myVar = setTimeout(counter1, 100);
}
myFunction1();



var count2 = 0;
function counter2()
{
document.getElementById("liner2").innerHTML = count2 + "%";
//    alert(count);
    if(count2+"%" != window.widhtLi2)
        count2++;
   setTimeout(counter2, 50);
}
function myFunction2() {
    myVar = setTimeout(counter2, 100);
}
myFunction2();


var count3 = 0;
function counter3()
{
document.getElementById("liner3").innerHTML = count3 + "%";
//    alert(count);
    if(count3+"%" != window.widhtLi3)
        count3++;
   setTimeout(counter3, 50);
}
function myFunction3() {
    myVar = setTimeout(counter3, 100);
}
myFunction3();


var count4 = 0;
function counter4()
{
document.getElementById("liner4").innerHTML = count4 + "%";
//    alert(count);
    if(count4+"%" != window.widhtLi4)
        count4++;
   setTimeout(counter4, 50);
}
function myFunction4() {
    myVar = setTimeout(counter4, 100);
}
myFunction4();




/////////////////////////////////////////////////////////
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("txtMySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}

