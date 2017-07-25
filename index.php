<!DOCTYPE HTML>

<html>
	<head>
		<title>Aerial by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="css/style.css" />
	</head>
	<body class="loading" id="idd">
		<div id="wrapper">
			<div id="bg"></div>
			<div id="overlay"></div>


				<!-- Header -->
        <div id="wrapper2">
          <section id="main">
						<header>
							<span class="avatar"><img src="images/avatar.jpg" alt="" /></span>
              <h1>Mohamed KERMICHE</h1>
              <p>Security Chief &nbsp;&bull;&nbsp; Cyborg &nbsp;&bull;&nbsp; Never asked for this</p>
            </header>

						<footer>
							<ul class="icons">
								<li><a href="#" class="fa-twitter">Twitter</a></li>
								<li><a href="#" class="fa-instagram">Instagram</a></li>
								<li><a href="#" class="fa-facebook">Facebook</a></li>
							</ul>
						</footer>
					</section>
          <p>dsfjdgjpdgherhou</p>
        </div>

				<!-- Footer -->

          <?php include "includes/footer.php" ?>



		</div>
    <!-- Identity -->

    <script src="js/script.js"></script>

    <script>
      if ('addEventListener' in window) {
        window.addEventListener('load', function() { document.body.className = document.body.className.replace(/\bis-loading\b/, ''); });
        document.body.className += (navigator.userAgent.match(/(MSIE|rv:11\.0)/) ? ' is-ie' : '');
      }
    </script>

		<script>
			window.onload = function() { document.body.className = ''; }
			window.ontouchmove = function() { return false; }
			window.onorientationchange = function() { document.body.scrollTop = 0; }
		</script>


	</body>
</html>
