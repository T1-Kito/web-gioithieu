<?php $__env->startSection('title', 'Thêm Banner Mới'); ?>

<?php $__env->startSection('content'); ?>
<div class="page-content">
    <div class="container">
        <h1 class="page-title">Thêm Banner Mới</h1>

        <form action="<?php echo e(route('admin.banners.store')); ?>" method="POST" enctype="multipart/form-data" style="max-width: 800px; background: white; padding: 30px; border-radius: 8px; box-shadow: 0 2px 10px rgba(0,0,0,0.1);">
            <?php echo csrf_field(); ?>

            <div style="margin-bottom: 20px;">
                <label style="display: block; margin-bottom: 5px; font-weight: 600;">Hình ảnh * (Kích thước khuyến nghị: 1920x1080px)</label>
                <input type="file" name="image" accept="image/*" required
                       style="width: 100%; padding: 12px; border: 2px solid #e9ecef; border-radius: 4px;">
                <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <span style="color: #dc3545; font-size: 14px;"><?php echo e($message); ?></span>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-bottom: 20px;">
                <div>
                    <label style="display: block; margin-bottom: 5px; font-weight: 600;">Nút 1 - Text</label>
                    <input type="text" name="button_text_1" value="<?php echo e(old('button_text_1')); ?>"
                           style="width: 100%; padding: 12px; border: 2px solid #e9ecef; border-radius: 4px;">
                </div>
                <div>
                    <label style="display: block; margin-bottom: 5px; font-weight: 600;">Nút 1 - Link</label>
                    <input type="text" name="button_link_1" value="<?php echo e(old('button_link_1')); ?>"
                           style="width: 100%; padding: 12px; border: 2px solid #e9ecef; border-radius: 4px;">
                </div>
            </div>

            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-bottom: 20px;">
                <div>
                    <label style="display: block; margin-bottom: 5px; font-weight: 600;">Nút 2 - Text</label>
                    <input type="text" name="button_text_2" value="<?php echo e(old('button_text_2')); ?>"
                           style="width: 100%; padding: 12px; border: 2px solid #e9ecef; border-radius: 4px;">
                </div>
                <div>
                    <label style="display: block; margin-bottom: 5px; font-weight: 600;">Nút 2 - Link</label>
                    <input type="text" name="button_link_2" value="<?php echo e(old('button_link_2')); ?>"
                           style="width: 100%; padding: 12px; border: 2px solid #e9ecef; border-radius: 4px;">
                </div>
            </div>

            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-bottom: 20px;">
                <div>
                    <label style="display: block; margin-bottom: 5px; font-weight: 600;">Thứ tự hiển thị</label>
                    <input type="number" name="order" value="<?php echo e(old('order', 0)); ?>"
                           style="width: 100%; padding: 12px; border: 2px solid #e9ecef; border-radius: 4px;">
                </div>
                <div style="display: flex; align-items: center; margin-top: 30px;">
                    <label style="display: flex; align-items: center; cursor: pointer;">
                        <input type="checkbox" name="is_active" value="1" <?php echo e(old('is_active', true) ? 'checked' : ''); ?>

                               style="margin-right: 8px; width: 18px; height: 18px;">
                        <span>Kích hoạt banner</span>
                    </label>
                </div>
            </div>

            <div style="display: flex; gap: 10px;">
                <button type="submit" class="btn btn-primary">Lưu Banner</button>
                <a href="<?php echo e(route('admin.banners.index')); ?>" class="btn btn-outline">Hủy</a>
            </div>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\web-gioithieu\resources\views/admin/banners/create.blade.php ENDPATH**/ ?>