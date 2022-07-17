function nr25(){
    document.getElementById('imazhi').src="img/025.jpg";
    document.getElementById('hhh1').innerHTML="Customize your drink";
    document.getElementById('pppp1').innerHTML="Make your drink just right with an extra espresso shot, dairy substitute or a dash of your favorite syrup.";
}
function nr50(){
    document.getElementById('imazhi').src="img/050.jpg";
    document.getElementById('hhh1').innerHTML="Brewed hot coffee, bakery item or hot tea";
    document.getElementById('pppp1').innerHTML="Pair coffee cake or an almond croissant with your fresh cup of hot brew.";

}
function nr150(){
    document.getElementById('imazhi').src="img/150.jpg";
    document.getElementById('hhh1').innerHTML="Handcrafted drink, hot breakfast or parfait";
    document.getElementById('pppp1').innerHTML="Have a really good morning with a breakfast sandwich, oatmeal or your favorite drink.";

}
function nr200(){
    document.getElementById('imazhi').src="img/200.jpg";
    document.getElementById('hhh1').innerHTML="Salad, sandwich or protein box";
    document.getElementById('pppp1').innerHTML="Nourish your day with a hearty Chipotle Chicken Wrap or Eggs & Cheese Protein Box.";

}
function nr400(){
    document.getElementById('imazhi').src="img/400.jpg";
    document.getElementById('hhh1').innerHTML="Select merchandise or at-home coffee";
    document.getElementById('pppp1').innerHTML="Take home a signature cup, a bag of coffee or your choice of select coffee accessories.";

}
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
var slides = document.getElementsByClassName("mySlides");
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
