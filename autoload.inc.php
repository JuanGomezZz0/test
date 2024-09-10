<?php
use Dompdf\Dompdf;

class GeneradorPDF {
  private $dompdf;

  public function __construct() {
    $this->dompdf = new Dompdf();
  }
  public function generarPDF($contenido, $nombreArchivo) {
    $this->dompdf->loadHtml($contenido);
    $this->dompdf->setPaper('A4', 'portrait');
    $this->dompdf->render();
    $pdf = $this->dompdf->output();

    file_put_contents($nombreArchivo, $pdf);
  }
}
?>