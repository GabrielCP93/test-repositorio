<?php
    /*Lista de Variables:
        variable1:Razón Social
        variable2:Registro Patronal
        variable3:Número de Folio
        variable4:Número de lote
        variable5:RFC del patrón
        variable6:Fecha y hora de recepción del lote
        variable7:Serial del certificado
        variable8:Huella digital
        variable9:Mov re. Bajas
        variable10:Mov re. Modif.
        variable11:Mov re. Reing.
        variable12:Mov re. Total
        variable13:Oper. Bajas
        variable14:Oper. Modif.
        variable15:Oper. Reing.
        variable16:Oper. Total
        variable17:Rech. Bajas
        variable18:Rech. Modif.
        variable19:Rech. Reing.
        variable20:Rech. Total
    */
    if(mysql_connect("localhost","root","")){
        $valor = TRUE;}
    else{
        $valor = FALSE;}
    
        
    formato($valor,"MAQUINITAS CONSULTORES SA DE CV"," Y6077636105","8700907963241087340","286727855","SCO190708939","2021-01-20 16:32","00000100000209161833",
    "7d9502354c5b93ceeecaada3dbd8566f40ffa0a5","0","0","0","0","0","0","0","0","0","0","0","0");

    function formato($status,$variable1,$variable2,$variable3,$variable4,$variable5,$variable6,$variable7,$variable8,$variable9,
    $variable10,$variable11,$variable12,$variable13,$variable14,$variable15,$variable16,$variable17,$variable18,$variable19,$variable20){
        mysql_connect("localhost","root","");
        require_once('C:\xampp\htdocs\mio\pdf\mpdf.php');
        $mpdf = new mPDF('c','A4');
        $html = ('<html>
            <head>
                <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
                <link rel="stylesheet" href="stylesheet.css" />
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
                <p class="p_style1"><span class="style1">Constancia de presentación de movimientos afiliatorios</span></p>
                <p class="p_style2"><span class="style1">IMSS DESDE SU EMPRESA</span></p>
                <p class="p_style3"><span class="style2">En términos del Artículo 6 del Reglamento de la Ley del Seguro Social
                            en Materia de Afiliación, Clasificación de Empresas, Recaudación y Fiscalización, el Instituto Mexicano del Seguro Social extiende la
                            presente Constancia de presentación de movimientos afiliatorios del Patrón o Sujeto Obligado con Nombre o Razón Social '.$variable1.'
                            con Registro Patronal '.$variable2.'</span></p>
                <table cellpadding="1" cellspacing="5" style="width: 100%; margin-bottom: 0;">
                    <tr>
                        <td colspan="3" class="t_style0"><span class="style3">Información General</span></td>
                    </tr>
                    <tr>
                        <td class="p_style5"><span class="style4">Número de folio: '.$variable3.'</span></td>
                        <!-- <td class="p_style6"><span class="style2">8700907963241087340</span></td>-->
                        <td class="m_style1"> </td>
                        <td class="p_style6" rowspan="2"><span class="style4">Razón Social: '.$variable1.'</span></td>
                        <!--<td class="p_style7" rowspan="2"><span class="style2">#VARIABLE</span></td>-->
                    </tr>
                    <tr>
                        <td class="p_style5"><span class="style4">Número de lote: '.$variable4.'</span></td>
                        <!--<td class="p_style6"><span class="style4">#VARIABLE</span></td>-->
                        <td class="m_style1"> </td>
                        <!--<td style="border: none;"> </td>
                            <td style="border: none;"> </td>-->
                    </tr>
                    <tr>
                        <td class="p_style5"><span class="style4">RFC del patrón: '.$variable5.'</span></td>
                        <!--<td class="p_style6"><span class="style2">#Variable</span></td>-->
                        <td class="m_style1"> </td>
                        <td class="p_style5" style="width: 65;"><span class="style4">Fecha y hora de recepción del lote: '.$variable6.'</span></td>
                        <!--<td class="p_style8"><span class="style2">#Variable</span></td>-->
                    </tr>
                    <tr>
                        <td class="p_style5"><span class="style4">Registro Patronal: '.$variable2.'</span></td>
                        <!--<td class="p_style6"><span class="style2">#Variable</span></td>-->
                        <td class="m_style1"> </td>
                        <td class="p_style5"><span class="style4">Serial del certificado: '.$variable7.'</span></td>
                        <!--<td class="p_style9"><span class="style2">#Variable</span></td>-->
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
                <table style="width: 100%; margin-top: 10; margin-bottom: 0;" cellpadding="5" >
                    <tr style="width: 100%;">
                        <td style="width: 224px;">
                            <table style="width: 100%;">
                                <tr>
                                    <td class="t_style3" colspan="4">
                                        <span class="style3">Movimientos recibidos por el IMSS</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width:57px;" class="t_style4">
                                        <span class="style3">Bajas</span>
                                    </td>
                                    <td style="width:55px;" class="t_style4">
                                        <span class="style3">Modif.</span>
                                    </td>
                                    <td style="width:55px;" class="t_style4">
                                        <span class="style3">Reing.</span>
                                    </td>
                                    <td style="width:57px;" class="t_style4">
                                        <span class="style3">Total</span>
                                    </td>
                                    <tr>
                                        <td class="t_style5">
                                            <span class="style4">'.$variable9.'</span>
                                        </td>
                                        <td class="t_style5">
                                            <span class="style4">'.$variable10.'</span>
                                        </td>
                                        <td class="t_style5">
                                            <span class="style4">'.$variable11.'</span>
                                        </td>
                                        <td class="t_style5">
                                            <span class="style4">'.$variable12.'</span>
                                        </td>
                                    </tr>
                                </tr>
                            </table>
                        </td>
                        <td style="width: 224px;">
                            <table style="width: 100%;">
                                <tr>
                                    <td class="t_style3" colspan="4">
                                        <span class="style3">Operados</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width:57px;" class="t_style4">
                                        <span class="style3">Bajas</span>
                                    </td>
                                    <td style="width:55px;" class="t_style4">
                                        <span class="style3">Modif.</span>
                                    </td>
                                    <td style="width:55px;" class="t_style4">
                                        <span class="style3">Reing.</span>
                                    </td>
                                    <td style="width:57px;" class="t_style4">
                                        <span class="style3">Total</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="t_style5">
                                        <span class="style4">'.$variable13.'</span>
                                    </td>
                                    <td class="t_style5">
                                        <span class="style4">'.$variable14.'</span>
                                    </td>
                                    <td class="t_style5">
                                        <span class="style4">'.$variable15.'</span>
                                    </td>
                                    <td class="t_style5">
                                        <span class="style4">'.$variable16.'</span>
                                    </td>
                                </tr>
                            </table>
                        </td>
                        <td style="width: 224px">
                            <table style="width: 100%;">
                                <tr>
                                    <td class="t_style3" colspan="4">
                                        <span class="style3">Rechazados</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width:57px;" class="t_style4">
                                        <span class="style3">Bajas</span>
                                    </td>
                                    <td style="width:55px;" class="t_style4">
                                        <span class="style3">Modif.</span>
                                    </td>
                                    <td style="width:55px;" class="t_style4">
                                        <span class="style3">Reing.</span>
                                    </td>
                                    <td style="width:57px;" class="t_style4">
                                        <span class="style3">Total</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="t_style5">
                                        <span class="style4">'.$variable17.'</span>
                                    </td>
                                    <td class="t_style5">
                                        <span class="style4">'.$variable18.'</span>
                                    </td>
                                    <td class="t_style5">
                                        <span class="style4">'.$variable19.'</span>
                                    </td>
                                    <td class="t_style5">
                                        <span class="style4">'.$variable20.'</span>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
                <table>
                    <tr><td colspan="10" style="text-align: center; width: 100%;"><span>Relación de movimientos operados</span></td></tr>
                    <tr>
                        <td><span>Tipo</span></td>
                        <td><span>NSS</span></td>
                        <td><span>Nombre Asegurado</span></td>
                        <td><span>Sal.Base</span></td>
                        <td><span>Ext.</span></td>
                        <td><span>UMF</span></td>
                        <td><span>Tipo</span></td>
                        <td><span>Fec-Mov</span></td>
                        <td><span>C.Baja</span></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </table>   
            </body>
            </html>');
        $html= mb_convert_encoding($html,'UTF-8','UTF-8');
        $mpdf ->writeHTML($html);
        $mpdf ->Output('reporte.pdf','I');}