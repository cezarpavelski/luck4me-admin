@extends('main')

@section('content')
    <section class="content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-12">
                    <div class="view-header">
                        <div class="header-icon">
                            <i class="pe page-header-icon pe-7s-shield"></i>
                        </div>
                        <div class="header-title">
                            <h3 class="m-b-xs">Dashboard</h3>
                            <small>
                                Acompanhe seus clientes de perto.
                            </small>
                        </div>
                    </div>
                    <hr>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-2 col-xs-6">
                    <div class="panel panel-filled">
                        <div class="panel-body">
                            <h2 class="m-b-none">
                                346 <span class="slight"><i class="fa fa-play fa-rotate-270 text-warning"> </i> +56%</span>
                            </h2>
                            <div class="small">Clientes ativos</div>
                            <div class="slight m-t-sm"><i class="fa fa-clock-o"> </i> Atualizado: <span class="c-white">agora</span> </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-xs-6">
                    <div class="panel panel-filled">
                        <div class="panel-body">
                            <h2 class="m-b-none">
                                206 <span class="slight"><i class="fa fa-play fa-rotate-270 text-warning"> </i> +20%</span>
                            </h2>
                            <div class="small">Homens ativos</div>
                            <div class="slight m-t-sm"><i class="fa fa-clock-o"> </i> Atualizado: <span class="c-white">agora</span>  </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-xs-6">
                    <div class="panel panel-filled">
                        <div class="panel-body">
                            <h2 class="m-b-none">
                                140 <span class="slight"><i class="fa fa-play fa-rotate-90 c-white"> </i> -5%</span>
                            </h2>
                            <div class="small">Mulheres ativos</div>
                            <div class="slight m-t-sm"><i class="fa fa-clock-o"> </i> Atualizado: <span class="c-white">agora</span> </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-xs-6">
                    <div class="panel panel-filled">
                        <div class="panel-body">
                            <h2 class="m-b-none">
                                1:30 <span class="slight"><i class="fa fa-play fa-rotate-270 text-warning"> </i> +18%</span>
                            </h2>
                            <div class="small">Permanência média</div>
                            <div class="slight m-t-sm"><i class="fa fa-clock-o"> </i> Atualizado: <span class="c-white">agora</span> </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-xs-6">
                    <div class="panel panel-filled">
                        <div class="panel-body">
                            <h2 class="m-b-none">
                                25
                            </h2>
                            <div class="small">Idade média</div>
                            <div class="slight m-t-sm"><i class="fa fa-clock-o"> </i> Atualizado: <span class="c-white">agora</span> </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-xs-6">
                    <div class="panel panel-filled">
                        <div class="panel-body">
                            <h2 class="m-b-none">
                                1:30 <span class="slight"><i class="fa fa-play fa-rotate-270 text-warning"> </i> +18%</span>
                            </h2>
                            <div class="small">Permanência média</div>
                            <div class="slight m-t-sm"><i class="fa fa-clock-o"> </i> Atualizado: <span class="c-white">04:00am</span> </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="panel">
                        <div class="panel-body">
                            <h1 class="m-t-md m-b-xs" style="margin-top: 30px">
                                <i class="pe pe-7s-global text-warning"> </i>
                                1 460 ,00 <span class="slight"></span>
                            </h1>
                            <div class="small">
                                <span class="c-white">Total de clientes</span> desde o início da atividade. Veja gráficos detalhados para obter mais locais de informações e fonte de tráfego.
                            </div>
                            <div class="m-t-sm">
                                <div class="row">
                                    <div class="col-md-12">
                                        <small class="c-white">
                                        </small>
                                        <div class="sparkline3"></div>
                                        <small class="slight">
                                        </small>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="panel panel-filled">
                        <div class="row">
                            <div class="col-md-4">

                                <div class="panel-body h-200 list">
                                    <div class="stats-title pull-left">
                                        <h4>Tráfego</h4>
                                    </div>
                                    <div class="m-t-xl">
                                        <small>
                                            30% dos clientes, são clientes que estão frequentando o ambiente pela primeira vez.
                                        </small>
                                    </div>


                                    <div class="progress m-t-xs full progress-small">
                                        <div style="width: 30%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="35" role="progressbar" class=" progress-bar progress-bar-warning">
                                            <span class="sr-only">30% Complete (success)</span>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <small class="stat-label">Hoje</small>
                                            <h4 class="m-t-xs">%70,20 <i class="fa fa-level-up text-warning"></i></h4>
                                        </div>
                                        <div class="col-md-6">
                                            <small class="stat-label">Último mês</small>
                                            <h4 class="m-t-xs">%20,20 <i class="fa fa-level-down c-white"></i></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="panel-body">
                                    <div class="text-center slight">
                                    </div>

                                    <div class="flot-chart" style="height: 160px;margin-top: 5px">
                                        <div class="flot-chart-content" id="flot-line-chart"></div>
                                    </div>

                                    <div class="small text-center">Total de clientes agora</div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <div class="panel">
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table  class="table">
                                    <thead>
                                    <tr>
                                        <th>Nome</th>
                                        <th>Telefone</th>
                                        <th>Email</th>
                                        <th>Checkins</th>
                                        <th>Cidade</th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>Abraham</td>
                                        <td>076 9477 4896</td>
                                        <td>abraham@gamil.com</td>
                                        <td>50</td>
                                        <td>Vosselaar</td>
                                        <td><a href="/profile" class="btn btn-default btn-xs active">View</a></td>
                                    </tr>
                                    <tr>
                                        <td>Phelan</td>
                                        <td>0500 034548</td>
                                        <td>phelan@gmail.com</td>
                                        <td>40</td>
                                        <td>Lavoir</td>
                                        <td><a href="/profile" class="btn btn-default btn-xs">View</a></td>
                                    </tr>
                                    <tr>
                                        <td>Raya</td>
                                        <td>(01315) 27698</td>
                                        <td>raya@hotmail.com</td>
                                        <td>30</td>
                                        <td>Santomenna</td>
                                        <td><a href="/profile" class="btn btn-default btn-xs">View</a></td>
                                    </tr>
                                    <tr>
                                        <td>Azalia</td>
                                        <td>0500 854198</td>
                                        <td>azalia@gmail.com</td>
                                        <td>20</td>
                                        <td>Newtown</td>
                                        <td><a href="/profile" class="btn btn-default btn-xs">View</a></td>
                                    </tr>
                                    <tr>
                                        <td>Garth</td>
                                        <td>(01662) 59083</td>
                                        <td>garth@hotmail.com</td>
                                        <td>10</td>
                                        <td>Ternitz</td>
                                        <td><a href="/profile" class="btn btn-default btn-xs">View</a></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">

                    <div class="panel panel-b-accent m-t-sm">
                        <div class="panel-body text-center p-m">
                            <h2 class="font-light">
                                R$ 120,00 ticket médio do dia
                            </h2>
                            <small>Ticket médio geral.</small>
                            <br/>
                            120,312 <span class="slight"><i class="fa fa-play fa-rotate-270 c-white"> </i> -22%</span>
                            <div class="sparkline7 m-t-xs"></div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>
