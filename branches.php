<!DOCTYPE HTML>
<html>

<head>
  <title>Inno Tech - We care for you</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/php; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="style/style.css" />
</head>

<body>
  <div id="main">
    <div id="header">
      <div id="logo">
	  <img src="images/header.png" width="1000px" height="140px">
      </div>
      <div id="menubar">
        <ul id="menu">
          <!-- put class="selected" in the li tag for the selected page - to highlight which page you're on -->
          <li><a href="index.php">Home</a></li>
          <li><a href="about_us.php">About Us</a></li>
          
          <li class="selected"><a href="branches.php">Branches</a></li>
          <li><a href="contact.php">Feedback</a></li>
          
          <li><a href="news_event.php">News and Event</a></li>
        </ul>
      </div>
    </div>
    <div id="content_header"></div>
    <div id="site_content">
      <div id="banner">
<!--slider-->
			<div id="slidy-container">
				<figure id="slidy">
					<img src="images/slider/posdigital1.jpg" alt="">
					<img src="images/slider/posdigital2.jpg" alt="">
					<img src="images/slider/posdigital3.jpg" alt="">
					<img src="images/slider/posdigital4.jpg" alt="">
					<img src="images/slider/posdigital5.jpg" alt="">
				</figure>
			</div>
<!--script-->
			<script>
			var timeOnSlide = 3,
			timeBetweenSlides = 1,
			animationstring = 'animation',
			animation = false,
			keyframeprefix = '',
			domPrefixes = 'Webkit Moz O Khtml'.split(' '),
			pfx = '',
			slidy = document.getElementById("slidy");
			if (slidy.style.animationName !== undefined) { animation = true; }
			if ( animation === false ) {
			for ( var i = 0; i < domPrefixes.length; i++ ) {
			if ( slidy.style[ domPrefixes[i] + 'AnimationName' ] !== undefined ) {
			pfx = domPrefixes[ i ];
			animationstring = pfx + 'Animation';
			keyframeprefix = '-' + pfx.toLowerCase() + '-';
			animation = true;
			break;
			} } }
			if ( animation === false ) {
			// animate using a JavaScript fallback, if you wish
			} else {
			var images = slidy.getElementsByTagName("img"),
			firstImg = images[0],
			imgWrap = firstImg.cloneNode(false);
			slidy.appendChild(imgWrap);
			var imgCount = images.length,
			totalTime = (timeOnSlide + timeBetweenSlides) * (imgCount - 1),
			slideRatio = (timeOnSlide / totalTime)*100,
			moveRatio = (timeBetweenSlides / totalTime)*100,
			basePercentage = 100/imgCount,
			position = 0,
			css = document.createElement("style");
			css.type = "text/css";
			css.innerHTML += "#slidy { text-align: left; margin: 0; font-size: 0; position: relative; width: " + (imgCount * 100) + "%; }";
			css.innerHTML += "#slidy img { float: left; width: " + basePercentage + "%; }";
			css.innerHTML += "@"+keyframeprefix+"keyframes slidy {";
			for (i=0;i<(imgCount-1); i++) {
			position+= slideRatio;
			css.innerHTML += position+"% { left: -"+(i * 100)+"%; }";
			position += moveRatio;
			css.innerHTML += position+"% { left: -"+((i+1) * 100)+"%; }";
			}
			css.innerHTML += "}";
			css.innerHTML += "#slidy { left: 0%; "+keyframeprefix+"transform: translate3d(0,0,0); "+keyframeprefix+"animation: "+totalTime+"s slidy infinite; }";
			document.body.appendChild(css);
			}
			</script>
	  </div>
	  <div id="sidebar_container">
        <div class="sidebar">
          <div class="sidebar_item">
            <!-- insert your sidebar items here -->
		<div class="side_bar">	
			<a href="phones.php" class="sidebar_menu"><img src="images/icon/phonesicon.png" width="33" alt="Phones">&nbsp;&nbsp;Phones</a>
		</div>
		<div class="side_bar">	
			<a href="smartphones.php" class="sidebar_menu"><img src="images/icon/smartphone.png" width="33" alt="Phones">&nbsp;&nbsp;Smartphones</a>
		</div>
		<div class="side_bar">	
			<a href="tablets.php" class="sidebar_menu"><img src="images/icon/tableticon.png" width="33" alt="Phones">&nbsp;&nbsp;Tablets</a>
		</div>
		<div class="side_bar">	
			<a href="accessories.php" class="sidebar_menu"><img src="images/icon/accessoriesicon2.png" width="33" alt="Phones">&nbsp;&nbsp;Accessories</a>
		</div>
		
          </div>
        </div>
        <div class="sidebar"></div>
      </div>
      <div id="content">
		<h1 style="color:#0000ff; font-size:25px;">PRO DIGITAL BRANCHES &#38; CONCEPT STORES:</h1>
		<p style="font-size:18px;">There are branches all over Allahabad and other cities in India.</p>
	  
			<h1 style="color:#ff0000; font-size:30px;">Allahabad Branches:</h1>
					<table border="0" cellpadding="1" cellspacing="1">
						<tr>
							<td>			
					<ul>
							<h1>Civil Lines - Allahabad:</h1>
						<li>PRO Digital - Main</li>
<br />
						
						<li>Nokia Store - SM Bacolod</li>
<br />
						<li>Samsung Concept Store - SMB</li>
<br />
						
						<li>Cell Option Cellular Shop</li>
<br />
					</ul>						

					<h1>Out of Town:</h1>
					<ul>
						<li>PRO Digital - Andheri East, Mumbai</li>
<br />
						<li>PRO Digital - Kabankalan, New Delhi</li>
<br />
						<li>Nokia Store - San Carlos, New Delhi</li>
<br />
						<li>PRO Digital - Rajkot, New Delhi</li>
					</ul>
							</td>
						</tr>
					</table>
					<div align="right">
						<a href="#main" class="link1">Return to Top</a>
					</div>
					
			
					
			<h1 style="color:#ff0000; font-size:30px;">POS Digital-Main:</h1>
					<table border="0" cellpadding="1" cellspacing="1">
						<tr>
							<td>			
					<ul>
					<li><b>Address:</b> Nokia Store, Civil Lines, Allahabad (211002)</li>
<br />
					<li><b>Contact No.:</b> (063 34) 432 3223</li>
<br />
					<li><b>E-mail Address:</b> inno_tech@gmail.com</li>
					</ul>						
							</td>
						</tr>
					</table>
					<div align="right">
						<a href="#main" class="link1">Return to Top</a>
					</div>
					
	  </div>
    </div>
    <div id="content_footer"></div>
     <div id="footer">
      <p><a href="index.php">Home</a> | <a href="about_us.php">About Us</a> |<a href="branches.php">Branches</a> |
       <a href="contact.php">Feedback</a>| <a href="news_event.php">News and Event</a></p>
      <p>Copyright &copy; INNO TECH</p>
    </div>
  </div>
</body>
</html>
