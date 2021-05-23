<?php
function conectar(){
    $con=pg_connect("host=localhost port=5432 dbname=postgres user=postgres password=1601");

    if(isset($con)){
    }else{
    echo 'problemas';
    }
    return $con;

}
conectar();
?>