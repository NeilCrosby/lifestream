<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
    "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Neil Crosby</title>
    <link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/2.4.1/build/reset-fonts-grids/reset-fonts-grids.css">
    <link rel='shortcut icon' href='/favicon.ico' type='image/x-icon'>
    <style type="text/css">
        html {
            font-family: Arial, sans-serif;
            background: #101010;
            color: #cfcfcf;
        }

        #doc4 {
            background: #101010;
        }

        #hd {
            margin: 0 4px 2em 4px;
            padding-top: 1em;
            position: relative;
        }
        
        #primary {
        }
        
        #consciousness {
        }
        
        #otherssaid {
        }

        a {
            color: #dd621f;
        }

        h1 {
            font-size: 500%;
            font-weight: bold;
            font-family: Georgia, Palatino, "Palatino Linotype", Times, "Times New Roman", serif;
            letter-spacing: -0.02em;
            position: relative;
            padding-left: 0.6em;
        }

        h1 span {
            font-size: 35%;
            font-weight: normal;
            position: absolute;
            left: 0;
            top: 0.55em;
            /*color: #003;*/
            letter-spacing: 0;
        }

        h1 span span {
            font-size: 100%;
            left: 0;
            top: 1.2em;
        }
        
        #hd ul {
            position: absolute;
            right: 0;
            top: 1.7em;
        }
        
        #hd ul li {
            float: right;
            margin-left: 1em;
        }

        h2 {
            font-size: 138.5%;
            margin: 1em 4px 1em 4px;
            font-family: Georgia, Palatino, "Palatino Linotype", Times, "Times New Roman", serif;
        }

        ol,
        li {
            list-style: none;
            padding: 0;
            margin: 0 0 1em 0;
        }

        .module {
            clear: both;
            margin: 1em 4px 1em 4px;
            overflow: hidden;
        }

        .module .bd p {
            margin: 0.5em 0 0.5em 0;
        }

        .module .hd {
            font-size: 116%;
            margin-bottom: 1em;
            font-family: Georgia, Palatino, "Palatino Linotype", Times, "Times New Roman", serif;
        }

        .module .hd a {
            text-decoration: none;
        }

        .module .hd a:hover {
            text-decoration: underline;
        }

        .module .ft {
            font-size: 85%;
            margin-top: 1em;
        }

        .module {
            padding-bottom: 1em;
            border-bottom: 1px solid #ddd;
        }
        
        .flickr_secondary {
            border: none;
            float: left;
            clear: none;
            margin: 0 5px 9px 4px;
            padding: 0;
        }
        
        .flickr_secondary .bd p,
        .flickr_secondary .bd p * {
            margin: 0;
            padding: 0;
        }
        
        .flickr_secondary .hd,
        .flickr_secondary .ft {
            display: none;
        }

