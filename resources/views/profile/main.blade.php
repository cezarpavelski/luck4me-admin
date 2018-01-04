@extends('main')

@section('content')
    <section class="content">
        <div class="container-fluid">

            <div class="row m-t-sm">

                <div class="col-md-12">
                    @include('profile.partials.voucher-success')
                    <div class="panel panel-filled">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="media">
                                        <div class="col-md-4">
                                            <img src="/images/a1.jpg" class="img-circle" alt="" style="width: 130px">
                                        </div>
                                        <div class="col-md-8">
                                            <h2 class="m-t-xs m-b-none">
                                                Francisco Silva
                                            </h2>
                                            <small>
                                                <br/>
                                                <p><strong class="c-white">Aniversário:</strong> 09/01/1984</p>
                                                <p><strong class="c-white">Email:</strong> francisco.silva@gmail.com</p>
                                                <p><strong class="c-white">Telefone:</strong> (44) 99709-1413</p>
                                            </small>
                                            <div class="panel panel-filled panel-c-warning">
                                                <div class="panel-body">
                                                    <strong class="c-white">ANIVERSARIANTE HOJE  //////  33 anos</strong>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <h3><small>Valores mensais</small></h3>
                                    <table class="table small m-t-sm">
                                        <tbody>
                                        <tr>
                                            <td>
                                                <strong class="c-white">122</strong> Checkin
                                            </td>
                                            <td>
                                                <strong class="c-white">R$ 42,00</strong> Ticket Médio
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>
                                                <strong class="c-white">1:30h</strong> Permanência Média
                                            </td>
                                            <td>
                                                <strong class="c-white">R$ 840,00</strong> Valor gasto
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>


            <div class="row">

                <div class="col-md-6">

                    <div class="panel">
                        <div class="panel-body">
                            <h4> Últimas Visitas</h4>

                            <div class="v-timeline vertical-container">
                                <div class="vertical-timeline-block">
                                    <div class="vertical-timeline-icon">
                                        <i class="fa fa-credit-card"></i>
                                    </div>
                                    <div class="vertical-timeline-content">
                                        <div class="p-sm">
                                            <span class="vertical-date pull-right"> <small>1 dia atrás</small> </span>

                                            <h2>R$ 120,00 gasto</h2>

                                            <p>1:00h de permanência</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="vertical-timeline-block">
                                    <div class="vertical-timeline-icon">
                                        <i class="fa fa-credit-card"></i>
                                    </div>
                                    <div class="vertical-timeline-content">
                                        <div class="p-sm">
                                            <span class="vertical-date pull-right"> <small>2 dias atrás</small> </span>

                                            <h2>R$ 200,00 gasto</h2>

                                            <p>1:00h de permanência</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="vertical-timeline-block">
                                    <div class="vertical-timeline-icon">
                                        <i class="fa fa-credit-card"></i>
                                    </div>
                                    <div class="vertical-timeline-content">
                                        <div class="p-sm">
                                            <span class="vertical-date pull-right"> <small>2 dias atrás</small> </span>

                                            <h2>R$ 150,00 gasto</h2>

                                            <p>1:10h de permanência</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="vertical-timeline-block">
                                    <div class="vertical-timeline-icon">
                                        <i class="fa fa-credit-card"></i>
                                    </div>
                                    <div class="vertical-timeline-content">
                                        <div class="p-sm">
                                            <span class="vertical-date pull-right"> <small>4 dias atrás</small> </span>

                                            <h2>R$ 350,00 gasto</h2>

                                            <p>1:00h de permanência</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="vertical-timeline-block">
                                    <div class="vertical-timeline-icon">
                                        <i class="fa fa-credit-card"></i>
                                    </div>
                                    <div class="vertical-timeline-content">
                                        <div class="p-sm">
                                            <span class="vertical-date pull-right"> <small>7 dias atrás</small> </span>

                                            <h2>R$ 250,00 gasto</h2>

                                            <p>0:50h de permanência</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="panel">

                        <div class="panel-body">
                            <h4> Checkin desse mês</h4>

                            <p class="small">
                                Visualize a frequência do cliente abaixo:
                            </p>

                            <div class="flot-chart  m-t-md m-b-xl" style="height: 200px">
                                <div class="flot-chart-content" id="flotProfile"></div>
                            </div>
                        </div>
                        <div class="panel-body">
                            <h4> Valor gasto desse mês</h4>

                            <p class="small">
                                Visualize no gráfico o valor gasto pelo cliente durante o mês:
                            </p>

                            <div class="flot-chart  m-t-md m-b-xl" style="height: 200px">
                                <div class="flot-chart-content" id="flotProfile1"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">

                <div class="col-md-12">
                    <div class="panel panel-filled">

                        <div class="panel-body">

                            <div class="row">
                                <div class="col-md-3 col-xs-6 text-center">
                                    <h2 class="no-margins">
                                        6800
                                    </h2>
                                    Checkin totais
                                </div>
                                <div class="col-md-3 col-xs-6 text-center">
                                    <h2 class="no-margins">
                                        R$ 5340,00
                                    </h2>
                                    Valor gasto total
                                </div>
                                <div class="col-md-3 col-xs-6 text-center">
                                    <h2 class="no-margins">
                                        R$ 200,00
                                    </h2>
                                    Ticket médio total
                                </div>
                                <div class="col-md-3 col-xs-6 text-center">
                                    <h2 class="no-margins">
                                        1:35h
                                    </h2>
                                    Permanência média total
                                </div>
                            </div>

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


            var data = [
                {
                    data: [ [1, 4], [2, 5], [3, 7], [4, 4], [5, 8], [6, 9],[7, 11], [8, 10], [9, 8], [10, 5], [11, 4], [12, 3] ]
                }
            ];

            var chartUsersOptions2 = {
                series: {
                    splines: {
                        show: true,
                        tension: 0.4,
                        lineWidth: 2,
                        fill: false
                    },
                },
                legend: {
                    show: false
                },
                grid: {
                    borderWidth: 0
                }
            };

            $.plot($("#flotProfile"), data, chartUsersOptions2);
            $.plot($("#flotProfile1"), data, chartUsersOptions2);

        });
    </script>
@endpush
