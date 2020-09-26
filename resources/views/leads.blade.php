@extends('layouts.app')

@section('title', 'Leads')
@section('page-title', 'Leads')

@section('content')
    <!-- BEGIN : Main Content-->
    <div class="main-content leads-page">
        <div class="content-overlay"></div>
        <div class="content-wrapper">
            <div class="row">
                <div class="col-sm-10 col-md-10">
                    <h1>Seus Leads (3381)</h1>
                    <table class="table table-responsive w-100 table-bordered text-center">
                        <tr>
                            <th></th>
                            <th>Número</th>
                            <th>Noem</th>
                            <th>Subrenoem</th>
                            <th>Status</th>
                            <th>Tags</th>
                            <th>Opt-in</th>
                            <th>Filtrado</th>
                            <th>Editar</th>
                        </tr>
                        <tr>
                            <td></td>
                            <td>55371545</td>
                            <td>Ahumed</td>
                            <td>Nunsic</td>
                            <td>Ativado</td>
                            <td></td>
                            <td>Não verificado</td>
                            <td>OK</td>
                            <td><i class="fa fa-edit"></i></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>55371545</td>
                            <td>Ahumed</td>
                            <td>Nunsic</td>
                            <td>Ativado</td>
                            <td></td>
                            <td>Não verificado</td>
                            <td>OK</td>
                            <td><i class="fa fa-edit"></i></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>55371545</td>
                            <td>Ahumed</td>
                            <td>Nunsic</td>
                            <td>Ativado</td>
                            <td></td>
                            <td>Não verificado</td>
                            <td>OK</td>
                            <td><i class="fa fa-edit"></i></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>55371545</td>
                            <td>Ahumed</td>
                            <td>Nunsic</td>
                            <td>Ativado</td>
                            <td></td>
                            <td>Não verificado</td>
                            <td>OK</td>
                            <td><i class="fa fa-edit"></i></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>55371545</td>
                            <td>Ahumed</td>
                            <td>Nunsic</td>
                            <td>Ativado</td>
                            <td></td>
                            <td>Não verificado</td>
                            <td>OK</td>
                            <td><i class="fa fa-edit"></i></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>55371545</td>
                            <td>Ahumed</td>
                            <td>Nunsic</td>
                            <td>Ativado</td>
                            <td></td>
                            <td>Não verificado</td>
                            <td>OK</td>
                            <td><i class="fa fa-edit"></i></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>55371545</td>
                            <td>Ahumed</td>
                            <td>Nunsic</td>
                            <td>Ativado</td>
                            <td></td>
                            <td>Não verificado</td>
                            <td>OK</td>
                            <td><i class="fa fa-edit"></i></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>55371545</td>
                            <td>Ahumed</td>
                            <td>Nunsic</td>
                            <td>Ativado</td>
                            <td></td>
                            <td>Não verificado</td>
                            <td>OK</td>
                            <td><i class="fa fa-edit"></i></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>55371545</td>
                            <td>Ahumed</td>
                            <td>Nunsic</td>
                            <td>Ativado</td>
                            <td></td>
                            <td>Não verificado</td>
                            <td>OK</td>
                            <td><i class="fa fa-edit"></i></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>55371545</td>
                            <td>Ahumed</td>
                            <td>Nunsic</td>
                            <td>Ativado</td>
                            <td></td>
                            <td>Não verificado</td>
                            <td>OK</td>
                            <td><i class="fa fa-edit"></i></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>55371545</td>
                            <td>Ahumed</td>
                            <td>Nunsic</td>
                            <td>Ativado</td>
                            <td></td>
                            <td>Não verificado</td>
                            <td>OK</td>
                            <td><i class="fa fa-edit"></i></td>
                        </tr>

                    </table>
                    <div class="d-flex justify-content-between">
                        <button class="btn btn-danger"><i class="ft-edit mr-3"></i> Remover Todos</button>
                        <button class="btn btn-danger"><i class="fa fa-remove mr-3"></i> Remover</button>
                        <button class="btn btn-primary"><i class="fa fa-database mr-3"></i> Salvar Lista</button>
                        <button class="btn btn-success"><i class="fa fa-database mr-3"></i> Importar Leads</button>
                    </div>
                </div>
                <div class="col-sm-2 col-md-2 text-left">
                    <h2>Busucar por:</h2>
                    <div class="form-group">
                        <label for="sel1">Select list:</label>
                        <select class="form-control" id="sel1">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary float-right text-left">Buscar<i class="fa fa-search ml-3"></i></button>
                        <div class="clearfix"></div>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary w-100 text-left"><i class="fa fa-user-o mr-3"></i>Adicionar</button>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-danger w-100 text-left"><i class="fa fa-power-off mr-3"></i>Desativar</button>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary w-100 text-left "><i class="ft-power mr-3"></i>Ativar</button>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary w-100 text-left "><i class="fa fa-whatsapp mr-3"></i>Sincronizar</button>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary w-100 text-left "><i class="fa fa-whatsapp mr-3"></i>Verificar opt-in
                        </button>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-danger w-100 text-left"><i class="ft-delete mr-3"></i>Apagar conversas</button>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary w-100 text-left "><i class="ft-settings mr-3"></i>Opções</button>
                    </div>

                    <div class="form-group">
                        <button class="btn btn-primary w-100 text-left "><i class="fa fa-refresh mr-3"></i>Actualizar</button>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-success w-100 text-left"><i class="ft-save mr-3"></i>Savar</button>
                    </div>


                </div>
            </div>
        </div>
    </div>
    <!-- END : End Main Content-->
@stop
