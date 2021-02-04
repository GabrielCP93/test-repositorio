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
    if(mysql_connect("localhost","root","")){
        $valor = TRUE;
    }
    else{
        $valor = FALSE;
    }
    if($valor){
        formato($valor,"MAQUINITAS CONSULTORES SA DE CV"," Y6077636105","8700907963241087340","286727855","SCO190708939","2021-01-20 16:32","00000100000209161833",
    "7d9502354c5b93ceeecaada3dbd8566f40ffa0a5","58671ACA4841710D5B10420C22E2F8289A5D4D6CEC059E7749E5B747372DE11FE6F0BCFE6D3C235BCBF7C0E2CD2BE97B52E69E03F1247
    E39186C129069373A32 | 596532617");
    }
    function formato($status,$variable1,$variable2,$variable3,$variable4,$variable5,$variable6,$variable7,$variable8,$variable9){
        mysql_connect("localhost","root","");
        $consulta="SELECT*FROM test";
        mysql_select_db("enomina");
        $datos=mysql_query($consulta);
        $cadena ="";
        while($fila = mysql_fetch_array($datos)){
            $cadena .='<tr><td>'.$fila['atrib1'].'</td><td>'.$fila['atrib2'].'</td><td>'.$fila['atrib3'].'</td><td>'.$fila['atrib4'].'</td><td>'.$fila['atrib5'].'</td><td>'.$fila['atrib6'].'</td></tr>';
        }
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
                        con Registro Patronal'.$variable2.'.</span></p>
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
                <!--<tr>
                    <td><span class="style2">Y607763610501048505299BALTAZAR</span></td>
                    <td><span class="style2">TORRES</span></td>
                    <td><span class="style2">BEATRIZ MERCEDES</span></td>
                    <td><span class="style2">01481000000010018012021000</span></td>
                    <td><span class="style2">0806400</span></td>
                    <td cellpadding="5"><span class="style2">9</span></td>
                </tr>
                <tr>
                    <td><span class="style2">Y607763610514048323407JIMENEZ</span></td>
                    <td><span class="style2">LICEA</span></td>
                    <td><span class="style2">JOSE PUEBLITO</span></td>
                    <td><span class="style2">01481000000010018012021000</span></td>
                    <td><span class="style2">0806400</span></td>
                    <td><span class="style2">9</span></td>
                </tr>
                <tr>
                    <td><span class="style2">***********</span></td>
                    <td><span class="style2">000002(SUMA)</span></td>
                    <td><span class="style2"> </span></td>
                    <td><span class="style2">06400(CC)</span></td>
                    <td><span class="style2"> </span></td>
                    <td><span class="style2">9</span></td>
                </tr>-->
            </table>
            <p><span class="style2">Este documento es una representación impresa de los movimientos afiliatorios que fueron transmitidos, mismo que es extraído de la notaría.</span></p>
            <footer>
                <p><span class="style2">Sello Digital:</span></p>
                <p><span class="style2">'.$variable9.'</span></p>
                <br />
                <img class="m_style2" src="img/piedp.png"/>
                <p style="text-align: right; margin: 0px 55px 0px 0px;">Página # de #</p>
            </footer>
        </body>
        </html>
        ');
        $html= mb_convert_encoding($html,'UTF-8','UTF-8');
        $mpdf ->writeHTML($html);
        $mpdf ->Output('reporte.pdf','I');
    }