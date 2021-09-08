//---video-------------------------------------------------
var vidElement0 = document.getElementById("video0");
var vidElement1 = document.getElementById("video1");
var vidElement2 = document.getElementById("video2");
var vidElement3 = document.getElementById("video3");

var vidSource0 = "video1.mp4";
var vidSource1 = "video2.mp4";
var vidSource2 = "video3.mp4";
var vidSource3 = "video4.mp4";

vidElement0.src = vidSource0;
vidElement1.src = vidSource1;
vidElement2.src = vidSource2;
vidElement3.src = vidSource3;

vidElement0.style.display = "block";

vidElement0.addEventListener('ended', function(e) {
    vidElement1.play();
	vidElement0.style.display = "none";
    vidElement1.style.display = "block";
});

vidElement1.addEventListener('ended', function(e) {
    vidElement2.play();
	vidElement1.style.display = "none";
    vidElement2.style.display = "block";
});

vidElement2.addEventListener('ended', function(e) {
    vidElement3.play();
	vidElement2.style.display = "none";
    vidElement3.style.display = "block";
});

vidElement3.addEventListener('ended', function(e) {
    vidElement0.play();
	vidElement3.style.display = "none";
    vidElement0.style.display = "block";
});
//---------------------------------------------------------