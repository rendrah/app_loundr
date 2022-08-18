<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App Loundry <?= $this->renderSection('title') ?></title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>

<body>
    <?= $this->include('layouts/components/navbar') ?>
    <div class="container-fluid">
        <div class="row">
            <?= $this->include('layouts/components/sidebar') ?>
            <div class="col-lg-10 col-md-10">
                <?= $this->renderSection('content') ?>
            </div>
        </div>
    </div>

    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <?= $this->renderSection('script') ?>
</body>

</html>