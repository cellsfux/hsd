
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="icon" href="<?= URLROOT ?>assets/Favicone.png" type="image/png" sizes="16x16">
   
    <title><?= $title ?> </title>
    <link rel="stylesheet" href="<?= URLROOT ?>assets/css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

    <div id="preloader">
        <div class="loader1">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
  
   
    <?php include 'Components/Menu.php'?>

    <div class="main">

        
        <?php  if($isCarouser){ include 'Components/Carousel.php'; } ?>


    <?= $contenu ?>

     

    <?php include 'Components/Footer.php' ?>
    <script src="<?= URLROOT ?>assets/js/vendors/jquery-3.5.1.min.js"></script>
    <script src="<?= URLROOT ?>assets/js/vendors/popper.min.js"></script>
    <script src="<?= URLROOT ?>assets/js/vendors/bootstrap.min.js"></script>
    <script src="<?= URLROOT ?>assets/js/vendors/jquery.magnific-popup.min.js"></script>
    <script src="<?= URLROOT ?>assets/js/vendors/jquery.easing.min.js"></script>
    <script src="<?= URLROOT ?>assets/js/vendors/mixitup.min.js"></script>
    <script src="<?= URLROOT ?>assets/js/vendors/headroom.min.js"></script>
    <script src="<?= URLROOT ?>assets/js/vendors/smooth-scroll.min.js"></script>
    <script src="<?= URLROOT ?>assets/js/vendors/wow.min.js"></script>
    <script src="<?= URLROOT ?>assets/js/vendors/owl.carousel.min.js"></script>
    <script src="<?= URLROOT ?>assets/js/vendors/jquery.waypoints.min.js"></script>
   
    <script src="<?= URLROOT ?>assets/js/vendors/jquery.countdown.min.js"></script>
    <script src="<?= URLROOT ?>assets/js/vendors/validator.min.js"></script>
    <script src="<?= URLROOT ?>assets/js/app.js"></script>
    <script src="<?= URLROOT ?>assets/js/jison.js"></script>

    <script>
      $(document).ready(()=>{
        $.post('<?= URLROOT ?>main/services', function(response) {

            console.log(response)
           $('#services_comp').append(response);
      });
      })
    </script>
</body>

</html>