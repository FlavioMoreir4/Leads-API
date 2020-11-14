<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lead;

class LeadController extends Controller
{
    public function status(){
        return ['status' => 'ok'];
    }

    public function add(Request $request) {

        try {
            $lead = new Lead();

            $lead->candidato = $request->candidato;
            $lead->responsavel = $request->responsavel;
            $lead->idade = $request->idade;
            $lead->email = $request->email;
            $lead->whatsapp = $request->whatsapp;
            $lead->regiao = $request->regiao;
            $lead->bairro = $request->bairro;
            $lead->zona = $request->zona;
            $lead->campanha = $request->campanha;

            $lead->save();

            return ['retorno'=>'ok'];

        } catch(\Exception $erro) {

            return ['retorno'=>'erro', 'details'=>$erro];
        }
    }

    public function list() {

        $lead = Lead::all();

        return $lead;
    }

    public function select($id) {

        $lead = Lead::find($id);

        return $lead;
    }

    public function update(Request $request, $id) {

        try {

            $lead = Lead::find($id);

            $lead->candidato = $request->candidato;
            $lead->responsavel = $request->responsavel;
            $lead->idade = $request->idade;
            $lead->email = $request->email;
            $lead->whatsapp = $request->whatsapp;
            $lead->regiao = $request->regiao;
            $lead->bairro = $request->bairro;
            $lead->zona = $request->zona;
            $lead->campanha = $request->campanha;

            $lead->save();

            return ['retorno'=>'ok', 'data'=>$request->all()];

        } catch(\Exception $erro) {

            return ['retorno'=>'erro', 'details'=>$erro];
        }
    }

    public function delete($id) {

        try {

            $lead = Lead::find($id);

            $lead->delete();

            return ['retorno'=>'ok'];

        } catch(\Exception $erro) {

            return ['retorno'=>'erro', 'details'=>$erro];
        }
    }
}
