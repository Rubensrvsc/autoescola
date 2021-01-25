<?php $__env->startSection('title', 'Usuarios'); ?>
<?php $__env->startSection('content'); ?>
<?php 
@session_start();
if(@$_SESSION['nivel_usuario'] != 'admin'){ 
  echo "<script language='javascript'> window.location='./' </script>";
}
if(!isset($id)){
  $id = ""; 
  
}

?>



<!-- DataTales Example -->
<div class="card shadow mb-4">

<div class="card-body">
  <div class="table-responsive">
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
      <thead>
        <tr>
          <th>Nome</th>
          <th>Email</th>
          <th>CPF</th>
          <th>Nivel</th>
          <th>Ações</th>
        </tr>
      </thead>

      <tbody>
      <?php $__currentLoopData = $itens; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    
         <tr>
            <td><?php echo e($item->nome); ?></td>
            <td><?php echo e($item->usuario); ?></td>
            <td><?php echo e($item->cpf); ?></td>
            <td><?php echo e($item->nivel); ?></td>

            <td>
            <a href="<?php echo e(route('usuarios.modal',$item)); ?>"><i class="fas fa-trash text-danger mr-1"></i></a>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
      </tbody>
  </table>
</div>
</div>
</div>





</div>

<script type="text/javascript">
  $(document).ready(function () {
    $('#dataTable').dataTable({
      "ordering": false
    })

  });
</script>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Deletar Registro</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Deseja Realmente Excluir este Registro?
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <form method="POST" action="<?php echo e(route('usuarios.delete',$id)); ?>">
          <?php echo csrf_field(); ?>
          <?php echo method_field('delete'); ?>
          <button type="submit" class="btn btn-danger">Excluir</button>
        </form>
      </div>
    </div>
  </div>


<?php 
if(@$id != ""){
  echo "<script>$('#exampleModal').modal('show');</script>";
}
?>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('template.painel-admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/rubens/Downloads/autoescola/resources/views/painel-admin/usuarios/index.blade.php ENDPATH**/ ?>