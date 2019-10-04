$(document).ready(function(e){

    //data tablenin islemesi ucun lazim olan scriptler qetiyyen toxunma eger kodlamadan soyumaq isdemirsense
    var base_url = $('#datatable').data("url");
    var table = $('#datatable').DataTable({
        "pageLength" : 10,
        "serverSide": true,
        "lengthMenu": [3, 5, 10, 25, 50, 75, 100, 200],
        "order": [[0, "desc" ]],
        "ajax":{
            url :  base_url,
            type : 'POST',
        },
        "language": {
            "paginate": {
                "previous": '<i class="fas fa-arrow-circle-left"></i>',
                "next": '<i class="fas fa-arrow-circle-right"></i>'
            },
            "search": "Axtarış: ",
            "processing": "Gözləyin...",
            "loadingRecords": "Yüklənir...",
            "infoEmpty": "Məlumat daxil edilməmişdir",
            "info": "Məlumat Görsədilir _START_-_END_, Ümumi Məlumat sayı _TOTAL_ ",
            "emptyTable": "Məlumat daxil edilməmişdir",
            "zeroRecords": "Məlumat Tapılmadı",
            "lengthMenu": "_MENU_ Məlumat Göstər"

        },
        "initComplete": function(settings, json) {





        },
        "fnDrawCallback": function( oSettings ) {
            $(".c_row_update").on("click", function () {
                var id = $(this).parent().parent().children(".sorting_1").text();
                $old_value_action = $("#c_update_form").data('action');
                $("#c_update_form").attr('action', $old_value_action + id);
                // alert($("#c_update_form").attr('action'))

                $.ajax({
                    type: "POST",
                    url: $(this).data("updatelink"),
                    data: {my_data: id},

                    // beforeSend: function() {
                    //     $('.c_spinner').show();
                    // },
                    //
                    // complete: function() {
                    //     $('.c_spinner').hide();
                    // },

                    success: function(data) {
                        $("#c_update_form").html(data)
                    },
                    error: function() {
                        alert('Error occured');
                    }
                });


            });

            $(".c_row_delete").on("click", function () {
                //silme islemine redirect ederek silen
                var id = $(this).parent().parent().children(".sorting_1").text();
                $old_data = $(this).data('deletelinkold');
                $(this).data("deletelink", $old_data + id);
                swal({
                    title: "Əminsiniz?",
                    text: "Silinən məlumatlar geri qaytarılmayacaq!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                    .then((willDelete) => {
                        if (willDelete) {
                            window.location.href = $(this).data('deletelink');
                        }
                    });


            });

            $(".c_other_link").on("click", function () {
                //silme islemine redirect ederek silen
                var id = $(this).parent().parent().children(".sorting_1").text();
                $old_data = $(this).data('href');
                $(this).attr("href", $old_data + id);
            });

        }
    });





});










