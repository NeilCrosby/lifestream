<?php header('Content-Type: text/html; charset=utf-8'); ?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
	"http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
	<title>Neil Crosby</title>
	<link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/2.4.1/build/reset-fonts-grids/reset-fonts-grids.css">
    <link rel='shortcut icon' href='/favicon.ico' type='image/x-icon'>
	<style>
	  html {
	    font-family: Arial, sans-serif;
	  }
	 
		#hd {
			margin: 2em 4px 2em 4px;
		}
	
		h1 {
	    font-size: 300%;
	    font-weight: bold;
	  }
	  
	  h2 {
	    font-size: 107%;
      margin: 1em 4px 1em 4px;
      font-weight: bold;
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
    
    /*#secondary .module.flickr {
      clear: none;
      float: left;
      margin: 0;
    }
    
    #secondary .module.flickr .hd {
      display: none;
    }
    
    #secondary .module.flickr .bd {
    }
    
    #secondary .module.flickr .ft {
      display: none;
    }*/
    
    #secondary .module.flickr .bd li {
      float: left;
      height: 75px;
    }
    
    #secondary .module.flickr .ft {
      clear: both;
    }
    
    .module.thetenwordreview {
			background: #8c288b;
    	color: #f8f3f8;
			border: 1px solid black;
			position: relative;
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
    
	</style>
</head>
<body>
  <div id="doc4">					
    <div id="hd">
      <h1>Neil Crosby</h1>
			<p>
				An automagically updating collection of things that I've either created, liked or had written about <a href="/vcard" rel="me">Neil Crosby</a>.
			</p>
    </div>
    <div id="bd">
      <div id="yui-main">
        <div class="yui-b">
          <div class='yui-g'>
            <div class='yui-u first'>
              <h2>Considered Thoughts <a href='/main.rss'><img src='/images/feed-icon-14x14.png' alt='RSS'></a></h2>

              <ol>
		<li class='module thetenwordreview' style='background-color: #8c288b'>
		  <div>
  		  <div class='hd'>
  		    <h3><a href='http://thetenwordreview.com/reviews/movie/high+school+musical+3#ri10053'>High School Musical 3 - a Movie review by workingwithme</a></h3>
  		  </div>
  		  <div class='bd'>
		    	More downbeat than previous two. Efron does Angry Bacon dance.
					<p class='icon'><a href='http://thetenwordreview.com/users/workingwithme'><img src='http://thetenwordreview.com/images/icons/workingwithme.png' alt='workingwithme&apos;s icon'></a></p>
  		  </div>
			  <div class='ft'>
	    		<p>Sat, 08 Nov 2008 14:07:10 -0800</p>
        </div>
      </div>
		</li>
		<li class='module thetenwordreview' style='background-color: #8c288b'>
		  <div>
  		  <div class='hd'>
  		    <h3><a href='http://thetenwordreview.com/reviews/game/call+of+duty+4#ri9859'>Call of Duty 4 - a Game review by workingwithme</a></h3>
  		  </div>
  		  <div class='bd'>
		    	Great fun, best played in multi-player with co-workers. "Frag Out!"
					<p class='icon'><a href='http://thetenwordreview.com/users/workingwithme'><img src='http://thetenwordreview.com/images/icons/workingwithme.png' alt='workingwithme&apos;s icon'></a></p>
  		  </div>
			  <div class='ft'>
	    		<p>Thu, 06 Nov 2008 06:50:58 -0800</p>
        </div>
      </div>
		</li>
		<li class='module thetenwordreview' style='background-color: #000000'>
		  <div>
  		  <div class='hd'>
  		    <h3><a href='http://thetenwordreview.com/reviews/game/fable+2#ri9858'>Fable 2 - a Game review by workingwithme</a></h3>
  		  </div>
  		  <div class='bd'>
		    	Free-roaming RPG of "One Man and his Dog". Here boy!
					<p class='icon'><a href='http://thetenwordreview.com/users/workingwithme'><img src='http://thetenwordreview.com/images/icons/workingwithme.png' alt='workingwithme&apos;s icon'></a></p>
  		  </div>
			  <div class='ft'>
	    		<p>Thu, 06 Nov 2008 06:42:16 -0800</p>
        </div>
      </div>
		</li>
		<li class='module thetenwordreview' style='background-color: #87c80a'>
		  <div>
  		  <div class='hd'>
  		    <h3><a href='http://thetenwordreview.com/reviews/movie/breed+2001#ri9788'>The Breed (2001) - a Movie review by workingwithme</a></h3>
  		  </div>
  		  <div class='bd'>
		    	Super low-budget, terrible acting, somehow laughably watchable vampire detective story.
					<p class='icon'><a href='http://thetenwordreview.com/users/workingwithme'><img src='http://thetenwordreview.com/images/icons/workingwithme.png' alt='workingwithme&apos;s icon'></a></p>
  		  </div>
			  <div class='ft'>
	    		<p>Wed, 05 Nov 2008 13:05:03 -0800</p>
        </div>
      </div>
		</li>
		<li class='module thetenwordreview' style='background-color: #87c80a'>
		  <div>
  		  <div class='hd'>
  		    <h3><a href='http://thetenwordreview.com/reviews/concept/blogging#ri9702'>Blogging - a Concept review by workingwithme</a></h3>
  		  </div>
  		  <div class='bd'>
		    	A way to teach and to learn. Just keep writing.
					<p class='icon'><a href='http://thetenwordreview.com/users/workingwithme'><img src='http://thetenwordreview.com/images/icons/workingwithme.png' alt='workingwithme&apos;s icon'></a></p>
  		  </div>
			  <div class='ft'>
	    		<p>Mon, 03 Nov 2008 07:02:59 -0800</p>
        </div>
      </div>
		</li>
		<li class='module'>
		  <div>
		    <div class='hd'>
			    <h3><a href='http://feeds.feedburner.com/~r/TheCodeTrain/~3/440224472/'>How to Automatically Take Photos Using Your Mac’s Webcam</a></h3>
			  </div>
			  <div class='bd'>
			    On friday, Norm happened across one of my automated photos on Flickr and asked me how I did it. Because I realised that I couldn&#8217;t actually remember exactly how everything fitted together I decided to take a look at it again this weekend and actually write things up this time. So, here&#8217;s how to do [...]
			  </div>
			  <div class='ft'>
			    <p>Sun, 02 Nov 2008 11:34:47 -0800</p>
			  </div>
			</div>
		</li>
		<li class='module'>
		  <div>
		    <div class='hd'>
			    <h3><a href='http://feeds.feedburner.com/~r/TheCodeTrain/~3/435041342/'>Five ways to make offline working easier</a></h3>
			  </div>
			  <div class='bd'>
			    Nowadays an &#8220;always on&#8221; existence is far less of a pipe dream than it was even a year ago. Usable wireless hotspots have popped up everywhere and many of us have data tariffs on our mobile phones. It&#8217;s no surprise then that many people simply expect to always have a network connection and [...]
			  </div>
			  <div class='ft'>
			    <p>Tue, 28 Oct 2008 11:15:14 -0700</p>
			  </div>
			</div>
		</li>
		<li class='module thetenwordreview' style='background-color: #8c288b'>
		  <div>
  		  <div class='hd'>
  		    <h3><a href='http://thetenwordreview.com/reviews/movie/white+noise+2+the+light#ri9501'>White Noise 2: The Light - a Movie review by workingwithme</a></h3>
  		  </div>
  		  <div class='bd'>
		    	Better than the first film, but that's not saying much.
					<p class='icon'><a href='http://thetenwordreview.com/users/workingwithme'><img src='http://thetenwordreview.com/images/icons/workingwithme.png' alt='workingwithme&apos;s icon'></a></p>
  		  </div>
			  <div class='ft'>
	    		<p>Sun, 26 Oct 2008 14:50:02 -0700</p>
        </div>
      </div>
		</li>
		<li class='module thetenwordreview' style='background-color: #00adef'>
		  <div>
  		  <div class='hd'>
  		    <h3><a href='http://thetenwordreview.com/reviews/movie/cloverfield#ri9489'>Cloverfield - a Movie review by workingwithme</a></h3>
  		  </div>
  		  <div class='bd'>
		    	Camcorder wielding yuppies in New York try not to die.
					<p class='icon'><a href='http://thetenwordreview.com/users/workingwithme'><img src='http://thetenwordreview.com/images/icons/workingwithme.png' alt='workingwithme&apos;s icon'></a></p>
  		  </div>
			  <div class='ft'>
	    		<p>Sun, 26 Oct 2008 06:05:04 -0700</p>
        </div>
      </div>
		</li>
		<li class='module thetenwordreview' style='background-color: #8c288b'>
		  <div>
  		  <div class='hd'>
  		    <h3><a href='http://thetenwordreview.com/reviews/transport/bicycles#ri9486'>Bicycles - a Transport review by workingwithme</a></h3>
  		  </div>
  		  <div class='bd'>
		    	Red light jumping two-wheeled terrors. Good for the environment though.
					<p class='icon'><a href='http://thetenwordreview.com/users/workingwithme'><img src='http://thetenwordreview.com/images/icons/workingwithme.png' alt='workingwithme&apos;s icon'></a></p>
  		  </div>
			  <div class='ft'>
	    		<p>Sun, 26 Oct 2008 05:55:41 -0700</p>
        </div>
      </div>
		</li>
		<li class='module thetenwordreview' style='background-color: #000000'>
		  <div>
  		  <div class='hd'>
  		    <h3><a href='http://thetenwordreview.com/reviews/website/twitter+com#ri9485'>Twitter.com - a Website review by workingwithme</a></h3>
  		  </div>
  		  <div class='bd'>
		    	is writing a ten word review using twitter right now!
					<p class='icon'><a href='http://thetenwordreview.com/users/workingwithme'><img src='http://thetenwordreview.com/images/icons/workingwithme.png' alt='workingwithme&apos;s icon'></a></p>
  		  </div>
			  <div class='ft'>
	    		<p>Sun, 26 Oct 2008 05:49:27 -0700</p>
        </div>
      </div>
		</li>
		<li class='module'>
		  <div>
		    <div class='hd'>
			    <h3><a href='http://feeds.feedburner.com/~r/TheCodeTrain/~3/426575394/'>Why (and how) am I changing my online identity?</a></h3>
			  </div>
			  <div class='bd'>
			    Over the last month or so I&#8217;ve been slowly but surely beginning my migration of usernames from things like &#8220;thevoicewithin&#8221; and &#8220;workingwithme&#8221; to plain and simple &#8220;NeilCrosby&#8221;. The question quite a few people have been asking me is &#8220;Why?&#8221;. Some have called it an identity crisis, others have said that it&#8217;s a [...]
			  </div>
			  <div class='ft'>
			    <p>Mon, 20 Oct 2008 09:20:42 -0700</p>
			  </div>
			</div>
		</li>
		<li class='module flickr'>
		  <div>
  		  <div class='hd'>
  		    <h3><a href='http://www.flickr.com/photos/thevoicewithin/2932661994/'>The best bit of "Doomed"</a></h3>
  		  </div>
  		  <div class='bd'>
		    	<p><a href='http://www.flickr.com/photos/thevoicewithin/2932661994/'><img src='http://farm4.static.flickr.com/3149/2932661994_777b73d077.jpg' width='469' height='351.75' alt=''></a></p>
  		  </div>
			  <div class='ft'>
	    		<p>Sat, 11 Oct 2008 14:48:36 -0700</p>
        </div>
      </div>
		</li>
		<li class='module'>
		  <div>
		    <div class='hd'>
			    <h3><a href='http://feeds.feedburner.com/~r/TheCodeTrain/~3/417743336/'>I won the Moo API competition</a></h3>
			  </div>
			  <div class='bd'>
			    So, it turns out that my Ten Word Review Moo Card Generator won the Moo API competition. Go me! What I won was a pink Flip Video Ultra, a cute little handheld video camera that shoots 2 hours of 640&#215;480 video onto solid state memory. You then get to transfer it over to your [...]
			  </div>
			  <div class='ft'>
			    <p>Sat, 11 Oct 2008 05:59:37 -0700</p>
			  </div>
			</div>
		</li>
		<li class='module'>
		  <div>
		    <div class='hd'>
			    <h3><a href='http://feeds.feedburner.com/~r/TheCodeTrain/~3/411814720/'>VisualHub is dead, long live HandBrake!</a></h3>
			  </div>
			  <div class='bd'>
			    I&#8217;ve been a big fan of VisualHub for about a year now, and before that I was just as much a fan of iSquint, the video encoding software from Techspansion. I&#8217;d paid for the software, talked about it at BarCamps, and generally evangelised about it whenever anyone asked what was good for re-encoding video. [...]
			  </div>
			  <div class='ft'>
			    <p>Sun, 05 Oct 2008 03:56:17 -0700</p>
			  </div>
			</div>
		</li>
		<li class='module'>
		  <div>
		    <div class='hd'>
			    <h3><a href='http://feeds.feedburner.com/~r/IWearCotton/~3/410025371/'>We Built This City…</a></h3>
			  </div>
			  <div class='bd'>
			    When we built this city, we didn&#8217;t go down the traditional route of bricks and mortar. We didn&#8217;t go for the currently in vogue technique of Rock and Roll. We didn&#8217;t even use jam and scones. Instead, we got out our old Lego bricks and started building that way. Sure, it took a [...]
			  </div>
			  <div class='ft'>
			    <p>Fri, 03 Oct 2008 00:00:11 -0700</p>
			  </div>
			</div>
		</li>
		<li class='module'>
		  <div>
		    <div class='hd'>
			    <h3><a href='http://feeds.feedburner.com/~r/TheCodeTrain/~3/408595189/'>Had a ticket but didn’t come to BarCamp London 5? For shame…</a></h3>
			  </div>
			  <div class='bd'>
			    This weekend was BarCamp London 5 (I know, this is the third post on the subject, but keep with me on this) at Ebay&#8217;s office in Richmond. It was a great weekend, with some very high quality talks. In fact, I don&#8217;t think I went to a single session that I didn&#8217;t thoroughly [...]
			  </div>
			  <div class='ft'>
			    <p>Wed, 01 Oct 2008 13:25:37 -0700</p>
			  </div>
			</div>
		</li>
		<li class='module'>
		  <div>
		    <div class='hd'>
			    <h3><a href='http://feeds.feedburner.com/~r/TheCodeTrain/~3/408056316/'>Ten Word Moo Card</a></h3>
			  </div>
			  <div class='bd'>
			    One of the sessions I attended at BarCamp London 5 this weekend was Stefan Magdalinski&#8217;s talk about the Moo API. Ever since I made my first The Ten Word Review Moo Cards by hand I&#8217;ve been wanting to automate the process, but lack of time and incentive has always let me down. So, what changed? [...]
			  </div>
			  <div class='ft'>
			    <p>Wed, 01 Oct 2008 01:32:44 -0700</p>
			  </div>
			</div>
		</li>
		<li class='module'>
		  <div>
		    <div class='hd'>
			    <h3><a href='http://feeds.feedburner.com/~r/TheCodeTrain/~3/405448043/'>WikiSlurp: Slurping Data from Wikipedia for Fun and Profit</a></h3>
			  </div>
			  <div class='bd'>
			    This last weekend I attended BarCamp London 5, where I talked about WikiSlurp, my technique for accessing the wealth of data held within Wikipedia. I currently use WikiSlurp on both Is Neil Annoyed By and The Ten Word Review as a way to pull in additional information about the things described on individual pages. These [...]
			  </div>
			  <div class='ft'>
			    <p>Sun, 28 Sep 2008 07:00:29 -0700</p>
			  </div>
			</div>
		</li>
		<li class='module thetenwordreview' style='background-color: #000000'>
		  <div>
  		  <div class='hd'>
  		    <h3><a href='http://thetenwordreview.com/reviews/game/lego+indiana+jones+the+original+adventures#ri9072'>Lego Indiana Jones: The Original Adventures - a Game review by workingwithme</a></h3>
  		  </div>
  		  <div class='bd'>
		    	Much easier but less fun re-run of Lego Star Wars.
					<p class='icon'><a href='http://thetenwordreview.com/users/workingwithme'><img src='http://thetenwordreview.com/images/icons/workingwithme.png' alt='workingwithme&apos;s icon'></a></p>
  		  </div>
			  <div class='ft'>
	    		<p>Fri, 26 Sep 2008 15:12:53 -0700</p>
        </div>
      </div>
		</li>
		<li class='module flickr'>
		  <div>
  		  <div class='hd'>
  		    <h3><a href='http://www.flickr.com/photos/thevoicewithin/2887296710/'>Ghosts</a></h3>
  		  </div>
  		  <div class='bd'>
		    	<p><a href='http://www.flickr.com/photos/thevoicewithin/2887296710/'><img src='http://farm4.static.flickr.com/3208/2887296710_8dac4aa104.jpg' width='469' height='199.325' alt=''></a></p>
  		  </div>
			  <div class='ft'>
	    		<p>Thu, 25 Sep 2008 02:52:16 -0700</p>
        </div>
      </div>
		</li>
		<li class='module'>
		  <div>
		    <div class='hd'>
			    <h3><a href='http://feeds.feedburner.com/~r/TheCodeTrain/~3/401910525/'>Using Tags with MarsEdit</a></h3>
			  </div>
			  <div class='bd'>
			    Since I do most of my blog writing on the train I don&#8217;t write my posts straight into the editor in my browser (it would be pretty stupid to do that anyway, but that&#8217;s not the point). Instead, I use MarsEdit - an offline editor with support for Wordpress, Movable Type, Blogger, LiveJournal etc. Stupidly, [...]
			  </div>
			  <div class='ft'>
			    <p>Wed, 24 Sep 2008 09:00:37 -0700</p>
			  </div>
			</div>
		</li>
		<li class='module flickr'>
		  <div>
  		  <div class='hd'>
  		    <h3><a href='http://www.flickr.com/photos/thevoicewithin/2884847844/'>Mia, all curled up and asleep</a></h3>
  		  </div>
  		  <div class='bd'>
		    	<p><a href='http://www.flickr.com/photos/thevoicewithin/2884847844/'><img src='http://farm4.static.flickr.com/3029/2884847844_f6f788c854.jpg' width='469' height='351.75' alt=''></a></p>
  		  </div>
			  <div class='ft'>
	    		<p>Wed, 24 Sep 2008 04:03:28 -0700</p>
        </div>
      </div>
		</li>
		<li class='module'>
		  <div>
		    <div class='hd'>
			    <h3><a href='http://feeds.feedburner.com/~r/TheCodeTrain/~3/401782971/'>The Inaugural Post</a></h3>
			  </div>
			  <div class='bd'>
			    For the last year, I&#8217;ve been living in Bedford, but working about 60 miles away in London. Before Becca and I moved out from London, people called us mad, saying that the commute would be hell and that we&#8217;d never spend any time together. As I write, I&#8217;m on the 18:00 East Midlands Trains service [...]
			  </div>
			  <div class='ft'>
			    <p>Tue, 23 Sep 2008 12:17:04 -0700</p>
			  </div>
			</div>
		</li>
		<li class='module'>
		  <div>
		    <div class='hd'>
			    <h3><a href='http://feeds.feedburner.com/~r/IWearCotton/~3/399090372/'>Brains!</a></h3>
			  </div>
			  <div class='bd'>
			    Frankly, I&#8217;m an idiot. When I bought this t-shirt, I bought it because I got a feeling of &#8220;gee whiz, it&#8217;s the scarecrow from The Wizard of Oz but he&#8217;s a zombie now!&#8221;. It wasn&#8217;t until a couple of weeks later that I realised &#8220;oh&#8230; in the books he wanted brains, didn&#8217;t he? [...]
			  </div>
			  <div class='ft'>
			    <p>Sun, 21 Sep 2008 11:28:43 -0700</p>
			  </div>
			</div>
		</li>
		<li class='module flickr'>
		  <div>
  		  <div class='hd'>
  		    <h3><a href='http://www.flickr.com/photos/thevoicewithin/2811792870/'>Caterpillar</a></h3>
  		  </div>
  		  <div class='bd'>
		    	<p><a href='http://www.flickr.com/photos/thevoicewithin/2811792870/'><img src='http://farm4.static.flickr.com/3111/2811792870_e9fb8a22bc.jpg' width='469' height='351.75' alt=''></a></p>
  		  </div>
			  <div class='ft'>
	    		<p>Sat, 30 Aug 2008 11:48:36 -0700</p>
        </div>
      </div>
		</li>
		<li class='module flickr'>
		  <div>
  		  <div class='hd'>
  		    <h3><a href='http://www.flickr.com/photos/thevoicewithin/2807708907/'>SM Happy Place</a></h3>
  		  </div>
  		  <div class='bd'>
		    	<p><a href='http://www.flickr.com/photos/thevoicewithin/2807708907/'><img src='http://farm3.static.flickr.com/2360/2807708907_2902e6d608.jpg' width='469' height='351.75' alt=''></a></p>
  		  </div>
			  <div class='ft'>
	    		<p>Fri, 29 Aug 2008 05:32:32 -0700</p>
        </div>
      </div>
		</li>
		<li class='module flickr'>
		  <div>
  		  <div class='hd'>
  		    <h3><a href='http://www.flickr.com/photos/thevoicewithin/2729453412/'>Just another super day at Alton Towers</a></h3>
  		  </div>
  		  <div class='bd'>
		    	<p><a href='http://www.flickr.com/photos/thevoicewithin/2729453412/'><img src='http://farm4.static.flickr.com/3283/2729453412_ce4466536a.jpg' width='469' height='351.75' alt=''></a></p>
  		  </div>
			  <div class='ft'>
	    		<p>Sun, 03 Aug 2008 13:47:03 -0700</p>
        </div>
      </div>
		</li>
		<li class='module'>
		  <div>
		    <div class='hd'>
			    <h3><a href='http://feeds.feedburner.com/~r/IWearCotton/~3/312280502/'>Beware of Beard</a></h3>
			  </div>
			  <div class='bd'>
			    I bought this shirt a few months ago now, when I was in the full flow of not shaving for Bearduary. The world was good, my life was happy, but my beard was starting to take on a life of its own - it had to be stopped! &#8220;Beware of Beard&#8221; is a full frontal [...]
			  </div>
			  <div class='ft'>
			    <p>Sun, 15 Jun 2008 01:59:56 -0700</p>
			  </div>
			</div>
		</li>
		<li class='module flickr'>
		  <div>
  		  <div class='hd'>
  		    <h3><a href='http://www.flickr.com/photos/thevoicewithin/2557380019/'>The Syndicate's numbers</a></h3>
  		  </div>
  		  <div class='bd'>
		    	<p><a href='http://www.flickr.com/photos/thevoicewithin/2557380019/'><img src='http://farm4.static.flickr.com/3166/2557380019_dbe8b176b9.jpg' width='469' height='351.75' alt=''></a></p>
  		  </div>
			  <div class='ft'>
	    		<p>Sat, 07 Jun 2008 03:11:42 -0700</p>
        </div>
      </div>
		</li>
		<li class='module flickr'>
		  <div>
  		  <div class='hd'>
  		    <h3><a href='http://www.flickr.com/photos/thevoicewithin/2515138543/'>The Ten Word Review Monkey</a></h3>
  		  </div>
  		  <div class='bd'>
		    	<p><a href='http://www.flickr.com/photos/thevoicewithin/2515138543/'><img src='http://farm4.static.flickr.com/3111/2515138543_3e7d7584f7.jpg' width='469' height='87.9375' alt=''></a></p>
  		  </div>
			  <div class='ft'>
	    		<p>Fri, 23 May 2008 02:32:25 -0700</p>
        </div>
      </div>
		</li>
		<li class='module flickr'>
		  <div>
  		  <div class='hd'>
  		    <h3><a href='http://www.flickr.com/photos/thevoicewithin/2511113032/'>Noodle Surprise v2</a></h3>
  		  </div>
  		  <div class='bd'>
		    	<p><a href='http://www.flickr.com/photos/thevoicewithin/2511113032/'><img src='http://farm3.static.flickr.com/2371/2511113032_9dbe33becd.jpg' width='469' height='351.75' alt=''></a></p>
  		  </div>
			  <div class='ft'>
	    		<p>Wed, 21 May 2008 03:11:02 -0700</p>
        </div>
      </div>
		</li>
		<li class='module'>
		  <div>
		    <div class='hd'>
			    <h3><a href='http://feeds.feedburner.com/~r/IWearCotton/~3/294536713/'>Noodle Surprise</a></h3>
			  </div>
			  <div class='bd'>
			    This shirt is perfect for me. For those of you who don&#8217;t know, I&#8217;m missing the top third of the ring finger on my left hand. Of course, no-one ever notices, so I end up showing them and telling the the story about how I lost it. In the real world it happened in a [...]
			  </div>
			  <div class='ft'>
			    <p>Tue, 20 May 2008 13:46:04 -0700</p>
			  </div>
			</div>
		</li>
		<li class='module'>
		  <div>
		    <div class='hd'>
			    <h3><a href='http://feeds.feedburner.com/~r/IWearCotton/~3/279395162/'>Control? Escape!</a></h3>
			  </div>
			  <div class='bd'>
			    Since it&#8217;s GTA IV week, what could be better than a good old geek inspired cops &#8216;n&#8217; robbers based t-shirt? Not many things, that&#8217;s what. The t-shirt itself is pretty simple. A CTRL key dressed like a policeman is chasing after an ESC key. Obviously, the ESC key tried to fight the law, [...]
			  </div>
			  <div class='ft'>
			    <p>Mon, 28 Apr 2008 06:40:45 -0700</p>
			  </div>
			</div>
		</li>
		<li class='module flickr'>
		  <div>
  		  <div class='hd'>
  		    <h3><a href='http://www.flickr.com/photos/thevoicewithin/2418930942/'>Rebranding Effort, Attempt #1</a></h3>
  		  </div>
  		  <div class='bd'>
		    	<p><a href='http://www.flickr.com/photos/thevoicewithin/2418930942/'><img src='http://farm3.static.flickr.com/2211/2418930942_db84a1ea99.jpg' width='469' height='469' alt=''></a></p>
  		  </div>
			  <div class='ft'>
	    		<p>Wed, 16 Apr 2008 08:25:41 -0700</p>
        </div>
      </div>
		</li>
		<li class='module flickr'>
		  <div>
  		  <div class='hd'>
  		    <h3><a href='http://www.flickr.com/photos/thevoicewithin/2416201045/'>Beware of Quizzical Beards</a></h3>
  		  </div>
  		  <div class='bd'>
		    	<p><a href='http://www.flickr.com/photos/thevoicewithin/2416201045/'><img src='http://farm4.static.flickr.com/3224/2416201045_a9beaabe9a.jpg' width='469' height='351.75' alt=''></a></p>
  		  </div>
			  <div class='ft'>
	    		<p>Tue, 15 Apr 2008 12:43:56 -0700</p>
        </div>
      </div>
		</li>
		<li class='module'>
		  <div>
		    <div class='hd'>
			    <h3><a href='http://feeds.feedburner.com/~r/IWearCotton/~3/269960570/'>Mr File Attachment Got Dumped</a></h3>
			  </div>
			  <div class='bd'>
			    This file attachment in a OS X style trash bin was just so darned cute, I had to have him. Files have feelings too, you know. Unlike the actual OS X trash can though, this bin is for recyclables. You see? As well as wearing a groovy t-shirt with a very cute piece [...]
			  </div>
			  <div class='ft'>
			    <p>Mon, 14 Apr 2008 04:45:36 -0700</p>
			  </div>
			</div>
		</li>
		<li class='module'>
		  <div>
		    <div class='hd'>
			    <h3><a href='http://feeds.feedburner.com/~r/IWearCotton/~3/268250068/'>The Mondays</a></h3>
			  </div>
			  <div class='bd'>
			    Is it wrong to wear this t-shirt on a friday? Probably, but since it only arrived today that&#8217;s when I&#8217;m wearing it. Ian Brock has pitched this t-shirt from Uneetee at just the right level. I&#8217;m sure that all of you out there who work in an office have taken to doodling on post-it [...]
			  </div>
			  <div class='ft'>
			    <p>Fri, 11 Apr 2008 02:10:58 -0700</p>
			  </div>
			</div>
		</li>
		<li class='module'>
		  <div>
		    <div class='hd'>
			    <h3><a href='http://feeds.feedburner.com/~r/IWearCotton/~3/266568690/'>Teenage Mutant Ninja 80s Reference</a></h3>
			  </div>
			  <div class='bd'>
			    Ah, the 80s. Weren&#8217;t they great? Rubik&#8217;s Cubes, and power suits and Turtles. Teenage Mutant Ninja Turtles. They were awesome. Of course, in the UK some of the awesome got removed when the word &#8220;Ninja&#8221; had to be replaced by &#8220;Hero&#8221;, but that&#8217;s just being picky. The Turtles were [...]
			  </div>
			  <div class='ft'>
			    <p>Tue, 08 Apr 2008 13:10:21 -0700</p>
			  </div>
			</div>
		</li>
		<li class='module flickr'>
		  <div>
  		  <div class='hd'>
  		    <h3><a href='http://www.flickr.com/photos/thevoicewithin/2392404893/'>My eye's looking a little bloodshot</a></h3>
  		  </div>
  		  <div class='bd'>
		    	<p><a href='http://www.flickr.com/photos/thevoicewithin/2392404893/'><img src='http://farm3.static.flickr.com/2345/2392404893_47832ecc92.jpg' width='469' height='351.75' alt=''></a></p>
  		  </div>
			  <div class='ft'>
	    		<p>Sun, 06 Apr 2008 11:13:55 -0700</p>
        </div>
      </div>
		</li>
		<li class='module'>
		  <div>
		    <div class='hd'>
			    <h3><a href='http://feeds.feedburner.com/~r/IWearCotton/~3/263415994/'>It’s okay Pluto, I’m not a planet either</a></h3>
			  </div>
			  <div class='bd'>
			    When I saw this t-shirt on Snorg, I immediately knew that I was going to buy it for myself. Things didn&#8217;t quite work out that way though - I showed it to Becca, she loved it too, so I bought it for her instead. There&#8217;s been some controversy about whether Pluto is a planet or [...]
			  </div>
			  <div class='ft'>
			    <p>Thu, 03 Apr 2008 08:40:11 -0700</p>
			  </div>
			</div>
		</li>
		<li class='module'>
		  <div>
		    <div class='hd'>
			    <h3><a href='http://feeds.feedburner.com/~r/IWearCotton/~3/262172657/'>Choose Wisely</a></h3>
			  </div>
			  <div class='bd'>
			    Rock, Paper, Scissors - The eternal struggle between good, evil and mediocrity. Or so my mother said. &#8220;Choose Wisely&#8221; is the first tee that I&#8217;ve bought from Snorg Tees and it&#8217;s pretty nice. Whilst the triptych is fairly simplistic, the icons are recongisable enough surface that childhood memory of managing to win five games [...]
			  </div>
			  <div class='ft'>
			    <p>Tue, 01 Apr 2008 06:49:42 -0700</p>
			  </div>
			</div>
		</li>
		<li class='module flickr'>
		  <div>
  		  <div class='hd'>
  		    <h3><a href='http://www.flickr.com/photos/thevoicewithin/2371029450/'>Summer Glau: Because SkyNet is kinky</a></h3>
  		  </div>
  		  <div class='bd'>
		    	<p><a href='http://www.flickr.com/photos/thevoicewithin/2371029450/'><img src='http://farm3.static.flickr.com/2121/2371029450_d4f5f4bcbf.jpg' width='469' height='293.125' alt=''></a></p>
  		  </div>
			  <div class='ft'>
	    		<p>Sat, 29 Mar 2008 05:27:39 -0700</p>
        </div>
      </div>
		</li>
		<li class='module flickr'>
		  <div>
  		  <div class='hd'>
  		    <h3><a href='http://www.flickr.com/photos/thevoicewithin/2347166109/'>Easter Eggs: The Gathering</a></h3>
  		  </div>
  		  <div class='bd'>
		    	<p><a href='http://www.flickr.com/photos/thevoicewithin/2347166109/'><img src='http://farm4.static.flickr.com/3182/2347166109_9675152ccf.jpg' width='469' height='351.75' alt=''></a></p>
  		  </div>
			  <div class='ft'>
	    		<p>Thu, 20 Mar 2008 09:53:44 -0700</p>
        </div>
      </div>
		</li>
		<li class='module flickr'>
		  <div>
  		  <div class='hd'>
  		    <h3><a href='http://www.flickr.com/photos/thevoicewithin/2339537225/'>The cake is a lie (your mum is a lie)</a></h3>
  		  </div>
  		  <div class='bd'>
		    	<p><a href='http://www.flickr.com/photos/thevoicewithin/2339537225/'><img src='http://farm4.static.flickr.com/3096/2339537225_a05dc9c64c.jpg' width='469' height='351.75' alt=''></a></p>
  		  </div>
			  <div class='ft'>
	    		<p>Mon, 17 Mar 2008 03:47:35 -0700</p>
        </div>
      </div>
		</li>
		<li class='module flickr'>
		  <div>
  		  <div class='hd'>
  		    <h3><a href='http://www.flickr.com/photos/thevoicewithin/2318528940/'>tantek was wrong</a></h3>
  		  </div>
  		  <div class='bd'>
		    	<p><a href='http://www.flickr.com/photos/thevoicewithin/2318528940/'><img src='http://farm4.static.flickr.com/3215/2318528940_6997656d8c.jpg' width='469' height='351.75' alt=''></a></p>
  		  </div>
			  <div class='ft'>
	    		<p>Sat, 08 Mar 2008 03:15:03 -0800</p>
        </div>
      </div>
		</li>
		<li class='module flickr'>
		  <div>
  		  <div class='hd'>
  		    <h3><a href='http://www.flickr.com/photos/thevoicewithin/2316779176/'>404: Number Plate Not Found</a></h3>
  		  </div>
  		  <div class='bd'>
		    	<p><a href='http://www.flickr.com/photos/thevoicewithin/2316779176/'><img src='http://farm4.static.flickr.com/3099/2316779176_f3909191b3.jpg' width='469' height='351.75' alt=''></a></p>
  		  </div>
			  <div class='ft'>
	    		<p>Fri, 07 Mar 2008 06:38:30 -0800</p>
        </div>
      </div>
		</li>
		<li class='module flickr'>
		  <div>
  		  <div class='hd'>
  		    <h3><a href='http://www.flickr.com/photos/thevoicewithin/2298468922/'>"Another Sortable Table"</a></h3>
  		  </div>
  		  <div class='bd'>
		    	<p><a href='http://www.flickr.com/photos/thevoicewithin/2298468922/'><img src='http://farm4.static.flickr.com/3199/2298468922_0373aa1b17.jpg' width='469' height='435.77916666667' alt=''></a></p>
  		  </div>
			  <div class='ft'>
	    		<p>Thu, 28 Feb 2008 07:10:03 -0800</p>
        </div>
      </div>
		</li>
		<li class='module flickr'>
		  <div>
  		  <div class='hd'>
  		    <h3><a href='http://www.flickr.com/photos/thevoicewithin/2294345361/'>Hello, my super power is YUI</a></h3>
  		  </div>
  		  <div class='bd'>
		    	<p><a href='http://www.flickr.com/photos/thevoicewithin/2294345361/'><img src='http://farm4.static.flickr.com/3015/2294345361_31a9855567.jpg' width='469' height='351.75' alt=''></a></p>
  		  </div>
			  <div class='ft'>
	    		<p>Tue, 26 Feb 2008 16:15:36 -0800</p>
        </div>
      </div>
		</li>
		<li class='module flickr'>
		  <div>
  		  <div class='hd'>
  		    <h3><a href='http://www.flickr.com/photos/thevoicewithin/2294687250/'>See no evil, speak no evil, WTF?</a></h3>
  		  </div>
  		  <div class='bd'>
		    	<p><a href='http://www.flickr.com/photos/thevoicewithin/2294687250/'><img src='http://farm4.static.flickr.com/3291/2294687250_b5d88289c1.jpg' width='469' height='351.75' alt=''></a></p>
  		  </div>
			  <div class='ft'>
	    		<p>Tue, 26 Feb 2008 12:14:52 -0800</p>
        </div>
      </div>
		</li>
		<li class='module'>
		  <div>
		    <div class='hd'>
			    <h3><a href='http://everythingisrubbish.com/a-pox-on-apple/'>A Pox on Apple</a></h3>
			  </div>
			  <div class='bd'>
			    Last weekend I upgraded my AppleTV to &#8220;Take Two&#8221; and my MacBook Pro and Mac Mini from Tiger to Leopard. I also bought an Airport Extreme and an Apple Bluetooth Keyboard. Oh boy, that was fun&#8230;
Here&#8217;s a list of the problems I&#8217;ve encountered: The AppleTV is now unfit for its intended purpose. After [...]
			  </div>
			  <div class='ft'>
			    <p>Thu, 21 Feb 2008 01:17:08 -0800</p>
			  </div>
			</div>
		</li>
		<li class='module'>
		  <div>
		    <div class='hd'>
			    <h3><a href='http://everythingisrubbish.com/the-iphone-is-rubbish-heres-why/'>The iPhone is rubbish - here’s why</a></h3>
			  </div>
			  <div class='bd'>
			    So, I bought myself an iPhone. I said I wasn&#8217;t going to, but I did it anyway. Unfortunately, from my point of view as a user there are a lot of things wrong with it. Here are just a few of them&#8230; When signing up, my phone number to be ported had to be [...]
			  </div>
			  <div class='ft'>
			    <p>Wed, 26 Dec 2007 03:20:24 -0800</p>
			  </div>
			</div>
		</li>
		<li class='module'>
		  <div>
		    <div class='hd'>
			    <h3><a href='http://everythingisrubbish.com/galaxy-wobbly-chocolate-is-rubbish/'>Galaxy wobbly chocolate is rubbish</a></h3>
			  </div>
			  <div class='bd'>
			    Bloody Mars. They&#8217;ve only gone and made the joins on their Galaxy chocolate bars all wibbly wobbly. Chocolate bar joins should be straight, not wobbly! It makes no sense, you must acquit!
			  </div>
			  <div class='ft'>
			    <p>Tue, 23 Oct 2007 07:38:05 -0700</p>
			  </div>
			</div>
		</li>
		<li class='module'>
		  <div>
		    <div class='hd'>
			    <h3><a href='http://everythingisrubbish.com/the-xbox-360-elite-is-rubbish/'>The xbox 360 Elite is Rubbish</a></h3>
			  </div>
			  <div class='bd'>
			    I got one of these beauties two weeks ago, and it&#8217;s a noisy bugger. An energy hog too.
Before I bought the xbox 360, I&#8217;d been telling various friends about the fact that I own an Apple TV and that I re-encode my DVDs so that I can watch them on it. Pretty often they&#8217;d turn [...]
			  </div>
			  <div class='ft'>
			    <p>Fri, 12 Oct 2007 04:27:55 -0700</p>
			  </div>
			</div>
		</li>
		<li class='module'>
		  <div>
		    <div class='hd'>
			    <h3><a href='http://everythingisrubbish.com/fopp-is-rubbish/'>Fopp is Rubbish</a></h3>
			  </div>
			  <div class='bd'>
			    I&#8217;m a fan of Fopp. Where I work we had a Fopp literally right across the road from us. I was not a happy bunny when they closed because of &#8220;cash flow problems&#8221;.
Happily though, HMV decided to buy u pa few of the stores and run them as Fopp stores, with the values [...]
			  </div>
			  <div class='ft'>
			    <p>Tue, 09 Oct 2007 01:52:47 -0700</p>
			  </div>
			</div>
		</li>
		<li class='module'>
		  <div>
		    <div class='hd'>
			    <h3><a href='http://everythingisrubbish.com/the-new-apple-wired-keyboard-is-rubbish/'>The new Apple wired keyboard is rubbish</a></h3>
			  </div>
			  <div class='bd'>
			    So, a little while ago, Apple brought out a couple of new keyboards - one wired, one wireless. The whole web community went a bit nutso, proclaiming them to be the best thing since sliced bread, gorgeous and so very very thin. After a little bit of internal agonising I decided to buy [...]
			  </div>
			  <div class='ft'>
			    <p>Mon, 10 Sep 2007 08:26:53 -0700</p>
			  </div>
			</div>
		</li>
		<li class='module'>
		  <div>
		    <div class='hd'>
			    <h3><a href='http://everythingisrubbish.com/facebooks-regional-networks-are-rubbish/'>FaceBook’s regional networks are rubbish</a></h3>
			  </div>
			  <div class='bd'>
			    So, for a while now I&#8217;ve been using FaceBook. I&#8217;m enjoying the site and I&#8217;ve got back in contact with a good few people I used to know in school, so that&#8217;s all good. What&#8217;s not so good is the way that their regional networks.
FaceBook has the concept of networks. You can [...]
			  </div>
			  <div class='ft'>
			    <p>Mon, 23 Jul 2007 06:11:30 -0700</p>
			  </div>
			</div>
		</li>
		<li class='module'>
		  <div>
		    <div class='hd'>
			    <h3><a href='http://everythingisrubbish.com/what-a-load-of-old-cobblers/'>What a load of old cobblers</a></h3>
			  </div>
			  <div class='bd'>
			    Cobblers - another word for rubbish. So, who&#8217;s going to go and register everythingiscobblers.com then?
			  </div>
			  <div class='ft'>
			    <p>Wed, 27 Jun 2007 01:48:55 -0700</p>
			  </div>
			</div>
		</li>
		<li class='module'>
		  <div>
		    <div class='hd'>
			    <h3><a href='http://everythingisrubbish.com/mobile-web-is-rubbish/'>Mobile Web is Rubbish</a></h3>
			  </div>
			  <div class='bd'>
			    It turns out that two thirds of students think that using the web on their mobile phones is rubbish. Quel surprise there really&#8230;
A study carried out among students at five UK universities has concluded something we&#8217;ve known all long: the mobile web is crap.
Two-thirds of the 1,000 students surveyed said the mobile web was [...]
			  </div>
			  <div class='ft'>
			    <p>Sun, 13 May 2007 02:45:19 -0700</p>
			  </div>
			</div>
		</li>
		<li class='module'>
		  <div>
		    <div class='hd'>
			    <h3><a href='http://everythingisrubbish.com/its-joost-so-rubbish/'>It’s joost so rubbish</a></h3>
			  </div>
			  <div class='bd'>
			    Why do they mention user generated content? Most of it is rubbish with low-grade production. I don&#8217;t see user generated content as value-add, it&#8217;s just other peoples content and it doesn&#8217;t marry well with high production value television content. Read all of Jon Folland&#8217;s critique of Joost.
			  </div>
			  <div class='ft'>
			    <p>Fri, 04 May 2007 09:19:54 -0700</p>
			  </div>
			</div>
		</li></ol>
            </div>
            <div class='yui-g' id='secondary'>
              <div id='consciousness' class='yui-u first'>
                <h2>Stream of Consciousness <a href='/stream-of-consciousness.rss'><img src='/images/feed-icon-14x14.png' alt='RSS'></a></h2>

                <ol>
		<li class='module twitter'>
		  <div>
  		  <div class='hd'>
  		    <h3><a href='http://twitter.com/NeilCrosby/statuses/997379257'>Twitter</a></h3>
  		  </div>
  		  <div class='bd'>
  		    <p><a href='http://twitter.com/NeilCrosby/statuses/997379257'>NeilCrosby: @cubicgarden eventwax says the event is closed</a></p>
  		  </div>
			  <div class='ft'>
			    <p>Sun, 09 Nov 2008 03:54:25 -0800</p>
        </div>
      </div>
		</li>
		<li class='module twitter'>
		  <div>
  		  <div class='hd'>
  		    <h3><a href='http://twitter.com/NeilCrosby/statuses/996476223'>Twitter</a></h3>
  		  </div>
  		  <div class='bd'>
  		    <p><a href='http://twitter.com/NeilCrosby/statuses/996476223'>NeilCrosby: It's okay - Zac Efron got to do his angry Kevin Bacon dance in HSM3 again!</a></p>
  		  </div>
			  <div class='ft'>
			    <p>Sat, 08 Nov 2008 08:36:19 -0800</p>
        </div>
      </div>
		</li>
		<li class='module twitter'>
		  <div>
  		  <div class='hd'>
  		    <h3><a href='http://twitter.com/cdoussin/statuses/996367462'>Twitter</a></h3>
  		  </div>
  		  <div class='bd'>
  		    <p><a href='http://twitter.com/cdoussin/statuses/996367462'>Someone said: <a rel="nofollow" target="_blank" href="http://twitter.com/NeilCrosby"><b>@NeilCrosby</b></a> ?</a></p>
  		  </div>
			  <div class='ft'>
			    <p>Sat, 08 Nov 2008 06:48:19 -0800</p>
        </div>
      </div>
		</li>
		<li class='module twitter'>
		  <div>
  		  <div class='hd'>
  		    <h3><a href='http://twitter.com/NeilCrosby/statuses/996341574'>Twitter</a></h3>
  		  </div>
  		  <div class='bd'>
  		    <p><a href='http://twitter.com/NeilCrosby/statuses/996341574'>NeilCrosby: @bookwormbecca just told me that John Connor bought boxes from her at work</a></p>
  		  </div>
			  <div class='ft'>
			    <p>Sat, 08 Nov 2008 06:20:13 -0800</p>
        </div>
      </div>
		</li>
		<li class='module twitter'>
		  <div>
  		  <div class='hd'>
  		    <h3><a href='http://twitter.com/NeilCrosby/statuses/996334772'>Twitter</a></h3>
  		  </div>
  		  <div class='bd'>
  		    <p><a href='http://twitter.com/NeilCrosby/statuses/996334772'>NeilCrosby: is at the cinema, waiting to see High School Musical 3</a></p>
  		  </div>
			  <div class='ft'>
			    <p>Sat, 08 Nov 2008 06:12:14 -0800</p>
        </div>
      </div>
		</li>
		<li class='module twitter'>
		  <div>
  		  <div class='hd'>
  		    <h3><a href='http://twitter.com/NeilCrosby/statuses/995773707'>Twitter</a></h3>
  		  </div>
  		  <div class='bd'>
  		    <p><a href='http://twitter.com/NeilCrosby/statuses/995773707'>NeilCrosby: has had an irreversible sex change operation (in Fable 2)</a></p>
  		  </div>
			  <div class='ft'>
			    <p>Fri, 07 Nov 2008 16:52:58 -0800</p>
        </div>
      </div>
		</li>
		<li class='module twitter'>
		  <div>
  		  <div class='hd'>
  		    <h3><a href='http://twitter.com/hayles/statuses/995561752'>Twitter</a></h3>
  		  </div>
  		  <div class='bd'>
  		    <p><a href='http://twitter.com/hayles/statuses/995561752'>Someone said: <a rel="nofollow" target="_blank" href="http://twitter.com/neilcrosby"><b>@neilcrosby</b></a> Sexy angry dance. Why do people miss sexy from everything.</a></p>
  		  </div>
			  <div class='ft'>
			    <p>Fri, 07 Nov 2008 13:43:53 -0800</p>
        </div>
      </div>
		</li>
		<li class='module twitter'>
		  <div>
  		  <div class='hd'>
  		    <h3><a href='http://twitter.com/NeilCrosby/statuses/995549637'>Twitter</a></h3>
  		  </div>
  		  <div class='bd'>
  		    <p><a href='http://twitter.com/NeilCrosby/statuses/995549637'>NeilCrosby: is watching Zac Efron do his Kevin Bacon "angry dance".</a></p>
  		  </div>
			  <div class='ft'>
			    <p>Fri, 07 Nov 2008 13:34:19 -0800</p>
        </div>
      </div>
		</li>
		<li class='module twitter'>
		  <div>
  		  <div class='hd'>
  		    <h3><a href='http://twitter.com/NeilCrosby/statuses/995505034'>Twitter</a></h3>
  		  </div>
  		  <div class='bd'>
  		    <p><a href='http://twitter.com/NeilCrosby/statuses/995505034'>NeilCrosby: @Pixie_Leuetta I found that last year ;) http://www.flickr.com/photos/thevoicewithin/776231760/</a></p>
  		  </div>
			  <div class='ft'>
			    <p>Fri, 07 Nov 2008 12:59:54 -0800</p>
        </div>
      </div>
		</li>
		<li class='module twitter'>
		  <div>
  		  <div class='hd'>
  		    <h3><a href='http://twitter.com/NeilCrosby/statuses/995452330'>Twitter</a></h3>
  		  </div>
  		  <div class='bd'>
  		    <p><a href='http://twitter.com/NeilCrosby/statuses/995452330'>NeilCrosby: is watching High School Musical 2 and purchasing the High School Musical 3 soundtrack, before going to see HSM3 in the cinema tomorrow.</a></p>
  		  </div>
			  <div class='ft'>
			    <p>Fri, 07 Nov 2008 12:19:52 -0800</p>
        </div>
      </div>
		</li>
		<li class='module twitter'>
		  <div>
  		  <div class='hd'>
  		    <h3><a href='http://twitter.com/NeilCrosby/statuses/995194594'>Twitter</a></h3>
  		  </div>
  		  <div class='bd'>
  		    <p><a href='http://twitter.com/NeilCrosby/statuses/995194594'>NeilCrosby: is happy. Bug queue is, for the current work project, empty. 9 minutes to go.</a></p>
  		  </div>
			  <div class='ft'>
			    <p>Fri, 07 Nov 2008 09:21:14 -0800</p>
        </div>
      </div>
		</li>
		<li class='module delicious'>
		  <div>
  		  <div class='hd'>
  		    <h3><a href='http://pmade.com/logbook/git/svn'>pmade inc. - Importing Subversion Repositories to Git</a></h3>
  		  </div>
  		  <div class='bd'>
  		    <p>Importing a subversion repository that contains branches and tags is far more arduous than it should be. Lets see if these instructions work for me...</p>
  		  </div>
			  <div class='ft'>
			    <p>Fri, 07 Nov 2008 08:00:02 -0800</p>
        </div>
      </div>
		</li>
		<li class='module twitter'>
		  <div>
  		  <div class='hd'>
  		    <h3><a href='http://twitter.com/NeilCrosby/statuses/994957628'>Twitter</a></h3>
  		  </div>
  		  <div class='bd'>
  		    <p><a href='http://twitter.com/NeilCrosby/statuses/994957628'>NeilCrosby: is blocked.</a></p>
  		  </div>
			  <div class='ft'>
			    <p>Fri, 07 Nov 2008 06:45:01 -0800</p>
        </div>
      </div>
		</li>
		<li class='module twitter'>
		  <div>
  		  <div class='hd'>
  		    <h3><a href='http://twitter.com/NeilCrosby/statuses/994903391'>Twitter</a></h3>
  		  </div>
  		  <div class='bd'>
  		    <p><a href='http://twitter.com/NeilCrosby/statuses/994903391'>NeilCrosby: git people. I've successfully used "git svn" to create a git repo from svn with branches intact. How do I get the branches into github?</a></p>
  		  </div>
			  <div class='ft'>
			    <p>Fri, 07 Nov 2008 06:04:30 -0800</p>
        </div>
      </div>
		</li>
		<li class='module twitter'>
		  <div>
  		  <div class='hd'>
  		    <h3><a href='http://twitter.com/NeilCrosby/statuses/993953209'>Twitter</a></h3>
  		  </div>
  		  <div class='bd'>
  		    <p><a href='http://twitter.com/NeilCrosby/statuses/993953209'>NeilCrosby: @cdoussin for me, actually yes, github is a part of it.</a></p>
  		  </div>
			  <div class='ft'>
			    <p>Thu, 06 Nov 2008 13:45:56 -0800</p>
        </div>
      </div>
		</li>
		<li class='module twitter'>
		  <div>
  		  <div class='hd'>
  		    <h3><a href='http://twitter.com/NeilCrosby/statuses/993880883'>Twitter</a></h3>
  		  </div>
  		  <div class='bd'>
  		    <p><a href='http://twitter.com/NeilCrosby/statuses/993880883'>NeilCrosby: is moving http://thetenwordreview.com from SVN to git. Oh my.</a></p>
  		  </div>
			  <div class='ft'>
			    <p>Thu, 06 Nov 2008 12:52:38 -0800</p>
        </div>
      </div>
		</li>
		<li class='module twitter'>
		  <div>
  		  <div class='hd'>
  		    <h3><a href='http://twitter.com/NeilCrosby/statuses/993557569'>Twitter</a></h3>
  		  </div>
  		  <div class='bd'>
  		    <p><a href='http://twitter.com/NeilCrosby/statuses/993557569'>NeilCrosby: @iamdanw I was considering going, but that and a lack of flights at convenient times has stopped me.</a></p>
  		  </div>
			  <div class='ft'>
			    <p>Thu, 06 Nov 2008 09:03:40 -0800</p>
        </div>
      </div>
		</li>
		<li class='module delicious'>
		  <div>
  		  <div class='hd'>
  		    <h3><a href='http://bit.ly/'>bit.ly, a simple url shortener</a></h3>
  		  </div>
  		  <div class='bd'>
  		    <p>Look at using these for the shortened URLs used by twitbot</p>
  		  </div>
			  <div class='ft'>
			    <p>Thu, 06 Nov 2008 06:58:59 -0800</p>
        </div>
      </div>
		</li>
		<li class='module twitter'>
		  <div>
  		  <div class='hd'>
  		    <h3><a href='http://twitter.com/NeilCrosby/statuses/993187701'>Twitter</a></h3>
  		  </div>
  		  <div class='bd'>
  		    <p><a href='http://twitter.com/NeilCrosby/statuses/993187701'>NeilCrosby: is hungry, and is hoping to be allowed to go to lunch soon.</a></p>
  		  </div>
			  <div class='ft'>
			    <p>Thu, 06 Nov 2008 04:37:57 -0800</p>
        </div>
      </div>
		</li>
		<li class='module twitter'>
		  <div>
  		  <div class='hd'>
  		    <h3><a href='http://twitter.com/NeilCrosby/statuses/993145238'>Twitter</a></h3>
  		  </div>
  		  <div class='bd'>
  		    <p><a href='http://twitter.com/NeilCrosby/statuses/993145238'>NeilCrosby: committed public code yesterday but it isn't showing up on http://tinyurl.com/66g89m - Sad face.</a></p>
  		  </div>
			  <div class='ft'>
			    <p>Thu, 06 Nov 2008 03:49:50 -0800</p>
        </div>
      </div>
		</li>
		<li class='module twitter'>
		  <div>
  		  <div class='hd'>
  		    <h3><a href='http://twitter.com/mikewest/statuses/993062288'>Twitter</a></h3>
  		  </div>
  		  <div class='bd'>
  		    <p><a href='http://twitter.com/mikewest/statuses/993062288'>Someone said: <a rel="nofollow" target="_blank" href="http://twitter.com/NeilCrosby"><b>@NeilCrosby</b></a>: And the public nature gives you incentive to actually _finish_ projects. People are watching!</a></p>
  		  </div>
			  <div class='ft'>
			    <p>Thu, 06 Nov 2008 01:57:59 -0800</p>
        </div>
      </div>
		</li>
		<li class='module twitter'>
		  <div>
  		  <div class='hd'>
  		    <h3><a href='http://twitter.com/NeilCrosby/statuses/993061734'>Twitter</a></h3>
  		  </div>
  		  <div class='bd'>
  		    <p><a href='http://twitter.com/NeilCrosby/statuses/993061734'>NeilCrosby: @mikewest I'm very much enjoying it. It's easy to use and gives me an easy way to make unfinished code public :D</a></p>
  		  </div>
			  <div class='ft'>
			    <p>Thu, 06 Nov 2008 01:57:07 -0800</p>
        </div>
      </div>
		</li>
		<li class='module twitter'>
		  <div>
  		  <div class='hd'>
  		    <h3><a href='http://twitter.com/mikewest/statuses/993060300'>Twitter</a></h3>
  		  </div>
  		  <div class='bd'>
  		    <p><a href='http://twitter.com/mikewest/statuses/993060300'>Someone said: <a rel="nofollow" target="_blank" href="http://twitter.com/NeilCrosby"><b>@NeilCrosby</b></a>: I love GitHub. :)</a></p>
  		  </div>
			  <div class='ft'>
			    <p>Thu, 06 Nov 2008 01:55:01 -0800</p>
        </div>
      </div>
		</li>
		<li class='module twitter'>
		  <div>
  		  <div class='hd'>
  		    <h3><a href='http://twitter.com/NeilCrosby/statuses/993059005'>Twitter</a></h3>
  		  </div>
  		  <div class='bd'>
  		    <p><a href='http://twitter.com/NeilCrosby/statuses/993059005'>NeilCrosby: is excited that someone he doesn't know just started following one of his repositories on guthub</a></p>
  		  </div>
			  <div class='ft'>
			    <p>Thu, 06 Nov 2008 01:53:15 -0800</p>
        </div>
      </div>
		</li>
		<li class='module twitter'>
		  <div>
  		  <div class='hd'>
  		    <h3><a href='http://twitter.com/NeilCrosby/statuses/992318876'>Twitter</a></h3>
  		  </div>
  		  <div class='bd'>
  		    <p><a href='http://twitter.com/NeilCrosby/statuses/992318876'>NeilCrosby: is having another lovely early night</a></p>
  		  </div>
			  <div class='ft'>
			    <p>Wed, 05 Nov 2008 13:23:00 -0800</p>
        </div>
      </div>
		</li>
		<li class='module twitter'>
		  <div>
  		  <div class='hd'>
  		    <h3><a href='http://twitter.com/NeilCrosby/statuses/992249457'>Twitter</a></h3>
  		  </div>
  		  <div class='bd'>
  		    <p><a href='http://twitter.com/NeilCrosby/statuses/992249457'>NeilCrosby: Badly named products #1: http://www.flickr.com/photos/thevoicewithin/3000747260/</a></p>
  		  </div>
			  <div class='ft'>
			    <p>Wed, 05 Nov 2008 12:29:29 -0800</p>
        </div>
      </div>
		</li>
		<li class='module twitter'>
		  <div>
  		  <div class='hd'>
  		    <h3><a href='http://twitter.com/ginader/statuses/991992004'>Twitter</a></h3>
  		  </div>
  		  <div class='bd'>
  		    <p><a href='http://twitter.com/ginader/statuses/991992004'>Someone said: thanks <a rel="nofollow" target="_blank" href="http://twitter.com/NeilCrosby"><b>@NeilCrosby</b></a> for his lovely treats (now that they're up on his Floor)</a></p>
  		  </div>
			  <div class='ft'>
			    <p>Wed, 05 Nov 2008 09:27:08 -0800</p>
        </div>
      </div>
		</li>
		<li class='module twitter'>
		  <div>
  		  <div class='hd'>
  		    <h3><a href='http://twitter.com/codepo8/statuses/989611019'>Twitter</a></h3>
  		  </div>
  		  <div class='bd'>
  		    <p><a href='http://twitter.com/codepo8/statuses/989611019'>Someone said: <a rel="nofollow" target="_blank" href="http://twitter.com/NeilCrosby"><b>@NeilCrosby</b></a> he is not, although he came to this world in a unique fashion: <a rel="nofollow" target="_blank" href="http://tinyurl.com/5fedh3">http://tinyurl.com/5fedh3</a></a></p>
  		  </div>
			  <div class='ft'>
			    <p>Tue, 04 Nov 2008 08:36:58 -0800</p>
        </div>
      </div>
		</li>
		<li class='module twitter'>
		  <div>
  		  <div class='hd'>
  		    <h3><a href='http://twitter.com/nefarioustim/statuses/989017034'>Twitter</a></h3>
  		  </div>
  		  <div class='bd'>
  		    <p><a href='http://twitter.com/nefarioustim/statuses/989017034'>Someone said: <a rel="nofollow" target="_blank" href="http://twitter.com/NeilCrosby"><b>@NeilCrosby</b></a>: That's because Perl sucks.</a></p>
  		  </div>
			  <div class='ft'>
			    <p>Tue, 04 Nov 2008 01:18:13 -0800</p>
        </div>
      </div>
		</li>
		<li class='module twitter'>
		  <div>
  		  <div class='hd'>
  		    <h3><a href='http://twitter.com/ashberlin/statuses/987935236'>Twitter</a></h3>
  		  </div>
  		  <div class='bd'>
  		    <p><a href='http://twitter.com/ashberlin/statuses/987935236'>Someone said: <a rel="nofollow" target="_blank" href="http://twitter.com/NeilCrosby"><b>@NeilCrosby</b></a> The actual review on TTWR.com needs to be bigger. Took me a few seconds to actually find it.</a></p>
  		  </div>
			  <div class='ft'>
			    <p>Mon, 03 Nov 2008 09:42:05 -0800</p>
        </div>
      </div>
		</li>
		<li class='module twitter'>
		  <div>
  		  <div class='hd'>
  		    <h3><a href='http://twitter.com/rossbruniges/statuses/987930416'>Twitter</a></h3>
  		  </div>
  		  <div class='bd'>
  		    <p><a href='http://twitter.com/rossbruniges/statuses/987930416'>Someone said: <a rel="nofollow" target="_blank" href="http://twitter.com/NeilCrosby"><b>@NeilCrosby</b></a> what about pissy bollock flaps?</a></p>
  		  </div>
			  <div class='ft'>
			    <p>Mon, 03 Nov 2008 09:38:35 -0800</p>
        </div>
      </div>
		</li>
		<li class='module twitter'>
		  <div>
  		  <div class='hd'>
  		    <h3><a href='http://twitter.com/evalottchen/statuses/987837983'>Twitter</a></h3>
  		  </div>
  		  <div class='bd'>
  		    <p><a href='http://twitter.com/evalottchen/statuses/987837983'>Someone said: <a rel="nofollow" target="_blank" href="http://twitter.com/NeilCrosby"><b>@NeilCrosby</b></a> haha I like you're automated pics on flickr. should try that as well some time :)</a></p>
  		  </div>
			  <div class='ft'>
			    <p>Mon, 03 Nov 2008 08:34:48 -0800</p>
        </div>
      </div>
		</li>
		<li class='module twitter'>
		  <div>
  		  <div class='hd'>
  		    <h3><a href='http://twitter.com/evalottchen/statuses/987820456'>Twitter</a></h3>
  		  </div>
  		  <div class='bd'>
  		    <p><a href='http://twitter.com/evalottchen/statuses/987820456'>Someone said: <a rel="nofollow" target="_blank" href="http://twitter.com/NeilCrosby"><b>@NeilCrosby</b></a> wow, what did you have photographed automatically?</a></p>
  		  </div>
			  <div class='ft'>
			    <p>Mon, 03 Nov 2008 08:22:31 -0800</p>
        </div>
      </div>
		</li>
		<li class='module twitter'>
		  <div>
  		  <div class='hd'>
  		    <h3><a href='http://twitter.com/Si/statuses/987668914'>Twitter</a></h3>
  		  </div>
  		  <div class='bd'>
  		    <p><a href='http://twitter.com/Si/statuses/987668914'>Someone said: <a rel="nofollow" target="_blank" href="http://twitter.com/neilcrosby"><b>@neilcrosby</b></a>, interesting concept. I've signed <a rel="nofollow" target="_blank" href="http://twitter.com/derbycounty">@derbycounty</a> up to see how it works.</a></p>
  		  </div>
			  <div class='ft'>
			    <p>Mon, 03 Nov 2008 06:39:30 -0800</p>
        </div>
      </div>
		</li>
		<li class='module twitter'>
		  <div>
  		  <div class='hd'>
  		    <h3><a href='http://twitter.com/setmajer/statuses/987652155'>Twitter</a></h3>
  		  </div>
  		  <div class='bd'>
  		    <p><a href='http://twitter.com/setmajer/statuses/987652155'>Someone said: <a rel="nofollow" target="_blank" href="http://twitter.com/NeilCrosby"><b>@NeilCrosby</b></a>: uh, what does it do?</a></p>
  		  </div>
			  <div class='ft'>
			    <p>Mon, 03 Nov 2008 06:27:27 -0800</p>
        </div>
      </div>
		</li>
		<li class='module twitter'>
		  <div>
  		  <div class='hd'>
  		    <h3><a href='http://twitter.com/emmapersky/statuses/987643051'>Twitter</a></h3>
  		  </div>
  		  <div class='bd'>
  		    <p><a href='http://twitter.com/emmapersky/statuses/987643051'>Someone said: <a rel="nofollow" target="_blank" href="http://twitter.com/NeilCrosby"><b>@NeilCrosby</b></a> €500 a month?!?!?!</a></p>
  		  </div>
			  <div class='ft'>
			    <p>Mon, 03 Nov 2008 06:20:36 -0800</p>
        </div>
      </div>
		</li>
		<li class='module twitter'>
		  <div>
  		  <div class='hd'>
  		    <h3><a href='http://twitter.com/cdoussin/statuses/987623355'>Twitter</a></h3>
  		  </div>
  		  <div class='bd'>
  		    <p><a href='http://twitter.com/cdoussin/statuses/987623355'>Someone said: <a rel="nofollow" target="_blank" href="http://twitter.com/NeilCrosby"><b>@NeilCrosby</b></a> ?????</a></p>
  		  </div>
			  <div class='ft'>
			    <p>Mon, 03 Nov 2008 06:05:17 -0800</p>
        </div>
      </div>
		</li>
		<li class='module delicious'>
		  <div>
  		  <div class='hd'>
  		    <h3><a href='http://adam-buxton.co.uk/ad/wp-content/uploads/2008/10/pirate-interruptions-chocolate-cake-slice.mp3'>pirate-interruptions-chocolate-cake-slice.mp3 (audio/mpeg Object)</a></h3>
  		  </div>
  		  <div class='bd'>
  		    <p>A nice little Pirate interuption from Adam Buxton from the Adam and Joe 6 Music show.</p>
  		  </div>
			  <div class='ft'>
			    <p>Wed, 29 Oct 2008 08:50:51 -0700</p>
        </div>
      </div>
		</li>
		<li class='module delicious'>
		  <div>
  		  <div class='hd'>
  		    <h3><a href='http://microformats.org/wiki/identity-consolidation'>identity-consolidation - Microformats</a></h3>
  		  </div>
  		  <div class='bd'>
  		    <p>Information about how rel="me" works</p>
  		  </div>
			  <div class='ft'>
			    <p>Wed, 29 Oct 2008 04:27:25 -0700</p>
        </div>
      </div>
		</li>
		<li class='module delicious'>
		  <div>
  		  <div class='hd'>
  		    <h3><a href='http://thecodetrain.co.uk/2008/10/five-ways-to-make-offline-working-easier/'>Five ways to make offline working easier » Blog Archive » The Code Train</a></h3>
  		  </div>
  		  <div class='bd'>
  		    <p></p>
  		  </div>
			  <div class='ft'>
			    <p>Wed, 29 Oct 2008 03:43:30 -0700</p>
        </div>
      </div>
		</li>
		<li class='module delicious'>
		  <div>
  		  <div class='hd'>
  		    <h3><a href='http://zrusin.blogspot.com/2007/09/git-cheat-sheet.html'>Zack Rusin: Git cheat sheet</a></h3>
  		  </div>
  		  <div class='bd'>
  		    <p>Grab this for my train laptop</p>
  		  </div>
			  <div class='ft'>
			    <p>Wed, 29 Oct 2008 03:25:22 -0700</p>
        </div>
      </div>
		</li>
		<li class='module delicious'>
		  <div>
  		  <div class='hd'>
  		    <h3><a href='http://www.killswitchcollective.com/articles/36_git_it_got_it_good'>The Killswitch Collective :: Blog :: Git it, got it? Good.</a></h3>
  		  </div>
  		  <div class='bd'>
  		    <p>Another set of information for me to consume about git</p>
  		  </div>
			  <div class='ft'>
			    <p>Tue, 28 Oct 2008 02:39:30 -0700</p>
        </div>
      </div>
		</li>
		<li class='module delicious'>
		  <div>
  		  <div class='hd'>
  		    <h3><a href='http://mu.wordpress.org/'>WordPress MU › Home</a></h3>
  		  </div>
  		  <div class='bd'>
  		    <p>Take a look at running WordPress µ for getting all my WordPress blogs running off one installation. This should hopefully allow me to simply update one installation once and all my blogs are then up to date. This would be a nice thing. Thanks to TheMattHarris for mentioning this in his &lt;head&gt; talk.</p>
  		  </div>
			  <div class='ft'>
			    <p>Sun, 26 Oct 2008 11:44:31 -0700</p>
        </div>
      </div>
		</li>
		<li class='module delicious'>
		  <div>
  		  <div class='hd'>
  		    <h3><a href='http://www.redundancyhelp.co.uk/LegCon.htm'>Redundancy Help Consultation Period</a></h3>
  		  </div>
  		  <div class='bd'>
  		    <p>Information about the consultancy period that has to occur by law in the UK when large amounts of redundancies happen in a single location</p>
  		  </div>
			  <div class='ft'>
			    <p>Fri, 24 Oct 2008 02:18:05 -0700</p>
        </div>
      </div>
		</li>
    <li class='module flickr'>
  	  <div>
  		  <div class='hd'>
  		    <h3>Flickr</h3>
  		  </div>
  		  <div class='bd'>
  	    	<ol><li><a href='http://www.flickr.com/photos/actel/2960587577/'><img src='http://farm4.static.flickr.com/3062/2960587577_9bd1f8df2f_s.jpg' alt='flickr favourite: Brokeback'></a></li><li><a href='http://www.flickr.com/photos/actel/2960581679/'><img src='http://farm4.static.flickr.com/3023/2960581679_d534e69ac2_s.jpg' alt='flickr favourite: The Love That Dare Not Speak Its Name'></a></li></ol>
  		  </div>
  		  <div class='ft'>
      		<p>Tue, 21 Oct 2008 05:16:18 -0700</p>
        </div>
      </div>
  	</li>
		<li class='module delicious'>
		  <div>
  		  <div class='hd'>
  		    <h3><a href='http://failblog.org/2008/08/05/wii-fail/'>Wii Fail « FAIL Blog: Pictures and Videos of Owned, Pwnd and Fail Moments</a></h3>
  		  </div>
  		  <div class='bd'>
  		    <p></p>
  		  </div>
			  <div class='ft'>
			    <p>Mon, 20 Oct 2008 09:15:40 -0700</p>
        </div>
      </div>
		</li>
		<li class='module upcoming'>
		  <div>
  		  <div class='hd'>
  		    <h3><a href='http://upcoming.yahoo.com/event/1107224/'>Barcamp Liverpool at Contemporary Urban Centre</a></h3>
  		  </div>
  		  <div class='bd'>
  		    <p class='date'><span>Dec 2008</span>6</p>
  		    <p>Barcamp. 10am. 6th &amp; 7th December 2008. Novas Contemporary Urban Centre, Liverpool.</p>
  		  </div>
			  <div class='ft'>
			    <p>Sun, 19 Oct 2008 23:21:09 -0700</p>
        </div>
      </div>
		</li>
		<li class='module upcoming'>
		  <div>
  		  <div class='hd'>
  		    <h3><a href='http://upcoming.yahoo.com/event/1178783/'>BarCamp Sheffield at Showroom Café Bar</a></h3>
  		  </div>
  		  <div class='bd'>
  		    <p class='date'><span>Nov 2008</span>28</p>
  		    <p>After 18 months, BarCamp comes back to Sheffield. From <strong><span style="color:#CE000C;">28-30 November 2008</span></strong> the <a rel="nofollow" target="_blank" HREF="http://barcampsheffield.net/?page_id=11"><strong><span style="color:#CE000C;">Showroom</span></strong></a> will play host to a gathering of grass-roots geeks, creative visionaries, innovative entrepreneurs and a host of talented technologists.</p>
  		  </div>
			  <div class='ft'>
			    <p>Sun, 19 Oct 2008 23:20:53 -0700</p>
        </div>
      </div>
		</li>
		<li class='module delicious'>
		  <div>
  		  <div class='hd'>
  		    <h3><a href='http://www.choosyosx.com/beta/about'>Choosy - A smarter default browser for Mac OS X</a></h3>
  		  </div>
  		  <div class='bd'>
  		    <p>George Brocklehurst has put together a nice little piece of software that allows you to open links in arbitrary browsers on your system on a link by link basis. Nice and easy to use, but seemed to require a restart to get it working. This is a piece of software that I have been wanting for quite a while.</p>
  		  </div>
			  <div class='ft'>
			    <p>Fri, 17 Oct 2008 07:34:05 -0700</p>
        </div>
      </div>
		</li>
		<li class='module delicious'>
		  <div>
  		  <div class='hd'>
  		    <h3><a href='http://allinthehead.com/retro/332/the-trouble-with-barcamp'>The Trouble with BarCamp — All in the head</a></h3>
  		  </div>
  		  <div class='bd'>
  		    <p>Drew riffs on the question of how to get people to actually turn up to BarCamps. I personally love the idea of day tickets. Even though, for me, a large part of the BarCamp experience is the overnight portion I know that that isn&#039;t the case for everyone and this suggestion might help with allowing more people to attend the events.</p>
  		  </div>
			  <div class='ft'>
			    <p>Wed, 15 Oct 2008 01:27:50 -0700</p>
        </div>
      </div>
		</li>
		<li class='module delicious'>
		  <div>
  		  <div class='hd'>
  		    <h3><a href='http://ericmiraglia.com/blog/?p=72'>Page Inlink Analyzer: Look at the Pages that Link to Your Site and Their Relative “Link Value”</a></h3>
  		  </div>
  		  <div class='bd'>
  		    <p></p>
  		  </div>
			  <div class='ft'>
			    <p>Tue, 14 Oct 2008 09:17:30 -0700</p>
        </div>
      </div>
		</li>
		<li class='module delicious'>
		  <div>
  		  <div class='hd'>
  		    <h3><a href='http://damianedwards.wordpress.com/2008/10/06/adding-html-validity-checking-to-your-aspnet-web-site-via-unit-tests/'>Adding HTML validity checking to your ASP.NET web site via unit tests « Coming up blank</a></h3>
  		  </div>
  		  <div class='bd'>
  		    <p>Yay - someone else is talking about doing this.</p>
  		  </div>
			  <div class='ft'>
			    <p>Tue, 14 Oct 2008 04:33:53 -0700</p>
        </div>
      </div>
		</li>
    <li class='module flickr'>
  	  <div>
  		  <div class='hd'>
  		    <h3>Flickr</h3>
  		  </div>
  		  <div class='bd'>
  	    	<ol><li><a href='http://www.flickr.com/photos/fizzkitten/2940619399/'><img src='http://farm4.static.flickr.com/3056/2940619399_d2ec7a1fd6_s.jpg' alt='flickr favourite: "Angry Vole" apparently'></a></li></ol>
  		  </div>
  		  <div class='ft'>
      		<p>Tue, 14 Oct 2008 05:02:55 -0700</p>
        </div>
      </div>
  	</li>
		<li class='module delicious'>
		  <div>
  		  <div class='hd'>
  		    <h3><a href='http://googlewebmastercentral.blogspot.com/2008/09/demystifying-duplicate-content-penalty.html'>Official Google Webmaster Central Blog: Demystifying the "duplicate content penalty"</a></h3>
  		  </div>
  		  <div class='bd'>
  		    <p></p>
  		  </div>
			  <div class='ft'>
			    <p>Mon, 13 Oct 2008 04:30:45 -0700</p>
        </div>
      </div>
		</li>
    <li class='module flickr'>
  	  <div>
  		  <div class='hd'>
  		    <h3>Flickr</h3>
  		  </div>
  		  <div class='bd'>
  	    	<ol><li><a href='http://www.flickr.com/photos/yahnyinlondon/2910977504/'><img src='http://farm4.static.flickr.com/3256/2910977504_ac943cb863_s.jpg' alt='flickr favourite: It's alive!'></a></li><li><a href='http://www.flickr.com/photos/cristiano_betta/2909878811/'><img src='http://farm4.static.flickr.com/3044/2909878811_ebe3aa72a2_s.jpg' alt='flickr favourite: Neil @ BarcampLondon5 - Day 1'></a></li><li><a href='http://www.flickr.com/photos/rugbymadgirl/2895709451/'><img src='http://farm4.static.flickr.com/3265/2895709451_8b74a17e49_s.jpg' alt='flickr favourite: Mooooooose!'></a></li><li><a href='http://www.flickr.com/photos/rugbymadgirl/2896550544/'><img src='http://farm4.static.flickr.com/3151/2896550544_baa0dcf66d_s.jpg' alt='flickr favourite: Worship The Jesusphone!'></a></li><li><a href='http://www.flickr.com/photos/erawat/2892690385/'><img src='http://farm4.static.flickr.com/3033/2892690385_3a41cb9855_s.jpg' alt='flickr favourite: RIMG0096'></a></li><li><a href='http://www.flickr.com/photos/erawat/2892688707/'><img src='http://farm4.static.flickr.com/3148/2892688707_7ca3ea4ffe_s.jpg' alt='flickr favourite: RIMG0098'></a></li></ol>
  		  </div>
  		  <div class='ft'>
      		<p>Sat, 27 Sep 2008 15:56:12 -0700</p>
        </div>
      </div>
  	</li>
		<li class='module upcoming'>
		  <div>
  		  <div class='hd'>
  		    <h3><a href='http://upcoming.yahoo.com/event/1118884/'>Barcamp Bournemouth at Talbot Campus, Bournemouth University</a></h3>
  		  </div>
  		  <div class='bd'>
  		    <p class='date'><span>Apr 2009</span>4</p>
  		    <p>Barcamp Bournemouth is an unconference for anyone involved in the Tech, Digital and Web industries.</p>
  		  </div>
			  <div class='ft'>
			    <p>Sat, 27 Sep 2008 00:26:19 -0700</p>
        </div>
      </div>
		</li>
    <li class='module flickr'>
  	  <div>
  		  <div class='hd'>
  		    <h3>Flickr</h3>
  		  </div>
  		  <div class='bd'>
  	    	<ol><li><a href='http://www.flickr.com/photos/weatherpixie/2873868124/'><img src='http://farm4.static.flickr.com/3063/2873868124_0d1446a083_s.jpg' alt='flickr favourite: Norm in a Topper'></a></li><li><a href='http://www.flickr.com/photos/mikewest/2855192791/'><img src='http://farm4.static.flickr.com/3246/2855192791_b4d22660f7_s.jpg' alt='flickr favourite: Going Away Beer'></a></li><li><a href='http://www.flickr.com/photos/kapowaz/2833759262/'><img src='http://farm4.static.flickr.com/3273/2833759262_88f372c089_s.jpg' alt='flickr favourite: Neil'></a></li><li><a href='http://www.flickr.com/photos/actel/2764453869/'><img src='http://farm4.static.flickr.com/3192/2764453869_94fefb4c79_s.jpg' alt='flickr favourite: Jazz Hands'></a></li><li><a href='http://www.flickr.com/photos/fatty/2661838119/'><img src='http://farm4.static.flickr.com/3032/2661838119_935b42efb3_s.jpg' alt='flickr favourite: Couple'></a></li><li><a href='http://www.flickr.com/photos/fatty/2661835697/'><img src='http://farm4.static.flickr.com/3055/2661835697_e23f6a2d21_s.jpg' alt='flickr favourite: Aiming'></a></li><li><a href='http://www.flickr.com/photos/fatty/2661833249/'><img src='http://farm4.static.flickr.com/3158/2661833249_293b1a1873_s.jpg' alt='flickr favourite: Neil'></a></li><li><a href='http://www.flickr.com/photos/chewbeaker/2661079113/'><img src='http://farm4.static.flickr.com/3134/2661079113_4d52766846_s.jpg' alt='flickr favourite: Dock Dogs'></a></li><li><a href='http://www.flickr.com/photos/chewbeaker/2661078493/'><img src='http://farm4.static.flickr.com/3076/2661078493_e4d54a8683_s.jpg' alt='flickr favourite: Retriever'></a></li><li><a href='http://www.flickr.com/photos/actel/2605059041/'><img src='http://farm4.static.flickr.com/3050/2605059041_e469749831_s.jpg' alt='flickr favourite: Reservoir Dogs'></a></li><li><a href='http://www.flickr.com/photos/actel/2548878245/'><img src='http://farm4.static.flickr.com/3070/2548878245_6825e515c6_s.jpg' alt='flickr favourite: iPhones @ ten paces'></a></li><li><a href='http://www.flickr.com/photos/fatty/2461539477/'><img src='http://farm3.static.flickr.com/2294/2461539477_aa588abbde_s.jpg' alt='flickr favourite: Heresy'></a></li><li><a href='http://www.flickr.com/photos/benward/2386754269/'><img src='http://farm3.static.flickr.com/2269/2386754269_9aedb8243b_s.jpg' alt='flickr favourite: IMG_6978.JPG'></a></li><li><a href='http://www.flickr.com/photos/weboutput/2386527943/'><img src='http://farm3.static.flickr.com/2015/2386527943_9227b4baf2_s.jpg' alt='flickr favourite: Sub Standards Spreadable'></a></li><li><a href='http://www.flickr.com/photos/weboutput/2387357284/'><img src='http://farm3.static.flickr.com/2131/2387357284_101fafcfbc_s.jpg' alt='flickr favourite: ... and now you're a Tiger! a Tiger!'></a></li><li><a href='http://www.flickr.com/photos/weboutput/2387355010/'><img src='http://farm3.static.flickr.com/2295/2387355010_b37cc870f1_s.jpg' alt='flickr favourite: awesome'></a></li><li><a href='http://www.flickr.com/photos/weboutput/2387354784/'><img src='http://farm4.static.flickr.com/3049/2387354784_25f0ab93d2_s.jpg' alt='flickr favourite: pseudo inteligent screamer'></a></li><li><a href='http://www.flickr.com/photos/weboutput/2386524629/'><img src='http://farm3.static.flickr.com/2132/2386524629_baa9f78ab3_s.jpg' alt='flickr favourite: proto tech'></a></li><li><a href='http://www.flickr.com/photos/chewbeaker/2357108117/'><img src='http://farm3.static.flickr.com/2024/2357108117_65323fcd0f_s.jpg' alt='flickr favourite: Neil'></a></li><li><a href='http://www.flickr.com/photos/fatty/2352038948/'><img src='http://farm4.static.flickr.com/3190/2352038948_b1fb0202e2_s.jpg' alt='flickr favourite: Neil and Becca'></a></li><li><a href='http://www.flickr.com/photos/fatty/2351092187/'><img src='http://farm3.static.flickr.com/2350/2351092187_d82c94a431_s.jpg' alt='flickr favourite: Cracking'></a></li><li><a href='http://www.flickr.com/photos/rayan_jeroen/2321002191/'><img src='http://farm4.static.flickr.com/3266/2321002191_c02bb9afb4_s.jpg' alt='flickr favourite: sarah connor chronicles'></a></li><li><a href='http://www.flickr.com/photos/chewbeaker/1419591482/'><img src='http://farm2.static.flickr.com/1159/1419591482_01a92d4cbc_s.jpg' alt='flickr favourite: Neil'></a></li><li><a href='http://www.flickr.com/photos/drewm/465508522/'><img src='http://farm1.static.flickr.com/221/465508522_bf248b8058_s.jpg' alt='flickr favourite: Neil'></a></li></ol>
  		  </div>
  		  <div class='ft'>
      		<p>Thu, 19 Apr 2007 16:11:35 -0700</p>
        </div>
      </div>
  	</li>
		<li class='module upcoming'>
		  <div>
  		  <div class='hd'>
  		    <h3><a href='http://upcoming.yahoo.com/event/148676/'>Pub Standards 100 at Bricklayers Arms, Fitzrovia</a></h3>
  		  </div>
  		  <div class='bd'>
  		    <p class='date'><span>Mar 2014</span>13</p>
  		    <p>Celebrate the 100th Pub Standards!</p>
  		  </div>
			  <div class='ft'>
			    <p>Tue, 06 Feb 2007 00:54:42 -0800</p>
        </div>
      </div>
		</li></ol>
              </div>
              <div class='yui-u'>
                
                <!--<div class='module camwhore'>
                  <div class='hd'>
                    <h2>Cam Whore</h2>
                  </div>
                  <div class='bd'>
                    <p>
                      <img src='http://www.workingwith.me.uk/images/camwhore.jpg' alt='What my laptop sees'>
                    </p>
                  </div>
                  <div class='ft'></div>
                </div>-->

                <div id='otherssaid'>
                <h2>From Elsewhere <a href='/others-said.rss'><img src='/images/feed-icon-14x14.png' alt='RSS'></a></h2>

                <ol>
		<li class='module'>
		  <div>
		    <div class='hd'>
			    <h3><a href='http://feeds.feedburner.com/~r/sijobling/~3/440649677/simey_j'>Links for 2008-11-02 [del.icio.us]</a></h3>
			  </div>
			  <div class='bd'>
			    There is very little purpose apart from a little selfish voyeurism. Bond opening 'breaks <b>UK</b> records' In it's first day of release, Quantum of...
			  </div>
			  <div class='ft'>
			    <p>Sun, 02 Nov 2008 21:00:00 -0800</p>
			  </div>
			</div>
		</li>
		<li class='module'>
		  <div>
		    <div class='hd'>
			    <h3><a href='http://www.mybloglog.com/buzz/members/sijobling/newwith/me/?eid=1225664730_9_18148831'>How to Automatically Take Photos Using Your Mac’s Webcam</a></h3>
			  </div>
			  <div class='bd'>
			    I remember seeing Neil Crosby's automated photo script at Yahoo! and was one of the many techies who asked how he did it.
			  </div>
			  <div class='ft'>
			    <p>Sun, 02 Nov 2008 14:25:00 -0800</p>
			  </div>
			</div>
		</li>
		<li class='module'>
		  <div>
		    <div class='hd'>
			    <h3><a href='http://feeds.feedburner.com/~r/sijobling/~3/437681660/simey_j'>Links for 2008-10-30 [del.icio.us]</a></h3>
			  </div>
			  <div class='bd'>
			    Stephen Fry has collated all his Twitter activity - photographs, tweets and replies - into one well organised and useful section on his website.
			  </div>
			  <div class='ft'>
			    <p>Thu, 30 Oct 2008 22:00:00 -0700</p>
			  </div>
			</div>
		</li>
		<li class='module'>
		  <div>
		    <div class='hd'>
			    <h3><a href='http://www.mybloglog.com/buzz/members/sijobling/newwith/me/?eid=1225395078_9_17983451'>Five ways to make offline working easier</a></h3>
			  </div>
			  <div class='bd'>
			    Neil Crosby suggest five techniques to working as a web developer offline - something you may not consider that important in the cloud computing era
			  </div>
			  <div class='ft'>
			    <p>Thu, 30 Oct 2008 12:31:00 -0700</p>
			  </div>
			</div>
		</li>
		<li class='module'>
		  <div>
		    <div class='hd'>
			    <h3><a href='http://tumblr.iamdanw.com/post/56981997'>Five ways to make offline working easier</a></h3>
			  </div>
			  <div class='bd'>
			    Five ways to make offline working easier
			  </div>
			  <div class='ft'>
			    <p>Wed, 29 Oct 2008 13:32:19 -0700</p>
			  </div>
			</div>
		</li>
    <li class='module flickr'>
  	  <div>
  		  <div class='hd'>
  		    <h3>Flickr</h3>
  		  </div>
  		  <div class='bd'>
  	    	<ol><li><a href='http://www.flickr.com/photos/actel/2960587577/'><img src='http://farm4.static.flickr.com/3062/2960587577_9bd1f8df2f_s.jpg' alt='Brokeback'></a></li><li><a href='http://www.flickr.com/photos/actel/2960581679/'><img src='http://farm4.static.flickr.com/3023/2960581679_d534e69ac2_s.jpg' alt='The Love That Dare Not Speak Its Name'></a></li></ol>
  		  </div>
  		  <div class='ft'>
      		<p>Tue, 21 Oct 2008 05:16:18 -0700</p>
        </div>
      </div>
  	</li>
		<li class='module'>
		  <div>
		    <div class='hd'>
			    <h3><a href='http://portal.lacaterinca.com/moos-business-card-api-and-the-mashups-made-with-it/'>MOO’s Business Card API And The Mashups Made With It</a></h3>
			  </div>
			  <div class='bd'>
			    The popular and quirky MOO.com is a print shop providing stickers, postcards, business cards and personal introduction cards, which are narrower and
			  </div>
			  <div class='ft'>
			    <p>Tue, 14 Oct 2008 22:52:00 -0700</p>
			  </div>
			</div>
		</li>
		<li class='module'>
		  <div>
		    <div class='hd'>
			    <h3><a href='http://allinthehead.com/retro/332/the-trouble-with-barcamp'>The Trouble with BarCamp</a></h3>
			  </div>
			  <div class='bd'>
			    had a ticket but didn’t show up for BarCamp London 5
			  </div>
			  <div class='ft'>
			    <p>Tue, 14 Oct 2008 09:25:23 -0700</p>
			  </div>
			</div>
		</li>
		<li class='module'>
		  <div>
		    <div class='hd'>
			    <h3><a href='http://allinthehead.com/retro/332/the-trouble-with-barcamp'>The Trouble with BarCamp</a></h3>
			  </div>
			  <div class='bd'>
			    After reading Neil Crosby’s post on the people who had a ticket but didn’t show up for BarCamp London 5, I began to write up some thoughts as a
			  </div>
			  <div class='ft'>
			    <p>Tue, 14 Oct 2008 09:25:00 -0700</p>
			  </div>
			</div>
		</li>
		<li class='module'>
		  <div>
		    <div class='hd'>
			    <h3><a href='http://blog.programmableweb.com/2008/10/13/moo-card-mashup-winners-at-barcamp-london/'>MOO Card Mashup Winners at BarCamp London</a></h3>
			  </div>
			  <div class='bd'>
			    Mashup contests can be a good way to reveal the variety of applications that are possible when the developer community is provided with a quality...
			  </div>
			  <div class='ft'>
			    <p>Mon, 13 Oct 2008 02:50:00 -0700</p>
			  </div>
			</div>
		</li>
		<li class='module'>
		  <div>
		    <div class='hd'>
			    <h3><a href='http://blog.programmableweb.com/2008/10/13/moo-card-mashup-winners-at-barcamp-london/'>MOO Card Mashup Winners at BarCamp London</a></h3>
			  </div>
			  <div class='bd'>
			    together in hours, in true barcamp spirit), but they do demonstrate the range of things one can do quite nicely. We have now listed four of them in our directory. As a matter of fact, all of today’s mashups are MOO mashups. The winning entry was Ten Word Moo Card, submitted by Neil Crosby. Neil’s application takes the best rated reviews from TheTenWordReview.com and automatically creates MOO cards from them, using the MOO API (our Ten Word Moo Card mashup profile
			  </div>
			  <div class='ft'>
			    <p>Sun, 12 Oct 2008 22:50:18 -0700</p>
			  </div>
			</div>
		</li>
		<li class='module'>
		  <div>
		    <div class='hd'>
			    <h3><a href='http://blog.programmableweb.com/2008/10/13/moo-card-mashup-winners-at-barcamp-london/'>MOO Card Mashup Winners at BarCamp London</a></h3>
			  </div>
			  <div class='bd'>
			    spirit), but they do demonstrate the range of things one can do quite nicely. We have now listed four of them in our directory. As a matter of fact, all of today’s mashups are MOO mashups. The winning entry was Ten Word Moo Card, submitted by Neil Crosby. Neil’s application takes the best rated reviews from TheTenWordReview.com and automatically creates MOO cards from them, using the MOO API (our Ten Word Moo Card mashup profile). Here’s an example MOO card created by Neil
			  </div>
			  <div class='ft'>
			    <p>Sun, 12 Oct 2008 22:50:18 -0700</p>
			  </div>
			</div>
		</li>
		<li class='module'>
		  <div>
		    <div class='hd'>
			    <h3><a href='http://tribulaciones.org/?p=21'>La crisis ninja</a></h3>
			  </div>
			  <div class='bd'>
			    
			  </div>
			  <div class='ft'>
			    <p>Sun, 12 Oct 2008 14:57:16 -0700</p>
			  </div>
			</div>
		</li>
		<li class='module'>
		  <div>
		    <div class='hd'>
			    <h3><a href='http://moocards.vox.com/library/post/moo-api-hacks-at-barcamplondon5---and-a-winner.html'>MOO API hacks at BarCampLondon5 - and a winner</a></h3>
			  </div>
			  <div class='bd'>
			    Make MOO Postcards from Flickr Sunsets by Nathan O'Hanlon Make MOO minicards from Amazon book covers. by Simon Willison Generate minicards with your Wii codes on them for sharing by Dominic Hodgson (and (unnamed) girlfriend) Ten Word Review Moo cards which takes reviews from , The Ten Word Review and renders them into cards. by Neil Crosby
			  </div>
			  <div class='ft'>
			    <p>Mon, 06 Oct 2008 08:43:18 -0700</p>
			  </div>
			</div>
		</li>
		<li class='module'>
		  <div>
		    <div class='hd'>
			    <h3><a href='http://www.moo.com/blog/2008/10/06/moo-api-hacks-at-barcamplondon5-and-a-winner/'>MOO API hacks at BarCampLondon5 - and a winner</a></h3>
			  </div>
			  <div class='bd'>
			    Make MOO Postcards from Flickr Sunsets by Nathan O’Hanlon Make MOO minicards from Amazon book covers. by Simon Willison Generate minicards with your Wii codes on them for sharing by Dominic Hodgson (and (unnamed) girlfriend) Ten Word Review Moo cards which takes reviews from , The Ten Word Review and renders them into cards. by Neil Crosby
			  </div>
			  <div class='ft'>
			    <p>Mon, 06 Oct 2008 08:30:29 -0700</p>
			  </div>
			</div>
		</li>
		<li class='module'>
		  <div>
		    <div class='hd'>
			    <h3><a href='http://itfun.jp'>itFun.jp</a></h3>
			  </div>
			  <div class='bd'>
			    HTML 4(.01)ever on Flickr - Photo Sharing! 気にしたことないですが、HTMLやXHTMLであるための最小限のコードってどんなモン
			  </div>
			  <div class='ft'>
			    <p>Mon, 06 Oct 2008 03:41:41 -0700</p>
			  </div>
			</div>
		</li>
    <li class='module flickr'>
  	  <div>
  		  <div class='hd'>
  		    <h3>Flickr</h3>
  		  </div>
  		  <div class='bd'>
  	    	<ol><li><a href='http://www.flickr.com/photos/cristiano_betta/2909878811/'><img src='http://farm4.static.flickr.com/3044/2909878811_ebe3aa72a2_s.jpg' alt='Neil @ BarcampLondon5 - Day 1'></a></li><li><a href='http://www.flickr.com/photos/cristiano_betta/2909877745/'><img src='http://farm4.static.flickr.com/3193/2909877745_fa741b9c4d_s.jpg' alt='Neil @ BarcampLondon5 - Day 1'></a></li></ol>
  		  </div>
  		  <div class='ft'>
      		<p>Fri, 03 Oct 2008 14:54:23 -0700</p>
        </div>
      </div>
  	</li>
		<li class='module'>
		  <div>
		    <div class='hd'>
			    <h3><a href='http://meccaibrahim.co.uk/post/52612622'>The Code Train » Blog Archive » Ten Word Moo Card</a></h3>
			  </div>
			  <div class='bd'>
			    The Code Train » Blog Archive » Ten Word Moo Card
			  </div>
			  <div class='ft'>
			    <p>Wed, 01 Oct 2008 09:01:46 -0700</p>
			  </div>
			</div>
		</li>
    <li class='module flickr'>
  	  <div>
  		  <div class='hd'>
  		    <h3>Flickr</h3>
  		  </div>
  		  <div class='bd'>
  	    	<ol><li><a href='http://www.flickr.com/photos/rugbymadgirl/2895709451/'><img src='http://farm4.static.flickr.com/3265/2895709451_8b74a17e49_s.jpg' alt='Mooooooose!'></a></li><li><a href='http://www.flickr.com/photos/rugbymadgirl/2896550544/'><img src='http://farm4.static.flickr.com/3151/2896550544_baa0dcf66d_s.jpg' alt='Worship The Jesusphone!'></a></li><li><a href='http://www.flickr.com/photos/alistair_uk/2892452254/'><img src='http://farm4.static.flickr.com/3186/2892452254_39491ce7a5_s.jpg' alt='Monkeying around'></a></li></ol>
  		  </div>
  		  <div class='ft'>
      		<p>Sat, 27 Sep 2008 08:12:10 -0700</p>
        </div>
      </div>
  	</li>
		<li class='module'>
		  <div>
		    <div class='hd'>
			    <h3><a href='http://www.coroflot.com/creativeseeds'>Coroflot - Coroflot's Creative Seeds Blog</a></h3>
			  </div>
			  <div class='bd'>
			    make a note and check it out. At worst, you'll at least have something to discuss the next time you chat, or when sitting for an interview. At best, you'll learn something that makes you better at your job; it's not all hand skills, after all. photo: thevoicewithin
			  </div>
			  <div class='ft'>
			    <p>Thu, 18 Sep 2008 14:41:45 -0700</p>
			  </div>
			</div>
		</li>
    <li class='module flickr'>
  	  <div>
  		  <div class='hd'>
  		    <h3>Flickr</h3>
  		  </div>
  		  <div class='bd'>
  	    	<ol><li><a href='http://www.flickr.com/photos/mikewest/2855192791/'><img src='http://farm4.static.flickr.com/3246/2855192791_b4d22660f7_s.jpg' alt='Going Away Beer'></a></li><li><a href='http://www.flickr.com/photos/actel/2843591555/'><img src='http://farm4.static.flickr.com/3274/2843591555_9e8b4805a5_s.jpg' alt='Story Time'></a></li><li><a href='http://www.flickr.com/photos/fatty/2840235017/'><img src='http://farm4.static.flickr.com/3069/2840235017_3ee2e43282_s.jpg' alt='Rictus'></a></li><li><a href='http://www.flickr.com/photos/fatty/2840149215/'><img src='http://farm4.static.flickr.com/3134/2840149215_ae65c9c786_s.jpg' alt='Waiting'></a></li></ol>
  		  </div>
  		  <div class='ft'>
      		<p>Mon, 08 Sep 2008 14:15:03 -0700</p>
        </div>
      </div>
  	</li>
		<li class='module'>
		  <div>
		    <div class='hd'>
			    <h3><a href='http://gurthg.killer.mud.pl/index.php/2008/09/07/zasada-nieoznaczonoci-heizenberga-w-kiblu/'>zasada nieoznaczoności heizenberga w kiblu</a></h3>
			  </div>
			  <div class='bd'>
			    
			  </div>
			  <div class='ft'>
			    <p>Sun, 07 Sep 2008 15:21:29 -0700</p>
			  </div>
			</div>
		</li>
    <li class='module flickr'>
  	  <div>
  		  <div class='hd'>
  		    <h3>Flickr</h3>
  		  </div>
  		  <div class='bd'>
  	    	<ol><li><a href='http://www.flickr.com/photos/kapowaz/2832925753/'><img src='http://farm4.static.flickr.com/3161/2832925753_3acf2bb63e_s.jpg' alt='Neil gets told off'></a></li><li><a href='http://www.flickr.com/photos/kapowaz/2833759262/'><img src='http://farm4.static.flickr.com/3273/2833759262_88f372c089_s.jpg' alt='Neil'></a></li><li><a href='http://www.flickr.com/photos/codepo8/2826935113/'><img src='http://farm4.static.flickr.com/3121/2826935113_75093ae08a_s.jpg' alt='SearchMonkey Munich'></a></li><li><a href='http://www.flickr.com/photos/codepo8/2826934693/'><img src='http://farm4.static.flickr.com/3045/2826934693_6aa15698f7_s.jpg' alt='SearchMonkey Munich'></a></li><li><a href='http://www.flickr.com/photos/codepo8/2827770820/'><img src='http://farm3.static.flickr.com/2093/2827770820_200538933d_s.jpg' alt='SearchMonkey Munich'></a></li><li><a href='http://www.flickr.com/photos/codepo8/2827770662/'><img src='http://farm4.static.flickr.com/3172/2827770662_690b56f888_s.jpg' alt='SearchMonkey Munich'></a></li><li><a href='http://www.flickr.com/photos/codepo8/2826932563/'><img src='http://farm4.static.flickr.com/3068/2826932563_1185a6b848_s.jpg' alt='SearchMonkey Munich'></a></li></ol>
  		  </div>
  		  <div class='ft'>
      		<p>Thu, 04 Sep 2008 04:33:35 -0700</p>
        </div>
      </div>
  	</li>
		<li class='module'>
		  <div>
		    <div class='hd'>
			    <h3><a href='http://www.mrbrownshow.com'>the mrbrown show</a></h3>
			  </div>
			  <div class='bd'>
			    Photo by thevoicewithin We may need to change strategy in our chase for an Olympic gold medal. Podcast: the mrbrown show 18 Aug 2008: the singapore chase for olympic gold Download MP3
			  </div>
			  <div class='ft'>
			    <p>Sun, 17 Aug 2008 13:27:52 -0700</p>
			  </div>
			</div>
		</li>
		<li class='module'>
		  <div>
		    <div class='hd'>
			    <h3><a href='http://www.mrbrownshow.com/2008/08/18/the-mrbrown-show-the-singapore-chase-for-olympic-gold/'>the mrbrown show: the singapore chase for olympic gold</a></h3>
			  </div>
			  <div class='bd'>
			    
			  </div>
			  <div class='ft'>
			    <p>Sun, 17 Aug 2008 13:00:15 -0700</p>
			  </div>
			</div>
		</li>
    <li class='module flickr'>
  	  <div>
  		  <div class='hd'>
  		    <h3>Flickr</h3>
  		  </div>
  		  <div class='bd'>
  	    	<ol><li><a href='http://www.flickr.com/photos/actel/2764453869/'><img src='http://farm4.static.flickr.com/3192/2764453869_94fefb4c79_s.jpg' alt='Jazz Hands'></a></li></ol>
  		  </div>
  		  <div class='ft'>
      		<p>Fri, 15 Aug 2008 04:40:53 -0700</p>
        </div>
      </div>
  	</li>
		<li class='module'>
		  <div>
		    <div class='hd'>
			    <h3><a href='http://bwatwood.edublogs.org'>Learning In a Flat World</a></h3>
			  </div>
			  <div class='bd'>
			    s question as to why more did not bring laptops to the literacy workshop resonates with me. I would be interested in what you in the edublogosphere think about this - as it can help frame our start-up towards researching this topic. {Photo Credit: thevoicewithin} Authored by Britt. Hosted by Edublogs.
			  </div>
			  <div class='ft'>
			    <p>Wed, 06 Aug 2008 12:19:18 -0700</p>
			  </div>
			</div>
		</li>
		<li class='module'>
		  <div>
		    <div class='hd'>
			    <h3><a href='http://www.core77.com/blog/featured_items/climbing_out_of_the_genius_trap_by_carl_alviani_10681.asp'>Climbing out of the Genius Trap by Carl Alviani</a></h3>
			  </div>
			  <div class='bd'>
			    check it out. At worst, you'll at least have something to discuss the next time you chat, or when sitting for an interview. At best, you'll learn something that makes you better at your job; it's not all hand skills, after all. &gt;&gt; read article photo: thevoicewithin ...
			  </div>
			  <div class='ft'>
			    <p>Tue, 05 Aug 2008 08:41:29 -0700</p>
			  </div>
			</div>
		</li>
		<li class='module'>
		  <div>
		    <div class='hd'>
			    <h3><a href='http://www.core77.com/blog/featured_items/climbing_out_of_the_genius_trap_by_carl_alviani_10681.asp'>Climbing out of the Genius Trap by Carl Alviani</a></h3>
			  </div>
			  <div class='bd'>
			    check it out. At worst, you'll at least have something to discuss the next time you chat, or when sitting for an interview. At best, you'll learn something that makes you better at your job; it's not all hand skills, after all. &gt;&gt; read article photo: thevoicewithin ...
			  </div>
			  <div class='ft'>
			    <p>Tue, 05 Aug 2008 07:22:29 -0700</p>
			  </div>
			</div>
		</li>
		<li class='module'>
		  <div>
		    <div class='hd'>
			    <h3><a href='http://core77.com/blog'>Core77 / industrial design magazine + resource / blog</a></h3>
			  </div>
			  <div class='bd'>
			    Posted by: core jr | Comments (0) photo: thevoicewithin Over at Coroflot's Creative Seeds Carl Alviani has compiled another inspiring list: Eight Real Ways to Build Your Creative Skill Set. To sum it up, knowledge is key, what you don't know, or don't try, can't help you. Here's a snippet in his words:
			  </div>
			  <div class='ft'>
			    <p>Mon, 04 Aug 2008 08:19:17 -0700</p>
			  </div>
			</div>
		</li>
		<li class='module'>
		  <div>
		    <div class='hd'>
			    <h3><a href='http://www.coroflot.com/creativeseeds/2008/07/getting_out_of_the_genius_trap.asp'>Climbing out of the Genius Trap: Eight Real Ways to Build Your Creative Skill Set</a></h3>
			  </div>
			  <div class='bd'>
			    
			  </div>
			  <div class='ft'>
			    <p>Wed, 30 Jul 2008 10:54:24 -0700</p>
			  </div>
			</div>
		</li>
		<li class='module'>
		  <div>
		    <div class='hd'>
			    <h3><a href='http://www.ashmade.com/blog/?p=124'>Nice Pixel Art Tattoos</a></h3>
			  </div>
			  <div class='bd'>
			    HERE
			  </div>
			  <div class='ft'>
			    <p>Tue, 08 Jul 2008 09:30:42 -0700</p>
			  </div>
			</div>
		</li></ol>
                </div>
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