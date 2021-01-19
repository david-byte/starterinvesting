<!-- Main Content -->
<div id="content">
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url('cidades'); ?>">Cidades</a></li>
                <li class="breadcrumb-item active" aria-current="page"><?php echo $title; ?></li>
            </ol>
        </nav>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <p class="card-title">Cidades</p>
                <a title="Voltar" href="<?php echo base_url('cidade'); ?>" class="btn btn-sm btn-success float-right"><i class="fas fa-arrow-left">&nbsp;</i>Voltar</a>
            </div>
            <div class="card-body">
                <!-- Form -->
                <?php $attributes = array('class' => 'form-horizontal  form-label-left', 'id' => ''); ?>
                <?php echo form_open($action, $attributes); ?>
                <div class="form-group row col-12">
                    <div class="col-md-4">
                        <label>Nome Cidade:</label>
                        <input id="cidade_nome" type="text" class="form-control" name="cidade_nome" value="<?php echo $cidade_nome; ?>" placeholder="Nome da Cidade">
                        <?php echo form_error('cidade_nome'); ?>
                    </div>
                </div>
                <div class="form-group row col-md-12">
                    <div class="col-md-4">
                        <select name="fk_estado_id" class="chosen-select form-control" data-live-search="true">
                            <option value="">Selecione</option>
                            <?php foreach ($ruf_data as $ruf) : ?>
                                <?php if ($ruf->estado_id == $fk_id_estado) : ?>
                                    <option value="<?php echo $ruf->estado_id; ?>" selected><?php echo $ruf->estado_uf; ?></option>
                                <?php else : ?>
                                    <option value="<?php echo $ruf->estado_id; ?>"><?php echo $ruf->estado_uf; ?></option>
                                <?php endif; ?>
                            <?php endforeach; ?>
                            </section>
                    </div>
                    <input type="hidden" name="cidade_id" value="<?php echo $cidade_id; ?>">
                    <button type="submit" class="btn btn-sm btn-primary mt-3">Salvar</button>
                </div>
            </div>
            <?php echo form_close(); ?>
            <!-- End Form -->
        </div>
    </div>
</div>
</div>