<!-- Main Content -->
<div id="content">
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url('estado'); ?>">Estados</a></li>
                <li class="breadcrumb-item active" aria-current="page"><?php echo $title; ?></li>
            </ol>
        </nav>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-body">
                <!-- Form -->
                <?php $attributes = array('class' => 'form-horizontal  form-label-left', 'id' => ''); ?>
                <?php echo form_open($action, $attributes); ?>
                <div class="form-group d-flex justify-content-center">
                    <div class="col-md-4">
                        <label>Nome do Estado:</label>
                        <input id="estado_nome" type="text" class="form-control" name="estado_nome" value="<?php echo $estado_nome; ?>" placeholder="Nome do Estado">
                        <?php echo form_error('estado_nome'); ?>
                    </div>
                    <div class="col-md-4">
                        <label>Sigla UF:</label>
                        <input id="estado_uf" type="text" class="form-control" name="estado_uf" value="<?php echo $estado_uf; ?>" placeholder="Sigla UF">
                        <?php echo form_error('estado_uf'); ?>
                    </div>
                </div>
                <input type="hidden" name="estado_id" value="<?php echo $estado_id; ?>">
                <div class="d-flex justify-content-md-center pt-3">
                    <button type="submit" class="btn btn-sm btn-primary">Salvar</button>
                    <a title="Voltar" href="<?php echo base_url('estado'); ?>" class="btn btn-sm btn-success ml-3">Voltar</a>
                </div>
                <?php echo form_close(); ?>
                <!-- End Form -->
            </div>
        </div>
    </div>
</div>