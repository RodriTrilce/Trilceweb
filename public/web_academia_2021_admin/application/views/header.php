<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title> Panel Administrable Web </title>
        <link href="<?php echo $this->config->item('accet_url') ?>css/plugins/select2/select2.min.css" rel="stylesheet">
        <script src="<?php echo $this->config->item('accet_url') ?>js/jquery-2.1.1.min.js"></script>
         <script src="<?php echo $this->config->item('accet_url') ?>js/plugins/slimscroll/jquery.slimscroll.min.js"></script> 
        <script src="<?php echo $this->config->item('accet_url') ?>js/app.js"></script>
        <script src="<?php echo $this->config->item('accet_url') ?>js/plugins/pace/pace.min.js"></script>
        <link href="<?php echo $this->config->item('accet_url') ?>css/plugins/chosen/chosen.css" rel="stylesheet">
        <link href="<?php echo $this->config->item('accet_url') ?>css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo $this->config->item('accet_url') ?>font-awesome/css/font-awesome.css" rel="stylesheet">
        <!-- Toastr style -->
        <link href="<?php echo $this->config->item('accet_url') ?>css/plugins/toastr/toastr.min.css" rel="stylesheet">
        <!-- Gritter -->
        <link href="<?php echo $this->config->item('accet_url') ?>js/plugins/gritter/jquery.gritter.css" rel="stylesheet">
        <link href="<?php echo $this->config->item('accet_url') ?>css/animate.css" rel="stylesheet">
        <link href="<?php echo $this->config->item('accet_url') ?>css/style.css" rel="stylesheet">
        <link href="<?php echo $this->config->item('accet_url') ?>css/plugins/dataTables/datatables.min.css" rel="stylesheet">
        <!-- Date Picker-->
        <link href="<?php echo base_url() ?>accets/datepicker/datepicker.css" rel="stylesheet">
        <script src="<?php echo base_url() ?>accets/datepicker/bootstrap-datepicker.js"></script>
        <link href="<?php echo $this->config->item('accet_url') ?>css/plugins/clockpicker/clockpicker.css" rel="stylesheet">
        <script src="<?php echo $this->config->item('accet_url') ?>js/recordDel.js"></script>
        <link href="<?php echo $this->config->item('accet_url') ?>css/bootstrap-datetimepicker.css" rel="stylesheet">
    </head>
    <body>
        <div id="wrapper">
            <nav class="navbar-default navbar-static-side" role="navigation">
                <div class="sidebar-collapse">
                    <ul class="nav metismenu" id="side-menu">
                        <li class="nav-header">
                            <div class="dropdown profile-element">
                                <span>
                                    <center>
                                        <h2>
                                            <b>
        <script language="JavaScript1.2">
            var message = "DASHBOARD"
            var neonbasecolor = "gray"
            var neontextcolor = "white"
            var flashspeed = 150  //in milliseconds
            ///No need to edit below this line/////
            var n = 0
            if (document.all || document.getElementById) 
            {
                document.write('<font color="' + neonbasecolor + '">')
                for (m = 0; m < message.length; m++)
                    document.write('<span id="neonlight' + m + '">' + message.charAt(m) + '</span>')
                document.write('</font>')
            } 
            else
            document.write(message)
            function crossrefaa(number) 
            {
                var crossobj = document.all ? eval("document.all.neonlight" + number) : document.getElementById("neonlight" + number)
                return crossobj
            }
            function neonaa() 
            {
                //Change all letters to base color
                if (n == 0) {
                    for (m = 0; m < message.length; m++)
                        //eval("document.all.neonlight"+m).style.color=neonbasecolor
                        crossrefaa(m).style.color = neonbasecolor
                }
                //cycle through and change individual letters to neon color
                crossrefaa(n).style.color = neontextcolor
                if (n < message.length - 1)
                    n++
                else {
                    n = 0
                    clearInterval(flashing)
                    setTimeout("beginneonaa();", 1500)
                    return
                }
            }
            function beginneonaa() {
                if (document.all || document.getElementById)
                    flashing = setInterval("neonaa();", flashspeed)
            }
            beginneonaa();
        </script>
        <script>
            function set_common_delete(id, table_name)
            {
                $("#set_commondel_id").val(id);
                $("#table_name").val(table_name);
            }

            function delete_return()
            {
                del_id = $("#set_commondel_id").val();
                table_name = $("#table_name").val();
                $.ajax({
                    url: "<?php echo base_url(); ?>admin/" + table_name + "/delete/" + del_id,
                    data: "id=" + del_id + "&table_name=" + table_name+"&<?php echo $this->security->get_csrf_token_name(); ?>="+'<?php echo $this->security->get_csrf_hash(); ?>',
                    type: "post",
                    success: function (result)
                    {
                        if (result.trim() == "success")
                        {
                            $('#commonDelete').modal('toggle');
                            $("#hide" + del_id).hide();
                        }
                    },
                    error: function (output)
                    {
                    }
                });
            }
        </script>
                                            </b>
                                        </h2>
                                    </center>
                                </span>
                                <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                    <span class="clear"> 
                                        <span class="block m-t-xs">
                                            <strong class="font-bold">
                                                <!-- TRADE TEAMS --> 
                                            </strong>
                                        </span>
                                </a>
                            </div>
                            <div class="logo-element">
                                CI
                            </div>
                        </li>
                <!-- BO : left nav  -->
                <?php
                $contr = $this->uri->segment(2);
                $action = $this->uri->segment(3);
                $actionNext = $this->uri->segment(4);
                if (!empty($action)) {
                    $module = $contr . '/' . $action;
                    if (!empty($actionNext)) {
                        $module = $contr . '/' . $action . '/' . $actionNext;
                    }
                } else {
                    $module = $contr;
                }
                $contrnew = $contr . '/' . $action;
                ?> 
                <!-- BO : dashboard -->
                <li  <?php if ($contr == '') { ?>class="active "<?php } ?>>
                    <a href="<?php echo base_url() . 'admin' ?>"><i class="fa fa-home"></i><span class="title">Dashboard</span>
                        <?php if ($module == '') { ?><span class="selected"></span><?php } ?>
                    </a>
                </li>
                <!-- EO : dashboard -->

                <!-- BO : Modules -->
                <li  <?php if ($contr == 'module') { ?>class="active "<?php } ?>  >
                    <a href="<?php echo base_url() ?>admin/module/add"><i class="fa fa-users"></i><span class="title">Generar Modulo</span>
                        <?php if ($contr == 'module') { ?><span class="selected"></span><?php } ?>   
                        <span class="arrow <?php if ($contr == 'module') { ?>open<?php } ?>"></span>
                    </a>
                </li>
                <!--  EO : Modules -->

				<!-- BO : Category -->

                <li <?php if($contr == 'category'){?>class="active "<?php } ?>  >
                    <a href="javascript:;"><i class="fa fa-users"></i><span class="title">Categoria</span>
                        <?php if($contr == 'category'){?><span class="selected"></span><?php } ?>
                      <span class="arrow <?php if($contr == 'category'){?>open<?php } ?>"></span>
                    </a>
                    <ul class="nav nav-second-level">
                      <li <?php if($contrnew == 'category/add'){?>class="active "<?php } ?>>
                        <a href="<?php echo base_url()?>admin/category/add"><i class="fa fa-angle-double-right">
                            </i>Agregar</a>
                      </li>
                      <li <?php if($contrnew == 'category/'){?>class="active"<?php } ?>>
                        <a href="<?php echo base_url()?>admin/category/index"><i class="fa fa-gear"></i>Gestionar</a>
                      </li>                       
                    </ul>
                </li>
                <!--  EO : Category -->

               <!-- BO : Lista_espera_academia -->

                <li <?php if($contr == 'lista_espera_academia'){?>class="active "<?php } ?>  >

                    <a href="javascript:;"><i class="fa fa-users"></i><span class="title">Inscripción Academia</span>

                        <?php if($contr == 'lista_espera_academia'){?><span class="selected"></span><?php } ?>

                      <span class="arrow <?php if($contr == 'lista_espera_academia'){?>open<?php } ?>"></span>

                    </a>

                    <ul class="nav nav-second-level">

                      <li <?php if($contrnew == 'lista_espera_academia/add'){?>class="active "<?php } ?>>

                        <a href="<?php echo base_url()?>admin/lista_espera_academia/add"><i class="fa fa-angle-double-right">

                            </i>Agregar</a>

                      </li>

                      <li <?php if($contrnew == 'lista_espera_academia/'){?>class="active"<?php } ?>>

                        <a href="<?php echo base_url()?>admin/lista_espera_academia/index"><i class="fa fa-gear"></i>Gestionar</a>

                      </li>                       

                    </ul>

                </li>

                <!--  EO : Lista_espera_academia -->



				<!-- BO : Estado -->

                <li <?php if($contr == 'estado'){?>class="active "<?php } ?>  >

                    <a href="javascript:;"><i class="fa fa-users"></i><span class="title">Estado</span>

                        <?php if($contr == 'estado'){?><span class="selected"></span><?php } ?>

                      <span class="arrow <?php if($contr == 'estado'){?>open<?php } ?>"></span>

                    </a>

                    <ul class="nav nav-second-level">

                      <li <?php if($contrnew == 'estado/add'){?>class="active "<?php } ?>>

                        <a href="<?php echo base_url()?>admin/estado/add"><i class="fa fa-angle-double-right">

                            </i>Agregar</a>

                      </li>

                      <li <?php if($contrnew == 'estado/'){?>class="active"<?php } ?>>

                        <a href="<?php echo base_url()?>admin/estado/index"><i class="fa fa-gear"></i>Gestionar</a>

                      </li>                       

                    </ul>

                </li>

                <!--  EO : Estado -->



               



				<!-- BO : Banner_home -->

                <li <?php if($contr == 'banner_home'){?>class="active "<?php } ?>  >

                    <a href="javascript:;"><i class="fa fa-users"></i><span class="title">Banner_home</span>

                        <?php if($contr == 'banner_home'){?><span class="selected"></span><?php } ?>

                      <span class="arrow <?php if($contr == 'banner_home'){?>open<?php } ?>"></span>

                    </a>

                    <ul class="nav nav-second-level">

                      <li <?php if($contrnew == 'banner_home/add'){?>class="active "<?php } ?>>

                        <a href="<?php echo base_url()?>admin/banner_home/add"><i class="fa fa-angle-double-right">

                            </i>Agregar</a>

                      </li>

                      <li <?php if($contrnew == 'banner_home/'){?>class="active"<?php } ?>>

                        <a href="<?php echo base_url()?>admin/banner_home/index"><i class="fa fa-gear"></i>Gestionar</a>

                      </li>                       

                    </ul>

                </li>

                <!--  EO : Banner_home -->



               



				<!-- BO : Ciclos_home -->

                <li <?php if($contr == 'ciclos_home'){?>class="active "<?php } ?>  >

                    <a href="javascript:;"><i class="fa fa-users"></i><span class="title">Ciclos_home</span>

                        <?php if($contr == 'ciclos_home'){?><span class="selected"></span><?php } ?>

                      <span class="arrow <?php if($contr == 'ciclos_home'){?>open<?php } ?>"></span>

                    </a>

                    <ul class="nav nav-second-level">

                      <li <?php if($contrnew == 'ciclos_home/add'){?>class="active "<?php } ?>>

                        <a href="<?php echo base_url()?>admin/ciclos_home/add"><i class="fa fa-angle-double-right">

                            </i>Agregar</a>

                      </li>

                      <li <?php if($contrnew == 'ciclos_home/'){?>class="active"<?php } ?>>

                        <a href="<?php echo base_url()?>admin/ciclos_home/index"><i class="fa fa-gear"></i>Gestionar</a>

                      </li>                       

                    </ul>

                </li>

                <!--  EO : Ciclos_home -->



               



				<!-- BO : Mejoropcion_home -->

                <li <?php if($contr == 'mejoropcion_home'){?>class="active "<?php } ?>  >

                    <a href="javascript:;"><i class="fa fa-users"></i><span class="title">Mejoropcion_home</span>

                        <?php if($contr == 'mejoropcion_home'){?><span class="selected"></span><?php } ?>

                      <span class="arrow <?php if($contr == 'mejoropcion_home'){?>open<?php } ?>"></span>

                    </a>

                    <ul class="nav nav-second-level">

                      <li <?php if($contrnew == 'mejoropcion_home/add'){?>class="active "<?php } ?>>

                        <a href="<?php echo base_url()?>admin/mejoropcion_home/add"><i class="fa fa-angle-double-right">

                            </i>Agregar</a>

                      </li>

                      <li <?php if($contrnew == 'mejoropcion_home/'){?>class="active"<?php } ?>>

                        <a href="<?php echo base_url()?>admin/mejoropcion_home/index"><i class="fa fa-gear"></i>Gestionar</a>

                      </li>                       

                    </ul>

                </li>

                <!--  EO : Mejoropcion_home -->



               



				<!-- BO : Opciones_mejoropcion_home -->

                <li <?php if($contr == 'opciones_mejoropcion_home'){?>class="active "<?php } ?>  >

                    <a href="javascript:;"><i class="fa fa-users"></i><span class="title">Opciones_mejoropcion_home</span>

                        <?php if($contr == 'opciones_mejoropcion_home'){?><span class="selected"></span><?php } ?>

                      <span class="arrow <?php if($contr == 'opciones_mejoropcion_home'){?>open<?php } ?>"></span>

                    </a>

                    <ul class="nav nav-second-level">

                      <li <?php if($contrnew == 'opciones_mejoropcion_home/add'){?>class="active "<?php } ?>>

                        <a href="<?php echo base_url()?>admin/opciones_mejoropcion_home/add"><i class="fa fa-angle-double-right">

                            </i>Agregar</a>

                      </li>

                      <li <?php if($contrnew == 'opciones_mejoropcion_home/'){?>class="active"<?php } ?>>

                        <a href="<?php echo base_url()?>admin/opciones_mejoropcion_home/index"><i class="fa fa-gear"></i>Gestionar</a>

                      </li>                       

                    </ul>

                </li>

                <!--  EO : Opciones_mejoropcion_home -->



               



				<!-- BO : Preparacion_home -->

                <li <?php if($contr == 'preparacion_home'){?>class="active "<?php } ?>  >

                    <a href="javascript:;"><i class="fa fa-users"></i><span class="title">Preparacion_home</span>

                        <?php if($contr == 'preparacion_home'){?><span class="selected"></span><?php } ?>

                      <span class="arrow <?php if($contr == 'preparacion_home'){?>open<?php } ?>"></span>

                    </a>

                    <ul class="nav nav-second-level">

                      <li <?php if($contrnew == 'preparacion_home/add'){?>class="active "<?php } ?>>

                        <a href="<?php echo base_url()?>admin/preparacion_home/add"><i class="fa fa-angle-double-right">

                            </i>Agregar</a>

                      </li>

                      <li <?php if($contrnew == 'preparacion_home/'){?>class="active"<?php } ?>>

                        <a href="<?php echo base_url()?>admin/preparacion_home/index"><i class="fa fa-gear"></i>Gestionar</a>

                      </li>                       

                    </ul>

                </li>

                <!--  EO : Preparacion_home -->



               



				<!-- BO : Herramientas_home -->

                <li <?php if($contr == 'herramientas_home'){?>class="active "<?php } ?>  >

                    <a href="javascript:;"><i class="fa fa-users"></i><span class="title">Herramientas_home</span>

                        <?php if($contr == 'herramientas_home'){?><span class="selected"></span><?php } ?>

                      <span class="arrow <?php if($contr == 'herramientas_home'){?>open<?php } ?>"></span>

                    </a>

                    <ul class="nav nav-second-level">

                      <li <?php if($contrnew == 'herramientas_home/add'){?>class="active "<?php } ?>>

                        <a href="<?php echo base_url()?>admin/herramientas_home/add"><i class="fa fa-angle-double-right">

                            </i>Agregar</a>

                      </li>

                      <li <?php if($contrnew == 'herramientas_home/'){?>class="active"<?php } ?>>

                        <a href="<?php echo base_url()?>admin/herramientas_home/index"><i class="fa fa-gear"></i>Gestionar</a>

                      </li>                       

                    </ul>

                </li>

                <!--  EO : Herramientas_home -->



               



				<!-- BO : Resultados_home -->

                <li <?php if($contr == 'resultados_home'){?>class="active "<?php } ?>  >

                    <a href="javascript:;"><i class="fa fa-users"></i><span class="title">Resultados_home</span>

                        <?php if($contr == 'resultados_home'){?><span class="selected"></span><?php } ?>

                      <span class="arrow <?php if($contr == 'resultados_home'){?>open<?php } ?>"></span>

                    </a>

                    <ul class="nav nav-second-level">

                      <li <?php if($contrnew == 'resultados_home/add'){?>class="active "<?php } ?>>

                        <a href="<?php echo base_url()?>admin/resultados_home/add"><i class="fa fa-angle-double-right">

                            </i>Agregar</a>

                      </li>

                      <li <?php if($contrnew == 'resultados_home/'){?>class="active"<?php } ?>>

                        <a href="<?php echo base_url()?>admin/resultados_home/index"><i class="fa fa-gear"></i>Gestionar</a>

                      </li>                       

                    </ul>

                </li>

                <!--  EO : Resultados_home -->



               



				<!-- BO : Banner_uni_anual -->

                <li <?php if($contr == 'banner_uni_anual'){?>class="active "<?php } ?>  >

                    <a href="javascript:;"><i class="fa fa-users"></i><span class="title">Banner_uni_anual</span>

                        <?php if($contr == 'banner_uni_anual'){?><span class="selected"></span><?php } ?>

                      <span class="arrow <?php if($contr == 'banner_uni_anual'){?>open<?php } ?>"></span>

                    </a>

                    <ul class="nav nav-second-level">

                      <li <?php if($contrnew == 'banner_uni_anual/add'){?>class="active "<?php } ?>>

                        <a href="<?php echo base_url()?>admin/banner_uni_anual/add"><i class="fa fa-angle-double-right">

                            </i>Agregar</a>

                      </li>

                      <li <?php if($contrnew == 'banner_uni_anual/'){?>class="active"<?php } ?>>

                        <a href="<?php echo base_url()?>admin/banner_uni_anual/index"><i class="fa fa-gear"></i>Gestionar</a>

                      </li>                       

                    </ul>

                </li>

                <!--  EO : Banner_uni_anual -->



               



				<!-- BO : Ciclo_uni_anual -->

                <li <?php if($contr == 'ciclo_uni_anual'){?>class="active "<?php } ?>  >

                    <a href="javascript:;"><i class="fa fa-users"></i><span class="title">Ciclo_uni_anual</span>

                        <?php if($contr == 'ciclo_uni_anual'){?><span class="selected"></span><?php } ?>

                      <span class="arrow <?php if($contr == 'ciclo_uni_anual'){?>open<?php } ?>"></span>

                    </a>

                    <ul class="nav nav-second-level">

                      <li <?php if($contrnew == 'ciclo_uni_anual/add'){?>class="active "<?php } ?>>

                        <a href="<?php echo base_url()?>admin/ciclo_uni_anual/add"><i class="fa fa-angle-double-right">

                            </i>Agregar</a>

                      </li>

                      <li <?php if($contrnew == 'ciclo_uni_anual/'){?>class="active"<?php } ?>>

                        <a href="<?php echo base_url()?>admin/ciclo_uni_anual/index"><i class="fa fa-gear"></i>Gestionar</a>

                      </li>                       

                    </ul>

                </li>

                <!--  EO : Ciclo_uni_anual -->



               



				<!-- BO : Plan_uni_anual -->

                <li <?php if($contr == 'plan_uni_anual'){?>class="active "<?php } ?>  >

                    <a href="javascript:;"><i class="fa fa-users"></i><span class="title">Plan_uni_anual</span>

                        <?php if($contr == 'plan_uni_anual'){?><span class="selected"></span><?php } ?>

                      <span class="arrow <?php if($contr == 'plan_uni_anual'){?>open<?php } ?>"></span>

                    </a>

                    <ul class="nav nav-second-level">

                      <li <?php if($contrnew == 'plan_uni_anual/add'){?>class="active "<?php } ?>>

                        <a href="<?php echo base_url()?>admin/plan_uni_anual/add"><i class="fa fa-angle-double-right">

                            </i>Agregar</a>

                      </li>

                      <li <?php if($contrnew == 'plan_uni_anual/'){?>class="active"<?php } ?>>

                        <a href="<?php echo base_url()?>admin/plan_uni_anual/index"><i class="fa fa-gear"></i>Gestionar</a>

                      </li>                       

                    </ul>

                </li>

                <!--  EO : Plan_uni_anual -->



               



				<!-- BO : Detalles_uni_anual -->

                <li <?php if($contr == 'detalles_uni_anual'){?>class="active "<?php } ?>  >

                    <a href="javascript:;"><i class="fa fa-users"></i><span class="title">Detalles_uni_anual</span>

                        <?php if($contr == 'detalles_uni_anual'){?><span class="selected"></span><?php } ?>

                      <span class="arrow <?php if($contr == 'detalles_uni_anual'){?>open<?php } ?>"></span>

                    </a>

                    <ul class="nav nav-second-level">

                      <li <?php if($contrnew == 'detalles_uni_anual/add'){?>class="active "<?php } ?>>

                        <a href="<?php echo base_url()?>admin/detalles_uni_anual/add"><i class="fa fa-angle-double-right">

                            </i>Agregar</a>

                      </li>

                      <li <?php if($contrnew == 'detalles_uni_anual/'){?>class="active"<?php } ?>>

                        <a href="<?php echo base_url()?>admin/detalles_uni_anual/index"><i class="fa fa-gear"></i>Gestionar</a>

                      </li>                       

                    </ul>

                </li>

                <!--  EO : Detalles_uni_anual -->



               



				<!-- BO : Curso_uni_anual -->

                <li <?php if($contr == 'curso_uni_anual'){?>class="active "<?php } ?>  >

                    <a href="javascript:;"><i class="fa fa-users"></i><span class="title">Curso_uni_anual</span>

                        <?php if($contr == 'curso_uni_anual'){?><span class="selected"></span><?php } ?>

                      <span class="arrow <?php if($contr == 'curso_uni_anual'){?>open<?php } ?>"></span>

                    </a>

                    <ul class="nav nav-second-level">

                      <li <?php if($contrnew == 'curso_uni_anual/add'){?>class="active "<?php } ?>>

                        <a href="<?php echo base_url()?>admin/curso_uni_anual/add"><i class="fa fa-angle-double-right">

                            </i>Agregar</a>

                      </li>

                      <li <?php if($contrnew == 'curso_uni_anual/'){?>class="active"<?php } ?>>

                        <a href="<?php echo base_url()?>admin/curso_uni_anual/index"><i class="fa fa-gear"></i>Gestionar</a>

                      </li>                       

                    </ul>

                </li>

                <!--  EO : Curso_uni_anual -->



               



				<!-- BO : Beneficio_uni_anual -->

                <li <?php if($contr == 'beneficio_uni_anual'){?>class="active "<?php } ?>  >

                    <a href="javascript:;"><i class="fa fa-users"></i><span class="title">Beneficio_uni_anual</span>

                        <?php if($contr == 'beneficio_uni_anual'){?><span class="selected"></span><?php } ?>

                      <span class="arrow <?php if($contr == 'beneficio_uni_anual'){?>open<?php } ?>"></span>

                    </a>

                    <ul class="nav nav-second-level">

                      <li <?php if($contrnew == 'beneficio_uni_anual/add'){?>class="active "<?php } ?>>

                        <a href="<?php echo base_url()?>admin/beneficio_uni_anual/add"><i class="fa fa-angle-double-right">

                            </i>Agregar</a>

                      </li>

                      <li <?php if($contrnew == 'beneficio_uni_anual/'){?>class="active"<?php } ?>>

                        <a href="<?php echo base_url()?>admin/beneficio_uni_anual/index"><i class="fa fa-gear"></i>Gestionar</a>

                      </li>                       

                    </ul>

                </li>

                <!--  EO : Beneficio_uni_anual -->



               



				<!-- BO : Matricula_uni_anual -->

                <li <?php if($contr == 'matricula_uni_anual'){?>class="active "<?php } ?>  >

                    <a href="javascript:;"><i class="fa fa-users"></i><span class="title">Matricula_uni_anual</span>

                        <?php if($contr == 'matricula_uni_anual'){?><span class="selected"></span><?php } ?>

                      <span class="arrow <?php if($contr == 'matricula_uni_anual'){?>open<?php } ?>"></span>

                    </a>

                    <ul class="nav nav-second-level">

                      <li <?php if($contrnew == 'matricula_uni_anual/add'){?>class="active "<?php } ?>>

                        <a href="<?php echo base_url()?>admin/matricula_uni_anual/add"><i class="fa fa-angle-double-right">

                            </i>Agregar</a>

                      </li>

                      <li <?php if($contrnew == 'matricula_uni_anual/'){?>class="active"<?php } ?>>

                        <a href="<?php echo base_url()?>admin/matricula_uni_anual/index"><i class="fa fa-gear"></i>Gestionar</a>

                      </li>                       

                    </ul>

                </li>

                <!--  EO : Matricula_uni_anual -->


				<!-- BO : Guia_pago_bcp_app -->
                <li <?php if($contr == 'guia_pago_bcp_app'){?>class="active "<?php } ?>  >
                    <a href="javascript:;"><i class="fa fa-users"></i><span class="title">Guia_pago_bcp_app</span>
                        <?php if($contr == 'guia_pago_bcp_app'){?><span class="selected"></span><?php } ?>
                      <span class="arrow <?php if($contr == 'guia_pago_bcp_app'){?>open<?php } ?>"></span>
                    </a>
                    <ul class="nav nav-second-level">
                      <li <?php if($contrnew == 'guia_pago_bcp_app/'){?>class="active"<?php } ?>>
                        <a href="<?php echo base_url()?>admin/guia_pago_bcp_app/index"><i class="fa fa-gear"></i>Gestionar</a>
                      </li>                       
                    </ul>
                </li>

                <!--  EO : Guia_pago_bcp_app -->



               



				<!-- BO : Guia_pago_bcp_web -->
                <li <?php if($contr == 'guia_pago_bcp_web'){?>class="active "<?php } ?>  >
                    <a href="javascript:;"><i class="fa fa-users"></i><span class="title">Guia_pago_bcp_web</span>
                        <?php if($contr == 'guia_pago_bcp_web'){?><span class="selected"></span><?php } ?>
                      <span class="arrow <?php if($contr == 'guia_pago_bcp_web'){?>open<?php } ?>"></span>
                    </a>
                    <ul class="nav nav-second-level">
                      <li <?php if($contrnew == 'guia_pago_bcp_web/'){?>class="active"<?php } ?>>
                        <a href="<?php echo base_url()?>admin/guia_pago_bcp_web/index"><i class="fa fa-gear"></i>Gestionar</a>
                      </li>                       
                    </ul>
                </li>

                <!--  EO : Guia_pago_bcp_web -->



               



				<!-- BO : Guia_pago_bbva_app -->

                <li <?php if($contr == 'guia_pago_bbva_app'){?>class="active "<?php } ?>  >

                    <a href="javascript:;"><i class="fa fa-users"></i><span class="title">Guia_pago_bbva_app</span>

                        <?php if($contr == 'guia_pago_bbva_app'){?><span class="selected"></span><?php } ?>

                      <span class="arrow <?php if($contr == 'guia_pago_bbva_app'){?>open<?php } ?>"></span>

                    </a>

                    <ul class="nav nav-second-level">

                      <li <?php if($contrnew == 'guia_pago_bbva_app/'){?>class="active"<?php } ?>>

                        <a href="<?php echo base_url()?>admin/guia_pago_bbva_app/index"><i class="fa fa-gear"></i>Gestionar</a>

                      </li>                       

                    </ul>

                </li>

                <!--  EO : Guia_pago_bbva_app -->



               



				<!-- BO : Guia_pago_bbva_web -->

                <li <?php if($contr == 'guia_pago_bbva_web'){?>class="active "<?php } ?>  >

                    <a href="javascript:;"><i class="fa fa-users"></i><span class="title">Guia_pago_bbva_web</span>

                        <?php if($contr == 'guia_pago_bbva_web'){?><span class="selected"></span><?php } ?>

                      <span class="arrow <?php if($contr == 'guia_pago_bbva_web'){?>open<?php } ?>"></span>

                    </a>

                    <ul class="nav nav-second-level">

                      <li <?php if($contrnew == 'guia_pago_bbva_web/'){?>class="active"<?php } ?>>

                        <a href="<?php echo base_url()?>admin/guia_pago_bbva_web/index"><i class="fa fa-gear"></i>Gestionar</a>

                      </li>                       

                    </ul>

                </li>

                <!--  EO : Guia_pago_bbva_web -->



               



				<!-- BO : Guia_pago_scotiabank_app -->

                <li <?php if($contr == 'guia_pago_scotiabank_app'){?>class="active "<?php } ?>  >

                    <a href="javascript:;"><i class="fa fa-users"></i><span class="title">Guia_pago_scotiabank_app</span>

                        <?php if($contr == 'guia_pago_scotiabank_app'){?><span class="selected"></span><?php } ?>

                      <span class="arrow <?php if($contr == 'guia_pago_scotiabank_app'){?>open<?php } ?>"></span>

                    </a>

                    <ul class="nav nav-second-level">

                      <li <?php if($contrnew == 'guia_pago_scotiabank_app/'){?>class="active"<?php } ?>>

                        <a href="<?php echo base_url()?>admin/guia_pago_scotiabank_app/index"><i class="fa fa-gear"></i>Gestionar</a>

                      </li>                       

                    </ul>

                </li>

                <!--  EO : Guia_pago_scotiabank_app -->



               



				<!-- BO : Guia_pago_scotiabank_web -->

                <li <?php if($contr == 'guia_pago_scotiabank_web'){?>class="active "<?php } ?>  >

                    <a href="javascript:;"><i class="fa fa-users"></i><span class="title">Guia_pago_scotiabank_web</span>

                        <?php if($contr == 'guia_pago_scotiabank_web'){?><span class="selected"></span><?php } ?>

                      <span class="arrow <?php if($contr == 'guia_pago_scotiabank_web'){?>open<?php } ?>"></span>

                    </a>

                    <ul class="nav nav-second-level">

                      <li <?php if($contrnew == 'guia_pago_scotiabank_web/'){?>class="active"<?php } ?>>

                        <a href="<?php echo base_url()?>admin/guia_pago_scotiabank_web/index"><i class="fa fa-gear"></i>Gestionar</a>

                      </li>                       

                    </ul>

                </li>

                <!--  EO : Guia_pago_scotiabank_web -->



               



				<!-- BO : Categoria_solucionarios -->

                <li <?php if($contr == 'categoria_solucionarios'){?>class="active "<?php } ?>  >

                    <a href="javascript:;"><i class="fa fa-users"></i><span class="title">Categoria_solucionarios</span>

                        <?php if($contr == 'categoria_solucionarios'){?><span class="selected"></span><?php } ?>

                      <span class="arrow <?php if($contr == 'categoria_solucionarios'){?>open<?php } ?>"></span>

                    </a>

                    <ul class="nav nav-second-level">

                      <li <?php if($contrnew == 'categoria_solucionarios/'){?>class="active"<?php } ?>>

                        <a href="<?php echo base_url()?>admin/categoria_solucionarios/index"><i class="fa fa-gear"></i>Gestionar</a>

                      </li>                       

                    </ul>

                </li>

                <!--  EO : Categoria_solucionarios -->



               



				<!-- BO : Subcategoria_solucionarios -->

                <li <?php if($contr == 'subcategoria_solucionarios'){?>class="active "<?php } ?>  >

                    <a href="javascript:;"><i class="fa fa-users"></i><span class="title">Subcategoria_solucionarios</span>

                        <?php if($contr == 'subcategoria_solucionarios'){?><span class="selected"></span><?php } ?>

                      <span class="arrow <?php if($contr == 'subcategoria_solucionarios'){?>open<?php } ?>"></span>

                    </a>

                    <ul class="nav nav-second-level">

                      <li <?php if($contrnew == 'subcategoria_solucionarios/'){?>class="active"<?php } ?>>

                        <a href="<?php echo base_url()?>admin/subcategoria_solucionarios/index"><i class="fa fa-gear"></i>Gestionar</a>

                      </li>                       

                    </ul>

                </li>

                <!--  EO : Subcategoria_solucionarios -->



               



				<!-- BO : Solucionarios -->

                <li <?php if($contr == 'solucionarios'){?>class="active "<?php } ?>  >

                    <a href="javascript:;"><i class="fa fa-users"></i><span class="title">Solucionarios</span>

                        <?php if($contr == 'solucionarios'){?><span class="selected"></span><?php } ?>

                      <span class="arrow <?php if($contr == 'solucionarios'){?>open<?php } ?>"></span>

                    </a>

                    <ul class="nav nav-second-level">

                      <li <?php if($contrnew == 'solucionarios/'){?>class="active"<?php } ?>>

                        <a href="<?php echo base_url()?>admin/solucionarios/index"><i class="fa fa-gear"></i>Gestionar</a>

                      </li>                       

                    </ul>

                </li>

                <!--  EO : Solucionarios -->



               <!--  @@@@@#####@@@@@ -->



                



                



                



                



                



                



                



                



                



                



                



                



                



                



                



                



                



                



                



                



                



                



                



                



                

                <li><a href="<?php echo $this->config->item('left_url') ?>password"><i class="fa fa-users"></i><span class="title">Cambiar Clave</span></a></li>
                <li><a href="<?php echo $this->config->item('left_url') ?>auth/logout"><i class="fa fa-users"></i><span class="title">Cerrar Sesión</span></a></li>
                    </ul>
                </div>
            </nav>
            <div id="page-wrapper" class="gray-bg dashbard-1">
                <div class="row border-bottom">
                    <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
                        <div class="navbar-header">
                            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
                        </div>
                        <ul class="nav navbar-top-links navbar-right">
                            <li>
                                <span class="m-r-sm text-muted welcome-message">Bienvenido <?php
                                    if (isset($username) and ! empty($username)) {
                                        echo $username;
                                    }
                                    ?> </span>
                            </li>
                            <li class="dropdown">
                                <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                    <span class="clear"> 
                                        <span class="text-muted text-xs block">
                                            <img src="<?php echo $this->config->item('accet_url') ?>img/user.png" class="img-circle" alt="User Image" width="20px">
                                        </span> 
                                    </span>
                                </a>
                                <span>
                                </span>
                                <ul class="dropdown-menu animated fadeInRight m-t-xs">
                                   <!-- <li><a href="<?php echo $this->config->item('left_url') ?>admin/profile/edit">Profile</a></li> -->
                                    <li><a href="<?php echo $this->config->item('left_url') ?>password">Cambiar Clave</a></li>
                                    <li class="divider"></li>
                                    <li><a href="<?php echo $this->config->item('left_url') ?>auth/logout">Cerrar Sesión</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
                <!-- Common Delete Popup  -->
                <div class="modal fade" id="commonDelete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <form action="<?php echo base_url() ?>welcome/delete_notification/" method="post">
                    <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Cerrar</span></button>
                                    <h4 class="modal-title" id="frm_title">Eliminar</h4>
                                </div>
                                <div class="modal-body" id="frm_body">
                                    ¿Realmente quieres eliminar?
                                    <input type="hidden" id="set_commondel_id">
                                    <input type="hidden" id="table_name">
                                </div>
                                <div class="modal-footer">
                                    <button style='margin-left:10px;' type="button" class="btn btn-primary col-sm-2 pull-right" id="frm_submit" onclick="delete_return();">Si</button>
                                    <button type="button" class="btn btn-danger col-sm-2 pull-right" data-dismiss="modal" id="frm_cancel">No</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- ./ Common Delete Popup /. -->