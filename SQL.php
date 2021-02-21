<?php
abstract class SQL{
    public bool $connectionStatus;

    public function create(SQLQuery $query){}
    public function update(SQLQuery $query){}
    public function delete(SQLQuery $query){}
    protected function setParams(array $params){}
    public function Isconnect(){}

}

