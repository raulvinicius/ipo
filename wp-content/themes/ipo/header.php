<?php 

    if ( is_home() && $_COOKIE['tipo_ipo'] == 'escola' ) : 

        if (pll_current_language() == 'pt') :

            header('Location: ' . get_bloginfo('url') . '/escola');

        elseif (pll_current_language() == 'en') :

            header('Location: ' . get_bloginfo('url') . '/en/school');
        
        endif;

    elseif ( is_home() && $_COOKIE['tipo_ipo'] == 'clinica' ) : 

        if (pll_current_language() == 'pt') :

            header('Location: ' . get_bloginfo('url') . '/clinica');

        elseif (pll_current_language() == 'en') :

            header('Location: ' . get_bloginfo('url') . '/en/clinic');
        
        endif;


    endif;
?>


<!--[if lt IE 7]>
    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
    <html 
        xmlns='http://www.w3.org/1999/xhtml' 
        xmlns:og='http://ogp.me/ns#' 
        class="no-js lt-ie9 lt-ie8 lt-ie7" 
        lang="<?php echo (pll_current_language() == 'pt') ? 'pt-br' : 'en-us'; ?>">
<![endif]-->
<!--[if IE 7]>
    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
    <html 
        xmlns='http://www.w3.org/1999/xhtml' 
        xmlns:og='http://ogp.me/ns#' 
        class="no-js lt-ie9 lt-ie8" 
        lang="<?php echo (pll_current_language() == 'pt') ? 'pt-br' : 'en-us'; ?>">
<![endif]-->
<!--[if IE 8]>
    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
    <html 
        xmlns='http://www.w3.org/1999/xhtml' 
        xmlns:og='http://ogp.me/ns#' 
        class="no-js lt-ie9" 
        lang="<?php echo (pll_current_language() == 'pt') ? 'pt-br' : 'en-us'; ?>">
<![endif]-->
<!--[if gt IE 8]>-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html
    xmlns='http://www.w3.org/1999/xhtml'
    xmlns:og='http://ogp.me/ns#'
    class="no-js"
    lang="<?php echo (pll_current_language() == 'pt') ? 'pt-br' : 'en-us'; ?>">
