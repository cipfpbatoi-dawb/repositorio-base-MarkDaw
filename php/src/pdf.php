<?php 
    require_once $_SERVER["DOCUMENT_ROOT"] . '/../vendor/autoload.php';
    use Dompdf\Dompdf;
    $dompdf = new Dompdf();

    $html = '<h1 style="color:red;">Test</h1>';
    $dompdf->loadHtml($html);
    $dompdf->setPaper('A4', 'portrait');
    $dompdf->render();

    $dompdf->stream("document.pdf", array("Attachment" => false));