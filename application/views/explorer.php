
	<style>
		body {
			background-color: #001935;
			color: whitesmoke;
			padding-top: 70px;
		}

		#sidebar>.list-group-item {
			padding: 0.4em 1em;
		}



		@media (min-width: 1em) {
			.card-columns {
				-webkit-column-count: 2;
				-moz-column-count: 2;
				column-count: 2;
				width: 700px;
			}

		}

		@media (max-width: 991.98px) {
			.card-columns {
				-webkit-column-count: 2;
				-moz-column-count: 2;
				column-count: 2;
				width: 700px;
			}
			.body {
				width: 991.98px;
			}
		}

		@media (min-width: 62em) {
			.card-columns {
				-webkit-column-count: 3;
				-moz-column-count: 3;
				column-count: 3;
				width: 1000px;
			}
		}

		@media (min-width: 80em) {
			.card-columns {
				-webkit-column-count: 4;
				-moz-column-count: 4;
				column-count: 4;
				width: 1300px;
			}
		}

		@media (min-width: 92em) {
			.card-columns {
				-webkit-column-count: 5;
				-moz-column-count: 5;
				column-count: 5;
				width: 1700px;
			}
		}

		.card-footer {
			position: relative;
		}

		.icons {
			position: ;
			top: -.35rem;
			font-size: 2.5em;
		}
	</style>

<div class="container pl-5 mt-5" >
	<div class="row justify-content-center">
		<div class="card-columns" >

<!--			Start Perulangan Explorer-->

			<div class="card" style="width: 300px;">
				<div class="class-header p-3 border-bottom" style="height: 60px">
					<a href="">
						<img src="https://66.media.tumblr.com/avatar_54b555cf6abd_64.pnj" class="img-fluid rounded" alt="" style="width: 30px">
					</a>
					<div>
					</div>
				</div>
				<img src="..." class="card-img-top" alt="...">
				<div class="card-body">
					<h5 class="card-title text-dark">INI JUDUL</h5>
					<p class="card-text text-dark">DUMMI TEKSXT</p>
				</div>
				<div class="card-footer">
					<div class="float-right">
						<ul class="list-inline text-muted">
							<li class="list-inline-item mr-2">
								<ion-icon name="send"></ion-icon>
							</li>
							<li class="list-inline-item mr-2">
								<!-- modal harus tetep open saat klik reply dan cuma ngehilang pas ngeclick outside -->
								<a id="komen" class="text-muted" href="#" data-backdrop="" data-toggle="modal" data-target="#modalKomen">
									<ion-icon name="text"></ion-icon>
								</a>
							</li>
							<li class="list-inline-item mr-2">
								<ion-icon name="repeat"></ion-icon>
							</li>
							<li class="list-inline-item mr-2">
								<ion-icon name="settings"></ion-icon>
							</li>
						</ul>
					</div>
				</div>
			</div>
<!--			End Perulangan explorer-->
		</div>
	</div>
</div>


