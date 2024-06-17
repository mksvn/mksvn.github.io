		<footer class="container-fluid">
			<div class="row">
				<div class="col">
					<div class="container">
						<div class="row justify-content-between">
							<div class="col-12 text-center col-md-6 text-md-left">
								<a href="https://dribbble.com/michellemeksavanh" target="_blank" class="no-transition"><img src="../img/dribbble.svg" alt="Dribbble" class="footer-icons"></a>
								<a href="https://www.linkedin.com/in/michelle-meksavanh/" target="_blank" class="no-transition"><img src="../img/linkedin.svg" alt="LinkedIn" class="footer-icons" style="margin-top: -2px;"></a>
								<a href="mailto:m.mksvn@gmail.com" class="no-transition"><img src="../img/email.svg"></a> 
							</div>
							<div class="col-12 text-center col-md-6 text-md-right" id="copyright">
								&copy; Michelle Meksavanh 2019 
							</div>
						</div>
					</div>	
				</div>
			</div>
		</footer>
		</div> <!-- /.animsition-overlay -->
		
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.0/jquery.min.js"></script>
		<script src="../js/animsition.min.js"></script>

		<script type="text/javascript">

			var button = document.getElementById("menu-button");
			var header = document.getElementsByTagName("header");
			var main = document.getElementsByTagName("main");
			var logo = document.getElementsByClassName("navbar-brand");
			var click = 0;

			button.addEventListener("click", function() {
				var position = (window.pageYOffset || document.documentElement.scrollTop || document.body.scrollTop || 0);

				click ++;

				if (position < 25) {
					if (click % 2) { // opening nav (opens on odd number of clicks)
						header[0].style.backgroundColor = "#fff";
						header[0].style.borderBottom = "1px solid #ccc";
						logo[0].style.visibility = "hidden";
					} else { // closing nav
						setTimeout(function(){
							header[0].style.backgroundColor = "transparent"
							header[0].style.borderBottom = "none";
							logo[0].style.visibility = "visible";
						}, 350);
					}
				}

				if (click % 2){
					logo[0].style.visibility = "hidden";
				} else {
					logo[0].style.visibility = "visible";
				}
			});
			
			$(window).on("load resize scroll",function(e){
				var position = (window.pageYOffset || document.documentElement.scrollTop || document.body.scrollTop || 0);

				if (position > 25) {
					header[0].style.backgroundColor = "#fff";
					header[0].style.borderBottom = "1px solid #ccc";
				} else {
					var navbar = document.getElementById("navbarCollapse");

					// change header color only if menu is closed
					if (!navbar.classList.contains("show")) {
						header[0].style.backgroundColor = "transparent"
						header[0].style.borderBottom = "none";
					}
				}
			});

			$(document).ready(function() {
			  $("a").each(function(){
			  	if ( !(this.classList.contains("no-transition")) ) {
			  		$(this).addClass('animsition-link');
			  	}
			  });
			  $(".animsition-overlay").animsition({
			    inClass: 'overlay-slide-in-left',
			    outClass: 'overlay-slide-out-left',
			    inDuration: 1500,
			    outDuration: 800,
			    linkElement: '.animsition-link',
			    // e.g. linkElement: 'a:not([target="_blank"]):not([href^="#"])'
			    loading: true,
			    loadingParentElement: 'body', //animsition wrapper element
			    loadingClass: 'animsition-loading',
			    loadingInner: '', // e.g '<img src="loading.svg" />'
			    timeout: false,
			    timeoutCountdown: 5000,
			    onLoadEvent: true,
			    browser: [ 'animation-duration', '-webkit-animation-duration'],
			    // "browser" option allows you to disable the "animsition" in case the css property in the array is not supported by your browser.
			    // The default setting is to disable the "animsition" in a browser that does not support "animation-duration".
			    overlay : true,
			    overlayClass : 'animsition-overlay-slide',
			    overlayParentElement : 'body',
			    transition: function(url){ window.location.href = url; }
			  });
			});
		</script>
	</body>
</html>