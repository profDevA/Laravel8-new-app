@extends('layouts.app')

@section('title', 'Início')
@section('page-title', 'Início')

@section('content')
      <!-- BEGIN : Main Content-->
      <div class="main-content home-page">
        <div class="content-overlay"></div>
        <div class="content-wrapper">
          <section class="counters">
            <div class="row">
              <div class="col-md-7">
                <div class="row">
                  <div class="col-sm-6">
                    <div class="home-item">
                      <div class="card">
                        <div class="card-content">
                          <div class="counter d-flex justify-content-between text-center">
                            <div class="left w-50">
                              <i class="fa fa-user mr-1"></i>
                              <span>Leads</span>
                            </div>
                            <div class="right w-50">
                              <span>3881</span>
                            </div>
                          </div>
                          <div class="counter-description p-2">
                            <p>Abitos: 3381</p>
                            <p>Inativos: 0</p>
                            <p>Tags Criads: 220</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="home-item">
                      <div class="card">
                        <div class="card-content">
                          <div class="counter d-flex justify-content-between text-center">
                            <div class="left w-50">
                              <i class="icon-chatbot mr-1">
                                <svg version="1.1" id="" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                     x="0px" y="0px" viewBox="0 0 122.88 105.21" style="enable-background:new 0 0 122.88 105.21"
                                     xml:space="preserve">
                                  <style type="text/css">
                                    .st0 {
                                      fill-rule: evenodd;
                                      clip-rule: evenodd;
                                    }
                                  </style>
                                                <g>
                                    <path class="st0"
                                          d="M63.91,18.75v12.16h33.51c5.43,0,9.87,4.44,9.87,9.87v12.47h13.42c1.19,0,2.17,0.97,2.17,2.17v25.28 c0,1.19-0.97,2.17-2.17,2.17h-13.42v12.47c0,5.43-4.44,9.87-9.87,9.87h-73c-5.43,0-9.87-4.44-9.87-9.87V82.87H2.17 C0.97,82.87,0,81.9,0,80.71V55.42c0-1.19,0.97-2.17,2.17-2.17h12.38V40.79c0-5.43,4.44-9.87,9.87-9.87h33.51V18.75 c-3.85-1.26-6.62-4.87-6.62-9.14c0-5.31,4.3-9.61,9.61-9.61c5.31,0,9.61,4.3,9.61,9.61C70.53,13.88,67.75,17.49,63.91,18.75 L63.91,18.75z M41.03,79.74h40.81c1.99,0,3.62,1.63,3.62,3.62v1.7c0,1.99-1.63,3.62-3.62,3.62H41.03c-1.99,0-3.62-1.63-3.62-3.62 v-1.7C37.41,81.36,39.04,79.74,41.03,79.74L41.03,79.74z M78.7,47.59c5.37,0,9.73,4.35,9.73,9.73c0,5.37-4.35,9.72-9.73,9.72 s-9.72-4.35-9.72-9.72C68.97,51.94,73.33,47.59,78.7,47.59L78.7,47.59z M44.18,47.59c5.37,0,9.72,4.35,9.72,9.73 c0,5.37-4.35,9.72-9.72,9.72c-5.37,0-9.72-4.35-9.72-9.72C34.46,51.94,38.81,47.59,44.18,47.59L44.18,47.59z" />
                                  </g>
                                </svg>
                              </i>
                              <span>Leads</span>
                            </div>
                            <div class="right w-50">
                              <span>2555</span>
                            </div>
                          </div>
                          <div class="counter-description p-2">
                            <p>Abitos: 3381</p>
                            <p>Inativos: 0</p>
                            <p>Tags Criads: 220</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-5 col-sm-12 ">
                <div class="home-item">
                  <div class="card">
                    <div class="card-content">
                      <div class="counter d-flex justify-content-between text-center">
                        <div class="left w-50">
                          <i class="ft-send mr-1"></i>
                          <span>Leads</span>
                        </div>
                        <div class="right w-50">
                          <span>3881</span>
                        </div>
                      </div>
                      <div class="counter-description p-2">
                        <p>Abitos: 3381</p>
                        <p>Inativos: 0</p>
                        <p>Tags Criads: 220</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>

          <section class="graphs">
            <div class="row">
              <div class="col-md-7">
                <div class="home-item">
                  <div class="card">
                    <div class="card-content">
                      <div class="card">
                        <div class="card-header">
                          <h4 class="card-title">Distributed Series Bar Chart</h4>
                        </div>
                        <div class="card-content">
                          <div class="card-body">
                            <div id="distributed-bar-chart" class="height-400">
                              <svg xmlns:ct="http://gionkunz.github.com/chartist-js/ct" width="100%" height="100%" class="ct-chart-bar" style="width: 100%; height: 100%;"><g class="ct-grids"><line x1="50" x2="50" y1="15" y2="365" class="ct-grid ct-horizontal"></line><line x1="171.14285714285714" x2="171.14285714285714" y1="15" y2="365" class="ct-grid ct-horizontal"></line><line x1="292.2857142857143" x2="292.2857142857143" y1="15" y2="365" class="ct-grid ct-horizontal"></line><line x1="413.42857142857144" x2="413.42857142857144" y1="15" y2="365" class="ct-grid ct-horizontal"></line><line x1="534.5714285714286" x2="534.5714285714286" y1="15" y2="365" class="ct-grid ct-horizontal"></line><line x1="655.7142857142857" x2="655.7142857142857" y1="15" y2="365" class="ct-grid ct-horizontal"></line><line x1="776.8571428571429" x2="776.8571428571429" y1="15" y2="365" class="ct-grid ct-horizontal"></line><line y1="365" y2="365" x1="50" x2="898" class="ct-grid ct-vertical"></line><line y1="321.25" y2="321.25" x1="50" x2="898" class="ct-grid ct-vertical"></line><line y1="277.5" y2="277.5" x1="50" x2="898" class="ct-grid ct-vertical"></line><line y1="233.75" y2="233.75" x1="50" x2="898" class="ct-grid ct-vertical"></line><line y1="190" y2="190" x1="50" x2="898" class="ct-grid ct-vertical"></line><line y1="146.25" y2="146.25" x1="50" x2="898" class="ct-grid ct-vertical"></line><line y1="102.5" y2="102.5" x1="50" x2="898" class="ct-grid ct-vertical"></line><line y1="58.75" y2="58.75" x1="50" x2="898" class="ct-grid ct-vertical"></line><line y1="15" y2="15" x1="50" x2="898" class="ct-grid ct-vertical"></line></g><g><g class="ct-series ct-series-a"><line x1="110.57142857142857" x2="110.57142857142857" y1="365" y2="277.5" class="ct-bar" ct:value="50"></line></g><g class="ct-series ct-series-b"><line x1="231.71428571428572" x2="231.71428571428572" y1="365" y2="242.5" class="ct-bar" ct:value="70"></line></g><g class="ct-series ct-series-c"><line x1="352.85714285714283" x2="352.85714285714283" y1="365" y2="155" class="ct-bar" ct:value="120"></line></g><g class="ct-series ct-series-d"><line x1="474" x2="474" y1="365" y2="15" class="ct-bar" ct:value="200"></line></g><g class="ct-series ct-series-e"><line x1="595.1428571428571" x2="595.1428571428571" y1="365" y2="50" class="ct-bar" ct:value="180"></line></g><g class="ct-series ct-series-f"><line x1="716.2857142857142" x2="716.2857142857142" y1="365" y2="155" class="ct-bar" ct:value="120"></line></g><g class="ct-series ct-series-g"><line x1="837.4285714285714" x2="837.4285714285714" y1="365" y2="102.5" class="ct-bar" ct:value="150"></line></g></g><g class="ct-labels"><foreignObject style="overflow: visible;" x="50" y="370" width="121.14285714285714" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 121px; height: 20px;">XS</span></foreignObject><foreignObject style="overflow: visible;" x="171.14285714285714" y="370" width="121.14285714285714" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 121px; height: 20px;">S</span></foreignObject><foreignObject style="overflow: visible;" x="292.2857142857143" y="370" width="121.14285714285717" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 121px; height: 20px;">M</span></foreignObject><foreignObject style="overflow: visible;" x="413.42857142857144" y="370" width="121.14285714285711" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 121px; height: 20px;">L</span></foreignObject><foreignObject style="overflow: visible;" x="534.5714285714286" y="370" width="121.14285714285711" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 121px; height: 20px;">XL</span></foreignObject><foreignObject style="overflow: visible;" x="655.7142857142857" y="370" width="121.14285714285722" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 121px; height: 20px;">XXL</span></foreignObject><foreignObject style="overflow: visible;" x="776.8571428571429" y="370" width="121.14285714285711" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 121px; height: 20px;">XXXL</span></foreignObject><foreignObject style="overflow: visible;" y="321.25" x="10" height="43.75" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 44px; width: 30px;">0</span></foreignObject><foreignObject style="overflow: visible;" y="277.5" x="10" height="43.75" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 44px; width: 30px;">25</span></foreignObject><foreignObject style="overflow: visible;" y="233.75" x="10" height="43.75" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 44px; width: 30px;">50</span></foreignObject><foreignObject style="overflow: visible;" y="190" x="10" height="43.75" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 44px; width: 30px;">75</span></foreignObject><foreignObject style="overflow: visible;" y="146.25" x="10" height="43.75" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 44px; width: 30px;">100</span></foreignObject><foreignObject style="overflow: visible;" y="102.5" x="10" height="43.75" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 44px; width: 30px;">125</span></foreignObject><foreignObject style="overflow: visible;" y="58.75" x="10" height="43.75" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 44px; width: 30px;">150</span></foreignObject><foreignObject style="overflow: visible;" y="15" x="10" height="43.75" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 44px; width: 30px;">175</span></foreignObject><foreignObject style="overflow: visible;" y="-15" x="10" height="30" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 30px; width: 30px;">200</span></foreignObject></g></svg></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-5 col-sm-12 ">
                <div class="home-item">
                  <div class="card">
                    <div class="card-content">
                      <div class="card">
                        <div class="card-header">
                          <h4 class="card-title">Distributed Series Bar Chart</h4>
                        </div>
                        <div class="card-content">
                          <div class="card-body">
                            <div id="distributed-bar-chart-1" class="height-400">
                              <svg xmlns:ct="http://gionkunz.github.com/chartist-js/ct" width="100%" height="100%" class="ct-chart-bar" style="width: 100%; height: 100%;"><g class="ct-grids"><line x1="50" x2="50" y1="15" y2="365" class="ct-grid ct-horizontal"></line><line x1="171.14285714285714" x2="171.14285714285714" y1="15" y2="365" class="ct-grid ct-horizontal"></line><line x1="292.2857142857143" x2="292.2857142857143" y1="15" y2="365" class="ct-grid ct-horizontal"></line><line x1="413.42857142857144" x2="413.42857142857144" y1="15" y2="365" class="ct-grid ct-horizontal"></line><line x1="534.5714285714286" x2="534.5714285714286" y1="15" y2="365" class="ct-grid ct-horizontal"></line><line x1="655.7142857142857" x2="655.7142857142857" y1="15" y2="365" class="ct-grid ct-horizontal"></line><line x1="776.8571428571429" x2="776.8571428571429" y1="15" y2="365" class="ct-grid ct-horizontal"></line><line y1="365" y2="365" x1="50" x2="898" class="ct-grid ct-vertical"></line><line y1="321.25" y2="321.25" x1="50" x2="898" class="ct-grid ct-vertical"></line><line y1="277.5" y2="277.5" x1="50" x2="898" class="ct-grid ct-vertical"></line><line y1="233.75" y2="233.75" x1="50" x2="898" class="ct-grid ct-vertical"></line><line y1="190" y2="190" x1="50" x2="898" class="ct-grid ct-vertical"></line><line y1="146.25" y2="146.25" x1="50" x2="898" class="ct-grid ct-vertical"></line><line y1="102.5" y2="102.5" x1="50" x2="898" class="ct-grid ct-vertical"></line><line y1="58.75" y2="58.75" x1="50" x2="898" class="ct-grid ct-vertical"></line><line y1="15" y2="15" x1="50" x2="898" class="ct-grid ct-vertical"></line></g><g><g class="ct-series ct-series-a"><line x1="110.57142857142857" x2="110.57142857142857" y1="365" y2="277.5" class="ct-bar" ct:value="50"></line></g><g class="ct-series ct-series-b"><line x1="231.71428571428572" x2="231.71428571428572" y1="365" y2="242.5" class="ct-bar" ct:value="70"></line></g><g class="ct-series ct-series-c"><line x1="352.85714285714283" x2="352.85714285714283" y1="365" y2="155" class="ct-bar" ct:value="120"></line></g><g class="ct-series ct-series-d"><line x1="474" x2="474" y1="365" y2="15" class="ct-bar" ct:value="200"></line></g><g class="ct-series ct-series-e"><line x1="595.1428571428571" x2="595.1428571428571" y1="365" y2="50" class="ct-bar" ct:value="180"></line></g><g class="ct-series ct-series-f"><line x1="716.2857142857142" x2="716.2857142857142" y1="365" y2="155" class="ct-bar" ct:value="120"></line></g><g class="ct-series ct-series-g"><line x1="837.4285714285714" x2="837.4285714285714" y1="365" y2="102.5" class="ct-bar" ct:value="150"></line></g></g><g class="ct-labels"><foreignObject style="overflow: visible;" x="50" y="370" width="121.14285714285714" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 121px; height: 20px;">XS</span></foreignObject><foreignObject style="overflow: visible;" x="171.14285714285714" y="370" width="121.14285714285714" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 121px; height: 20px;">S</span></foreignObject><foreignObject style="overflow: visible;" x="292.2857142857143" y="370" width="121.14285714285717" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 121px; height: 20px;">M</span></foreignObject><foreignObject style="overflow: visible;" x="413.42857142857144" y="370" width="121.14285714285711" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 121px; height: 20px;">L</span></foreignObject><foreignObject style="overflow: visible;" x="534.5714285714286" y="370" width="121.14285714285711" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 121px; height: 20px;">XL</span></foreignObject><foreignObject style="overflow: visible;" x="655.7142857142857" y="370" width="121.14285714285722" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 121px; height: 20px;">XXL</span></foreignObject><foreignObject style="overflow: visible;" x="776.8571428571429" y="370" width="121.14285714285711" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 121px; height: 20px;">XXXL</span></foreignObject><foreignObject style="overflow: visible;" y="321.25" x="10" height="43.75" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 44px; width: 30px;">0</span></foreignObject><foreignObject style="overflow: visible;" y="277.5" x="10" height="43.75" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 44px; width: 30px;">25</span></foreignObject><foreignObject style="overflow: visible;" y="233.75" x="10" height="43.75" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 44px; width: 30px;">50</span></foreignObject><foreignObject style="overflow: visible;" y="190" x="10" height="43.75" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 44px; width: 30px;">75</span></foreignObject><foreignObject style="overflow: visible;" y="146.25" x="10" height="43.75" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 44px; width: 30px;">100</span></foreignObject><foreignObject style="overflow: visible;" y="102.5" x="10" height="43.75" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 44px; width: 30px;">125</span></foreignObject><foreignObject style="overflow: visible;" y="58.75" x="10" height="43.75" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 44px; width: 30px;">150</span></foreignObject><foreignObject style="overflow: visible;" y="15" x="10" height="43.75" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 44px; width: 30px;">175</span></foreignObject><foreignObject style="overflow: visible;" y="-15" x="10" height="30" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 30px; width: 30px;">200</span></foreignObject></g></svg></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <section class="button-section">
            <div class="row">
              <div class="col">
                <button class="update-btn btn btn-success float-right">Atualizar</button>
                <div class="clearfix"></div>
              </div>
            </div>
          </section>
        </div>
      </div>
      <!-- END : End Main Content-->
@endsection
