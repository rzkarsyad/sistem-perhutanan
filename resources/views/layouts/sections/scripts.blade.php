<!-- BEGIN: Vendor JS-->
<script src="{{ asset(mix('assets/vendor/libs/jquery/jquery.js')) }}"></script>
<script src="{{ asset(mix('assets/vendor/libs/popper/popper.js')) }}"></script>
<script src="{{ asset(mix('assets/vendor/js/bootstrap.js')) }}"></script>
<script src="{{ asset(mix('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js')) }}"></script>
<script src="{{ asset(mix('assets/vendor/js/menu.js')) }}"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.12.1/datatables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.12.1/datatables.min.js"></script>

<script>
  $(document).ready( function () {
    $('#example').DataTable();
  });
</script>

<script>
  window.addEventListener('close-modal', event => {

        $('#produksiModal').modal('hide');
        $('#updateProduksiModal').modal('hide');
        $('#deleteProduksiModal').modal('hide');
        
        $('#petaniModal').modal('hide');
        $('#updatePetaniModal').modal('hide');
        $('#deletePetaniModal').modal('hide');

        $('#pengolahModal').modal('hide');
        $('#updatePengolahModal').modal('hide');
        $('#deletePengolahModal').modal('hide');

        $('#petakModal').modal('hide');
        $('#updatePetakModal').modal('hide');
        $('#deletePetakModal').modal('hide');

        $('#realisasiModal').modal('hide');
        $('#updateRealisasiModal').modal('hide');
        $('#deleteRealisasiModal').modal('hide');

        $('#penjualanModal').modal('hide');
        $('#updatePenjualanModal').modal('hide');
        $('#deletePenjualanModal').modal('hide');
    })
</script>

<script>
  $('#dropdownYear').each(function() {

    var year = (new Date()).getFullYear();
    var current = year;
    year -= 3;
    for (var i = 0; i < 6; i++) {
      if ((year + i) == current)
        $(this).append('<option selected value="' + (year + i) + '">' + (year + i) + '</option>');
      else
        $(this).append('<option value="' + (year + i) + '">' + (year + i) + '</option>');
    }

  })
</script>
<script>
  $('#bulandropdown').change(function() {
    var month = $(this).val();
  });
</script>
@yield('vendor-script')
<!-- END: Page Vendor JS-->
<!-- BEGIN: Theme JS-->
<script src="{{ asset(mix('assets/js/main.js')) }}"></script>

<!-- END: Theme JS-->
<!-- Pricing Modal JS-->
@stack('pricing-script')
<!-- END: Pricing Modal JS-->
<!-- BEGIN: Page JS-->
@yield('page-script')
<!-- END: Page JS-->