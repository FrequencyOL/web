<style>
	
footer{
	display: flex;
    text-align: center;
    background-color: #fff;
    align-items: stretch;
    flex-direction: column;
    align-content: center;
}
footer .logo::after{
	position: relative;
	display:block;
	margin: auto;
	margin-top: 10px;
	content: "";
	height: 1px;
	width: 100%;
	background-color: #000;
}
footer .center{
	background-color: #000;
	padding-bottom: 20px;
}
footer .center ul{
	margin-top: 25px;
	position: relative;
	display: flex;
	justify-content: center;
	align-items: center;
}
footer .center ul li{
	position: relative;
	list-style: none;
}

footer .center ul li a{
	cursor: pointer;
	text-shadow: 1px 1px #000;
	stroke          : black;
  	stroke-width    : .5px;
  	stroke-linejoin : round;
	position: relative;
	text-decoration: none;
	margin: 0 15px;
	color: #fff;
	letter-spacing: 2px;
	font-weight: 500;
	transition: 0.3s;
}
footer .center ul li a:hover{
color: #fcba03;}
</style>
<footer>
	<a href="#top" class="logo">LOGO</a>
		<div class="center">
			<ul>
				<li><a data-link="" >About us</a></li>
				<li><a data-link="" >Order Now!</a></li>
				<li><a data-link="" >Menu</a></li>
			</ul>
		</div>
	</footer>
<script src="scripts.js"></script>
</body>