/*
        #secondary .module {
            font-size: 93%;
        }

        #secondary .module * {
            margin: 0;
        }

        #secondary .module h2 {
            margin: 1em 0;
        }

        #secondary .module .hd h3 {
            font-size: 100%;
            padding-bottom: 0.2em;
        }

        #secondary .module .hd h3 a {
            text-decoration: none;
            text-transform: lowercase;
        }

        #secondary .module .bd {
            overflow: hidden;
        }

        #secondary .module .ft {
            font-size: 75%;
        }

        #secondary .module.camwhore  {
            font-size: 100%;
            margin: 0;
        }

        #secondary .module.camwhore p {
            text-align: center;
        }


        #secondary .module.twitter .hd {
            background: transparent url(images/lozenge_twitter_speech.png) no-repeat 3.8em 0.5em;
        }

        #secondary .module.twitter .hd h3 a {
            padding-left: 0.5em;
        }

        #secondary .module.twitter .bd  {
            background: #9ae4e8 url(/images/lozenge_twitter_tl.png) no-repeat left top;
        }

        #secondary .module.twitter .bd p  {
            background: transparent url(/images/lozenge_twitter_tr.png) no-repeat right top;
            padding: 0.5em;
            color: #111;
        }

        #secondary .module.twitter .bd p a {
            text-decoration: none;
            color: #111;
        }

        #secondary .module.twitter .ft  {
            background: #9ae4e8 url(/images/lozenge_twitter_bl.png) no-repeat left bottom;
        }

        #secondary .module.twitter .ft p  {
            background: transparent url(/images/lozenge_twitter_br.png) no-repeat right bottom;
            padding: 0 10px 10px 10px;
            color: #111;
        }

        #secondary .module.twitter.twitter_at_user .hd {
            background-image: url(images/lozenge_twitter_at_user_speech.png);
        }

        #secondary .module.twitter.twitter_at_user .bd  {
            background: #dfeef9 url(/images/lozenge_twitter_at_user_tl.png) no-repeat left top;
        }

        #secondary .module.twitter.twitter_at_user .bd p  {
            background-image: url(/images/lozenge_twitter_at_user_tr.png);
        }

        #secondary .module.twitter.twitter_at_user .ft  {
            background: #dfeef9 url(/images/lozenge_twitter_at_user_bl.png) no-repeat left bottom;
        }

        #secondary .module.twitter.twitter_at_user .ft p  {
            background-image: url(/images/lozenge_twitter_at_user_br.png);
        }

        #secondary .module.delicious  {
            min-height: 42px;
            background: url(http://images.del.icio.us/static/img/delicious.42px.gif) no-repeat 5px 50%;
            padding: 5px 5px 5px 52px;
        }

        #secondary .module.github  {
            min-height: 42px;
            background: url(/images/favicon_github.png) no-repeat 5px 50%;
            padding: 5px 5px 5px 52px;
        }

        #secondary .module.lastfm  {
            min-height: 21px;
            background: #d20039 url(images/lozenge_lastfm_tl.png) no-repeat left top;
            padding: 0;
            position: relative;
        }

        #secondary .module.lastfm .hd h3 {
            font-size: 85%;
            padding: 5px 5px 3px 26px;
        }

        #secondary .module.lastfm .hd h3 span {
            position: absolute;
            left: 5px;
            top: 1em;
            background-image: url(images/favicon_lastfm.png);
            width: 16px;
            height: 16px;
            text-indent: -9000px;
        }

        #secondary .module.lastfm .hd h3 a {
            color: #eee;
        }

        #secondary .module.lastfm .bd {
            font-size: 75%;
            color: #eee;
            background: #d20039 url(images/lozenge_lastfm_tl.png) no-repeat right bottom;
            padding: 0 5px 5px 26px;
        }

        #secondary .module.upcoming  {
            padding: 5px;
            position: relative;
        }

        #secondary .module.upcoming .hd {
            padding-left: 4em;
        }

        #secondary .module.upcoming .ft {
            padding-left: 5.2em;
        }

        #secondary .module.upcoming .bd p {
            padding-left: 4em;
        }

        #secondary .module.upcoming .bd p.date {
            position: absolute;
            left: 0;
            top: 0.3em;
            padding:  0 0 0.4em 0;
            width: 1.9em;
            text-align: center;
            font-size: 200%;
            font-weight: bold;
            border: 1px solid black;
            background: #efefef;
            color: #101010;
        }

        #secondary .module.upcoming .bd p.date span {
            display: block;
            font-size: 35%;
            font-weight: bold;
            background: #d20039;
            padding: 3px 0;
            margin-bottom: 0.8em;
            color: #fff;
        }

        #secondary .module.flickr .bd li {
            float: left;
            height: 75px;
        }

        #secondary #consciousness .module.flickr .bd li {
            height: auto;
        }

        #secondary .module.flickr .ft {
            clear: both;
        }
*/
        .module.thetenwordreview {
            background: #8c288b;
            color: #f8f3f8;
            border: 1px solid black;
            position: relative;
        }

        #primary .module.thetenwordreview {
            padding: 0;
            border: 1px solid black;
        }

        .module.thetenwordreview .hd {
            margin: 0.5em 10px 0 70px;
            font-size: 115%;
            font-weight: bold;
        }

        .module.thetenwordreview .hd h3 {
            font-weight: bold;
        }

        .module.thetenwordreview .hd h3 a {
            color: #f8f3f8;
            text-decoration: none;
        }

        .module.thetenwordreview .bd {
            margin: 0.5em 10px 0.5em 70px;
        }

        .module.thetenwordreview .bd p.icon {
            position: absolute;
            top: 5px;
            left: 10px;
        }

        .module.thetenwordreview .bd p.icon a img {
            border: 1px solid #8888bb;
        }

        .module.thetenwordreview .ft {
            margin: 0.5em 10px 0.5em 70px;
            font-size: 75%;
        }

        iframe {
            border: none;
        }

    </style>
</head>
<body>
    <div id="doc4">                   
        <div id="hd">
            <h1><span>Hi, <span>I'm</span></span> Neil Crosby</h1>
            ###events###
            <ul>
                <li><a href="/vcard" rel="me"><img src="/images/vcard.png" alt="Neil Crosby's vCard" title="Neil Crosby's vCard"></a></li>
                <!--<li><a href="http://upcoming.yahoo.com/user/73013/" rel="me"><img src="/images/ical.png" alt="Neil Crosby's Upcoming Events"></a></li>-->
            </ul>
        </div>
        <div id="bd">
            <div id="yui-main">
                <div class="yui-b">
                    <div class='yui-g'>
                        <div class='yui-u first'>
                            <h2>Recent Blog Posts <a href='/main.rss'><img src='/images/feed-icon-14x14.png' alt='RSS'></a></h2>
                            ##consideredthoughts##
                        </div>
                        <div class='yui-u'>
                            <h2>Some of my Flickr Photos <a href='#TODO'><img src='/images/feed-icon-14x14.png' alt='RSS'></a></h2>
                            ##flickr##
                        </div>

<!--
                        <div class='yui-g' id='secondary'>
                            <div id='consciousness' class='yui-u first'>
                                <h2>Stream of Consciousness <a href='/stream-of-consciousness.rss'><img src='/images/feed-icon-14x14.png' alt='RSS'></a></h2>
                                ##streamofconsciousness##
                            </div>
                            <div class='yui-u' id='otherssaid'>
                                <h2>From Elsewhere <a href='/others-said.rss'><img src='/images/feed-icon-14x14.png' alt='RSS'></a></h2>
                                ##otherssaid##
                            </div>
                        </div>
-->
                    </div>
                </div>
            </div>
        </div>
        <div id="ft">
            <p>
                Being an automagically updating collection of things written by, about, or simply liked by <a href="/vcard" rel="me">Neil Crosby</a>.
            </p>
        </div>
    </div>
</body>
</html>