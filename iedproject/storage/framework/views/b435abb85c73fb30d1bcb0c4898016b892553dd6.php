<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
				<div class="panel-heading">Hostels</div>
				<div class="panel-body">
				
					<div class="table-responsive">          
						<table class="table table-hover">
							<thead>
							  <tr>
								<th>Id</th>
								<th>Name</th>
								<th>RFID</th>
								<th>Roll No</th>
								<th>Mobile</th>
								<th>Out Date</th>
								<th>Out Time</th>
								<th>Place</th>
								<th>Purpose</th>
								<th>In Date</th>
								<th>In Time</th>
							  </tr>
							</thead>
							<tbody>
							
								<?php $__currentLoopData = $hostels; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $hostel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<tr>
										<td> <?php echo e($hostel->id); ?> </td>
										<td> <?php echo e($hostel->name); ?> </td>
										<td> <?php echo e($hostel->rfid); ?> </td>
										<td> <?php echo e($hostel->rollno); ?> </td>
										<td> <?php echo e($hostel->mobile); ?> </td>
										<td> <?php echo e($hostel->out_date); ?> </td>
										<td> <?php echo e($hostel->out_time); ?> </td>
										<td> <?php echo e($hostel->place); ?> </td>
										<td> <?php echo e($hostel->purpose); ?> </td>
										<td> <?php echo e($hostel->in_date); ?> </td>
										<td> <?php echo e($hostel->in_time); ?> </td>
									</tr>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							
							</tbody>
						</table>
					</div>
				</div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>