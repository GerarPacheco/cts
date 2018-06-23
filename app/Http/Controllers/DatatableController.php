<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use Illuminate\Support\Facades\Crypt;
use App\User;

class DatatableController extends Controller
{
    public function datatable($table)
    {   
        switch ($table) {
            case 'usuarios':
                return $this->usuarios();
                break;
            default:
                # code...
                break;
        }
    }

    private function usuarios(){
        $usuarios = User::all();
        return Datatables::of($usuarios)
            ->addColumn('action', function ($dato) {
                $editar = route('usuario.edit',[Crypt::Encrypt($dato->id)]);
                $ver = route('usuario.show',[Crypt::Encrypt($dato->id)]);
                $borrar = route('usuario.destroy',[Crypt::Encrypt($dato->id)]);
                return '
                    <span class="dropdown">
                        <a href="#" class="btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill" data-toggle="dropdown" aria-expanded="true">
                            <i class="la la-ellipsis-h"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="'.$ver.'"><i class="la la-eye"></i> Ver</a>
                            <a class="dropdown-item" href="'.$editar.'"><i class="la la-edit"></i> Editar</a>
                            <a class="dropdown-item delete" data-url="'.$borrar.'" href="#"><i class="la la-trash"></i> Eliminar</a>

                        </div>
                    </span>
                ';
            })   
        ->make(true);
    }
}
