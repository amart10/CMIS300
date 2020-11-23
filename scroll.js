var c1 = document.getElementById('card1');
var c2 = document.getElementById('card2');
var c3 = document.getElementById('card3');

var startingX;

function c1handleTouchStart(evt){
    startingX = evt.touches[0].clientX;

};

function c1handleTouchMove(evt) {
    var touch = evt.touches[0];
    // change = Difference between starting point and touching point at moment of swipe
    var change = startingX - touch.clientX;
    // if less than 0 then we are swiping to the right so no need to change
    if (change < 0) {
        return;
    }

    c1.style.left = "-" + change + 'px';
    c2.style.display = 'block';
    c2.style.left = (screen.width - change) + 'px';
    evt.preventDefault();
};

function c1handleTouchEnd(evt) {
    var change = startingX - evt.changedTouches[0].clientX;
    //threshold is value of 1/3 of screen size
    //change is value of how much we are swiping
    var threshold = screen.width / 3;
    if ( change < threshold) {
        c1.style.left = 0;
        c2.style.left = '100%';
        c2.style.display = 'none';
    } else {
        c1.style.transition = 'all .3s';
        c2.style.transition = 'all .3s';
        c1.style.left = '-100%';
        c2.style.left = '0';
        c2.style.display = 'grid';
    }
};


function c2handleTouchStart(evt){
    startingX = evt.touches[0].clientX;
    c1.style.transition = '';
    c2.style.transition = '';
    c1.style.display = 'none';
};

function c2handleTouchMove(evt) {
    var touch = evt.touches[0];
    var change =  touch.clientX - startingX;
    if (change < 0) {
        return;
    }
    c1.style.display = 'grid';
    c1.style.left = (change - screen.width) + 'px';
    c2.style.left = change + 'px';
    evt.preventDefault();
};

function c2handleTouchEnd(evt) {
    var change = evt.changedTouches[0].clientX - startingX;
    var threshold = screen.width / 4;
    if ( change < threshold) {
        c1.style.left = '-100%';
        c1.style.display = 'none';
        c2.style.left = '0';
    } else {
        c1.style.transition = 'all .3s';
        c2.style.transition = 'all .3s';
        c1.style.left = '0';
        c2.style.left = '100%';
    }
};