@endsection

@push('scripts')
    <script>
        $(document).ready(function () {


            // Sparkline charts
            var sparklineCharts = function () {
                $(".sparkline").sparkline([20, 34, 43, 43, 35, 44, 32, 44, 52, 45], {
                    type: 'line',
                    lineColor: '#FFFFFF',
                    lineWidth: 3,
                    fillColor: '#404652',
                    height: 47,
                    width: '100%'
                });

                $(".sparkline7").sparkline([10, 34, 13, 33, 35, 24, 32, 24, 52, 35], {
                    type: 'line',
                    lineColor: '#FFFFFF',
                    lineWidth: 3,
                    fillColor: '#f7af3e',
                    height: 75,
                    width: '100%'
                });

                $(".sparkline1").sparkline([0, 6, 8, 3, 2, 4, 3, 4, 9, 5, 3, 4, 4, 5, 1, 6, 7, 15, 6, 4, 0], {
                    type: 'line',
                    lineColor: '#2978BB',
                    lineWidth: 3,
                    fillColor: '#2978BB',
                    height: 170,
                    width: '100%'
                });

                $(".sparkline3").sparkline([-8, 2, 4, 3, 5, 4, 3, 5, 5, 6, 3, 9, 7, 3, 5, 6, 9, 5, 6, 7, 2, 3, 9, 6, 6, 7, 8, 10, 15, 16, 17, 15], {

                    type: 'line',
                    lineColor: '#fff',
                    lineWidth: 3,
                    fillColor: '#393D47',
                    height: 70,
                    width: '100%'
                });

                $(".sparkline5").sparkline([0, 6, 8, 3, 2, 4, 3, 4, 9, 5, 3, 4, 4, 5], {
                    type: 'line',
                    lineColor: '#f7af3e',
                    lineWidth: 2,
                    fillColor: '#2F323B',
                    height: 20,
                    width: '100%'
                });
                $(".sparkline6").sparkline([0, 1, 4, 2, 2, 4, 1, 4, 3, 2, 3, 4, 4, 2, 4, 2, 1, 3], {
                    type: 'bar',
                    barColor: '#f7af3e',
                    height: 20,
                    width: '100%'
                });

                $(".sparkline8").sparkline([4, 2], {
                    type: 'pie',
                    sliceColors: ['#f7af3e', '#404652']
                });
                $(".sparkline9").sparkline([3, 2], {
                    type: 'pie',
                    sliceColors: ['#f7af3e', '#404652']
                });
                $(".sparkline10").sparkline([4, 1], {
                    type: 'pie',
                    sliceColors: ['#f7af3e', '#404652']
                });
                $(".sparkline11").sparkline([1, 3], {
                    type: 'pie',
                    sliceColors: ['#f7af3e', '#404652']
                });
                $(".sparkline12").sparkline([3, 5], {
                    type: 'pie',
                    sliceColors: ['#f7af3e', '#404652']
                });
                $(".sparkline13").sparkline([6, 2], {
                    type: 'pie',
                    sliceColors: ['#f7af3e', '#404652']
                });
            };

            var sparkResize;

            // Resize sparkline charts on window resize
            $(window).resize(function () {
                clearTimeout(sparkResize);
                sparkResize = setTimeout(sparklineCharts, 100);
            });

            // Run sparkline
            sparklineCharts();


            // Flot charts data and options
            var data1 = [ [16, 16], [17, 24], [18, 11], [19, 7], [20, 10], [21, 15], [22, 24], [23, 30] ];
            var data2 = [ [16, 26], [17, 44], [18, 31], [19, 27], [20, 36], [21, 46], [22, 56], [23, 66] ];

            var chartUsersOptions = {
                series: {
                    splines: {
                        show: true,
                        tension: 0.4,
                        lineWidth: 1,
                        fill: 1

                    }

                },
                grid: {
                    tickColor: "#404652",
                    borderWidth: 0,
                    borderColor: '#404652',
                    color: '#404652'
                },
                colors: [ "#f7af3e","#DE9536"]
            };

            $.plot($("#flot-line-chart"), [data2, data1], chartUsersOptions);

        });
    </script>
@endpush
