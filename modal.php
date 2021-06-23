<?php include('header.php'); ?>

	<main tabindex="-1">
		<section>
			<div class="container">
				<h1 class="title">Popup</h1>
			</div>
		</section>

		<br><br>

		<div class="container mb-5">
			<div class="row">
				<div class="col-sm-6 col-md-4 mb-4">
					<button type="button" class="btn btn-primary btn-lg w-100" data-bs-toggle="modal" data-bs-target="#modalImage">Modal Imagem</button>
				</div>
				<div class="col-sm-6 col-md-4 mb-4">
					<button type="button" class="btn btn-primary btn-lg w-100" data-bs-toggle="modal" data-bs-target="#modalSucess">Modal Sucesso</button>
				</div>
				<div class="col-sm-6 col-md-4 mb-4">
					<button type="button" class="btn btn-primary btn-lg w-100" data-bs-toggle="modal" data-bs-target="#modalForm">Modal Form</button>
				</div>
			</div>
		</div>
	</main>

	<!-- Modal Image -->
	<section class="modal fade" id="modalImage" tabindex="-1" role="dialog" aria-labelledby="modalImageLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-body">
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar Diálogo">
						<i class="fas fa-times"></i>
					</button>
					<img data-src="imgs/test/test-07.jpg" id="modalImageLabel" class="lazyload" alt="Imagem 01">
					<a href="#" class="btn-modal" data-bs-dismiss="modal" role="button">Fechar</a>
				</div>
			</div>
		</div>
	</section>

	<!-- Modal Sucess -->
	<section class="modal fade" id="modalSucess" tabindex="-1" role="dialog" aria-labelledby="modalSucessLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-body">
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar Diálogo">
						<i class="fas fa-times"></i>
					</button>
					<div class="content">
						<i class="far fa-paper-plane"></i>
						<h2 class="title-modal" id="modalSucessLabel"><strong>SUCESSO!</strong></h2>
						<p>Em breve entraremos em contato.</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Modal Form -->
	<section class="modal fade" id="modalForm" tabindex="-1" role="dialog" aria-labelledby="modalFormLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-body">
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar Diálogo">
						<i class="fas fa-times"></i>
					</button>
					<div class="content">
						<h2 class="title-modal" id="modalFormLabel"><strong>Preencha o Formulário</strong></h2>
						<form action="" method="POST" class="form-layout" data-validate>
							<!--
							<div class="alert alert-success alert-dismissible fade show" role="alert">
								Contato enviado com sucesso!
								<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Fechar">
									<i class="fas fa-times"></i>
								</button>
							</div>
							<div class="alert alert-danger alert-dismissible fade show" role="alert">
								ERRO! Preencha os campos corretamente.
								<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Fechar">
									<i class="fas fa-times"></i>
								</button>
							</div>
                            -->
                            <div class="row">
								<div class="form-group col-12">
									<input type="text" name="nome" id="nome" placeholder="Nome" required="required" aria-label="Nome"/>
								</div>
								<div class="form-group col-md-6">
									<input type="email" name="email" id="email" placeholder="E-mail" required="required" aria-label="E-mail"/>
								</div>
								<div class="form-group col-md-6">
									<input type="tel" name="tel" id="tel" class="tel-mask" placeholder="Telefone" required="required" aria-label="Telefone"/>
								</div>
								<div class="form-group col-md-6">
									<label class="select-custom-box" aria-label="Selecione o Estado">
                                        <select name="state" id="state" required="required" data-bouncer-target="#state-error"></select>
                                        <div class="text">
                                            <span>Estado</span>
                                        </div>
                                        <div id="state-error"></div>
                                    </label>
                                </div>
                                <div class="form-group col-md-6">
									<label class="select-custom-box" aria-label="Selecione a Cidade">
                                        <select name="city" id="city" required="required" disabled="disabled" data-bouncer-target="#city-error"></select>
                                        <div class="text">
                                            <span>Cidade</span>
                                        </div>
                                        <div id="city-error"></div>
                                    </label>
                                </div>
								<div class="form-group col-12 d-flex justify-content-between">
									<div class="recaptcha">
										<div class="g-recaptcha" data-theme="light" data-sitekey="6LeIxAcTAAAAAJcZVRqyHh71UMIEGNQ_MXjiZKhI"></div>
									</div>
									<button>ENVIAR</button>
								</div>
							</div>
                        </form>
					</div>
				</div>
			</div>
		</div>
	</section>

<?php include('footer.php'); ?>