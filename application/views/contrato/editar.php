<div class="module">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <i class="fa fa-book"></i>
                        Formulário de Edição: #<?php echo $model->id?>
                    </div>
                    <div class="panel-body">
                        <?php $this->load->view('contrato/_form', ['model' => $model]); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
