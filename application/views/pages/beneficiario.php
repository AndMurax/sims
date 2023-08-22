<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
		<h1 class="h2">Beneficiário</h1>
		<div class="btn-group mr-2">
			<a href="http://localhost/sims/index.php/beneficiario/new" class="btn btn-sm btn-outline-secondary"><i class="fas fa-plus-square"></i> Beneficiáriro</a>
		</div>
	</div>

	<div class="table-responsive">
		<table class="table table-bordered table-hover">
			<thead>
				<tr>
					<th>#</th>
					<th>Nome</th>
					<th>CPF</th>
					<th>Tipo de Muda</th>
					<th>QTD_mudas</th>
					<th>Município</th>
					<th>Data Entrega</th>
					<th>Actions</th>
				</tr>
			</thead>
			<tbody>
                <?php foreach($beneficiario as $cidadao):?>
				<tr>
                    <td><?=$cidadao['id_beneficiario'] ?></td>
                    <td><?=$cidadao['nome'] ?></td>
                    <td><?=$cidadao['cpf'] ?></td>
					<td><?=$cidadao['mudas'] ?></td>
                    <td><?=$cidadao['qtd_mudas'] ?></td>
					<td><?=$cidadao['municipio'] ?></td>
                    <td><?=$cidadao['data_entrega'] ?></td>
					<td>
						<a href="<?= base_url()?>index.php/beneficiario/edit/<?= $cidadao['id_beneficiario']?>" class= "btn btn-warning">
							<i class= "fas fa-pencil-alt "></i>
						</a>
						<a href="<?= base_url()?>index.php/beneficiario/delete/<?= $cidadao['id_beneficiario']?>" class= "btn btn-danger">
							<i class= "fas fa-trash-alt "></i>
						</a>
					</td>

          		</tr>
                </tr>
                <?php endforeach ?>
			</tbody>
		</table>
	</div>
</main>