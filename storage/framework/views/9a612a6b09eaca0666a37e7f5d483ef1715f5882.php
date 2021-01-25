<?php $__env->startSection('title', 'Cadastro de Veiculos'); ?>
<?php $__env->startSection('content'); ?>
<h5 class="mb-4">Cadastro de Veiculos</h5>
<form method="POST" action="<?php echo e(route('veiculos.insert')); ?>">
        <?php echo csrf_field(); ?>

        <div class="row">
            <div class="col-md-3">
                <div class="form-group">
                    <label for="exampleInputEmail1">Placa</label>
                    <input type="text" class="form-control" id="" name="placa" required>
                </div>
            </div>

            <div class="col-md-3">
                <div class="form-group">
                    <label for="exampleInputEmail1">Categoria</label>
                    <select class="form-control" id="categoria" name="categoria" required>
                    <?php
                        use App\Models\categoria;
                        $tabela = categoria::all();
                    ?>
                    <?php $__currentLoopData = $tabela; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($item->nome); ?>"><?php echo e($item->nome); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
            </div>

            <div class="col-md-3">
                <div class="form-group">
                    <label for="exampleInputEmail1">Km</label>
                    <input type="text" class="form-control" id="" name="km" required>
                </div>
            </div>

            <div class="col-md-3">
                <div class="form-group">
                    <label for="exampleInputEmail1">Instrutor</label>
                    <select class="form-control" name="instrutor" required>
                    <?php
                        use App\Models\instrutor;
                        $tabela = instrutor::all();
                    ?>
                    <option value="0">Selecionar instrutor</option>
                    <?php $__currentLoopData = $tabela; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($item->id); ?>"><?php echo e($item->nome); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
            </div>
            
        </div>
        

        <div class="row">
            <div class="col-md-3">
                <div class="form-group">
                    <label for="exampleInputEmail1">Cor</label>
                    <input type="text" class="form-control" id="" name="cor" required>
                </div>
            </div>

            <div class="col-md-3">
                <div class="form-group">
                    <label for="exampleInputEmail1">Marca</label>
                    <input type="text" class="form-control" id="" name="marca" required>
                </div>
            </div>

            <div class="col-md-3">
                <div class="form-group">
                    <label for="exampleInputEmail1">Ano</label>
                    <input type="text" class="form-control" id="" name="ano" required>
                </div>
            </div>
            

            <div class="col-md-3">
                <div class="form-group">
                    <label for="exampleInputEmail1">Última Revisão</label>
                    <input type="date" class="form-control" id="" name="data" required>
                </div>
            </div>
        </div>
        
      


    
        <p align="right">
        <button type="submit" class="btn btn-primary">Salvar</button>
        </p>
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template.painel-admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/rubens/Downloads/autoescola/resources/views/painel-admin/veiculos/create.blade.php ENDPATH**/ ?>