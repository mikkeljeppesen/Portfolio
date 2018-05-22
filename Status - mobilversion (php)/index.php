<?php
    $db_link = mysqli_connect("localhost", "root", "", "statusopdateringer");

    if(isset($_GET['likes'])){
        
        $status_id = $_GET['status_id'];
        $query_likes = "UPDATE opdatering 
                       SET likes = likes + 1
                       WHERE status_id = $status_id";
        
    mysqli_query($db_link, $query_likes);

    header("location: index.php");

    }


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src = "assets/javascript/scroll.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="assets/css/stylephp.css">
    <title>Post</title>
</head>
<body>


        <main>

            <?php

                $query = "SELECT * FROM opdatering";
                $result = mysqli_query($db_link, $query) or die(mysqli_error($db_link));

                while($row_opdatering = mysqli_fetch_assoc($result)){
            ?>

             <section class="citat-box">

                <div class="grid-system">

                    <element class="person-info">
                        <img src="<?php echo $row_opdatering ['profilbillede']; ?>" alt="" class="profil-billede">
                        <h1 class="profil-navn"><?php echo $row_opdatering ['brugernavn']; ?></h1>
                    </element>

                    <p class="citat"><?php echo $row_opdatering ['status']; ?></p>

                    <element class="likes">
                        <p class="like-counter animated bounce"><?php echo $row_opdatering ['likes']; ?></p>
                        <a  href="?likes=true&status_id=<?php echo $row_opdatering['status_id']; ?>"><i class="fa fa-heart-o fa-2x animated infinite pulse" aria-hidden="true"></i></a>
                    </element>
                </div>
            </section>

            <?php
            }
        

            if(isset($_POST['submit_status'])) {

                $brugernavn = "funky monky";
                $profilbillede = "mig.png";


                $status = $_POST['status'];

                $query = "INSERT INTO opdatering (status, profilbillede, brugernavn) 
                        VALUES ('$status', '$profilbillede', '$brugernavn')";

                $result = mysqli_query($db_link, $query) or die(mysqli_error($db_link));

                }

                ?>

        </main>

        <footer id="bund">
                
            <form class="add-button" method="post">

                <section class="type-box animated tada">
                    <textarea rows="3" name="status" placeholder="Skriv citat her..."></textarea>
                </section>

                
                <button type="submit" name="submit_status" class="animated tada">+</button>

        </footer>


</body>
</html>