

<?php $__env->startSection('content'); ?>

    <!-- Bootstrap Boilerplate... -->
<div class="container">
    <div class="panel-body">
        <!-- Display Validation Errors -->
        <?php echo $__env->make('common.error', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <!-- New Task Form -->
        <form action="/task" method="POST" class="form-horizontal">
            <?php echo e(csrf_field()); ?>


            <!-- Task Name -->
            <div class="form-group">
                <label for="task" class="col-sm-3 control-label">Task</label>

                <div class="col-sm-6">
                    <input type="text" name="name" id="task-name" class="form-control">
                </div>
            </div><br>

            <!-- Add Task Button -->
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-success">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                    <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                    </svg>Add Task
                    </button>
                </div>
            </div>
        </form>
    </div>

    <!-- TODO: Current Tasks -->
        <!-- Current Tasks -->
        <?php if(count($tasks) > 0): ?>
        <div class="panel panel-default">
            <div class="panel-heading">
                Current Tasks
            </div>

            <div class="panel-body">
                <table class="table table-striped task-table">

                    <!-- Table Headings -->
                    <thead>
                        <th>Task</th>
                        <th>&nbsp;</th>
                    </thead>

                    <!-- Table Body -->
                    <tbody>
                        <?php $__currentLoopData = $tasks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $task): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <!-- Task Name -->
                                <td class="table-text">
                                    <div><?php echo e($task->name); ?></div>
                                </td>

                                <td>
                                    <!-- TODO: Delete Button -->
                                    <tr>
                                        <!-- Task Name -->
                                        <td class="table-text">
                                            <div><?php echo e($task->name); ?></div>
                                        </td>

                                        <!-- Delete Button -->
                                        <td>
                                            <form action="/task/<?php echo e($task->id); ?>" method="POST">
                                                <?php echo e(csrf_field()); ?>

                                                <?php echo e(method_field('DELETE')); ?>


                                                <button class="btn btn-danger">Delete Task</button>
                                            </form>
                                        </td>
                                    </tr>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Dell\Desktop\blog\resources\views/index.blade.php ENDPATH**/ ?>