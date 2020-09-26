@extends('layouts.app')

@section('title', 'Chatbot')
@section('page-title', 'Chatbot')

@section('content')
<div class="main-content chatbot-page">
    <div class="content-overlay"></div>
    <div class="content-wrapper">
        <section class="top-button-group">
            <div class="row">
                <div class="col">
                    <button class="btn btn-primary mr-3 float-left"><i class="ft-settings mr-3"></i>
                        Configuração
                    </button>
                    <button class="btn btn-success mr-3 float-left"><i class="fa fa-whatsapp mr-3"></i> Mensagem
                        padrão
                    </button>
                    <span class="float-right">Destivado</span>
                    <label class="switch float-right mr-3">
                        <input type="checkbox">
                        <span class="slider round"></span>
                    </label>
                    <span class="mr-3 float-right">Chatbot:</span>
                </div>
            </div>
        </section>
        <section class="table-section">
            <div class="frame">
                <span class="frame-title">Mensagens</span>
                <table class="table table-bordered w-100 text-center">
                    <tr>
                        <th></th>
                        <th>Palavra Chave/Frase</th>
                        <th>Messagen de Resposta</th>
                        <th>Aquivo anexado</th>
                        <th>Atraso</th>
                        <th>Grupo</th>
                        <th>Tags</th>
                        <th>Editar</th>
                    </tr>
                    <tr>
                        <td></td>
                        <td>Frase: 1</td>
                        <td>Cadapio</td>
                        <td><i class="fa fa-remove"></i></td>
                        <td>Segun</td>
                        <td>Cardapio</td>
                        <td>Nenhum</td>
                        <td><i class="ft-settings"></i></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>Frase: 1</td>
                        <td>Cadapio</td>
                        <td><i class="fa fa-remove"></i></td>
                        <td>Segun</td>
                        <td>Cardapio</td>
                        <td>Nenhum</td>
                        <td><i class="ft-settings"></i></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>Frase: 1</td>
                        <td>Cadapio</td>
                        <td><i class="fa fa-remove"></i></td>
                        <td>Segun</td>
                        <td>Cardapio</td>
                        <td>Nenhum</td>
                        <td><i class="ft-settings"></i></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>Frase: 1</td>
                        <td>Cadapio</td>
                        <td><i class="fa fa-remove"></i></td>
                        <td>Segun</td>
                        <td>Cardapio</td>
                        <td>Nenhum</td>
                        <td><i class="ft-settings"></i></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>Frase: 1</td>
                        <td>Cadapio</td>
                        <td><i class="fa fa-remove"></i></td>
                        <td>Segun</td>
                        <td>Cardapio</td>
                        <td>Nenhum</td>
                        <td><i class="ft-settings"></i></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>Frase: 1</td>
                        <td>Cadapio</td>
                        <td><i class="fa fa-remove"></i></td>
                        <td>Segun</td>
                        <td>Cardapio</td>
                        <td>Nenhum</td>
                        <td><i class="ft-settings"></i></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>Frase: 1</td>
                        <td>Cadapio</td>
                        <td><i class="fa fa-remove"></i></td>
                        <td>Segun</td>
                        <td>Cardapio</td>
                        <td>Nenhum</td>
                        <td><i class="ft-settings"></i></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>Frase: 1</td>
                        <td>Cadapio</td>
                        <td><i class="fa fa-remove"></i></td>
                        <td>Segun</td>
                        <td>Cardapio</td>
                        <td>Nenhum</td>
                        <td><i class="ft-settings"></i></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>Frase: 1</td>
                        <td>Cadapio</td>
                        <td><i class="fa fa-remove"></i></td>
                        <td>Segun</td>
                        <td>Cardapio</td>
                        <td>Nenhum</td>
                        <td><i class="ft-settings"></i></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>Frase: 1</td>
                        <td>Cadapio</td>
                        <td><i class="fa fa-remove"></i></td>
                        <td>Segun</td>
                        <td>Cardapio</td>
                        <td>Nenhum</td>
                        <td><i class="ft-settings"></i></td>
                    </tr>
                </table>
            </div>
        </section>
        <section class="bottom-button-group">
            <div class="row">
                <div class="col-md-3">
                    <div class="d-flex mb-2">
                        <button class="btn btn-primary arrow-up-down arrow-up d-flex justify-content-center align-items-center"><i class="fa fa-chevron-up"></i></button>
                        <button class="btn btn-success flex-grow-1 text-left">
                            <i class="fa fa-plus mr-3"></i>
                            Adicionar
                        </button>
                    </div>
                    <div class="d-flex mb-2">
                        <button class="btn btn-primary arrow-up-down arrow-down d-flex justify-content-center align-items-center"><i class="fa fa-chevron-down"></i> </button>
                        <button class="btn btn-danger flex-grow-1 text-left">
                            <i class="fa fa-remove mr-3"></i>
                            Apagar
                        </button>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="row right-top mb-2">
                        <div class="col d-flex justify-content-end">
                            <span class="mr-3">Buscapor :</span>
                            <select class="form-control mr-3" id="sel1">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                            </select>
                            <input type="text" class="form-control mr-3"/>
                            <button class="btn btn-primary"><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col d-flex justify-content-between">
                            <p>this is template exmaple this is development envthis is template</p>
                            <div class="buttons">
                                <button class="btn btn-primary mr-3"><i class="fa fa-refresh mr-3"></i> Atualizar
                                </button>
                                <button class="btn btn-success "><i class="fa fa-save mr-3"></i> Salvar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>

@stop
