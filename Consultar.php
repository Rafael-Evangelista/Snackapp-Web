<?php
include_once("conexao.php");
    $result_tasks = "SELECT * FROM spp_tasks";
    $link = DBConnect();
	$resultado_tasks = mysqli_query($link, $result_tasks);
	
?>
    <!DOCTYPE html>
    <html lang="pt-br">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="imagens/voxus_logo.png">
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">
        <link href="css/signin.css" rel="stylesheet">
        <script src="js/ie-emulation-modes-warning.js"></script>

    </head>

    <body>
        <?php include 'navbar.php';?>
        <div class="container theme-showcase" role="main">
            <div class="page-header">
                <h1>Listar Tasks</h1>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nome da Tasks</th>
                                <th>Descrição</th>
                                <th>Arquivo</th>
                                <th>Ação</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while($rows_tasks = mysqli_fetch_assoc($resultado_tasks)){ ?>
                            <tr>
                                <td>
                                    <?php echo $rows_tasks['codigo']; ?>
                                </td>
                                <td>
                                    <?php echo $rows_tasks['nome']; ?>
                                </td>
                                <td>
                                    <?php echo $rows_tasks['descricao']; ?>
                                </td>
                                <td>
                                    <?php echo $rows_tasks['arquivo']; ?>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-xs btn-warning" data-toggle="modal" data-target="#exampleModal" data-whatever="<?php echo $rows_tasks['codigo']; ?>" data-whatevernome="<?php echo $rows_tasks['nome']; ?>" data-whateverdescricao="<?php echo $rows_tasks['descricao']; ?>">Editar</button>
                                    <button type="button" class="btn btn-xs btn-danger" data-toggle="modal" data-target="#ExcluirModal" data-whatever="<?php echo $rows_tasks['codigo']; ?>">Apagar</button>
                                </td>
                            </tr>

                            <!-- Inicio Modal -->
                            <div class="modal fade" codigo="myModal<?php echo $rows_tasks['codigo']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title text-center" codigo="myModalLabel">
                                                <?php echo $rows_tasks['nome']; ?>
                                                <?php echo $rows_tasks['descricao']; ?>
                                            </h4>
                                        </div>
                                        <div class="modal-body">
                                            <p>
                                                <?php echo $rows_tasks['codigo']; ?>
                                            </p>
                                            <p>
                                                <?php echo $rows_tasks['nome']; ?>
                                            </p>
                                            <p>
                                                <?php echo $rows_tasks['descricao']; ?>
                                            </p>
                                            <p>
                                                <?php echo $rows_tasks['arquivo']; ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Fim Modal -->
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <form class="form-signin" name="loginform" method="post" action="administrativo.php">
            <button class="btn btn-lg btn-default btn-block" Onclick="administrativo.php">Voltar</button>
        </form>




        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="exampleModalLabel">Tasks</h4>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="http://localhost/Voxus/processa.php" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="recipient-name" class="control-label">Nome:</label>
                                <input name="nome" type="text" class="form-control" id="recipient-name">
                            </div>
                            <div class="form-group">
                                <label for="recipient-descricao" class="control-label">Descricao:</label>
                                <input name="descricao" type="text" class="form-control" id="recipient-descricao">
                            </div>

                            <input name="codigo" type="hidden" class="form-control" id="codigo-tasks" value="">

                            <button type="submit" class="btn btn-danger">Alterar</button>
                            <button type="button" class="btn btn-success" data-dismiss="modal">Cancelar</button>


                        </form>
                    </div>

                </div>
            </div>
        </div>

        <div class="modal fade" id="ExcluirModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="exampleModalLabel">Tasks</h4>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="http://localhost/Voxus/ExcluirTasks.php" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="recipient-name" class="control-label">Tem certeza que deseja excluir a tasks?</label>
                            </div>
                            <input name="codigo" type="hidden" class="form-control" id="codigo-tasks" value="">
                            <button type="submit" class="btn btn-danger">Sim</button>
                            <button type="button" class="btn btn-success" data-dismiss="modal">Cancelar</button>


                        </form>
                    </div>

                </div>
            </div>
        </div>


        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
        <script type="text/javascript">
            $('#exampleModal').on('show.bs.modal', function(event) {
                var button = $(event.relatedTarget) // Button that triggered the modal
                var recipient = button.data('whatever') // Extract info from data-* attributes
                var recipientnome = button.data('whatevernome')
                var recipientdescricao = button.data('whateverdescricao')
                // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
                // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
                var modal = $(this)
                modal.find('.modal-title').text('ID ' + recipient)
                modal.find('#codigo-tasks').val(recipient)
                modal.find('#recipient-name').val(recipientnome)
                modal.find('#recipient-descricao').val(recipientdescricao)

            })

            $('#ExcluirModal').on('show.bs.modal', function(event) {
                var button = $(event.relatedTarget) // Button that triggered the modal
                var recipient = button.data('whatever') // Extract info from data-* attributes
                var recipientnome = button.data('whatevernome')
                // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
                // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
                var modal = $(this)
                modal.find('.modal-title').text('ID ' + recipient)
                modal.find('#codigo-tasks').val(recipient)
            })

        </script>
    </body>

    </html>
