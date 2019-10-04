
<?php $this->load->view("admin/includes/header")?>

<?php $this->load->view("admin/includes/header_menu")?>

<?php $this->load->view("admin/includes/navbar")?>

<!--    yenileme ve insert ucun modal -->
<?php echo $create_modal?>
<!--    yenileme ve insert ucun modal -->


<div class="content">
    <div class="module c_module">


<!--        modulun basliqi-->
        <div class="module-head">
            <h3>DataTables</h3>
        </div>
<!--        modulun basliqi-->

        <br>
        <button class="btn btn-info" style="float: right;" onclick="document.querySelector('.dialog2').classList.add('open')">Yeni Əlavə Et</button>

        <br>


<!--        modulun contenti-->
        <div class="module-body table">
            <table data-url="<?php echo base_url("Welcome/get_data");?>"
                   id="datatable"
                   cellpadding="0"
                   cellspacing="0"
                   border="0"
                   class="datatable-1 table table-bordered table-striped	 display"
                   width="100%">

                <thead>
                    <tr class="c_head">
                        <th>id</th>
                        <th>name</th>
                        <th>brand</th>
                        <th>date</th>
                        <th>img</th>
                        <th>Galereya</th>
                        <th>Qiymetler</th>
                        <th>Qiymetler2</th>
                        <th data-orderable="false">Əməliyatlar</th>
                    </tr>
                </thead>

                <tbody></tbody>

                <tfoot>
                    <tr class="c_head">
                        <th>id</th>
                        <th>name</th>
                        <th>brand</th>
                        <th>date</th>
                        <th>img</th>
                        <th>Galereya</th>
                        <th>Qiymetler</th>
                        <th>Qiymetler2</th>
                        <th>Əməliyatlar</th>
                    </tr>
                </tfoot>
            </table>
        </div>
<!--        modulun contenti-->



    </div>
</div>



<?php $this->load->view("admin/includes/footer")?>


