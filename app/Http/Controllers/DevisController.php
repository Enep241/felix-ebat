<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use DB;
use PDF;

class DevisController extends Controller
{
    /**
     * Display the archive view
     * 
     * @return \Illuminate\View\View
     */
    public function store(Request $request)
    {
        # manually validating
        $validator = $request->validate([
            'object' => 'required|unique:devis,object_devis|max:255',
            'email' => 'email|required',
            'travaux' => 'required|string',
            'surface' => 'required|integer'
        ]);

        # persist devis in database
        $devis = \App\Models\Devis::create([
            'object_devis' => $request->input('object'),
            'total_net_ht' => 0,
            'tva' => 0,
            'email' => $request->input('email'),
            'user_id' => Auth::id()
        ]);
        
        # persist travaux in database
        $travaux = \App\Models\Travaux::create([
            'type_travaux' => $request->input('type_travail'),
            'types_ouvrages' => $request->input('travaux'),
            'materiel_primaire' => $request->input('materiel_primaire',''),
            'materiel_secondaire' => $request->input('materiel_secondaire'),
            'quantite_primaire' => $request->input('quantite_primaire',0),
            'quantite_secondaire' => $request->input('quantite_Secondaire',0),
            'nombre_mcarre' => $request->input('surface',0),
            'duree_estimee' => 0,
            'price_materiel_primaire' => 0,
            'devis_id' => $devis->getKey()
        ]);
        
        return redirect()->route('archive')
                        ->with('success','Nouveau devis enregistre');
    }

    /**
     * Show a specific devis
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        # catch the devis selected
        $devisToDetail = App\Models\Devis::find($id);
        if($devisToDetail) {
            return view('analyze', [
                'devis' => AppModels\Devis::findOrFail($id)
            ]);
        } else {
            return  Response::withStatus(404);
        }
    }

    public function pdfview(Request $request)
    {
        return view('pdfview');
    }

    public function pdfDownload(Request $request)
    {
        $items = DB::table("items")->get();
        view()->share('items',$items);
        if($request->has('download')){
        $pdf = PDF::loadView('pdfview');
            return $pdf->download('pdfview.pdf');
        }
        return view('download');
    }
}
