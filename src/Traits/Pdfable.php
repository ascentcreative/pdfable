<?php
namespace AscentCreative\Pdfable\Traits;

use \PDF;

trait Pdfable {

    public function generatePDF(mixed $blades, $title, $opts=[], $cfg=[]) {

        if(!is_array($blades)) {
            $blades = [$blades];
        }

        $pdf = null;

        $data = [
            'model'=>$this
        ];
        $data = array_merge($data, $opts);
        
        $config = [
            'title' => $title,
            // 'margin_footer' => 5,
        ];
        $config = array_merge($config, $cfg);

        foreach($blades as $blade) {

            if(is_null($pdf)) {
                $pdf = PDF::loadView($blade, $data, [], $config);
                continue;
            }

            $pdf->getMpdf()->addPage();
            $pdf->getMpdf()->WriteHTML((string)view($blade, $data));

        }

        return $pdf;

    }

}