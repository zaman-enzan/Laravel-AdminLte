<!-- Alert message -->

@if(Session('success-message'))
<div class="alert alert-success alert-dismissible theme-alert text-center">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <h4><i class="icon fa fa-check"></i> Success！</h4> {{ Session('success-message') }}
</div>
@endif

@if(Session('warning-message'))
<div class="alert alert-warning alert-dismissible theme-alert text-center">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <h4><i class="icon fa fa-warning"></i> アラート！</h4> {{ Session('warning-message') }}
</div>
@endif