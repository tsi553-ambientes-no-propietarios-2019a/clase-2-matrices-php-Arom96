<?php
     $arr=array("Nombre"=>array("Nombre"=>"Carlos",
                                "Apellido"=>"Granda",
                                "Edad"=>32),
                "Apellido"=>array("Nombre"=>"Juan",
                                  "Apellido"=>"Martinez",
                                  "Edad"=>31),
                "Edad"=>array("Nombre"=>"María",
                              "Apellido"=>"Jimenez",
                              "Edad"=>22)
  );

?>


<body>

  <table width="100%" border="2">
  <tr>
  <th>Nombre</th>
  <th>Apellido</th>
  <th>Edad</th>
  </tr>
<?php
          foreach($arr as $key => $value){         
?>
  <tr>
      <?php foreach($value as $key=>$value){
?>
  <td>
<?php 
    echo $value;
?>
</td>
  <?php
}
?>
  </tr>
    <?php
}
?>
  </table>
</body>
