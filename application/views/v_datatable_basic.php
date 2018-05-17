<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<main role="main">

	<section class="jumbotron text-center">
		<div class="container">
			<h1 class="jumbotron-heading">Basic DataTables</h1>
			
		</div>
    </section>
    
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <table id="examples" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Judul Artikel</th>
                            <th>Content</th>
                            <th>Kategori</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($data as $d) : ?>
                        <tr>
                            <td><?php echo $d->id_atk ?></td>
                            <td><?php echo $d->judul_atk ?></td>
                            <td><?php echo $d->isi_atk ?></td>
                            <td><?php echo $d->cat_name ?></td>
                            <td>
                                <a href="<?php echo base_url('/blog/edit/') . $d->id_atk ?>" class="btn btn-sm btn-outline-primary">Edit</a> 
                                <a href="<?php echo base_url('/blog/delete/') . $d->id_atk ?>" class="btn btn-sm btn-outline-danger">Delete</a> 
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
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


        // Contoh inisialisasi Datatable tanpa konfigurasi apapun
        // #dt-basic adalah id html dari tabel yang diinisialisasi
        $('#examples').DataTable(
                
            );
    });

</script>
