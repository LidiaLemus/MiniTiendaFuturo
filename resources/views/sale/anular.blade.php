@extends('home')
@section('content')
<div class="container">
    <form id="form_anular_factura" action="" method="post" name="form_anular_factura">
        <input type="hidden" name="action" value="anularFactura">
        <input type="hidden"  id="no_factura" name="no_factura" value="">
    </form>
</div> 
@endsection  