<?php $__env->startSection('title', 'Cadastro de Categorias'); ?>
<?php $__env->startSection('content'); ?>
<h5 class="mb-4">Cadastro de Categorias</h5>
<form method="POST" action="<?php echo e(route('categorias.insert')); ?>">
        <?php echo csrf_field(); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="exampleInputEmail1">Nome</label>
                    <input type="text" class="form-control" id="" name="nome" required>
                </div>
            </div>
            
        </div>
        
      


    
        <p align="right">
        <button type="submit" class="btn btn-primary">Salvar</button>
        </p>
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template.painel-admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/rubens/Downloads/autoescola/resources/views/painel-admin/categorias/create.blade.php ENDPATH**/ ?>