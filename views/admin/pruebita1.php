<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <script src="../../materialize/js/jquery.js" type="text/javascript"></script>
        <title></title>
    </head>
    <body>
        <?php
//Get JSON from Automatic Api Rest
        $json = file_get_contents("http://localhost/admintemplate/util/api-rest/clientes.json");
//Decode JSON
        $json = json_decode($json);
        for ($i = 0; $i < count($json); $i++) {
            echo $json[$i]->nombre_completo ."  ".$json[$i]->telefono."<br> ";
        }
        ?>

</body>
</html>
