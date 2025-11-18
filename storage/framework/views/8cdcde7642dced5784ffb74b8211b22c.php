

<?php $__env->startSection('title', 'Quản lý Banner'); ?>

<?php $__env->startSection('content'); ?>
<div class="page-content">
    <div class="container">
        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 30px;">
            <h1 class="page-title">Quản lý Banner</h1>
            <a href="<?php echo e(route('admin.banners.create')); ?>" class="btn btn-primary">Thêm Banner Mới</a>
        </div>

        <?php if(session('success')): ?>
            <div style="background: #d4edda; color: #155724; padding: 15px; border-radius: 4px; margin-bottom: 20px;">
                <?php echo e(session('success')); ?>

            </div>
        <?php endif; ?>

        <div style="overflow-x: auto;">
            <table style="width: 100%; border-collapse: collapse; background: white; box-shadow: 0 2px 10px rgba(0,0,0,0.1);">
                <thead>
                    <tr style="background: #f8f9fa;">
                        <th style="padding: 15px; text-align: left; border-bottom: 2px solid #dee2e6;">Hình ảnh</th>
                        <th style="padding: 15px; text-align: left; border-bottom: 2px solid #dee2e6;">Tiêu đề</th>
                        <th style="padding: 15px; text-align: left; border-bottom: 2px solid #dee2e6;">Thứ tự</th>
                        <th style="padding: 15px; text-align: left; border-bottom: 2px solid #dee2e6;">Trạng thái</th>
                        <th style="padding: 15px; text-align: left; border-bottom: 2px solid #dee2e6;">Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__empty_1 = true; $__currentLoopData = $banners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $banner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <tr>
                            <td style="padding: 15px; border-bottom: 1px solid #dee2e6;">
                                <img src="<?php echo e(Storage::url($banner->image)); ?>" alt="<?php echo e($banner->title); ?>" 
                                     style="width: 150px; height: 80px; object-fit: cover; border-radius: 4px;">
                            </td>
                            <td style="padding: 15px; border-bottom: 1px solid #dee2e6;">
                                <strong><?php echo e($banner->title); ?></strong>
                            </td>
                            <td style="padding: 15px; border-bottom: 1px solid #dee2e6;"><?php echo e($banner->order); ?></td>
                            <td style="padding: 15px; border-bottom: 1px solid #dee2e6;">
                                <?php if($banner->is_active): ?>
                                    <span style="color: #28a745;">✓ Hoạt động</span>
                                <?php else: ?>
                                    <span style="color: #dc3545;">✗ Tắt</span>
                                <?php endif; ?>
                            </td>
                            <td style="padding: 15px; border-bottom: 1px solid #dee2e6;">
                                <a href="<?php echo e(route('admin.banners.edit', $banner)); ?>" class="btn btn-primary btn-small" style="margin-right: 5px;">Sửa</a>
                                <form action="<?php echo e(route('admin.banners.destroy', $banner)); ?>" method="POST" style="display: inline;">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <button type="submit" class="btn btn-outline" 
                                            onclick="return confirm('Bạn có chắc muốn xóa banner này?')"
                                            style="background: #dc3545; color: white; border-color: #dc3545;">Xóa</button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <tr>
                            <td colspan="5" style="padding: 30px; text-align: center; color: #6c757d;">
                                Chưa có banner nào. <a href="<?php echo e(route('admin.banners.create')); ?>">Tạo banner đầu tiên</a>
                            </td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>






<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\web-gioithieu\resources\views/admin/banners/index.blade.php ENDPATH**/ ?>