<?php $__env->startSection('content'); ?>

    <div>
        <h2><?php echo e($post->title); ?>

            <?php if(auth()->check()): ?>
                <?php if(auth()->user()->id === $post->author_id): ?>
                    <a href="<?php echo e(route('post.edit',$post->id)); ?>"><i class="material-icons">edit</i></a>
                <?php endif; ?>
            <?php endif; ?>
        </h2>
        <p>Written by : <strong><?php echo e($post->author->name); ?></strong></p>
        <p>Created by : <strong><?php echo e($post->created_at); ?></strong></p>
        <p>Is Published Post : <strong><?php echo e($post->is_published ? 'Yes' : 'No'); ?></strong></p>
        <p><?php echo nl2br($post->content); ?></p>

        <?php if(!$post->is_published): ?>
            <form action="<?php echo e(route('post.update',$post->id)); ?>" method="POST">
                <?php echo method_field('PUT'); ?>
                <?php echo csrf_field(); ?>
                <input type="hidden" name="is_published" value="1"/>
                <button class='btn btn-primary'>Publish the post</button>
            </form>
        <?php endif; ?>
    </div>
    <a href="<?php echo e(route('post.index')); ?>">Back to list</a>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Full Moon\Documents\vue-assignment\resources\views/post/show.blade.php ENDPATH**/ ?>