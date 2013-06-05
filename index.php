<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>GGH Test site</title>
    <style>
    body {
	    margin: 0px;
	    padding: 0px;
	    background-color: #F7F7F7;
    }
    body, div, td, th {
	    font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
    }
    #container {
	    width: 960px;
	    margin: 0 auto;
	    background: #fff;
    }
    #header {
	    position: relative;
	    width: 100%;
	    height: 95px;
	    border-bottom: 1px solid #CCC;
	    background-color: #F7F7F7;
    }
    #footer {
	    width: 100%;
	    background: #fff;
	    color: #777;
	    height: 150px;
	    text-align: center;
	    font-size: 0.7em;
	    padding-top: 10px;
    }
    #logo {
	    position: absolute;
	    top: 10px;
	    left: 15px;
	    width: 240px;
	    height: 38px;
	    background-color: #666;
	    color: #fff;
	    text-align: center;
	    vertical-align: middle;
	    padding-top: 12px;
    }
    #nav {
	    position: absolute;
	    bottom: 0;
	    background-color: #CCC;
	    padding-left: 15px;
	    width: 945px;
    }
    #content {
	    background-color: #CEEDF2;
    }
    </style>
    <script type="text/javascript">

        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-41429039-1']);
        _gaq.push(['_setCustomVar', 1, 'username', 'Testuser', 1]);
        _gaq.push(['_trackPageview']);

        (function() {
            var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
        })();

    </script>
</head>

<body>
<div id="container">
	<div id="header">
    	<div id="logo">LOGO 240px by 50px</div>
        <div id="nav">home | page1 | page2 | page3</div>
    </div>
    <div id="content">
    	<?php
            echo 'Current PHP version: ' . phpversion();
        ?>
        <a href="javascript:void(0)" onClick="_gaq.push(['_trackEvent', 'Media play', 'Play',,, false]);">Click me!</a>
    </div>
</div>
<div id="footer">
	This is the footer.
</div>
</body>
</html>
