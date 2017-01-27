<?php get_header() ?>

<section class="pagina-curso pagina">
    <div class="container-fluid">

		<?php 


            $chamada = get_field('chamada');
			$duracao = get_field('duracao');
			$inicio = get_field('inicio');
			$final = get_field('final');
			$descricao = get_field('descricao');
			$cargaHoraria = get_field('carga_horaria');
			$local = get_field('local');
			$alunos = get_field('alunos');
			$custo = get_field('custo');
			$publico = get_field('publico');
			$justificativa = get_field('justificativa');
			$conteudos = get_field('conteudo');
			$instrutores = get_field('instrutores');

		?>

        <div class="row bloco-curso">
            <section class="col-md-6 col-lg-7 title-bloco apresentacao">

                <h2 class="title"><?php the_title() ?></h2>

                <div class="ipo-linha"></div>

                <h3 class="subtitle"><?php echo $chamada ?></h3>

                <div class="data-curso">

                    <?php if (count( $duracao ) > 1): ?>

                        <span id="n-modulos"><?php l('em ' . count($duracao) . ' módulos:', 'in ' . count($duracao) . ' modules:') ?></span>

                    <?php endif ?>

                    <div id="wrap-data" <?php echo ( count($duracao) > 1 ) ? 'class="multi-modulos"' : '' ?>>

                        <?php 

                        $iDuracao = 0;

                        foreach ($duracao as $datas) :
     
                            $datetime = new DateTime();
                            $inicio = $datetime->createFromFormat('Ymd', $datas['inicio']);

                            $datetime = new DateTime();
                            $final = $datetime->createFromFormat('Ymd', $datas['final']);

                            echo "<p>";

                            incluiNumModulo( $duracao, $iDuracao );


                            if ( $inicio->format('m') == $final->format('m') && $inicio->format('Y') == $final->format('Y') ) :

                            ?>
                                <!-- PT: mes IGUAL e ano IGUAL -->
                                <!-- EN: mes IGUAL e ano IGUAL -->

                                <?php echo l(
                                    'De <strong>' . $inicio->format('d') . '</strong> 
                                    a <strong>' . $final->format('d') . '</strong> 
                                    de <strong>' . $meses[$inicio->format('n') - 1] . '</strong> 
                                    de <strong>' . $inicio->format('Y') . '</strong>', 

                                    '<strong>' . $inicio->format('d') . '</strong> 
                                    to <strong>' . $months[$final->format('n') - 1] . '</strong> 
                                    <strong>' . $final->format('d') . ', 
                                    ' . $inicio->format('Y') ) ?>

                            <?php elseif ( $inicio->format('m') != $final->format('m') && $inicio->format('Y') == $final->format('Y') ) : ?>

                                <!-- PT: mes DIFERENTE e ano IGUAL -->
                                <!-- EN: mes DIFERENTE e ano IGUAL -->

                                <?php echo l(
                                    'De <strong>' . $inicio->format('d') . '</strong> 
                                    de <strong>' . $meses[$inicio->format('n') - 1] . '</strong> 
                                    a <strong>' . $final->format('d') . '</strong> 
                                    de <strong>' . $meses[$final->format('n') - 1] . '</strong> 
                                    de <strong>' . $inicio->format('Y') . '</strong>', 

                                    '<strong>' . $months[$inicio->format('n') - 1] . '</strong> 
                                    <strong>' . $inicio->format('d') . '</strong> 
                                    to <strong>' . $months[$final->format('n') - 1] . '</strong> 
                                    <strong>' . $final->format('d') . ', 
                                    ' . $inicio->format('Y') ) ?>
                                
                                <!-- <p>De <strong><?php echo $inicio->format('d') ?></strong> de <strong><?php echo $meses[$inicio->format('n') - 1] ?></strong> a <strong><?php echo $final->format('d') ?></strong> de <strong><?php echo $meses[$final->format('n') - 1] ?></strong> de <strong><?php echo $inicio->format('Y') ?></strong></p> -->

                            <?php elseif ( ( $inicio->format('m') != $final->format('m') && $inicio->format('Y') != $final->format('Y') ) || ( $inicio->format('m') == $final->format('m') && $inicio->format('Y') != $final->format('Y') ) ) : ?>

                                <!-- PT: mes DIFERENTE e ano DIFERENTE -->
                                <!-- EN: mes DIFERENTE e ano DIFERENTE -->

                                <?php echo l(
                                    'De <strong>' . $inicio->format('d') . '</strong> 
                                    de <strong>' . $meses[$inicio->format('n') - 1] . '</strong> 
                                    de <strong>' . $inicio->format('Y') . '</strong> 
                                    a <strong>' . $final->format('d') . '</strong> 
                                    de <strong>' . $meses[$final->format('n') - 1] . '</strong> 
                                    de <strong>' . $final->format('Y') . '</strong>', 

                                    '<strong>' . $months[$inicio->format('n') - 1] . '</strong> 
                                    <strong>' . $inicio->format('d') . '</strong>, 
                                    <strong>' . $inicio->format('Y') . '</strong> 
                                    to <strong>' . $months[$final->format('n') - 1] . '</strong> 
                                    <strong>' . $final->format('d') . ', 
                                    ' . $final->format('Y') ) ?>

                            <?php endif; ?>

                            <?php 

                            echo "</p>";

                            $iDuracao++;

                            endforeach; 
                        ?>
                    </div>
                    
                </div>
                    
                <button class="ipo-bt orange hover-d-gray show-form" onclick="showSubsForm(<?php echo $post->ID ?>, '<?php the_title(); ?>')"><?php l('Inscreva-se', 'Join Up') ?></button>

            </section>


            <section class="col-md-6 col-lg-5 texto-bloco descricao">
                <h2 class="title-space-orange">
                    <i class="icon-descricao"></i>
                    <?php l('Descrição', 'Description') ?>
                </h2>

                <div class="ipo-linha center orange"></div>

                <?php echo $descricao ?>                

            </section>
        </div>


        <section class="row info">

            <ul>
                <div class="row">
                    <li class="col-md-offset-1 col-md-5 col-sm-offset-0 col-sm-6">
                        <div class="col-lg-3 col-lg-push-9 col-sm-4 col-sm-push-8 col-xs-10 col-xs-offset-1 col-sm-offset-0">
                            <img src="<?php bloginfo('template_url') ?>/img/ipo-icon-carga-horaria.png">
                        </div>
                        <div class="col-lg-9 col-lg-pull-3 col-sm-8 col-sm-pull-4 col-xs-10 col-xs-offset-1 col-sm-offset-0">
                            <h2 class="title-space-orange"><?php l('Carga Horária', 'Workload') ?></h2>
                            <?php echo $cargaHoraria ?>
                        </div>
                    </li>
                    <li class="col-md-5 col-sm-6">
                        <div class="col-lg-3 col-sm-4 col-xs-10 col-xs-offset-1 col-sm-offset-0">
                            <img src="<?php bloginfo('template_url') ?>/img/ipo-icon-local.png">
                        </div>
                        <div class="col-lg-9 col-sm-8 col-xs-10 col-xs-offset-1 col-sm-offset-0">
                            <h2 class="title-space-orange"><?php l('Local', 'Location') ?></h2>
                            <?php echo $local ?>
                        </div>
                    </li>
                </div>


                <div class="row">
                    <li class="col-md-offset-1 col-md-5 col-sm-offset-0 col-sm-6">
                        <div class="col-lg-3 col-lg-push-9 col-sm-4 col-sm-push-8 col-xs-10 col-xs-offset-1 col-sm-offset-0">
                            <img src="<?php bloginfo('template_url') ?>/img/ipo-icon-alunos.png">
                        </div>
                        <div class="col-lg-9 col-lg-pull-3 col-sm-8 col-sm-pull-4 col-xs-10 col-xs-offset-1 col-sm-offset-0">
                            <h2 class="title-space-orange"><?php l('Quantidade de alunos', 'Number of participants') ?></h2>
                            <?php echo $alunos ?>
                        </div>
                    </li>
                    <li class="col-md-5 col-sm-6">
                        <div class="col-lg-3 col-sm-4 col-xs-10 col-xs-offset-1 col-sm-offset-0">
                            <img src="<?php bloginfo('template_url') ?>/img/ipo-icon-custo.png">
                        </div>
                        <div class="col-lg-9 col-sm-8 col-xs-10 col-xs-offset-1 col-sm-offset-0">
                            <h2 class="title-space-orange"><?php l('Custo', 'Cost') ?></h2>
                            <?php echo $custo ?>
                        </div>
                    </li>
                </div>
             </ul>

        </section>

        <?php if ($publico != ''): ?>
            <section class="row publico">
                
                <div class="col-md-12 wrap-title">                        
                    <h2 class="title-space">
                        <i class="icon-publico"></i>
                        <?php l('Público Alvo', 'Target Public') ?>
                    </h2>                    
                </div>

                <div class="col-lg-offset-3 col-lg-6 col-md-offset-1 col-md-10 texto-publico">

                    <div class="ipo-linha center orange"></div>
                
                    <?php echo $publico ?>
                </div>
                
            </section>
        <?php endif ?>


        <?php if ($justificativa != ''): ?>

            <section class="row bloco-curso justificativa">

                <div class="col-md-6 title-bloco title-justificativa">
                     <h2 class="title-space">
                        <i class="icon-justificativa"></i>
                        <?php l('Justificativa', 'Goals') ?>
                    </h2>                           
                </div>

                <div class="col-md-6 texto-bloco texto-justificativa">
                    <div class="ipo-linha center orange"></div>
                
                    <?php echo $justificativa ?>
                </div>
                
            </section>

            
        <?php endif ?>



        <?php if ($conteudos): ?>

            <section class="row bloco-curso conteudo">

                <div class="col-md-6 col-md-push-6 title-conteudo title-bloco">
                     <h2 class="title-space">
                        <i class="icon-conteudo"></i>
                        <?php l('Conteúdo', 'Content') ?>
                    </h2>                           
                </div>

                <div class="col-md-6 col-md-pull-6 texto-conteudo texto-bloco">
                    <!-- <div class="ipo-linha center orange"></div> -->
                
                    <ul>

                        <?php 

                        foreach ($conteudos as $conteudo) :

                            $conteudoTxt = $conteudo['conteudo'];

                            ?>

                                <li class="col-md-6"><?php echo $conteudoTxt ?></li>
                            <?php

                        endforeach;

                        ?>

                    </ul>

                </div>
                
            </section>

            
        <?php endif ?>


        <?php if ($instrutores): ?>

            <section class="row instrutores">

                <h2 class="title-space-orange">
                    <i class="icon-instrutores"></i>
                    <?php l('Instrutores', 'Trainers') ?>
                </h2>   

                <div class="ipo-linha center d-gray"></div>

                <div class="info-instrutores container">
                    <?php 

                    $iInstrutores = 0;

                    foreach ($instrutores as $instrutor) :

                        $objInstrutor = $instrutor['instrutor'];
                        $instrutorID = $objInstrutor[0]->ID;
                        $foto = get_field('foto', $instrutorID);
                        $foto = $foto['sizes']['foto-instrutor'];
                        $apresentacao = get_field('apresentacao', $instrutorID);
                        $funcao = $instrutor['funcao'];

                        ?>

                        <?php echo ($iInstrutores != 0) ? '</div>' : ''; ?><div class="col-sm-4 col-sm-offset-0 col-xs-10 col-xs-offset-1 card-instrutor">
                            <img class="circular-mask" src="<?php echo $foto; ?>">
                            <h2 class="title orange"><?php echo $objInstrutor[0]->post_title ?></h2>
                            <h3 class="subtitle-italic"><?php echo $funcao ?></h3>
                            <?php echo $apresentacao ?>

                        <?php

                        $iInstrutores++;

                    endforeach;
                    
                    ?>
                    </div>

                </div>

            </section>

            
        <?php endif ?>


        <section class="inscreva-se row">
            <button class="ipo-bt orange hover-d-gray" onclick="showSubsForm(<?php echo $post->ID ?>, '<?php the_title(); ?>')"><?php l('Inscreva-se', 'Join Up') ?></button>
        </section>

    </div>
</section>

<?php get_footer() ?>