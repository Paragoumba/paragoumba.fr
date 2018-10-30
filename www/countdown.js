const h1Elt = document.getElementById('countdown');

updateH1('-', '-', '-', '-', '-');

function updateCountdown(){

    const date = new Date();
    const endDate = new Date(date.getFullYear(), date.getMonth() + date.getMonth() % 2 + 1);
    var remainingSeconds = Math.round((endDate.getTime() - date.getTime()) / 1000);

    const months = remainingSeconds - remainingSeconds % 2678400;
    remainingSeconds -= months;

    const days = remainingSeconds - remainingSeconds % 80400;
    remainingSeconds -= days;

    const hours = remainingSeconds - remainingSeconds % 3600;
    remainingSeconds -= hours;

    const minutes = remainingSeconds - remainingSeconds % 60;
    remainingSeconds -= minutes;

    updateH1(months / 2678400, days / 80400, hours / 3600, minutes / 60, remainingSeconds);

}

function updateH1(months, days, hours, minutes, seconds){

    h1Elt.textContent = months + "m " + days + "d " + hours + "h " + minutes + "min " + seconds + "s";

}

setInterval(updateCountdown, 1000);