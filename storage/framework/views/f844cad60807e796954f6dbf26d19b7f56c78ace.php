<?php $__env->startSection('title', 'Editar Recipcionista'); ?>
<?php $__env->startSection('content'); ?>
<h6 class="mb-4"><i>Edição de Instrutores</i></h6><hr>
<form method="POST" action="<?php echo e(route('recep.editar',$item)); ?>">
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
                    <input value="<?php echo e($item->endereco); ?>" type="text" class="form-control" id="endereco" name="endereco">
                </div>
            </div>
        </div>
        

    
        <p align="right">

        <input value="<?php echo e($item->cpf); ?>" type="hidden" name="oldcpf" >
        <input value="<?php echo e($item->email); ?>" type="hidden" name="oldemail" >
        <button type="submit" class="btn btn-primary">Salvar</button>
        </p>
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template.painel-admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/rubens/Downloads/autoescola/resources/views/painel-admin/recep/edit.blade.php ENDPATH**/ ?>