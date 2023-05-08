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

$mpdf->SetTitle('Agilitá | Relatório Rádio');
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
                <p class="font-16">Rádios: <b>Difusora Pantanal FM 101,9, Hora FM 92,3 e Morena FM 107,1</b></p><div class="space-height-8">&nbsp;</div>
                <p class="font-16">Início: <b>01/04/2023</b></p><div class="space-height-8">&nbsp;</div>
                <p class="font-16">Final: <b>04/04/2023</b></p><div class="space-height-8">&nbsp;</div>
                <p class="font-16">Formato: <b>Spot 30"</b></p>

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

      <h2 class="text-center">Relatório Rádio: Dengue - Abril</h2>

      <p class="line-height-20">
        Praça: <b>Campo Grande - MS</b><br>
        Agência: <b>Agilitá Propaganda</b><br>
        Campanha: <b>Dengue - abril</b><br>
        Cliente: <b>Secretaria de Estado de Governo e Gestão Estratégica</b><br>
        PI: <b>505/2023</b><br>
        Rádio: <b>Difusora Pantanal FM 101,9</b><br>
        Início: <b>01/04/2023</b><br>
        Final: <b>04/04/2023</b><br>
        Formato: <b>Spot 30"</b>
      </p>

      <h5 class="color-000000">RÁDIO DIFUSORA PANTANAL FM 101,9 – PI: 505/2023</h5>

      <table class="font-12">
        <tr>
          <th>Rádio</th>
          <th>01</th>
          <th>02</th>
          <th>03</th>
          <th>04</th>
          <th>TOTAL</th>
        </tr>
        <tr>
          <td>Difusora Pantanal</td>
          <td>06</td>
          <td>06</td>
          <td>06</td>
          <td>06</td>
          <td>24</td>
        </tr>
        <tr>
          <td></td>
          <td class="sobra">01</td>
          <td class="sobra">01</td>
          <td class="sobra">01</td>
          <td class="sobra">02</td>
          <td class="sobra">05</td>
        </tr>
      </table>
      <p class="mb-20 font-italic font-10">Vermelho falta e azul sobra</p>

      <table class="b-0 font-12 mb-10">
        <tr class="b-0">
          <td class="text-left b-0 p-0 font-weight-bold">Dia 01/04/2023 (Sábado) -&nbsp;</td>
          <td class="text-left b-0 p-0">Mapa 06 inserções</td>
        </tr>
        <tr class="b-0">
          <td class="text-left b-0 p-0"></td>
          <td class="text-left b-0 p-0">07 inserções veiculadas</td>
        </tr>
      </table>

      <table class="w-100 font-12 mb-20">
        <tr>
          <td class="font-weight-bold">Hora aprox.</td>
          <td>07:23</td>
          <td>09:15</td>
          <td>11:35</td>
          <td>11:50</td>
          <td>14:31</td>
          <td>17:04</td>
        </tr>
        <tr>
          <td>17:46</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
      </table>

      <table class="b-0 font-12 mb-10">
        <tr class="b-0">
          <td class="text-left b-0 p-0 font-weight-bold">Dia 02/04/2023 (Domingo) -&nbsp;</td>
          <td class="text-left b-0 p-0">Mapa 06 inserções</td>
        </tr>
        <tr class="b-0">
          <td class="text-left b-0 p-0"></td>
          <td class="text-left b-0 p-0">07 inserções veiculadas</td>
        </tr>
      </table>

      <table class="w-100 font-12 mb-20">
        <tr>
          <td class="font-weight-bold">Hora aprox.</td>
          <td>07:23</td>
          <td>09:15</td>
          <td>11:35</td>
          <td>11:50</td>
          <td>14:31</td>
          <td>17:04</td>
        </tr>
        <tr>
          <td>17:46</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
      </table>

      <table class="b-0 font-12 mb-10">
        <tr class="b-0">
          <td class="text-left b-0 p-0 font-weight-bold">Dia 03/04/2023 (Segunda-feira) -&nbsp;</td>
          <td class="text-left b-0 p-0">Mapa 06 inserções</td>
        </tr>
        <tr class="b-0">
          <td class="text-left b-0 p-0"></td>
          <td class="text-left b-0 p-0">07 inserções veiculadas</td>
        </tr>
      </table>

      <table class="w-100 font-12 mb-20">
        <tr>
          <td class="font-weight-bold">Hora aprox.</td>
          <td>07:23</td>
          <td>09:15</td>
          <td>11:35</td>
          <td>11:50</td>
          <td>14:31</td>
          <td>17:04</td>
        </tr>
        <tr>
          <td>17:46</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
      </table>

      <table class="b-0 font-12 mb-10">
        <tr class="b-0">
          <td class="text-left b-0 p-0 font-weight-bold">Dia 04/04/2023 (Terça-feira) -&nbsp;</td>
          <td class="text-left b-0 p-0">Mapa 06 inserções</td>
        </tr>
        <tr class="b-0">
          <td class="text-left b-0 p-0"></td>
          <td class="text-left b-0 p-0">07 inserções veiculadas</td>
        </tr>
      </table>

      <table class="w-100 font-12 mb-20">
        <tr>
          <td class="font-weight-bold">Hora aprox.</td>
          <td>07:23</td>
          <td>09:15</td>
          <td>11:35</td>
          <td>11:50</td>
          <td>14:31</td>
          <td>17:04</td>
        </tr>
        <tr>
          <td>17:46</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
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

      <p class="line-height-20">
        Praça: <b>Campo Grande - MS </b><br>
        Agência: <b>Agilitá Propaganda</b><br>
        Campanha: <b>Dengue - abril</b><br>
        Cliente: <b>Secretaria de Estado de Governo e Gestão Estratégica</b><br>
        PI: <b>511/2023</b><br>
        Rádio: <b>Hora FM 92,3</b><br>
        Início: <b>01/04/2023</b><br>
        Final: <b>04/04/2023</b><br>
        Formato: <b>Spot 30"</b>
      </p>

      <h5 class="color-000000">RÁDIO HORA FM 92,3 – PI: 511/2023</h5>

      <table class="font-12">
        <tr>
          <th>Rádio</th>
          <th>01</th>
          <th>02</th>
          <th>03</th>
          <th>04</th>
          <th>TOTAL</th>
        </tr>
        <tr>
          <td>Morena FM 107,1</td>
          <td>06</td>
          <td>06</td>
          <td>06</td>
          <td>06</td>
          <td>24</td>
        </tr>
        <tr>
          <td></td>
          <td>√</td>
          <td>√</td>
          <td>√</td>
          <td>√</td>
          <td>ok</td>
        </tr>
      </table>
      <p class="mb-20 font-italic font-10">Vermelho falta e azul sobra</p>

      <table class="b-0 font-12 mb-10">
        <tr class="b-0">
          <td class="text-left b-0 p-0 font-weight-bold">Dia 01/04/2023 (Sábado) -&nbsp;</td>
          <td class="text-left b-0 p-0">Mapa 06 inserções</td>
        </tr>
        <tr class="b-0">
          <td class="text-left b-0 p-0"></td>
          <td class="text-left b-0 p-0">07 inserções veiculadas</td>
        </tr>
      </table>

      <table class="w-100 font-12 mb-20">
        <tr>
          <td class="font-weight-bold">Hora aprox.</td>
          <td>07:23</td>
          <td>09:15</td>
          <td>11:35</td>
          <td>11:50</td>
          <td>14:31</td>
          <td>17:04</td>
        </tr>
        <tr>
          <td>17:46</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
      </table>

      <table class="b-0 font-12 mb-10">
        <tr class="b-0">
          <td class="text-left b-0 p-0 font-weight-bold">Dia 02/04/2023 (Domingo) -&nbsp;</td>
          <td class="text-left b-0 p-0">Mapa 06 inserções</td>
        </tr>
        <tr class="b-0">
          <td class="text-left b-0 p-0"></td>
          <td class="text-left b-0 p-0">07 inserções veiculadas</td>
        </tr>
      </table>

      <table class="w-100 font-12 mb-20">
        <tr>
          <td class="font-weight-bold">Hora aprox.</td>
          <td>07:23</td>
          <td>09:15</td>
          <td>11:35</td>
          <td>11:50</td>
          <td>14:31</td>
          <td>17:04</td>
        </tr>
        <tr>
          <td>17:46</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
      </table>

      <table class="b-0 font-12 mb-10">
        <tr class="b-0">
          <td class="text-left b-0 p-0 font-weight-bold">Dia 03/04/2023 (Segunda-feira) -&nbsp;</td>
          <td class="text-left b-0 p-0">Mapa 06 inserções</td>
        </tr>
        <tr class="b-0">
          <td class="text-left b-0 p-0"></td>
          <td class="text-left b-0 p-0">07 inserções veiculadas</td>
        </tr>
      </table>

      <table class="w-100 font-12 mb-20">
        <tr>
          <td class="font-weight-bold">Hora aprox.</td>
          <td>07:23</td>
          <td>09:15</td>
          <td>11:35</td>
          <td>11:50</td>
          <td>14:31</td>
          <td>17:04</td>
        </tr>
        <tr>
          <td>17:46</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
      </table>

      <table class="b-0 font-12 mb-10">
        <tr class="b-0">
          <td class="text-left b-0 p-0 font-weight-bold">Dia 04/04/2023 (Terça-feira) -&nbsp;</td>
          <td class="text-left b-0 p-0">Mapa 06 inserções</td>
        </tr>
        <tr class="b-0">
          <td class="text-left b-0 p-0"></td>
          <td class="text-left b-0 p-0">07 inserções veiculadas</td>
        </tr>
      </table>

      <table class="w-100 font-12 mb-20">
        <tr>
          <td class="font-weight-bold">Hora aprox.</td>
          <td>07:23</td>
          <td>09:15</td>
          <td>11:35</td>
          <td>11:50</td>
          <td>14:31</td>
          <td>17:04</td>
        </tr>
        <tr>
          <td>17:46</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
      </table>

    </div>

  </div>
