<?php $__env->startSection('title', 'Editar Categoria'); ?>
<?php $__env->startSection('content'); ?>
<h6 class="mb-4"><i>Edição de Categorias</i></h6><hr>
<form method="POST" action="<?php echo e(route('categorias.editar',$item)); ?>">
        <?php echo csrf_field(); ?>
        <?php echo method_field('put'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="exampleInputEmail1">Nome</label>
                    <input value="<?php echo e($item->nome); ?>" type="text" class="form-control" id="" name="nome" required>
                </div>
            </div>
        </div>
       

           

    
        <p align="right">

        <input value="<?php echo e($item->nome); ?>" type="hidden" name="oldcpf" >

        <button type="submit" class="btn btn-primary">Salvar</button>
        </p>
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template.painel-admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/rubens/Downloads/autoescola/resources/views/painel-admin/categorias/edit.blade.php ENDPATH**/ ?>