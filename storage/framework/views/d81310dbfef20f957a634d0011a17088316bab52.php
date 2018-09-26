<?php if((sizeof($files) > 0) || (sizeof($directories) > 0)): ?>

<div class="row">

  <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2 img-row">
    <?php $item_name = $item->name; ?>
    <?php $thumb_src = $item->thumb; ?>
    <?php $item_path = $item->is_file ? $item->url : $item->path; ?>

    <div class="square clickable <?php echo e($item->is_file ? '' : 'folder-item'); ?>" data-id="<?php echo e($item_path); ?>"
           <?php if($item->is_file && $thumb_src): ?> onclick="useFile('<?php echo e($item_path); ?>', '<?php echo e($item->updated); ?>')"
           <?php elseif($item->is_file): ?> onclick="download('<?php echo e($item_name); ?>')" <?php endif; ?> >
      <?php if($thumb_src): ?>
      <img src="<?php echo e($thumb_src); ?>">
      <?php else: ?>
      <i class="fa <?php echo e($item->icon); ?> fa-5x"></i>
      <?php endif; ?>
    </div>

    <div class="caption text-center">
      <div class="btn-group">
        <button type="button" data-id="<?php echo e($item_path); ?>"
                class="item_name btn btn-default btn-xs <?php echo e($item->is_file ? '' : 'folder-item'); ?>"
                <?php if($item->is_file && $thumb_src): ?> onclick="useFile('<?php echo e($item_path); ?>', '<?php echo e($item->updated); ?>')"
                <?php elseif($item->is_file): ?> onclick="download('<?php echo e($item_name); ?>')" <?php endif; ?> >
          <?php echo e($item_name); ?>

        </button>
        <button type="button" class="btn btn-default dropdown-toggle btn-xs" data-toggle="dropdown" aria-expanded="false">
          <span class="caret"></span>
          <span class="sr-only">Toggle Dropdown</span>
        </button>
        <ul class="dropdown-menu" role="menu">
          <li><a href="javascript:rename('<?php echo e($item_name); ?>')"><i class="fa fa-edit fa-fw"></i> <?php echo e(Lang::get('laravel-filemanager::lfm.menu-rename')); ?></a></li>
          <?php if($item->is_file): ?>
          <li><a href="javascript:download('<?php echo e($item_name); ?>')"><i class="fa fa-download fa-fw"></i> <?php echo e(Lang::get('laravel-filemanager::lfm.menu-download')); ?></a></li>
          <li class="divider"></li>
          <?php if($thumb_src): ?>
          <li><a href="javascript:fileView('<?php echo e($item_path); ?>', '<?php echo e($item->updated); ?>')"><i class="fa fa-image fa-fw"></i> <?php echo e(Lang::get('laravel-filemanager::lfm.menu-view')); ?></a></li>
          <li><a href="javascript:resizeImage('<?php echo e($item_name); ?>')"><i class="fa fa-arrows fa-fw"></i> <?php echo e(Lang::get('laravel-filemanager::lfm.menu-resize')); ?></a></li>
          <li><a href="javascript:cropImage('<?php echo e($item_name); ?>')"><i class="fa fa-crop fa-fw"></i> <?php echo e(Lang::get('laravel-filemanager::lfm.menu-crop')); ?></a></li>
          <li class="divider"></li>
          <?php endif; ?>
          <?php endif; ?>
          <li><a href="javascript:trash('<?php echo e($item_name); ?>')"><i class="fa fa-trash fa-fw"></i> <?php echo e(Lang::get('laravel-filemanager::lfm.menu-delete')); ?></a></li>
        </ul>
      </div>
    </div>

  </div>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</div>

<?php else: ?>
<p><?php echo e(Lang::get('laravel-filemanager::lfm.message-empty')); ?></p>
<?php endif; ?>
