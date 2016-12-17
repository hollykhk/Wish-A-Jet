function myOutput() {
        var x = document.getElementById("frm1");
        var text = "";
        var i;
        for (i = 0; i < x.length ;i++) {
            text += x.elements[i].value + "<br>";
        }
        document.getElementById("demo").innerHTML = text;
}
function mySubmit() {
	document.getElementByID("frm1").style.display = 'none';
	alert("Your information had been submitted!");
	return true;
}
function myIntroduction(){
        $('.js-h2').text('Welcome to Wish-A-Jet Service');
}
myIntroduction(); 
function getLocation(){
 if (navigator.geolocation){
	navigator.geolocation.getCurrentPosition(showPosition);
 }  
}
function showPosition(position){
	x.innerHTML = "Latitude: " + position.coords.latitude +
	"Longitude: " + position.coords.longitude;
}
if (typeof(Storage) !== "undefined"){
	localStorage.setItem("lastname");
	document.getElementById("result").innerHTML =
	localStorage.getItem("lastname");
}
