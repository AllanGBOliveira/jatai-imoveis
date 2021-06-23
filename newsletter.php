<?php include('header.php'); ?>

	<main tabindex="-1">
		<section>
			<div class="container">
				<h1 class="title">Newsletter</h1>
			</div>
		</section>

		<br>
		<div class="container">
			<h2>NEWSLETTER COMUM</h2>
		</div>
		<br>

		<section class="newsletter">
			<div class="container d-md-flex align-items-center justify-content-center">
				<p class="text-center">Insira seu e-mail e cadastre-se na nossa newsletter!</p>
				<form action="" method="POST">
					<input type="email" id="newsletter" name="newsletter" placeholder="Insira seu e-mail" required="required" aria-label="Insira seu E-mail">
					<i class="far fa-envelope" id="icon-form"></i>
					<button type="submit">Quero receber <i class="fas fa-arrow-right"></i></button>
				</form>
			</div>
		</section>

		<br>
		<div class="container">
			<h2>NEWSLETTER COM MODAL DE FORMULÁRIO</h2>
		</div>
		<br>

		<section class="newsletter">
			<div class="container d-md-flex align-items-center justify-content-center">
				<p class="text-center">Insira seu e-mail e cadastre-se na nossa newsletter!</p>
				<form action="" method="POST">
					<input type="email" id="newsletter" name="newsletter" placeholder="Insira seu e-mail" required="required" aria-label="Insira seu E-mail">
					<i class="far fa-envelope" id="icon-form"></i>
					<button type="button" data-bs-toggle="modal" data-bs-target="#modalForm">Quero receber <i class="fas fa-arrow-right"></i></button>
				</form>
			</div>
		</section>

		<br><br>
	</main>

	<!-- Modal Form -->
	<section class="modal fade" id="modalForm" tabindex="-1" role="dialog" aria-labelledby="modalForm">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-body">
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
						<span aria-hidden="true"></span>
					</button>
					<div class="content">
						<h2 class="title-modal"><strong>Preencha o Formulário</strong></h2>
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