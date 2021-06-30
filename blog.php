<?php include('header.php'); ?>
<section>
	<div class="breadcrumb">
		<span style="text-transform: none;">Imóveis Urbanos</span>
		<p class="sub-title">6.455 imóveis disponíveis</p>

	</div>
</section>
<main id="blog" tabindex="-1" aria-labelledby="a11y-title">
	<section class="list-posts">

		<div class="container">
			<div class="skip-link-box">
				<button class="skip-link" onKeyPress="skipLink(skipPosts)">Pular listagem de categorias</button>

			</div>

			<div class="row">
				<div class="categories d-md-none col-12">
					<label class="select-custom-box" aria-label="Categorias">
						<select name="categories" id="categories">
							<option value="Casa">Casa</option>
							<option value="Apartamento">Apartamento</option>
							<option value="Comercial">Comercial</option>
							<option value="Sobrado">Sobrado</option>
						</select>
						<div class="text">
							<span>Filtrar</span>
						</div>
					</label>
				</div>
				<nav class="categories d-none d-md-block col-3 col-xxl-4">
					<form action="">
						<h2 id="category-header" class="label">Categorias</h2>
						<ul class="" aria-labelledby="category-header">

							<li>
								<input id="casa" type="checkbox" checked="checked">
								<label for="casa" class="category-check">Casa
								</label>
							</li>
							<li>
								<input id="apartamento" type="checkbox">
								<label for="apartamento" class="category-check">Apartamento
								</label>
							</li>
							<li>
								<input id="comercial" type="checkbox">
								<label for="comercial" class="category-check">Comercial
								</label>
							</li>
							<li>
								<input id="sobrado" type="checkbox">
								<label for="sobrado" class="category-check">Sobrado
								</label>
							</li>
						</ul>

					</form>

					<form action="" class="form-layout">

						<h2 id="category-header" class="label">Filtrar localização</h2>
						<div class="form-group">
							<label class="select-custom-box" aria-label="Selecione o Estado">
								<span class="label d-none">Estado</span>
								<select name="state" id="state" required="required"
									data-bouncer-target="#state-error"></select>
								<div class="text">
									<span>Estado</span>
								</div>
								<div id="state-error"></div>
							</label>
						</div>
						<div class="form-group">
							<label class="select-custom-box" aria-label="Selecione a Cidade">
								<span class="label d-none">Cidade</span>
								<select name="city" id="city" required="required" disabled="disabled"
									data-bouncer-target="#city-error"></select>
								<div class="text">
									<span>Cidade</span>
								</div>
								<div id="city-error"></div>
							</label>
						</div>


						<div class="form-group">
							<label for="bairro" class="d-none">Bairro</label>
							<input type="text" name="bairo" id="bairo" placeholder="Bairro" minLength="3"
								autocomplete="bairro" required="required" />
						</div>
					</form>

					<form action="" class="form-layout">
						<h2 id="category-header" class="label" style="margin-bottom: 0;">Filtrar preço</h2>
						<div class="double-slider">

							<input type="range" class="slider" min="0" max="300000" step="50" value="1000"
								id="min-ranger">

							<input type="range" class="slider max" min="0" max="300000" step="50" value="150000"
								id="max-ranger">
							<!-- <label for="customRange2" class="form-label">Example range</label>
							<input type="range" class="form-range" min="0" max="5" id="customRange2"> -->

							<p style="color: white; font-size: 14px;" id="min-ranger-value" class="float-start"> </p>
							<p style="color: white; font-size: 14px" id="max-ranger-value" class="float-end"> </p>

						</div>
						<div style="margin-top: 25px;" class="form-group">
							<span>Mínimo</span>
							<input inputmode="numeric" id="min-ranger-input" class="price-range"
								autocomplete="max-ranger-input" name="min-ranger-input"><br>
						</div>
						<div class="form-group">
							<span>Máximo</span>
							<input inputmode="numeric" id="max-ranger-input" class="price-range"
								autocomplete="max-ranger-input" name="max-ranger-input"><br>
						</div>
					</form>
					<form action="" class="form-layout">
						<h2 id="category-header" class="label">diferenciais</h2>
						<div class="form-group">
							<div class="radio-custom-box">
								<div class="item">
									<input type="checkbox" name="garagem" id="garagem" class="check-radio" />
									<label for="garagem">Garagem</label>
								</div>
								<div class="item">
									<input type="checkbox" name="quartos" id="quartos" class="check-radio" />
									<label for="quartos">Quartos</label>
								</div>
								<div class="item">
									<input type="checkbox" name="comodos" id="comodos" class="check-radio" />
									<label for="comodos">Cômodos</label>
								</div>
							</div>
					</form>

				</nav>


				<div class="row col-12 col-sm col-xxl-6 items justify-content-center  justify-content-md-start">
					<section class="map skip-link-box col-12 d-none d-sm-block">
						<button class="skip-link" onKeyPress="skipLink(waze)">Pular mapa</button>

						<div id="map" data-title="K13 Agência Web" data-lat="-25.384988" data-lng="-51.467499"
							data-address="R. Benjamin Constant, 1499 - Centro, Guarapuava - PR, 85010-190, Brasil">
						</div>
						<a id="waze"
							href="https://www.waze.com/ul?ll=<?= $location['lat'] ?>%2C<?= $location['lng'] ?>&navigate=yes"
							target="_blank" rel="noreferrer" class="waze" aria-label="Ver a localização pelo Waze"><i
								class="fab fa-waze"></i>
							<span>Ver no Waze</span>
						</a>
					</section>
					<div class="col-12 row search-order">
						<div class="col-6 col-lg-9 ">
							<form action="" class="search-bar-2 ">
								<input id="searchInput" type="search">
								<i style="font-size: 20px; color: #828282;" class="fa fa-search" aria-hidden="true"></i>
							</form>
						</div>
						<div class="col d-flex align-items-center order-by">
							<form action="" class="w-100">
								<label class="select-custom-box" aria-label="Categorias">
									<select name="categories" id="categories">
										<option value="Casa">Casa</option>
										<option value="Apartamento">Apartamento</option>
										<option value="Comercial">Comercial</option>
										<option value="Sobrado">Sobrado</option>
										<option value="menor">Preço (Menor)</option>
										<option value="maior">Preço (Maior)</option>
										
									</select>
									<div class="text">
										<span>Ordenar</span>
									</div>
								</label>
							</form>
						</div>
					</div>

					<div class="col-10 col-sm-6 col-lg-4">
						<div class="item">
							<a href="single.php">
								<div class="thumb">
									<figure aria-hidden="true">
										<img class="img-cover lazyload" data-src="imgs/test/test-01.png" alt="Image 01">
									</figure>
								</div>
								<h2 class="title-post">Casa com piscina
									no Trianon</h2>
								<p class="local-post">Trianon - Guarapuava</p>
								<p class="price-post"> R$1.000.000,00</p>
							</a>
						</div>
					</div>
					<div class="col-10 col-sm-6 col-lg-4">
						<div class="item">
							<a href="single.php">
								<div class="thumb">
									<figure aria-hidden="true">
										<img class="img-cover lazyload" data-src="imgs/test/test-02.png" alt="Image 01">
									</figure>
								</div>
								<h2 class="title-post">Apartamento Luxo</h2>
								<p class="local-post">Santana - Guarapuava</p>
								<p class="price-post"> R$1.000.000,00</p>
							</a>
						</div>
					</div>
					<div class="col-10 col-sm-6 col-lg-4">
						<div class="item">
							<a href="single.php">
								<div class="thumb">
									<figure aria-hidden="true">
										<img class="img-cover lazyload" data-src="imgs/test/test-01.png" alt="Image 01">
									</figure>
								</div>
								<h2 class="title-post">Casa com piscina
									no Trianon</h2>
								<p class="local-post">Trianon - Guarapuava</p>
								<p class="price-post"> R$1.000.000,00</p>
							</a>
						</div>
					</div>
					<div class="col-10 col-sm-6 col-lg-4">
						<div class="item">
							<a href="single.php">
								<div class="thumb">
									<figure aria-hidden="true">
										<img class="img-cover lazyload" data-src="imgs/test/test-02.png" alt="Image 01">
									</figure>
								</div>
								<h2 class="title-post">Apartamento Luxo</h2>
								<p class="local-post">Santana - Guarapuava</p>
								<p class="price-post"> R$1.000.000,00</p>
							</a>
						</div>
					</div>
					<div class="col-10 col-sm-6 col-lg-4">
						<div class="item">
							<a href="single.php">
								<div class="thumb">
									<figure aria-hidden="true">
										<img class="img-cover lazyload" data-src="imgs/test/test-01.png" alt="Image 01">
									</figure>
								</div>
								<h2 class="title-post">Casa com piscina
									no Trianon</h2>
								<p class="local-post">Trianon - Guarapuava</p>
								<p class="price-post"> R$1.000.000,00</p>
							</a>
						</div>
					</div>
					<div class="col-10 col-sm-6 col-lg-4">
						<div class="item">
							<a href="single.php">
								<div class="thumb">
									<figure aria-hidden="true">
										<img class="img-cover lazyload" data-src="imgs/test/test-02.png" alt="Image 01">
									</figure>
								</div>
								<h2 class="title-post">Apartamento Luxo</h2>
								<p class="local-post">Santana - Guarapuava</p>
								<p class="price-post"> R$1.000.000,00</p>
							</a>
						</div>
					</div>
					<div class="col-10 col-sm-6 col-lg-4">
						<div class="item">
							<a href="single.php">
								<div class="thumb">
									<figure aria-hidden="true">
										<img class="img-cover lazyload" data-src="imgs/test/test-01.png" alt="Image 01">
									</figure>
								</div>
								<h2 class="title-post">Casa com piscina
									no Trianon</h2>
								<p class="local-post">Trianon - Guarapuava</p>
								<p class="price-post"> R$1.000.000,00</p>
							</a>
						</div>
					</div>
					<div class="col-10 col-sm-6 col-lg-4">
						<div class="item">
							<a href="single.php">
								<div class="thumb">
									<figure aria-hidden="true">
										<img class="img-cover lazyload" data-src="imgs/test/test-02.png" alt="Image 01">
									</figure>
								</div>
								<h2 class="title-post">Apartamento Luxo</h2>
								<p class="local-post">Santana - Guarapuava</p>
								<p class="price-post"> R$1.000.000,00</p>
							</a>
						</div>
					</div>
					<div class="col-10 col-sm-6 col-lg-4">
						<div class="item">
							<a href="single.php">
								<div class="thumb">
									<figure aria-hidden="true">
										<img class="img-cover lazyload" data-src="imgs/test/test-01.png" alt="Image 01">
									</figure>
								</div>
								<h2 class="title-post">Casa com piscina
									no Trianon</h2>
								<p class="local-post">Trianon - Guarapuava</p>
								<p class="price-post"> R$1.000.000,00</p>
							</a>
						</div>
					</div>
					<div class="col-10 col-sm-6 col-lg-4">
						<div class="item">
							<a href="single.php">
								<div class="thumb">
									<figure aria-hidden="true">
										<img class="img-cover lazyload" data-src="imgs/test/test-02.png" alt="Image 01">
									</figure>
								</div>
								<h2 class="title-post">Apartamento Luxo</h2>
								<p class="local-post">Santana - Guarapuava</p>
								<p class="price-post"> R$1.000.000,00</p>
							</a>
						</div>
					</div>
					<div class="col-10 col-sm-6 col-lg-4">
						<div class="item">
							<a href="single.php">
								<div class="thumb">
									<figure aria-hidden="true">
										<img class="img-cover lazyload" data-src="imgs/test/test-01.png" alt="Image 01">
									</figure>
								</div>
								<h2 class="title-post">Casa com piscina
									no Trianon</h2>
								<p class="local-post">Trianon - Guarapuava</p>
								<p class="price-post"> R$1.000.000,00</p>
							</a>
						</div>
					</div>
					<div class="col-10 col-sm-6 col-lg-4">
						<div class="item">
							<a href="single.php">
								<div class="thumb">
									<figure aria-hidden="true">
										<img class="img-cover lazyload" data-src="imgs/test/test-02.png" alt="Image 01">
									</figure>
								</div>
								<h2 class="title-post">Apartamento Luxo</h2>
								<p class="local-post">Santana - Guarapuava</p>
								<p class="price-post"> R$1.000.000,00</p>
							</a>
						</div>
					</div>
					<div class="col-10 col-sm-6 col-lg-4">
						<div class="item">
							<a href="single.php">
								<div class="thumb">
									<figure aria-hidden="true">
										<img class="img-cover lazyload" data-src="imgs/test/test-01.png" alt="Image 01">
									</figure>
								</div>
								<h2 class="title-post">Casa com piscina
									no Trianon</h2>
								<p class="local-post">Trianon - Guarapuava</p>
								<p class="price-post"> R$1.000.000,00</p>
							</a>
						</div>
					</div>
					<div class="col-10 col-sm-6 col-lg-4">
						<div class="item">
							<a href="single.php">
								<div class="thumb">
									<figure aria-hidden="true">
										<img class="img-cover lazyload" data-src="imgs/test/test-02.png" alt="Image 01">
									</figure>
								</div>
								<h2 class="title-post">Apartamento Luxo</h2>
								<p class="local-post">Santana - Guarapuava</p>
								<p class="price-post"> R$1.000.000,00</p>
							</a>
						</div>
					</div>
					<div class="col-10 col-sm-6 col-lg-4">
						<div class="item">
							<a href="single.php">
								<div class="thumb">
									<figure aria-hidden="true">
										<img class="img-cover lazyload" data-src="imgs/test/test-01.png" alt="Image 01">
									</figure>
								</div>
								<h2 class="title-post">Casa com piscina
									no Trianon</h2>
								<p class="local-post">Trianon - Guarapuava</p>
								<p class="price-post"> R$1.000.000,00</p>
							</a>
						</div>
					</div>
					<div class="col-10 col-sm-6 col-lg-4">
						<div class="item">
							<a href="single.php">
								<div class="thumb">
									<figure aria-hidden="true">
										<img class="img-cover lazyload" data-src="imgs/test/test-02.png" alt="Image 01">
									</figure>
								</div>
								<h2 class="title-post">Apartamento Luxo</h2>
								<p class="local-post">Santana - Guarapuava</p>
								<p class="price-post"> R$1.000.000,00</p>
							</a>
						</div>
					</div>
					<div class="col-10 col-sm-6 col-lg-4">
						<div class="item">
							<a href="single.php">
								<div class="thumb">
									<figure aria-hidden="true">
										<img class="img-cover lazyload" data-src="imgs/test/test-01.png" alt="Image 01">
									</figure>
								</div>
								<h2 class="title-post">Casa com piscina
									no Trianon</h2>
								<p class="local-post">Trianon - Guarapuava</p>
								<p class="price-post"> R$1.000.000,00</p>
							</a>
						</div>
					</div>
					<div class="col-10 col-sm-6 col-lg-4">
						<div class="item">
							<a href="single.php">
								<div class="thumb">
									<figure aria-hidden="true">
										<img class="img-cover lazyload" data-src="imgs/test/test-02.png" alt="Image 01">
									</figure>
								</div>
								<h2 class="title-post">Apartamento Luxo</h2>
								<p class="local-post">Santana - Guarapuava</p>
								<p class="price-post"> R$1.000.000,00</p>
							</a>
						</div>
					</div>
					<div class="col-10 col-sm-6 col-lg-4">
						<div class="item">
							<a href="single.php">
								<div class="thumb">
									<figure aria-hidden="true">
										<img class="img-cover lazyload" data-src="imgs/test/test-01.png" alt="Image 01">
									</figure>
								</div>
								<h2 class="title-post">Casa com piscina
									no Trianon</h2>
								<p class="local-post">Trianon - Guarapuava</p>
								<p class="price-post"> R$1.000.000,00</p>
							</a>
						</div>
					</div>
					<div class="col-10 col-sm-6 col-lg-4">
						<div class="item">
							<a href="single.php">
								<div class="thumb">
									<figure aria-hidden="true">
										<img class="img-cover lazyload" data-src="imgs/test/test-02.png" alt="Image 01">
									</figure>
								</div>
								<h2 class="title-post">Apartamento Luxo</h2>
								<p class="local-post">Santana - Guarapuava</p>
								<p class="price-post"> R$1.000.000,00</p>
							</a>
						</div>
					</div>
					<div class="col-10 col-sm-6 col-lg-4">
						<div class="item">
							<a href="single.php">
								<div class="thumb">
									<figure aria-hidden="true">
										<img class="img-cover lazyload" data-src="imgs/test/test-01.png" alt="Image 01">
									</figure>
								</div>
								<h2 class="title-post">Casa com piscina
									no Trianon</h2>
								<p class="local-post">Trianon - Guarapuava</p>
								<p class="price-post"> R$1.000.000,00</p>
							</a>
						</div>
					</div>
					<div class="col-10 col-sm-6 col-lg-4">
						<div class="item">
							<a href="single.php">
								<div class="thumb">
									<figure aria-hidden="true">
										<img class="img-cover lazyload" data-src="imgs/test/test-02.png" alt="Image 01">
									</figure>
								</div>
								<h2 class="title-post">Apartamento Luxo</h2>
								<p class="local-post">Santana - Guarapuava</p>
								<p class="price-post"> R$1.000.000,00</p>
							</a>
						</div>
					</div>
					<div class="col-10 col-sm-6 col-lg-4">
						<div class="item">
							<a href="single.php">
								<div class="thumb">
									<figure aria-hidden="true">
										<img class="img-cover lazyload" data-src="imgs/test/test-01.png" alt="Image 01">
									</figure>
								</div>
								<h2 class="title-post">Casa com piscina
									no Trianon</h2>
								<p class="local-post">Trianon - Guarapuava</p>
								<p class="price-post"> R$1.000.000,00</p>
							</a>
						</div>
					</div>
					<div class="col-10 col-sm-6 col-lg-4">
						<div class="item">
							<a href="single.php">
								<div class="thumb">
									<figure aria-hidden="true">
										<img class="img-cover lazyload" data-src="imgs/test/test-02.png" alt="Image 01">
									</figure>
								</div>
								<h2 class="title-post">Apartamento Luxo</h2>
								<p class="local-post">Santana - Guarapuava</p>
								<p class="price-post"> R$1.000.000,00</p>
							</a>
						</div>
					</div>

					<div class="pagination">

						<button class="see-more" aria-label="Carregar mais postagens">
							<span>Ver Mais</span>
							<i class="fas fa-spinner"></i>
						</button>
						<img src="./imgs//see-more-bee.png" alt="see-more-bee" class="lazyload see-more-bee">
					</div>

				</div>
			</div>

			<!-- EXEMPLO 1 -->

			<!-- 300000 == 100%
			        150000   == x% -->

			<script>
				// DELETE AFTER AJAX CREATE

				let pagBtn = document.querySelector('.pagination .see-more');
				pagBtn.onclick = function () {
					pagBtn.classList.add('active');
				};
			</script>
			<!-- START THE CUSTOM SLIDER -->
			<script>
				slider = document.getElementById("min-ranger");
				document.getElementById("min-ranger-value").innerHTML = slider.value;
				document.getElementById("min-ranger-input").value = slider.value;
				maxSlider = document.getElementById("max-ranger");
				document.getElementById("max-ranger-value").innerHTML = maxSlider.value;
				document.getElementById("max-ranger-input").value = maxSlider.value;




				var x = (slider.value * 100) / 300000;
				var x2 = (maxSlider.value * 100) / 300000;



				maxSlider.style.setProperty("background", `linear-gradient(to right,transparent 0%,transparent ${x}%,  #ed8f01 ${x}%, #ed8f01 ${x2}%, transparent ${x2}% , transparent 100%)`, "important");
			</script>

			<script>
				var slider = document.getElementById("min-ranger");
				slider.addEventListener('change', function () {
					document.getElementById("min-ranger-value").innerHTML = slider.value;
					document.getElementById("min-ranger-input").value = slider.value;
					x = (slider.value * 100) / 300000;
					maxSlider.style.setProperty("background", `linear-gradient(to right,transparent 0%,transparent  ${x}%,  #ed8f01  ${x}%, #ed8f01 ${x2}%, transparent ${x2}% , transparent 100%)`, "important");

				});

				var maxSlider = document.getElementById("max-ranger");
				maxSlider.addEventListener('change', function () {
					document.getElementById("max-ranger-value").innerHTML = maxSlider.value;
					document.getElementById("max-ranger-input").value = maxSlider.value;
					x2 = (maxSlider.value * 100) / 300000;
					maxSlider.style.setProperty("background", `linear-gradient(to right,transparent 0%,transparent  ${x}%,  #ed8f01  ${x}%, #ed8f01 ${x2}%, transparent ${x2}% , transparent 100%)`, "important");
				});


				var minInput = document.getElementById("min-ranger-input");
				minInput.addEventListener("change", function () {
					document.getElementById("min-ranger").value = minInput.value;
					x = (minInput.value * 100) / 300000;
					maxSlider.style.setProperty("background", `linear-gradient(to right,transparent 0%,transparent  ${x}%,  #ed8f01  ${x}%, #ed8f01 ${x2}%, transparent ${x2}% , transparent 100%)`, "important");
				});

				var maxInput = document.getElementById("max-ranger-input");
				maxInput.addEventListener("change", function () {
					document.getElementById("max-ranger").value = maxInput.value;
					x2 = (maxInput.value * 100) / 300000;
					maxSlider.style.setProperty("background", `linear-gradient(to right,transparent 0%,transparent  ${x}%,  #ed8f01  ${x}%, #ed8f01 ${x2}%, transparent ${x2}% , transparent 100%)`, "important");
				});
			</script>

			<script>
				function changePlaceholder(media) {
					if (media.matches) {
						document.getElementById('searchInput').placeholder = "Pesquisar"
					} else {
						document.getElementById('searchInput').placeholder = "Digite aqui o imóvel que você procura ou código do imóvel"
					}
				}

				var media = window.matchMedia("(max-width: 768px)");
				changePlaceholder(media);
				media.addListener(changePlaceholder);
			</script>



		</div>
	</section>
</main>

<script defer
	src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAs5CY-4vu-pytYixd2wGvBdQJf1rC9bns&callback=initMap"></script>
<?php include('footer.php'); ?>