<?php    include_once("dependencias.php");   ?>

<h2 class="text-center">
    Page of Register <i class="fa fa-user-plus"></i>
</h2><hr>

<form action="../controller/insert_client.php" method="post">

    <div class="container">
        <div class="form-row">
        
            <div class="col-md-6">
                Nome: <i class="fa fa-user"></i>
                <input type="text" class="form-control" name="name" required autofocus><br>
            </div>


            <div class="col-md-6">
                Email: <i class="fa fa-envelope"></i>
                <input type="email" class="form-control" name="email" required><br>
            </div>

            <div class="col-md-4">
                CPF: <i class="fa fa-address-card"></i>
                <input type="text" class="form-control" name="cpf" id="cpf" required ><br>
            </div>

            <div class="col-md-4">
                Dt. de Nascimento: <i class="fa fa-calendar"></i>
                <input type="date" class="form-control" name="birth" required ><br>
            </div>

            <div class="col-md-4">
                TELEFONE: <i class="fab fa-whatsapp"></i>
                <input type="text" class="form-control" name="fone" id="fone" required ><br>
            </div>

            <div class="col-md-12">
                Endereço: <i class="fa fa-map"></i>
                <input type="text" class="form-control" name="address" required ><br>
            </div>

            <div class="col-md-4">

                    <button class="btn btn-primary btn-lg">
                        Insert Client <i class="fa fa-user-plus"></i>
                    </button><br><br>

                <a href="../index.php"> Voltar </a>
            </div>
        </div>
    </div>

</form>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script> 

<script type="text/javascript">

    $(document).ready(function(){
        $("#cpf").mask("000.000.000-00");
        $("#fone").mask("(00) 00000-0000");
    });

</script>
