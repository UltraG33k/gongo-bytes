<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width">
        <title>Gongo Bytes Calculator</title>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.min.css">
        <script defer src="https://use.fontawesome.com/releases/v5.6.3/js/all.js" integrity="sha384-EIHISlAOj4zgYieurP0SdoiBYfGJKkgWedPHH4jCzpCXLmzVsw1ouK59MuUtP4a1" crossorigin="anonymous"></script>
		<link rel="shortcut icon" href="favicon.ico">
		<style>
			html, body {
				height: 100vh;
			}
			
			.footer {
				position: absolute;
				left: 0;
				right: 0;
				bottom: 0;
				opacity: .5;
			}
			
			h1, h2 {
				color: #FFF !important;
				text-shadow: 0px 0px 1px #000;
			}
		</style>
	</head>
	<body>
		<section class="container has-text-centered">
			<br>
			<h1 class="title">Gongo Bytes!</h1>
			<h2 class="subtitle">A calculator that will convert regular numbers to Gongo Bytes</h2>
			<br>
		</section>
		<section class="container">
			<div class="field">
				<div class="control">
					<input class="input is-large" id="gongo-in" min="0" type="number" placeholder="Input number">
				</div>
			</div>
			<div class="field">
				<div class="control">
					<input class="input is-large" id="gongo-out" disabled type="text" placeholder="Your Gongo Bytes will appear here...">
				</div>
			</div>
		</section>
		<footer class="footer">
			<div class="container has-text-centered">
				<p>Made by <a href="https://martinbillebroberg.dk" target="_blank">Martin Bille Broberg</a> because he could.</p>
			</div>			
		</footer>
		<script src="js/gongo.js"></script>
	</body>
</html>