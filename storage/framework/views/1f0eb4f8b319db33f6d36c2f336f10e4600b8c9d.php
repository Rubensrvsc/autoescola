<?php $__env->startSection('title', 'Editar de Instrutores'); ?>
<?php $__env->startSection('content'); ?>
<h6 class="mb-4"><i>Edição de Instrutores</i></h6><hr>
<form method="POST" action="<?php echo e(route('instrutores.editar',$item)); ?>">
        <?php echo csrf_field(); ?>
        <?php echo method_field('put'); ?>

        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="exampleInputEmail1">Nome</label>
                    <input value="<?php echo e($item->nome); ?>" type="text" class="form-control" id="" name="nome" required>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input value="<?php echo e($item->email); ?>" type="email" class="form-control" id="" name="email">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="exampleInputEmail1">CPF</label>
                    <input value="<?php echo e($item->cpf); ?>" type="text" class="form-control" id="cpf" name="cpf">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="exampleInputEmail1">Telefone</label>
                    <input value="<?php echo e($item->telefone); ?>" type="text" class="form-control" id="telefone" name="telefone">
                </div>
            </div>

            <div class="col-md-8">
                <div class="form-group">
                    <label for="exampleInputEmail1">Endereço</label>
                    <input value="<?php echo e($item->endereço); ?>" type="text" class="form-control" id="endereco" name="endereco">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputEmail1">Credencial</label>
                    <input value="<?php echo e($item->credencial); ?>" type="text" class="form-control" id="" name="credencial">
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputEmail1">Vencimento Credencial</label>
                    <input value="<?php echo e($item->data_venc); ?>" value="<?php echo date('Y-m-d') ?>" type="date" class="form-control" id="data" name="data">
                </div>
            </div>

        </div>


    
        <p align="right">
        <input value="<?php echo e($item->credencial); ?>" type="hidden"  name="oldcredencial" >
        <input value="<?php echo e($item->cpf); ?>" type="hidden" name="oldcpf" >
        <input value="<?php echo e($item->email); ?>" type="hidden" name="oldemail" >
        <button type="submit" class="btn btn-primary">Salvar</button>
        </p>
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template.painel-admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/rubens/Downloads/autoescola/resources/views/painel-admin/instrutores/edit.blade.php ENDPATH**/ ?>