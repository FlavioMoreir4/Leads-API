<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Franquia;

class FranquiaController extends Controller
{
    public function add(Request $request) {

        try {
            $franquia = new Franquia();

            $franquia->candidato = $request->candidato;
            $franquia->responsavel = $request->responsavel;
            $franquia->idade = $request->idade;
            $franquia->email = $request->email;
            $franquia->whatsapp = $request->whatsapp;
            $franquia->regiao = $request->regiao;
            $franquia->bairro = $request->bairro;
            $franquia->zona = $request->zona;
            $franquia->campanha = $request->campanha;

            $franquia->save();

            return ['retorno'=>'ok'];

        } catch(\Exception $erro) {

            return ['retorno'=>'erro', 'details'=>$erro];
        }
    }
}
