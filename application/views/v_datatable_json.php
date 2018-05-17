<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<main role="main">

	<section class="jumbotron text-center">
		<div class="container">
			<h1 class="jumbotron-heading">JSON DataTables</h1>
			
		</div>
    </section>
    
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <table id="dt-ajax" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Judul Artikel</th>
                            <th>Content</th>
                            <th>Kategori</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </section>
	
</main>
<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/jquery.dataTables.min.css">
<script src="<?php echo base_url() ?>assets/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/jquery.dataTables.bootstrap4.min.js"></script>
<script>
    jQuery(document).ready(function(){

        $('#dt-ajax').DataTable({
            "ajax": "<?php echo base_url() ?>datatable/get_json",
            "columns": [
                { "data": "id_atk" },
                { "data": "judul_atk" },
                { "data": "isi_atk" },
                { "data": "cat_name" },
                // Kolom Action
                { 
                    "data" : null,
                    "render": function (data) {
                        return '<a href="<?php echo base_url('blog/edit/') ?>'+ data.id_atk + '" class="btn btn-sm btn-outline-primary">Edit</a> <a href="<?php echo base_url('blog/delete/') ?>'+ data.id_atk + '" class="btn btn-sm btn-outline-danger">Delete</a>' 
                    }
                },
            ],
        });
    });

</script>
