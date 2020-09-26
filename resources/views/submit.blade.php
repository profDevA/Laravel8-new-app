@extends('layouts.app')

@section('title', 'Envios')
@section('page-title', 'Envios')

@section('content')

    <!-- BEGIN : Main Content-->
    <div class="main-content send-page">
        <div class="content-overlay">

        </div>
        <div class="content-wrapper">
            <section class="send-page-top">
                <div class="row">
                    <div class="col-md-4 col-sm-12">
                        <div class="card">
                            <div class="card-content">
                                <div class="card-header">
                                    <h1>Lista de números</h1>
                                </div>
                                <div class="card-body">
                                    <table class="table-hover table-bordered w-100">
                                        <thead>
                                        <tr>
                                            <th>Contato</th>
                                            <th>Nome</th>
                                            <th>Sobren</th>
                                            <th>Status</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>121</td>
                                            <td>121</td>
                                            <td>121</td>
                                            <td>121</td>
                                        </tr>
                                        <tr>
                                            <td>121</td>
                                            <td>121</td>
                                            <td>121</td>
                                            <td>121</td>
                                        </tr>
                                        <tr>
                                            <td>121</td>
                                            <td>121</td>
                                            <td>121</td>
                                            <td>121</td>
                                        </tr>
                                        <tr>
                                            <td>121</td>
                                            <td>121</td>
                                            <td>121</td>
                                            <td>121</td>
                                        </tr>
                                        <tr>
                                            <td>121</td>
                                            <td>121</td>
                                            <td>121</td>
                                            <td>121</td>
                                        </tr>
                                        <tr>
                                            <td>121</td>
                                            <td>121</td>
                                            <td>121</td>
                                            <td>121</td>
                                        </tr>
                                        <tr>
                                            <td>121</td>
                                            <td>121</td>
                                            <td>121</td>
                                            <td>121</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <h2>Quantitade: 0</h2>
                    </div>
                    <div class="col-md-8 col-sm-12">
                        <div class="card" style="">
                            <div class="card-content">
                                <div class="card-body">
                                    <ul class="nav nav-tabs">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="base-tab11" data-toggle="tab"
                                               aria-controls="tab1" href="#tab1" aria-expanded="true">Tab 1</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="base-tab12" data-toggle="tab"
                                               aria-controls="tab2" href="#tab2" aria-expanded="false">Tab 2</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane active" id="tab1" aria-expanded="true"
                                             aria-labelledby="base-tab11">
                                            <div class="template-select">
                                                <span class="mr-2">Templates:</span>
                                                <fieldset class="form-group">
                                                    <select class="form-control" id="basicSelect">
                                                        <option>Template 1</option>
                                                        <option>Template 1</option>
                                                        <option>Template 1</option>
                                                    </select>
                                                </fieldset>
                                                <i class="fa fa-save ml-2"></i>
                                            </div>
                                            <div class="form-group">
                                                    <textarea class="form-control" id="exampleFormControlTextarea3"
                                                              rows="5"></textarea>
                                            </div>
                                            <div class="">
                                                <span class="mr-3">Caractores</span>
                                                <a class="bold mr-3">Emoji</a>
                                                <span class="bolder mr-3">B</span>
                                                <span class="italic mr-3">I</span>
                                                <a class="mr-3" href="">Nome Completo</a>
                                                <a href="" class="mr-3">Nome</a>
                                                <a href="" class="mr-3">Sobrenome</a>
                                                <a href="" class="mr-3">Tag Aliatora</a>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="tab2" aria-labelledby="base-tab12">
                                            <p class="m-0">Sugar plum tootsie roll biscuit caramels. Liquorice
                                                brownie pastry cotton candy oat cake fruitcake jelly chupa chups.
                                                Pudding caramels pastry powder cake soufflé wafer caramels. Jelly-o
                                                pie cupcake.
                                            </p>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                        <div class="middle-form-group">
                            <div class="row">
                                <div class="col-sm-2">
                                    <div class="checkbox">
                                        <input type="checkbox" id="checkbox1" checked="">
                                        <label for="checkbox1"><span>Agenda</span><br/>
                                            <span>Campanha</span></label>
                                    </div>
                                </div>
                                <div class="col-sm-1">
                                    <span>Data</span><br/>
                                    <span> Horaia</span>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <input type="date" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <input type="date" class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    span >Data</span><br/>
                                    <span> Horaia</span>
                                </div>
                                <div class="col-sm-1">
                                    <span>Data</span><br/>
                                    <span> Horaia</span>

                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <input type="date" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <input type="date" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card table ">
                            <div class="card-content">
                                <table class="table table-bordered">
                                    <tr>
                                        <th></th>
                                        <th>Numero</th>
                                        <th>Status</th>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="send-page-bottom">
                <div class="row">
                    <div class="col-sm-12 buttons-group">
                        <button class="btn btn-success float-left mr-3"><i class="fa fa-plus mr-3"></i>Inserir
                        </button>
                        <button class="btn btn-primary float-left mr-3"><i class="fa fa-edit mr-3"></i>Inserir
                        </button>
                        <span class="mr-3 float-left"> Tempo Decorente de envio</span>
                        <button class="btn btn-success float-right mr-3"><i class="fa fa-database mr-3"></i>Expotar
                            Log
                        </button>
                        <button class="btn btn-primary float-right mr-3"><i class="fa fa-edit mr-3"></i>Limpar Log
                        </button>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="progress mb-3 mt-4 w-100">
                            <div class="progress-bar bg-info progress-bar-striped" role="progressbar"
                                 aria-valuenow="68" aria-valuemin="100" aria-valuemax="100"
                                 style="width:100%"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 buttons-group">
                        <button class="btn btn-success float-right ml-3"><i class="fa fa-etsy mr-3"></i>Testar</button>
                        <button class="btn btn-primary float-right"><i class="ft-send mr-3"></i>Enviar
                        </button>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <!-- END : End Main Content-->
@stop
