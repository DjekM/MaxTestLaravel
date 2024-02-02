
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Informatie personala</title>
<style>
    body {
        width: 100vw;
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .flip-card {
        background-color: transparent;
        width: 500px;
        height: 500px;
    }

    .flip-card-inner {
        width: 100%;
        height: 100%;
        text-align: center;
        transition: transform 0.6s;
        transform-style: preserve-3d;
    }

    .flip-card:hover .flip-card-inner {
        transform: rotateY(180deg);
    }

    .flip-card-front, .flip-card-back {
        position: absolute;
        width: 100%;
        height: 100%;
        backface-visibility: hidden;
    }


    .flip-card-front {
        background-image: url("https://i.pinimg.com/736x/c4/a4/64/c4a4646db022fac3b6f8df25b04f49db.jpg");
        background-position: center;
        background-repeat: no-repeat;
        color: black;
    }

    .flip-card-back {
        background-color: black;
        background-position: center;
        background-repeat: no-repeat;
        color: white;
        transform: rotateY(180deg);
        text-align: center;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    img {
        width: 100px;
        height: 100px;
    }
</style>
</head>
<body>

<div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
    </div>
    <div class="flip-card-back">
        <div class="c">
            <h1>Maxim Vor</h1>
            <p>W-2042c</p>
            <p>IDNP: 7777777777777</p>
            <img src="https://i.pinimg.com/736x/c4/a4/64/c4a4646db022fac3b6f8df25b04f49db.jpg" alt="eu">
        </div>
    </div>
  </div>
</div>

</body>
</html>
a
