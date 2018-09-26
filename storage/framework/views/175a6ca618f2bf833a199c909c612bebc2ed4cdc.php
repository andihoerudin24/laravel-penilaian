<ul class="list-unstyled">
  <?php $__currentLoopData = $root_folders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $root_folder): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <li>
      <a class="clickable folder-item" data-id="<?php echo e($root_folder->path); ?>">
        <i class="fa fa-folder"></i> <?php echo e($root_folder->name); ?>

      </a>
    </li>
    <?php $__currentLoopData = $root_folder->children; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $directory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <li style="margin-left: 10px;">
        <a class="clickable folder-item" data-id="<?php echo e($directory->path); ?>">
          <i class="fa fa-folder"></i> <?php echo e($directory->name); ?>

        </a>
      </li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php if($root_folder->has_next): ?>
      <hr>
    <?php endif; ?>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>
