<?php
function verificar_login($user,$pass,&$resp)
{
    $sql = "select * from usuarios where usuarios = '$user' and password = '$pass'";
    $rec = mysql_query($sql);
    $contador = 0;
    while($row = mysql_fetch_object($rec))
    {
        $contador++;
        $resp = $row;
    }
    if($count == 1)
    {
        return 1;
    }
    else
    {
        return 0;
    }
}
?>