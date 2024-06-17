<?php include('../header.php'); ?>

		<div class="container project-container">
			<div class="row justify-content-center text-center">
				<div class="col-12 col-lg-6">
					<div class="container">
						<div class="row">
							<div class="col">
								<h1>America's Best Franchise</h1>
							</div>
						</div>
						<div class="row">
							<div class="col">
								<p>This is one of dozens of directories that catalogs hundreds of franchises and so, it needed to stand out from those other portals in both UI and UX. The searching process was simplified. The intent of the imagery and overall design was to convey a non-robotic, but helpful, fresh and fun service that would also appeal to the emotional aspect of a business decision.</p>
							</div>
						</div>
						<div class="row justify-content-center">
							<div class="col-12 col-sm-6 col-md-5">
								<strong>My Role</strong><br />
								UI Design
							</div>
							<div class="col-12 col-sm-6 col-md-5">
								<div class="d-block d-sm-none"><br /></div>
								<strong>Agency</strong><br />
								Wheat Creative
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
					<img src="../img/abf-browser.png" class="img-fluid" alt="UI Design, Front-End Development" />
				</div>
				<div class="col-10 expand-view d-none d-md-inline-block">
					<div id="abf-button-wrap">
						<a href="#" class="big-link no-transition" id="mkrs-button">Expand View</a>
					</div>
					
					<script type="text/javascript">
						var mkrsbutton = document.getElementById('mkrs-button');

						mkrsbutton.addEventListener("click", function(){
							var content = document.getElementById('mkrs-content');

							if (content.classList.contains("hide-content")) {
								content.classList.add("show-content-abf");			
								content.classList.remove("hide-content");		
								mkrsbutton.innerHTML = "Close";	
							} else {
								content.classList.add("hide-content");			
								content.classList.remove("show-content-abf");
								mkrsbutton.innerHTML = "Expand View";		
							}
						});
					</script>
				</div>
			</div>

			<div class="row justify-content-center align-items-center">
				<div class="col-12 text-center">
					<div class="d-block add-margin-top"></div>
					<img src="../img/abf-browser2.png" class="img-fluid mkr-mockup" alt="UI Design, Front-End Development" />
				</div>
			</div>

			<div class="row pagination">
				<div class="col text-center">
					<a href="/projects/hday.php" class="big-link">&larr; Previous</a> &nbsp;  &nbsp;  &nbsp; <a href="/projects/mkr.php" class="big-link">Next &rarr;</a>
				</div>
			</div>
		</div>

<?php include('../footer.php'); ?>
