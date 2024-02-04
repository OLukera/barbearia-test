<?php 
require("partials/header.php"); 
require("conexao.php"); 

if (isset($_POST['acao'])) {
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $genero = $_POST['genero'];
    $dataSessao = $_POST['data'];
    $tipoSessao = $_POST['tipo'];
    $telefone = $_POST['telefone'];

    $stmt = $mysqli->prepare("INSERT INTO sessoes (nome,sobrenome,genero,data_sessao,tipo_sessao,telefone) VALUES (?,?,?,?,?,?)");
    $resultado = $stmt->execute([$nome,$sobrenome,$genero,$dataSessao,$tipoSessao,$telefone]);
    $stmt->close();
}

?>



<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        
        <?php if(isset($resultado) && $resultado == true): ?>
            <?php echo '<div class="alert alert-success" role="alert">Sessão Criada com sucesso</div>' ?>
        <?php elseif(isset($resultado) && $resultado == false): ?>
            <?php echo '<div class="alert alert-danger" role="alert">Erro na criação da sessão</div>' ?>
        <?php endif; ?>

        <div class="row">
            <div class="col-12 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Adicionar uma nova sessão</h4>
                        <form class="form-sample" method="post">
                            <p class="card-description">
                                Informações de agendamento
                            </p>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Nome</label>
                                        <div class="col-sm-9">
                                            <input name="nome" type="text" class="form-control" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Sobrenome</label>
                                        <div class="col-sm-9">
                                            <input name="sobrenome" type="text" class="form-control" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Gênero</label>
                                        <div class="col-sm-9">
                                            <select name="genero" class="form-control">
                                                <option>Masculino</option>
                                                <option>Feminino</option>
                                                <option>Prefiro não opinar</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Data da sessão</label>
                                        <div class="col-sm-9">
                                            <input type="date" name="data" class="form-control" placeholder="dd/mm/yyyy" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Tipo de sessão</label>
                                        <div class="col-sm-9">
                                            <select name="tipo" class="form-control">
                                                <option>Cabelo</option>
                                                <option>Barba</option>
                                                <option>Cabelo e Barba</option>
                                                <option>Pintura / Platinado</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Telefone</label>
                                        <div class="col-sm-9">
                                            <input name="telefone" type="tel" class="form-control" />
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group row">
                                        <div class="col-sm-12 d-flex justify-content-end">
                                            <input class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" name="acao" type="submit" value="Agendar Sessão" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- content-wrapper ends -->
    <!-- partial:partials/_footer.html -->

    <!-- partial -->
</div>
<!-- main-panel ends -->

<!-- container-scroller -->
<?php require("partials/footer.php"); ?>
