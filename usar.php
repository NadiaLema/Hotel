<li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div>
                        <?php

                        foreach($datosReserva as $dato){

                          $idhabitacion = $dato ->habitacion_idhabitacion;
                          $fecha_ingreso = $dato-> fecha_ingreso;
                          $fecha_salida = $dato-> fecha_salida;
                        ?>
                        <h6 class="my-0">Llegada: <span class="text-muted"><?php echo $dato-> fecha_ingreso ?></span></h6>
                        <h6 class="my-0">Salida: <span class="text-muted"><?php echo $dato-> fecha_salida ?></span></h6>
                        
                        <?php

                        }

                        ?>

                    </div>

                </li>



                <li class="list-group-item d-flex justify-content-between">
                    <span>Total días: </span>
                    <strong>
                      <?php

                          $totalDay = $bd->query("SELECT timestampdiff(DAY,'".$fecha_ingreso."','".$fecha_salida."') FROM reserva WHERE idreserva = '".$idreserva."'");
                          $datoDay = $totalDay ->fetch();
                          $arrayDay = array_unique($datoDay);
                          $datoDayConver = implode($arrayDay);



                          echo $datoDayConver;
                      ?>
                    </strong>
                </li>

                <li class="list-group-item d-flex justify-content-between">
                    <span>Total precio: </span>
                    <strong>$
                    <?php

                    $costo = $bd->query("SELECT precio FROM habitacion WHERE idhabitacion = '".$idhabitacion."'");
                    $datoCosto = $costo ->fetch();
                    $arrayCosto = array_unique($datoCosto);
                    $datoCostoConver = implode($arrayCosto);

                    echo ($datoCostoConver * $datoDayConver);
                    ?>
                    </strong>
                    
                </li>