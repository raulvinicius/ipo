
        <?php if (!is_page('area-do-aluno')): ?>
            
            <footer>

                <?php if (is_home()): ?>
                    
                    <div class="container-fluid">
                        <div class="footer-home">
                            <div class="row">
                                <div class="col-md-12">
                                    <address>
                                        <p><i class="icon-phone"></i>+55 61 3326 1131 / 99933 1131</p>
                                        <p><i class="icon-map"></i>
                                                SCN Quadra 2, Bloco D, Ed. Liberty Mall, Torre B, Sala 923, Brasília-DF, 70712-904
                                    </address>
                                </div>
                            </div>
                        </div>
                    </div>

                <?php else : ?>

                    <section class="container-fluid mapa-footer">

                        <div class="col-md-12" id="map-canvas"></div>

                        <div class="row wrap-footer">
                            
                            <div class="container">
                                <div class="row">

                                    <div class="col-md-4 col-sm-offset-0 col-sm-6 col-xs-offset-2 col-xs-8">
                                        <img class="logo-footer" src="<?php echo bloginfo('template_url') ?>/img/ipo-logo-footer.png"/>
                                        <address>
                                            <p id="map"><i class="icon-map"></i><span>SCN Quadra 2 Bloco D, Ed. Liberty Mall, Torre B, Sala 923, Brasília-DF, <span class="no-wrap">CEP 70712-904</span></span></p>
                                            <p><i class="icon-phone"></i>+55 61 3326 1131 / 99933 1131</p>
                                            <p><i class="icon-email"></i>contato@plasticaoclusal.com.br</p>
                                                <p>
                                                    <i class="icon-face"></i>
                                                    <a href="https://www.facebook.com/plasticaoclusal/" target="_blank">@plasticaoclusal</a>
                                                </p>
                                                <p>
                                                    <i class="icon-face"></i>
                                                    <a href="https://www.facebook.com/ipobsb" target="_blank">@ipobsb</a>
                                                </p>
                                            <div>
                                            </div>
                                        </address>
                                    </div>

                                    <div class="col-md-4 hidden-sm hidden-xs">
                                        <nav>
                                            <ul class="menu-clinica col-md-6">
                                                <h2>Clínica</h2>
                                                <li class="ani-04">
                                                    <a class="ani-04" onclick="gravaTipoSite('clinica')" href="<?php bloginfo('url') ?>/<?php l('clinica/a-clinica', 'clinic/about-us') ?>">
                                                        <?php l('A Clínica', 'About Us') ?>
                                                    </a>
                                                </li>
                                                <li class="ani-04">
                                                    <a class="ani-04" onclick="gravaTipoSite('clinica')" href="<?php bloginfo('url') ?>/<?php l('clinica/tratamentos', 'clinic/treatments') ?>">
                                                        <?php l('Tratamentos', 'Our Treatments') ?>
                                                    </a>
                                                </li>
                <!--
                                                 <li class="ani-04">
                                                    <a class="ani-04" onclick="gravaTipoSite('clinica')" href="<?php bloginfo('url') ?>/<?php l('clinica/dentistas', 'clinic/dentists') ?>">
                                                        <?php l('Dentistas', 'Our Dentists') ?>
                                                    </a>
                                                </li>
                                                <li class="ani-04">
                                                    <a class="ani-04" onclick="gravaTipoSite('clinica')" href="<?php bloginfo('url') ?>/<?php l('clinica/blog', 'clinic/blog') ?>">
                                                        Blog
                                                    </a>
                                                </li>
                 -->
                                                 <li class="ani-04">
                                                    <a class="ani-04" onclick="jivo_api.open();" href="javascript:void(0)">
                                                        <?php l('Contato', 'Contact Us') ?>
                                                    </a>
                                                </li>                                                

                                            </ul>
                                            <ul class="menu-escola col-md-6">
                                                <h2>Escola</h2>
                                                <li class="ani-04">
                                                    <a class="ani-04" onclick="gravaTipoSite('escola')" href="<?php bloginfo('url') ?>/<?php l('escola/a-escola', 'school/our-school') ?>">
                                                        <?php l('A Escola', 'Our School') ?>
                                                    </a>
                                                </li>
                                                <li class="ani-04">
                                                    <a class="ani-04" onclick="gravaTipoSite('escola')" href="<?php bloginfo('url') ?>/<?php l('escola/cursos', 'school/courses') ?>">
                                                        <?php l('Cursos', 'Our Courses') ?>
                                                    </a>
                                                </li>
                                                <li class="ani-04">
                                                    <a class="ani-04" onclick="gravaTipoSite('escola')" href="<?php bloginfo('url') ?>/<?php l('escola/instrutores', 'school/instructors') ?>">
                                                        <?php l('Instrutores', 'Our Instuctors') ?>
                                                    </a>
                                                </li>
            <!-- 
                                                <li class="ani-04">
                                                    <a class="ani-04" onclick="gravaTipoSite('escola')" href="<?php bloginfo('url') ?>/<?php l('escola/blog', 'school/blog') ?>">
                                                        Blog
                                                    </a>
                                                </li>
             -->                                    
                                                <li class="ani-04">
                                                    <a class="ani-04" onclick="jivo_api.open();" href="javascript:void(0)">
                                                        <?php l('Contato', 'Contact Us') ?>
                                                    </a>
                                                </li>
                                                <li id="area" class="ani-04">
                                                    <a class="ani-04" onclick="gravaTipoSite('escola')" href="<?php bloginfo('url') ?>/<?php l('area-do-aluno', 'student-area') ?>">
                                                        <?php l('Área do Aluno', 'Student Area') ?>
                                                    </a>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>

                                    <div id="form" class="col-md-4 col-sm-6 col-sm-offset-0 col-xs-offset-2 col-xs-8">
                                        <div class="row">
                                            <form>
                                                <div class="col-md-6 col-sm-12 col-xs-12">                 
                                                    <input type="text" placeholder="<?php l('Nome', 'Name') ?>" />
                                                </div>

                                                <div class="col-md-6 col-sm-12 col-xs-12">
                                                    <input type="text" placeholder="E-mail" />
                                                </div>

                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                    <input class="mensagem" type="text" placeholder="<?php l('Mensagem', 'Message') ?>" />
                                                </div>

                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                    <input type="submit" value="<?php l('Enviar', 'Send') ?>" />
                                                </div>

                                            </form>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </section>
