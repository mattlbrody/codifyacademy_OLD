function checkTime(i) {
    if (i < 10) {
        i = "0" + i;
    } else if ( i === 0 ) {
        i = 1 + i;
    }
    return i;   
}

function displayTime() {
    var currentTime = new Date();
    var h = currentTime.getHours();
    var m = currentTime.getMinutes();
    var s = currentTime.getSeconds();
    
    // add a zero in front of numbers<10
    m = checkTime(m);
    s = checkTime(s);

    if (h > 12) {
        h -= 12;
    } 

    
    document.getElementById('time').innerHTML = h + ":" + m + ":" + s;
    setTimeout(function () {
        displayTime();
    }, 1000);
}



// hide code 
$('.code').hide();

$('.reveal_code').on('click', function() {
    console.log(this);
    $(this).closest('.code_div').find('.code').slideToggle();
});


    

   

