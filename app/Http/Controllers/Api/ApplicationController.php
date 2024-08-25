<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    public function index()
    {
        return Application::all();
    }

    public function destroy($id)
    {
        $application = Application::findOrFail($id);
        $application->delete();

        return response()->json(['message' => '削除が完了しました'], 200);
    }
}
