


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Aprincipal Bebê e Mamãe</title>
    <!-- Favicon icon -->
    <link rel="icon" type="../image/png" sizes="16x16" href="images/favicon.png">
    <!-- Pignose Calender -->
    <link href="../plugins/pg-calendar/css/pignose.calendar.min.css" rel="stylesheet">
    <!-- Chartist -->
    <link rel="stylesheet" href="../plugins/chartist/css/chartist.min.css">
    <link rel="stylesheet" href="../plugins/chartist-plugin-tooltips/css/chartist-plugin-tooltip.css">
    <!-- Custom Stylesheet -->
    <link href="../css/style.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/sweetalert2.css">
    <link rel="stylesheet" type="text/css" href="../css/sweetalert2.min.css">
    <link href="../css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css">
    <link href="../css/buttons.dataTables.min.css" rel="stylesheet" type="text/css">
    <link href="../css/select.dataTables.min.css" rel="stylesheet" type="text/css">
    <link href="../css/dataTables.bootstrap4.css" rel="stylesheet">
    <link href="../css/jquery.dataTables.min.css" rel="stylesheet">
    <script src="../control/main.js"></script>
  </head>

<body onload="Init()">
  <script>
  function Init(){
    listaDepartamentos();
  }
  </script>



          <?php
          require_once("menu2.php");
          ?>
        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">


            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-title">Cadastrar Departamentos</div>
                                <br>
                                <div class="basic-form">
                                    <form>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label>Nome do Departamento</label>
                                                <input id="nome" type="text" class="form-control" placeholder="Departamento">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Outras informações</label>
                                                <input id="outros" type="text" class="form-control" placeholder="Outras Informações">
                                            </div>
                                        </div>
                                        <button type="button" onclick="SalvaDepartamento()" class="btn btn-primary">Cadastrar Departamento</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>

            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-title">Gerenciar Departamentos</div>
                                <br>
                                <div class="basic-form">
                                  <div id="tableDepartamentos">
                                    <table id="table2" style="width:100%" class="table table-striped table-bordered" >
                                      <thead>
                                        <tr>
                                          <td>Id</td>
                                          <td>Nome</td>
                                          <td>Informações</td>
                                          <td>Editar</td>
                                          <td>Excluir</td>
                                        </tr>
                                      </thead>
                                      <tbody>
                                      </tbody>
                                    </table>
                                  </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
            <!-- #/ container -->
        </div>
        <!--**********************************
            Content body end
        ***********************************-->


        <!--**********************************
            Footer start
            ***********************************-->
            <div class="footer">
                <div class="copyright">
                    <p>Desenvolvido Por <a href="https://www.portalctech.com.br">CTECH</a> 2020</p>
                </div>
            </div>
        <!--**********************************
            Footer end
        ***********************************-->
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->

    <!-- Modal Login -->
    <div class="modal fade" id="modaledit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header text-center">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body mx-3" >
            <div class="md-form mb-5">
              <label data-error="wrong" data-success="right" for="defaultForm-email">Nome</label>
              <input type="text" id="nome2" class="form-control validate">
            </div>
            <div class="md-form mb-4">
              <label data-error="wrong" data-success="right" for="defaultForm-pass">Outros</label>
              <input type="text" id="outros" class="form-control validate">
            </div>
          </div>
          <input type="hidden" id="id" class="form-control validate">
          <div class="modal-footer d-flex justify-content-center">
            <button class="btn btn-primary" style="width:10rem" onclick="EditaDEP()">Editar</button>
          </div>'
        </div>
      </div>
    </div>



    <script src="../plugins/common/common.min.js"></script>
    <script src="../js/custom.min.js"></script>
    <script src="../js/settings.js"></script>
    <script src="../js/gleek.js"></script>
    <script src="../js/styleSwitcher.js"></script>
    <script src="../control/Departamento.js"></script>
    <script src="../js/sweetalert2.all.min.js"></script>
    <script src="../js/sweetalert2.all.js"></script>
    <script src="../js/sweetalert2.js"></script>
    <script src="../js/sweetalert2.min.js"></script>
    <script src="../js/jquery-3.3.1.js"></script>
    <script src="../js/jquery.dataTables.min.js"></script>
    <script src="../js/dataTables.buttons.min.js"></script>
    <script src="../js/buttons.flash.min.js"></script>
    <script src="../js/jszip.min.js"></script>
    <script src="../js/pdfmake.min.js"></script>
    <script src="../js/vfs_fonts.js"></script>
    <script src="../js/buttons.html5.min.js"></script>
    <script src="../js/buttons.print.min.js"></script>
    <script src="../js/bootstrap/js/bootstrap.min.js"></script>

</body>

</html>
