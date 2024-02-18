<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
<script src="//cdn.datatables.net/2.0.0/js/dataTables.min.js"></script>
    <script>
      $(document).ready(function () {
        let table = new DataTable('#datatable');

        $('.confirm-delete').click(function (e) { 
          e.preventDefault();
          var confirmDialog = confirm("Are you sure? you want to delete this data");
          if(confirmDialog){
            var id = $(this).val();
            $.ajax({
              type: "DELETE",
              url: "employee/confirmdelete/" + id,
              success: function (response) {
                alert('data deleted successfully');
                window.location.reload();
              }
            });
            
          }
        });
      });
    </script>
  </body>
</html>