<!-- 
                    <div class="fase-01">
                            <div class="col-md-12" id="map-canvas"></div>
                        <div class="container">

                            <div class="box col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 col-xs-12 col-xs-offset-0">

                                <p id="endereco"><i></i><?php 
                                    l(
                                        'SCN Quadra 2, Bloco D, Ed. Liberty Mall, Torre B, Sala 923, Brasília-DF, 70712-904',
                                        'SCN Block 02, Square D, Ed. Liberty Mall, Tower B, Room 923, Brasília-DF, 70712-904'
                                    ) ?>
                                </p>
                                <p id="fone"><i></i>+55 61 3326-1131 / 99933-1131</p>
                                <p id="email"><i></i>contato@plasticaoclusal.com.br</p>
                                
                            </div>
                        
                        </div>
                    </div>
 -->
                <?php endif; ?>

                <?php 

                // pll_the_languages();
                // echo '<br>'. pll_current_language();

                // echo '<br>'. pll_get_post(77);

                // $tpid = pll_get_post(77);

                // echo '<br>'. get_field('chamada', $tpid);
                // echo '<br><br>';

                 ?>
                <section class="form-inscricao container-fluid">
                    
                    <button id="close-form" class="ipo-bt d-gray"><?php l('Fechar', 'Close') ?></button>

                    <div class="row">
                        <div class="titulo col-md-offset-1 col-md-10">
                            <h2 class="subtitle"><?php pll_e('Inscrição para') ?> <span><?php l('nossos cursos', 'our trainings') ?></span></h2>
                        </div>
                    </div>

                    <div class="row">
                        <form class="inscricao js col-md-offset-1 col-md-10" action="<?php bloginfo('url') ?>/inscricao">

                            <div id="process"><?php l('Enviando...', 'Sending...') ?></div>
                            <div id="success" class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2">
                                <?php l('Obrigado por sua inscrição no curso <span id="curso"></span>.<span id="line-2">Só mais um passo: lhe enviamos uma confirmação de e-mail. Acesse <span id="email"></span> e confirme sua inscrição para completar o cadastro.</span>', 'Thank you for your registration to <span id="curso"></span>. <span id="line-2">Just one more step: we sent you a confirmation e-mail. Access <span id="email"></span> and confirm your subscription to finish the registration.</span>') ?>
                                <button id="hide-form" class="ipo-bt orange hover-d-gray">Fechar</button>
                            </div>

                            <div id="aviso-campos"><span>*</span> <?php l('Campos Obrigatórios', 'Required Fields') ?></div>

                            <fieldset>

                                <legend><?php l('Dados Pessoais', 'Personal data') ?></legend>

                                <div class="field-ipo required">
                                    <label for="nm">
                                        <span id="lbl"><?php l('Nome Completo', 'Full name') ?></span>
                                        <span class="errorMsg"></span>
                                        <input type="text" name="nm" id="nm" class="required">
                                    </label>
                                </div>

                                <div class="field-ipo required">
                                    <label for="nmcrch">
                                        <span id="lbl"><?php l('Nome para o crachá', 'Name for the badge') ?></span>
                                        <span class="errorMsg"></span>
                                        <input type="text" name="nmcrch" id="nmcrch">
                                    </label>
                                </div>
                                
                                <div class="field-ipo required">
                                    <label for="nscmnt">
                                        <span id="lbl"><?php l('Data de Nascimento', 'Birthdate') ?></span>
                                        <span class="errorMsg"></span>
                                        <input type="text" name="nscmnt" id="nscmnt" class="data">
                                    </label>
                                </div>
                                
                                <div class="field-ipo required field-radio" id="field-sexo">
                                    <span id="lbl"><?php l('Sexo', 'Gender') ?></span>
                                    <span class="errorMsg"></span>
                                    <span id="inputs">

                                        <input type="radio" name="sx" id="sx-m">
                                        <label for="sx-m">
                                            <span class="lbl-radio"><?php l('Masculino', 'Male') ?></span>
                                        </label>
                                        <input type="radio" name="sx" id="sx-f">
                                        <label for="sx-f">
                                            <span class="lbl-radio"><?php l('Feminino', 'Female') ?></span>
                                        </label>
                                        
                                    </span>
                                </div>
                                
                                <div class="field-ipo required" id="email">
                                    <label for="ml">
                                        <span id="lbl">E-mail</span>
                                        <span class="errorMsg"></span>
                                        <input type="text" name="ml" id="ml">
                                    </label>
                                </div>
                                
    <!--                             <div class="field-ipo">
                                    <label for="snh">
                                        <span><?php l('Senha', 'Password') ?></span>
                                        <span class="errorMsg"></span>
                                        <input type="password" name="snh" id="snh">
                                    </label>
                                </div>
                                
                                <div class="field-ipo">
                                    <label for="cnfrmsnh">
                                        <span><?php l('Confirmação de senha', 'Password confirmation') ?></span>
                                        <span class="errorMsg"></span>
                                        <input type="password" name="cnfrmsnh" id="cnfrmsnh">
                                    </label>
                                </div>
     -->                            

                                <div class="field-ipo required">
                                    <label for="cpf">
                                        <span id="lbl"><?php l('CPF', 'ID') ?></span>
                                        <span class="errorMsg"></span>
                                        <input type="text" name="cpf" id="cpf" class="cpf">
                                    </label>
                                </div>
                                
                                <div class="field-ipo required" id="endereco">
                                    <label for="ndrc">
                                        <span id="lbl"><?php l('Endereço', 'Address') ?></span>
                                        <span class="errorMsg"></span>
                                        <input type="text" name="ndrc" id="ndrc">
                                    </label>
                                </div>
                                
                                <div class="field-ipo required">
                                    <label for="brr">
                                        <span id="lbl"><?php l('Bairro', 'Quarter') ?></span>
                                        <span class="errorMsg"></span>
                                        <input type="text" name="brr" id="brr">
                                    </label>
                                </div>
                                
                                <div class="field-ipo required">
                                    <label for="cdd">
                                        <span id="lbl"><?php l('Cidade', 'City') ?></span>
                                        <span class="errorMsg"></span>
                                        <input type="text" name="cdd" id="cdd">
                                    </label>
                                </div>
                                
                                <div class="field-ipo required">
                                    <label for="std">
                                        <span id="lbl"><?php l('Estado', 'State') ?></span>
                                        <span class="errorMsg"></span>
                                        <select name="std" id="std" aria-required="true" aria-invalid="false">
                                            <option value=""></option>
                                            <option value="AC">AC</option>
                                            <option value="AL">AL</option>
                                            <option value="AM">AM</option>
                                            <option value="AP">AP</option>
                                            <option value="BA">BA</option>
                                            <option value="CE">CE</option>
                                            <option value="DF">DF</option>
                                            <option value="ES">ES</option>
                                            <option value="GO">GO</option>
                                            <option value="MA">MA</option>
                                            <option value="MG">MG</option>
                                            <option value="MS">MS</option>
                                            <option value="MT">MT</option>
                                            <option value="PA">PA</option>
                                            <option value="PB">PB</option>
                                            <option value="PE">PE</option>
                                            <option value="PI">PI</option>
                                            <option value="PR">PR</option>
                                            <option value="RJ">RJ</option>
                                            <option value="RN">RN</option>
                                            <option value="RO">RO</option>
                                            <option value="RR">RR</option>
                                            <option value="RS">RS</option>
                                            <option value="SC">SC</option>
                                            <option value="SE">SE</option>
                                            <option value="SP">SP</option>
                                            <option value="TO">TO</option>
                                        </select>
                                    </label>
                                </div>
                                
                                <div class="field-ipo required">
                                    <label for="cp">
                                        <span id="lbl"><?php l('CEP', 'ZIP Code') ?></span>
                                        <span class="errorMsg"></span>
                                        <input type="text" name="cp" id="cp" class="<?php l('cep', 'zip') ?>">
                                    </label>
                                </div>
                                
                                <div class="field-ipo required">
                                    <label for="tlfn">
                                        <span id="lbl"><?php l('Telefone', 'Phone') ?></span>
                                        <span class="errorMsg"></span>
                                        <input type="text" name="tlfn" id="tlfn" class="telefone">
                                    </label>
                                </div>
                                
                                <div class="field-ipo">
                                    <label for="cllr">
                                        <span><?php l('Celular', 'Cellphone') ?></span>
                                        <span class="errorMsg"></span>
                                        <input type="text" name="cllr" id="cllr" class="celular">
                                    </label>
                                </div>

                            </fieldset>                    

                            <fieldset>

                                <legend><?php l('Dados de usuário (Área do Aluno)', 'User data (Student area)') ?></legend>

                                <div class="field-ipo required">
                                    <label for="srnm">
                                        <span id="lbl"><?php l('Nome de usuário', 'User name') ?></span>
                                        <span class="errorMsg"></span>
                                        <input type="text" name="srnm" id="srnm" class="required">
                                    </label>
                                </div>
                                <div class="field-ipo required">
                                    <label for="snh">
                                        <span id="lbl"><?php l('Senha', 'Password') ?></span>
                                        <span class="errorMsg"></span>
                                        <input type="password" name="snh" id="snh" class="required">
                                    </label>
                                </div>
                                <div class="field-ipo required">
                                    <label for="snh2">
                                        <span id="lbl"><?php l('Confirmação de senha', 'Password confirmation') ?></span>
                                        <span class="errorMsg"></span>
                                        <input type="password" name="snh2" id="snh2" class="required">
                                    </label>
                                </div>

                            </fieldset>

                            <fieldset>

                                <legend><?php l('Dados profissionais', 'Comercial data') ?></legend>

                                <div class="field-ipo required" id="endereco">
                                    <label for="ndrccmrcl">
                                        <span id="lbl"><?php l('Endereço Comercial', 'Commercial Address') ?></span>
                                        <span class="errorMsg"></span>
                                        <input type="text" name="ndrccmrcl" id="ndrccmrcl">
                                    </label>
                                </div>
                                
                                <div class="field-ipo required">
                                    <label for="brrcmrcl">
                                        <span id="lbl"><?php l('Bairro', 'Quarter') ?></span>
                                        <span class="errorMsg"></span>
                                        <input type="text" name="brrcmrcl" id="brrcmrcl">
                                    </label>
                                </div>
                                
                                <div class="field-ipo required">
                                    <label for="cddcmrcl">
                                        <span id="lbl"><?php l('Cidade', 'City') ?></span>
                                        <span class="errorMsg"></span>
                                        <input type="text" name="cddcmrcl" id="cddcmrcl">
                                    </label>
                                </div>
                                
                                <div class="field-ipo required">
                                    <label for="stdcmrcl">
                                        <span id="lbl"><?php l('Estado', 'State') ?></span>
                                        <span class="errorMsg"></span>
                                        <select name="stdcmrcl" id="stdcmrcl" aria-required="true" aria-invalid="false">
                                            <option value=""></option>
                                            <option value="AC">AC</option>
                                            <option value="AL">AL</option>
                                            <option value="AM">AM</option>
                                            <option value="AP">AP</option>
                                            <option value="BA">BA</option>
                                            <option value="CE">CE</option>
                                            <option value="DF">DF</option>
                                            <option value="ES">ES</option>
                                            <option value="GO">GO</option>
                                            <option value="MA">MA</option>
                                            <option value="MG">MG</option>
                                            <option value="MS">MS</option>
                                            <option value="MT">MT</option>
                                            <option value="PA">PA</option>
                                            <option value="PB">PB</option>
                                            <option value="PE">PE</option>
                                            <option value="PI">PI</option>
                                            <option value="PR">PR</option>
                                            <option value="RJ">RJ</option>
                                            <option value="RN">RN</option>
                                            <option value="RO">RO</option>
                                            <option value="RR">RR</option>
                                            <option value="RS">RS</option>
                                            <option value="SC">SC</option>
                                            <option value="SE">SE</option>
                                            <option value="SP">SP</option>
                                            <option value="TO">TO</option>
                                        </select>
                                    </label>
                                </div>
                                
                                <div class="field-ipo required">
                                    <label for="cpcmrcl">
                                        <span id="lbl"><?php l('CEP', 'ZIP Code') ?></span>
                                        <span class="errorMsg"></span>
                                        <input type="text" name="cpcmrcl" id="cpcmrcl" class="<?php l('cep', 'zip') ?>">
                                    </label>
                                </div>
                                
                                <div class="field-ipo required">
                                    <label for="tlfncmrcl">
                                        <span id="lbl"><?php l('Telefone Comercial', 'Commercial Phone') ?></span>
                                        <span class="errorMsg"></span>
                                        <input type="text" name="tlfncmrcl" id="tlfncmrcl" class="telefone">
                                    </label>
                                </div>
                                
                                <div class="field-ipo">
                                    <label for="fx">
                                        <span><?php l('Celular', 'Cellphone') ?></span>
                                        <input type="text" name="fx" id="fx" class="celular">
                                    </label>
                                </div>

                                <div class="field-ipo">
                                    <label for="wbst">
                                        <span>Website</span>
                                        <input type="text" name="wbst" id="wbst">
                                    </label>
                                </div>


                            </fieldset>                    


                            <fieldset>

                                <legend><?php l('Formação Profissional', 'Professional Qualification') ?></legend>

                                <div class="field-ipo">
                                    <label for="nvrsdd">
                                        <span><?php l('Universidade de Formação', 'University') ?></span>
                                        <input type="text" name="nvrsdd" id="nvrsdd">
                                    </label>
                                </div>

                                <div class="field-ipo required">
                                    <label for="cddnvrsdd">
                                        <span id="lbl"><?php l('Cidade de Formação', 'University City') ?></span>
                                        <span class="errorMsg"></span>
                                        <input type="text" name="cddnvrsdd" id="cddnvrsdd">
                                    </label>
                                </div>

                                <div class="field-ipo">
                                    <label for="psnvrsdd">
                                        <span><?php l('País de Formação', 'University Coutry') ?></span>
                                        <input type="text" name="psnvrsdd" id="psnvrsdd">
                                    </label>
                                </div>

                                <div class="field-ipo">
                                    <label for="tmpfrmc">
                                        <span><?php l('Tempo de Formação', 'Formation time') ?></span>
                                        <span class="errorMsg"></span>
                                        <input type="text" name="tmpfrmc" id="tmpfrmc">
                                    </label>
                                </div>

                                <div class="field-ipo required field-radio" id="field-nivel">
                                    <span id="lbl"><?php l('Nível', 'Level') ?></span>
                                    <span class="errorMsg"></span>
                                    <span id="inputs">

                                        <input type="radio" name="nvlfrmc" id="nvlfrmc-e">
                                        <label for="nvlfrmc-e">
                                            <span class="lbl-radio"><?php l('Especialização', 'Specialization') ?></span>
                                        </label>
                                        <input type="radio" name="nvlfrmc" id="nvlfrmc-m">
                                        <label for="nvlfrmc-m">
                                            <span class="lbl-radio"><?php l('Mestrado', 'Master') ?></span>
                                        </label>
                                        <input type="radio" name="nvlfrmc" id="nvlfrmc-d">
                                        <label for="nvlfrmc-d">
                                            <span class="lbl-radio"><?php l('Doutorado', 'Ph.D.') ?></span>
                                        </label>
                                        
                                    </span>
                                </div>

                                <div class="field-ipo required">
                                    <label for="rfrmc">
                                        <span id="lbl"><?php l('Área de Formação', 'Academic Area') ?></span>
                                        <span class="errorMsg"></span>
                                        <input type="text" name="rfrmc" id="rfrmc">
                                    </label>
                                </div>


                                
                            </fieldset>                    

                            <input type="hidden" name="crs" id="crs" value="" />
                            <input type="hidden" name="action" value="new_post" />
                            <?php wp_nonce_field( 'new-post' ); ?>

    <!--                         <button type="button"><?php l('Voltar e conferir os dados', 'Comeback and check data') ?></button>

                            <button type="button"><?php l('OK, próxima', 'OK, next') ?></button>
     -->
                             <div id="wrap-bts">
                                <button type="button" id="cancelar" class="ipo-bt p-20 secundario"><?php l('Cancelar', 'Cancel') ?></button>
                                <input class="ipo-bt orange" type="submit" value="<?php l('Finalizar minha inscrição', 'Finalize my subscription') ?>">
                             </div>

                        </form>
                    </div>


                    <div class="nota-seguranca">
                        <p>
                            <i class="ico"></i>
                            <?php /*l(
                                    '<span>Conexão segura:</span>
                                    Seus dados estão protegidos',
                                    '<span>Secure connection:</span>
                                    Your data is protected'
                                    ) */?>
                        </p>
                    </div>

                </section>



            </footer>

        <?php endif ?>


        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src= "<?php bloginfo("template_url") ?>/js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

        <script src= "<?php bloginfo('template_url') ?>/js/bootstrap.min.js"></script>
        <script src= "<?php bloginfo('template_url') ?>/js/vendor/modernizr-2.8.3.min.js"></script>

        <script src= "<?php bloginfo('template_url') ?>/js/main.js"></script>
        <script src="<?php bloginfo('template_url') ?>/js/jquery.mask.min.js"></script>
        <script src="<?php bloginfo('template_url') ?>/js/jquery.form.js"></script>
        <script src="<?php bloginfo('template_url') ?>/js/jquery.validate.min.js"></script>
        <script src="<?php bloginfo('template_url') ?>/js/jquery.cookie.js"></script>


        <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-91541950-1', 'auto');
          ga('send', 'pageview');

        </script>
             
        <!-- BEGIN JIVOSITE CODE {literal} -->
        <script type='text/javascript'>
            (function(){ 
                var widget_id = '5h8u1JfC87';
                var d=document;
                var w=window;
                
                function l(){
                    var s = document.createElement('script');
                        s.type = 'text/javascript';
                        s.async = true;
                        s.src = '//code.jivosite.com/script/widget/'+widget_id;
                    var ss = document.getElementsByTagName('script')[0];
                        ss.parentNode.insertBefore(s, ss);

                }

                if (d.readyState=='complete')
                {
                    l();
                }
                else
                {
                    if (w.attachEvent)
                    {
                        w.attachEvent('onload',l);
                    }
                    else
                    {
                        w.addEventListener('load',l,false);
                    }
                }
            })();

        </script>
        <!-- {/literal} END JIVOSITE CODE -->
        <!-- 
        <?php wp_footer() ?> 
         -->

    </body>

</html>
