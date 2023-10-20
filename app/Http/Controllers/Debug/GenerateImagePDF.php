<?php

namespace App\Http\Controllers\Debug;

use App\Http\Controllers\Controller;

class GenerateImagePDF extends Controller {
    
    public function debug()
    {
        $this->genPdfThumbnail('dokumen/regulasi/2.pdf','image/kakek.jpg');
    }

    private function genPdfThumbnail($source, $target)
	{
		$source = realpath($source);
		$im     = new \Imagick($source.'[0]'); // 0-first page, 1-second page
		$im->setImageColorspace(255); // prevent image colors from inverting
		$im->setImageResolution(12800,800);
		$im->setimageformat("jpeg");
		$im->writeimage($target);
		$im->clear();
		$im->destroy();
	}
}