<?php include('header.php'); ?>
<section>
    <div class="breadcrumb">
        <span>cadastre seu imóvel</span>
    </div>
</section>
<main id="register" tabindex="-1">
    <div class="container">
        <!-- <div class="row">
            <div class="col-12 col-md-6">
                <div class="content">
                    <section class="infos">
                        <div class="page white">
                            <p>Entre em contato através das</p>
                            <p> nossas redes sociais, ou enviando</p>
                            <p>um e-mail através do formulário abaixo!</p>
                        </div>
                        <div class="contact">
                            <div class="contact-item">
                                <a href="https://api.whatsapp.com/send?phone=5542999999999" target="_blank"
                                    rel="noreferrer" aria-label="Envie-nos uma mensagem atráves do WhatsApp">
                                    <i class="fas fa-phone"></i>
                                    (42) 3636-3636
                                </a>
                                <a href="https://api.whatsapp.com/send?phone=5542999999999" target="_blank"
                                    rel="noreferrer" aria-label="Envie-nos uma mensagem atráves do WhatsApp">
                                    <i class="fab fa-whatsapp"></i>
                                    (42) 3636-3636
                                </a>
                            </div>
                            <div class="contact-item">
                                <a href="https://facebook.com/" target="_blank" rel="noreferrer"
                                    aria-label="Acesse nossa página no Facebook">
                                    <i class="fab fa-facebook-square"></i>
                                    /jatai-imoveis
                                </a>
                                <a href="https://api.whatsapp.com/send?phone=5542999999999" target="_blank"
                                    rel="noreferrer" aria-label="Envie-nos uma mensagem atráves do WhatsApp">
                                    <i class="fas fa-map-marker-alt"></i>
                                    <span>Av. Rua Endereço, 9999</span>
                                    <p style="margin-left: 19.5px;">Guarapuava / PR</p>
                                </a>
                            </div>
                        </div>
                    </section>
                    <section class="form-layout">
                        <form action="" method="POST" data-validate>
                            <div class="form-group">
                                <input type="text" name="name" id="name" placeholder="Nome" minLength="3"
                                    autocomplete="name" required="required" />
                            </div>
                            <div class="form-group">

                                <input type="email" name="email" id="email" placeholder="E-mail" autocomplete="email"
                                    required="required" />
                            </div>
                            <div class="form-group">
                                <input type="text" name="subject" id="subject" placeholder="Assunto" minLength="3"
                                    autocomplete="subject" required="required" />
                            </div>

                            <div class="form-group">
                                <textarea name="message" id="message" placeholder="Mensagem"
                                    required="required"></textarea>
                            </div>

                            <div
                                class="form-group d-flex flex-column flex-sm-row flex-md-column flex-lg-row justify-content-between">
                                <div class="recaptcha">
                                    <div class="g-recaptcha" data-theme="light"
                                        data-sitekey="6LeIxAcTAAAAAJcZVRqyHh71UMIEGNQ_MXjiZKhI"></div>
                                </div>
                                <button type="submit" class="btn-color-1">ENVIAR</button>
                            </div>
                        </form>
                    </section>
                </div>
            </div>
            <div class="col-12 col-md-6 p-0">
                <section class="map skip-link-box">
                    <button class="skip-link" onKeyPress="skipLink(waze)">Pular mapa</button>
                    <?php /*
                        <div id="map" data-title="K13 Agência Web" data-lat="<?= $location["lat"]?>" data-lng="
                    <?= $location["lng"]?>" data-address="
                    <?= $location['address'] ?>">

                    */ ?>
                    <div id="map" data-title="K13 Agência Web" data-lat="-25.384988" data-lng="-51.467499"
                        data-address="R. Benjamin Constant, 1499 - Centro, Guarapuava - PR, 85010-190, Brasil"></div>
                    <a id="waze"
                        href="https://www.waze.com/ul?ll=<?= $location['lat'] ?>%2C<?= $location['lng'] ?>&navigate=yes"
                        target="_blank" rel="noreferrer" class="waze" aria-label="Ver a localização pelo Waze"><i
                            class="fab fa-waze"></i>
                        <span>Ver no Waze</span>
                    </a>
                </section>
            </div>
        </div> -->

        <section class="desc">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                deserunt mollit anim id est laborum.
            </p>
        </section>

        <section class="form-layout">
            <form action="" method="POST" data-validate class="row">
                <div class="col col-sm-3 d-flex flex-column ">
                    <div class="form-group  d-flex flex-column justify-content-center">
                        <label class="attachment" aria-label="Escolha uma imagem">
                            <input type="file" name="file-1[]" id="file-1"
                                data-multiple-caption="{count} Imagens Selecionados" multiple required
                                data-bouncer-target="#file-error-1" />
                            <div class="text">
                                <div class="d-flex">
                                    <i class="fas fa-image"></i>
                                    <i class="fas fa-plus"></i>
                                </div>
                                <p>adicionar imagens</p>
                            </div>
                        </label>
                        <div id="file-error-1"></div>
                    </div>
                    <div class="form-group  d-flex flex-column justify-content-center">
                        <label class="attachment" aria-label="Escolha um vídeo">
                            <input type="file" name="file-2[]" id="file-2"
                                data-multiple-caption="{count} Vídeos Selecionados" multiple required
                                data-bouncer-target="#file-error-2" />
                            <div class="text">
                                <div class="d-flex">
                                    <i class="fas fa-play"></i>
                                    <i class="fas fa-plus"></i>
                                </div>
                                <p>adicionar vídeos</p>
                            </div>
                        </label>
                        <div id="file-error-2"></div>
                    </div>
                </div>

                <div class="col">
                    <div class="form-group">
                        <input type="text" name="realtyname" id="realtyname" placeholder="Nome do Imóvel" minLength="3"
                            autocomplete="realtyname" required="required" />
                    </div>

                    <div class="form-group">
                        <input inputmode="numeric" id="price" class="price" placeholder="Preço" autocomplete="price"
                            name="price" onfocus="maskMoney(this.value)"><br>
                    </div>
                    <div class="form-group">
                        <input type="text" name="localization" id="localization" placeholder="Localização"
                            autocomplete="localization" required="required" />
                    </div>


                    <div class="form-group">
                        <textarea name="description" id="description" placeholder="Descrição"
                            required="required"></textarea>
                    </div>

                    <p class="title">seus dados</p>


                    <div class="form-group">

                        <input type="text" name="name" id="name" placeholder="Nome" minLength="3" autocomplete="name"
                            required="required" />
                    </div>
                    <div class="form-group">

                        <input type="email" name="email" id="email" placeholder="E-mail" autocomplete="email"
                            required="required" />
                    </div>
                    <div class="form-group">

                        <input type="tel" name="tel" id="tel" class="tel-mask" placeholder="Telefone" minLength="14"
                            autocomplete="tel" required="required" />
                    </div>

                    <div
                        class="form-group d-flex justify-content-center flex-wrap">
                        <div class="recaptcha">
                            <div class="g-recaptcha" data-theme="light"
                                data-sitekey="6LeIxAcTAAAAAJcZVRqyHh71UMIEGNQ_MXjiZKhI"></div>
                        </div>
                        <!-- <button type="submit" class="btn-color-1">ENVIAR</button> -->

                        <button type="button" class="btn-color-2">quero vender</button>
                        <button type="button" class="btn-color-3">quero alugar</button>
                    </div>




                </div>

                <!-- <div class="form-group">

                    <input type="email" name="email" id="email" placeholder="E-mail" autocomplete="email"
                        required="required" />
                </div> -->
            </form>
        </section>
    </div>
</main>

<?php include('realty-search.php'); ?>



<?php include('footer.php'); ?>