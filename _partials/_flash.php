<?php 
if (isset($_SESSION['notification']['message'])): ?>
	<script>
     Swal.fire({
                icon: '<?php echo  $_SESSION['notification']['type'];?>',
                title: "<?php echo  $_SESSION['notification']['message'];?>",
                text: '',
              })   
    </script>
		
<?php $_SESSION['notification']= array(); ?>
<?php endif ?>