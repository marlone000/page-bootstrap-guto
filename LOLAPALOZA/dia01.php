<!DOCTYPE html>
<html lang="pr-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Festival</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
    <video autoplay muted loop id="myVideo">
        <source src="video.mp4" type="video/mp4">
    </video>

    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <a href="index.php">
                        <img src="img/logo.png" class="img-fluid" width="450">
                    </a>
                </div>
                <div class="col-12 text-center">
                    <a href="#"><i class="bi bi-pinterest text-white ms-2 me-2" style="font-size:1.5rem"></i></a>
                    <a href="#"><i class="bi bi-facebook text-white ms-2 me-2" style="font-size:1.5rem"></i></a>
                    <a href="#"><i class="bi bi-twitter-x text-white ms-2 me-2" style="font-size:1.5rem"></i></a>
                    <a href="#"><i class="bi bi-instagram text-white ms-2 me-2" style="font-size:1.5rem"></i></a>
                    <a href="#"><i class="bi bi-tiktok text-white ms-2 me-2" style="font-size:1.5rem"></i></a>
                    <a href="#"><i class="bi bi-youtube text-white ms-2 me-2" style="font-size:1.5rem"></i></a>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col text-center">
                    <a href="dia01.php" class="btn btn-light btn-lg w-25 me-3 ms-3 fw-bolder rounded-1">Dia 01</a>
                    <a href="dia02.php" class="btn btn-outline-light btn-lg w-25 me-3 ms-3 fw-bolder rounded-1">Dia 02</a>
                    <a href="dia03.php" class="btn btn-outline-light btn-lg w-25 me-3 ms-3 fw-bolder rounded-1">Dia 03</a>
                </div>
            </div>
            <div class="container">
            <div class="row">
                <?php
                $arquivo = fopen("dia1.csv", "r");
                while(!feof($arquivo)){
                    $linha = fgets($arquivo, 1000);
                    if($linha != ""){
                        $dados = explode(";",$linha);
                        ?>
                <div class="col-lg-4 col-md-4 sm-12">
                    <div class="card" style="width: 18rem;">
                        <img src="img/<?php echo $dados[3] ?>" class="imagem" alt="<?php echo $dados[0] ?>">
                            <div class="card-body">
                                 <h5 class="card-title"><?php echo $dados[0] ?></h5>
                                     <p class="card-text"><?php echo $dados[1] ?></p>
                                     <p class="card-text"><?php echo $dados[2] ?></p>
                            </div>
                    </div>
                </div>
            
        
                        <?php
                    }
                }
                ?>
      </div>          
</div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>