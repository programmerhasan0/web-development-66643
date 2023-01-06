<?php
//Student Informations
$name = "MD Habibul Hasan";
$department = "Computer";
$age = 18;
$roll = 542719;
$reg = 1502115940;
$shift = 1;
$section = 'B';
$inst = "Thakurgaon Polytechnic Institute";

// Paste your facebook Profile Url Here
$imgUrl = "https://scontent.fspd3-1.fna.fbcdn.net/v/t1.6435-9/193251795_1150467045417705_4041807891093011329_n.jpg?_nc_cat=105&ccb=1-7&_nc_sid=09cbfe&_nc_eui2=AeGBIxOFk0RvhhNdufm8nfqqnIQVYwJkHAmchBVjAmQcCSQ8-Xw993Ouo6wixKUuCfUYpAYG-Z16l_AkaG6bPwnW&_nc_ohc=hXH0edlscRQAX9_eJrY&_nc_ht=scontent.fspd3-1.fna&oh=00_AfA_LIhUTG8RHWZDRFuM_TuPugn5fzr0DiwfAHS3YDov7w&oe=63DEB50D";

// Environment Informations
$siteUrl = "http://localhost/college";
$siteStylesUrl = $siteUrl . "/styles";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $siteStylesUrl ?>/main.css">
    <title>Home</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-success">
        <div class="container">
            <a class="navbar-brand" href="<?php echo $siteUrl; ?>">TPI</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="<?php echo $siteUrl; ?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $siteUrl; ?>/contact.php">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="container">
        <section class="collegeDetails">
            <h4 class="text-center mb-5 mt-3">Welcome to Thakurgaon Polytechnic Institute</h4>
            <div class="d-flex">
                <div class="row justify-content-center">
                    <div class="col-md-4">
                        <p class="text-justify"> Thakurgaon Polytechnic Institute is a new technical institute in
                            Bangladesh.This polytechnic institute was established in 2004. Starting with one department
                            the
                            institution currently has 5 departments running four-year Diploma-in-Engineering courses.
                        </p>

                        <p>
                            This Institute currently has 5 departments including:
                        <ol>
                            <li>Mechatronics</li>
                            <li>Computer Science</li>
                            <li>Architecture</li>
                            <li>Refrigeration And Air Conditioning</li>
                            <li>Food</li>
                        </ol>
                        </p>
                        <p><b>This Institute does not has any hostel</b></p>
                        <p>Current Principal : Engr Md. Maksudur Rahman</p>

                    </div>
                    <div class="col-md-1"></div>
                    <div class="col-md-5"><img
                            src="https://upload.wikimedia.org/wikipedia/commons/4/42/Thakurgaon_polytechnic_institute.jpg"
                            alt="tpi.jpg" class="img-fluid h-75"></div>

                </div>
            </div>
        </section>
        <section class="developerDetails">
            <h4 class="text-center mb-5 mt-3">Site Creator Info</h4>
            <div class="d-flex">
                <div class="row justify-content-center">
                    <div class="col-md-4">
                        <h2>Hello,</h2>
                        My Name is <?php echo $name; ?> and I am student of <?php echo $department ?> technology at
                        <?php echo $inst ?>. My Informations are below :
                        <br>
                        <br>
                        <b>
                            <div>Name : <?php echo $name; ?></div>
                            <div>Department : <?php echo $department ?> Technology</div>
                            <div>Roll : <?php echo $roll; ?></div>
                            <div>Registration Number : <?php echo $reg; ?></div>
                            <div>Shift : <?php echo $shift; ?><sup>
                                    <?php
                                    if ($shift === 1) {
                                        echo "st";
                                    } else if ($shift === 2) {
                                        echo "nd";
                                    }


                                    ?>
                                </sup></div>
                            <div>Section : <?php echo $section; ?></div>
                            <div>Institute : <?php echo $inst; ?></div>
                        </b>
                    </div>
                    <div class="col-md-1"></div>
                    <div class="col-md-5"><img src="<?php echo $imgUrl; ?>" alt="tpi.jpg" class="img-fluid h-75"></div>

                </div>
            </div>
        </section>
    </main>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
    integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD"
    crossorigin="anonymous"></script>

</html>