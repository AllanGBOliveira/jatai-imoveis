<?php include('header.php'); ?>

	<main id="page" tabindex="-1">
		<div class="container">
			<section>
				<h1 class="title">Titulo da Página</h1>
			</section>
			<section>
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item active" aria-current="page">Page</li>
					</ol>
				</nav>
			</section>
			<section class="page">
				<article>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit facere quia ad maxime, illo ut, facilis aliquam cumque accusamus maiores consectetur earum nobis dolorem neque culpa sint? Amet iusto, quae! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci repellat aspernatur, quisquam quas vel sunt deserunt, nostrum error soluta dicta dignissimos laborum placeat quaerat, ipsa labore ipsam. Odit, fugit officiis.</p>
					<br>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim, nam cupiditate tempore ipsam asperiores quisquam dolorem quaerat iusto dicta, facere quis porro, voluptatem accusantium consequuntur modi repudiandae illo inventore quas.</p>
					<br>
					<h2>Exemplos:</h2>
					<br>
					<h1>Texto em h1</h1>
					<h2>Texto em h2</h2>
					<h3>Texto em h3</h3>
					<h4>Texto em h4</h4>
					<h5>Texto em h5</h5>
					<h6>Texto em h6</h6>
					<p><a href="#">Link de teste</a></p>
					<p><strong>Texto em negrito</strong></p>
					<p><em>Texto em itálico</em></p>
					<p><del>Texto riscado</del></p>
					<ul>
						<li>1</li>
						<li>2</li>
						<li>3</li>
					</ul>
					<ol>
						<li>1</li>
						<li>2</li>
						<li>3</li>
					</ol>
					<p><blockquote>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita perferendis porro aliquam dolorem inventore fuga deleniti corporis quaerat quis vero, recusandae laboriosam qui maiores blanditiis minus corrupti ipsum possimus accusantium..</blockquote></p>
					<div class="gallery-content">
						<div class="row row-cols-2 row-cols-sm-3 row-cols-lg-4">		
							<div class="item col">
								<button data-src="imgs/default.png" data-fancybox="gallery">
									<figure>
										<img class="img-cover lazyload" data-src="imgs/default.png" alt="Imagem 01">
									</figure>
								</button>
							</div>
							<div class="item col">
								<button data-src="imgs/default.png" data-fancybox="gallery">
									<figure>
										<img class="img-cover lazyload" data-src="imgs/default.png" alt="Imagem 02">
									</figure>
								</button>
							</div>
							<div class="item col">
								<button data-src="imgs/default.png" data-fancybox="gallery">
									<figure>
										<img class="img-cover lazyload" data-src="imgs/default.png" alt="Imagem 03">
									</figure>
								</button>
							</div>
							<div class="item col">
								<button data-src="imgs/default.png" data-fancybox="gallery">
									<figure>
										<img class="img-cover lazyload" data-src="imgs/default.png" alt="Imagem 04">
									</figure>
								</button>
							</div>
							<div class="item col">
								<button data-src="imgs/default.png" data-fancybox="gallery">
									<figure>
										<img class="img-cover lazyload" data-src="imgs/default.png" alt="Imagem 05">
									</figure>
								</button>
							</div>
							<div class="item col">
								<button data-src="imgs/default.png" data-fancybox="gallery">
									<figure>
										<img class="img-cover lazyload" data-src="imgs/default.png" alt="Imagem 06">
									</figure>
								</button>
							</div>
							<div class="item col">
								<button data-src="imgs/default.png" data-fancybox="gallery">
									<figure>
										<img class="img-cover lazyload" data-src="imgs/default.png" alt="Imagem 07">
									</figure>
								</button>
							</div>
							<div class="item col">
								<button data-src="imgs/default.png" data-fancybox="gallery">
									<figure>
										<img class="img-cover lazyload" data-src="imgs/default.png" alt="Imagem 08">
									</figure>
								</button>
							</div>
						</div>
					</div>
				</article>
			</section>
			<section class="btn-default text-right">
				<div class="container">
					<a href="#">
					    <i class="fas fa-angle-left"></i>
					    <span>Voltar</span>
					</a>
				</div>
				<br/><br/>
			</section>
		</div>
	</main>

<?php include('footer.php'); ?>