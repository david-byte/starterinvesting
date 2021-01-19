<!-- Main Content -->
<div id="content">
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url('/'); ?>">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page"><?php echo $title; ?></li>
            </ol>
        </nav>

        <!-- Mensagens de error -->
        <?php if ($message = $this->session->flashdata('error')) : ?>
            <div class="row">
                <div class="col-md-12">
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong><i class="fas fa-exclamation-triangle"></i>&nbsp;<?php echo $message; ?></strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
            </div>
        <?php endif; ?>
        <!-- Mensagens de Sucesso -->
        <?php if ($message = $this->session->flashdata('sucesso')) : ?>
            <div class="row">
                <div class="col-md-12">
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong><i class="far fa-smile-wink"></i>&nbsp;<?php echo $message; ?></strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
            </div>
        <?php endif; ?>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <a title="Cadastrar novo cliente" href="<?php echo base_url('cidade/create'); ?>" class="btn btn-sm btn-success float-right"><i class="fas fa-map-marker-alt">&nbsp;</i>Novo</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nome Cidade</th>
                                <th>Sigla UF</th>
                                <th class="text-center no-sort pr-2">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $start = 0; ?>
                            <?php foreach ($cidades as $cidade) : ?>
                                <tr>
                                    <td><?php echo ++$start; ?></td>
                                    <td><?php echo $cidade->cidade_nome; ?></td>
                                    <td><?php echo $cidade->fk_uf; ?></td>
                                    <td class="text-center">
                                        <a title="Editar" href="<?php echo base_url('cidade/update/' . $cidade->cidade_id); ?>" class="btn btn-sm btn-primary"><i class="fas fa-user-edit">&nbsp;</i>Editar</a>
                                        <a title="Excluir" href="javascript(void)" data-toggle="modal" data-target="#cidade-<?php echo $cidade->cidade_id; ?>" class="btn btn-sm btn-danger"><i class="fas fa-user-times">&nbsp;</i>Excluir</a>
                                    </td>
                                </tr>
                                <!-- modal dell -->
                                <div class="modal fade" id="cidade-<?php echo $cidade->cidade_id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Tem certeza?</h5>
                                                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">×</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">Tem certeza que deseja excluir o <strong><?php echo $cidade->cidade_nome; ?></strong></div>
                                            <div class="modal-footer">
                                                <button class="btn btn-secondary btn-sm" type="button" data-dismiss="modal">Não</button>
                                                <a class="btn btn-danger btn-sm" href="<?php echo base_url('cidade/delete/' . $cidade->cidade_id); ?>">Sim</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- fim modal -->
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>