<!--<![endif]-->

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

        <title><?php echo ( $post->post_name != '' && is_home() == false ) ? get_the_title() . " | " : ""; ?>IPO:PALMIERI</title>
        
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <!--[if IE]><link rel="shortcut icon" href="<?php bloginfo('template_url') ?>/favicon.ico"><![endif]-->
        <link rel="icon" href="<?php bloginfo('template_url') ?>/favicon.ico">
        <link rel="apple-touch-icon" href="<?php bloginfo('template_url') ?>/apple-touch-icon.png">

        <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/bootstrap.css">
        <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/animate.css">

        <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/style.css">

        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDyW_VTxe4pLCXOkueGAbeANzihjqWjBLI"></script>

        <link href="<?php bloginfo('template_url') ?>/jivosite/jivosite.css" rel="stylesheet" />
        <script src="<?php bloginfo('template_url') ?>/jivosite/jivosite.js" type="text/javascript"></script>

        <!-- http://www.favicon-generator.org/ -->
        <link rel="apple-touch-icon" sizes="57x57" href="<?php bloginfo('template_url') ?>/favicon/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="<?php bloginfo('template_url') ?>/favicon/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo('template_url') ?>/favicon/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="<?php bloginfo('template_url') ?>/favicon/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo('template_url') ?>/favicon/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="<?php bloginfo('template_url') ?>/favicon/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="<?php bloginfo('template_url') ?>/favicon/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="<?php bloginfo('template_url') ?>/favicon/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('template_url') ?>/favicon/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="<?php bloginfo('template_url') ?>/favicon/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo('template_url') ?>/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="<?php bloginfo('template_url') ?>/favicon/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo('template_url') ?>/favicon/favicon-16x16.png">
        <link rel="manifest" href="<?php bloginfo('template_url') ?>/favicon/manifest.json">
        <meta name="msapplication-TileColor" content="#f7931e">
        <meta name="msapplication-TileImage" content="/favicon/ms-icon-144x144.png">
        <meta name="theme-color" content="#f7931e">
    

        <!-- PUBLICAÇÃO EM REDES SOCIAIS -->

        <meta itemprop="name" content="IPO:PALMIERI">

        <!-- FACEBOOK -->
        <meta property='og:updated_time' content='<?php echo date("c") ?>' /> <!-- essa configuração diz ao Facebook que você é o administrador da fanpage -->
        <meta property='og:locale' content='<?php echo (pll_current_language() == 'pt') ? 'pt_BR' : 'en_US'; ?>' />
        <meta property='og:locale:alternate' content='<?php echo (pll_current_language() == 'pt') ? 'en_US' : 'pt_BR'; ?>' /> <!-- idiomas alternativos em que o site também pode estar disponível -->
        <meta property='og:title' content='<?php echo ( $post->post_name != '' && is_home() == false ) ? get_the_title() : ""; ?>' /> <!-- título da página (ex.: Conhecendo a equipe) -->
        <meta property='og:site_name' content='IPO:PALMIERI' /> <!-- nome do site (ex.: Empresa X) -->

        <?php

            if ( isset( $post->ID ) ): 

                $pType = get_post_type( $post->ID );

                echo "<!--";
                var_dump($post->post_name);
                echo "-->";


                if ($pType == 'cursos')
                {
                    $exDescricao = wp_strip_all_tags( get_field('descricao') );
                    if( strlen($exDescricao) > 195)
                    {
                        $exDescricao = substr( $exDescricao, 0, 195);
                        $exDescricao = substr( $exDescricao, 0, strrpos($exDescricao, " ")) . '...';
                    }

                ?>
                    <meta name='twitter:description' content='<?php echo $exDescricao ?>' />
                    <meta property='og:description' content='<?php echo $exDescricao ?>' />
                    <meta itemprop='description' content='<?php echo $exDescricao ?>'>
                <?php 
                }
                else if ($pType == 'post')
                {
                    $exDescricao = wp_strip_all_tags( $post->post_content );
                    if( strlen($exDescricao) > 195)
                    {
                        $exDescricao = substr( $exDescricao, 0, 195);
                        $exDescricao = substr( $exDescricao, 0, strrpos($exDescricao, " ")) . '...';
                    }

                ?>
                    <meta name='twitter:description' content='<?php echo $exDescricao ?>' />
                    <meta property='og:description' content='<?php echo $exDescricao ?>' />
                    <meta itemprop='description' content='<?php echo $exDescricao ?>'>
                <?php 
                }
                else
                {
                ?>
                    <meta name='twitter:description' content='Odontologia de Vanguarda' />
                    <meta property='og:description' content='Odontologia de Vanguarda' />
                    <meta itemprop='description' content='Odontologia de Vanguarda'>
                <?php 
                }

            endif;

        ?>
        
        <meta property='og:url' content='<?php echo ( $post->ID != '' && is_home() == false ) ? get_permalink( $post->ID ) : bloginfo('url') ?>' />

        <?php



            if ( isset( $post->ID ) ): 

                $pType = get_post_type( $post->ID );

                if ($pType == 'cursos') :
                ?>
                    <meta itemprop="image" content="<?php echo get_field('imagem_sociais')['sizes']['face-card'] ?>">
                    <meta property="og:image" content="<?php echo get_field('imagem_sociais')['sizes']['face-card'] ?>"/>
                    <meta name='twitter:image' content='<?php echo get_field('imagem_sociais')['sizes']['twitter-card'] ?>'/>
                    <meta itemprop='image' content='<?php echo get_field('imagem_sociais')['sizes']['twitter-card'] ?>'/>
                <?php 
                elseif( $pType == 'page' && $post->post_name != 'blog' ) :
                ?>
                    <meta property='og:image' content='<?php echo bloginfo('template_url') ?>/img/ipo-<?php echo $_COOKIE['tipo_ipo'] ?>.png'/>
                    <meta name='twitter:image' content='<?php echo bloginfo('template_url') ?>/img/ipo-<?php echo $_COOKIE['tipo_ipo'] ?>-twitter.png'/>
                    <meta itemprop='image' content='<?php echo bloginfo('template_url') ?>/img/ipo-<?php echo $_COOKIE['tipo_ipo'] ?>-twitter.png'/>
                <?php 
                elseif( $pType == 'page' && $post->post_name == 'blog' ) :

                    $lPost = wp_get_recent_posts( array(
                        'post_type' => 'post', 
                        'numberposts' => '1'
                    ), 'OBJECT' );

                    ?>
                    <meta property='og:image' content='<?php echo get_field('imagem', $lPost[0]->ID)['sizes']['face-card'] ?>'/>
                    <meta name='twitter:image' content='<?php echo get_field('imagem', $lPost[0]->ID)['sizes']['twitter-card'] ?>'/>
                    <meta itemprop='image' content='<?php echo get_field('imagem', $lPost[0]->ID)['sizes']['twitter-card'] ?>'/>
                <?php 
                elseif( $pType == 'post' ) :

                    ?>
                    <meta property='og:image' content='<?php echo get_field('imagem')['sizes']['face-card'] ?>'/>
                    <meta name='twitter:image' content='<?php echo get_field('imagem')['sizes']['twitter-card'] ?>'/>
                    <meta itemprop='image' content='<?php echo get_field('imagem')['sizes']['twitter-card'] ?>'/>
                <?php 
                elseif( is_home() ) :
                ?>
                    <meta property='og:image' content='<?php echo bloginfo('template_url') ?>/img/ipo-clinica.png'/>
                    <meta name='twitter:image' content='<?php echo bloginfo('template_url') ?>/img/ipo-clinica-twitter.png'/>
                    <meta itemprop='image' content='<?php echo bloginfo('template_url') ?>/img/ipo-clinica-twitter.png'/>
                <?php 
                endif;

            endif;

        ?>

        <meta property='og:image:type' content="image/png">
        <meta property="og:image:width" content="800">
        <meta property="og:image:height" content="600">
        
        <!-- caso o tipo seja um "ARTICLE" -->
        <?php if ( $pType == 'post' ) : ?>

            <meta property="og:type" content="article">
            <meta property="article:author" content="IPO:PALMIERI">
            <meta property="article:section" content="Blog">
            <!-- <meta property="article:tag" content="Facebook, tags, og, open graph"> -->
            <?php 

                if (pll_current_language() == 'pt') :

                    $mss = array('Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set', 'Out', 'Nov', 'Dez');

                else :
                    
                    $mss = array('Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec');

                endif;


                $pTime = date('d,n,Y', strtotime($post->post_date_gmt));
                $pTime = explode(',', $pTime);
                $pTime = $pTime[0] . ' de ' . $mss[intval($pTime[1]) - 1] . ', ' . $pTime[2];

            ?>
            <meta property="article:published_time" content="<?php echo $pTime ?>">

        <?php else : ?>
            <meta property='og:type' content='website' />
        <?php endif; ?>

        <!-- TWITTER -->
        <meta name='twitter:card' content='summary'> <!-- photo (para imagens), player (para vídeos), Summary (para todo o resto) -->
        <meta name='twitter:url' content='<?php echo ( is_home() ) ? bloginfo("url") : get_permalink($post->ID); ?>'>
        <meta name='twitter:title' content='<?php echo ( $post->post_name != '' && is_home() == false ) ? get_the_title() : ""; ?>' /> <!-- título interessante para a página (ex.: Conhecendo a equipe) -->

        <!-- GOOGLE+ -->
        <!-- Atualize a tag html para incluir os atributos itemscope e itemtype. -->
        <meta itemprop='name' content='IPO:PALMIERI'> <!-- nome ou título interessante para a página (ex.: Conhecendo a equipe) -->


    </head>

    <body <?php echo ( is_home() ) ? 'class="hello"' : ''; ?> >
        <?php wp_path_to_js(); ?>
        <?php wp_lang_to_js(); ?>

        <!--[if lt IE 8]>

            <div class="alert">

                <p class="browserupgrade">Você está usando um navegador <strong>desatualizado</strong>. Por favor, <a href="http://browsehappy.com/">atualize seu browser</a> para melhorar sua experiência na internet.</p>
                <button type="button" class="close">×</button>

            </div>

        <![endif]-->


        <?php

        if ( isset($GLOBALS['usr']) )
        {

            $GLOBALS['usr']->user_pass = '';

            $my_query = get_post_by_type('materiais', 'ASC');

            $i = 0;

            $nInstrutores =  $my_query->post_count;

        }
        
        ?>

        <header class="site-header ani-04 <?php echo (is_page('area-do-aluno')) ? 'area-aluno' : ''; ?>">
            <div class="container-fluid">

                <div class="row">

                    <div id="logo" class="<?php echo (is_home()) ? 'col-md-5 col-md-offset-6 col-sm-10 col-sm-offset-1 col-xs-12 col-xs-offset-0' : 'col-md-2 col-sm-3 col-xs-4'; ?>">
                        <a <?php echo (!is_home()) ? 'href="' . get_bloginfo('url')  . '" onclick="gravaTipoSite()"' : ''; ?>>
                            <hgroup>
                                <h1>IPO:PALMIERI</h1>
                                <h2><?php l('Instituto de Plástica Oclusal', 'Oclusal Plastic Institute') ?></h2>
                            </hgroup>
                            <div id="svg-logo">

                                <!-- Generator: Adobe Illustrator 19.2.1, SVG Export Plug-In  -->
                                <svg version="1.1"
                                     xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/"
                                     x="0px" y="0px" width="289.7px" height="58.5px" viewBox="0 0 289.7 58.5" style="enable-background:new 0 0 289.7 58.5;"
                                     xml:space="preserve">
                                <style type="text/css">
                                    .st0{fill:#A7A9AC;}
                                    .st1{fill:#F7941E;}
                                </style>
                                <defs>
                                </defs>
                                <path class="st0" d="M276.9,32.7h-6.7c-0.5,0-0.7-0.4-0.9-0.9l-5.8-11l-0.5,0c-0.9,0-2.3-0.1-3.1-0.1v11c0,0.5-0.4,0.9-0.9,0.9h-5.7
                                    c-0.5,0-0.9-0.4-0.9-0.9V2.7c0-1.5,0.6-1.9,2-2.1c2-0.3,5.7-0.6,8.8-0.6c7.4,0,13.1,2.5,13.1,10.2v0.6c0,4.6-2.4,7.4-5.6,8.7
                                    l6.6,12.3c0.1,0.2,0.1,0.3,0.1,0.5C277.6,32.5,277.4,32.7,276.9,32.7z M269.1,10.2c0-2.7-2-3.9-5.7-3.9c-0.6,0-2.9,0.1-3.4,0.1v8.3
                                    c0.5,0,2.6,0.1,3.1,0.1c4.6,0,6-1.2,6-4.1V10.2z M8.1,32.7H0.9c-0.5,0-0.9-0.4-0.9-0.9V1.3c0-0.5,0.4-0.8,0.9-0.8h7.1
                                    c0.5,0,0.9,0.3,0.9,0.8v30.6C8.9,32.3,8.5,32.7,8.1,32.7z M26.4,22.2c-1,0-1.9-0.1-3.1-0.1v9.8c0,0.5-0.4,0.9-0.9,0.9h-7
                                    c-0.5,0-0.9-0.3-0.9-0.8V3.4c0-2.1,0.7-2.6,2.5-2.9C19.3,0.2,23.2,0,26.3,0c6.5,0,13.6,2.3,13.6,10.9v0.3
                                    C39.8,19.8,32.7,22.2,26.4,22.2z M31.1,10.9c0-2.5-1.7-3.5-4.7-3.5c-0.3,0-2.8,0-3.1,0v7.4c0.2,0,2.8,0,3.1,0c3,0,4.7-1.2,4.7-3.6
                                    V10.9z M56.6,33.1c-7.2,0-13.3-3.7-13.3-14.3v-4.5C43.2,3.7,49.4,0,56.6,0c7.2,0,13.3,3.7,13.3,14.3v4.5
                                    C69.9,29.4,63.8,33.1,56.6,33.1z M61,14.3c0-4.7-1.3-6.6-4.4-6.6c-3,0-4.4,1.9-4.4,6.6v4.5c0,4.7,1.3,6.5,4.4,6.5
                                    c3,0,4.4-1.9,4.4-6.5V14.3z M108.2,21.4c-1,0-2.4-0.1-3.5-0.1v10.6c0,0.5-0.4,0.9-0.9,0.9h-5.6c-0.5,0-0.9-0.3-0.9-0.8V2.7
                                    c0-1.5,0.6-1.9,2-2.1c2.2-0.3,5.7-0.6,8.8-0.6c6.6,0,13,2.3,13,10.5v0.4C121.2,19,114.7,21.4,108.2,21.4z M113.8,10.5
                                    c0-3.1-1.9-4.3-5.6-4.3c-0.6,0-3,0.1-3.5,0.1v8.9c0.5,0,3,0.1,3.5,0.1c3.9,0,5.6-1.4,5.6-4.4V10.5z M149,32.7h-5.7
                                    c-0.5,0-0.8-0.4-0.8-0.9V21.3H133v10.6c0,0.5-0.3,0.9-0.8,0.9h-5.7c-0.5,0-0.9-0.4-0.9-0.9V9.7c0-7.8,4.7-9.6,10.6-9.6h3.2
                                    c5.8,0,10.5,1.7,10.5,9.6v22.2C149.8,32.3,149.5,32.7,149,32.7z M142.5,9.7c0-2.4-0.7-3.1-3.1-3.1h-3.2c-2.4,0-3.1,0.7-3.1,3.1v5.5
                                    h9.4V9.7z M173.5,32.6c-1.4,0.3-4.8,0.6-7.1,0.6c-5.6,0-10.6-1.4-10.6-9.3V1.3c0-0.5,0.4-0.9,0.9-0.9h5.7c0.5,0,0.9,0.4,0.9,0.9
                                    v22.5c0,2.3,0.7,3,2.8,3h7.5c0.5,0,0.9,0.4,0.9,0.9v4C174.4,32.2,174.1,32.4,173.5,32.6z M207.1,32.7h-5.7c-0.4,0-0.7-0.4-0.7-0.9
                                    V13.7c0-0.3-0.1-0.3-0.2-0.3c-0.1,0-0.2,0.1-0.3,0.3l-3.9,7.2c-0.3,0.5-0.7,0.7-1.3,0.7h-3.5c-0.6,0-1-0.2-1.3-0.7l-3.9-7.2
                                    c-0.1-0.2-0.2-0.3-0.3-0.3c-0.1,0-0.2,0-0.2,0.3v18.1c0,0.5-0.3,0.9-0.7,0.9h-5.7c-0.3,0-0.7-0.1-0.7-0.6V1.9c0-0.9,0.7-1.5,1.6-1.5
                                    h4.1c0.9,0,1.5,0.4,1.9,1.2l6.7,12.4c0.2,0.3,0.3,0.6,0.5,0.6c0.2,0,0.3-0.2,0.5-0.6l6.7-12.4c0.4-0.7,1-1.2,1.9-1.2h4.1
                                    c0.9,0,1.6,0.6,1.6,1.5v30.2C207.8,32.6,207.4,32.7,207.1,32.7z M220.5,32.7h-5.8c-0.5,0-0.8-0.4-0.8-0.9V1.3c0-0.5,0.3-0.8,0.8-0.8
                                    h5.8c0.5,0,0.8,0.3,0.8,0.8v30.6C221.3,32.3,221,32.7,220.5,32.7z M246.3,32.6c-1.5,0.2-3.7,0.6-8.4,0.6c-5.6,0-10.6-1.4-10.6-9.3
                                    V9.3c0-7.9,5-9.3,10.6-9.3c4.7,0,6.9,0.3,8.4,0.6c0.6,0.1,0.9,0.3,0.9,0.9v4c0,0.5-0.4,0.9-0.9,0.9h-8.8c-2,0-2.8,0.7-2.8,3v4h11.3
                                    c0.5,0,0.9,0.4,0.9,0.9v4.1c0,0.5-0.4,0.9-0.9,0.9h-11.3v4.6c0,2.3,0.7,3,2.8,3h8.8c0.5,0,0.9,0.4,0.9,0.9v4
                                    C247.1,32.2,246.9,32.5,246.3,32.6z M288.8,32.7H283c-0.5,0-0.8-0.4-0.8-0.9V1.3c0-0.5,0.3-0.8,0.8-0.8h5.8c0.5,0,0.8,0.3,0.8,0.8
                                    v30.6C289.6,32.3,289.3,32.7,288.8,32.7z M289.7,40H0v-1.2h289.7V40z"/>
                                <path class="st1" d="M86.8,11.9h-7.6c-0.7,0-1.4-0.6-1.4-1.3V2.4c0-0.7,0.6-1.2,1.4-1.2h7.6c0.7,0,1.3,0.5,1.3,1.2v8.2
                                    C88.1,11.3,87.5,11.9,86.8,11.9 M86.8,32.2c0.7,0,1.3-0.6,1.3-1.3v-8.2c0-0.7-0.6-1.2-1.3-1.2h-7.6c-0.7,0-1.4,0.5-1.4,1.2v8.2
                                    c0,0.7,0.6,1.3,1.4,1.3H86.8"/>
                                <path class="st2" d="M155.5,58.4H154c-0.2,0-0.3-0.1-0.3-0.3v-4h-3.8v4c0,0.2-0.1,0.3-0.3,0.3h-1.5c-0.2,0-0.3-0.1-0.3-0.3v-7.7
                                    c0-2.5,1.4-3.2,3.5-3.2h1c2.1,0,3.5,0.7,3.5,3.2v7.7C155.8,58.2,155.7,58.4,155.5,58.4z M153.7,50.4c0-1.1-0.3-1.4-1.4-1.4h-1
                                    c-1.1,0-1.4,0.3-1.4,1.4v2h3.8V50.4z M2.5,58.4H1c-0.2,0-0.3-0.1-0.3-0.3V47.5c0-0.2,0.1-0.3,0.3-0.3h1.5c0.2,0,0.3,0.1,0.3,0.3
                                    v10.6C2.8,58.2,2.7,58.4,2.5,58.4z M15.1,58.4h-1.6c-0.2,0-0.3-0.1-0.3-0.3v-6.8c0-1.7-0.6-2.4-2.1-2.4c-0.8,0-1.6,0.1-2.1,0.1v9
                                    c0,0.2-0.1,0.3-0.3,0.3H7.3c-0.2,0-0.3-0.1-0.3-0.3v-9.9c0-0.6,0.2-0.7,0.6-0.8c0.8-0.1,2.5-0.3,3.3-0.3c2.8,0,4.4,1,4.4,4.2v6.8
                                    C15.4,58.2,15.2,58.4,15.1,58.4z M22.3,58.5c-1.1,0-1.9-0.1-2.7-0.3c-0.2,0-0.3-0.1-0.3-0.3v-1.1c0-0.2,0.1-0.3,0.3-0.3c0,0,0,0,0,0
                                    c0.6,0.1,2.1,0.2,2.7,0.2c1.3,0,1.7-0.5,1.7-1.4c0-0.6-0.3-0.9-1.3-1.5l-2-1.2C19.4,51.9,19,51,19,50c0-1.7,1-2.9,3.8-2.9
                                    c1,0,2.4,0.1,2.9,0.3c0.2,0,0.3,0.1,0.3,0.3v1.1c0,0.2-0.1,0.3-0.3,0.3c0,0,0,0,0,0c-1-0.1-2-0.2-3-0.2c-1.1,0-1.6,0.4-1.6,1.1
                                    c0,0.5,0.3,0.8,1.2,1.3l1.8,1c1.7,0.9,2.1,1.9,2.1,3.1C26.2,56.9,25.3,58.5,22.3,58.5z M36.9,49h-2.6v9.1c0,0.2-0.1,0.3-0.3,0.3
                                    h-1.5c-0.2,0-0.3-0.1-0.3-0.3V49h-2.6c-0.2,0-0.3-0.1-0.3-0.3v-1.2c0-0.2,0.1-0.3,0.3-0.3h7.4c0.2,0,0.3,0.1,0.3,0.3v1.2
                                    C37.2,48.9,37.1,49,36.9,49z M42.4,58.4h-1.5c-0.2,0-0.3-0.1-0.3-0.3V47.5c0-0.2,0.1-0.3,0.3-0.3h1.5c0.2,0,0.3,0.1,0.3,0.3v10.6
                                    C42.7,58.2,42.6,58.4,42.4,58.4z M53.8,49h-2.6v9.1c0,0.2-0.1,0.3-0.3,0.3h-1.5c-0.2,0-0.3-0.1-0.3-0.3V49h-2.6
                                    c-0.2,0-0.3-0.1-0.3-0.3v-1.2c0-0.2,0.1-0.3,0.3-0.3h7.4c0.2,0,0.3,0.1,0.3,0.3v1.2C54.1,48.9,54,49,53.8,49z M65,58.2
                                    c-0.5,0.1-2.4,0.3-3.3,0.3c-2.4,0-4.1-1-4.1-4.2v-6.8c0-0.2,0.1-0.3,0.3-0.3h1.5c0.2,0,0.3,0.1,0.3,0.3v6.8c0,1.7,0.4,2.5,2,2.5
                                    c0.6,0,1.5-0.1,2.1-0.1v-9.1c0-0.2,0.1-0.3,0.3-0.3h1.5c0.2,0,0.3,0.1,0.3,0.3v9.8C65.8,58,65.5,58.2,65,58.2z M76.9,49h-2.6v9.1
                                    c0,0.2-0.1,0.3-0.3,0.3h-1.5c-0.2,0-0.3-0.1-0.3-0.3V49h-2.6c-0.2,0-0.3-0.1-0.3-0.3v-1.2c0-0.2,0.1-0.3,0.3-0.3h7.4
                                    c0.2,0,0.3,0.1,0.3,0.3v1.2C77.2,48.9,77,49,76.9,49z M84.6,58.5c-2.5,0-4.3-1.4-4.3-4.7v-2c0-3.3,1.8-4.7,4.3-4.7
                                    c2.5,0,4.3,1.4,4.3,4.7v2C88.9,57.1,87.1,58.5,84.6,58.5z M86.8,51.8c0-2-0.7-2.9-2.2-2.9c-1.5,0-2.2,0.9-2.2,2.9v2
                                    c0,2,0.7,2.9,2.2,2.9c1.5,0,2.2-0.9,2.2-2.9V51.8z M101.8,58.5c-1.1,0-2.5-0.1-3-0.2c-0.3,0-0.4-0.2-0.4-0.5V47.8
                                    c0-0.3,0.1-0.4,0.4-0.5c0.5-0.1,1.9-0.2,3-0.2c3,0,4.7,1.6,4.7,4.6v2.2C106.6,56.9,104.9,58.5,101.8,58.5z M104.5,51.7
                                    c0-2.3-1.1-2.8-2.7-2.8c-0.6,0-0.9,0-1.3,0v7.8c0.3,0,0.7,0,1.3,0c1.5,0,2.7-0.6,2.7-2.8V51.7z M116.8,58.3
                                    c-0.5,0.1-1.1,0.2-2.9,0.2c-2,0-3.5-0.5-3.5-3.1v-5.2c0-2.6,1.5-3.1,3.5-3.1c1.8,0,2.4,0.1,2.9,0.2c0.2,0,0.3,0.1,0.3,0.3v1
                                    c0,0.2-0.1,0.3-0.3,0.3h-3.1c-0.9,0-1.2,0.3-1.2,1.3v1.6h4.1c0.2,0,0.3,0.1,0.3,0.3v1.1c0,0.2-0.1,0.3-0.3,0.3h-4.1v1.9
                                    c0,1,0.3,1.3,1.2,1.3h3.1c0.2,0,0.3,0.1,0.3,0.3v1C117.1,58.2,117,58.3,116.8,58.3z M130.2,54.2c-0.4,0-1,0-1.3-0.1v3.9
                                    c0,0.2-0.1,0.3-0.3,0.3h-1.5c-0.2,0-0.3-0.1-0.3-0.3V47.8c0-0.3,0.2-0.4,0.5-0.5c0.8-0.1,1.9-0.2,3-0.2c2.3,0,4.3,0.8,4.3,3.5v0.1
                                    C134.5,53.4,132.5,54.2,130.2,54.2z M132.5,50.6c0-1.3-0.8-1.7-2.3-1.7c-0.3,0-1.1,0-1.3,0.1v3.6c0.2,0,1.1,0,1.3,0
                                    c1.6,0,2.3-0.6,2.3-1.8V50.6z M144.2,58.3c-0.5,0.1-1.8,0.2-2.6,0.2c-2,0-3.5-0.5-3.5-3.1v-7.9c0-0.2,0.1-0.3,0.3-0.3h1.5
                                    c0.2,0,0.3,0.1,0.3,0.3v7.9c0,1,0.3,1.3,1.2,1.3h2.8c0.2,0,0.3,0.1,0.3,0.3v1C144.5,58.2,144.4,58.2,144.2,58.3z M162.8,58.5
                                    c-1.1,0-1.9-0.1-2.7-0.3c-0.2,0-0.3-0.1-0.3-0.3v-1.1c0-0.2,0.1-0.3,0.3-0.3c0,0,0,0,0,0c0.6,0.1,2.1,0.2,2.7,0.2
                                    c1.3,0,1.7-0.5,1.7-1.4c0-0.6-0.3-0.9-1.3-1.5l-2-1.2c-1.4-0.8-1.8-1.7-1.8-2.7c0-1.7,1-2.9,3.8-2.9c1,0,2.4,0.1,2.9,0.3
                                    c0.2,0,0.3,0.1,0.3,0.3v1.1c0,0.2-0.1,0.3-0.3,0.3c0,0,0,0,0,0c-1-0.1-2-0.2-3-0.2c-1.1,0-1.6,0.4-1.6,1.1c0,0.5,0.3,0.8,1.2,1.3
                                    l1.8,1c1.7,0.9,2.1,1.9,2.1,3.1C166.7,56.9,165.8,58.5,162.8,58.5z M177.4,49h-2.6v9.1c0,0.2-0.1,0.3-0.3,0.3H173
                                    c-0.2,0-0.3-0.1-0.3-0.3V49H170c-0.2,0-0.3-0.1-0.3-0.3v-1.2c0-0.2,0.1-0.3,0.3-0.3h7.4c0.2,0,0.3,0.1,0.3,0.3v1.2
                                    C177.7,48.9,177.6,49,177.4,49z M182.9,58.4h-1.5c-0.2,0-0.3-0.1-0.3-0.3V47.5c0-0.2,0.1-0.3,0.3-0.3h1.5c0.2,0,0.3,0.1,0.3,0.3
                                    v10.6C183.2,58.2,183.1,58.4,182.9,58.4z M193.8,58.3c-0.2,0.1-1.2,0.2-2.4,0.2c-1.8,0-4.3-0.9-4.3-4.6v-2.2c0-3.8,2.5-4.6,4.3-4.6
                                    c1.2,0,2.2,0.2,2.4,0.2c0.2,0.1,0.3,0.1,0.3,0.3v1c0,0.2-0.1,0.3-0.3,0.3c0,0,0,0,0,0c-0.5,0-1.6-0.1-2.4-0.1
                                    c-1.3,0-2.2,0.7-2.2,2.8v2.2c0,2.1,0.9,2.8,2.2,2.8c0.8,0,1.8-0.1,2.4-0.1c0,0,0,0,0,0c0.2,0,0.3,0.1,0.3,0.3v1
                                    C194.1,58.1,194,58.2,193.8,58.3z M205.5,58.4H204c-0.2,0-0.3-0.1-0.3-0.3v-4h-3.8v4c0,0.2-0.1,0.3-0.3,0.3h-1.5
                                    c-0.2,0-0.3-0.1-0.3-0.3v-7.7c0-2.5,1.4-3.2,3.5-3.2h1c2.1,0,3.5,0.7,3.5,3.2v7.7C205.8,58.2,205.6,58.4,205.5,58.4z M203.7,50.4
                                    c0-1.1-0.3-1.4-1.4-1.4h-1c-1.1,0-1.4,0.3-1.4,1.4v2h3.8V50.4z M219.6,58.5c-2.5,0-4.3-1.4-4.3-4.7v-2c0-3.3,1.8-4.7,4.3-4.7
                                    c2.5,0,4.3,1.4,4.3,4.7v2C223.9,57.1,222.1,58.5,219.6,58.5z M221.8,51.8c0-2-0.7-2.9-2.2-2.9c-1.5,0-2.2,0.9-2.2,2.9v2
                                    c0,2,0.7,2.9,2.2,2.9c1.5,0,2.2-0.9,2.2-2.9V51.8z M234.2,58.3c-0.2,0.1-1.2,0.2-2.4,0.2c-1.8,0-4.3-0.9-4.3-4.6v-2.2
                                    c0-3.8,2.5-4.6,4.3-4.6c1.2,0,2.2,0.2,2.4,0.2c0.2,0.1,0.3,0.1,0.3,0.3v1c0,0.2-0.1,0.3-0.3,0.3c0,0,0,0,0,0c-0.5,0-1.6-0.1-2.4-0.1
                                    c-1.3,0-2.2,0.7-2.2,2.8v2.2c0,2.1,0.9,2.8,2.2,2.8c0.8,0,1.8-0.1,2.4-0.1c0,0,0,0,0,0c0.2,0,0.3,0.1,0.3,0.3v1
                                    C234.5,58.1,234.4,58.2,234.2,58.3z M244.3,58.3c-0.5,0.1-1.8,0.2-2.6,0.2c-2,0-3.5-0.5-3.5-3.1v-7.9c0-0.2,0.1-0.3,0.3-0.3h1.5
                                    c0.2,0,0.3,0.1,0.3,0.3v7.9c0,1,0.3,1.3,1.2,1.3h2.8c0.2,0,0.3,0.1,0.3,0.3v1C244.6,58.2,244.5,58.2,244.3,58.3z M255.3,58.2
                                    c-0.5,0.1-2.4,0.3-3.3,0.3c-2.4,0-4.1-1-4.1-4.2v-6.8c0-0.2,0.1-0.3,0.3-0.3h1.5c0.2,0,0.3,0.1,0.3,0.3v6.8c0,1.7,0.4,2.5,2,2.5
                                    c0.6,0,1.5-0.1,2.1-0.1v-9.1c0-0.2,0.1-0.3,0.3-0.3h1.5c0.2,0,0.3,0.1,0.3,0.3v9.8C256.1,58,255.9,58.2,255.3,58.2z M263.1,58.5
                                    c-1.1,0-1.9-0.1-2.7-0.3c-0.2,0-0.3-0.1-0.3-0.3v-1.1c0-0.2,0.1-0.3,0.3-0.3c0,0,0,0,0,0c0.6,0.1,2.1,0.2,2.7,0.2
                                    c1.3,0,1.7-0.5,1.7-1.4c0-0.6-0.3-0.9-1.3-1.5l-2-1.2c-1.4-0.8-1.8-1.7-1.8-2.7c0-1.7,1-2.9,3.8-2.9c1,0,2.4,0.1,2.9,0.3
                                    c0.2,0,0.3,0.1,0.3,0.3v1.1c0,0.2-0.1,0.3-0.3,0.3c0,0,0,0,0,0c-1-0.1-2-0.2-3-0.2c-1.1,0-1.6,0.4-1.6,1.1c0,0.5,0.3,0.8,1.2,1.3
                                    l1.8,1c1.7,0.9,2.1,1.9,2.1,3.1C267.1,56.9,266.2,58.5,263.1,58.5z M278.5,58.4H277c-0.2,0-0.3-0.1-0.3-0.3v-4h-3.8v4
                                    c0,0.2-0.1,0.3-0.3,0.3h-1.5c-0.2,0-0.3-0.1-0.3-0.3v-7.7c0-2.5,1.4-3.2,3.5-3.2h1c2.1,0,3.5,0.7,3.5,3.2v7.7
                                    C278.8,58.2,278.7,58.4,278.5,58.4z M276.7,50.4c0-1.1-0.3-1.4-1.4-1.4h-1c-1.1,0-1.4,0.3-1.4,1.4v2h3.8V50.4z M289,58.3
                                    c-0.5,0.1-1.8,0.2-2.6,0.2c-2,0-3.5-0.5-3.5-3.1v-7.9c0-0.2,0.1-0.3,0.3-0.3h1.5c0.2,0,0.3,0.1,0.3,0.3v7.9c0,1,0.3,1.3,1.2,1.3h2.8
                                    c0.2,0,0.3,0.1,0.3,0.3v1C289.3,58.2,289.2,58.2,289,58.3z M149.2,46.1c-0.4,0-0.8-0.3-0.9-0.7c-0.1-0.5,0.1-1,0.6-1.2l4.2-1.2
                                    c0.5-0.1,1,0.1,1.2,0.6c0.1,0.5-0.1,1-0.6,1.2l-4.2,1.2C149.4,46.1,149.3,46.1,149.2,46.1z"/>
                                </svg>

                                
                            </div>
                        </a>
                    </div>

                        
                    <?php if (!is_home() && !is_page('area-do-aluno')): ?>


                        <div id="wrap-nav" class="col-md-10 col-sm-9">
                            <nav>
                                <ul id="versao-menu">
                                    <li>
                                        <a id="link-clinica" class="ani-04 <?php echo ($_COOKIE['tipo_ipo'] == 'escola') ? 'esconde' : ''?>" onclick="trocaMenuPara('escola')">
                                            <div id="wrap">
                                                <?php l('Clínica:IPO', 'Clinic:IPO') ?>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a id="link-escola" class="ani-04 <?php echo ($_COOKIE['tipo_ipo'] == 'clinica') ? 'esconde' : ''?>" onclick="trocaMenuPara('clinica')">
                                            <div id="wrap">
                                                <?php l('Escola:IPO', 'School:IPO') ?>
                                            </div>
                                        </a>
                                    </li>
                                </ul><ul id="links" class="lockd ani-06 menu-escola <?php echo ($_COOKIE['tipo_ipo'] != 'escola') ? 'hiddden' : 'showed'?>">
                                    <li class="ani-04">
                                        <a class="ani-04" onclick="gravaTipoSite('escola')" href="<?php bloginfo('url') ?>/<?php l('escola/a-escola', 'school/our-school') ?>">
                                            <div id="wrap">
                                                <?php l('A Escola', 'Our School') ?>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="ani-04">
                                        <a class="ani-04" onclick="gravaTipoSite('escola')" href="<?php bloginfo('url') ?>/<?php l('escola/cursos', 'school/courses') ?>">
                                            <div id="wrap">
                                                <?php l('Cursos', 'Our Courses') ?>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="ani-04">
                                        <a class="ani-04" onclick="gravaTipoSite('escola')" href="<?php bloginfo('url') ?>/<?php l('escola/instrutores', 'school/instructors') ?>">
                                            <div id="wrap">
                                                <?php l('Instrutores', 'Our Instuctors') ?>
                                            </div>
                                        </a>
                                    </li>

                                    <?php 

                                        $posts = get_post_by_type(NULL);
                                        $nPosts = count( $posts->posts );


                                        if ( $nPosts > 0 ):

                                        ?>
     
                                        <li class="ani-04">
                                            <a class="ani-04" onclick="gravaTipoSite('escola')" href="<?php bloginfo('url') ?>/<?php l('escola/blog', 'school/blog') ?>">
                                                <div id="wrap">
                                                    Blog
                                                </div>
                                            </a>
                                        </li>

                                        <?php 

                                        endif;

                                    ?>

                                    <li class="ani-04">
                                        <a class="ani-04" onclick="jivo_api.open();" href="javascript:void(0)">
                                            <div id="wrap">
                                                <?php l('Contato', 'Contact Us') ?>
                                            </div>
                                        </a>
                                    </li>
                                    <li id="area" class="ani-04">
                                        <a class="ani-04" onclick="gravaTipoSite('escola')" href="<?php bloginfo('url') ?>/<?php l('area-do-aluno', 'student-area') ?>">
                                            <div id="wrap">
                                                <?php l('Área do Aluno', 'Student Area') ?>
                                            </div>
                                        </a>
                                    </li>
                                </ul><ul id="links" class="lockd ani-06 menu-clinica <?php echo ($_COOKIE['tipo_ipo'] != 'clinica') ? 'hiddden' : 'showed'?>">
                                    <li class="ani-04">
                                        <a class="ani-04" onclick="gravaTipoSite('clinica')" href="<?php bloginfo('url') ?>/<?php l('clinica/a-clinica', 'clinic/our-clinic') ?>">
                                            <div id="wrap">
                                                <?php l('A Clínica', 'About Us') ?>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="ani-04">
                                        <a class="ani-04" onclick="gravaTipoSite('clinica')" href="<?php bloginfo('url') ?>/<?php l('clinica/tratamentos', 'clinic/treatments') ?>">
                                            <div id="wrap">
                                                <?php l('Tratamentos', 'Our Treatments') ?>
                                            </div>
                                        </a>
                                    </li>

                                    <?php

                                        $posts = get_post_by_type('dentistas');
                                        $nPosts = count( $posts->posts );


                                        if ( $nPosts > 0 ): ?>

                                            <li class="ani-04">
                                                <a class="ani-04" onclick="gravaTipoSite('clinica')" href="<?php bloginfo('url') ?>/<?php l('clinica/dentistas', 'clinic/dentists') ?>">
                                                    <div id="wrap">
                                                        <?php l('Dentistas', 'Our Dentists') ?>
                                                    </div>
                                                </a>
                                            </li>

                                        <?php endif; 
                                    ?>

                                    <?php 

                                        $posts = get_post_by_type(NULL);
                                        $nPosts = count( $posts->posts );


                                        if ( $nPosts > 0 ):

                                        ?>
                                    
                                        <li class="ani-04">
                                            <a class="ani-04" onclick="gravaTipoSite('escola')" href="<?php bloginfo('url') ?>/<?php l('escola/blog', 'school/blog') ?>">
                                                <div id="wrap">
                                                    Blog
                                                </div>
                                            </a>
                                        </li>

                                        <?php 

                                        endif;

                                    ?>

                                     <li class="ani-04">
                                        <a class="ani-04" onclick="jivo_api.open();" href="javascript:void(0)">
                                            <div id="wrap">
                                                <?php l('Contato', 'Contact Us') ?>
                                            </div>
                                        </a>
                                    </li>
                                </ul><ul id="idiomas">
                                    <?php pll_the_languages(); ?>
                                </ul>
                                <button id="bt-open-menu"></button>

                            </nav>
                        </div>

                    <?php elseif ( is_page('area-do-aluno')) : ?>

                        <div id="wrap-nav" class="col-md-10 col-sm-9">
                            <nav>
                                <div class="wrap-nome">
                                    <p>
                                        <?php echo $GLOBALS['uDisplay']; ?>
                                    </p>
                                </div><ul id="" >
                                    <li>
                                        <a id="logoff" class="ani-04" onclick="gravaTipoSite('escola')" href="<?php echo wp_logout_url( get_bloginfo('url') . '/escola/' );  ?>">
                                            Logoff
                                        </a>
                                    </li>
                                </ul>
                                <button id="bt-open-menu"></button>
                            </nav>
                        </div>

                    <?php endif ?>
                </div>

            </div>
            
        </header>   

        <?php if (is_home()): ?>

        <div class="clearfix"></div>
                 
         <?php endif ?>
