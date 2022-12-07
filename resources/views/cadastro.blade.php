<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/styles.css">
    <!-- Bosstrap CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <title>Cadastro</title>
</head>
<body>

    <section class="vh-100">
        <div id="cadastro">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-6 text-black">

              <div class="px-5 ms-xl-4">
                <i class="fas fa-crow fa-2x me-3 pt-5 mt-xl-4" style="color: #709085;"></i>
                <img id="logo" src="./imagens/fatiasCabecalhoPreto.png" alt="">
              </div>

              <div class="d-flex align-items-center h-custom-2 px-5 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-n5">

                <form action="/cadastro" method="post" style="width: 23rem;">
                    @csrf
                  <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Cadastro</h3>


                  <div class="form-outline mb-4">
                    <label class="form-label" for="form2Example18">Nome completo</label>
                    <input name="Nome" type="text" id="form2Example18" class="form-control form-control-lg" />
                  </div>


                  <div class="form-outline mb-4">
                    <label class="form-label" for="form2Example18">CPF</label>
                    <input name="CPF" type="text" id="form2Example18" class="form-control form-control-lg" />
                  </div>

                  <div class="form-outline mb-4">
                    <label class="form-label" for="form2Example18">Email</label>
                    <input name="Email" type="email" id="form2Example18" class="form-control form-control-lg" />
                  </div>

                  <div class="form-outline mb-4">
                    <label class="form-label" for="form2Example18">Celular</label>
                    <input name="Celular" type="text" id="form2Example18" class="form-control form-control-lg" />
                  </div>

                  <div class="pt-1 mb-4" id="btn-cadastrar">
                    <input style="background-color: orange;" class="btn btn-info btn-lg btn-block cadastrar" type="submit" value="Cadastrar">
                  </div>


                </form>

              </div>

            </div>
            <div class="col-sm-6 px-0 d-none d-sm-block">
              <img src="https://www.area17.com.br/admin/fotos/estabelecimentos/casa-da-pizza-cabo-de-santo-agostinho-49031_61852d78b891d.jpg"
                alt="Login image" class="w-100 vh-100" style="object-fit: cover; object-position: left;">
            </div>
          </div>
        </div>
    </div>
    </section>

</body>
</html>
