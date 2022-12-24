<?php
date_default_timezone_set("Asia/Kolkata");

use Model as GlobalModel;

// trait manav
// {
//     public $dbConnection = "";
//     public function dbconnection()
//     {

//         $this->dbConnection = new mysqli("localhost", "root", "", "manav");
//     }
// }

class Model

{
    // use manav;
    public $dbConnection = "";
    public function __construct()
    {
        // $this->dbconnection();
        try {
            $this->dbConnection = new mysqli("localhost", "root", "", "manav");
        } catch (\Exception $e) {
            if (!file_exists("logs")) {
                mkdir("logs");
            }
            $Msg = PHP_EOL . "Error Message =>>" . $e->getMessage() . PHP_EOL;
            $Msg .= "Error Date Time =>>" . date("d-m-Y h:i:s A") . PHP_EOL;
            $file = 'logs/' . date("d_m_Y") . 'log.txt';
            file_put_contents($file, $Msg, FILE_APPEND);
            echo "Error in database connection";
            exit;
        }
        echo "<pre>";
        print_r($this->dbConnection);
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

        $SQLEx = $this->dbConnection->query($SQL);

        if ($SQLEx->num_rows > 0) {

            while ($fData = $SQLEx->fetch_object()) {
                $FetchData[] = $fData;
            }

            $Data["Msg"] = "Success";
            $Data["Data"] = $FetchData;
            $Data["code"] = 1;
        } else {
            $Data["Msg"] = "Try again";
            $Data["Data"] = 0;
            $Data["code"] = 0;
        }
        return $Data;
    }
    public function login($username, $pass)
    {

        $SQL = 'SELECT * FROM `user` WHERE (`username`="' . $username . '" OR `email`="' . $username . '" OR `mobile` = "' . $username . '" ) AND `password`="' . $pass . '"';

        $SQLEx = $this->dbConnection->query($SQL);

        if ($SQLEx->num_rows > 0) {

            while ($fData = $SQLEx->fetch_object()) {
                $FetchData[] = $fData;
            }
            $Data["Msg"] = "Success";
            $Data["Data"] = $FetchData;
            $Data["code"] = 1;
        } else {
            $Data["Msg"] = "Try again";
            $Data["Data"] = 0;
            $Data["code"] = 0;
        }
        return $Data;
    }
    public function insert($tbl, $data)
    {

        $clms = implode("`,`", array_keys($data));
        $vals = implode("','", $data);
        $SQL = "INSERT INTO `$tbl`(`$clms`) VALUES('$vals')";
        echo "<pre>";
        print_r($SQL);
        echo "</pre>";
        $SQLEx = $this->dbConnection->query($SQL);
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
    public function delete($tbl, $where)
    {

        $SQL = "DELETE  FROM $tbl";
        $SQL .= " WHERE ";
        foreach ($where as $key => $value) {
            $SQL .= "$key = $value AND ";
        }
        $SQL = rtrim($SQL, "AND ");

        $SQLEx = $this->dbConnection->query($SQL);

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
$Model = new Model;

$Model->select("user");
