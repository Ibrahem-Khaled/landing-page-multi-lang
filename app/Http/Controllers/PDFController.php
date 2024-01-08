<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class PDFController extends Controller
{
    public function downloadPdf()
    {
        // Replace 'example.pdf' with the actual name of your PDF file
        $pdfFilePath = public_path('DanahProfileSA.pdf');

        // Ensure the file exists
        if (file_exists($pdfFilePath)) {
            // Trigger the download
            return Response::download($pdfFilePath, 'Danah.pdf');
        }

        // If the file doesn't exist, return a 404 response or handle it as needed
        return response()->json(['error' => 'File not found.'], 404);
    }
}
