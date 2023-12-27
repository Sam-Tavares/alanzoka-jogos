<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jogo;
use App\Exports\JogoExport;
use Maatwebsite\Excel\Facades\Excel;

class JogosController extends Controller
{

    public function index(){
        $jogos_prog = Jogo::where('status_jogo','Programado')
        ->orderBy('data_i', 'desc')
        ->get();

        $jogos_lanc = Jogo::where('status_jogo','Lançamento')
        ->orderBy('data_i', 'asc')
        ->get();

        $ano = anoatual();
        $i_data = $ano.'-01-01';
        $f_data = $ano.'-12-31';
        $jogos_final = Jogo::where('status_jogo','Finalizado')
        ->where('data_f','>=', $i_data)
        ->where('data_f','<=', $f_data)
        ->orderBy('data_f', 'asc')
        ->get();
        return view('index',['jogos_prog'=>$jogos_prog, 'jogos_lanc'=>$jogos_lanc, 'jogos_final'=>$jogos_final, 'ano'=>$ano]);
    }

    public function programados(){

        $jogos = Jogo::where('status_jogo','Programado')
        ->orderBy('data_i', 'desc')
        ->get();
        return view('prog',['jogos'=>$jogos]);
    }

    public function lancamentos(){

        $jogos = Jogo::where('status_jogo','Lançamento')
        ->orderBy('data_i', 'asc')
        ->get();
        return view('lanca',['jogos'=>$jogos]);
    }

    public function finalizados($ano){

        $meses = array(
            1 => 'Janeiro',
            'Fevereiro',
            'Março',
            'Abril',
            'Maio',
            'Junho',
            'Julho',
            'Agosto',
            'Setembro',
            'Outubro',
            'Novembro',
            'Dezembro'
        );
        
        $i_data = $ano.'-01-01';
        $f_data = $ano.'-12-31';
        $jogos = Jogo::where('status_jogo','Finalizado')
        ->where('data_f','>=', $i_data)
        ->where('data_f','<=', $f_data)
        ->orderBy('data_f', 'asc')
        ->get();
        return view('final',['jogos'=>$jogos, 'meses'=>$meses, 'ano'=>$ano ]);
    }

    public function historico(){
        $jogos = Jogo::orderBy('nome_jogo', 'asc')
        ->get();
        return view('hist',['jogos'=>$jogos]);
    }

    public function cadastrar(){
        return view('cadastrar');
    }
    
    public function store(Request $request){
        if(isset($request->limpar_cad)){
            return redirect()->route('jogos-cadastrar');
        }else{
            Jogo::create($request->all());
            $msg = "Jogo cadastrado com sucesso";
            return view('cadastrar',['msg'=>$msg]);
        }
    }

    public function visualizar($id){
        $jogos = Jogo::where('id',$id)->first();
        return view('visualizar',['jogos'=>$jogos]);
    }

    public function editar($id){
        $jogos = Jogo::where('id',$id)->first();
        return view('editar',['jogos'=>$jogos]);
    }

    public function update(Request $request, $id){
    if(isset($request->limpar_cad)){
        return redirect()->route('jogos-editar',['id'=>$id]);
    }
    else{
        $data = [
            'nome_jogo'=> $request->nome_jogo,
            'tipo_jogo'=> $request->tipo_jogo,
            'categ_jogo'=> $request->categ_jogo,
            'dur_i'=> $request->dur_i,
            'dur_f'=> $request->dur_f,
            'data_i'=> $request->data_i,
            'data_f'=> $request->data_f,
            'obs_jogo'=> $request->obs_jogo,
            'status_jogo'=> $request->status_jogo
        ];
        Jogo::where('id',$id)->update($data);
        return redirect()->route('jogos-visualizar',['id'=>$id]);
        }
    }

    public function destroy($id){
        Jogo::where('id',$id)->delete();
        $msg = "Jogo excluído com sucesso";
        return view('exclui',['msg'=>$msg]);
    }

    public function ano(Request $request){
        $ano = $request->ano;
        return redirect()->route('jogos-finalizados',['ano'=>$ano]);
    }

    public function export() 
    {
        return Excel::download(new JogoExport, 'jogos.xlsx');
        redirect()->route('jogos-historico');
    }

    public function game(){
        return view('game/index');
    }
}
