<?php 

    if( 'POST' == $_SERVER['REQUEST_METHOD'] && !empty( $_POST['action'] ) &&  $_POST['action'] == "new_post" && $_POST['nm'] != "") {

        // Do some minor form validation to make sure there is content

        // Add the content of the form to $post as an array
        $new_post = array(
            'post_title' => wp_strip_all_tags( $_POST['nm'] ),
            'post_status'   => 'publish',           // Choose: publish, preview, future, draft, etc.
            'post_type' => 'alunos'  //'post',page' or use a custom post type if you want to
        );

        //save the new post
        $pid = wp_insert_post($new_post);

        //insert taxonomies
        if ($pid) {
            add_post_meta($pid, 'matricula', date("dmYHis"));
            add_post_meta($pid, '_matricula', 'field_581dca70c8429');

            add_post_meta($pid, 'nascimento', date("Ymd", strtotime($_POST['nscmnt']) ));
            add_post_meta($pid, '_nascimento', 'field_581140eb59ef3');

            add_post_meta($pid, 'nome_cracha', $_POST['nmcrch']);
            add_post_meta($pid, '_nome_cracha', 'field_581dcb1b176f5');

            add_post_meta($pid, 'sexo', $_POST['sx']);
            add_post_meta($pid, '_sexo', 'field_5811448559ef4');

            add_post_meta($pid, 'email', $_POST['ml']);
            add_post_meta($pid, '_email', 'field_581144cf59ef5');

/*
            add_post_meta($pid, 'senha', $_POST['snh']);
            add_post_meta($pid, '_senha', 'field_');
*/

            add_post_meta($pid, 'cpf', $_POST['cpf']);
            add_post_meta($pid, '_cpf', 'field_5811454359ef6');

            add_post_meta($pid, 'endereco', $_POST['ndrc']);
            add_post_meta($pid, '_endereco', 'field_581145df59ef9');

            add_post_meta($pid, 'bairro', $_POST['brr']);
            add_post_meta($pid, '_bairro', 'field_5811462f59efa');

            add_post_meta($pid, 'cidade', $_POST['cdd']);
            add_post_meta($pid, '_cidade', 'field_5811464759efb');

            add_post_meta($pid, 'estado', $_POST['std']);
            add_post_meta($pid, '_estado', 'field_581146e259efd');

            add_post_meta($pid, 'cep', $_POST['cp']);
            add_post_meta($pid, '_cep', 'field_581146ac59efc');

            add_post_meta($pid, 'endereco_comercial', $_POST['ndrccmrcl']);
            add_post_meta($pid, '_endereco_comercial', 'field_581dcc58176f6');

            add_post_meta($pid, 'bairro_comercial', $_POST['brrcmrcl']);
            add_post_meta($pid, '_bairro_comercial', 'field_581dcc6d176f7');

            add_post_meta($pid, 'cidade_comercial', $_POST['cddcmrcl']);
            add_post_meta($pid, '_cidade_comercial', 'field_581dcc7b176f8');

            add_post_meta($pid, 'estado_comercial', $_POST['stdcmrcl']);
            add_post_meta($pid, '_estado_comercial', 'field_581dcc94176fa');

            add_post_meta($pid, 'cep_comercial', $_POST['cpcmrcl']);
            add_post_meta($pid, '_cep_comercial', 'field_581dcc87176f9');

            add_post_meta($pid, 'telefone', $_POST['tlfn']);
            add_post_meta($pid, '_telefone', 'field_5811476a59efe');

            add_post_meta($pid, 'celular', $_POST['cllr']);
            add_post_meta($pid, '_celular', 'field_581147ab59eff');

            add_post_meta($pid, 'telefone_comercial', $_POST['tlfncmrcl']);
            add_post_meta($pid, '_telefone_comercial', 'field_581dcca4176fb');

            add_post_meta($pid, 'fax', $_POST['fx']);
            add_post_meta($pid, '_fax', 'field_581dccb8176fc');

            add_post_meta($pid, 'website', $_POST['wbst']);
            add_post_meta($pid, '_website', 'field_581dcd67fea2d');

            add_post_meta($pid, 'cursos', 1);
            add_post_meta($pid, '_cursos', 'field_58114b45ee1d2');

            add_post_meta($pid, 'cursos_0_curso', $_POST['crs']);
            add_post_meta($pid, '_cursos_0_curso', 'field_58114b5cee1d3');

            add_post_meta($pid, 'universidade', $_POST['nvrsdd']);
            add_post_meta($pid, '_universidade', 'field_581dcdccfea2e');

            add_post_meta($pid, 'cidade_universidade', $_POST['cddnvrsdd']);
            add_post_meta($pid, '_cidade_universidade', 'field_581dcddffea2f');

            add_post_meta($pid, 'pais_universidade', $_POST['psnvrsdd']);
            add_post_meta($pid, '_pais_universidade', 'field_581dcdfafea30');

            add_post_meta($pid, 'tempo_formacao', $_POST['tmpfrmc']);
            add_post_meta($pid, '_tempo_formacao', 'field_581dce0cfea31');

            add_post_meta($pid, 'nivel_formacao', $_POST['nvlfrmc']);
            add_post_meta($pid, '_nivel_formacao', 'field_581dce1dfea32');

            add_post_meta($pid, 'area_formacao', $_POST['rfrmc']);
            add_post_meta($pid, '_area_formacao', 'field_581dce80fea33');

        }
        echo "sucesso";

    }
    else
    {
        die('Método não reconhecido');
    }