// IMAGE SLIDER 

var i = 0;
var images = [];
var time = 3000;

images[0] = '/img/image1.jpg';
images[1] = '/img/image2.jpg';
images[2] = '/img/image3.jpg';
images[3] = '/img/image4.jpg';
images[4] = '/img/image5.jpg';
images[5] = '/img/image6.jpg';


function changeImage() {

    document.getElementById("slider").src = images[i];

    if(i < images.length - 1) {
        i++;
    } else {
        i = 0;
    }
    
    setTimeout("changeImage()", time);
}

window.onload = changeImage;

// END OF IMAGE SLIDER


