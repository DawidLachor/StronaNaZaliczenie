let canvas, ctx;

function init () {
    canvas = document.getElementById('zegar');
    canvas.width = 300;
    canvas.height = 300;
    ctx = canvas.getContext('2d');

    setInterval(rysuj, 10);
}

function rysuj () {
    let time = (function () {
            let midnight = new Date();
            midnight.setHours(0);
            midnight.setMinutes(0);
            midnight.setSeconds(0);
            midnight.setMilliseconds(0);
            return Date.now() - midnight.getTime();
        })(),
        godzina = time / (60 * 60 * 1000),
        minuta = godzina * 60 % 60,
        sekunda = minuta * 60 % 60,
        c = {x: canvas.width / 2, y: canvas.height / 2};

    ctx.clearRect(0, 0, canvas.width, canvas.height);

    ctx.lineCap = 'round';



    function wskazowkasekund () {
        ctx.fillStyle = 'white';
        ctx.strokeStyle = 'red';
        ctx.lineWidth = 2;

        ctx.beginPath();
        let a = Math.PI * 2 * (sekunda / 60) - Math.PI / 2;
        let v = new Vector(95, a);
        let v2 = new Vector(-20, a);
        ctx.moveTo(v2.getX() + c.x, v2.getY() + c.y);
        ctx.lineTo(v.getX() + c.x, v.getY() + c.y);
        ctx.stroke();
    }

    function wskazowkaminut () {
        ctx.lineWidth = 4;
        ctx.strokeStyle = 'black';
        ctx.beginPath();
        let a = Math.PI * 2 * (minuta / 60) - Math.PI / 2;
        let v = new Vector(95, a);
        ctx.moveTo(c.x, c.y);
        ctx.lineTo(v.getX() + c.x, v.getY() + c.y);
        ctx.stroke();
    }

    function wskazowkagodzin () {
        ctx.lineWidth = 8;
        ctx.strokeStyle = 'black';
        ctx.beginPath();
        let a = Math.PI * 2 * (godzina / 12) - Math.PI / 2;
        let v = new Vector(60, a);
        ctx.moveTo(c.x, c.y);
        ctx.lineTo(v.getX() + c.x, v.getY() + c.y);
        ctx.stroke();
    }
    function obramowanie () {
        // obramowanie
        ctx.lineWidth = 10;
        ctx.strokeStyle = 'black';
        ctx.beginPath();
        ctx.arc(c.x, c.y, 120, 0, Math.PI * 2);
        ctx.stroke();
        ctx.lineWidth = 10;
        ctx.strokeStyle = "#b3b3b3";
        ctx.beginPath();
        ctx.arc(c.x, c.y, 135, 0, Math.PI * 2);
        ctx.stroke();

        // minuty
        ctx.lineWidth = 3;
        for (let i = 0; i < 60; i++) {
            let r = 115,
                l = 5;
            ctx.strokeStyle = 'rgba(0, 0, 0, 0.25)';
            if (i % 5 === 0)
                r -= l,
                    l *= 2,
                    ctx.strokeStyle = 'rgba(0, 0, 0, 0.5)';
            let v = new Vector(r, Math.PI * 2 * (i / 60) - Math.PI / 2);
            ctx.beginPath();
            ctx.moveTo(v.getX() + c.x, v.getY() + c.y);
            v.setMag(r + l);
            ctx.lineTo(v.getX() + c.x, v.getY() + c.y);
            ctx.stroke();
        }

        // liczby
        ctx.font = '20px Roboto san-serif';
        ctx.fillStyle = 'black';
        ctx.textAlign = 'center';
        ctx.textBaseline = 'middle';
        for (let i = 1; i <= 12; i++) {
            let v = new Vector(100, Math.PI * 2 * (i / 12) - Math.PI / 2);
            ctx.fillText(i, v.getX() + c.x, v.getY() + c.y);
        }

        // środek
        ctx.beginPath();
        ctx.arc(c.x, c.y, 3.75, 0, Math.PI * 2);
        ctx.fillStyle = 'white';
        ctx.strokeStyle = 'red';
        ctx.lineWidth = 2.5;
        ctx.fill();
        ctx.stroke();
    }

    wskazowkasekund();
    wskazowkaminut();
    wskazowkagodzin();
    obramowanie();
}
init();
