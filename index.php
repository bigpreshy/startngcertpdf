
<!DOCTYPE html>
<html lang="en">
<head>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="description" content="HNG Internship 6.0 offers the best on hands practice in the world of programming. Join the pre-internship">
    <meta name="keywords" content="hng, start, internship, beginner, developer" />
    <meta property="og:title" content="StartNG Certification" />
    <meta property="og:image" content="https://res.cloudinary.com/jeffogah/image/upload/v1564073433/Start_Default.png" />
    <meta property="og:description" content="HNG Internship 6.0 offers the best on hands practice in the world of programming. Join the pre-internship" />
    <title>Download Certificate</title>

    <!-- CSS and JS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
    <link rel="stylesheet" type="text/css" href="https://start.ng/css/index.css" />
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.2/jspdf.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='http://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
    <style>
        body {
            font-family: 'Lato';
        }
        h1 { margin-top: 70px;}
        h1, h4 {
            text-align: center;
            color: #084482;
            font-weight: bold;
        }
        h4 {margin-bottom: 30px;}
        p {font-size: 1.12rem; font-weight: bold;}
        @media (max-width: 480px) {
            h1 { font-size: 30px; margin-top: 40px;}
            h4 { font-size: 12px; }
        }
    </styl
    </style>
</head>
</head>
<body>
<div class="container">
    <h1>Download My Certificate</h1>
    <h4>Congratulations on completing the Beginner Software Development Training</h4>

    <p>Name: PRECIOUS LUKE<br>
    Code: SHN01523<br>
    Score: 62%</p>



    <h5>Copy Link to Certificate</h5>
    <form method="post" class="form-inline mb-3">
        <div class="form-group mr-2 mb-2">
            <input name="verify" type="text" class="form-control" id="certificate-link" size="60"< value="https://start.ng/verify/16N5F3Z">
        </div>
        <button class="btn btn-outline-primary mb-2" onclick="copyLink()"><i class="fa fa-clone"></i> Copy Link</button>
    </form>
    
    <p style="color: #FFA800; font-size: 1rem;">Note: you can print the certificate on desktop or share the link for reference purposes</p>

   <!-- <a href="/certification/precious-luke-shn01523/download"> 
   I intentionally commented this out.
    </a>
   -->

   <form method ="post" action = "certificate.php">

    <button class="btn btn-primary"><i class="fa fa-download"></i>&nbsp; VIEW CERTIFICATE</button>
    </form>

   

    

</div>

<script>
        function copyLink() {
        /* Get the text field */
        var copyText = document.getElementById("certificate-link");

        /* Select the text field */
        copyText.select();
        copyText.setSelectionRange(0, 99999); /*For mobile devices*/

        /* Copy the text inside the text field */
        document.execCommand("copy");

        /* Alert the copied text */
        alert("Copied the text: " + copyText.value);
        }
</script>

</body>
</html>