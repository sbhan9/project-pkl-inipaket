<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.87.0">
    <title>Ipaket || Login</title>
    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <style>
    .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
    }

    @media (min-width: 768px) {
        .bd-placeholder-img-lg {
            font-size: 3.5rem;
        }
    }
    </style>

    <!-- Custom styles for this template -->
    <link href="/css/signin.css" rel="stylesheet">
</head>

<body class="text-center"
    style="background-image: url('/img/background-body.jpg'); background-size: 100% auto; background-repeat:no-repeat">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card" style="border-radius: 5%; box-shadow: 0px 0px 15px 0px #a79d9d;">
                    <div class="card-body">
                        <main class="form-signin">
                            <form action="/login/index" method="post">
                                <?= csrf_field() ?>
                                <input type="hidden" name="<?= csrf_token() ?>" value="<?= csrf_hash() ?>">
                                <img class="mb-3 mt-2" src="/img/icon-title.png" alt="" width="150" height="89">
                                <?php if(session()->getFlashdata('logingagal')) : ?>
                                <div class="alert alert-danger" role="alert">
                                    <?= session()->getFlashdata('logingagal') ?>
                                </div>
                                <?php endif ?>
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="floatingInput" placeholder="inipaket"
                                        name="username" autocomplete="off" autofocus>
                                    <label for="floatingInput">Nama User</label>
                                </div>
                                <div class="form-floating">
                                    <input type="password" class="form-control" id="floatingPassword"
                                        placeholder="Password" name="password">
                                    <label for="floatingPassword">Kata Sandi</label>
                                </div>
                                <input type="hidden" name="_method" value="LOGIN">
                                <button class="w-100 mb-3 mt-3 btn btn-lg btn-primary" type="submit">Masuk</button>
                                <span class="text-muted">&copy; Ipaket <?= date('Y'); ?></span>
                            </form>
                        </main>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>