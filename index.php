<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8"/>
	<meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
  <title>Assinatura - Criando uma  Class OOP</title> 

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>


<?php
  include_once("Expiravel.php");
  include_once("Produto.php");
  include_once("Assinatura.php");

  $Assinatura = new Assinatura();
  $Assinatura->setCodigo(123);
  $Assinatura->setNome("Assinatura MVP");
  $Assinatura->setPreco(69.99);
  $Assinatura->setDataExpiracao("2018-08-20");
?>


<div class="container">  
    <div classs="row">
      <div class="col-md-4 order-md-2 mb-4">
          <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-muted">Dados da sua Assinatura</span>
            <span class="badge badge-secondary badge-pill"></span>
          </h4>
          <ul class="list-group mb-3">
            <li class="list-group-item d-flex justify-content-between lh-condesed">
              <div>
                <h6 class="my-0"><?php echo $Assinatura->getNome();?></h6>
                <small class="text-muted">Tempo de expiração</small>
              </div>
              <span class="text-muted"><?php  echo "{$Assinatura->getTempoRestante()->days} dias"?></span>
            </li>

            <li class="list-group-item d-flex justify-content-between lh-condesed">
              <div>
                <h6 class="my-0">Preço</h6>
                <small class="text-muted">Valor</small>
              </div>
              <span class="text-muted"><?php  echo "R$ {$Assinatura->getPreco()}"?></span>
            </li>
            <button class="btn btn-primary btn-lg btn-block" type="submit">Assinar</button>
        </ul>
  </div>
  </body>
  </html>