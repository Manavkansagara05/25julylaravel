<?php

use LDAP\Result;

class model
{

    public $con = "";
    public function __construct()
    {
        $this->con = new mysqli("localhost", "root", "", "20ajax");
    }
    public function select($tbl)
    {
        $SQL = "SELECT * FROM $tbl";
        $SQLEX = $this->con->query($SQL);

        if ($SQLEX->num_rows > 0) {
            while ($fdata = $SQLEX->fetch_object()) {
                $fetchdata[] = $fdata;
            }

            return $fetchdata;
        }
    }

    public function select_join($tbl, $join_data)
    {
        $SQL = "SELECT * FROM $tbl";
        foreach ($join_data as $jkey => $jvalue) {
            $SQL .= " JOIN $jkey ON $jvalue ";
        }
        // echo "<pre>";
        // echo $SQL;
        // exit;
        $SQLEX = $this->con->query($SQL);

        if ($SQLEX->num_rows > 0) {
            while ($fdata = $SQLEX->fetch_object()) {
                $fetchdata[] = $fdata;
            }

            return $fetchdata;
        }
    }
    public function insertproduct($data)
    {
        $productname = $data['productname'];
        $category = $data['category'];
        $price = $data['price'];
        $color = $data['color'];
        $description = $data['description'];
        $manufacturerdate = $data['manufacturerdate'];
        $type = $data['type'];

        $query = "INSERT INTO  product VALUES('','$productname','$category','$price','$description','$manufacturerdate','$color','$type')";
        // echo"<pre>";
        // print_r($query);
        // exit;
        $data = mysqli_query($this->con, $query);
    }
    public function editproduct($data)
    {
        // echo"<pre>";
        // print_r($data);
        // exit;
        $id = $data['id'];
        $query = "SELECT * FROM product WHERE  productid = '$id'";
        $Data = mysqli_fetch_assoc(mysqli_query($this->con, $query));

        return $Data;
    }
    public function updatedata($data)
    {
        $id = $data['productid'];
        $productname = $data['productname'];
        $category = $data['category'];
        $price = $data['price'];
        $color = $data['color'];
        $description = $data['description'];
        $manufacturerdate = $data['manufacturerdate'];
        $type = $data['type'];

        $query = "UPDATE product SET productname ='$productname', category ='$category', price ='$price', description ='$description',manufacturerdate ='$manufacturerdate',color ='$color',type ='$type' WHERE productid='$id'";
        // echo"<pre>";
        // print_r($query);
        // exit;
        $data = mysqli_query($this->con, $query);

        return $data;
    }
    public function deletedata($data)
    {
        $id = $data['id'];
        $query = "DELETE FROM product WHERE productid = '$id'";

        $data = mysqli_query($this->con, $query);
        // echo"<pre>";
        // print_r($data);
        // exit;
        return $data;
    }
}

$model = new model;
