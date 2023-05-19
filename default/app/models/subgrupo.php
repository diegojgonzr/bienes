<?php
class Subgrupo extends ActiveRecord
{

    function getByGrupo($idGrupo){
        return $this->find("grupo_id='$idGrupo'");
    }
    
}
?>