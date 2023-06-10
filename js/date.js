function liveTime(){
    const today = new Date();
    let h = today.getHours(); m = today.getMinutes();
    let s = today.getSeconds();

    m = checkTime(m);
    s = checkTime(s);

    document.getElementById('tanggalwaktu').innerHTML = h + ":" + m + ":" + s;
    setTimeout(liveTime, 1000);
}

function checkTime(i){
    if (i < 10 ) i = "0" + i;
    return i;
}