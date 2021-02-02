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
                    presente Constancia de presentación de movimientos afiliatorios del Patrón o Sujeto Obligado con Nombre o Razón Social #VARIABLE1
                    con Registro Patronal #VARIABLE2.</span></p>
        <table cellpadding="1" cellspacing="5" style="width: 100%; margin-bottom: 0;">
            <tr>
                <td colspan="3" class="t_style0"><span class="style3">Información General</span></td>
            </tr>
            <tr>
                <td class="p_style5"><span class="style4">Número de folio: #VARIABLE3</span></td>
                <td class="m_style1"> </td>
                <td class="p_style6" rowspan="2"><span class="style4">Razón Social: #VARIABLE4</span></td>
            </tr>
            <tr>
                <td class="p_style5"><span class="style4">Número de lote: #VARIABLE5</span></td>
                <td class="m_style1"> </td>
            </tr>
            <tr>
                <td class="p_style5"><span class="style4">RFC del patrón: #VARIABLE6</span></td>
                <td class="m_style1"> </td>
                <td class="p_style5" style="width: 65;"><span class="style4">Fecha y hora de recepción del lote: #VARIABLE7</span></td>
            </tr>
            <tr>
                <td class="p_style5"><span class="style4">Registro Patronal: #VARIABLE8</span></td>
                <td class="m_style1"> </td>
                <td class="p_style5"><span class="style4">Serial del certificado: #VARIABLE9</span></td>
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
                    <span class="style4">#VARIABLE10</span>
                </td>
            </tr>
        </table>
        <table cellpadding="5" style="width: 100%; margin-top: 10; margin-bottom: 0;">
            <tr>
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
            </tr>
        </table>
        <p><span class="style2">Este documento es una representación impresa de los movimientos afiliatorios que fueron transmitidos, mismo que es extraído de la notaría.</span></p>
        <footer>
            <p><span class="style2">Sello Digital:</span></p>
            <p><span class="style2">#VARIABLE11</span></p>
            <br />
            <img class="m_style2" src="img/piedp.png"/>
            <p style="text-align: right; margin: 0px 55px 0px 0px;">Página # de #</p>
        </footer>
    </body>
    </html>
    ');
    $mpdf ->Output('reporte.pdf','I');