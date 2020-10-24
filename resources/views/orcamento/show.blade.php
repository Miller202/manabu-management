@extends('layouts.app')

@section('content')
    <div id="createBudget" class="box-alert">
        <div class="web-div-box mt-5">
            <div class="box-div-info    ">
                <p><img src="img/icone-pagamento.png"> Cadastrar novo orçamento.</p>
                <hr>
                <div class="form-group text-right">
                    <p class="text-left"><img src="img/icone-novo-orcamento.png"> Insira o nome do novo orçamento:</p>
                    <input type="text" id="budgetName" name="budgetName" class="form-control" placeholder="Nome do orçamento">
                    <button type="button" class="btn btn-style-2 mt-3" onclick="hideCreateBudget()">Cancelar</button>
                    <button type="button" class="btn btn-style-1 mt-3">Cadastrar</button>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row mt-5">
            <div class="col-xl-3 mb-5">
                <div class="web-div-box">
                    <div class="box-div-info">
                        <p style="font-weight: bold"><img src="img/icone-pesquisa.png"> Filtro</p>
                        <hr>

                        <div class="form-group">
                            <p><img src="img/icone-select.png"> Campo:</p>
                            <select class="form-control" id="filterSelect" name="filterSelect">
                                <option value="0">Nome</option>
                                <option value="1">Valor estimado</option>
                                <option value="2">Valor realizado</option>
                                <option value="3">Status</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <p><img src="img/icone-texto.png"> Texto:</p>
                            <input type="text" class="form-control" id="text" name="text" title="Texto" onkeyup="tableFilter()" placeholder="Insira um texto" required>
                        </div>

                        <hr>

                        <p class="div-box-action" onclick="showCreateBudget()"><img src="img/icone-novo-orcamento.png"> Criar novo orçamento</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-9 mb-5">
                <div class="web-div-box">
                    <div class="box-div-info">
                        <div class="table-title">
                            <img src="img/icone-pagamento.png"> Orçamentos
{{--                            <div class="dropleft div-box-span-icon">--}}
{{--                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">--}}
{{--                                    <a class="dropdown-item" href="#"><img src="img/icone-planilha.png"> Exportar lista de pagamentos</a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
                        </div>
                        <hr style="margin-bottom: 0">
                        <div class="box-div-info-overflow-x">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th scope="col">Nome</th>
                                    <th scope="col">Valor estimado</th>
                                    <th scope="col">Valor realizado</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Ações</th>
                                </tr>
                                </thead>
                                <tbody id="table-data">
                                    <tr onclick="openPage(123)">
                                        <td>Desenvolvimento</td>
                                        <td>R$ 9.500,00</td>
                                        <td>R$ 5.200,00</td>
                                        <td>Elaboração</td>
                                        <td class="table-td-actions"><span class="icon-list" title="Listar"></span>&ensp;<span class="icon-edit" title="Editar"></span>&ensp;<span class="icon-trash" title="Apagar"></span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        $('.js-pscroll').each(function(){
            var ps = new PerfectScrollbar(this);

            $(window).on('resize', function(){
                ps.update();
            })
        });

        function openPage(data) {
            // window.open('localhost:8000/budgets', '_blank');
        }

        function exportData() {
            $("#loader-div").show();
            let data = {'exportType': 1};
        }

        function createNewBudget() {
            let identity = $("#identityRecovery").val();
            let data = {'identity': identity};
            hideCreateBudget();

            alert("Caso esse usuário exista, dentro de alguns minutos uma senha de recuperação Orditi será enviada para seu email.");
        }

        function hideCreateBudget() {
            $("#createBudget").hide();
        }

        function showCreateBudget() {
            $("#createBudget").show();
        }

        function tableFilter() {
            let input, filter, table, tr, td, i, txtValue;
            let selectedOption = $("#filterSelect").val();

            input = document.getElementById("text");
            filter = input.value.toUpperCase();
            table = document.getElementById("table-data");
            tr = table.getElementsByTagName("tr");
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[selectedOption];
                if (td) {
                    txtValue = td.textContent || td.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }
        }
    </script>
@endsection
