<?php $__env->startSection('content'); ?>
    <main>
        <div class="container-fluid px-4">
            <h1 class="my-4">Product</h1>

            <div class="card mb-4">
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Category</th>
                                <th>Nama</th>
                                <th>Price</th>
                                <th>Sale Price</th>
                                <th>Brand</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($loop->iteration); ?></td>
                                    <td><?php echo e($product['category']); ?></td>
                                    <td><?php echo e($product['name']); ?></td>
                                    <td><?php echo e($product['price']); ?></td>
                                    <td><?php echo e($product['sale_price']); ?></td>
                                    <td><?php echo e($product['brands']); ?></td>
                                    <td>
                                        <a href="#" class="btn btn-warning">Edit</a>
                                        <button class="btn btn-danger">Delete</button>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\arkatama-laravel\resources\views/product/index.blade.php ENDPATH**/ ?>