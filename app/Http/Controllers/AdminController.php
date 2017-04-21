<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Document;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function document()
    {
    	$documents = Document::get();

        return view('pages.admin.document.list', [
        	'documents' => $documents
        ]);

    }

    public function adddocument() {
    	return view('pages.admin.document.add');
    }

}
