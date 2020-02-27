@extends ('template.template')

@section ('content')
<div>
        <main>
            <div class="cadastro d-flex bd-highlight">
                    <section class="w-50 h-auto" id="login">
                        <form method="POST" enctype="multipart/form-data">
                            <h3 class="p-3 mt-82 text-right">LOGIN</h3>
                            <div class="form-group">
                                <label for="email">EMAIL </label>
                                <input name="email" type="email" class="form-control" id="email" style="text-transform:uppercase">
                            </div>
                            <div class="form-group">
                                <label for="senha">SENHA</label>
                                <input name="senha" type="password" class="form-control" id="senha">  
                            </div>
                            <button type="submit" class="btn btn-block">ENTER</button>
                        </form>

                        <p> ou </p>

                    </section>
                    <aside class="w-50 h-auto m-20" id="signin">
                        <form method="POST" enctype="multipart/form-data">
                            <h3 class="p-3 mt-82 text-right">CADASTRE-SE</h3>
                            <div class="form-group">
                                <label for="nome">NOME</label>
                                <input name="nome" type="text" class="form-control" id="nome" style="text-transform:uppercase"> 
                            </div>
                            <div class="form-group">
                                <label for="email">EMAIL </label>
                                <input name="email" type="email" class="form-control" id="email" style="text-transform:uppercase">
                            </div>
                            <div class="form-group">
                                <label for="senha">SENHA</label>
                                <input name="senha" type="password" class="form-control" id="senha">  
                            </div>
                            <!-- confirmação de senha -->
                            <div class="form-group">
                                <label for="senha">CONFIRME SUA SENHA</label>
                                <input name="senha" type="password" class="form-control" id="senha">  
                            </div>
    
                            <button type="submit" class="btn btn-block">ENTER</button>
                        </form>
                    </aside>
            </div>
        </main>
    </div>
@endsection 

