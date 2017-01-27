<?php get_header(); ?>

<section class="pagina-home">
    <div class="bg-home">


        <div class="container-fluid">
            <div class="row">
                <div class="col-intro col-md-6 col-xs-12 col-xs-offset-0">

                    <section class="intro col-xs-10 col-xs-offset-1">

                        <div class="wrap-texto-home">
                            
                            <div class="col-md-10 col-md-offset-2 texto-home">
                                <h2 class="title">
                                    <img class="abre-aspas" src="<?php bloginfo('template_url') ?>/img/ipo-abre-aspas.png"/>
                                    Boas vindas ao site do IPO:Palmieri Odontologia de Vanguarda.
                                </h2>
                                <p>Fique a vontade para visitar a nossa clínica ou a nossa escola. <br/>
                                Obrigado.</p>
                                <img class="fecha-aspas" src="<?php bloginfo('template_url') ?>/img/ipo-fecha-aspas.png"/>
                                <div class="clearfix"></div>
                            </div>


                            <div class="ipo-linha right"></div>

                                
                            <div class="col-md-10 col-md-offset-2 texto-home">
                                
                                <h2 class="title">
                                    <img class="abre-aspas" src="<?php bloginfo('template_url') ?>/img/ipo-abre-aspas.png"/>
                                    Welcome to IPO:Palmieri - Forefront Dentistry.
                                </h2>
                                <p>Feel free to visit our clinic or our school. <br/>
                                Thank you.</p>
                                <img class="fecha-aspas" src="<?php bloginfo('template_url') ?>/img/ipo-fecha-aspas.png"/>
                                <div class="clearfix"></div>
                            </div>
                        </div>

                        <div class="col-md-12 assinatura">
                            <img src="<?php bloginfo('template_url') ?>/img/ipo-assinatura.png" nopin="nopin"/>
                        </div>

                        <div class="col-md-12 buttons">
                                
                            <div class="ipo-bt white-bd wrap-links">
                                <a id="clinica-pt" class="ani-04 clinica" lang="pt-BR" onclick="gravaTipoSite('clinica')" hreflang="pt-BR"  data-placement="top" data-trigger="hover focus" title="Site da clínica em português" href="<?php bloginfo('url') ?>/clinica">Clínica</a>
                                <span class="ipo-pontos"></span>
                                <a id="clinica-en" class="ani-04 clinica" lang="en-US" onclick="gravaTipoSite('clinica')" hreflang="en-US"  data-placement="top" data-trigger="hover focus" title="Clinic site in English" href="<?php bloginfo('url') ?>/en/clinic">
                                    <i>Clinic</i>
                                </a>
                            </div>
                                
                            <div class="ipo-bt white-bd wrap-links">
                                <a class="ani-04 escola" lang="pt-BR" onclick="gravaTipoSite('escola')" hreflang="pt-BR"  data-placement="top" data-trigger="hover focus" title="Site da escola em português" href="<?php bloginfo('url') ?>/escola">Escola</a>
                                <span class="ipo-pontos"></span> 
                                <a class="ani-04 escola" lang="en-US" onclick="gravaTipoSite('escola')" hreflang="en-US"  data-placement="top" data-trigger="hover focus" title="School site in English" href="<?php bloginfo('url') ?>/en/school">
                                    <i>School</i>
                                </a>
                            </div>


                        </div>

                    </section>
                    
                </div>
                <div id="foto" class="visible-lg visible-md hidden-sm col-md-6 col-xs-12 col-xs-offset-0">

                </div>
            </div>
        </div>


    </div>

</section>

<?php get_footer(); ?>
    