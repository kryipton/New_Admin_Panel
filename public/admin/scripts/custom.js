//data tablenin islemesi ucun lazim olan script
$(document).ready(function(e){
    var base_url = $('#datatable').data("url"); // You can use full url here but I prefer like this
    var table = $('#datatable').DataTable({
        "pageLength" : 10,
        "serverSide": true,
        "order": [[0, "desc" ]],
        "ajax":{
            url :  base_url,
            type : 'POST',
            // success:function (r) {
            //     console.log(r)
            // }
        },
        "language": {
            "paginate": {
                "previous": '<i class="fas fa-arrow-circle-left"></i>',
                "next": '<i class="fas fa-arrow-circle-right"></i>'
            }
        }
    });


    //maraqli birseydi lazimola biler
    //            $('#datatable tbody').on( 'dblclick', 'tr', function () {
    //                console.log($(this).children().attr('contenteditable','true'))
    //            } );
    //maraqli birseydi lazimola biler

});







