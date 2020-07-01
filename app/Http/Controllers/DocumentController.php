<?php

namespace App\Http\Controllers;

use App\Document;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $documents = DB::table('documents')->get();
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
}
