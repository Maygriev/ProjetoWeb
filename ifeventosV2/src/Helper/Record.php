<?php
namespace Ifnc\Tads\Helper;
use Exception;
use PDO;
use ReflectionClass;

abstract class Record
{
    public function store()
    {
        $rc = new ReflectionClass($this);
        $prepared = $this->prepare(get_object_vars($this));
        if(empty($this->id)){
            $columns = join(', ', array_keys($prepared));
            $values = join(', ', array_values($prepared));
            $sql = " INSERT INTO {$rc->getShortName()}({$columns})values({$values})";
        }else{
            $set =
                join(
                    ",",
                    array_map(
                        function($k,$v){return "$k = $v";},
                        array_keys($prepared),
                        array_values($prepared)
                    )
                );
            $sql = "UPDATE {$rc->getShortName()} SET {$set} WHERE id = {$this->id}";
        }

        if ($conn = Transaction::get()) {
            $result = $conn->exec($sql);
            $this->id = $conn->lastInsertId();
            echo $conn->lastInsertId();
            if(empty($this->id)){

            }
            return $result;
        }
        else {
            throw new Exception('Não há transação ativa!!');
        }

    }

    public static function insertFuncaoEvento($id, $id_user, $tipo){

        if($conn = Transaction::get()){

            if($id == null) {
                $id_evento = $conn->lastInsertId();

            }else{
                $id_evento = $id;
            }

            if($tipo == 1) {
                $sql = "INSERT INTO coordenador_evento VALUES ($id_user,$id_evento)";
            }else if($tipo == 3){
                $sql = "INSERT INTO coordenador_evento VALUES ($id_user,$id_evento)";
            }else if($tipo == 4){
                $sql = "INSERT INTO avaliador_evento VALUES ($id_user,$id_evento)";
            }

            $result = $conn->exec($sql);
            return $result;
        }
        else {
            throw new Exception('Não há transação ativa!!');
        }
    }

    public static function insertLog($motivo, $id){

        $sql = "INSERT INTO log_reprovacao(motivo, id_proposta) VALUES ('{$motivo}',{$id})";

        if($conn = Transaction::get()){
            $result = $conn->exec($sql);
            return $result;
        }
        else {
            throw new Exception('Não há transação ativa!!');
        }
    }


    public static function updateTypeUser($cpf,$tipo){

        $rc = new ReflectionClass(get_called_class());
        $sql = "UPDATE {$rc->getShortName()} SET id_tipo_usuario = {$tipo} WHERE cpf LIKE '{$cpf}'";

        if($conn = Transaction::get()){
            $result = $conn->exec($sql);
            return $result;
        }
        else {
            throw new Exception('Não há transação ativa!!');
        }
    }

    public static function updateProposta($avaliacao,$id){

        $rc = new ReflectionClass(get_called_class());
        $sql = "UPDATE {$rc->getShortName()} SET estado = '{$avaliacao}' WHERE id = {$id}";

        if($conn = Transaction::get()){
            $result = $conn->exec($sql);
            return $result;
        }
        else {
            throw new Exception('Não há transação ativa!!');
        }
    }

    public static function updateAtividade($descricao,$id){

        $rc = new ReflectionClass(get_called_class());
        $sql = "UPDATE {$rc->getShortName()} SET descricao = '{$descricao}' WHERE id = {$id}";

        if($conn = Transaction::get()){
            $result = $conn->exec($sql);
            return $result;
        }
        else {
            throw new Exception('Não há transação ativa!!');
        }
    }

    public static function find($id)
    {
        $rc = new ReflectionClass(get_called_class());
        $sql = "SELECT * FROM {$rc->getShortName()} WHERE id = $id";


        if ($conn = Transaction::get()) {
            $result = $conn->query($sql);
            return $result->fetchObject(get_called_class());
        }
        else {
            throw new Exception('Não há transação ativa!!');
        }

    }

    public static function findByCpf($cpf,$opcao)
    {
        $rc = new ReflectionClass(get_called_class());
        GLOBAL $sql;
        if ($opcao == 1){
            $sql = "SELECT u.*, tp.tipo FROM usuario u INNER JOIN tipo_usuario tp ON (tp.id = u.id_tipo_usuario) WHERE u.cpf LIKE '{$cpf}'";
        }else if($opcao == 2){
            $sql = "SELECT cpf FROM {$rc->getShortName()} WHERE cpf like '{$cpf}'";
        }

        if ($conn = Transaction::get()) {
            $result = $conn->query($sql);
            return $result->fetchObject(get_called_class());
        } else {
            throw new Exception('Não há transação ativa!!');
        }
    }

    public static function findByCondition($filter = TRUE)
    {
        $rc = new ReflectionClass(get_called_class());
        $sql = "SELECT * FROM {$rc->getShortName()} WHERE {$filter}";


        if ($conn = Transaction::get()) {
            $result = $conn->query($sql);
            return $result->fetchObject(get_called_class());
        }
        else {
            throw new Exception('Não há transação ativa!!');
        }

    }

