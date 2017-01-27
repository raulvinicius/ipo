<?php 

// CUSTOM POST

function codex_custom_init() {
	$labelsMateriais = array(
		'name' => _x('Materiais para Alunos', 'nome plural do tipo de post'),
		'singular_name' => _x('Material para Alunos', 'nome singular do tipo de post'),
		'add_new' => _x('Adicionar Material', 'materiais'),
		'add_new_item' => __('Adicionar Material'),
		'edit_item' => __('Editar Material'),
		'new_item' => __('Novo Material'),
		'all_items' => __('Todos os Materiais'),
		'view_item' => __('Ver Material'),
		'search_items' => __('Procurar por Material'),
		'not_found' =>  __('Nenhum Material foi encontrado'),
		'not_found_in_trash' => __('Não há Materiais na lixeira'), 
		'parent_item_colon' => '',
		'menu_name' => 'Materiais de Alunos'

	);
	$argsMateriais = array(
		'labels' => $labelsMateriais,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true, 
		'show_in_menu' => true, 
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'has_archive' => true, 
		'hierarchical' => false,
		'menu_position' => 5,
		'supports' => array( 'title' )
	); 
	register_post_type('materiais',$argsMateriais);





	$labelsTratamentos = array(
		'name' => _x('Tratamentos', 'nome plural do tipo de post'),
		'singular_name' => _x('Tratamento', 'nome singular do tipo de post'),
		'add_new' => _x('Adicionar Tratamento', 'tratamentos'),
		'add_new_item' => __('Adicionar Tratamento'),
		'edit_item' => __('Editar Tratamento'),
		'new_item' => __('Novo Tratamento'),
		'all_items' => __('Todos os Tratamentos'),
		'view_item' => __('Ver Tratamento'),
		'search_items' => __('Procurar por Tratamento'),
		'not_found' =>  __('Nenhum Tratamento foi encontrado'),
		'not_found_in_trash' => __('Não há Tratamentos na lixeira'), 
		'parent_item_colon' => '',
		'menu_name' => 'Tratamentos'

	);
	$argsTratamentos = array(
		'labels' => $labelsTratamentos,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true, 
		'show_in_menu' => true, 
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'has_archive' => true, 
		'hierarchical' => false,
		'menu_position' => 5,
		'supports' => array( 'title' )
	); 
	register_post_type('tratamentos',$argsTratamentos);





	$labelsCursos = array(
		'name' => _x('Cursos', 'nome plural do tipo de post'),
		'singular_name' => _x('Curso', 'nome singular do tipo de post'),
		'add_new' => _x('Adicionar Curso', 'cursos'),
		'add_new_item' => __('Adicionar Curso'),
		'edit_item' => __('Editar Curso'),
		'new_item' => __('Novo Curso'),
		'all_items' => __('Todos os Cursos'),
		'view_item' => __('Ver Curso'),
		'search_items' => __('Procurar por Curso'),
		'not_found' =>  __('Nenhum Curso foi encontrado'),
		'not_found_in_trash' => __('Não há Cursos na lixeira'), 
		'parent_item_colon' => '',
		'menu_name' => 'Cursos'

	);
	$argsCursos = array(
		'labels' => $labelsCursos,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true, 
		'show_in_menu' => true, 
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'has_archive' => true, 
		'hierarchical' => false,
		'menu_position' => 5,
		'supports' => array( 'title' )
	); 
	register_post_type('cursos',$argsCursos);




	$labelsDentistas = array(
		'name' => _x('Dentistas', 'nome plural do tipo de post'),
		'singular_name' => _x('Dentista', 'nome singular do tipo de post'),
		'add_new' => _x('Adicionar Dentista', 'dentistas'),
		'add_new_item' => __('Adicionar Dentista'),
		'edit_item' => __('Editar Dentista'),
		'new_item' => __('Novo Dentista'),
		'all_items' => __('Todos os Dentistas'),
		'view_item' => __('Ver Dentista'),
		'search_items' => __('Procurar por Dentista'),
		'not_found' =>  __('Nenhum Dentista foi encontrado'),
		'not_found_in_trash' => __('Não há Dentistas na lixeira'), 
		'parent_item_colon' => '',
		'menu_name' => 'Dentistas'

	);
	$argsDentistas = array(
		'labels' => $labelsDentistas,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true, 
		'show_in_menu' => true, 
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'has_archive' => true, 
		'hierarchical' => false,
		'menu_position' => 5,
		'supports' => array( 'title' )
	);
	register_post_type('dentistas',$argsDentistas);




	$labelsInstrutores = array(
		'name' => _x('Instrutores', 'nome plural do tipo de post'),
		'singular_name' => _x('Instrutor', 'nome singular do tipo de post'),
		'add_new' => _x('Adicionar Instrutor', 'instrutores'),
		'add_new_item' => __('Adicionar Instrutor'),
		'edit_item' => __('Editar Instrutor'),
		'new_item' => __('Novo Instrutor'),
		'all_items' => __('Todos os Instrutores'),
		'view_item' => __('Ver Instrutor'),
		'search_items' => __('Procurar por Instrutor'),
		'not_found' =>  __('Nenhum Instrutor foi encontrado'),
		'not_found_in_trash' => __('Não há Instrutores na lixeira'), 
		'parent_item_colon' => '',
		'menu_name' => 'Instrutores'

	);
	$argsInstrutores = array(
		'labels' => $labelsInstrutores,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true, 
		'show_in_menu' => true, 
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'has_archive' => true, 
		'hierarchical' => false,
		'menu_position' => 5,
		'supports' => array( 'title' )
	);
	register_post_type('instrutores',$argsInstrutores);




	$labelsAlunos = array(
		'name' => _x('Alunos', 'nome plural do tipo de post'),
		'singular_name' => _x('Aluno', 'nome singular do tipo de post'),
		'add_new' => _x('Adicionar Aluno', 'alunos'),
		'add_new_item' => __('Adicionar Aluno'),
		'edit_item' => __('Editar Aluno'),
		'new_item' => __('Novo Aluno'),
		'all_items' => __('Todos os Alunos'),
		'view_item' => __('Ver Aluno'),
		'search_items' => __('Procurar por Aluno'),
		'not_found' =>  __('Nenhum Aluno foi encontrado'),
		'not_found_in_trash' => __('Não há Alunos na lixeira'), 
		'parent_item_colon' => '',
		'menu_name' => 'Alunos'

	);
	$argsAlunos = array(
		'labels' => $labelsAlunos,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true, 
		'show_in_menu' => true, 
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'has_archive' => true, 
		'hierarchical' => false,
		'menu_position' => 5,
		'supports' => array( 'title' )
	);
	register_post_type('alunos',$argsAlunos);

}
add_action( 'init', 'codex_custom_init' );





