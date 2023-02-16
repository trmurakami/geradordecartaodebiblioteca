<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Gerador de cartão de biblioteca para usuários locais">
    <meta name="author" content="Tiago Murakami">
    <meta name="generator" content="Boostrap and Vue">
    <title>Gerador de cartão de biblioteca para usuários locais</title>

    <!-- Facebook Open Graph -->
    <meta property="og:title" content="Gerador de cartão de biblioteca para usuários locais" />

    <!-- Bootstrap core CSS -->
    <link href="inc/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


    <meta name="theme-color" content="#7952b3">

    <!-- development version, includes helpful console warnings -->
    <script src="inc/js/vue.js"></script>

</head>

<body>

    <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
        <div class="container">
            <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#" aria-current="page">Gerador de cartão de
                biblioteca para usuários locais
            </a>
        </div>
    </header>

    <div class="container">
        <div class="row" id="geradordecartao">

            {{ nome }}
            {{ numeroUSP }}

            <div class="mb-3">
                <label for="nome" class="form-label">Nome completo</label>
                <input type="text" class="form-control" id="nome" v-model="nome">
            </div>

            <div class="mb-3">
                <label for="numeroUSP" class="form-label">Número USP</label>
                <input type="text" class="form-control" id="numeroUSP" v-model="numeroUSP">
            </div>

        </div>
    </div>

    <footer class="footer mt-auto py-3 bg-light">
    </footer>

    <script src="inc/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script>
    var app = new Vue({
        el: '#geradordecartao',

        data: {
            nome: '',
            numeroUSP: ''
        }
    })
    </script>

</body>

</html>