    public static function all($filter = NULL)
    {
        $rc = new ReflectionClass(get_called_class());
        $sql = "SELECT * FROM {$rc->getShortName()}";
        if($filter){
            $sql .= " WHERE {$filter}";
        }

        if ($conn = Transaction::get()) {
            return $conn->query($sql)->fetchAll(PDO::FETCH_CLASS,get_called_class());
        }
        else {
            throw new Exception('Não há transação ativa!!');
        }

    }

    public static function allEventoCoordByCpf($cpf)
    {
        $rc = new ReflectionClass(get_called_class());
        $sql = "SELECT e.* FROM {$rc->getShortName()} e INNER JOIN coordenador_evento ce on (e.id = ce.id_evento) 
                WHERE ce.id_usuario = (SELECT id FROM usuario WHERE cpf like '{$cpf}')";

        if ($conn = Transaction::get()) {
            return $conn->query($sql)->fetchAll(PDO::FETCH_CLASS,get_called_class());
        }
        else {
            throw new Exception('Não há transação ativa!!');
        }

    }

    public static function allEventoAvaliadorByCpf($cpf)
    {
        $rc = new ReflectionClass(get_called_class());
        $sql = "SELECT e.* FROM {$rc->getShortName()} e INNER JOIN avaliador_evento ae on (e.id = ae.id_evento) 
                WHERE ae.id_usuario = (SELECT id FROM usuario WHERE cpf like '{$cpf}')";

        if ($conn = Transaction::get()) {
            return $conn->query($sql)->fetchAll(PDO::FETCH_CLASS,get_called_class());
        }
        else {
            throw new Exception('Não há transação ativa!!');
        }

    }

    public static function allAtiviade($tipo)
    {
        $rc = new ReflectionClass(get_called_class());
        $sql = "SELECT * FROM atividade WHERE tipo_atividade like '{$tipo}'";

        if ($conn = Transaction::get()) {
            return $conn->query($sql)->fetchAll(PDO::FETCH_CLASS,get_called_class());
        }
        else {
            throw new Exception('Não há transação ativa!!');
        }

    }

    public static function allPropostaByTipo($tipo)
    {

        $sql = "SELECT p.id, p.titulo, p.area_academica, p.descricao, p.max_participante, p.tipo_trabalho, p.nota_trabalho, p.data_requisitada, p.horario_requisitado, p.estado, p.id_atividade, e.titulo as titulo_evento 
                FROM proposta p INNER JOIN atividade a on (p.id_atividade = a.id) INNER JOIN evento e on (a.id_evento = e.id) where a.tipo_atividade like '{$tipo}'";

        if ($conn = Transaction::get()) {
            return $conn->query($sql)->fetchAll(PDO::FETCH_CLASS,get_called_class());
        }
        else {
            throw new Exception('Não há transação ativa!!');
        }

    }

    public static function findAtividadeById($id)
    {
        $rc = new ReflectionClass(get_called_class());
        $sql = "SELECT * FROM {$rc->getShortName()} WHERE id = '{$id}'";

        if ($conn = Transaction::get()) {
            $result = $conn->query($sql);
            return $result->fetchObject(get_called_class());
        } else {
            throw new Exception('Não há transação ativa!!');
        }
    }

    public static function deleteFuncaoEvento($cpf, $tipo)
    {
        $sql = "";
        if ($tipo == 3) {
            $sql = "DELETE FROM coordenador_evento WHERE id_usuario = (SELECT id FROM usuario WHERE cpf like '{$cpf}')";
        } else if ($tipo == 4) {
            $sql = "DELETE FROM avaliador_evento WHERE id_usuario = (SELECT id FROM usuario WHERE cpf like '{$cpf}')";
        }

        if ($conn = Transaction::get()) {
            return $conn->exec($sql);
        } else {
            throw new Exception('Não há transação ativa!!');
        }
    }

    public static function delete($id){
        $rc = new ReflectionClass(get_called_class());
        $sql = "DELETE FROM {$rc->getShortName()} WHERE id = $id";

        if ($conn = Transaction::get()) {
            return $conn->exec($sql);
        }
        else {
            throw new Exception('Não há transação ativa!!');
        }

    }

    public function prepare($data)
    {
        $prepared = array();
        foreach ($data as $key => $value) {
            if (is_scalar($value)&&$key!='id') {
                $prepared[$key] = $this->escape($value);
            }else if(is_object($value)){
                $prepared[$key] = $this->escape($value->id);
            }
        }
        return $prepared;
    }

    public function escape($value)
    {
        if (is_string($value) and (!empty($value))) {
            return "'$value'";
        }
        else if (is_bool($value)) {
            return $value ? 'TRUE': 'FALSE';
        }
        else if ($value!=='') {
            return $value;
        }
        else {
            return "NULL";
        }
    }
}
