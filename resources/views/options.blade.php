@extends('layouts.app')

@section('title', 'Configurações')
@section('page-title', 'Configurações')

@section('content')

    <!-- BEGIN : Main Content-->
    <div class="main-content options-page">
        <div class="content-overlay"></div>
        <div class="content-wrapper">
            <div class="option-container row">
                <div class="col-md-6 col-sm-12">
                    <div class="frame w-100 mb-3">
                        <span class="frame-title">Atraso entre Envios</span>
                        <div class="slidecontainer">
                            <input type="range" min="1" max="100" value="50" class="slider" id="myRange">
                        </div>
                        <div id="range-output" class="text-center"></div>
                    </div>
                    <div class="frame w-100 mb-3">
                        <div class="row">
                            <div class="col">
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input" value="">Ativa pausa entre os
                                        envios
                                    </label>
                                </div>
                            </div>
                            <div class="col">
                                <div class="row">
                                    <div class="col mb-3 d-flex">
                                        <span class="input-span">Deposi de:</span>
                                        <input class="mr-3" type="number" value="10">
                                        <span>Mensagens</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col d-flex">
                                        <span class="input-span
">Agurade 20:</span>
                                        <input class="mr-3" type="number" value="10">
                                        <span>Segundos</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="frame w-100 mb-3">
                            <span class="frame-title">
                                Templates
                            </span>
                        <div class="form-group">
                            <label for="sel1">Select list:</label>
                            <select class="form-control" id="sel1">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                            </select>
                        </div>
                        <div class="form-group d-flex justify-content-between">
                            <button class="btn btn-light">Apagar Selecionada</button>
                            <button class="btn btn-light">Apagar Selecionada</button>
                            <button class="btn btn-light">Apagar Selecionada</button>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" rows="5"></textarea>
                        </div>
                        <p>Adicionar na Mensagem <a href="#">EMOJI</a></p>
                        <div class="form-group d-flex justify-content-between">
                            <button class="btn btn-light">Apagar Selecionada</button>
                            <button class="btn btn-light">Apagar Selecionada</button>
                            <button class="btn btn-light">Apagar Selecionada</button>
                        </div>
                        <div class="form-group d-flex justify-content-between">
                            <button class="btn btn-light">Apagar Selecionada</button>
                            <button class="btn btn-light">Apagar Selecionada</button>
                            <button class="btn btn-light">Apagar Selecionada</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="frame w-100 mb-3">
                        <span class="frame-title">Ativar Desativar Lead</span>
                        <div class="custom-control custom-checkbox mb-3">
                            <input type="checkbox" class="custom-control-input" id="customCheck" name="example1">
                            <label class="custom-control-label" for="customCheck">Check this custom checkbox</label>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <h3>Ativar</h3>
                                <div class="form-group">
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <textarea rows="5" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <h3>Destivar</h3>
                                <div class="form-group">
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <textarea rows="5" class="form-control"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="frame w-100 mb-3">
                        <span class="frame-title">Seguranca</span>
                        <div class="row">
                            <div class="col-sm-7">
                                <p>this is test sentense.this is test sentense.this is test sentense.this is test
                                    sentense.</p>
                            </div>
                            <div class="col-sm-5">
                                <button class="btn btn-success"><i class="fa fa-database mr-2"></i>Carregar</button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-7">
                                <p>this is test sentense.this is test sentense.this is test sentense.this is test
                                    sentense.</p>
                            </div>
                            <div class="col-sm-5">
                                <button class="btn btn-success"><i class="fa ft-disc mr-2"></i>Backup</button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-7">
                                <p>this is test sentense.this is test sentense.this is test sentense.this is test
                                    sentense.</p>
                            </div>
                            <div class="col-sm-5">
                                <button class="btn btn-success mr-2">Exbir</button>
                                <button class="btn btn-success">Ocultar</button>
                            </div>
                        </div>
                    </div>
                    <div class="frame w-100 mb-3">
                        <span class="frame-title">Otimização</span>
                        <div class="row">
                            <div class="col-sm-7">
                                <button class="btn btn-success"><i class="fa fa-book mr-2"></i>Limpar o whatsapp
                                    connector
                                </button>

                            </div>
                            <div class="col-sm-5">
                                <div class="custom-control custom-checkbox mb-3">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1"
                                           name="example1">
                                    <label class="custom-control-label" for="customCheck1">Artivar limpeza
                                        automatica</label>
                                </div>
                                <div>
                                    <span>A cada</span>
                                    <input type="text" class="" value="1">
                                    <span>Hora(s)</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="custom-control custom-checkbox mb-3">
                        <input type="checkbox" class="custom-control-input" id="customCheck2" name="example1">
                        <label class="custom-control-label" for="customCheck2">Artivar limpeza automatica</label>
                    </div>
                    <div class="">
                        <a href="#">Ajuda</a>
                        <a href="#">Repotar bug</a>
                        <button class="btn btn-primary"><i class="fa fa-save"></i> Salvar</button>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- END : End Main Content-->
@stop
