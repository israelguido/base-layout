<?php include_once("header.php") ?>

<section class="bg-home bg-circle-gradiant d-flex align-items-center">
    <div class="bg-overlay bg-overlay-white"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5 col-md-8">
                <div class="card login_page shadow rounded border-0">
                    <div class="card-body">
                        <h4 class="card-title text-center text-capitalize">trabalhe conosco</h4>
                        <form class="login-form mt-4" id="myForm">
                            <div class="row">
                                <!-- Nome -->
                                <div class="col-md-12">
                                    <div class="form-group position-relative">
                                        <label>Nome<span class="text-danger">*</span></label>
                                        <i data-feather="user" class="fea icon-sm icons"></i>
                                        <input type="text" class="form-control pl-5" placeholder="Nome" id="name" name="nome" required="">
                                    </div>
                                </div>

                                <!-- Whatsapp -->
                                <div class="col-md-12">
                                    <div class="form-group position-relative">
                                        <label>Whatsapp<span class="text-danger">*</span></label>
                                        <i data-feather="phone" class="fea icon-sm icons"></i>
                                        <input type="text" id="whatsapp" class="form-control pl-5" placeholder="Whatsapp" id="whatsapp" name="whatsapp" required="">
                                    </div>
                                </div>


                                <!-- Qual é o seu website -->
                                <div class="col-md-12 site-hidden">
                                    <div class="form-group position-relative">
                                        <label>E-mail<span class="text-danger">*</span></label>
                                        <i data-feather="globe" class="fea icon-sm icons"></i>
                                        <input type="email" id="email" name="email" class="form-control pl-5" placeholder="Endereço de e-mail" required>
                                    </div>
                                </div>
                                <!-- Comentário -->
                                <div class="col-md-12">
                                    <div class="form-group position-relative">
                                        <label>Currículo<span class="text-danger">*</span></label>
                                        <input type="file" name="resume" id="resume">
                                    </div>
                                </div>
                                <!-- Botão de Envio -->
                                <div class="col-md-12">
                                    <button class="btn btn-primary btn-block">Enviar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div> <!--end container-->
</section><!--end section-->

<?php include_once("footer.php") ?>
