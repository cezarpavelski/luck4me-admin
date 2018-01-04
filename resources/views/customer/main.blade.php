@extends('main')

@section('content')
    <section class="content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-12">
                    <div class="view-header">
                        <div class="header-icon">
                            <i class="pe page-header-icon pe-7s-star"></i>
                        </div>
                        <div class="header-title">
                            <h3>Clientes</h3>
                            <small>
                                Cadastre um novo cliente.
                            </small>
                        </div>
                    </div>
                    <hr>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12">
                    <a href="#"
                    class="btn btn-w-md btn-accent pull-right"
                    data-toggle="modal"
                    data-target="#new-offer-modal">
                        Novo +
                    </a>
                </div>
                @include('customer.modals.new-customer')
                <br/>
                <br/>
                <br/>
                <div class="col-xs-12">
                    <div class="panel panel-filled">
                        <div class="panel-body">
                            <div class="table-responsive" style="overflow:hidden">
                                <table id="customers" class="table table-striped table-hover">
                                    <thead>
                                    <tr>
                                        <th>Nome</th>
                                        <th>Descrição</th>
                                        <th>Latitude</th>
                                        <th>Longitude</th>
                                        <th>Ativo</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>Tiger Nixon</td>
                                        <td>System Architect</td>
                                        <td>333344.66</td>
                                        <td>123445.77</td>
                                        <td>Sim</td>
                                    </tr>
                                    <tr>
                                        <td>Garrett Winters</td>
                                        <td>Accountant</td>
                                        <td>333344.66</td>
                                        <td>123445.77</td>
                                        <td>Sim</td>
                                    </tr>
                                    <tr>
                                        <td>Ashton Cox</td>
                                        <td>Junior Technical Author</td>
                                        <td>333344.66</td>
                                        <td>123445.77</td>
                                        <td>Sim</td>
                                    </tr>
                                    <tr>
                                        <td>Cedric Kelly</td>
                                        <td>Senior Javascript Developer</td>
                                        <td>333344.66</td>
                                        <td>123445.77</td>
                                        <td>Sim</td>
                                    </tr>
                                    <tr>
                                        <td>Airi Satou</td>
                                        <td>Accountant</td>
                                        <td>333344.66</td>
                                        <td>123445.77</td>
                                        <td>Sim</td>
                                    </tr>
                                    <tr>
                                        <td>Brielle Williamson</td>
                                        <td>Integration Specialist</td>
                                        <td>333344.66</td>
                                        <td>123445.77</td>
                                        <td>Não</td>
                                    </tr>
                                    </tbody>
                                </table>
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
            $('#customers').DataTable({
                dom: "<'row'<'col-sm-6'l><'col-sm-6 text-right'B>>tp",
                "lengthMenu": [ [10, 25, 50, -1], [10, 25, 50, "All"] ],
                buttons: [
                    {extend: 'copy',className: 'btn-sm'},
                    {extend: 'csv',title: 'ExampleFile', className: 'btn-sm'},
                    {extend: 'pdf', title: 'ExampleFile', className: 'btn-sm'},
                    {extend: 'print',className: 'btn-sm'}
                ]
            });
        });
    </script>
@endpush
