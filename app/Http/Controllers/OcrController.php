<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;
class OcrController extends Controller
{
    public function index()
    {
        return view('ocr.home');
    }
    public function extractText(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);
        $imagePath = $request->file('image')->store('images');
        $imageFullPath = storage_path('app/' . $imagePath);
        $process = new Process(['node', public_path('js/ocr.js'), $imageFullPath]);
        $process->run();
        if (!$process->isSuccessful()) {
            throw new ProcessFailedException($process);
        }
        $output = $process->getOutput();
        $errorOutput = $process->getErrorOutput();
        if ($errorOutput) {
            return response()->json([
                'error' => 'An error occurred during the OCR process.',
                'details' => $errorOutput,
            ], 500);
        }
        $output = trim($output);
        return response()->json([
            'text' => $output,
        ]);
    }
}
