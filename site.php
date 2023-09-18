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
  'format' => 'A4-L',
  'mode' => 'utf-8',
];

$mpdf = new \Mpdf\Mpdf($mpdfConfig);

$mpdf->AddPageByArray(['margin-left' => 0, 'margin-right' => 0, 'margin-top' => 0, 'margin-bottom' => 0]);
$mpdf->SetTitle('TempoReal - Checking de mídia | Relatório Site');
$mpdf->WriteHTML(file_get_contents(__DIR__ . '/css/styles.css'), \Mpdf\HTMLParserMode::HEADER_CSS);

// ################################################################################
// // PAGINA 1
// ################################################################################
$header = '<div class="header"><table class="header-table"><tr class="header-tr"><td class="header-td text-left"><img src="' . __DIR__ . '/images/logo-3.png" width="155px" /></td><td class="header-td header-td-text-1 text-left">Praça: <b>Campo Grande - MS</b><br>Agência: <b>Agilitá Propaganda</b><br>Campanha: <b>Dengue - abril</b><br>Cliente: <b>Secretaria de Estado de Governo e Gestão Estratégica</b><br>PI: <b>Conforme descrito em cada veículo</b></td><td class="header-td header-td-text-2 text-left">Site: <b>Conforme descrito em cada veículo</b><br>Início: <b>01/04/2023</b><br>Final: <b>04/04/2023</b><br>Formato: <b>Conforme descrito em cada veículo</b></td></tr></table></div>';
$footer = '<div class="footer font-10 mr-95">Agilitá Propaganda – Dengue – abril<br>Página {PAGENO} de {nb}<br>CNPJ: 11.252.791/0001-63 – Rua: Dr. Zerbini, 850 – Sala 06 - Chácara Cachoeira<br>Campo Grande - MS - (67) 3027-6070 / 99635-0777</div>';
$mpdf->SetHTMLHeader($header);
$mpdf->SetHTMLFooter($footer);
$mpdf->WriteHTML('
  <div class="all">
    <div class="page-cover">
      <table>
          <tr>
              <td class="text-center">                
                <img src="' . __DIR__ . '/images/logo-3.png" width="510px" height="263.27px" />
              </td>
          </tr>
      </table>  
    </div>
  </div>
');
// ################################################################################


for ($i=1; $i <= 1; $i++) { 
################################################################################
// PAGINA 2
################################################################################
if($i>1) $mpdf->AddPage();
$mpdf->WriteHTML('
  <div class="all">
    <div class="content">
      <div class="mt-35">
        <h2 class="text-left font-18 color-AFCB07">Relatório Site: Dengue - Abril</h2>

        <div class="table-container w-1025 font-10">
          <div class="table-left">
            
            <div class="table-container mb-10">
              <div class="table-internal-left">
                <table class="font-12" style="width:100%;">
                  <tr>
                    <td colspan="2" class="text-left b-0 font-weight-bold">Dia 01/04/2023 (Sábado) - Previsão em Mapa</td>
                  </tr>
                  <tr>
                    <td class="bg-f1f1f1 font-weight-bold">Emissora</td>
                    <td class="bg-f1f1f1 font-weight-bold">Programa</td>
                  </tr>
                  <tr>
                    <td>Site MORENA</td>
                    <td>MSSite 1ª Edição</td>
                  </tr>
                  <tr>
                    <td>Site MORENA</td>
                    <td>Caldeirão</td>
                  </tr>
                </table>
              </div>
              <div class="table-internal-right">
                <table class="font-12" style="width:100%;">
                  <tr>
                    <td colspan="2" class="text-left b-0 font-weight-bold">Veiculado</td>
                  </tr>
                  <tr>
                    <td class="bg-f1f1f1 font-weight-bold">Programa</td>
                    <td class="bg-f1f1f1 font-weight-bold">Horário</td>
                  </tr>
                  <tr>
                    <td>MSSite 1ª Edição</td>
                    <td>11:18</td>
                  </tr>
                  <tr>
                    <td>Caldeirão</td>
                    <td>14:59</td>
                  </tr>
                </table>
              </div>
            </div>

            <div class="table-container mb-10">
              <div class="table-internal-left">
                <table class="font-12" style="width:100%;">
                  <tr>
                    <td colspan="2" class="text-left b-0 font-weight-bold">Dia 01/04/2023 (Sábado) - Previsão em Mapa</td>
                  </tr>
                  <tr>
                    <td class="bg-f1f1f1 font-weight-bold">Emissora</td>
                    <td class="bg-f1f1f1 font-weight-bold">Programa</td>
                  </tr>
                  <tr>
                    <td>Site MORENA</td>
                    <td>MSSite 1ª Edição</td>
                  </tr>
                  <tr>
                    <td>Site MORENA</td>
                    <td>Caldeirão</td>
                  </tr>
                </table>
              </div>
              <div class="table-internal-right">
                <table class="font-12" style="width:100%;">
                  <tr>
                    <td colspan="2" class="text-left b-0 font-weight-bold">Veiculado</td>
                  </tr>
                  <tr>
                    <td class="bg-f1f1f1 font-weight-bold">Programa</td>
                    <td class="bg-f1f1f1 font-weight-bold">Horário</td>
                  </tr>
                  <tr>
                    <td>MSSite 1ª Edição</td>
                    <td>11:18</td>
                  </tr>
                  <tr>
                    <td>Caldeirão</td>
                    <td>14:59</td>
                  </tr>
                </table>
              </div>
            </div>

            <div class="table-container mb-10">
              <div class="table-internal-left">
                <table class="font-12" style="width:100%;">
                  <tr>
                    <td colspan="2" class="text-left b-0 font-weight-bold">Dia 01/04/2023 (Sábado) - Previsão em Mapa</td>
                  </tr>
                  <tr>
                    <td class="bg-f1f1f1 font-weight-bold">Emissora</td>
                    <td class="bg-f1f1f1 font-weight-bold">Programa</td>
                  </tr>
                  <tr>
                    <td>Site MORENA</td>
                    <td>MSSite 1ª Edição</td>
                  </tr>
                  <tr>
                    <td>Site MORENA</td>
                    <td>Caldeirão</td>
                  </tr>
                </table>
              </div>
              <div class="table-internal-right">
                <table class="font-12" style="width:100%;">
                  <tr>
                    <td colspan="2" class="text-left b-0 font-weight-bold">Veiculado</td>
                  </tr>
                  <tr>
                    <td class="bg-f1f1f1 font-weight-bold">Programa</td>
                    <td class="bg-f1f1f1 font-weight-bold">Horário</td>
                  </tr>
                  <tr>
                    <td>MSSite 1ª Edição</td>
                    <td>11:18</td>
                  </tr>
                  <tr>
                    <td>Caldeirão</td>
                    <td>14:59</td>
                  </tr>
                </table>
              </div>
            </div>

            <div class="table-container mb-10">
              <div class="table-internal-left">
                <table class="font-12" style="width:100%;">
                  <tr>
                    <td colspan="2" class="text-left b-0 font-weight-bold">Dia 01/04/2023 (Sábado) - Previsão em Mapa</td>
                  </tr>
                  <tr>
                    <td class="bg-f1f1f1 font-weight-bold">Emissora</td>
                    <td class="bg-f1f1f1 font-weight-bold">Programa</td>
                  </tr>
                  <tr>
                    <td>Site MORENA</td>
                    <td>MSSite 1ª Edição</td>
                  </tr>
                  <tr>
                    <td>Site MORENA</td>
                    <td>Caldeirão</td>
                  </tr>
                </table>
              </div>
              <div class="table-internal-right">
                <table class="font-12" style="width:100%;">
                  <tr>
                    <td colspan="2" class="text-left b-0 font-weight-bold">Veiculado</td>
                  </tr>
                  <tr>
                    <td class="bg-f1f1f1 font-weight-bold">Programa</td>
                    <td class="bg-f1f1f1 font-weight-bold">Horário</td>
                  </tr>
                  <tr>
                    <td>MSSite 1ª Edição</td>
                    <td>11:18</td>
                  </tr>
                  <tr>
                    <td>Caldeirão</td>
                    <td>14:59</td>
                  </tr>
                </table>
              </div>
            </div>

            <div class="table-container mb-10">
              <div class="table-internal-left">
                <table class="font-12" style="width:100%;">
                  <tr>
                    <td colspan="2" class="text-left b-0 font-weight-bold">Dia 01/04/2023 (Sábado) - Previsão em Mapa</td>
                  </tr>
                  <tr>
                    <td class="bg-f1f1f1 font-weight-bold">Emissora</td>
                    <td class="bg-f1f1f1 font-weight-bold">Programa</td>
                  </tr>
                  <tr>
                    <td>Site MORENA</td>
                    <td>MSSite 1ª Edição</td>
                  </tr>
                  <tr>
                    <td>Site MORENA</td>
                    <td>Caldeirão</td>
                  </tr>
                </table>
              </div>
              <div class="table-internal-right">
                <table class="font-12" style="width:100%;">
                  <tr>
                    <td colspan="2" class="text-left b-0 font-weight-bold">Veiculado</td>
                  </tr>
                  <tr>
                    <td class="bg-f1f1f1 font-weight-bold">Programa</td>
                    <td class="bg-f1f1f1 font-weight-bold">Horário</td>
                  </tr>
                  <tr>
                    <td>MSSite 1ª Edição</td>
                    <td>11:18</td>
                  </tr>
                  <tr>
                    <td>Caldeirão</td>
                    <td>14:59</td>
                  </tr>
                </table>
              </div>
            </div>

          </div>

          <div class="table-right">

            <div class="table-container mb-10">
              <div class="table-internal-left">
                <table class="font-12" style="width:100%;">
                  <tr>
                    <td colspan="2" class="text-left b-0 font-weight-bold">Dia 01/04/2023 (Sábado) - Previsão em Mapa</td>
                  </tr>
                  <tr>
                    <td class="bg-f1f1f1 font-weight-bold">Emissora</td>
                    <td class="bg-f1f1f1 font-weight-bold">Programa</td>
                  </tr>
                  <tr>
                    <td>Site MORENA</td>
                    <td>MSSite 1ª Edição</td>
                  </tr>
                  <tr>
                    <td>Site MORENA</td>
                    <td>Caldeirão</td>
                  </tr>
                </table>
              </div>
              <div class="table-internal-right">
                <table class="font-12" style="width:100%;">
                  <tr>
                    <td colspan="2" class="text-left b-0 font-weight-bold">Veiculado</td>
                  </tr>
                  <tr>
                    <td class="bg-f1f1f1 font-weight-bold">Programa</td>
                    <td class="bg-f1f1f1 font-weight-bold">Horário</td>
                  </tr>
                  <tr>
                    <td>MSSite 1ª Edição</td>
                    <td>11:18</td>
                  </tr>
                  <tr>
                    <td>Caldeirão</td>
                    <td>14:59</td>
                  </tr>
                </table>
              </div>
            </div>

            <div class="table-container mb-10">
              <div class="table-internal-left">
                <table class="font-12" style="width:100%;">
                  <tr>
                    <td colspan="2" class="text-left b-0 font-weight-bold">Dia 01/04/2023 (Sábado) - Previsão em Mapa</td>
                  </tr>
                  <tr>
                    <td class="bg-f1f1f1 font-weight-bold">Emissora</td>
                    <td class="bg-f1f1f1 font-weight-bold">Programa</td>
                  </tr>
                  <tr>
                    <td>Site MORENA</td>
                    <td>MSSite 1ª Edição</td>
                  </tr>
                  <tr>
                    <td>Site MORENA</td>
                    <td>Caldeirão</td>
                  </tr>
                </table>
              </div>
              <div class="table-internal-right">
                <table class="font-12" style="width:100%;">
                  <tr>
                    <td colspan="2" class="text-left b-0 font-weight-bold">Veiculado</td>
                  </tr>
                  <tr>
                    <td class="bg-f1f1f1 font-weight-bold">Programa</td>
                    <td class="bg-f1f1f1 font-weight-bold">Horário</td>
                  </tr>
                  <tr>
                    <td>MSSite 1ª Edição</td>
                    <td>11:18</td>
                  </tr>
                  <tr>
                    <td>Caldeirão</td>
                    <td>14:59</td>
                  </tr>
                </table>
              </div>
            </div>

            <div class="table-container mb-10">
              <div class="table-internal-left">
                <table class="font-12" style="width:100%;">
                  <tr>
                    <td colspan="2" class="text-left b-0 font-weight-bold">Dia 01/04/2023 (Sábado) - Previsão em Mapa</td>
                  </tr>
                  <tr>
                    <td class="bg-f1f1f1 font-weight-bold">Emissora</td>
                    <td class="bg-f1f1f1 font-weight-bold">Programa</td>
                  </tr>
                  <tr>
                    <td>Site MORENA</td>
                    <td>MSSite 1ª Edição</td>
                  </tr>
                  <tr>
                    <td>Site MORENA</td>
                    <td>Caldeirão</td>
                  </tr>
                </table>
              </div>
              <div class="table-internal-right">
                <table class="font-12" style="width:100%;">
                  <tr>
                    <td colspan="2" class="text-left b-0 font-weight-bold">Veiculado</td>
                  </tr>
                  <tr>
                    <td class="bg-f1f1f1 font-weight-bold">Programa</td>
                    <td class="bg-f1f1f1 font-weight-bold">Horário</td>
                  </tr>
                  <tr>
                    <td>MSSite 1ª Edição</td>
                    <td>11:18</td>
                  </tr>
                  <tr>
                    <td>Caldeirão</td>
                    <td>14:59</td>
                  </tr>
                </table>
              </div>
            </div>

            <div class="table-container mb-10">
              <div class="table-internal-left">
                <table class="font-12" style="width:100%;">
                  <tr>
                    <td colspan="2" class="text-left b-0 font-weight-bold">Dia 01/04/2023 (Sábado) - Previsão em Mapa</td>
                  </tr>
                  <tr>
                    <td class="bg-f1f1f1 font-weight-bold">Emissora</td>
                    <td class="bg-f1f1f1 font-weight-bold">Programa</td>
                  </tr>
                  <tr>
                    <td>Site MORENA</td>
                    <td>MSSite 1ª Edição</td>
                  </tr>
                  <tr>
                    <td>Site MORENA</td>
                    <td>Caldeirão</td>
                  </tr>
                </table>
              </div>
              <div class="table-internal-right">
                <table class="font-12" style="width:100%;">
                  <tr>
                    <td colspan="2" class="text-left b-0 font-weight-bold">Veiculado</td>
                  </tr>
                  <tr>
                    <td class="bg-f1f1f1 font-weight-bold">Programa</td>
                    <td class="bg-f1f1f1 font-weight-bold">Horário</td>
                  </tr>
                  <tr>
                    <td>MSSite 1ª Edição</td>
                    <td>11:18</td>
                  </tr>
                  <tr>
                    <td>Caldeirão</td>
                    <td>14:59</td>
                  </tr>
                </table>
              </div>
            </div>

            <div class="table-container mb-10">
              <div class="table-internal-left">
                <table class="font-12" style="width:100%;">
                  <tr>
                    <td colspan="2" class="text-left b-0 font-weight-bold">Dia 01/04/2023 (Sábado) - Previsão em Mapa</td>
                  </tr>
                  <tr>
                    <td class="bg-f1f1f1 font-weight-bold">Emissora</td>
                    <td class="bg-f1f1f1 font-weight-bold">Programa</td>
                  </tr>
                  <tr>
                    <td>Site MORENA</td>
                    <td>MSSite 1ª Edição</td>
                  </tr>
                  <tr>
                    <td>Site MORENA</td>
                    <td>Caldeirão</td>
                  </tr>
                </table>
              </div>
              <div class="table-internal-right">
                <table class="font-12" style="width:100%;">
                  <tr>
                    <td colspan="2" class="text-left b-0 font-weight-bold">Veiculado</td>
                  </tr>
                  <tr>
                    <td class="bg-f1f1f1 font-weight-bold">Programa</td>
                    <td class="bg-f1f1f1 font-weight-bold">Horário</td>
                  </tr>
                  <tr>
                    <td>MSSite 1ª Edição</td>
                    <td>11:18</td>
                  </tr>
                  <tr>
                    <td>Caldeirão</td>
                    <td>14:59</td>
                  </tr>
                </table>
              </div>
            </div>

          </div>
        </div>    
        
      </div>
    </div>
  </div>
');
################################################################################
}

$mpdf->Output('temporeal-checking-de-midia-relatorio-Site.pdf', 'I');
