<?php

namespace isoft\Http\Controllers;

use isoft\Models\Empresa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use isoft\Http\Requests\RqEmpresaCrear;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;

class Empresas extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $emp=Auth::user()->empresas()->where('estado',true)->orderBy('created_at','desc')->paginate(3);
        $data = array('emp' => $emp );
        return view('empresas.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function crear()
    {
        return view('empresas.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function guardar(RqEmpresaCrear $request)
    {
        $emp=new Empresa;

        if ($request->hasFile('foto')) {
            $foto=Auth::user()->id.'_'.Carbon::now().'.'.$request->foto->extension();
            $path = $request->foto->storeAs('empresas', $foto,'public');
            $emp->foto=$foto;    
        }
        
        $emp->nombre=$request->nombre;
        $emp->propietario=$request->propietario;
        $emp->ruc=$request->ruc;
        $emp->direccion=$request->direccion;
        $emp->telefono=$request->telefono;
        $emp->celular=$request->celular;        
        $emp->email=$request->email;
        $emp->descripcion=$request->descripcion;
        $emp->user_id=Auth::id();
        $emp->save();

        $request->session()->flash('success','Empresa creado');
        return redirect()->route('misEmpresas');
    }

    /**
     * Display the specified resource.
     *
     * @param  \isoft\Models\Empresa  $empresa
     * @return \Illuminate\Http\Response
     */
    public function info($idE)
    {
        $empresa=Empresa::findOrFail($idE);
        if ($empresa->usuario->id==Auth::id()) {
            $data = array('e' => $empresa );
            return view('empresas.ver',$data);    
        }
        return abort(404);
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \isoft\Models\Empresa  $empresa
     * @return \Illuminate\Http\Response
     */
    public function editar(Empresa $empresa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \isoft\Models\Empresa  $empresa
     * @return \Illuminate\Http\Response
     */
    public function actualizar(Request $request)
    {
        $emp=Empresa::findOrFail($request->id);
        if ($emp->usuario->id==Auth::id()) {

            if ($request->hasFile('foto')) {
                Storage::disk('public')->delete('empresas/'.$emp->foto);
                $foto=Auth::user()->id.'_'.Carbon::now().'.'.$request->foto->extension();
                $path = $request->foto->storeAs('empresas', $foto,'public');
                
                $emp->foto=$foto;    
            }
            
            $emp->nombre=$request->nombre;
            $emp->propietario=$request->propietario;
            $emp->ruc=$request->ruc;
            $emp->direccion=$request->direccion;
            $emp->telefono=$request->telefono;
            $emp->celular=$request->celular;        
            $emp->email=$request->email;
            $emp->descripcion=$request->descripcion;
            $emp->user_id=Auth::id();
            $emp->save();

            $request->session()->flash('success','Empresa actualizado');
            return redirect()->route('infoEmpresa',$emp->id);
        }

        return abort(404);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \isoft\Models\Empresa  $empresa
     * @return \Illuminate\Http\Response
     */
    public function eliminar(Empresa $empresa)
    {
        //
    }
}
