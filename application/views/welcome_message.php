<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>DataTable With ServerSide</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-lite/1.1.0/material.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.material.min.css">
    <style>
        .c_head th:first-child{
            display: none;
        }

        tbody tr td:first-child{
            display: none;
        }


        /*input[type=search]{*/
            /*display: none;*/
        /*}*/




    </style>

</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-12">

            <table id="datatable" class="mdl-data-table" cellspacing="0" width="100%">
                <thead>
                <tr class="c_head">
                    <th>id</th>
                    <th>name</th>
                    <th>brand</th>
                    <th>date</th>
                </tr>
                </thead>

                <tbody class="c_body"></tbody>
            </table>



        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script type="text/javascript" charset="utf8" src="<?php echo base_url("public/jquery.dataTables.js")?>"></script>
</body>
</html>

<script>

       $(document).ready(function(e){
        var base_url = "<?php echo base_url();?>"; // You can use full url here but I prefer like this
        var table = $('#datatable').DataTable({
            "pageLength" : 10,
            "serverSide": true,
            "order": [[0, "desc" ]],
            "ajax":{
                url :  base_url+'Welcome/cavid',
                type : 'POST',
                // success:function (r) {
                //     console.log(r)
                // }
            },
        });


        //maraqli birseydi lazimola biler
        //            $('#datatable tbody').on( 'dblclick', 'tr', function () {
        //                console.log($(this).children().attr('contenteditable','true'))
        //            } );
        //maraqli birseydi lazimola biler



    });





</script>



