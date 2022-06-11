
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url(); ?>assets/sb-admin2/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url(); ?>assets/sb-admin2/css/sb-admin-2.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>penyihir.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css">

    <style>
        ol.daftar { counter-reset: item;
          margin-top: 5px;
            
            
         }
        ol.daftar li { display: block }
        ol.daftar li:before { content: counters(item, ".") " "; counter-increment: item ;

        }
        li.b {
          list-style-type: square;
      }

      ul{
          list-style: none;
      }

      ul dd::before {
          content: "\2022";
          color: black;
          font-weight: bold;
          display: inline-block; 
          width: 1em;
          /*margin-left: -1em;*/
          /*margin: 0;
          padding: 0;*/
      }

      @media only screen and (max-width: 600px) {
          ol { counter-reset: item;
            margin: 0;
            padding: 0;
            
         }

         ul{
          list-style: none;
          margin: 0;
            padding: 0;
      }

      ul dd::before {
          content: "\2022";
          color: black;
          font-weight: bold;
          display: inline-block; 
          width: 1em;
          /*margin-left: -1em;*/
          margin: 0;
          padding: 0;
      }

      fluid:none;


    }

    div.yatidak{
        float: right;
    }

    </style>


    <!-- 5 dibawah ini wajib dipake buat DT -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap4.min.css">

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>



</head>
