


<!-- <div class="wrapper">

    <div class="hero-text-box">
        <div id='textLoop'>
            <h1>
                <span> LOREM IPSUM ISTEQUE PROEWAGEMO LOREM IPSUM ISTEQUE </span>
                <span> LOREM IPSUM ISTEQUE </span>
            </h1>
        </div>
    </div>

</div> -->

<style>
    .hero-text-box {
        border: 1px solid;
    width: 600px;
    position: relative;
    margin: 65px;
    padding: 25px;
    text-align: center;
    }

    .hero-text-box::before {
        content: "START";
        left: -60px;
        top: -17px;

    }

    .hero-text-box::after {
        content: "END";
        right: -60px;
        bottom: -17px;
    }

    .hero-text-box::before,
    .hero-text-box::after {
        position: absolute;
        width: 80px;
        text-align: center;
        background: #fff;
        color: #000;
        border: 1px solid;
        padding: 10px 15px;
    }
</style>



<script src="<?php echo _ASSETS; ?>js/jquery341.js"></script>
<script src="<?php echo _ASSETS; ?>js/index.js"></script>
<script>

    $('#textLoop > h1 > span').hide();
    var currText = 0;
    var texts = $('#textLoop > h1 > span');
    var element = texts.eq(currText);
    element.fadeIn(500);

    setInterval(function () {
        currText++;
        if (currText > texts.length - 1) currText = 0;
        element.fadeOut(500);
        setTimeout(function () {
            element = texts.eq(currText);
            element.fadeIn(500);
            
        }, 500);
    }, 3000);

</script>

</body>

</html>