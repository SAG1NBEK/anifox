<?php $__env->startSection('title', 'Creating Episode'); ?>

<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-lg-6 mx-auto">
            <?php if($errors->any()): ?>
                <div class="alert alert-danger">
                    <ul>
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><?php echo e($error); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            <?php endif; ?>

            <form method="POST" action="<?php echo e(route('episode.store')); ?>">
            <?php echo csrf_field(); ?>
                <div class="form-group">
                    <label for="product-genre">Seasons</label>
                    <?php echo e(Form::select('season_id[]', $seasons, null, ['multiple' => 'multiple', 'class' => 'form-control select2'])); ?>

                </div>
                <div class="form-group">
                    <label for="product-title">Title</label>
                    <input type="text" name="title" class="form-control" id="product-title" placeholder="Naruto 1 episode" value="<?php echo e(old('title')); ?>">
                </div>
                <div class="form-group">
                    <label for="product-slug">Slug</label>
                    <input type="text" name="slug" class="form-control" id="product-slug" value="<?php echo e(old('slug')); ?>">
                </div>
                <div class="form-group">
                    <label for="product-title">Anime Slug</label>
                    <input type="text" name="anime_slug" class="form-control" id="anime_slug" placeholder="Naruto 1 episode" value="<?php echo e(old('title')); ?>">
                </div>
                <div class="form-group">
                    <label for="product-description">Description</label>
                    <textarea name="description" class="form-control" id="product-description" rows="3"><?php echo e(old('description')); ?></textarea>
                </div>
                <div class="form-group">
                    <label for="product-video_code">Video Code</label>
                    <input type="text" name="video_code" class="form-control" id="product-video_code" value="<?php echo e(old('video_code')); ?>">
                </div>
                <button type="submit" class="btn btn-success">Add Episode</button>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/saginbek/Рабочий стол/Git HUB/anifox/resources/views/admin/episode/create.blade.php ENDPATH**/ ?>