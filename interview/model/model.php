<?php

class model
{

    public $con = "";
    public function __construct()
    {
        $this->con = new mysqli("localhost", "root", "", "manav");
        // echo "Inside Try";

    }
    public function insert($tbl, $data)
    {
        $col = implode(",", array_keys($data));
        $val = implode("','", $data);
        $SQL = "INSERT INTO $tbl($col)VALUE('$val')";
        // echo "<pre>";
        // print_r($SQL);
        $SQLEx = $this->con->query($SQL);
        if ($SQLEx > 0) {
            $Data["Msg"] = "Success";
            $Data["Data"] = 1;
            $Data["code"] = 1;
        } else {
            $Data["Msg"] = "Try again";
            $Data["Data"] = 0;
            $Data["code"] = 0;
        }
        return $Data;
    }
    public function select($tbl, $where = "")
    {

        $SQL = "SELECT * FROM $tbl";
        if ($where != "") {
            $SQL .= " WHERE ";
            foreach ($where as $key => $value) {
                $SQL .= "$key = '$value' AND ";
            }
            $SQL = rtrim($SQL, "AND ");
        }
        $SQLEx = $this->con->query($SQL);
        // echo "<pre>";
        // print_r($SQLEx);
        if ($SQLEx->num_rows > 0) {

            while ($fdata = $SQLEx->fetch_object()) {
                $fetchdata[] = $fdata;
                //    print_r($fetchdata);
            }
            $Data["Msg"] = "Success";
            $Data["Data"] = $fetchdata;
            $Data["code"] = 1;
        } else {
            $Data["Msg"] = "Try again";
            $Data["Data"] = 0;
            $Data["code"] = 0;
        }
        return $Data;
    }
    public function update($tbl, $data, $where)
    {
        $SQL = "UPDATE $tbl SET ";
        foreach ($data as $key => $value) {
            $SQL .= "$key = '$value' , ";
        }
        $SQL = rtrim($SQL, " ,");
        $SQL .= " WHERE ";
        foreach ($where as $key => $value) {
            $SQL .= "$key = '$value' AND ";
        }
        $SQL = rtrim($SQL, "AND ");

        // echo $SQL;

        $SQLEx = $this->con->query($SQL);

        if ($SQLEx > 0) {
            $Data["Msg"] = "Success";
            $Data["Data"] = 1;
            $Data["code"] = 1;
        } else {
            $Data["Msg"] = "Try again";
            $Data["Data"] = 0;
            $Data["code"] = 0;
        }
        return $Data;
    }
    public function delete($tbl,$where)
    {
        $SQL = "DELETE FROM $tbl";
        $SQL .= " WHERE ";
        foreach ($where as $key => $value) {
            $SQL .= "$key = '$value' AND ";
        }
        $SQL = rtrim($SQL, "AND ");

        // echo $SQL;

        $SQLEx = $this->con->query($SQL);

        if ($SQLEx > 0) {
            $Data["Msg"] = "Success";
            $Data["Data"] = 1;
            $Data["code"] = 1;
        } else {
            $Data["Msg"] = "Try again";
            $Data["Data"] = 0;
            $Data["code"] = 0;
        }
        return $Data;
    }
}
$model = new model;
