<!DOCTYPE html>
<html>

<head lang="en">
    <base href="{{asset('')}}">

    <!-- Bootstrap Core CSS -->
    <link href="assets/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="assets/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="assets/dist/css/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="assets/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="assets/bower_components/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="assets/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">



    <meta charset="UTF-8">
    <title></title>
</head>
<body>

    <div id="wrapper">
        @yield('main-content')
    </div>


<script src="assets/bower_components/jquery/dist/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="assets/bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <script src="assets/bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
    <script src="assets/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>

<!-- Morris Charts JavaScript -->
<script src="assets/bower_components/raphael/raphael-min.js"></script>
<script src="assets/bower_components/morrisjs/morris.min.js"></script>
<script src="assets/js/morris-data.js"></script>

<!-- Custom Theme JavaScript -->
<script src="assets/dist/js/sb-admin-2.js"></script>

<script>
$(document).ready(function(){
    $('#dataTable').DataTable({
        responsive: true
    });
    $('.delete').on('click',function()
    {
        if(!confirm('Desea Borrar este item?'))
            return false;
    });
    /*
     $('#example').DataTable({
     "columnDefs": [ {
     "class": 'no-sort',
     "orderable": false,
     } ]
     } );
     */
    $(document).ready(function() {
        $('#verModal').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget);

            var grupo = button.data('grupo');
            var nombre = button.data('nombre');

            var modal = $(this);
            modal.find('.modal-title').text('Agregar persona a: ' + nombre);

            var body = modal.find('.modal-body');

            if(grupo != "")
                $("input:hidden").val(grupo);
        })
    });
});


</script>

</body>
</html>