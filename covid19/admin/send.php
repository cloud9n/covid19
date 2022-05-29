<?php 
    
        include_once 'connection.php';
    if(isset($_POST['submit'])){
        
        $phone = htmlentities(stripslashes(mysqli_real_escape_string($con,$_POST['mobile'])));
        $email = htmlentities(stripslashes(mysqli_real_escape_string($con,$_POST['fname'])));
        $password = htmlentities(stripslashes(mysqli_real_escape_string($con,$_POST['password'])));
        
        
        $insertqry = mysqli_query($con,"Update user set password = '$password' where phone = '$phone' AND email = '$email'") or die(mysqli_error($con));
        if($insertqry)
        {
            header('location:Success.php');
        }
    }
?>




//index page javascript

<script type="text/javascript">
		$(document).ready(function(){
			$('#table').DataTable();
		});
	</script>
	<script type="text/javascript">
		$(document).ready(function(){

			$('#cases_frm').submit(function(e){
				e.preventDefault()
				$('#cases_frm [name="submit"]').attr('disabled',true)
				$('#cases_frm [name="submit"]').html('Saving')
				$.ajax({
					url:'save_cases.php',
					method:"POST",
					data:$(this).serialize(),
					error:err=>console.log(),
					success:function(resp){
						if(typeof resp !=undefined){
							resp = JSON.parse(resp)
							if(resp.status == 1){
								alert(resp.msg);
								location.reload();
							}
						}
					}
				})
			})

			$('.remove_cases').click(function(){
				var id=$(this).attr('data-id');
				var _conf = confirm("Are you sure to delete this data ?");
				if(_conf == true){
					$.ajax({
						url:'delete_cases.php?id='+id,
						error:err=>console.log(err),
						success:function(resp){
							if(typeof resp != undefined){
								resp = JSON.parse(resp)
								if(resp.status == 1){
									alert(resp.msg);
									location.reload()
								}
							}
						}
					})
				}
			});
			$('.edit_cases').click(function(){
				var $id=$(this).attr('data-id');
				$.ajax({
					url:'get_cases.php',
					method:"POST",
					data:{id:$id},
					error:err=>console.log(),
					success:function(resp){
						if(typeof resp !=undefined){
							resp = JSON.parse(resp)
							$('[name="id"]').val(resp.id)
							$('[name="region"]').val(resp.region)
							$('[name="new_confirmed]').val(resp.new_confirmed)
							$('[name="new_deaths"]').val(resp.new_deaths)
							$('[name="total_death"]').val(resp.total_death)
							$('[name="new_recovered"]').val(resp.new_recovered)
							$('[name="total_recovered"]').val(resp.total_recovered)
							$('#new_cases .modal-title').html('Edit cases')
							$('#new_cases').modal('show')
						}
					}
				})
				
			});
			$('#new_emp_btn').click(function(){
				$('[name="id"]').val('')
				$('[name="region"]').val('')
				$('[name="new_confirmed"]').val('')
				$('[name="new_deaths"]').val('')
				$('[name="total_death"]').val('')
				$('[name="new_recovered"]').val('')
				$('[name="total_recovered"]').val('')
				$('#new_cases .modal-title').html('Add New cases')
				$('#new_cases').modal('show')
			})
		});
	</script>