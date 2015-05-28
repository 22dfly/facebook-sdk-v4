<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('style.css') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>

</head>
<body>
    <div id="container" class="container">

        <div id="content">
            <div class="row" style="width:400px;height:300px;border:2px solid #d8544b;border-radius:10px;line-height:300px;position:fixed;top:32%;left:50%;margin-top:-150px;margin-left:-200px;">
                <?= $this->fetch('content') ?>
            </div>
        </div>

    </div>

    <?= $this->Html->script(['jquery.min.js', 'jquery.cookie.js']) ?>

    <!-- FACEBOOK -->
    <div id="fb-root"></div>
    <script>
    window.fbAsyncInit = function() {
        FB.init({
            appId      : "<?php echo FACEBOOK_APP_ID ?>",
            status     : true, // check login status
            cookie     : true, // enable cookies to allow the server to access the session
            xfbml      : true,  // parse XFBML
            version    : 'v2.3'
        });
    };

    (function(d, s, id){
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) {return;}
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/all.js";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
    </script>
    <!----------- -->
    <?= $this->fetch('script') ?>
</body>
</html>
