<script>
    setTimeout(function(){
      $('.bmi_meter').html(<?php echo e($bmi); ?>);
    }, 100);
    setTimeout(function(){
      $('.standard_weight_meter').html(<?php echo e($standard_weight); ?>);
    }, 100);
    setTimeout(function(){
      $('.weight_difference_meter').html(<?php echo e($weight_difference); ?>);
    }, 100);
  </script>
<?php /**PATH /work/resources/views/Vital/components/script/odometer.blade.php ENDPATH**/ ?>