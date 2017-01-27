<?php 

    if( 'POST' == $_SERVER['REQUEST_METHOD'] && !empty( $_POST['action'] ) &&  $_POST['action'] == "new_post" && $_POST['nm'] != "") {

        // Do some minor form validation to make sure there is content

        // Add the content of the form to $post as an array
        $userdata = array(
            'user_login'  =>  $_POST['srnm'],
            'user_pass'   =>  $_POST['snh'],
            'user_email'  =>  $_POST['ml'],
            'display_name'  =>  $_POST['nmcrch'],
            'nickname'  =>  $_POST['nmcrch'],
            'role'  =>  'aluno'
        );

        $user_id = wp_insert_user( $userdata ) ;

        //On success
        if ( ! is_wp_error( $user_id ) ) {
            $matricula = date("dmYHis");

            add_user_meta($user_id, 'email_confirmado', 0);
            add_user_meta($user_id, '_email_confirmado', 'field_583e88ddbb824');

            add_user_meta($user_id, 'nome_completo', $_POST['nm']);
            add_user_meta($user_id, '_nome_completo', 'field_583e8697e771c');

            add_user_meta($user_id, 'matricula', $matricula);
            add_user_meta($user_id, '_matricula', 'field_581dca70c8429');

            add_user_meta($user_id, 'nascimento', date("Ymd", strtotime($_POST['nscmnt']) ));
            add_user_meta($user_id, '_nascimento', 'field_581140eb59ef3');

            add_user_meta($user_id, 'sexo', $_POST['sx']);
            add_user_meta($user_id, '_sexo', 'field_5811448559ef4');

            add_user_meta($user_id, 'cpf', $_POST['cpf']);
            add_user_meta($user_id, '_cpf', 'field_5811454359ef6');

            add_user_meta($user_id, 'endereco', $_POST['ndrc']);
            add_user_meta($user_id, '_endereco', 'field_581145df59ef9');

            add_user_meta($user_id, 'bairro', $_POST['brr']);
            add_user_meta($user_id, '_bairro', 'field_5811462f59efa');

            add_user_meta($user_id, 'cidade', $_POST['cdd']);
            add_user_meta($user_id, '_cidade', 'field_5811464759efb');

            add_user_meta($user_id, 'estado', $_POST['std']);
            add_user_meta($user_id, '_estado', 'field_581146e259efd');

            add_user_meta($user_id, 'cep', $_POST['cp']);
            add_user_meta($user_id, '_cep', 'field_581146ac59efc');

            add_user_meta($user_id, 'endereco_comercial', $_POST['ndrccmrcl']);
            add_user_meta($user_id, '_endereco_comercial', 'field_581dcc58176f6');

            add_user_meta($user_id, 'bairro_comercial', $_POST['brrcmrcl']);
            add_user_meta($user_id, '_bairro_comercial', 'field_581dcc6d176f7');

            add_user_meta($user_id, 'cidade_comercial', $_POST['cddcmrcl']);
            add_user_meta($user_id, '_cidade_comercial', 'field_581dcc7b176f8');

            add_user_meta($user_id, 'estado_comercial', $_POST['stdcmrcl']);
            add_user_meta($user_id, '_estado_comercial', 'field_581dcc94176fa');

            add_user_meta($user_id, 'cep_comercial', $_POST['cpcmrcl']);
            add_user_meta($user_id, '_cep_comercial', 'field_581dcc87176f9');

            add_user_meta($user_id, 'telefone', $_POST['tlfn']);
            add_user_meta($user_id, '_telefone', 'field_5811476a59efe');

            add_user_meta($user_id, 'celular', $_POST['cllr']);
            add_user_meta($user_id, '_celular', 'field_581147ab59eff');

            add_user_meta($user_id, 'telefone_comercial', $_POST['tlfncmrcl']);
            add_user_meta($user_id, '_telefone_comercial', 'field_581dcca4176fb');

            add_user_meta($user_id, 'fax', $_POST['fx']);
            add_user_meta($user_id, '_fax', 'field_581dccb8176fc');

            add_user_meta($user_id, 'website', $_POST['wbst']);
            add_user_meta($user_id, '_website', 'field_581dcd67fea2d');

            add_user_meta($user_id, 'cursos', 1);
            add_user_meta($user_id, '_cursos', 'field_58114b45ee1d2');

            add_user_meta($user_id, 'cursos_0_curso', $_POST['crs']);
            add_user_meta($user_id, '_cursos_0_curso', 'field_58114b5cee1d3');

            add_user_meta($user_id, 'universidade', $_POST['nvrsdd']);
            add_user_meta($user_id, '_universidade', 'field_581dcdccfea2e');

            add_user_meta($user_id, 'cidade_universidade', $_POST['cddnvrsdd']);
            add_user_meta($user_id, '_cidade_universidade', 'field_581dcddffea2f');

            add_user_meta($user_id, 'pais_universidade', $_POST['psnvrsdd']);
            add_user_meta($user_id, '_pais_universidade', 'field_581dcdfafea30');

            add_user_meta($user_id, 'tempo_formacao', $_POST['tmpfrmc']);
            add_user_meta($user_id, '_tempo_formacao', 'field_581dce0cfea31');

            add_user_meta($user_id, 'nivel_formacao', $_POST['nvlfrmc']);
            add_user_meta($user_id, '_nivel_formacao', 'field_581dce1dfea32');

            add_user_meta($user_id, 'area_formacao', $_POST['rfrmc']);
            add_user_meta($user_id, '_area_formacao', 'field_581dce80fea33');



            $email = $_POST['ml'];
            $nome_completo = wp_strip_all_tags( $_POST['nm'] );
            $nick = explode( " ", $nome_completo, 2 );
            $nick = $nick[0];
            $nascimento = $_POST['nscmnt'];
            $sexo = $_POST['sx'];
            $cpf = $_POST['cpf'];
            $endereco = $_POST['ndrc'];
            $bairro = $_POST['brr'];
            $cidade = $_POST['cdd'];
            $estado = $_POST['std'];
            $cep = $_POST['cp'];
            $endereco_comercial = $_POST['ndrccmrcl'];
            $bairro_comercial = $_POST['brrcmrcl'];
            $cidade_comercial = $_POST['cddcmrcl'];
            $estado_comercial = $_POST['stdcmrcl'];
            $cep_comercial = $_POST['cpcmrcl'];
            $telefone = $_POST['tlfn'];
            $celular = $_POST['cllr'];
            $telefone_comercial = $_POST['tlfncmrcl'];
            $fax = $_POST['fx'];
            $website = $_POST['wbst'];
            $cidade_universidade = $_POST['cddnvrsdd'];
            $pais_universidade = $_POST['psnvrsdd'];
            $tempo_formacao = $_POST['tmpfrmc'];
            $nivel_formacao = $_POST['nvlfrmc'];
            $area_formacao = $_POST['rfrmc'];
            $idCurso = $_POST['crs'];
            $curso = get_the_title($idCurso);


            $url = get_bloginfo('url');
            $tUrl = get_bloginfo('template_url');

            $nomeEmpresa = "IPO";
            $emailEmpresa = "plasticaoclusal@gmail.com";
            // $emailEmpresa = "raul@humanostud.io";




            $msgParaAdmin ="
            <!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Strict//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd\">
            <div style='width: 100%; b: #fffbce; padding: 50px 0;'>
                <table style='background: white; width: 460px; border-radius: 4px; margin: 0 auto; border: 15px solid #121217; border-spacing: 0'>
                    <tr style='background: #121217; margin: 0; padding: 0'>
                        <td  style='font-family:Arial, sans; height: 110px; text-align: center;'>
                            <img src='$tUrl/img/ipo-logo-palmieri-email.png' style='margin: 20px 0 30px'>
                        </td>
                    </tr>
                    <tr>
                        <td  style='font-family:Arial, sans; padding: 0 15px 35px'>
                            <div style='width: 90%; padding: 1% 5%; margin-top: 20px'>
                                <p>
                                    Um novo aluno se cadastrou no curso: 
                                    <span style='display: block; color: #f7931e; font-weight: bold; font-size: 22px; text-transform: uppercase; margin-top: 5px; margin-bottom: 10px;'>$curso</span>
                                </p>
                                <br>
                                <p><b><span style='display: inline-block'>DADOS DO ALUNO</span></b></p>
                                <p style='border-bottom: 1px dotted #ccc; padding: 10px 0 20px'><b style='color: #ccc'><span style='width: 100px; display: inline-block'>Nome:</span> </b>$nome_completo</p>
                                <p style='border-bottom: 1px dotted #ccc; padding: 10px 0 20px'><b style='color: #ccc'><span style='width: 100px; display: inline-block'>E-mail:</span> </b>$email</p>
                                <p style='border-bottom: 1px dotted #ccc; padding: 10px 0 20px'><b style='color: #ccc'><span style='width: 100px; display: inline-block'>Matr&iacute;cula:</span> </b>$matricula</p>
                                <p style='border-bottom: 1px dotted #ccc; padding: 10px 0 20px'><b style='color: #ccc'><span style='width: 100px; display: inline-block'>Data de Nascimento:</span> </b>$nascimento</p>
                                <p style='border-bottom: 1px dotted #ccc; padding: 10px 0 20px'><b style='color: #ccc'><span style='width: 100px; display: inline-block'>Sexo:</span> </b>$sexo</p>
                                <p style='border-bottom: 1px dotted #ccc; padding: 10px 0 20px'><b style='color: #ccc'><span style='width: 100px; display: inline-block'>CPF:</span> </b>$cpf</p>
                                <p style='border-bottom: 1px dotted #ccc; padding: 10px 0 20px'><b style='color: #ccc'><span style='width: 100px; display: inline-block'>Telefone:</span> </b>$telefone</p>
                                <p style='border-bottom: 1px dotted #ccc; padding: 10px 0 20px'><b style='color: #ccc'><span style='width: 100px; display: inline-block'>Celular:</span> </b>$celular</p>
                                <p style='border-bottom: 1px dotted #ccc; padding: 10px 0 20px'><b style='color: #ccc'><span style='width: 100px; display: inline-block'>Endere&ccedil;o:</span> </b>$endereco, $bairro, $cidade-$estado, CEP: $cep</p>
                                <p style='border-bottom: 1px dotted #ccc; padding: 10px 0 20px'><b style='color: #ccc'><span style='width: 100px; display: inline-block'>Endere&ccedil;o comercial:</span> </b>$endereco_comercial, $bairro_comercial, $cidade_comercial-$estado_comercial, CEP: $cep_comercial</p>
                                <p style='border-bottom: 1px dotted #ccc; padding: 10px 0 20px'><b style='color: #ccc'><span style='width: 100px; display: inline-block'>Telefone comercial:</span> </b>$telefone_comercial</p>
                                <p style='border-bottom: 1px dotted #ccc; padding: 10px 0 20px'><b style='color: #ccc'><span style='width: 100px; display: inline-block'>Celular comercial:</span> </b>$fax</p>
                                <p style='border-bottom: 1px dotted #ccc; padding: 10px 0 20px'><b style='color: #ccc'><span style='width: 100px; display: inline-block'>Website:</span> </b>$website</p>
                                <p style='border-bottom: 1px dotted #ccc; padding: 10px 0 20px'><b style='color: #ccc'><span style='width: 100px; display: inline-block'>Universidade:</span> </b>$universidade</p>
                                <p style='border-bottom: 1px dotted #ccc; padding: 10px 0 20px'><b style='color: #ccc'><span style='width: 100px; display: inline-block'>Cidade:</span> </b>$cidade_universidade</p>
                                <p style='border-bottom: 1px dotted #ccc; padding: 10px 0 20px'><b style='color: #ccc'><span style='width: 100px; display: inline-block'>Pa&iacute;s:</span> </b>$pais_universidade</p>
                                <p style='border-bottom: 1px dotted #ccc; padding: 10px 0 20px'><b style='color: #ccc'><span style='width: 100px; display: inline-block'>Tempo de forma&ccedil;&atilde;o:</span> </b>$tempo_formacao</p>
                                <p style='border-bottom: 1px dotted #ccc; padding: 10px 0 20px'><b style='color: #ccc'><span style='width: 100px; display: inline-block'>N&iacute;vel de forma&ccedil;&atilde;o:</span> </b>$nivel_formacao</p>
                                <p style='border-bottom: 1px dotted #ccc; padding: 10px 0 20px'><b style='color: #ccc'><span style='width: 100px; display: inline-block'>&Aacute;rea:</span> </b>$area_formacao</p>
                                <br>
                                <p style='font-size: 14px; line-height: 1.4'><i>Essas informa&ccedil;&otilde;es tamb&eacute;m est&atilde;o dispon&iacute;veis no <b>Painel Administrativo</b> do site.</i></p>
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
            ";


            $msgParaUsuario  = "
            <!DOCTYPE html PUBLIC \'-//W3C//DTD XHTML 1.0 Strict//EN\' \'http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd\'>
            <div style='width: 100%; padding: 50px 0'>
                <table style='background: white; width: 460px; border-radius: 4px; margin: 0 auto; border: 5px solid #121217; border-bottom-width: 20px; border-left-width: 0; border-right-width: 0; border-spacing: 0'>
                    <tr style='background: #121217; margin: 0; padding: 0'>
                        <td  style='font-family:Arial, sans; height: 110px; text-align: center;'>
                            <img src='$tUrl/img/ipo-logo-palmieri-email.png' style='margin: 20px 0 30px'>
                        </td>
                    </tr>
                    <tr>
                        <td  style='font-family:Arial, sans; padding: 0 15px 15px'>
                            <div style='width: 90%; padding: 1% 5%; margin-top: 30px'>
                                <p style='font-size:20px; margin-bottom: 10px; color: #666; line-height: 24px'><span style='color: #f7931e; font-size: 34px;'>Oi $nick!</span><br/><br/>
                                    Primeiramente, obrigado por sua inscri&ccedil;&atilde;o no $curso.<br>
                                    <br>
                                    Clique o link abaixo para finalizar seu registro e ter acesso &agrave; &aacute;rea do aluno.<br>
                                    <br>
                                    <a style='text-decoration: none; color: white; background: #f7931e; padding: 20px; display: inline-block; text-transform: uppercase; font-size: 14px; font-weight: bold;' href='$url/area-do-aluno/confirma?i=$user_id&i2=$idCurso'>Confirmar meu cadastro</a>
                                    <br>
                                    <br>
                                    Abra&ccedil;o!<br>
                                </p>
                                <p style='margin-top: 50px; font-style: italic; color:#999; font-size:11px; font-family: Arial'>Observa&ccedil;&atilde;o: N&atilde;o &eacute; necess&aacute;rio responder este e-mail.</p>
                            </div>
                        </td>
                    </tr>
                </table>
            </div>  ";

            $headerParaUsuario = "MIME-Version: 1.1\r\n";
            $headerParaUsuario .= "Content-type: text/html; charset=iso-8859-1\r\n";
            $headerParaUsuario .= "From: $emailEmpresa\r\n"; // remetente
            $headerParaUsuario .= "Return-Path: $emailEmpresa\r\n"; // return-path
            
            $headerParaEmpresa = "MIME-Version: 1.0\r\n";
            $headerParaEmpresa .= "Content-type: text/html; charset=iso-8859-1\r\n";
            $headerParaEmpresa .= "From: $email\n";
            $headerParaEmpresa .= "Return-Path: $emailEmpresa\r\n"; // return-path

            $assuntoEmpresa = "Novo cadastro - " . $curso;

            mail($emailEmpresa,utf8_decode($assuntoEmpresa),utf8_decode($msgParaAdmin),$headerParaEmpresa) or die("erro");
            mail($email,utf8_decode("IPO PALMIERI - Confirmação de e-mail"),utf8_decode($msgParaUsuario),$headerParaUsuario) or die("erro");

        }
        echo "sucesso";

    }
    else
    {
        die('Método não reconhecido');
    }