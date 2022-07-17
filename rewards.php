<?php include_once("include/navbar.php");
?>

<head>
    <link rel="stylesheet" href="css/style-rewards.css">
</head>
<div class="star">
    <h4>STARBUCKS® REWARDS</h4>
</div>

<div class="content-r">
    <div class="text-rewards">
        <h1>
            FREE COFFEE
            IS A TAP AWAY</h1>
        <p>Join now to start earning Rewards.</p>
        <a href="">
            <button>Join Now</button>

        </a>
        <h3>Or join in the app for the best experience</h3>
    </div>
    <div class="foto-s">
        <img src="img/star.PNG" alt="star">
    </div>

</div>

<div class="content-rew">
    <div class="text-rew">
        <h1>Getting started is easy</h1>
        <p>Earn Stars and get rewarded in a few easy steps. </p>
    </div>
    <div class="cartss">
        <div class="cart">
            <img src="img/1.png" alt="1">
            <h4>Create an account</h4>
            <p>To get started, join now. You can also join in the app to
                get
                access to the full range of Starbucks® Rewards benefits.</p>
        </div>
        <div class="cart">
            <img src="img/2.png" alt="2">
            <h4>Order and pay how you’d like</h4>
            <p>Use cash, credit/debit card or save some time and pay
                right through the app. You’ll collect Stars all ways.
                Learn how</p>
        </div>
        <div class="cart">
            <img src="img/3.png" alt="3">
            <h4>Earn Stars, get Rewards</h4>
            <p>As you earn Stars, you can redeem them for Rewards—like
                free food, drinks, and more. Start redeeming with as
                little as 25 Stars!</p>
        </div>
    </div>
</div>

<div class="fav-coffe">
    <div class="text-coffe">
        <h1>Get your favorites for free</h1>
    </div>
    <div class="list-coffe">

        <button onclick="nr25()">25</button>
        <button onclick="nr50()">50</button>
        <button onclick="nr150()">150</button>
        <button onclick="nr200()">200</button>
        <button onclick="nr400()">400</button>

    </div>
</div>

<div class="caffes">
    <div class="fotot-ushqimeve">
        <img id="imazhi" src="img/025.jpg" alt="">
        <h1 id="hhh1">Customize your drink</h1>
        <p id="pppp1">
            Make your drink just right with an extra espresso shot,
            dairy substitute or a dash of your favorite syrup.</p>
    </div>
</div>

<div class="extra">
    <div class="extra-text">
        <h1>Endless Extras</h1>
        <p>Joining Starbucks® Rewards means unlocking access to
            exclusive benefits. Say hello to easy ordering, tasty
            Rewards and—yes, free coffee.</p>
    </div>
    <div class="extrass">
        <div class="cart">
            <img src="img/fun.png" alt="1" style="width: 40%">
            <h4>Fun freebies</h4>
            <p>Not only can you earn free coffee, look forward to a
                birthday
                treat plus coffee and tea refills.</p>
            <a class="aa" href="">Learn more</a>
        </div>

        <div class="cart">
            <img src="img/tel.png" alt="1" style="width: 40%">
            <h4>Order & pay ahead</h4>
            <p>Enjoy the convenience of in-store, curbside or drive-thru
                pickup at select stores.</p>
            <a class="aa" href="">Learn more</a>
        </div>

        <div class="cart">
            <img src="img/cake.png" alt="1" style="width: 40%">
            <h4>Get to free faster</h4>
            <p>Earn Stars even quicker with Bonus Star challenges,
                Double Star Days and exciting games.</p>
            <a class="aa" href="">Learn more</a>
        </div>
    </div>
</div>

<div class="slideshow-container">

    <div class="mySlides fade">
        <div class="numbertext">1 / 3</div>
        <img src="img/slider-1.jpg" style="width:70%">

    </div>

    <div class="mySlides fade">
        <div class="numbertext">2 / 3</div>
        <img src="img/slider-2.jpg" style="width:70%">

    </div>

    <div class="mySlides fade">
        <div class="numbertext">3 / 3</div>
        <img src="img/slider-3.jpg" style="width:70%">

    </div>



</div>

<br>

<div style="text-align:center">
    <span class="dot" onclick="currentSlide(1)"></span>
    <span class="dot" onclick="currentSlide(2)"></span>
    <span class="dot" onclick="currentSlide(3)"></span>
</div>
<script src="js/main.js"></script>
<hr>



<?php include_once("include/footer.php");
?>