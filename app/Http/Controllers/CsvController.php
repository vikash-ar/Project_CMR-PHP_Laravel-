<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CsvController extends Controller
{
    public function download_lifting_plan(){
        $output = '';
        $output .= 'col1,col2,col3';
        $output .="\n";
        header("Content-type: text/csv");
        header("Content-Disposition: attachment; filename=LiftingPlan.csv");
        header("Pragma: no-cache");
        header("Expires: 0");
        echo $output;
    }

}
