@extends ('template.template')

@section ('content')
<div>
    <main>
        <div class="contato">
            <h3 class="p-3 mt-82 text-right">CONTATO</h3>  
                <div class="form-group">
                    <form action="#" method="POST" tabindex="1">
                        <div class="form-group"> 
                            <label for="name">NOME</label>
                            <input class="form-control" id="name" type="name" style="text-transform:uppercase" required>
                        </div>
                        <div class="form-group">
                            <label for="email">EMAIL</label>
                            <input class="form-control" id="email" type="email" style="text-transform:uppercase" required>
                        </div>
                        <div class="input-group border border-dark">
                            <select class="custom-select" id="select">
                                <option selected>MOTIVO DO CONTATO</option>
                                <option value="1">TROCA</option>
                                <option value="2">ENTREGA</option>
                                <option value="3">PAGAMENTO</option>
                                <option value="4">DÚVIDA</option>
                                <option value="5">OUTRO</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="message">MENSAGEM</label>
                            <textarea class="form-control" id="message" type="text" style="text-transform:uppercase" required></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" type="button" class="btn btn-block">ENVIAR</button>
                        </div>
                    </form>
                </div>
            </h2>
        </div>
    </main>
</div>
@endsection 