<script>
    setTimeout(function(){
      $('.bmi_meter').html({{ $bmi }});
    }, 100);
    setTimeout(function(){
      $('.standard_weight_meter').html({{ $standard_weight }});
    }, 100);
    setTimeout(function(){
      $('.weight_difference_meter').html({{ $weight_difference }});
    }, 100);
  </script>
