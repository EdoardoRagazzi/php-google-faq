<!-- Riscrivere questa pagina del sito google https://policies.google.com/faq.
Ci sono diverse domande con relative risposte.
Gestire il “Database” e la visualizzazione di queste domande e risposte con PHP. -->
<?php

$faqs = [
    [
        "question" => " Lorem ipsum dolor sit, amet consectetur adipisicing elit. Facere ullam sint minus accusamus, repellat facilis delectus dicta tempore ipsum ex sit doloremque iure perspiciatis tempora aliquid voluptate error possimus vero.",
        "answer" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veniam earum asperiores praesentium quia exercitationem, <br> <br> consequatur at ratione architecto omnis optio accusamus excepturi itaque blanditiis obcaecati facilis temporibus distinctio, ipsam minima deserunt id! Sequi obcaecati sint nesciunt rerum natus id voluptas illo soluta, delectus qui sapiente temporibus hic, possimus, minima exercitationem!",
    ],
    [
        "question" => " Lorem ipsum dolor sit, amet consectetur adipisicing elit. Facere ullam sint minus accusamus, repellat facilis delectus dicta tempore ipsum ex sit doloremque iure perspiciatis tempora aliquid voluptate error possimus vero.",
        "answer" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veniam earum asperiores praesentium quia exercitationem, <br> <br>consequatur at ratione architecto omnis optio accusamus excepturi itaque blanditiis obcaecati facilis temporibus distinctio, ipsam minima deserunt id! Sequi obcaecati sint nesciunt rerum natus id voluptas illo soluta, delectus qui sapiente temporibus hic, possimus, minima exercitationem!",
    ],
    [
        "question" => " Lorem ipsum dolor sit, amet consectetur adipisicing elit. Facere ullam sint minus accusamus, repellat facilis delectus dicta tempore ipsum ex sit doloremque iure perspiciatis tempora aliquid voluptate error possimus vero.",
        "answer" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veniam earum asperiores praesentium quia exercitationem, <br> <br>consequatur at ratione architecto omnis optio accusamus excepturi itaque blanditiis obcaecati facilis temporibus distinctio, ipsam minima deserunt id! Sequi obcaecati sint nesciunt rerum natus id voluptas illo soluta, delectus qui sapiente temporibus hic, possimus, minima exercitationem!",
    ],
    
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">  
    <link rel="stylesheet" href="style.css">
    <title>php-google-faq</title>
</head>
<body>
   <header>
       <div class="logo">
       <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/2f/Google_2015_logo.svg/368px-Google_2015_logo.svg.png" alt="">
       <h1>Privacy & Terms</h1>
       </div>
       <nav class="navbar navbar-light ">
            <div class="container-fluid">
                <div class="tag">
                <a class="navbar-brand" href="#">Overview</a>
                </div>
                <div class="tag">
                <a class="navbar-brand" href="#">Privacy Policy</a>
                </div>
                <div class="tag">
                <a class="navbar-brand" href="#">Terms of Service</a>
                </div>
                <div class="tag">
                <a class="navbar-brand" href="#">Technologies</a>
                </div>
                <div class="tag">
                <a class="navbar-brand" href="#">FAQ</a>
                </div>
            </div>
        </nav>


       
   </header>
   <main>
       <div class="container">
       <!-- FOREACH PER ESTRAPPOLARE L'ARRAY FAQS=NOME DELL'ARRAY  MENTRE FAQ NOME DI OGNI ELEMENTO DENTRO ALL'ARRAY  -->
        <?php foreach($faqs as $faq ){ ?>

            <h2> <?php echo $faq["question"] ?></h2>

            <p><?php echo $faq["answer"]?></p>

        <?php } ?>
      </div>
   </main>
    
</body>
</html>