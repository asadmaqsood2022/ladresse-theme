<?php
declare(strict_types=1);
// include autoloader
require_once 'dompdf/autoload.inc.php';
// reference the Dompdf namespace
use Dompdf\Dompdf;

use chillerlan\QRCode\QRCode;
use chillerlan\QRCode\QROptions;

require_once('vendor/autoload.php');

$entry_id = '1117';
$entry = GFAPI::get_entry( $entry_id );

$options = new QROptions(
  [
    'eccLevel' => QRCode::ECC_L,
    'outputType' => QRCode::OUTPUT_MARKUP_SVG,
    'version' => 5,
  ]
);

$qrcodedata = $entry[1]." ".$entry[2]."\n";
$qrcodedata .= $entry[3]."\n";
$qrcode = (new QRCode($options))->render($qrcodedata);

$html = "<table border='1' style='border-collapse: collapse;text-align:center; max-width: 1000px; margin: AUTO;'>
        <tr>
            <th><img src='/wp-content/themes/ladresse/assets/images/banner.png'></th>
        </tr>
        <tr>
              <td> <h2>$entry[1] $entry[2]</h2></td>
        </tr>
        <tr>
            <td><h3>Acheteur</h3></td>
        </tr>
        <tr>
      <td>  <img src='$qrcode' alt='QR Code' width='200' height='200'></td>
    </tr>";

 echo $html;
 //exit;
// instantiate and use the dompdf class
$dompdf = new Dompdf();
$dompdf->loadHtml($html);

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'landscape');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream();
?>
