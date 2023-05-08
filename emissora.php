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

$mpdf->SetTitle('Agilitá | Relatório TV');
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
                
                <p class="font-16">Praça: <b>Campo Grande, Corumbá e Ponta Porã - MS</b></p><div class="space-height-8">&nbsp;</div>
                <p class="font-16">Agência: <b>Agilitá Propaganda</b></p><div class="space-height-8">&nbsp;</div>
                <p class="font-16">Campanha: <b>Dengue - abril</b></p><div class="space-height-8">&nbsp;</div>
                <p class="font-16">Cliente: <b>Secretaria de Estado de Governo e Gestão Estratégica</b></p><div class="space-height-8">&nbsp;</div>
                <p class="font-16">PI: <b>720/2023</b></p><div class="space-height-8">&nbsp;</div>
                <p class="font-16">Emissora: <b>TV Morena Estado</b></p><div class="space-height-8">&nbsp;</div>
                <p class="font-16">Início: <b>01/04/2023</b></p><div class="space-height-8">&nbsp;</div>
                <p class="font-16">Final: <b>04/04/2023</b></p><div class="space-height-8">&nbsp;</div>
                <p class="font-16">Formato: <b>VT 30"</b></p>

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

      <h2 class="text-center">Relatório TV: Dengue - Abril</h2>

      <p class="line-height-20">
        Praça: <b>Campo Grande – MS </b><br>
        Agência: <b>Agilitá Propaganda</b><br>
        Campanha: <b>Dengue - abril</b><br>
        Cliente: <b>Secretaria de Estado de Governo e Gestão Estratégica</b><br>
        PI: <b>720/2023</b><br>
        Emissora: <b>TV Morena Campo Grande</b><br>
        Início: <b>01/04/2023</b><br>
        Final: <b>10/04/2023</b>
      </p>

      <h5 class="color-000000">TV MORENA CAMPO GRANDE – PI: 720/2023</h5>

      <table class="font-12 w-400 mb-20">
        <tr><td class="text-left b-0 p-0 font-weight-bold" style="padding-bottom:10px;">Dia 01/04/2023 (sábado)</td></tr>
        <tr><td class="text-left b-0 p-0 font-italic" style="padding-bottom:5px;">Previsão em mapa</td></tr>
        <tr><td class="text-left">MSTV 1ª Edição</td></tr>
        <tr><td class="text-left">Caldeirão</td></tr>
        <tr><td class="text-left b-0 p-0 font-italic" style="padding-bottom:5px;padding-top:5px;">Veiculado</td></tr>
        <tr><td class="text-left">MSTV 1ª Edição – 11:18</td></tr>
        <tr><td class="text-left">Caldeirão – 14:59</td></tr>
      </table>

      <table class="font-12 w-400 mb-20">
        <tr><td class="text-left b-0 p-0 font-weight-bold" style="padding-bottom:10px;">Dia 02/04/2023 (domingo)</td></tr>
        <tr><td class="text-left b-0 p-0 font-italic" style="padding-bottom:5px;">Previsão em mapa</td></tr>
        <tr><td class="text-left">Big Brother Brasil</td></tr>
        <tr><td class="text-left b-0 p-0 font-italic" style="padding-bottom:5px;padding-top:5px;">Veiculado</td></tr>
        <tr><td class="text-left">Big Brother Brasil – 23:10</td></tr>
      </table>

      <table class="font-12 w-400 mb-20">
        <tr><td class="text-left b-0 p-0 font-weight-bold" style="padding-bottom:10px;">Dia 03/04/2023 (segunda-feira)</td></tr>
        <tr><td class="text-left b-0 p-0 font-italic" style="padding-bottom:5px;">Previsão em mapa</td></tr>
        <tr><td class="text-left">Bom Dia MS</td></tr>
        <tr><td class="text-left">Jornal Nacional</td></tr>
        <tr><td class="text-left">Tela Quente</td></tr>        
        <tr><td class="text-left b-0 p-0 font-italic" style="padding-bottom:5px;padding-top:5px;">Veiculado</td></tr>
        <tr><td class="text-left">Bom Dia MS – 06:25</td></tr>
        <tr><td class="text-left">Jornal Nacional – 19:41</td></tr>
        <tr><td class="text-left">Tela Quente – 00:16</td></tr>
      </table>

      <table class="font-12 w-400 mb-20">
        <tr><td class="text-left b-0 p-0 font-weight-bold" style="padding-bottom:10px;">Dia 04/04/2023 (terça-feira)</td></tr>
        <tr><td class="text-left b-0 p-0 font-italic" style="padding-bottom:5px;">Previsão em mapa</td></tr>
        <tr><td class="text-left">Jornal Hoje</td></tr>
        <tr><td class="text-left">Big Brother Brasil</td></tr>
        <tr><td class="text-left b-0 p-0 font-italic" style="padding-bottom:5px;padding-top:5px;">Veiculado</td></tr>
        <tr><td class="text-left">Jornal Hoje – 13:24</td></tr>
        <tr><td class="text-left">Big Brother Brasil – 21:58</td></tr>
      </table>

      <table class="font-12 w-400 mb-20">
        <tr><td class="text-left b-0 p-0 font-weight-bold" style="padding-bottom:10px;">Dia 05/04/2023 (quarta-feira)</td></tr>
        <tr><td class="text-left b-0 p-0 font-italic" style="padding-bottom:5px;">Previsão em mapa</td></tr>
        <tr><td class="text-left">MSTV 1ª Edição</td></tr>
        <tr><td class="text-left">Novela I</td></tr>
        <tr><td class="text-left b-0 p-0 font-italic" style="padding-bottom:5px;padding-top:5px;">Veiculado</td></tr>
        <tr><td class="text-left">MSTV 1ª Edição – 11:28</td></tr>
        <tr><td class="text-left">Novela I – 17:33</td></tr>
      </table>
      
    </div>

  </div>
');
################################################################################

$mpdf->Output('certificado-techlex.pdf', 'I');
