<?php 

    if( 'POST' == $_SERVER['REQUEST_METHOD'] && $_POST['idu'] != "") 
    {

        if($_POST['email'] == 'ok')
        {

            update_user_meta($_POST['idu'], 'email_confirmado', 1);

            $usr = get_user_by('ID', $_POST['idu']);

            $email = $usr->user_email;
            $nome_completo = wp_strip_all_tags( $usr->display_name );
            $nick = explode( " ", $nome_completo, 2 );
            $nick = $nick[0];
            $telefone = get_field('telefone', 'user_' . $_POST['idu']);
            $celular = get_field('celular', 'user_' . $_POST['idu']);
            $idCurso = $_POST['crs'];
            $curso = get_the_title($idCurso);


            $url = get_bloginfo('url');
            $tUrl = get_bloginfo('template_url');

            $nomeEmpresa = "IPO";
            // $emailEmpresa = "plasticaoclusal@gmail.com";
            $emailEmpresa = "raul@humanostud.io";




            $msgParaEmpresa ="
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
                                    <b style='font-size: 24px'>$nome_completo</b>
                                    <br>confirmou o cadastro. 
                                    <br>
                                    <br>
                                    &Éacute; hora de entrar em contato para combinar os detalhes de pagamento.
                                </p>
                                <br>
                                <p><b><span style='display: inline-block'>DADOS DE CONTATO</span></b></p>
                                <p style='border-bottom: 1px dotted #ccc; padding: 10px 0 20px'><b style='color: #ccc'><span style='width: 100px; display: inline-block'>E-mail:</span> </b>$email</p>
                                <p style='border-bottom: 1px dotted #ccc; padding: 10px 0 20px'><b style='color: #ccc'><span style='width: 100px; display: inline-block'>Telefone:</span> </b>$telefone</p>
                                <p style='border-bottom: 1px dotted #ccc; padding: 10px 0 20px'><b style='color: #ccc'><span style='width: 100px; display: inline-block'>Celular:</span> </b>$celular</p>
                                <br>
                                <p style='font-size: 14px; line-height: 1.4'><i>Essas informa&ccedil;&otilde;es tamb&eacute;m est&atilde;o dispon&iacute;veis no <b>Painel Administrativo</b> do site.</i></p>
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
            ";


            $msgParaAluno  = "
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
                                <p style='font-size:20px; margin-bottom: 10px; color: #666; line-height: 24px'><span style='color: #f7931e; font-size: 34px;'>Tudo pronto $nick!</span><br/><br/>
                                    Sua inscri&ccedil;&atilde;o est&aacute; completa. 
                                    <br>
                                    <br>
                                    Entraremos em contato para combinar os detalhes de pagamento.<br>
                                    <br>
                                    Abra&ccedil;o!<br>
                                </p>
                                <p style='margin-top: 50px; font-style: italic; color:#999; font-size:11px; font-family: Arial'>Observa&ccedil;&atilde;o: N&atilde;o &eacute; necess&aacute;rio responder este e-mail.</p>
                            </div>
                        </td>
                    </tr>
                </table>
            </div> 
            ";

            $headerParaUsuario = "MIME-Version: 1.1\r\n";
            $headerParaUsuario .= "Content-type: text/html; charset=iso-8859-1\r\n";
            $headerParaUsuario .= "From: $emailEmpresa\r\n"; // remetente
            $headerParaUsuario .= "Return-Path: $emailEmpresa\r\n"; // return-path
            
            $headerParaEmpresa = "MIME-Version: 1.0\r\n";
            $headerParaEmpresa .= "Content-type: text/html; charset=iso-8859-1\r\n";
            $headerParaEmpresa .= "From: $email\n";
            $headerParaEmpresa .= "Return-Path: $emailEmpresa\r\n"; // return-path

            $assuntoEmpresa = "Inscrição confirmada - " . $curso;

            mail($emailEmpresa,utf8_decode($assuntoEmpresa),utf8_decode($msgParaEmpresa),$headerParaEmpresa) or die("Falha ao enviar e-mail para a empresa");
            mail($email,utf8_decode("IPO PALMIERI - Inscrição completa"),utf8_decode($msgParaAluno),$headerParaUsuario) or die("Falha ao enviar e-mail para o aluno");


            echo "sucesso";
        }

        

    }
    else
    {
        die('Método não reconhecido');
    }