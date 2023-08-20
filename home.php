<!-- <h1><?php echo $title; ?></h1> -->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat Waktu</title>
</head>

</html>
<div class="col-lg-8 mb-4 order-0">
    <div class="card">
        <div class="d-flex align-items-end row">
            <div class="col-sm-7">
                <div class="card-body">

                        <?php
                        date_default_timezone_set("Asia/Jakarta");
                        $current_time = date("H:i");

                        $greeting = "";
                        if ($current_time >= "00:00" && $current_time < "12:00") {
                            $greeting = "Selamat pagi";
                        } elseif ($current_time >= "12:00" && $current_time < "18:00") {
                            $greeting = "Selamat siang";
                        } else {
                            $greeting = "Selamat malam";
                        }
                        ?>

                    <h5 class="card-title text-primary"><?php echo $greeting . " " . $_SESSION['Fname']; ?></h5>
                    <p class="mb-4">Belajar adalah pintu gerbang menuju pertumbuhan dan kesuksesan. Semakin Anda belajar, semakin Anda berkembang.</p>
                </div>
            </div>
            <div class="col-sm-5 text-center text-sm-left">
                <div class="card-body pb-0 px-0 px-md-4">
                    <img src="images/man-with-laptop-light.png" height="140" alt="View Badge User" data-app-dark-img="illustrations/man-with-laptop-dark.png" data-app-light-img="illustrations/man-with-laptop-light.png">
                </div>
            </div>
        </div>
    </div>
</div>
