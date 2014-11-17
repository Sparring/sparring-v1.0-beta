<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
function pdf_create($html, $filename='', $stream=TRUE) 
{
    require_once("dompdf/dompdf_config.inc.php");
    
    $dompdf = new DOMPDF();
    $dompdf->load_html($html);
    $dompdf->render();
    if ($stream) {
        $dompdf->stream($filename.".pdf", array('Attachment'=>1));
    } else {
        return $dompdf->output();
    }
}

function pdf_save_file($html, $filename, $file_to_save) 
{
    		require_once("dompdf/dompdf_config.inc.php");
			//define("DOMPDF_AUTOLOAD_PREPEND", true);
    
			$dompdf = new DOMPDF();
			$dompdf->load_html($html);    
			$dompdf->render();
			//$pdf = $dompdf->output();
			//save the pdf file on the server
			//write_file($file_to_save, $pdf);
			//$dompdf->stream($filename, array('Attachment'=>1));
			file_put_contents($file_to_save, $dompdf->output()); 
			//print the pdf file to the screen for saving
		    header('Content-Description: File Transfer');
			header('Content-Type: application/pdf');
			header('Content-Disposition: attachment; filename='.$filename.'');
			header('Pragma: public');
			header('Content-Length: ' . filesize($file_to_save));
			//readfile($file_to_save);
			//exit;
}