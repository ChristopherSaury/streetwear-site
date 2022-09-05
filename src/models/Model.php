<?php

class Model {
    public $db;

    public function __construct()
    {
        $this->db = Functions::connection();
    }

    public function sendQuery(string $request){
        $response = $this->db->query($request);
        if(!$response) echo "error Query";

        return $response;
    }

    public function prepareAndExecute(string $request, array $array_bind) {
        $stmt = $this->db->prepare($request);
        $stmt->execute($array_bind);

        if(!$stmt) echo "error prepare and execute";

        return $stmt;
    }


}