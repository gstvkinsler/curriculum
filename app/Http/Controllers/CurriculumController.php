<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Curriculum;

class CurriculumController extends Controller
{
    public function insertCurriculum (Request $request){
        
        $date = implode('-', array_reverse(explode('/', $request->birth_date)));
        $curriculum = new Curriculum;
        $curriculum->name = $request->name;
        $curriculum->birth_date = $date;
        $curriculum->e_mail = $request->e_mail;
        $curriculum->phone_number = $request->phone_number;
        $curriculum->adress = $request->address;
        $curriculum->description = $request->description;
        $curriculum->save();
        return redirect(route('listCurriculum'));
    }

    public function listCurriculum (Request $request){

        $curriculums = Curriculum::get();
        return view('listCurriculums', ['curriculums' => $curriculums]);
        
    }

    public function curriculum ($id){
        $curriculum = Curriculum::find($id);
        return view('curriculum', ['curriculum' => $curriculum]);

    }

}
