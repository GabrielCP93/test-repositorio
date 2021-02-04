<?php
#test de datos para php
    /*Lista de Variables:
        variable1:Razón Social
        variable2:Registro Patronal
        variable3:Número de Folio
        variable4:Número de lote
        variable5:RFC del patrón
        variable6:Fecha y hora de recepción del lote
        variable7:Serial del certificado
        variable8:Huella digital
        variable9:Sello Digital
    */
    if(mysql_connect("localhost","root","","enomina")){
        $valor = TRUE;
        $sql = "SELECT * FROM imssMovimientos WHERE archivo = ANY(SELECT archivo FROM imssMovimientosDocumentos WHERE url like '%_1.pdf') AND idRelLab = '55523'";
        mysql_connect("localhost","root","");
        mysql_select_db("enomina");
        $rsp = mysql_query($sql);
        $cadena="";
        while($fila = mysql_fetch_array($rsp)){
            $rSocial = $fila['razonSocial'];
            $regPatr = $fila['registroPatronal'];
            $folio = $fila['folio'];
            $lote = $fila['lote'];
            $rfc =$fila['rfc'];
            $feLote = $fila['fechaLote'];
            $seCerti = $fila['serialCertificado'];
            $hueDigi = $fila['huellaDigital'];
            $seDigi = $fila['selloDigital'];
            $cadena .='<tr><td>'.$rSocial.'</td><td>'.$regPatr.'</td><td>'.$folio.'</td><td>'.$lote.'</td><td>'.$rfc.'</td><td>'.$feLote.'</td></tr>';
        }
        formato(TRUE,$rSocial,$regPatr,$folio,$lote,$rfc,$feLote,$seCerti,$hueDigi,$seDigi,$cadena);
    }
    else{
        $valor = FALSE;
    }
    function formato($status,$variable1,$variable2,$variable3,$variable4,$variable5,$variable6,$variable7,$variable8,$variable9,$cadena){
        require_once('C:\xampp\htdocs\GeneradorPdf\test-repositorio\pdf\mpdf.php');
        $mpdf = new mPDF('c','A4');
        $html = ('<html><head>
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
            <link rel="stylesheet" href="css/stylesheet.css" />
            <title>Reporte</title>
        </head>
        <body>
            <div><span id="page1"></span>
                <div class="layout_style0">
                    <p><img class="m_style0" src="img/0.png"/></p>
                </div>
                <div class="layout_style1">
                    <p class="p_style0"><span class="style0">INSTITUTO MEXICANO DEL SEGURO SOCIAL</span></p>
                </div>
            </div>
            <p class="p_style1"><span class="style1">Acuse de recibo electrónico</span></p>
            <p class="p_style2"><span class="style1">IMSS DESDE SU EMPRESA</span></p>
            <p class="p_style3"><span class="style2">En términos del Artículo 6 del Reglamento de la Ley del Seguro Social
                        en Materia de Afiliación, Clasificación de Empresas, Recaudación y Fiscalización, el Instituto Mexicano del Seguro Social extiende el
                        presente Acuse de recibo electrónico del Patrón o Sujeto Obligado con Nombre o Razón Social '.$variable1.'
                        con Registro Patronal '.$variable2.'.</span></p>
            <table cellpadding="1" cellspacing="5" style="width: 100%; margin-bottom: 0;">
                <tr>
                    <td colspan="3" class="t_style0"><span class="style3">Información General</span></td>
                </tr>
                <tr>
                    <td class="p_style5"><span class="style4">Número de folio: '.$variable3.'</span></td>
                    <td class="m_style1"> </td>
                    <td class="p_style6" rowspan="2"><span class="style4">Razón Social: '.$variable1.'</span></td>
                </tr>
                <tr>
                    <td class="p_style5"><span class="style4">Número de lote: '.$variable4.'</span></td>
                    <td class="m_style1"> </td>
                </tr>
                <tr>
                    <td class="p_style5"><span class="style4">RFC del patrón: '.$variable5.'</span></td>
                    <td class="m_style1"> </td>
                    <td class="p_style5" style="width: 65;"><span class="style4">Fecha y hora de recepción del lote: '.$variable6.'</span></td>
                </tr>
                <tr>
                    <td class="p_style5"><span class="style4">Registro Patronal: '.$variable2.'</span></td>
                    <td class="m_style1"> </td>
                    <td class="p_style5"><span class="style4">Serial del certificado: '.$variable7.'</span></td>
                </tr>
            </table>
            <table style="width: 100%; margin-top: 10; margin-bottom: 0;">
                <tr>
                    <td class="t_style0">
                        <span class="style3">Huella Digital</span>
                    </td>
                </tr>
                <tr >
                    <td class="t_style1" >
                        <span class="style4">'.$variable8.'</span>
                    </td>
                </tr>
            </table>
            <table cellpadding="5" style="width: 100%; margin-top: 10; margin-bottom: 0;">
                '.$cadena.'
            </table>
            <p><span class="style2">Este documento es una representación impresa de los movimientos afiliatorios que fueron transmitidos, mismo que es extraído de la notaría.</span></p>
            <footer>
                <p><span class="style2">Sello Digital:</span></p>
                <p><span class="style2">'.$variable9.'</span></p>
                <br />
                <img class="m_style2" src="img/piedp.png"/>
                <p style="text-align: right; margin: 0px 55px 0px 0px;">Página 1 de 1</p>
            </footer>
        </body>
        </html>
        ');
        $html= mb_convert_encoding($html,'UTF-8','UTF-8');
        $mpdf ->writeHTML($html);
        $mpdf ->Output('reporte.pdf','I');
    }