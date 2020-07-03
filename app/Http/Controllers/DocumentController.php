<?php

namespace App\Http\Controllers;

use App\Document;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;

class DocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $documents = Document::all();
        
        return view('onglets.documents',compact('documents'));
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function searchDoc(Request $request)
    {
        $from = request('startDate');
        $to = request('endDate');
        $doc_nature = request('documentNature');
        $documents = DB::table('documents')
            ->where('documentNature',$doc_nature)
            ->orWhereBetween('creationDate', [$from, $to])
            ->get();
        //dd($documents);
        return view('onglets.documents',['documents' => $documents]);
    }
    /**
     * Download File
     */
    public function show($id) {
        //dd("here");
        $document = Document::find($id);
        //dd($document);


        $file = public_path(). "/download/Documents/doc1.pdf";

        $headers = array(
            'Content-Type: application/pdf',
          );

        return Response::download($file, 'doc1.pdf', $headers);
    }
}
