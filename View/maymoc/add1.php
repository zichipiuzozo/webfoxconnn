<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
  <style type="text/css">
    *
       {
        margin: 0;
        padding: 0;
       }
       .hero
       {
          height: 100vh;
          width: 100%;
          background-image: url(../Car/sky.jpg);
          background-size: cover;
          background-position: center;
          position: relative;
          overflow: hidden;
       }
       .hightway
       {
        height: 200px;
        width: 500%;
        background-image: url(../Car/road.jpg);
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        z-index: 1;
        background-repeat: repeat-x;
        animation: hightway 5s linear infinite;
       }
       @keyframes hightway
       {
           100%
           {
            transform: translateX(-3400px);
           }
       }
       .city
       {
        height: 250px;
        width: 500%;
        background-image: url(../Car/city.png);
        position: absolute;
        bottom: 200px;
        left: 0;
        right: 0;
        display: block;
        z-index: 1;
        background-repeat: repeat-x;
        animation: city 20s linear infinite;
       }
       @keyframes city
       {
        100%
        {
            transform: translateX(-1400px);
        }
       }
       .car
       {
        width: 400px;
        left: 50%;
        bottom: 100px;
        transform: translateX(-50%);
        position: absolute;
        z-index: 2;
       }
       .car img
       {
        width: 100%;
        animation: car 1s linear infinite;
       }
       @keyframes car
       {
        100%
        {
          transform: translateY(-1px);
        }
        50%
        {
          transform: translateY(1px);
        }
        0%
        {
          transform: translateY(-1px);
        }
       }
       .wheel
       {
        left: 50%;
        bottom: 178px;
        transform: translateX(-50%);
        position: absolute;
        z-index: 2;
       }
       .wheel img
       {
        width: 72px;
        height: 72px;
        animation: wheel 1s linear infinite;
       }
       @keyframes wheel
       {
        100%
        {
          transform: rotate(360deg);
        }
       }
       .back-wheel
       {
           left: -165px;
           position: absolute;
       }
        .font-wheel
       {
           left: 80px;
           position: absolute;
       }

  </style>
</head>
<body>
   <div class="hero">
      <div class="hightway"></div>
      <div class="city"></div>
    </div>
    <div class="car">
      <img src="../Car/car.png">
    </div>
    <div class="wheel">
      <img src="../Car/wheel.png" class="back-wheel">
      <img src="../Car/wheel.png" class="font-wheel">
    </div>

</body>
</html>