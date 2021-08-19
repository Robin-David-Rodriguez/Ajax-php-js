<!DOCTYPE html>
<html>

<head>
    <title>PHP Jquery Ajax CRUD Example</title>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.js"></script>
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/js/bootstrap.min.js"></script>
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/twbs-pagination/1.3.1/jquery.twbsPagination.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.5/validator.min.js"></script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">
    <!--css local-->
    <link href="../css/navbarVertical.css" rel="stylesheet">
    <script type="text/javascript">
        var url = "http://localhost/jorge/Ajax-php-js/";
    </script>
    <script src="../js/item-ajax-poo.js"></script>
</head>

<body>


    <body>
        <div class="wrapper">
            <!-- Sidebar  -->
            <nav id="sidebar">
                <!--titulo de sidebar-->
                <div class="sidebar-header">
                    <h3>Ejercicios</h3>
                </div>

                  <!-- lista de links que va a contener la siderbar -->
                <ul class="list-unstyled components">
                <li>
                    <a href="../index.html">TAREA 1</a>
                </li>
                <li>
                    <!-- colocamos la funcion para que nos muestre que conexion va a tener --> 
                    <a href="../html/Tarea2.html" onclick="buscarPhp(1)">Tarea 2 PDO</a>
                </li>
                <li>
                    <a href="../html/Tarea2.html" onclick="buscarPhp(2)">Tarea 2 mysqli</a>
                </li>
                <li>
                    <a href="index.php">Crud mysqli</a>
                </li>
                <li>
                    <a href="indexPoo.php">Crud POO</a>
                </li>

                    <!--footer del navbar-->
                    <ul class="list-unstyled CTAs">

                    </ul>
            </nav>

            <!-- contenido de la pagina   -->
            <div id="content">
                <!--navbar de contenido -->
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="container-fluid">
                        <!--boton que activa al siderbar-->
                        <button type="button" id="sidebarCollapse" class="btn btn-info">
                            <i class="fas fa-align-left"></i>
                            <img id="iconoHamburguesa" src="../img/iconoHamburguesa.ico" alt="">
                        </button>
                </nav>
                <!--contenido del sitio web fuera de los navbars-->

                <div class="row">
                    <div class="col-lg-12 margin-tb">
                        <div class="pull-left">
                            <h2>PHP Jquery Ajax CRUD Example</h2>
                        </div>
                        <div class="pull-right">

                            <button type="button" class="btn btn-success" data-toggle="modal"
                                data-target="#create-item">
                                Create Item
                            </button>

                        </div>
                    </div>
                </div>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Description</th>
                            <th width="200px">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
                <ul id="pagination" class="pagination-sm"></ul>
                <!-- Create Item Modal -->
                <div class="modal fade" id="create-item" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                        aria-hidden="true">×</span></button>
                                <h4 class="modal-title" id="myModalLabel">Create Item</h4>
                            </div>
                            <div class="modal-body">
                                <form data-toggle="validator" action="api/create.php" method="POST">
                                    <div class="form-group">
                                        <label class="control-label" for="title">Title:</label>
                                        <input type="text" name="title" class="form-control"
                                            data-error="Please enter title." required />
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label" for="title">Description:</label>
                                        <textarea name="description" class="form-control"
                                            data-error="Please enter description." required></textarea>

                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="form-group">

                                        <button type="submit" class="btn crud-submit btn-success">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Edit Item Modal -->
                <div class="modal fade" id="edit-item" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                        aria-hidden="true">×</span></button>
                                <h4 class="modal-title" id="myModalLabel">Edit Item</h4>
                            </div>
                            <div class="modal-body">
                                <form data-toggle="validator" action="api/update.php" method="put">
                                    <input type="hidden" name="id" class="edit-id">
                                    <div class="form-group">

                                        <label class="control-label" for="title">Title:</label>
                                        <input type="text" name="title" class="form-control"
                                            data-error="Please enter title." required />

                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label" for="title">Description:</label>
                                        <textarea name="description" class="form-control"
                                            data-error="Please enter description." required></textarea>

                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-success crud-submit-edit">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
        <hr>
        <div class="row m-3">
            <div class="col-3 bg-light">
                <img class="img-fluid" src="../img/img-w3c.png" style="height: 60px;" alt="">
            </div>
            <div class="col-6 m-5">
                <center>
                    <p>©Robin David Rodriguez Bautista </p>
                </center>
            </div>
        </div>





        <!--local js-->
        <script src="../js/index.js"></script>
        <!-- Bootstrap js -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>
    </body>

</html>




</div>
</body>

</html>