<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="http://code.jquery.com/jquery-2.2.1.min.js"></script>

    <script>
    $(document).ready(function() {
        $(".loading").fadeOut(1000);
    })
    </script>

    <title>Beranda | All In Women</title>

    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url() ?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet"
        type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">


    <!-- Custom styles for this template-->
    <link href="<?php echo base_url() ?>assets/css/sb-admin-2.min.css" rel="stylesheet">


</head>

<body>
    <div id="rounded">
        <div class="loading">
            <div class="loading">
                <div class="loading">
                    <div class="loading">
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<style>
body {
    background-color: #efefef !important
}

#rounded {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 120px;
    height: 120px;
}

.loading {
    padding: 5px;
    width: calc(100% - 0px);
    height: calc(100% - 0px);
    border: 3px solid #eaeaea;
    border-radius: 50%;
    border-top: 3px solid #09a804;
    border-bottom: 3px solid #e80606;
    animation: rotate 5s linear infinite;
}

@keyframes rotate {
    100% {
        transform: rotate(360deg)
    }
}
</style>