//ESCONDE ITENS DO MENU DEPENDENDO DA ROLE
add_action( 'admin_init', 'my_remove_menu_pages' );
function my_remove_menu_pages() {

    global $user_ID;

	$user = get_user_by( 'ID', $user_ID );
	$roles = $user->roles;

    if ( in_array('instrutor', $roles) ) {
		remove_menu_page( 'edit.php' );
		remove_menu_page( 'edit.php?post_type=alunos' );
		remove_menu_page( 'edit.php?post_type=tratamentos' );
		remove_menu_page( 'edit.php?post_type=cursos' );
		remove_menu_page( 'edit.php?post_type=dentistas' );
		remove_menu_page( 'edit.php?post_type=instrutores' );
		remove_menu_page( 'edit-comments.php' );
		remove_menu_page( 'tools.php' );
    }
}





// CRIA NOVA USER ROLE
/*
$result = add_role( 'instrutor', __('Instrutor' ),
	array(

		'edit_posts' => true,
		'read' => true,
		'level_0' => true

	)
);
$result = add_role( 'aluno', __('Aluno' ),
	array(

		'edit_posts' => true,
		'read' => true,
		'level_0' => true

	)
);
*/


// CRIA NOVA CAPABILITY

/*
$role = get_role( 'instrutor' );

$role->add_cap( 'publish_posts' ); 
$role->add_cap( 'edit_posts' ); 
$role->add_cap( 'edit_published_posts' ); 
*/


// CRIA/ATUALIZA _LAST_LOGIN DO USUÁRIO
function user_last_login( $user_login, $user )
{
	if ( NULL == get_user_meta($user->ID, '_last_login', true ) )
	{
	    add_user_meta( $user->ID, '_last_login', date('Y-m-d H:i:s', time()) );
	}
	else
	{
	    update_user_meta( $user->ID, '_last_login', date('Y-m-d H:i:s', time()) );
	}

}

add_action( 'wp_login', 'user_last_login', 10, 2 );





// REDIRECIONA LOGIN DOS USUÁRIOS DO TIPO ALUNO E INSTRUTOR
function your_login_redirect( $redirect_to, $request, $user )
{
    // is there a user ?
    if ( is_array( $user->roles ) ) {
        // substitute your role(s):
        if ( in_array( 'instrutor', $user->roles ) ) {
            // pick where to redirect to, in the example: Posts page
            return admin_url() . 'edit.php?post_type=materiais';
        } else if ( in_array( 'aluno', $user->roles ) ) {
            // pick where to redirect to, in the example: Posts page
            return get_bloginfo('url') . '/area-do-aluno/';
        } else {
            return admin_url();
        }
    }
}
add_filter( 'login_redirect', 'your_login_redirect', 10, 3 );




