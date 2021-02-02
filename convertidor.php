<?
    require_once('/opt/lampp/htdocs/mpdf/app/lib/pdf/mpdf.php');

    $mpdf = new mPDF('c','A4');
    $mpdf ->writeHTML('
    <html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="stylesheet.css" />
    <title>Reporte</title>
</head>

<body>
    <div><span id="page1"></span>
        <div class="layout_style0">
            <p><img class="m_style0" src="img/0.png" width="65" /></p>
        </div>
        <div class="layout_style1">
            <p class="p_style0"><span class="style0">INSTITUTO MEXICANO DEL SEGURO SOCIAL</span></p>
        </div>
    </div>
    <p class="p_style1"><span class="style1">Constancia de presentación de movimientos afiliatorios</span></p>
    <p class="p_style2"><span class="style1">IMSS DESDE SU EMPRESA</span></p>
    <p class="p_style3"><span class="style2">En términos del Artículo 6 del Reglamento de la Ley del Seguro Social
                en Materia de Afiliación, Clasificación de Empresas, Recaudación y Fiscalización, el Instituto Mexicano del Seguro Social extiende la
                presente Constancia de presentación de movimientos afiliatorios del Patrón o Sujeto Obligado con Nombre o Razón Social #VARIABLE
                con Registro Patronal #VARIABLE.</span></p>
    <table class="bordered">
        <colgroup>
            <col style="width:344px;" />
            <col style="width:330px;" />
        </colgroup>
        <tr>
            <td colspan="3" class="t_style0"><span class="style3">Información General</span></td>
        </tr>
        <tr>
            <td class="p_style5"><span class="style4">Número de folio:</span></td>
            <!-- <td class="p_style6"><span class="style2">8700907963241087340</span></td>-->
            <td class="m_style1"> </td>
            <td class="p_style6" rowspan="2"><span class="style4">Razón Social:</span></td>
            <!--<td class="p_style7" rowspan="2"><span class="style2">#VARIABLE</span></td>-->
        </tr>
        <tr>
            <td class="p_style5"><span class="style4">Número de lote:</span></td>
            <!--<td class="p_style6"><span class="style4">#VARIABLE</span></td>-->
            <td class="m_style1"> </td>
            <!--<td style="border: none;"> </td>
                <td style="border: none;"> </td>-->
        </tr>
        <tr>
            <td class="p_style5"><span class="style4">RFC del patrón:</span></td>
            <!--<td class="p_style6"><span class="style2">#Variable</span></td>-->
            <td class="m_style1"> </td>
            <td class="p_style5" style="width: 65;"><span class="style4">Fecha y hora de recepción del lote:</span></td>
            <!--<td class="p_style8"><span class="style2">#Variable</span></td>-->
        </tr>
        <tr>
            <td class="p_style5"><span class="style4">Registro Patronal:</span></td>
            <!--<td class="p_style6"><span class="style2">#Variable</span></td>-->
            <td class="m_style1"> </td>
            <td class="p_style5"><span class="style4">Serial del certificado:</span></td>
            <!--<td class="p_style9"><span class="style2">#Variable</span></td>-->
        </tr>
    </table>
    <br />
    <table>
        <tr class="t_style0">
            <td class="t_style0">
                <span class="style3">Huella Digital</span>
            </td>
        </tr>
        <tr class="t_style1">
            <td class="t_style1">
                <span class="style4">7d9502354c5b93ceeecaada3dbd8566f40ffa0a5</span>
            </td>
        </tr>
    </table>
    <br />
    <table width="80%" cellpadding="1" cellspacing="5">
        <tr>
            <td>
                <table>
                    <tr>
                        <td colspan="4" class="t_style3">
                            Movimientos recibidos por el IMSS
                        </td>
                    </tr>
                    <tr>
                        <td class="t_style3">
                            Bajas
                        </td>
                        <td class="t_style3">
                            Modif.
                        </td>
                        <td class="t_style3">
                            Reing.
                        </td>
                        <td class="t_style3">
                            Total
                        </td>
                    </tr>
                </table>
            </td>
            <td>
                <table>
                    <tr>
                        <td colspan="4" class="t_style3">
                            Operados
                        </td>
                    </tr>
                    <tr>
                        <td class="t_style3">
                            Bajas
                        </td>
                        <td class="t_style3">
                            Modif.
                        </td>
                        <td class="t_style3">
                            Reing.
                        </td>
                        <td class="t_style3">
                            Total
                        </td>
                    </tr>
                </table>
            </td>
            <td>
                <table>
                    <tr>
                        <td colspan="4" class="t_style3">
                            Rechazados
                        </td>
                    </tr>
                    <tr>
                        <td class="t_style3">
                            Bajas
                        </td>
                        <td class="t_style3">
                            Modif.
                        </td>
                        <td class="t_style3">
                            Reing.
                        </td>
                        <td class="t_style3">
                            Total
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>

</html>
    ');
    $mpdf ->Output('reporte.pdf','I');