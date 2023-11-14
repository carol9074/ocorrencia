<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
</form>

<form class="row g-3">
          <div class="row">
            <div class="col-md-6">
              <input type="text" class="form-control" placeholder="Nome Completo" aria-label="First name">
            </div>
              <div class="col-md-3">
              <input type="text" class="form-control" placeholder="CPF" aria-label="Last name">
            </div>
          </div>
          <div class="col-md-6"> <br>
            <input type="text" class="form-control" placeholder="Email" aria-label="First name">

          </div>
          <div class="col-md-6">
            <label for="inputPassword4" class="form-label"></label>
            <input type="password" class="form-control" id="inputPassword4" placeholder="Senha" aria-label="First name">
          </div>
          <div class="col-12">
            <label for="inputAddress" class="form-label"></label>
            <input type="text" class="form-control" id="inputAddress" placeholder="Endereço">
          </div>
          <div class="col-12">
            <label for="inputAddress2" class="form-label"></label>
            <input type="text" class="form-control" id="inputAddress2" placeholder="Complemento">
          </div>
          <div class="col-md-6">
            <label for="inputCity" class="form-label"></label>
            <input type="text" class="form-control" id="inputCity" placeholder="Cidade" aria-label="First name">
          </div>
          <div class="col-md-4">
            <label for="inputState" class="form-label"></label>
            <select id="inputState" class="form-select">
              <option selected>Bairro</option>
              <option>Centro</option>
              <option>Zona Nova</option>
              <option>São Francisco</option>
              <option>Nova Tramandaí</option>
            </select>
          </div>
          <div class="col-md-2">
            <label for="inputZip" class="form-label"></label>
            <input type="text" class="form-control" id="inputZip" placeholder="CEP" aria-label="First name">
          </div>
          <div class="col-12">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="gridCheck">
              <label class="form-check-label" for="gridCheck">
                Concordo com os Termos de Serviço.
              </label>
            </div>
          </div>
          <div class="col-12">
            <button type="submit" class="btn btn-primary">Cadastrar</button>
          </div>

          </form>