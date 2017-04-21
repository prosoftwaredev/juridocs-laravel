<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use Response;
use App\Http\Controllers\Controller;

use App\Models\Document;

class DocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

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

    public function adddocument_ajax(Request $request) {

        $document_name = $_REQUEST['document_name'];
        $document_price = $_REQUEST['document_price'];
        $document_template = $_REQUEST['document_template'];

        Document::insert([
            'name' => $document_name,
            'price' => $document_price,
            'template' => $document_template
        ]);

        return Response::json(array(
            'success' => true
        ));
    }

}