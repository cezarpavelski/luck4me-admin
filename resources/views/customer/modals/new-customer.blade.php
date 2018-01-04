<div class="modal fade" id="new-offer-modal" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h4 class="modal-title">Novo Cliente</h4>
                <small>Cadastre um novo cliente.</small>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group"><label for="new-offer-title">Nome</label>
                        <input type="text" class="form-control" id="new-offer-title" placeholder="Título">
                    </div>
                    <div class="form-group"><label for="new-offer-description">Descrição</label>
                        <textarea class="form-control" rows="3" id="new-offer-description" placeholder="Descrição"></textarea>
                    </div>
                    <div class="form-group"><label for="new-offer-date">Latitude</label>
                        <input type="text" class="form-control" id="new-offer-lat" placeholder="Latitude">
                    </div>
                    <div class="form-group"><label for="new-offer-amount">Longitude</label>
                        <input type="text" class="form-control" id="new-offer-log" placeholder="Longitude">
                    </div>

                    <div><label> <input type="checkbox" class="js-switch"> Ativo </label></div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-accent">Salvar</button>
            </div>
        </div>
    </div>
</div>

@push('scripts')
    <script>
        var elem = document.querySelector('.js-switch');
        var init = new Switchery(elem, { color: '#F4AD00' });
    </script>
@endpush
