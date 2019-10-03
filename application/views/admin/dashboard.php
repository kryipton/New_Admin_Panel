
<?php $this->load->view("admin/includes/header")?>

<?php $this->load->view("admin/includes/header_menu")?>

<?php $this->load->view("admin/includes/navbar")?>

<div class="content">
    <div class="module c_module">


<!--    update ucun modal -->
        <div class="dialog">
            <span class="btn-close"  onclick="document.querySelector('.dialog').classList.remove('open')"></span>
            <header>Oh, hi there!</header>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae, numquam. Nemo earum quo blanditiis expedita nam iste alias aliquid nulla a qui minus, animi magni corporis molestias odit tenetur, esse amet at unde. Cumque aperiam modi placeat dignissimos? Fugiat dolorem fugit tempore cumque, veniam sapiente consequuntur eius nisi cum maxime.
            </p>
        </div>
<!--    update ucun modal -->





<!--        modulun basliqi-->
        <div class="module-head">
                            <h3>
                                DataTables</h3>
                        </div>
<!--        modulun basliqi-->


<!--        modulun contenti-->
        <div class="module-body table">
            <table data-url="<?php echo base_url("Welcome/cavid");?>"
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
                        <th>date</th>
                    </tr>
                </thead>

                <tbody></tbody>

                <tfoot>
                                    <tr class="c_head">
                                        <th>id</th>
                                        <th>name</th>
                                        <th>brand</th>
                                        <th>date</th>
                                        <th>date</th>
                                    </tr>
                                </tfoot>
            </table>
        </div>
<!--        modulun contenti-->

    </div>
</div>



<?php $this->load->view("admin/includes/footer")?>




