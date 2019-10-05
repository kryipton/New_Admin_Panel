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
                var id = $(this).parent().parent().find(".c_id").text();
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
                var id = $(this).parent().parent().find(".c_id").text();
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
                var id = $(this).parent().parent().find(".c_id").text();
                $old_data = $(this).data('href');
                $(this).attr("href", $old_data + id);
            });


            //switchlernen birden cox elementi secmek
            var idler = [];
            $(".c_checkbox").change(function () {

                var ischecked = $(this).prop("checked");

                if (ischecked == true){
                    idler.push($(this).attr('id'));
                }else{
                    var removeItem = $(this).attr('id');

                    idler = jQuery.grep(idler, function(value) {
                        return value != removeItem;
                    });
                }

            });



            //butun elementleri secmek
            var idArray = [];
            var counter = 0;
            $('.c_check_all').click(function () {

                if (counter % 2 === 0){
                    $(".c_checkbox").prop("checked" ,true);


                    $('.c_checkbox').each(function () {
                        idArray.push(this.id);
                    });

                    $(".c_checkbox").click(function () {

                        var isCheck = $(this).prop("checked");

                        if (isCheck == false){
                            var removeItem = $(this).attr("id");

                            idArray = jQuery.grep(idArray, function(value) {
                                return value != removeItem;
                            });
                        }else{
                            idArray.push($(this).attr("id"))
                        }

                    });

                } else{
                    $(".c_checkbox").prop("checked" ,false);
                }
                counter++;

            });



            //birden cox elementi silmek
            $('.c_delete_all').click(function () {

                swal({
                    title: "Əminsiniz?",
                    text: "Silinən məlumatlar geri qaytarılmayacaq!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                    .then((willDelete) => {
                        if (willDelete) {

                            if (counter % 2 === 0){
                                if (idler.length != 0){
                                    window.location.href = $(".c_row_delete").data('deletelinkold') + idler;
                                }
                            }else{
                                if (idArray.length != 0){
                                    window.location.href = $(".c_row_delete").data('deletelinkold') + idArray;
                                }
                            }

                        }
                    });
                event.preventDefault();
            });


            //tablede switche basanda rowun renginin deyismesi
            $(".c_checkbox").on("click", function () {
                if ($(this).prop("checked")){
                    $(this).parent().parent().parent().css("background-color", "#FFFF66");
                }else{
                    $(this).parent().parent().parent().css("background-color", "#fff");
                }
            });


            //tablede switche basanda butun rowlarin renginin deyismesi
            $(".c_check_all").click(function () {

                if ($(this).prop("checked")){
                    $(".c_checkbox").parent().parent().parent().css("background-color", "#FFFF66");
                }else{
                    $(".c_checkbox").parent().parent().parent().css("background-color", "#fff");
                }

            });


        }
    });

});










