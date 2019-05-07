<?php
class Practicante
{
    private $dni;
    private $apePaterno;
    private $apeMaterno;
    private $nombre;
    private $fecNacimiento;
    private $sexo;
    private $codTurno_fk;
    private $descripcion;

    public function Practicante(){
        
    }
    public function actualizar_practicandos($dni,$apeMaterno,$apePaterno,$nombre,$fecNacimiento,$sexo,$codTurno_fk,$descripcion){
        $cn=new cn();
        $mysqli=$cn->cn;
        $stm=$mysqli->prepare("update practicantes set apeMaterno=?, apePaterno=?, nombres=?, fecNacimiento=?, sexo=?, codTurno_fk=?, descripcion=? where dni=?");
        $stm->bind_param("ssssssss",$apeMaterno,$apePaterno,$nombre,$fecNacimiento,$sexo,$codTurno_fk,$descripcion,$dni);
        $stm->execute();
        if($stm->affected_rows>0){
            $res="altualiso";
        }else{
            $res=$stm->error;
        }
        return $res;
    }
    public function listar_practicantespordni($dni){
        $cn=new cn();
        $mysqli=$cn->cn;
        $stm=$mysqli->prepare("SELECT * from practicantes where dni=?");
        $stm->bind_param("s",$dni);
        $stm->execute();
        $array=[];
        if($stm->error==''){
            $rs = $stm->get_result();
            while($myrow = $rs->fetch_assoc()){
                $array[]=$myrow;
            }
            $resultado=$array;
        }else{
            $resultado = $stm->error;
        }        
        $pjson=json_encode($resultado);
        return $pjson;
    }

    public function litartardanzas(){
        $cn=new cn();
        $mysqli=$cn->cn;
        $stm=$mysqli->prepare("select codPracticante_fk,horEntrada from detalle_asistencia");       
        $stm->execute();
        $array=[];
        if($stm->error==''){
            $rs =  $stm->get_result();
            while ($myrow = $rs->fetch_assoc()){
                $array[]=$myrow;
            }
            $resultado = $array;
        }else{
            $resultado = $stm->error;
        }
        return $resultado;
    }
    public function insertar($dni,$apeMaterno,$apePaterno,$nombre,$fecNacimiento,$sexo,$codTurno_fk,$descripcion){
        $cn=new Cn();
        $mysqli=$cn->cn;
        $stm=$mysqli->prepare("call registarpracticantes(?,?,?,?,?,?,?,?)");
        $stm->bind_param("ssssssss",$dni,$apeMaterno,$apePaterno,$nombre,$fecNacimiento,$sexo,$codTurno_fk,$descripcion);
        $stm->execute();
        if($stm->affected_rows>0){
            $res="registro";
        }else{
            $res=$stm->error;
        }
        return $res;
        
    }
    public function eliminar($dni){
        $cn=new Cn();
        $mysqli=$cn->cn;
        $stm=$mysqli->prepare("DELETE from practicantes where dni = ?");
        $stm->bind_param("s",$dni);
        $stm->execute();
        $rs=$stm->get_result();
        if(isset($stm->error)){
            echo $stm->error;
        }
        return "bien";
    }
    public function listar_m(){
        $cn=new Cn();
        $mysqli=$cn->cn;
        $stm=$mysqli->prepare("call listarPracticantes()");
        $stm->execute();
        $array=[];
        if($stm->error==''){
            $rs = $stm->get_result();
            while ($myrow = $rs->fetch_assoc()){
                $array[]=$myrow;
            }
            $resultado = $array;
        }else{
            $resultado = $stm->error;
        }
        $json = json_encode($resultado);

        return $json;
        // return $resultado;
    }
    public function verPracticantes(){
        $cn=new Cn();
        $mysqli=$cn->cn;
        $stm=$mysqli->prepare("call listaAlumnos()");
        /* QUERY */
        $stm->execute();
        $rs=$stm->get_result();
        $array=[];
        while ($myrow = $rs->fetch_assoc()) {
            $array[]=$myrow;
        }
        return $array;
    }
    public function marcarAsistencia($accion){
        $cn=new Cn();
        $mysqli=$cn->cn;
        $stm=$mysqli->prepare("call marcarAsistencia(?,?)");
        $stm->bind_param("ss",$this->dni,$accion);
        $stm->execute();
        $rs=$stm->get_result();
        if(isset($stm->error)){
            echo $stm->error;
        }
        return true;
    }
    public function HorarioDia(){
        $cn=new Cn();
        $mysqli=$cn->cn;
        $stm=$mysqli->prepare("call horario_dia()");
        $stm->execute();
        $rs=$stm->get_result();
        $array=[];
        while ($myrow = $rs->fetch_assoc()) {
            $array[]=$myrow;
        }
        $json=json_encode($array,JSON_FORCE_OBJECT);
        return $json;
    }
    public function verificarAsistencia(){
        $cn=new Cn();
        $mysqli=$cn->cn;
        $stm=$mysqli->prepare("call verificar_asistencia($this->dni);");
        $stm->execute();
        $rs=$stm->get_result();
        $myrow = $rs->fetch_assoc();
        $array=[
            "entrada"=>"",
            "salida"=>"",
            "fecha" =>""
        ];
        if($rs->num_rows>0){
            if($myrow['conIngreso']==1){
                $array['entrada']="<button class='btn btn-default active col disabled' data-action='disable'>Ya Registró entrada</button>";
            }elseif($myrow['conIngreso']==0){
                $array['entrada']="<button class='btn btn-default active col ' data-action='enable'>Registrar Entrada</button>";
            }
            if($myrow['conSalida']==1){
                $array['salida']="<button class='btn btn-default active col disabled' data-action='disable'>Ya Registró salida</button>";
            }elseif($myrow['conSalida']==0){
                $array['salida']="<button class='btn btn-default active col ' data-action='enable'>Registrar salida</button>";
            }
            if(isset($myrow['fecha'])){
                $array["fecha"]=$myrow['fecha'];
            }
        }
            #print_r($rs->num_rows);
            $json=json_encode($array,JSON_FORCE_OBJECT);
            return $json;
    }

    /**
     * Get the value of dni
     */ 
    public function getDni()
    {
        return $this->dni;
    }

    /**
     * Set the value of dni
     *
     * @return  self
     */ 
    public function setDni($dni)
    {
        $this->dni = $dni;

        return $this;
    }
}
