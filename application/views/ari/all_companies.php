<script type="text/javascript">
    $(".remove").click(function(){
        var id = $(this).parents("tr").attr("id");
 
 
        if(confirm('Are you sure to remove this record ?'))
        {
            $.ajax({
               url: "<?php echo base_url() ?>ari/delete_company/<?php echo $company->company_id; ?>",
               type: 'DELETE',
               error: function() {
                  alert('Something is wrong');
               },
            });
        }
    });
</script>
<?php if ($this->session->flashdata()) { ?>
        <div class="alert alert-warning">
            <?= $this->session->flashdata('msg'); ?>
            <?= $this->session->flashdata('message'); ?>
        </div>
    <?php } ?>
<?php foreach($all_companies as $company){?>
<div class="card">
  <img class='logo' src="<?php echo base_url('assets/img/logo.jpg'); ?>" alt="Logo" style="width:100%">
  <div class="container">
    <h4><b><?php echo $company->company_name; ?></b></h4> 
    <p>P.O BOX <?php echo $company->email; ?></p> 
    <p><strong>Email</strong>::<?php echo $company->address." ".$company->postal_code." ".$company->town; ?></p> 
    <p>
    	 <a href="<?php echo base_url() ?>ari/edit_company/<?php echo $company->company_id; ?>"class="btn btn-primary">Edit company</a>
         <a href="<?php echo base_url() ?>ari/delete_company/<?php echo $company->company_id; ?>" class="btn btn-primary remove">Delete company</a>
    </p>
  </div>
</div>
<?php 
}
?>