// FILTRA MATERIAIS POR CURSO
/*
add_filter( 'parse_query','bs_event_table_filter' );
function bs_event_table_filter( $query ) {
  if( is_admin() AND $query->query['post_type'] == 'event' ) {
    $qv = &$query->query_vars;
    $qv['meta_query'] = array();


    if( !empty( $_GET['event_date'] ) ) {
      $start_time = strtotime( $_GET['event_date'] );
      $end_time = mktime( 0, 0, 0, date( 'n', $start_time ) + 1, date( 'j', $start_time ), date( 'Y', $start_time ) );
      $end_date = date( 'Y-m-d H:i:s', $end_time );
      $qv['meta_query'][] = array(
        'field' => '_bs_meta_event_date',
        'value' => array( $_GET['event_date'], $end_date ),
        'compare' => 'BETWEEN',
        'type' => 'DATETIME'
      );

    }

    if( !empty( $_GET['ticket_status'] ) ) {
      $qv['meta_query'][] = array(
        'field' => '_bs_meta_event_ticket_status',
        'value' => $_GET['ticket_status'],
        'compare' => '=',
        'type' => 'CHAR'
      );
    }

    if( !empty( $_GET['orderby'] ) AND $_GET['orderby'] == 'event_date' ) {
      $qv['orderby'] = 'meta_value';
      $qv['meta_key'] = '_bs_meta_event_date';
      $qv['order'] = strtoupper( $_GET['order'] );
    }

  }
}
*/





function my_acf_load_value(  $args, $field, $post_id )
{
    // modify the order
	var_dump($args);
	echo "<br>";
	echo "<br>";
	var_dump($post_id);
	echo "<br>";
	echo "<br>";
	var_dump($field);
}

// filter for every field
add_filter('acf/fields/user/query', 'my_acf_load_value', 10, 3);




// CUSTOM COLUMNS PARA OS MATERIAIS DE ALUNOS
//// INCLUI AS COLUNAS
add_filter('manage_materiais_posts_columns', 'bs_materiais_table_head');
function bs_materiais_table_head( $defaults ) {
    $defaults['curso']  = 'Curso';
    $defaults['autor']    = 'Autor';
    return $defaults;
}

add_action( 'manage_materiais_posts_custom_column', 'bs_materiais_table_content', 10, 2 );

//// MOSTRA OS CONTEÚDOS
function bs_materiais_table_content( $column_name, $post_id ) {
	global $post;
    if ($column_name == 'curso') {
	    $curso = get_field('curso', $post->ID);
	    echo $curso->post_title;
    }

    if ($column_name == 'autor') {
	    $autor = get_field('curso', $post->ID);
	    $autor = get_user_by('ID', $autor->post_author);
	    echo $autor->display_name;

    }

}

//// REORDENA AS COLUNAS
add_filter( 'manage_edit-materiais_sortable_columns', 'bs_materiais_table_sorting' );
function bs_materiais_table_sorting( $columns ) {
  $columns['curso'] = 'Curso';
  $columns['autor'] = 'Autor';
  return $columns;
}

add_filter( 'request', 'bs_curso_column_orderby' );
function bs_curso_column_orderby( $vars ) {
    if ( isset( $vars['orderby'] ) && 'curso' == $vars['orderby'] ) {
        $vars = array_merge( $vars, array(
            'meta_key' => 'curso',
            'orderby' => 'meta_value'
        ) );
    }

    return $vars;
}

add_filter( 'request', 'bs_autor_column_orderby' );
function bs_autor_column_orderby( $vars ) {
    if ( isset( $vars['orderby'] ) && 'autor' == $vars['orderby'] ) {
        $vars = array_merge( $vars, array(
            'meta_key' => 'autor',
            'orderby' => 'meta_value'
        ) );
    }

    return $vars;
}

//// ADICIONA UM FILTRO NA LISTA DE MATERIAIS
/*
add_action( 'restrict_manage_posts', 'bs_materiais_table_filtering' );
function bs_materiais_table_filtering() {

	$type = 'post';
	if ( isset($_GET['post_type']) ) {
		$type = $_GET['post_type'];
	}

	if ( $type == 'materiais' ) 
	{


				
		$values = array();
		$cursos = get_post_by_type('cursos');
		$cursos = $cursos->posts;
		foreach( $cursos as $value ) 
		{
			$values[] = $value->post_title;
		}
		
		?>
			<select name="curso">
		        <option value=""><?php _e('Filter By ', 'wose45436'); ?></option>
		        <?php
		            $current_v = isset($_GET['curso'])? $_GET['curso']:'';
		            foreach ($values as $label) {
		                printf
	                    (
	                        '<option value="%s"%s>%s</option>',
	                        $label,
	                        $label == $current_v? ' selected="selected"':'',
	                        $label
	                    );
	                }
		        ?>
	        </select>
        <?php


	}
}
*/



