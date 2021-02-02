<?php
    require_once('C:\xampp\htdocs\mio\pdf\mpdf.php');

    $mpdf = new mPDF('c','A4');
    $mpdf ->WriteHTML('
    <html>
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
                    presente Constancia de presentación de movimientos afiliatorios del Patrón o Sujeto Obligado con Nombre o Razón Social #VARIABLE
                    con Registro Patronal #VARIABLE.</span></p>
        <div>
            <table style="width: 100%;margin: 0px;">
                <tr>
                    <td colspan="2" style="text-align: center;border: 1px solid black;"><span class="style3">Información General</span></td>
                </tr>
                <tr>
                    <td>
                        <table style="width: 100%;margin: 0px;">
                            <tr>
                                <td class="p_style5"><span class="style4">Número de folio:</span></td>
                            </tr>
                            <tr>
                                <td class="p_style5"><span class="style4">Número de lote:</span></td>
                            </tr>
                            <tr>
                                <td class="p_style5"><span class="style4">RFC del patrón:</span></td>
                            </tr>
                            <tr>
                                <td class="p_style5"><span class="style4">Registro Patronal:</span></td>
                            </tr>
                        </table>
                    </td>
                    <td>
                        <table style="width: 100%;margin: 0px;">
                            <tr>
                                <td class="p_style6"><span class="style4">Razón Social:</span></td>
                            </tr>
                            <tr>
                                <td class="p_style5"><span class="style4">Fecha y hora de recepción del lote:</span></td>
                            </tr>
                            <tr>
                                <td class="p_style5"><span class="style4">Serial del certificado:</span></td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </div>
        <div style="width: 100%;">
            <table style="width: 100%;">
                <tr><td colspan="2" style="text-align: center; border: 1px solid black;">Información General</td></tr>
                <tr>
                    <td>
                        <table style="width: 100%; border-collapse: collapse;">
                            <tr>
                                <td class="p_style5"><span class="style4">Número de folio:</span></td>
                            </tr>
                            <tr>
                                <td class="p_style5"><span class="style4">Número de lote:</span></td>
                            </tr>
                            <tr>
                                <td class="p_style5"><span class="style4">RFC del patrón:</span></td>
                            </tr>
                            <tr>
                                <td class="p_style5"><span class="style4">Registro Patronal:</span></td>
                            </tr>
                        </table>
                    </td>
                    <td>
                        <table style="width: 100%; border-collapse: collapse;">
                            <tr>
                                <td class="p_style6"><span class="style4">Razón Social:</span></td>
                            </tr>
                            <tr>
                                <td class="p_style5"><span class="style4">Fecha y hora de recepción del lote:</span></td>
                            </tr>
                            <tr>
                                <td class="p_style5"><span class="style4">Serial del certificado:</span></td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </div>
        <div><span id="page2"></span>
        </div>
    </body>
    ');
    $mpdf ->Output('reporte.pdf','I');