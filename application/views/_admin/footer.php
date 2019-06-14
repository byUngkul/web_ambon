    <footer id="footer">
      <p>Copyright AdminStrap, &copy; 2017</p>
    </footer>

    <script>
     CKEDITOR.replace( 'editor1' );

     $(document).ready(function() {
          $('#table').DataTable();
      } );
    </script>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?= site_url('assets/backend/js/jquery-3.3.1.js') ?>"></script>
    <script src="<?= site_url('assets/backend/js/bootstrap.min.js') ?>"></script>
    <script src="<?= site_url('assets/backend/js/dataTables.bootstrap.min.js') ?>"></script>

    <script>
      $(document).ready(function(){
          // Setup datatables
        $.fn.dataTableExt.oApi.fnPagingInfo = function(oSettings)
        {
            return {
                "iStart": oSettings._iDisplayStart,
                "iEnd": oSettings.fnDisplayEnd(),
                "iLength": oSettings._iDisplayLength,
                "iTotal": oSettings.fnRecordsTotal(),
                "iFilteredTotal": oSettings.fnRecordsDisplay(),
                "iPage": Math.ceil(oSettings._iDisplayStart / oSettings._iDisplayLength),
                "iTotalPages": Math.ceil(oSettings.fnRecordsDisplay() / oSettings._iDisplayLength)
            };
        };
  
        var table = $("#mytable").dataTable({
            initComplete: function() {
                var api = this.api();
                $('#mytable_filter input')
                    .off('.DT')
                    .on('input.DT', function() {
                        api.search(this.value).draw();
                });
            },
                oLanguage: {
                sProcessing: "loading..."
            },
                processing: true,
                serverSide: true,
                ajax: {"url": "<?php echo base_url().'admin/artikel/get_artikel_json'?>", "type": "POST"},
                      columns: [
                          {"data": "title"},
                          {"data": "slug"},
                          //render harga dengan format angka
                          {"data": "category_id"},
                          {"data": "published"},
                          {"data": "created_at"}
                    ],
                  order: [[1, 'asc']],
            rowCallback: function(row, data, iDisplayIndex) {
                var info = this.fnPagingInfo();
                var page = info.iPage;
                var length = info.iLength;
                $('td:eq(0)', row).html();
            }
  
        });
              // end setup datatables
              // get Edit Records
              $('#mytable').on('click','.edit_record',function(){
              var kode=$(this).data('kode');
              var nama=$(this).data('nama');
              var harga=$(this).data('harga');
              var kategori=$(this).data('kategori');
              $('#ModalUpdate').modal('show');
              $('[name="kode_barang"]').val(kode);
              $('[name="nama_barang"]').val(nama);
              $('[name="harga"]').val(harga);
              $('[name="kategori"]').val(kategori);
        });
              // End Edit Records
              // get Hapus Records
              $('#mytable').on('click','.hapus_record',function(){
              var kode=$(this).data('kode');
              $('#ModalHapus').modal('show');
              $('[name="kode_barang"]').val(kode);
        });
              // End Hapus Records
  
      });
    </script>
  </body>
</html>