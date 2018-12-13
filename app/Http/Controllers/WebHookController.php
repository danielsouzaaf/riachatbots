<?php

namespace RiaChatBots\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use RiaChatBots\Models\Agendamento;

class WebHookController extends Controller
{
    public function clinica(Request $request)
    {
        $asArray = json_decode($request->getContent(), true);
        $agendamento = $asArray['result']['contexts'][7]['parameters'];
        $criado = Agendamento::create($agendamento);

        return $criado;
    }

    public function listar(Request $request)
    {
        return view('visualizar', [
            'items' => Agendamento::all(),
        ]);
    }
}
