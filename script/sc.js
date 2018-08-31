var i=0;
var text="I Need a";
var speed=300;
function typeWriter(){
  if(i<text.length){
    document.getElementById('top').innerHTML +=text.charAt(i);
    i++;
    setTimeout(typeWriter,speed);
  }
}
