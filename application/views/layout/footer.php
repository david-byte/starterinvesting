    <!-- Footer-->
    <footer class="footer py-4">
        <div class="container">
            <div class="text-center">
                <?php if (!$this->router->fetch_class() == 'login') : ?>
                    <h6 class="text-muted"> © STARTERINVESTING&nbsp;<?php echo date('Y'); ?></h6>
                <?php endif; ?>
            </div>
        </div>
    </footer>
    <!-- End Footer -->
    <!-- Portfolio Modals-->
    <!-- Modal 1-->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal"><img src="<?php echo base_url('public/assets/img/close-icon.svg'); ?>" alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project Details Go Here-->
                                <h2 class="text-uppercase">Alguns resultados</h2>
                                <p class="item-intro text-muted">Temos a melhor estratégia do mercado.</p>
                                <img class="img-fluid d-block mx-auto" src="<?php echo base_url('public/assets/img/portfolio/ob-1.jpg'); ?>" alt="" />
                                <p class="item-intro text-muted">A melhor equipe.</p>
                                <img class="img-fluid d-block mx-auto" src="<?php echo base_url('public/assets/img/portfolio/ob-2.jpg'); ?>" alt="" />
                                <p class="item-intro text-muted">Entregamos resultados para nossos clientes.</p>
                                <img class="img-fluid d-block mx-auto" src="<?php echo base_url('public/assets/img/portfolio/ob-3.jpeg'); ?>" alt="" />
                                <p>Estamos a mais de 7 anos no mercado financeiro, venha fazer parte do 1% que lucra de verdade com investimentos! Entregamos para nosso cliente 3% de rentabilidade ao mês</p>
                                <button class="btn btn-dark" data-dismiss="modal" type="button">
                                    <i class="fas fa-times mr-1"></i>
                                    Fechar Resultados
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal 2-->
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal"><img src="<?php echo base_url('public/assets/img/close-icon.svg'); ?>" alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project Details Go Here-->
                                <h2 class="text-uppercase">Nosso Curso</h2>
                                <p class="item-intro text-muted">O mais completo do mercado e o mais barato.</p>
                                <video controls class="img-fluid d-block mx-auto">
                                    <source src="<?php echo base_url('public/assets/video/apresentacao-curso.mp4'); ?>" type="video/mp4"></video>
                                <p>Nosso curso está disponível na área NOSSOS CURSOS, visite e confira algumas aulas gratuidas!</p>
                                <p class="item-intro text-muted">Nosso curso está quebrando barreiras!!!.</p>
                                <video controls class="img-fluid d-block mx-auto">
                                    <source src="<?php echo base_url('public/assets/video/arabe.mp4'); ?>" type="video/mp4"></video>
                                <p>Nosso curso está atingindo lugares onde ninguém imagina!</p>

                                <button class="btn btn-dark" data-dismiss="modal" type="button">
                                    <i class="fas fa-times mr-1"></i>
                                    Fechar
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal 3-->
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal"><img src="<?php echo base_url('public/assets/img/close-icon.svg'); ?>" alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project Details Go Here-->
                                <h2 class="text-uppercase">3% mensal de lucro</h2>
                                <p class="item-intro text-muted">Entregamos 3% lucro para nossos clientes.</p>
                                <img class="img-fluid d-block mx-auto" src="<?php echo base_url('public/assets/img/portfolio/invest.jpg'); ?>" alt="" />
                                <p>Recebemos capital de clientes e investimos em operações e repassamos 3% de lucro todo mes para o cliente! Nosso contrato aborda a total proteção do cliente, sendo assim, o cliente não corre o risco de perder seu capital. A STARTERINVESTING possui uma reserva de serguraça para cada contrato fechado. O clinte tem aceeso ao painel de evolução do seu capital onde pode verificar as operações feitas.</p>
                                <button class="btn btn-primary" data-dismiss="modal" type="button">
                                    <i class="fas fa-times mr-1"></i>
                                    Fechar
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap core JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Third party plugin JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <!-- Contact form JS-->
    <script src="<?php echo base_url('public/assets/mail/jqBootstrapValidation.js'); ?>"></script>
    <script src="<?php echo base_url('public/assets/mail/contact_me.js'); ?>"></script>
    <!-- Core theme JS-->
    <script src="<?php echo base_url('public/js/scripts.js'); ?>"></script>

    </body>

    </html>