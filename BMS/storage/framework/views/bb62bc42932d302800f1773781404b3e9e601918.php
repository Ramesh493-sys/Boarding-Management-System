<div style="background-color:cadetblue">
<?php $__env->startSection('content'); ?>
    <div class="container" >
        <div class=" col-md-12 col-sm-12 col-6"> 
            <div class="page-breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo e(url('/')); ?>" class="breadcrumb-link text-white">home</a></li>
                    <li class="breadcrumb-item"><a href="<?php echo e(url('/AllBoardings')); ?>" class="breadcrumb-link text-white">All Boarding</a></li>
                    <li class="breadcrumb-item" aria-current="text-white">Select Boarding</li>
                </ol>
                <br>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Your Boarding</div>
                <div class="panel-body" >
                    <table class="table table-facility-information" style="text-align: left;">
                        <tbody>
                        <!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> -->
                        <!-- <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
                        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
                        <!------ Include the above in your HEAD tag ---------->

                        <link rel="stylesheet"  integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
                        <?php $__currentLoopData = $fdata; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data8): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <img src="/uploads/boardingpic/<?php echo e($data8->picture); ?>" class="img-rounded" style="border: 2px solid black; width:240px; height:240px; float:center;  margin-right:25px;">
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            

            <div class="panel panel-primary">
                <div class="panel-heading">Boarding Details</div>
                    <div class="panel-body">
                    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data2): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <table class="table table-hover text-centered" style="table-align: right; table width=50%;">
                        <tbody class="text-dark">
                        
                        <tr>
                        <td>Boarding No</td>
                        <td><?php echo e($data2->id); ?></td>
                        </tr>
                        
                        
                        <tr>
                        <td>Address of the Boarding</td>
                        <td><?php echo e($data2->address_of_boarding); ?></td>
                        </tr>

                        <tr>
                        <td>Near To</td>
                        <td><?php echo e($data2->near_to); ?></td>
                        </tr>

                        <tr>
                        <td>Accomadation Type</td>
                        <td><?php echo e($data2->accomadation_type); ?></td>
                        </tr>

                        <tr>
                        <td>Available for</td>
                        <td><?php echo e($data2->available_for); ?></td>
                        </tr>

                        <tr>
                        <td>Number Of Boarders</td>
                        <td><?php echo e($data2->number_of_boarders); ?></td>
                        </tr>

                        <tr>
                        <td>Security Camera Availability</td>
                        <td><?php echo e($data2->security_cam_available); ?></td>
                        </tr>

                        <tr>
                        <td>Boarding Fees Per Month</td>
                        <td><?php echo e($data2->rent); ?></td>
                        </tr>

                        <tr>
                        <td>Rules and Conditions</td>
                        <td><?php echo e($data2->rules); ?></td>
                        </tr>
                        
                        </tbody>
                    </table>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>

                <div class="panel panel-success">
                    <div class="panel-heading">Room Details</div>
                        <div class="panel-body">
                        <table class="table table-hover text-centered" table width="400" style="table-align: right; table width:50%;">
                            <tbody class="text-dark">
                                <?php $__currentLoopData = $adata; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td style="width:25%"><?php echo e($data1->room_type); ?></td>
                                    <td style="width:25%"><?php echo e($data1->number_of_rooms); ?></td>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>    
                    </div>
                </div>

                <div class="panel panel-success">
                <div class="panel-heading">Facility Details</div>
                <div class="panel-body">
                <table class="table table-facility-information" style="text-align: left;">
                    <tbody class="text-dark">
                    <?php $__currentLoopData = $bdata; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data3): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                    <tr>
                    <td style="width:25%"><?php echo e($data3->facility_type); ?></td>
                    <td style="width:25%"><?php echo e($data3->number_of_facility); ?></td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
                </div>
                </div>

                <div class="panel panel-success">
                <div class="panel-heading">Charge Details (Charging for facilities)</div>
                <div class="panel-body">
                <table class="table table-facility-information" style="text-align: left;">
                    <tbody class="text-dark">
                    <?php $__currentLoopData = $cdata; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data4): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                    <tr>
                    <td style="width:25%"><?php echo e($data4->charge_type); ?></td>
                    <td style="width:25%"><?php echo e($data4->availability); ?></td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
                </div>
                </div>
                
                <div class="panel panel-success">
                <div class="panel-heading">Owner Details </div>
                <div class="panel-body">
                <table class="table table-facility-information" style="text-align: left;">
                    <tbody class="text-dark">
                    <?php $__currentLoopData = $ddata; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data5): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                    <tr>
                    <td style="width:25%">Name</td>
                    <td style="width:25%"><?php echo e($data5->name); ?></td>
                    </tr>

                    <tr>
                    <td style="width:25%">Email</td>
                    <td style="width:25%"><?php echo e($data5->email); ?></td>
                    </tr>

                    <tr>
                    <td style="width:25%">Nic Number</td>
                    <td style="width:25%"><?php echo e($data5->nicno); ?></td>
                    </tr>

                    <tr>
                    <td style="width:25%">Contact No</td>
                    <td style="width:25%"><?php echo e($data5->contactno); ?></td>
                    </tr>

                    <tr>
                    <td style="width:25%">Address Of The Owner</td>
                    <td style="width:25%"><?php echo e($data5->address); ?></td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
                </div>
                </div> 
                
                <div class="row">
                <div class="col-xl-4 col-lg-3 col-md-5 col-sm-12 col-12 offset-2">
                  
                <div class="panel panel-success text-dark">
                <div class="panel-heading">Comments</div>
                <div class="panel-body">
                    <?php $__currentLoopData = $edata; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data6): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                    <br><b><?php echo e($data6->user_email); ?></b>
                    
                    <br><?php echo e($data6->comment); ?>

                    
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    
                    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data7): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    
                    <form method="POST" action="/addcomment">
                    <?php echo e(csrf_field()); ?>

                    <div class="form-group<?php echo e($errors->has('user_email') ? ' has-error' : ''); ?>">
                    <br>Email: <input type='email' name='user_email' id='user_email' /><br />
                           <input type="hidden" id="boarding_id" name="boarding_id" value="<?php echo e($data7->id); ?>">
                        <?php if($errors->has('user_email')): ?>
                            <span class="help-block">
                                <strong><?php echo e($errors->first('user_email')); ?></strong>
                            </span>
                        <?php endif; ?>
                    </div>

                    <div class="form-group<?php echo e($errors->has('comment') ? ' has-error' : ''); ?>">
                        Comment:<br />
                        <textarea name='comment' id='comment'></textarea><br />
                        <?php if($errors->has('comment')): ?>
                            <span class="help-block">
                                <strong><?php echo e($errors->first('comment')); ?></strong>
                            </span>
                        <?php endif; ?>
                    </div>
                
                    <input type='submit' value='Submit' />  
                    </form>

                </div>
                </div>
                </div>
                <div class="col-xl-4 col-lg-3 col-md-5 col-sm-12 col-12">
                    <div class="panel panel-success text-dark">
                    <div class="panel-heading">User Rating</div>
                    <div class="panel-body">
    
                    <span class="heading">User Rating</span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <p><?php echo e($zdata); ?> average Rating</p>
                    
                    
                    
                    <form method="POST" action="/addrating">
                    <?php echo e(csrf_field()); ?>

                    <div class="form-group<?php echo e($errors->has('user_email') ? ' has-error' : ''); ?>">
                    <br>Email: <input type='email' name='user_email' id='user_email' /><br />
                           <input type="hidden" id="boarding_id" name="boarding_id" value="<?php echo e($data7->id); ?>">
                        <?php if($errors->has('user_email')): ?>
                            <span class="help-block">
                                <strong><?php echo e($errors->first('user_email')); ?></strong>
                            </span>
                        <?php endif; ?>
                    </div>
                    <div class="form-group">
                    <br><div class="col-md-6">
                    Rating<select id="rating" class="form-control" name="rating" value="<?php echo e(old('rating')); ?>">
                                    <option value="" >--Rate Number--</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                            </div>
                    </div>
                    <input type='submit' value='Submit' />  
                    </form>
                    
                    
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    </div>
                    
                </div>
                
                <div class="col-md-offset-8">
                     <h4><a href="<?php echo e(URL('/addComplain'.$data7->id)); ?>"><button type="button" class="btn btn-danger">Complaint About This Boarding</button></a></h4>
                    <div>
                </div>
                
               

            </div>
        </div>
    </div>
</div>
</div>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>