<?php $__env->startSection('content'); ?>
    <div class="bg-image" style="background-image: url(<?php echo e(url('media/photos/photo33@2x.jpg')); ?>);">
        <div class="bg-black-50">
            <div class="content content-full text-center">
                <div class="my-3">
                    <img class="img-avatar img-avatar-thumb" src="<?php echo e(asset('/media/avatars/avatar14.jpg')); ?>" alt="">
                </div>
                <h1 class="h2 text-white mb-0"><?php echo e(Auth::guard('user')->user()->name); ?></h1>
                <span class="text-white-75"> Admin </span>
            </div>
        </div>
    </div>

    <!-- Page Content -->
    <div class="content content-boxed">
        <div class="row">
            <div class="col-md-7 col-xl-8">
                <!-- Updates -->
                <ul class="timeline timeline-alt py-0">
                    <li class="timeline-event">
                        <div class="timeline-event-icon bg-default">
                            <i class="fa fa-user-gear"></i>
                        </div>
                        <div class="timeline-event-block block">
                            <div class="block-header">
                                <h3 class="block-title">Personal Info</h3>
                                <div class="block-options">
                                    <div class="timeline-event-time block-options-item fs-sm">
                                        <i class="fa fa-info" title="user information"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="block-content">
                                <p class="fw-bold mb-2 text-uppercase text-center">
                
                                    <?php echo e(Auth::guard('user')->user()->name); ?>

                                </p>
                                <div class="row">
                                    <div class="col-4 fw-semibold">Gender </div>
                                    <p class="col-xl-8">Female</p>
                                    
                                </div>

                                <div class="row">
                                    <div class="col-4 fw-semibold">ID No.</div>
                                    <p class="col-xl-8">35241671</p>
                                    
                                </div>

                                <div class="row">
                                    <div class="col-4 fw-semibold"> Staff No. </div>
                                    <p class="col-xl-8">122S08791</p>
                                    
                                </div>

                                <div class="row">
                                    <div class="col-4 fw-semibold">Marital Status </div>
                                    <p class="col-xl-8">Married</p>
                                    
                                </div>

                                <div class="row">
                                    <div class="col-4 fw-semibold"> Living with disability </div>
                                    <p class="col-xl-8">No</p>
                                    
                                </div>

                                
                                
                                 

                            </div>
                        </div>
                    </li>
                    <li class="timeline-event">
                        <div class="timeline-event-icon bg-modern">
                            <i class="fa fa-contact-card"></i>
                        </div>
                        <div class="timeline-event-block block">
                            <div class="block-header">
                                <h3 class="block-title">Contact Info</h3>
                                <div class="block-options">
                                    <div class="timeline-event-time block-options-item fs-sm">
                                        <i class="fa fa-info" title="user information"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="block-content block-content-full">
                                <p ><b>Email : </b> superadmin@gmail.com</p>
                                <p ><b>Primary Mobile:</b>  +254742382201</p>
                                <p ><b>Secondary Mobile:</b>  +254782082270</p>
                                
                            </div>
                        </div>
                    </li>
                    <li class="timeline-event">
                        <div class="timeline-event-icon bg-info">
                            <i class="fa fa-address-book"></i>
                        </div>
                        <div class="timeline-event-block block">
                            <div class="block-header">
                                <h3 class="block-title">Physical Address</h3>
                                <div class="block-options">
                                    <div class="timeline-event-time block-options-item fs-sm">
                                        <i class="fa fa-info" title="user information"></i>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="block-content">
                                <p > <b>Nationality :</b>   Kenyan</p>
                                <p ><b>County :</b>  Mombasa</p>
                                <p ><b>Sub County :</b> Mvita</p>
                                <p ><b>Town :</b> Mombasa</p>
                                <p  ><b>Address :</b> Tom Mboya Street,Tudor</p>

                                
                            </div>
                        </div>
                    </li>
                    
                                
                                
                            
                        
                    
                </ul>
                <!-- END Updates -->
            </div>
            <div class="col-md-5 col-xl-4">
                <!-- Products -->
                <div class="block block-rounded">
                    <div class="block-header block-header-default">
                        <h3 class="block-title">
                            <i class="fa fa-school text-muted me-1"></i> Work History
                        </h3>
                        <div class="block-options">
                            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                                <i class="si si-refresh"></i>
                            </button>
                        </div>
                    </div>
                    <div class="block-content">
                        <div class="d-flex align-items-center push">
                            <div class="flex-shrink-0 me-3">
                            </div>
                            <div class="flex-grow-1">
                                <div class="fw-semibold">Organization 1</div>
                                <div class="fs-sm"> Details</div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center push">
                            <div class="flex-shrink-0 me-3">
                       
                            </div>
                            <div class="flex-grow-1">
                                <div class="fw-semibold">Organization 2</div>
                                <div class="fs-sm"> Details</div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center push">
                            <div class="flex-shrink-0 me-3">
                            </div>
                            <div class="flex-grow-1">
                                <div class="fw-semibold">Organization 3</div>
                                <div class="fs-sm"> Details</div>
                            </div>
                        </div>
                        
                        <div class="text-center push">
                            <button type="button" class="btn btn-sm btn-alt-secondary">View More..</button>
                        </div>
                    </div>
                </div>
                <!-- END Products -->
            </div>
        </div>
    </div>
    <!-- END Page Content -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.backend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/tumNew/Modules/Courses/Resources/views/profilepage.blade.php ENDPATH**/ ?>