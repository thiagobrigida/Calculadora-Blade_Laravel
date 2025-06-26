<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calculadora</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-light">
    <header>
        <div class="navbar navbar-dark bg-dark shadow-sm">
            <div class="container">
              <a href="#" class="navbar-brand d-flex align-items-center">
                <img src="{{ asset('storage/imagens/logo.jpg') }}" width="50" height="51" class="me-2 rounded-circle">
                <strong class="px-2">Calculadora</strong>
              </a>
            </div>
        </div>
    </header>

    <main class="container py-5">
        <div class="row justify-content-center">

            <div class="col-md-3 mb-4">
              <div class="card shadow-sm h-100">
                <img class="card-img-top" src="{{asset('storage/imagens/soma.png')}}" alt="Imagem da soma">
                <div class="card-body text-center d-flex flex-column">
                    <div class="mt-auto">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal_soma">
                          Somar
                        </button>
                    </div>
                </div>
              </div>
            </div>

            <div class="col-md-3 mb-4">
              <div class="card shadow-sm h-100">
                <img class="card-img-top" src="{{asset('storage/imagens/subtracao.png')}}" alt="Imagem da subtracao">
                <div class="card-body text-center d-flex flex-column">
                     <div class="mt-auto">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal_subtracao">
                          Subtrair
                        </button>
                    </div>
                </div>
              </div>
            </div>

            <div class="col-md-3 mb-4">
              <div class="card shadow-sm h-100">
                <img class="card-img-top" src="{{asset('storage/imagens/multiplicacao.png')}}" alt="Imagem da multiplicacao">
                <div class="card-body text-center d-flex flex-column">
                    <div class="mt-auto">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal_multiplicacao">
                          Multiplicar
                        </button>
                    </div>
                </div>
              </div>
            </div>

            <div class="col-md-3 mb-4">
              <div class="card shadow-sm h-100">
                <img class="card-img-top" src="{{asset('storage/imagens/divisao.png')}}" alt="Imagem da divisao">
                <div class="card-body text-center d-flex flex-column">
                    <div class="mt-auto">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal_divisao">
                          Dividir
                        </button>
                    </div>
                </div>
              </div>
            </div>

        </div>

        <!-- Modal Soma -->
        <div class="modal fade" id="modal_soma" tabindex="-1" aria-labelledby="somaModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="somaModalLabel">Informe a quantidade de números</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
              </div>
              <div class="modal-body">
                <form method="POST" action="/somar">
                  @csrf
                  <div class="mb-3">
                    <label for="soma-quantidade" class="form-label">Quantidade:</label>
                    <input type="number" id="soma-quantidade" name="quantidade" class="form-control" min="2"  required>
                  </div>
                  <div class="d-flex justify-content-end">
                      <button type="button" class="btn btn-secondary me-2" data-bs-dismiss="modal">Cancelar</button>
                      <button type="submit" class="btn btn-primary">Enviar</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>

        <!-- Modal Subtração -->
        <div class="modal fade" id="modal_subtracao" tabindex="-1" aria-labelledby="subtracaoModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="subtracaoModalLabel">Informe a quantidade de números</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
              </div>
              <div class="modal-body">
                <form method="POST" action="/subtrair">
                  @csrf
                   <div class="mb-3">
                    <label for="sub-quantidade" class="form-label">Quantidade:</label>
                    <input type="number" id="sub-quantidade" name="quantidade" class="form-control" min="2"  required>
                  </div>
                  <div class="d-flex justify-content-end">
                      <button type="button" class="btn btn-secondary me-2" data-bs-dismiss="modal">Cancelar</button>
                      <button type="submit" class="btn btn-primary">Enviar</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>

        <!-- Modal Multiplicação -->
        <div class="modal fade" id="modal_multiplicacao" tabindex="-1" aria-labelledby="multiplicacaoModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="multiplicacaoModalLabel">Informe a quantidade de números</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
              </div>
              <div class="modal-body">
                <form method="POST" action="/multiplicar">
                  @csrf
                   <div class="mb-3">
                    <label for="mult-quantidade" class="form-label">Quantidade:</label>
                    <input type="number" id="mult-quantidade" name="quantidade" class="form-control" min="2"  required>
                  </div>
                  <div class="d-flex justify-content-end">
                      <button type="button" class="btn btn-secondary me-2" data-bs-dismiss="modal">Cancelar</button>
                      <button type="submit" class="btn btn-primary">Enviar</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>

        <!-- Modal Divisão -->
        <div class="modal fade" id="modal_divisao" tabindex="-1" aria-labelledby="divisaoModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="divisaoModalLabel">Informe a quantidade de números</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
              </div>
              <div class="modal-body">
                <form method="POST" action="/dividir">
                  @csrf
                   <div class="mb-3">
                    <label for="div-quantidade" class="form-label">Quantidade:</label>
                    <input type="number" id="div-quantidade" name="quantidade" class="form-control" min="2"  required>
                  </div>
                  <div class="d-flex justify-content-end">
                      <button type="button" class="btn btn-secondary me-2" data-bs-dismiss="modal">Cancelar</button>
                      <button type="submit" class="btn btn-primary">Enviar</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>

    </main>
</body>
</html>
