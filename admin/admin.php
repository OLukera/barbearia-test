<?php require("partials/header.php"); ?>
<!-- partial -->

<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-sm-12">
                <div class="home-tab">
                    <div class="d-sm-flex align-items-center justify-content-between border-bottom">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active ps-0" id="home-tab" data-bs-toggle="tab" href="#overview" role="tab" aria-controls="overview" aria-selected="true">Painél de Controle</a>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content tab-content-basic">
                        <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview">
                            <div class="row">
                                <div class="col-lg-12 d-flex flex-column">
                                    <div class="row flex-grow">
                                        <div class="col-12 grid-margin stretch-card">
                                            <div class="card card-rounded">
                                                <div class="card-body">
                                                    <div class="d-sm-flex justify-content-between align-items-start">
                                                        <div>
                                                            <h4 class="card-title card-title-dash">Sessões Agendadas</h4>
                                                            <p class="card-subtitle card-subtitle-dash">Você tem +5 Sessões agendadas!</p>
                                                        </div>
                                                        <div>
                                                            <a href="add-sessao.php" class="btn btn-primary btn-lg text-white mb-0 me-0" type="button"><i class="mdi mdi-account-plus"></i>Adicionar nova sessão</a>
                                                        </div>
                                                    </div>
                                                    <div class="table-responsive mt-1">
                                                        <table class="table select-table">
                                                            <thead>
                                                                <tr>
                                                                    <th>Cliente</th>
                                                                    <th>Sessão</th>
                                                                    <th>Barbeiro</th>
                                                                    <th>Horário</th>
                                                                    <th>Status</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <div class="d-flex">
                                                                            <img src="images/faces/face1.jpg" alt="" />
                                                                            <div>
                                                                                <h6>Pedro Fonseca</h6>
                                                                                <p>#1</p>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <h6>Cabelo e Barba</h6>
                                                                    </td>
                                                                    <td>
                                                                        <h6>João Silva</h6>
                                                                    </td>
                                                                    <td>
                                                                        <h6>00/00/0000</h6>
                                                                        <p>14:00</p>
                                                                    </td>

                                                                    <td><div class="badge badge-opacity-warning">Agendado</div></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12 col-12 grid-margin stretch-card">
                                            <div class="card card-rounded">
                                                <div class="card-body card-rounded">
                                                    <h4 class="card-title card-title-dash">Sessões Agendadas</h4>
                                                    <div class="list align-items-center border-bottom py-2">
                                                        <div class="wrapper w-100">
                                                            <p class="mb-2 font-weight-medium">
                                                                Change in Directors
                                                            </p>
                                                            <div class="d-flex justify-content-between align-items-center">
                                                                <div class="d-flex align-items-center">
                                                                    <i class="mdi mdi-calendar text-muted me-1"></i>
                                                                    <p class="mb-0 text-small text-muted">Mar 14, 2019</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="list align-items-center border-bottom py-2">
                                                        <div class="wrapper w-100">
                                                            <p class="mb-2 font-weight-medium">
                                                                Other Events
                                                            </p>
                                                            <div class="d-flex justify-content-between align-items-center">
                                                                <div class="d-flex align-items-center">
                                                                    <i class="mdi mdi-calendar text-muted me-1"></i>
                                                                    <p class="mb-0 text-small text-muted">Mar 14, 2019</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="list align-items-center border-bottom py-2">
                                                        <div class="wrapper w-100">
                                                            <p class="mb-2 font-weight-medium">
                                                                Quarterly Report
                                                            </p>
                                                            <div class="d-flex justify-content-between align-items-center">
                                                                <div class="d-flex align-items-center">
                                                                    <i class="mdi mdi-calendar text-muted me-1"></i>
                                                                    <p class="mb-0 text-small text-muted">Mar 14, 2019</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="list align-items-center border-bottom py-2">
                                                        <div class="wrapper w-100">
                                                            <p class="mb-2 font-weight-medium">
                                                                Change in Directors
                                                            </p>
                                                            <div class="d-flex justify-content-between align-items-center">
                                                                <div class="d-flex align-items-center">
                                                                    <i class="mdi mdi-calendar text-muted me-1"></i>
                                                                    <p class="mb-0 text-small text-muted">Mar 14, 2019</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="list align-items-center pt-3">
                                                        <div class="wrapper w-100">
                                                            <p class="mb-0">
                                                                <a href="#" class="fw-bold text-primary">Show all <i class="mdi mdi-arrow-right ms-2"></i></a>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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
