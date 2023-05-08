<?php

require_once __DIR__ . '/vendor/autoload.php';

$mpdfConfig = [
  'fontDir' => __DIR__ . '/fonts', // Caminho para a pasta de fontes
  'fontdata' => [
    'poppins' => [
      'R' => 'Poppins-Regular.ttf',
      'B' => 'Poppins-Bold.ttf',
      'I' => 'Poppins-Italic.ttf',
      'BI' => 'Poppins-BoldItalic.ttf',
    ],
  ],
  'default_font' => 'poppins', // Defina 'poppins' como a fonte padrão
];

$mpdf = new \Mpdf\Mpdf($mpdfConfig);

$mpdf->SetTitle('Agilitá | Relatório Site');
$mpdf->WriteHTML(file_get_contents(__DIR__ . '/css/styles.css'), \Mpdf\HTMLParserMode::HEADER_CSS);

$header = '<div class="header"><img src="' . __DIR__ . '/images/logo.png" /></div>';
$footer = '<div class="footer font-10">Agilitá Propaganda – Dengue – abril<br>Página {PAGENO} de {nb}<br>CNPJ: 11.252.791/0001-63 – Rua: Dr. Zerbini, 850 – Sala 06 - Chácara Cachoeira<br>Campo Grande - MS - (67)3027-6070/99635-0777</div>';

################################################################################
// PAGINA 1
################################################################################
$mpdf->SetHTMLHeader($header);
$mpdf->SetHTMLFooter($footer);
$mpdf->WriteHTML('
  <div class="all">
    <div class="content page-cover">
      <table>
          <tr>
              <td class="text-left">
                
                <div class="font-36 font-weight-bold color-80BC25">Auditoria de mídia</div><div class="space-height-16">&nbsp;</div>
                
                <p class="font-16">Praça: <b>Campo Grande - MS</b></p><div class="space-height-8">&nbsp;</div>
                <p class="font-16">Agência: <b>Agilitá Propaganda</b></p><div class="space-height-8">&nbsp;</div>
                <p class="font-16">Campanha: <b>Dengue - abril</b></p><div class="space-height-8">&nbsp;</div>
                <p class="font-16">Cliente: <b>Secretaria de Estado de Governo e Gestão Estratégica</b></p><div class="space-height-8">&nbsp;</div>
                <p class="font-16">PI: <b>Conforme descrito em cada veículo</b></p><div class="space-height-8">&nbsp;</div>
                <p class="font-16">Site: <b>Conforme descrito em cada veículo</b></p><div class="space-height-8">&nbsp;</div>
                <p class="font-16">Início: <b>01/04/2023</b></p><div class="space-height-8">&nbsp;</div>
                <p class="font-16">Final: <b>04/04/2023</b></p><div class="space-height-8">&nbsp;</div>
                <p class="font-16">Formato: <b>Conforme descrito em cada veículo</b></p>

              </td>
          </tr>
      </table>  
    </div>
  </div>
');

################################################################################

################################################################################
// PAGINA 2
################################################################################
$mpdf->AddPage();
$mpdf->SetHTMLHeader($header);
$mpdf->SetHTMLFooter($footer);
$mpdf->WriteHTML('
  <div class="all">

    <div class="content">

      <h2 class="text-center">Relatório Site: Dengue - Abril</h2>

      <p class="line-height-20">
        Praça: <b>Campo Grande - MS</b><br>
        Agência: <b>Agilitá Propaganda</b><br>
        Campanha: <b>Dengue - abril</b><br>
        Cliente: <b>Secretaria de Estado de Governo e Gestão Estratégica</b><br>
        Início: <b>01/04/2023</b><br>
        Final: <b>04/04/2023</b>
      </p>

      <h5 class="color-000000">SITE INVESTIGA MS – PI: 515 / 2023 – Banner Animado – Super Banner Régua – 990x90 px</h5>

      <table class="font-12 mb-20">
        <tr>
          <th>Rádio</th>
          <th>01</th>
          <th>02</th>
          <th>03</th>
        </tr>
        <tr>
          <td></td>
          <td>√</td>
          <td>√</td>
          <td>√</td>
        </tr>
      </table>

      <table class="w-100 font-12 mb-20">
        <tr class="b-0">
          <td class="text-left b-0">
            <b>01/04/2023</b><br><br>
            <img src="' . __DIR__ . '/images/thumbnail-1.png" class="mb-20" width="320px" />
          </td>
          <td class="text-left b-0">
            <b>02/04/2023</b><br><br>
            <img src="' . __DIR__ . '/images/thumbnail-2.png" class="mb-20" width="320px" />
          </td>
        </tr>
        <tr class="b-0">
          <td class="text-left b-0">
            <b>03/04/2023</b><br><br>
            <img src="' . __DIR__ . '/images/thumbnail-3.png" class="mb-20" width="320px" />
          </td>
          <td class="text-left b-0"></td>
        </tr>
      </table>

    </div>

  </div>
');
################################################################################

################################################################################
// PAGINA 3
################################################################################
$mpdf->AddPage();
$mpdf->SetHTMLHeader($header);
$mpdf->SetHTMLFooter($footer);
$mpdf->WriteHTML('
  <div class="all">

    <div class="content">

      <h2 class="text-center">Relatório Site: Dengue - Abril</h2>

      <p class="line-height-20">
        Praça: <b>Campo Grande - MS</b><br>
        Agência: <b>Agilitá Propaganda</b><br>
        Campanha: <b>Dengue - abril</b><br>
        Cliente: <b>Secretaria de Estado de Governo e Gestão Estratégica</b><br>
        Início: <b>01/04/2023</b><br>
        Final: <b>04/04/2023</b>
      </p>

      <h5 class="color-000000">SITE SEMANA ONLINE – PI: 521 / 2023 – Banner Animado – Impacto – 360x420 px</h5>

      <table class="font-12 mb-20">
        <tr>
          <th>Rádio</th>
          <th>01</th>
          <th>02</th>
          <th>03</th>
          <th>04</th>
        </tr>
        <tr>
          <td></td>
          <td>√</td>
          <td>√</td>
          <td>√</td>
          <td>√</td>
        </tr>
      </table>

      <table class="w-100 font-12 mb-20">
        <tr class="b-0">
          <td class="text-left b-0">
            <b>01/04/2023</b><br><br>
            <img src="' . __DIR__ . '/images/thumbnail-1.png" class="mb-20" width="320px" />
          </td>
          <td class="text-left b-0">
            <b>02/04/2023</b><br><br>
            <img src="' . __DIR__ . '/images/thumbnail-2.png" class="mb-20" width="320px" />
          </td>
        </tr>
        <tr class="b-0">
          <td class="text-left b-0">
            <b>03/04/2023</b><br><br>
            <img src="' . __DIR__ . '/images/thumbnail-3.png" class="mb-20" width="320px" />
          </td>
          <td class="text-left b-0">
            <b>04/04/2023</b><br><br>
            <img src="' . __DIR__ . '/images/thumbnail-3.png" class="mb-20" width="320px" />
          </td>
        </tr>
      </table>

    </div>

  </div>
');
################################################################################

$mpdf->Output('certificado-techlex.pdf', 'I');
