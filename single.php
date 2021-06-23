<?php include('header.php'); ?>

	<main id="single" tabindex="-1" aria-label="Blog interna">
		<section class="post">
			<div class="list-posts">
				<div class="container">
					<div class="row">
						<div class="col-lg-10 offset-lg-1 col-xl-8 offset-xl-2">
							<div class="item highlight">
								<div class="thumb">
									<figure>
										<img class="img-cover lazyload" data-src="imgs/default.png" alt="Image Content">
									</figure>
								</div>
								<div class="categories">
									<ul class="list-inline">
										<li class="list-inline-item">
											<a href="#" class="category active">Categoria 2</a>
										</li>
										<li class="list-inline-item">
											<a href="#" class="category active">Categoria 4</a>
										</li>
									</ul>
								</div>
								<article>
									<h1 class="title-post">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed posuere erat consequat mauris facilisis</h1>
									<div class="share-buttons">
										<time class="date" datetime="2021-11-24">24 de Novembro de 2021<i class="d-none d-sm-inline-block" aria-hidden="true"> | </i></time>
										<span><b>Compartilhe</b></span>
										<div class="addthis_inline_share_toolbox"></div>								
									</div>
									<div class="page">
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed posuere erat consequat mauris facilisis, ut pharetra ante iaculis. In pharetra justo ut odio faucibus, id viverra est molestie. Duis elit leo, commodo vulputate interdum sit amet, venenatis sit amet dui. Sed ut dapibus libero. Quisque congue consectetur tellus eu gravida. Aenean quis nunc vel turpis tempus volutpat. Aenean a felis ac elit ornare fermentum.</p>
										<br/>
										<p>In ut condimentum leo. Integer auctor egestas risus non tempor. Integer maximus lorem egestas neque placerat, non molestie enim iaculis. In varius nulla est, at ornare ipsum bibendum eu. Etiam tristique ipsum eu mi condimentum gravida. Phasellus volutpat nunc elit, at tincidunt eros aliquet eu. Etiam non tincidunt lacus. Quisque semper quam vitae lorem lobortis, ac auctor mi suscipit.</p>
										<br/>
										<p>Etiam massa felis, placerat molestie blandit a, accumsan sed purus. Donec id nisi nisi. Nam at libero consequat, auctor velit ut, lobortis libero. Donec imperdiet dui eget vestibulum elementum. In ut dui orci. Vestibulum suscipit, mauris ac fringilla suscipit, mauris magna efficitur massa, at ornare justo dolor non mauris. Vivamus ac euismod massa, at convallis magna. Sed augue nisl, efficitur eu mollis ac, sollicitudin ut purus. Maecenas quis arcu at lectus sodales euismod et nec dolor. Cras luctus, dolor id iaculis semper, erat purus gravida elit, vel fermentum risus ipsum a eros. Nulla facilisi. Nullam sagittis nibh sed posuere aliquet.</p>
										<br/>
										<p>Quisque congue massa ac lacus pretium laoreet. Ut vulputate eu nulla ac vehicula. Vestibulum efficitur, neque vitae gravida mattis, odio justo sagittis ante, iaculis dapibus ex diam at quam. Suspendisse potenti. Integer mi quam, finibus id aliquet nec, posuere sit amet nisi. Donec vitae nisl sed mauris ultrices dignissim. Mauris volutpat velit eget massa pretium egestas vel in nisl. Vestibulum laoreet est ac dolor mollis placerat quis sed dolor. Cras commodo imperdiet tellus, in varius neque laoreet eu. Vivamus quis tempus massa. Integer varius tristique lacus, non euismod tellus varius at.</p>
									</div>
								</article>
								<div class="share-buttons pd-top">
									<span><b>Compartilhe</b></span>
									<div class="addthis_inline_share_toolbox"></div>								
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="fb-comments-section">
			<div class="container">
				<h2 class="title">Comentários</h2>
				<div class="skip-link-box">
					<button class="skip-link" onKeyPress="skipLink(skipRelated)">Pular sessão de comentários</button>
				</div>
				<div class="fb-comments" data-href="https://developers.facebook.com/docs/plugins/comments#configurator" data-numposts="5" data-width="100%" data-lazy="true"></div>
			</div>
		</section>

		<section class="related-posts">
			<div class="list-posts">
				<div class="container">
					<h3 class="title" id="skipRelated" tabIndex="-1">Publicações Relacionadas</h3>
					<div class="row">
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
					</div>
					<div class="btn-default text-center">
						<a href="blog.php" aria-label="Ver Todas as Postagens">+ VER MAIS</a>
					</div>
				</div>
			</div>
		</section>
	</main>

	<div id="fb-root"></div>
	<script async defer crossorigin="anonymous" src="https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v9.0" nonce="xPvDJOIA"></script>
	<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5da4cf97275d81bc"></script>
   
<?php include('footer.php'); ?>