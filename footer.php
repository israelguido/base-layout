            <!-- Shape Start -->
            <div class="position-relative">
                <div class="shape overflow-hidden text-footer">
                    <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
                    </svg>
                </div>
            </div>
            <!--Shape End-->
            <!-- Footer Start -->
            <footer class="footer">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-12 mb-0 mb-md-4 pb-0 pb-md-2">
                            <a href="#" class="logo-footer">
                                <img src="images/publinet-logo.png" height="110" alt="">
                            </a>
                            <p class="mt-4">Comece a trabalhar com a Publinet e descubra como é maravilhoso ter tudo o que você precisa para gerar visibilidade, atrair visitantes e conectar-se com seu público.</p>
                            <ul class="list-unstyled social-icon social mb-0 mt-4">
                                <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="facebook" class="fea icon-sm fea-social"></i></a></li>
                                <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="instagram" class="fea icon-sm fea-social"></i></a></li>
                                <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="twitter" class="fea icon-sm fea-social"></i></a></li>
                                <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="linkedin" class="fea icon-sm fea-social"></i></a></li>
                            </ul><!--end icon-->
                        </div><!--end col-->

                        <div class="col-lg-6 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                            <h4 class="text-light footer-head">Empresa</h4>
                            <ul class="list-unstyled footer-list mt-4">
                                <li><a href="index.php" class="text-foot">Home</a></li>
                                <li><a href="agencia-de-marketing-digital.php" class="text-foot">A Agência</a></li>
                                <li><a href="criacao-de-sites.php"text-foot">Criação de Sites</a></li>
                                <li><a href="agencia-de-seo.php" class="text-foot">SEO</a></li>
                                <li><a href="contato.php" class="text-foot">Contato</a></li>
                                <li><a href="#" class="text-foot">Trabalhe Conosco</a></li>
                            </ul>
                        </div><!--end col-->
                    </div><!--end row-->
                </div><!--end container-->
            </footer><!--end footer-->
            <footer class="footer footer-bar">
                <div class="container text-center">
                    <div class="row align-items-center">
                        <div class="col-sm-6">
                            <div class="text-sm-left">
                                <p class="mb-0">© <?= date('Y') ?> Publinet</p>
                            </div>
                        </div><!--end col-->

                        <div class="col-sm-6 mt-4 mt-sm-0 pt-2 pt-sm-0">
                            <!-- <ul class="list-unstyled text-sm-right mb-0">
                                <li class="list-inline-item"><a href="javascript:void(0)"><img src="images/payments/american-ex.png" class="avatar avatar-ex-sm" title="American Express" alt=""></a></li>
                                <li class="list-inline-item"><a href="javascript:void(0)"><img src="images/payments/discover.png" class="avatar avatar-ex-sm" title="Discover" alt=""></a></li>
                                <li class="list-inline-item"><a href="javascript:void(0)"><img src="images/payments/master-card.png" class="avatar avatar-ex-sm" title="Master Card" alt=""></a></li>
                                <li class="list-inline-item"><a href="javascript:void(0)"><img src="images/payments/paypal.png" class="avatar avatar-ex-sm" title="Paypal" alt=""></a></li>
                                <li class="list-inline-item"><a href="javascript:void(0)"><img src="images/payments/visa.png" class="avatar avatar-ex-sm" title="Visa" alt=""></a></li>
                            </ul> -->
                        </div><!--end col-->
                    </div><!--end row-->
                </div><!--end container-->
            </footer><!--end footer-->
            <!-- Footer End -->

            <!-- Back to top -->
            <a href="#" class="btn btn-icon btn-soft-primary back-to-top"><i data-feather="arrow-up" class="icons"></i></a>
            <!-- Back to top -->

            <!-- javascript -->
            <script src="js/jquery-3.5.1.min.js"></script>
            <script src="js/bootstrap.bundle.min.js"></script>
            <script src="js/jquery.easing.min.js"></script>
            <script src="js/scrollspy.min.js"></script>
            <!-- Magnific Popup -->
            <script src="js/jquery.magnific-popup.min.js"></script>
            <script src="js/magnific.init.js"></script>
            <!-- SLIDER -->
            <script src="js/owl.carousel.min.js "></script>
            <script src="js/owl.init.js "></script>
            <!-- Icons -->
            <script src="js/feather.min.js"></script>
            <script src="https://unicons.iconscout.com/release/v2.1.9/script/monochrome/bundle.js"></script>
            <!-- Main Js -->
            <script src="js/app.js"></script>
            <!-- Incluindo jQuery Mask Plugin -->

            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
            <script>
                // Máscara para o campo de Whatsapp
                $('#whatsapp').mask('+00 (00) 00000-0000');

                // Máscara para o campo de Website (adapte conforme necessário)
                $(document).ready(function() {
                    $('#website').mask('A', {
                        translation: {
                            'A': {
                                pattern: /[\w\d\-\.\/:\?=&%]/, // Permite caracteres alfanuméricos, hífen, ponto, barra, dois pontos, interrogação, igual e porcentagem
                                recursive: true
                            }
                        },
                        placeholder: 'http://www.exemplo.com.br'
                    });

                    // Ajustar a máscara se o usuário não inserir o protocolo
                    $('#website').on('input', function() {
                        var value = $(this).val();
                        if (!/^https?:\/\//i.test(value)) {
                            $(this).val('http://' + value);
                        }
                    });

                        // Validação ao enviar o formulário
                    $('#myForm').on('submit', function(event) {
                        alert('test');
                        event.preventDefault();

                        var websiteValue = $('#website').val();
                        var nameValue = $('#name').val();
                        var celphone = 5511947326461;
                        var message = `Olá, vi seu site, sou ${websiteValue} e gostaria de mais informações. Nome: ${nameValue}`;
                        var encodedMessage = encodeURIComponent(message);

                        window.open(`https://wa.me/${celphone}?text=${encodedMessage}`, '_blank');
                    });
                });
            </script>
            </body>

            </html>