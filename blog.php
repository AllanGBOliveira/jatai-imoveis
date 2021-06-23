<?php include('header.php'); ?>
       
	<main id="blog" tabindex="-1" aria-labelledby="a11y-title">
		<section class="list-posts">
			<h1 class="title text-center" id="a11y-title">Blog</h1>
			<div class="container">
				<div class="skip-link-box">
					<button class="skip-link" onKeyPress="skipLink(skipPosts)">Pular listagem de categorias</button>
				</div>
				<div class="categories d-md-none">
					<label class="select-custom-box" aria-label="Categorias">
						<select name="categories" id="categories">
							<option value="">Categorias</option>
							<option value="Categoria 1">Categoria 1</option>
							<option value="Categoria 2">Categoria 2</option>
							<option value="Categoria 3">Categoria 3</option>
							<option value="Categoria 4">Categoria 4</option>
						</select>
						<div class="text">
							<span>Assunto</span>
						</div>
					</label>
				</div>
				<nav class="categories d-none d-md-flex">
					<h2 id="category-header" class="label">Categorias - </h2>
					<ul class="list-inline" aria-labelledby="category-header">
						<li class="list-inline-item">
							<a href="#" class="category">Categoria 1</a>
						</li>
						<li class="list-inline-item">
							<a href="#" class="category">Categoria 2</a>
						</li>
						<li class="list-inline-item">
							<a href="#" class="category active">Categoria 3</a>
						</li>
						<li class="list-inline-item">
							<a href="#" class="category">Categoria 4</a>
						</li>
					</ul>
				</nav>
				<div class="row">
					<div class="item highlight col-12">
						<div class="row">
							<a href="single.php" class="col-md-6" aria-hidden="true" tabIndex="-1">
								<div class="thumb">
									<figure aria-hidden="true">
										<img class="img-cover lazyload" data-src="imgs/default.png" alt="Image 00">
									</figure>
									<time class="date absolute" datetime="2021-11-24" aria-label="2021-11-24">24/Nov</time>			
								</div>
							</a>
							<div class="col-md-6">
								<a href="single.php" id="skipPosts">
									<h2 class="title-post">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed posuere erat consequat mauris facilisis</h2>
									<span class="a11y" aria-labelledby="date-0"></span>
								</a>
								<time class="date" datetime="2021-11-24" id="date-0">24 de Novembro</time>
								<div class="abstract d-md-none d-lg-block">
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur gravida turpis sit amet ipsum posuere gravida. Nulla convallis ligula et felis imperdiet sodales. Pellentesque dictum</p>
								</div>
								<div class="btn-default text-center" aria-hidden="true">
									<a href="single.php" tabIndex="-1">Ler Matéria</a>
								</div>
							</div>
						</div>
					</div>
					<div class="item col-12 col-sm-6 col-lg-4">
						<a href="single.php">
							<div class="thumb">
								<figure aria-hidden="true">
									<img class="img-cover lazyload" data-src="imgs/test/test-01.jpg" alt="Image 01">
								</figure>
								<time class="date absolute" datetime="2021-11-24" aria-label="2021-11-24">24/Nov</time>
							</div>
							<h2 class="title-post">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusantium, porro.</h2>
							<span class="a11y" aria-labelledby="date-1"></span>
						</a>
						<time class="date" datetime="2021-11-24" id="date-1">24 de Novembro</time>
					</div>
					<div class="item col-12 col-sm-6 col-lg-4">
						<a href="single.php">
							<div class="thumb">
								<figure aria-hidden="true">
									<img class="img-cover lazyload" data-src="imgs/test/test-02.jpg" alt="Image 02">
								</figure>
								<time class="date absolute" datetime="2021-11-24" aria-label="2021-11-24">24/Nov</time>
							</div>
							<h2 class="title-post">Lorem ipsum dolor sit amet consectetur adipisicing elit. Est, velit.</h2>
							<span class="a11y" aria-labelledby="date-2"></span>
						</a>
						<time class="date" datetime="2021-11-24" id="date-2">24 de Novembro</time>
					</div>
					<div class="item col-12 col-sm-6 col-lg-4">
						<a href="single.php">
							<div class="thumb">
								<figure aria-hidden="true">
									<img class="img-cover lazyload" data-src="imgs/test/test-03.jpg" alt="Image 03">
								</figure>
								<time class="date absolute" datetime="2021-11-24" aria-label="2021-11-24">24/Nov</time>
							</div>
							<h2 class="title-post">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempore, ducimus.</h2>
							<span class="a11y" aria-labelledby="date-3"></span>
						</a>
						<time class="date" datetime="2021-11-24" id="date-3">24 de Novembro</time>
					</div>
					<div class="item col-12 col-sm-6 col-lg-4">
						<a href="single.php">
							<div class="thumb">
								<figure aria-hidden="true">
									<img class="img-cover lazyload" data-src="imgs/test/test-04.jpg" alt="Image 04">
								</figure>
								<time class="date absolute" datetime="2021-11-24" aria-label="2021-11-24">24/Nov</time>
							</div>
							<h2 class="title-post">Lorem ipsum dolor sit amet consectetur adipisicing elit. Est, quasi.</h2>
							<span class="a11y" aria-labelledby="date-4"></span>
						</a>
						<time class="date" datetime="2021-11-24" id="date-4">24 de Novembro</time>
					</div>
					<div class="item col-12 col-sm-6 col-lg-4">
						<a href="single.php">
							<div class="thumb">
								<figure aria-hidden="true">
									<img class="img-cover lazyload" data-src="imgs/test/test-05.jpg" alt="Image 05">
								</figure>
								<time class="date absolute" datetime="2021-11-24" aria-label="2021-11-24">24/Nov</time>
							</div>
							<h2 class="title-post">Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore, recusandae.</h2>
							<span class="a11y" aria-labelledby="date-5"></span>
						</a>
						<time class="date" datetime="2021-11-24" id="date-5">24 de Novembro</time>
					</div>
					<div class="item col-12 col-sm-6 col-lg-4">
						<a href="single.php">
							<div class="thumb">
								<figure aria-hidden="true">
									<img class="img-cover lazyload" data-src="imgs/test/test-06.jpg" alt="Image 06">
								</figure>
								<time class="date absolute" datetime="2021-11-24" aria-label="2021-11-24">24/Nov</time>
							</div>
							<h2 class="title-post">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deserunt, culpa.</h2>
							<span class="a11y" aria-labelledby="date-6"></span>
						</a>
						<time class="date" datetime="2021-11-24" id="date-6">24 de Novembro</time>
					</div>
					<div class="item col-12 col-sm-6 col-lg-4">
						<a href="single.php">
							<div class="thumb">
								<figure aria-hidden="true">
									<img class="img-cover lazyload" data-src="imgs/test/test-07.jpg" alt="Image 07">
								</figure>
								<time class="date absolute" datetime="2021-11-24" aria-label="2021-11-24">24/Nov</time>
							</div>
							<h2 class="title-post">Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim, impedit.</h2>
							<span class="a11y" aria-labelledby="date-7"></span>
						</a>
						<time class="date" datetime="2021-11-24" id="date-7">24 de Novembro</time>
					</div>
					<div class="item col-12 col-sm-6 col-lg-4">
						<a href="single.php">
							<div class="thumb">
								<figure aria-hidden="true">
									<img class="img-cover lazyload" data-src="imgs/test/test-08.jpg" alt="Image 08">
								</figure>
								<time class="date absolute" datetime="2021-11-24" aria-label="2021-11-24">24/Nov</time>
							</div>
							<h2 class="title-post">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fugiat, minus.</h2>
							<span class="a11y" aria-labelledby="date-8"></span>
						</a>
						<time class="date" datetime="2021-11-24" id="date-8">24 de Novembro</time>
					</div>
					<div class="item col-12 col-sm-6 col-lg-4">
						<a href="single.php">
							<div class="thumb">
								<figure aria-hidden="true">
									<img class="img-cover lazyload" data-src="imgs/test/test-09.jpg" alt="Image 09">
								</figure>
								<time class="date absolute" datetime="2021-11-24" aria-label="2021-11-24">24/Nov</time>
							</div>
							<h2 class="title-post">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsa, provident!</h2>
							<span class="a11y" aria-labelledby="date-9"></span>
						</a>
						<time class="date" datetime="2021-11-24" id="date-9">24 de Novembro</time>
					</div>
					<div class="item col-12 col-sm-6 col-lg-4">
						<a href="single.php">
							<div class="thumb">
								<figure aria-hidden="true">
									<img class="img-cover lazyload" data-src="imgs/test/test-10.jpg" alt="Image 10">
								</figure>
								<time class="date absolute" datetime="2021-11-24" aria-label="2021-11-24">24/Nov</time>
							</div>
							<h2 class="title-post">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Debitis, optio.</h2>
							<span class="a11y" aria-labelledby="date-10"></span>
						</a>
						<time class="date" datetime="2021-11-24" id="date-10">24 de Novembro</time>
					</div>
					<div class="item col-12 col-sm-6 col-lg-4">
						<a href="single.php">
							<div class="thumb">
								<figure aria-hidden="true">
									<img class="img-cover lazyload" data-src="imgs/test/test-11.jpg" alt="Image 11">
								</figure>
								<time class="date absolute" datetime="2021-11-24" aria-label="2021-11-24">24/Nov</time>
							</div>
							<h2 class="title-post">Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet, sint.</h2>
							<span class="a11y" aria-labelledby="date-11"></span>
						</a>
						<time class="date" datetime="2021-11-24" id="date-11">24 de Novembro</time>
					</div>
					<div class="item col-12 col-sm-6 col-lg-4">
						<a href="single.php">
							<div class="thumb">
								<figure aria-hidden="true">
									<img class="img-cover lazyload" data-src="imgs/test/test-12.jpg" alt="Image 12">
								</figure>
								<time class="date absolute" datetime="2021-11-24" aria-label="2021-11-24">24/Nov</time>
							</div>
							<h2 class="title-post">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus, dolorum!</h2>
							<span class="a11y" aria-labelledby="date-12"></span>
						</a>
						<time class="date" datetime="2021-11-24" id="date-12">24 de Novembro</time>
					</div>
				</div>
				
				<!-- EXEMPLO 1 -->

				<div class="pagination">
					<button class="see-more" aria-label="Carregar mais postagens">
						<span>Ver Mais</span>
						<i class="fas fa-spinner"></i>
					</button>
				</div>

				<script>
					// DELETE AFTER AJAX CREATE

					let pagBtn = document.querySelector('.pagination .see-more');
					pagBtn.onclick = function() {
					    pagBtn.classList.add('active');
					};
				</script>

				<!-- EXEMPLO 2 -->

				<nav class="pagination-numeric" aria-label="Paginação">
					<a class="prev page-numbers" href="#" aria-label="Anterior"><i class="fas fa-angle-left"></i></a>
					<a class="page-numbers" href="#">1</a>
					<span class="page-numbers dots">…</span>
					<a class="page-numbers" href="#">3</a>
					<a class="page-numbers" href="#">4</a>
					<span class="page-numbers current">5</span>
					<a class="page-numbers" href="#">6</a>
					<a class="page-numbers" href="#">7</a>
					<span class="page-numbers dots">…</span>
					<a class="page-numbers" href="#">49</a>
					<a class="next page-numbers" href="#" aria-label="Próximo"><i class="fas fa-angle-right"></i></a>      
				</nav>	
			</div>
		</section>
	</main>
   
<?php include('footer.php'); ?>