<?php   
    include_once "../model/conexao.class.php";
    include_once "../model/manager.class.php";
    include_once "dependencias.php";
    
    $manager = new Manager();
    $id = $_POST['id'];
?>

    <h2 class="text-center">
        Page of Update <i class="fa fa-user-edit"></i>
    </h2><hr>

    <form action="../controller/update_client.php" method="POST">

        <div class="container">
            <div class="form-row">
            
                <?php foreach($manager->getInfo("registros", $id) as $client_info): ?>

                <div class="col-md-6">
                    Nome: <i class="fa fa-user"></i>
                    <input type="text" class="form-control" name="name" required autofocus value="<?=$client_info['name']?>"><br>
                </div>


                <div class="col-md-6">
                    Email: <i class="fa fa-envelope"></i>
                    <input type="email" class="form-control" name='email' required value="<?=$client_info['email']?>"><br>
                </div>

                <div class="col-md-4">
                    CPF: <i class="fa fa-address-card"></i>
                    <input type="text" class="form-control" name="cpf" id="cpf" required value="<?=$client_info['cpf']?>" ><br>
                </div>

                <div class="col-md-4">
                    Dt. de Nascimento: <i class="fa fa-calendar"></i>
                    <input type="date" class="form-control" name="birth" required  value="<?=$client_info['birth']?>"><br>
                </div>

                <div class="col-md-4">
                    TELEFONE: <i class="fab fa-whatsapp"></i>
                    <input type="text" class="form-control" name="phone" id="phone" required value="<?=$client_info['phone']?>"><br>
                </div>

                <div class="col-md-12">
                    Endereço: <i class="fa fa-map"></i>
                    <input type="text" class="form-control" name="address" required value="<?=$client_info['address']?>"><br>
                </div>

                <div class="col-md-4">

                    <input type="hidden" name="id" value="<?=$client_info['id']?>">

                    <?php endforeach; ?>

                        <button class="btn btn-warning btn-lg">
                            Update Client <i class="fa fa-user-edit"></i>
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
