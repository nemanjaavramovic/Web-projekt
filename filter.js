if (document.readyState == 'loading') {
    document.addEventListener('DOMContentLoaded', ready)
} else {
    ready()
}



function ready(){
    var btnPizze = document.getElementById("pizze");
    var btnRostilj = document.body.querySelector("#rostilj");
    var btnPanirano = document.body.querySelector("#panirano");
    var btnSendvici = document.body.querySelector("#sendvici");
    var btnSve = document.body.querySelector("#sve");
    var items = document.querySelectorAll(".shop-item");
    btnSve.style.backgroundColor="red"

    btnPizze.addEventListener('click', function (event) {
        showPizze(items);
    });

    btnRostilj.addEventListener('click', function (event) {
        showRostilj(items);
    });

    btnPanirano.addEventListener('click', function (event) {
        showPanirano(items);
    });

    btnSendvici.addEventListener('click', function (event) {
        showSendvici(items);
    });

    btnSve.addEventListener('click', function (event) {
        showSve(items);
    });


    function showPizze(items) {
        btnPizze.style.backgroundColor="red"
        btnRostilj.style.backgroundColor="white"
        btnPanirano.style.backgroundColor="white"
        btnSendvici.style.backgroundColor="white"
        btnSve.style.backgroundColor="white"
        for (var i = 0; items.length; i++) {
            if (items[i].getAttribute('data-order') !== 'pizze') {
                items[i].style.display = "none";
            } else {
                items[i].style.display = "inline";
            }
        }
    }

    function showRostilj(items) {
        btnPizze.style.backgroundColor="white"
        btnRostilj.style.backgroundColor="red"
        btnPanirano.style.backgroundColor="white"
        btnSendvici.style.backgroundColor="white"
        btnSve.style.backgroundColor="white"
        for (var i = 0; items.length; i++) {
            if (items[i].getAttribute('data-order') !== 'rostilj') {
                items[i].style.display = "none";
            } else {
                items[i].style.display = "inline";
            }
        }
    }

    function showPanirano(items) {
        btnPizze.style.backgroundColor="white"
        btnRostilj.style.backgroundColor="white"
        btnPanirano.style.backgroundColor="red"
        btnSendvici.style.backgroundColor="white"
        btnSve.style.backgroundColor="white"
        for (var i = 0; items.length; i++) {
            if (items[i].getAttribute('data-order') !== 'panirano') {
                items[i].style.display = "none";
            } else {
                items[i].style.display = "inline";
            }
        }
    }

    function showSendvici(items) {
        btnPizze.style.backgroundColor="white"
        btnRostilj.style.backgroundColor="white"
        btnPanirano.style.backgroundColor="white"
        btnSendvici.style.backgroundColor="red"
        btnSve.style.backgroundColor="white"
        for (var i = 0; items.length; i++) {
            if (items[i].getAttribute('data-order') !== 'sendvic') {
                items[i].style.display = "none";
            } else {
                items[i].style.display = "inline";
            }
        }
    }

    function showSve(items) {
        btnPizze.style.backgroundColor="white"
        btnRostilj.style.backgroundColor="white"
        btnPanirano.style.backgroundColor="white"
        btnSendvici.style.backgroundColor="white"
        btnSve.style.backgroundColor="red"
        for (var i = 0; items.length; i++) {
            items[i].style.display = "inline";
        }
    }
}
