<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
				<div class="panel-heading">Coupons</div>
				<div class="panel-body">
					<div class="table-responsive">     
						<table class="table table-hover">
							<thead>
							  <tr>
								<th>Id</th>
								<th>Name</th>
								<th>RFID</th>
								<th>Roll No</th>
								<th>Start Balance</th>
								<th>Start Date</th>
								<th>End Date</th>
								<th>Breakfast</th>
								<th>Lunch</th>
								<th>Snacks</th>
								<th>Dinner</th>
								<th>Blocked Status</th>
								<th>Actions</th>
							  </tr>
							</thead>
							<tbody>
								<tr>
									<td> <?php echo e($coupon->id); ?> </td>
									<td> <?php echo e($coupon->name); ?> </td>
									<td> <?php echo e($coupon->rfid); ?> </td>
									<td> <?php echo e($coupon->rollno); ?> </td>
									<td> <?php echo e($coupon->startbalance); ?> </td>
									<td> <?php echo e($coupon->start_date); ?> </td>
									<td> <?php echo e($coupon->end_date); ?> </td>
									<td> <?php echo e($coupon->breakfast); ?> </td>
									<td> <?php echo e($coupon->lunch); ?> </td>
									<td> <?php echo e($coupon->snacks); ?> </td>
									<td> <?php echo e($coupon->dinner); ?></td>
									<td> <?php echo e($coupon->blocked); ?></td>
									<td>
									<form action="/coupons/<?php echo e($coupon->id); ?>/block" method="POST">
											<input type="hidden" name="id" value="<?php echo e($coupon->id); ?>">
											<input type="hidden" name="blocked" value="<?php echo e($coupon->blocked); ?>">
											<?php echo e(csrf_field()); ?>

											
											<input type="submit" class="btn btn-default" aria-label="Left Align" value="Change Block Status of Your Card">
											    
													
									</form>
									</td>
								</tr>
							</tbody>
						</table>
					</div>	
				</div>
            </div>
        </div>
    </div>
</div>
<br>
<br>
<br>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
				<div class="panel-heading">Hostel Entry/Exit</div>
				<div class="panel-body">
					<div class="table-responsive">     
						<table class="table table-hover">
							<thead>
							  <tr>
								<th>Name</th>
								<th>RFID</th>
								<th>Roll No</th>
								<th>Mobile</th>
								<th>Place Of Visit</th>
								<th>Purpose Of Visit</th>
								<th>Out Date</th>
								<th>Out Time</th>
								<th>In Date</th>
								<th>In Time</th>
							  </tr>
							</thead>
							<tbody>
							
							<?php if($last >= 0): ?>
							<?php for($i=$last; $i>=0; $i--): ?>
							  <tr>
								<td> <?php echo e($hostel[$i]->name); ?> </td>
								<td> <?php echo e($hostel[$i]->rfid); ?> </td>
								<td> <?php echo e($hostel[$i]->rollno); ?> </td>
								<td> <?php echo e($hostel[$i]->mobile); ?> </td>
								<td> <?php echo e($hostel[$i]->place); ?> </td>
								<td> <?php echo e($hostel[$i]->purpose); ?> </td>
								<td> <?php echo e($hostel[$i]->out_date); ?> </td>
								<td> <?php echo e($hostel[$i]->out_time); ?> </td>
								<td> <?php echo e($hostel[$i]->in_date); ?> </td>
								<td> <?php echo e($hostel[$i]->in_time); ?> </td>
							  </tr>
							<?php endfor; ?>
							<?php endif; ?>
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