// CUSTOM IMAGE SIZE
if ( function_exists( 'add_image_size' ) ) 
{
	add_image_size( 'foto-instrutor', 257, 257, true );
	add_image_size( 'blog-g', 555, 440, true );
	add_image_size( 'blog-sm', 555, 205, true );
	add_image_size( 'blog-m', 458, 263, true );
	add_image_size( 'blog-p', 263, 184, true );
}

pll_register_string('Título formulário de inscrição', 'Inscrição para', 'Form' );

$meses = array('Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro');
$months = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');

function l( $pt, $en)
{
	if (pll_current_language() == 'pt') 
	{
		echo $pt;
	}
	else 
	{
		echo $en;
	}
}

function get_post_by_type($type, $order = 'DESC', $per_page = -1, $paged = NULL)
{
	if (!isset( $paged ) )
	{
		$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
	}

	$args = array( 'post_type' => $type, 'posts_per_page' => $per_page, 'paged' => $paged, 'order' => $order );
	return new WP_Query( $args );
}


// ALTERA O COMPORTAMENTO DO TITLE FIELD
function change_default_title( $title ){

    $screen = get_current_screen();

	// ALTERAR O PLACEHOLDER DO TITLE FIELD
    if ( 'tratamentos' == $screen->post_type )
    {
        $title = 'Nome do Tratamento';
    }

    if ( 'cursos' == $screen->post_type )
    {
        $title = 'Nome do Curso';
    }

    if ( 'instrutores' == $screen->post_type )
    {
        $title = 'Nome do Instrutor';
    }

    if ( 'materiais' == $screen->post_type )
    {
        $title = 'Título';
    }

    // ESCONTE O TITLE FIELD DE POST EDITS DO TIPO PÁGINA
	/*
    if ( 'page' == $screen->post_type )
    {
    ?>
	    <style class="euquero" type="text/css">
	    <!--
	    #post-body-content
	    {
	    	margin-bottom: 0;
	    }
	    #titlediv
	    {
	        display: none;
	    }
	    -->
	    </style>
    <?php
    }
	*/

    return $title;
}

add_filter( 'enter_title_here', 'change_default_title' );


function wp_path_to_js()
{
	echo "
	    <script class='segredo' type=\"text/javascript\">

	        templateUrl = '" . get_bloginfo('template_url') . "/';
	        blogUrl = '" . get_bloginfo('url') . "/';

	    </script>
	";
}

function wp_lang_to_js()
{
	echo "
	    <script class='segredo' type=\"text/javascript\">

	        lang = '" . pll_current_language() . "';

	    </script>
	";
}

function slugify($text)
{ 
  // replace non letter or digits by -
  $text = preg_replace('~[^\\pL\d]+~u', '-', $text);

  // trim
  $text = trim($text, '-');

  // transliterate
  $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);

  // lowercase
  $text = strtolower($text);

  // remove unwanted characters
  $text = preg_replace('~[^-\w]+~', '', $text);

  if (empty($text))
  {
    return 'n-a';
  }

  return $text;
}

function pluralize ($num, $plural = 's', $single = '')
{ 
    if ($num == 1) :
    	return $single; 
 	else :
 		return $plural; 
 	endif;
}


// ADICIONA URL ABSOLUTO NO AMBIENTE DE DESENVOLVIMENTO
function completaUrl ($urlAdicional = "")
{
	if($_SERVER['HTTP_HOST'] == "localhost")
	{
		echo get_bloginfo('url') . $urlAdicional;
	}
}

// RETORNA URL ABSOLUTO NO AMBIENTE DE DESENVOLVIMENTO
function get_completaUrl ($urlAdicional = "")
{
	if($_SERVER['HTTP_HOST'] == "localhost")
	{
		return get_bloginfo('url') . $urlAdicional;
	}
}

//SE HOUVER MAIS DE UM MÓDULO INCLUI O NÚMERO DO MÓDULO MONTAR O TEXTO DE DURAÇÃO O CURSO
function incluiNumModulo ($modulos, $i)
{
	if (count($modulos) > 1) 
	{
	    echo '<span id="modulo">' . ($i + 1) . 'º</span> - ';
	}
}

function enDay ($num)
{

	$ord = 'th';
	if( substr( $num, '-1') == '1')
	{
		$ord = 'st';
	}
	else if( substr( $num, '-1') == '2')
	{
		$ord = 'nd';
	}
	else if( substr( $num, '-1') == '3')
	{
		$ord = 'rd';
	}

	return $num . '<span>' . $ord . '</span>';

}
