
<!--tablede hansi rowlarin gorsenmesini isdemirsense o burda yazilir css in icinde yazma onda diger seyfelerdeki tableleride bagliyar :)-->
<style>
    .c_head th:nth-child(4){
        display: none;
    }

    tbody tr td:nth-child(4){
        display: none;
    }
</style>
<!--tablede hansi rowlarin gorsenmesini isdemirsense o burda yazilir css in icinde yazma onda diger seyfelerdeki tableleride bagliyar :)-->


<div class="content">
    <div class="module c_module">


<!--        modulun basliqi-->
        <div class="module-head">
            <h3>DataTables</h3>
        </div>
<!--        modulun basliqi-->




<!--        yeni melumat yaratma butonu bunun icindeki kodalri deyismeye ehtiyac yoxdu-->
        <br>
        <button class="btn btn-info" style="float: right;" onclick="document.querySelector('.dialog2').classList.add('open')">Yeni Əlavə Et</button>
        <br>
<!--        yeni melumat yaratma butonu bunun icindeki kodalri deyismeye ehtiyac yoxdu-->


<!--        modulun contenti-->
        <div class="module-body table">
            <table data-url="<?php echo base_url("Welcome/get_data");?>"
                   id="datatable"
                   cellpadding="0"
                   cellspacing="0"
                   border="0"
                   class="datatable-1 table table-bordered display"
                   width="100%">



                <thead>
                    <tr class="c_head">
                        <th data-orderable="false" class="c_switch">
                            <input type="checkbox" class="c_check_all">
                            <a title="toplu sil" class="btn btn-danger mr-1 c_delete_all"><i style="font-size: 13px" class="fas fa-trash"></i></a>
                        </th><!--switch ve id mutleq olmalidir cunki o data tablenin islemesi ucun lazimdi ve thead in icini siraliyanda databasein tablesinin sirasina uygun siralamaz lazimdi en axirda update delete olacaq onnan evvel eger varsa additional linkler ve onnan evvelde tabledki fieldler-->
                        <th>id</th><!--switch ve id mutleq olmalidir cunki o data tablenin islemesi ucun lazimdi ve thead in icini siraliyanda databasein tablesinin sirasina uygun siralamaz lazimdi en axirda update delete olacaq onnan evvel eger varsa additional linkler ve onnan evvelde tabledki fieldler -->
                        <th>name</th>
                        <th>brand</th>
                        <th>date</th>
                        <th>img</th>
                        <th>car_name</th>
                        <th data-orderable="false">Galereya</th>
                        <th data-orderable="false">Qiymetler</th>
                        <th data-orderable="false">Qiymetler2</th>
                        <th data-orderable="false">Əməliyatlar</th>
                    </tr>
                </thead>

                <tbody></tbody>

                <tfoot>
                    <tr class="c_head">
                    <th class="c_switch">switch</th>
                    <th >id</th>
                    <th>name</th>
                    <th>brand</th>
                    <th>date</th>
                    <th>img</th>
                    <th>car_name</th>
                    <th>Galereya</th>
                    <th>Qiymetler</th>
                    <th>Qiymetler2</th>
                    <th data-orderable="false">Əməliyatlar</th>
                </tr>
                </tfoot>
            </table>
        </div>
<!--        modulun contenti-->



    </div>
</div>




