<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Admin Dashboad </title>
    <!-- Core CSS - Include with every page -->

    <link href="{{ URL::asset('assets/plugins/bootstrap/bootstrap.css'); }}" rel="stylesheet" />
    <link href="{{ URL::asset('assets/font-awesome/css/font-awesome.css'); }}" rel="stylesheet" />
    <link href="{{ URL::asset('assets/css/style.css'); }}" rel="stylesheet" />
    <link href="{{ URL::asset('assets/css/main-style.css'); }}" rel="stylesheet" />
    
</head>
<body>


<script src="{{ asset('assets/plugins/jquery-1.10.2.js')}}"></script>

<script src="{{ asset('assets/plugins/bootstrap/bootstrap.min.js')}}"></script>
       


        <script src="{{ asset('assets/plugins/metisMenu/jquery.metisMenu.js')}}"></script>

        <script src="{{ asset('assets/scripts/siminta.js')}}"></script>
      
  
        <script src="{{ asset('assets/scripts/dashboard-demo.js')}}"></script>


        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script type="text/javascript">
            $(function() {
                $(document).on('click', '#delete', function(e) {
                    e.preventDefault();
                    var link = $(this).attr("href");
                    Swal.fire({
                        title: 'Are you sure?',
                        text: "Delete this data ?",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Yes, delete it!'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            window.location.href = link
                            Swal.fire(
                                'Deleted!',
                                'Your file has been deleted.',
                                'success'
                            )
                        }
                    })
                });
            });
        </script>
        <script>
    
    $(".hBack").on("click", function(e){
        e.preventDefault();
        window.history.back();
    });
        </script>


    
</body>
</html>