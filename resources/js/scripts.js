var mysong = document.getElementById("mysong");
var icon = document.getElementById("play")

play.onclick = function() {
    if (mysong.paused) {
        mysong.play();
        play.innerHTML = '<i class= "fas fa-pause"></i>';
    } else {
        mysong.pause();
        play.innerHTML = '<i class= "fas fa-play"></i>';
    }
}