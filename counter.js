function start() {
    countdown();
}

function stop() {
    clearTimeout(timerI)
}
sectotal = 5;

function countdown() {
    var secs = sectotal;

    function timer() {
        secs--;
        $("#counter").html("(" + secs + ")")


        if (secs > 0) {
            timerI = setTimeout(timer, 1000);
        } else {
            alert('repeat!')
            secs = sectotal
            countdown();
        }
    }
    timer();
}