@extends ('template.template')

@section ('content')
<div>
    <main class="navFaq">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="entregas-tab" data-toggle="tab" href="#entregas" role="tab" aria-controls="entregas" aria-selected="true">PRAZOS DE ENTREGA</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="troca-tab" data-toggle="tab" href="#troca" role="tab" aria-controls="troca" aria-selected="true">POLÍTICA DE TROCA</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="tamanhos-tab" data-toggle="tab" href="#tamanhos" role="tab" aria-controls="tamanhos" aria-selected="false">TABELA DE TAMANHOS</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pagamentos-tab" data-toggle="tab" href="#pagamentos" role="tab" aria-controls="pagamentos" aria-selected="false">FORMAS DE PAGAMENTO</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="duvidas-tab" data-toggle="tab" href="#duvidas" role="tab" aria-controls="duvidas" aria-selected="false">OUTRAS DÚVIDAS?</a>
            </li>
        </ul>
        <div class="tab-content p-2" id="myTabContent">
            <div class="tab-pane fade show active" id="entregas" role="tabpanel" aria-labelledby="entregas-tab">
            OS PEDIDOS SÃO PROCESSADOS EM ATÉ 5 DIAS ÚTEIS APÓS A CONFIRMAÇÃO DA COMPRA. A ENTREGA É FEITA POR CORREIOS E O PRAZO VARIA DE ACORDO COM O CEP. <br>
            >>>>> PREÇOS FIXOS DE R$15 PARA CAPITAL DE SÃO PAULO / R$20 ______ / R$25 DEMAIS REGIÕES. <br>
            >>>>> VERIQUE SE O ENDEREÇO FORNECIDO É CORRETO. EM CASO DE RETORNO DE PEDIDOS POR CONTA DE ENDEREÇO INCORRETO, SERÁ COBRADO O FRETE NOVAMENTE. 
            </div>
            <div class="tab-pane fade" id="troca" role="tabpanel" aria-labelledby="troca-tab">
            CASO O PRODUTO APRESENTE ALTERAÇÕES NA QUALIDADE OU DIVERGÊNCIAS DE TAMANHO/MODELO, SOLICITE A SUBSTITUIÇÃO EM ATÉ 7 DIAS APÓS O RECEBIMENTO PELO FORMULÁRIO DE <a href="/contact">CONTATO</a>. <br>
            SÓ SERÃO ACEITOS OS ITENS QUE ESTIVEREM SEM INDÍCIOS DE USO, DENTRO DA EMBALAGEM E ENVIADOS ATÉ O PRAZO PERMITIDO.  <br>  
            >>>>> NÃO TROCAMOS ROUPAS DE BAIXO. VERIFIQUE NA DESCRIÇÃO DO ITEM SE EXISTE A POSSIBILIDADE DE TROCA ANTES DE EFETUAR A COMPRA. </div>
            <div class="tab-pane fade" id="tamanhos" role="tabpanel" aria-labelledby="tamanhos-tab">
            AS ESPECIFICAÇÕES DE TAMANHO VC ENCONTRARÁ NA DESCRIÇÃO DE CADA PRODUTO. <br>
            >>>> FIQUE ATENTO AOS CENTIMETROS. AS PEÇAS PODEM TER MEDIDAS MENORES DO QUE A NUMERAÇÃO "PADRÃO" DO MERCADO. <br>
            <strong> >>>> ESTAMOS AUMENTANDO NOSSA GRADE!!!1 </strong>
            </div>
            <div class="tab-pane fade" id="pagamentos" role="tabpanel" aria-labelledby="pagamentos-tab">
            O PAGAMENTO PODERÁ SER FEITO POR MEIO DOS CARTÕES DE CRÉDITO VISA, MASTERCARD, AMERICAN EXPRESS E DINERS.     
            </div>
            <div class="tab-pane fade" id="duvidas" role="tabpanel" aria-labelledby="duvidas-tab"> SE NÃO ENCONTROU A RESPOSTA PARA SUA DÚVIDA, ENTRE EM <a href="/contact">CONTATO</a>.</div>
        </div>
    </main>
 </div>
@endsection 