');
################################################################################

################################################################################
// PAGINA 4
################################################################################
$mpdf->AddPage();
$mpdf->SetHTMLHeader($header);
$mpdf->SetHTMLFooter($footer);
$mpdf->WriteHTML('
  <div class="all">

    <div class="content">

      <p class="line-height-20">
        Praça: <b>Campo Grande - MS</b><br>
        Agência: <b>Agilitá Propaganda</b><br>
        Campanha: <b>Dengue - abril</b><br>
        Cliente: <b>Secretaria de Estado de Governo e Gestão Estratégica</b><br>
        PI: <b>513/2023</b><br>
        Rádio: <b>Morena FM 107,1</b><br>
        Início: <b>01/04/2023</b><br>
        Final: <b>04/04/2023</b><br>
        Formato: <b>Spot 30"</b>
      </p>

      <h5 class="color-000000">RÁDIO MORENA FM 107,1 – PI: 513/2023</h5>

      <table class="font-12">
        <tr>
          <th>Rádio</th>
          <th>01</th>
          <th>02</th>
          <th>03</th>
          <th>04</th>
          <th>TOTAL</th>
        </tr>
        <tr>
          <td>Morena FM 107,1</td>
          <td>06</td>
          <td>06</td>
          <td>06</td>
          <td>06</td>
          <td>24</td>
        </tr>
        <tr>
          <td></td>
          <td>√</td>
          <td>√</td>
          <td>√</td>
          <td>√</td>
          <td>ok</td>
        </tr>
      </table>
      <p class="mb-20 font-italic font-10">Vermelho falta e azul sobra</p>

      <table class="b-0 font-12 mb-10">
        <tr class="b-0">
          <td class="text-left b-0 p-0 font-weight-bold">Dia 01/04/2023 (Sábado) -&nbsp;</td>
          <td class="text-left b-0 p-0">Mapa 06 inserções</td>
        </tr>
        <tr class="b-0">
          <td class="text-left b-0 p-0"></td>
          <td class="text-left b-0 p-0">07 inserções veiculadas</td>
        </tr>
      </table>

      <table class="w-100 font-12 mb-20">
        <tr>
          <td class="font-weight-bold">Hora aprox.</td>
          <td>07:23</td>
          <td>09:15</td>
          <td>11:35</td>
          <td>11:50</td>
          <td>14:31</td>
          <td>17:04</td>
        </tr>
        <tr>
          <td>17:46</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
      </table>

      <table class="b-0 font-12 mb-10">
        <tr class="b-0">
          <td class="text-left b-0 p-0 font-weight-bold">Dia 02/04/2023 (Domingo) -&nbsp;</td>
          <td class="text-left b-0 p-0">Mapa 06 inserções</td>
        </tr>
        <tr class="b-0">
          <td class="text-left b-0 p-0"></td>
          <td class="text-left b-0 p-0">07 inserções veiculadas</td>
        </tr>
      </table>

      <table class="w-100 font-12 mb-20">
        <tr>
          <td class="font-weight-bold">Hora aprox.</td>
          <td>07:23</td>
          <td>09:15</td>
          <td>11:35</td>
          <td>11:50</td>
          <td>14:31</td>
          <td>17:04</td>
        </tr>
        <tr>
          <td>17:46</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
      </table>

      <table class="b-0 font-12 mb-10">
        <tr class="b-0">
          <td class="text-left b-0 p-0 font-weight-bold">Dia 03/04/2023 (Segunda-feira) -&nbsp;</td>
          <td class="text-left b-0 p-0">Mapa 06 inserções</td>
        </tr>
        <tr class="b-0">
          <td class="text-left b-0 p-0"></td>
          <td class="text-left b-0 p-0">07 inserções veiculadas</td>
        </tr>
      </table>

      <table class="w-100 font-12 mb-20">
        <tr>
          <td class="font-weight-bold">Hora aprox.</td>
          <td>07:23</td>
          <td>09:15</td>
          <td>11:35</td>
          <td>11:50</td>
          <td>14:31</td>
          <td>17:04</td>
        </tr>
        <tr>
          <td>17:46</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
      </table>

      <table class="b-0 font-12 mb-10">
        <tr class="b-0">
          <td class="text-left b-0 p-0 font-weight-bold">Dia 04/04/2023 (Terça-feira) -&nbsp;</td>
          <td class="text-left b-0 p-0">Mapa 06 inserções</td>
        </tr>
        <tr class="b-0">
          <td class="text-left b-0 p-0"></td>
          <td class="text-left b-0 p-0">07 inserções veiculadas</td>
        </tr>
      </table>

      <table class="w-100 font-12 mb-20">
        <tr>
          <td class="font-weight-bold">Hora aprox.</td>
          <td>07:23</td>
          <td>09:15</td>
          <td>11:35</td>
          <td>11:50</td>
          <td>14:31</td>
          <td>17:04</td>
        </tr>
        <tr>
          <td>17:46</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
      </table>

    </div>

  </div>
');
################################################################################

$mpdf->Output('certificado-techlex.pdf', 'I');
