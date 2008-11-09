<?php header('Content-Type: text/html; charset=utf-8'); ?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
	"http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
	<title>Neil Crosby</title>
	<link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/2.4.0/build/grids/grids-min.css">
	<style>
	  html {
	    font-family: Arial, sans-serif;
	  }
	  
	  h2 {
	    font-size: 107%;
	  }
	
    ol,
	  li {
	    list-style: none;
	    padding: 0;
	    margin: 0 0 1em 0;
	  }
	
    #secondary .module {
      font-size: 93%;
      clear: both;
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
    }

    #secondary .module.camwhore p {
      text-align: center;
    }

    #secondary .module.twitter .hd {
      background: transparent url(images/lozenge_twitter_speech.png) no-repeat 4.3em 0.5em;
    }

    #secondary .module.twitter .hd h3 a {
      background: transparent url(images/favicon_twitter.png) no-repeat left 50%;
      padding-left: 18px;
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

    #secondary .module.delicious  {
      min-height: 42px;
      border-top: 1px solid #ccc;
      border-bottom: 1px solid #ccc;
      background: #eee url(http://images.del.icio.us/static/img/delicious.42px.gif) no-repeat 5px 50%;
      padding: 5px 5px 5px 52px;
    }

    #secondary .module.lastfm  {
      min-height: 21px;
      background: #d20039 url(images/lozenge_lastfm_tl.png) no-repeat left top;
      padding: 0;
      position: relative;
    }

    #secondary .module.lastfm .hd h3 {
			font-size: 75%;
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
      background: #d20039 url(images/lozenge_lastfm_br.png) no-repeat right bottom;
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
    
    #secondary .module.flickr {
      clear: none;
      float: left;
      margin: 0 7px 5px 0;
    }
    
    #secondary .module.flickr .hd {
      display: none;
    }
    
    #secondary .module.flickr .bd {
    }
    
    #secondary .module.flickr .ft {
      display: none;
    }
    
	</style>
</head>
<body>
  <div id="doc2">					
    <div id="hd">
      <h1>Neil Crosby</h1>
    </div>
    <div id="bd">
      <div id="yui-main">
        <div class="yui-b">
          <div class='yui-g'>
            <div class='yui-u first'>
              <h2>Considered Thoughts</h2>

              ##consideredthoughts##
            </div>
            <div class='yui-g' id='secondary'>
              <div id='consciousness' class='yui-u first'>
                <div class='module camwhore'>
                  <div class='hd'>
                    <h2>Cam Whore</h2>
                  </div>
                  <div class='bd'>
                    <p>
                      <img src='http://www.workingwith.me.uk/images/camwhore.jpg' alt='What my laptop sees'>
                    </p>
                  </div>
                  <div class='ft'></div>
                </div>

                <h2>Stream of Consciousness</h2>

                ##streamofconsciousness##
              </div>
              <div id='otherssaid' class='yui-u'>
                <h2>From Elsewhere</h2>

                ##otherssaid##
              </div>
            </div>
          </div>

        </div>
      </div>

    </div>

    <div id="ft">
      <p>Some sort of footer crap</p>
    </div>
  </div>
</body>
</html>