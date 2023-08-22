<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2"></h1>
      </div>


			<div class="col-md-12">
			<?php if(isset($beneficiario)) : ?>
			 <form action="<?= base_url() ?>index.php/beneficiario/update/<?= $beneficiario['id_beneficiario'] ?>" method="post">
			<?php else : ?>
			 <form action="<?= base_url() ?>index.php/beneficiario/store" method="post">
			<?php endif ?>

					<div class="col-md-6">
						<div class="form-group">
							<label for="nome">Nome</label>
							<input type="text" class="form-control" name="nome" id="nome" placeholder="Nome" required value="<?= isset($beneficiario) ? $beneficiario["nome"] : null ?>">
						</div>
					</div>

					<div class="col-md-6">
						<div class="form-group">
							<label for="cpf">CPF</label>
							<input  name="cpf" id="cpf" type="number" min="11" class="form-control" required
							 value="<?= isset($beneficiario) ? $beneficiario["cpf"] : null ?>">
							
						</div>
					</div>

					<div class="col-md-6">
						<div class="form-group">
						
							<label for="Mudas">Mudas</label>

							<select name="id_mudas" id="id_mudas" class="form-control" requireds="required"> 
							<option value="<?= isset($beneficiario["id_mudas"]) ? $beneficiario["mudas"] : null ?>" required selected>
							.:Selecione:.</option>
                				<?php foreach ($mudas as $muda): ?>
									<option value="<?=$muda["id_mudas"]?>"><?=$muda["mudas"]?></option>
                				<?php endforeach; ?>
            				</select>  
							
						</div>
					</div>

					<div class="col-md-6">
						<div class="form-group">
							<label for="qtd_mudas">QTD_mudas</label>
							<input type="number" class="form-control" name="qtd_mudas" id="qtd_mudas" placeholder="Quantidade de Mudas" value="<?= isset($beneficiario) ? $beneficiario["qtd_mudas"] : null ?>" required>
						</div>
					</div>

					<div class="col-md-6">
						<div class="form-group">
						
							<label for="municipio">Município</label>
							
							
							<select  class="form-control" name="municipio_id" id="municipio_id" requireds="required"> <option required selected><? if isset($beneficiario["municipio_id"]) : null?>.:Selecione:.</option>
                			<?php foreach ($muni as $mun): ?>
                   				 <option value="<?=$mun['municipio_id']?>"> <?=$mun['municipio']?> </option>
                				<?php endforeach; ?>
            				</select>
						</div>
					</div>
					

					<div class="col-md-6">
						<div class="form-group">
							<label for="data_entrega">Data de entrega</label>
							<input type="date" class="form-control" name="data_entrega" id="data_entrega" placeholder="Data de entrega" value="<?= isset($beneficiario) ? $beneficiario["data_entrega"] : null ?>" required>
						</div>
					</div>


					<div class="col-md-6">
							<button type="submit" class="btn btn-success btn-xs"><i class="fas fa-check"></i> Save</button>
							<a href="<?=base_url()?>index.php/beneficiario" class="btn btn-danger btn-xs"><i class="fas fa-times"></i> Cancel</a>
						</div>
					</div>
				</form>
			</div>

    </main>
  </div>
</div>
