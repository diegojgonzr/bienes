<?php
class SubgrupoController extends ScaffoldController
{
    public $model="subgrupo";


    public function getSubgrupo(){
        //No es necesario el template
        View::template(null);
        //Carga la variable $grupo_id en la vista
        $this->grupo_id = Input::post('grupo_id');
    }
}
?>