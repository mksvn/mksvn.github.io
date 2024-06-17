<?php include('../header.php'); ?>

		<div class="container project-container">
			<div class="row justify-content-center text-center">
				<div class="col-12 col-lg-6">
					<div class="container">
						<div class="row">
							<div class="col">
								<h1>Makers on Pecos Ridge</h1>
							</div>
						</div>
						<div class="row">
							<div class="col">
								<p>Makers is a cutting-edge office and retail space designed to bring Henderson’s makers together and foster collaborative creation invention, and innovation. I crafted a modern-industrial design to match the feeling that the property conveys. </p>
							</div>
						</div>
						<div class="row justify-content-center">
							<div class="col-12">
								<strong>My Role</strong><br />
								UX/UI Design, Front-End Development
							</div>
						</div>
						<div class="row">
							<div class="container divider"></div>
						</div>
					</div>
				</div>
			</div>

			<div class="row justify-content-center align-items-center text-center">
				<div id="mkrs-content" class="col-12 hide-content">
					<img src="../img/mkrs-home.jpg" class="img-fluid" alt="UI Design, Front-End Development" />
				</div>
				<div class="col-10" style="margin-top: -50px;">
					<div id="mkrs-button-wrap" class="d-none d-md-inline-block">
						<a href="#" class="big-link no-transition" id="mkrs-button">Expand View</a>
					</div>
					
					<script type="text/javascript">
						var mkrsbutton = document.getElementById('mkrs-button');

						mkrsbutton.addEventListener("click", function(){
							var content = document.getElementById('mkrs-content');

							if (content.classList.contains("hide-content")) {
								content.classList.add("show-content");			
								content.classList.remove("hide-content");		
								mkrsbutton.innerHTML = "Close";	
							} else {
								content.classList.add("hide-content");			
								content.classList.remove("show-content");
								mkrsbutton.innerHTML = "Expand View";		
							}
						});
					</script>
				</div>
			</div>

			<div class="row justify-content-center text-center">
				<div class="col-12 col-lg-6">
					<p><small>Interactive Map</small></p>
					Using the Mapbox JavaSript library, I took the client’s long list of nearby attractions and rendered a custom interactive map. The attractions were put into three different datasets, which are loaded into the map upon selection.
				</div>
			</div>

			<div class="row justify-content-center align-items-center text-center add-margin-top">
				<div class="col-12 col-md-4">
					<img src="../img/mkrs-wireframes2.png" class="mkr-wireframe" alt="UI Design, Front-End Development" />
				</div>
				<div class="col-12 col-md-8">
					<div class="d-block d-md-none add-margin-top"></div>
					<img src="../img/mkrs-mockups2.png" class="img-fluid mkr-mockup" alt="UI Design, Front-End Development" />
				</div>
				<div class="col-12 col-lg-10">
					<div class="d-block add-margin-top"></div>
					<img src="../img/mkrs-mockups.png" class="img-fluid" alt="UI Design, Front-End Development" />
				</div>
			</div>

			<div class="row justify-content-center align-items-center">
				<div class="col-12 col-md-4">
					<div class="d-block add-margin-top"></div>
					<img src="../img/mkrs-wireframes.png" class="mkr-wireframe" alt="UI Design, Front-End Development" />
				</div>
				<div class="col-12 col-md-8">
					<div class="d-block add-margin-top"></div>
					<img src="../img/mkrs-mockups3.png" class="img-fluid mkr-mockup" alt="UI Design, Front-End Development" />
				</div>
			</div>

			<div class="row pagination">
				<div class="col text-center">
					<a href="/projects/abf.php" class="big-link">&larr; Previous</a> &nbsp;  &nbsp;  &nbsp; <a href="/projects/alg.php" class="big-link">Next &rarr;</a>
				</div>
			</div>
		</div>

<?php include('../footer.php'); ?>
