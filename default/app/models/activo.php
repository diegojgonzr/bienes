<?php
class Activo extends ActiveRecord
{
    public function initialize(){
        $this->belongs_to("rotulacion");
        $this->belongs_to("unidad_organizacional");
        $this->belongs_to("responsable");
        $this->belongs_to("grupo");
        $this->belongs_to("subgrupo");
    }
}

?>