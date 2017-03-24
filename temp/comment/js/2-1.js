function show(key) {
    var noti = document.getElementsByClassName('notification')[key];
    var text = document.getElementsByClassName('text-noti')[key];
    noti.style.display = "block";
    text.innerHTML = "Please Login";
}

