<?php
session_start();
include('inc/header.php');
include_once 'Invoice.php';
$invoice = new Invoice();
$invoice->checkLoggedIn();
?>
<link rel="icon" href="https://i.ibb.co/0BmgTXK/vision-limpieza-removebg-preview.png">
<title>Sistema de Facturación</title>
<script src="js/invoice.js"></script>
<link href="css/style.css" rel="stylesheet">
<?php include('inc/container.php'); ?>
<link rel="stylesheet"href="https://fonts.googleapis.com/css2?family=Righteous&family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap">
<link rel="stylesheet" href="https://cdn.datatables.net/2.1.5/css/dataTables.dataTables.css" />
<div class="container">
  <h2 class="title">Sistema de Facturación</h2>
  <?php include('menu_user.php'); ?>
  <table id="data-table" class="table table-condensed table-striped">
 
  <thead>
      <tr>
        <th># Factura</th>
        <th>Fecha Creación</th>
        <th>Nombre del Cliente</th>
        <th>Total Facturado</th>
        <th>Imprimir</th>
      </tr>
    </thead>
    </table>
    <?php
    $invoiceList = $invoice->getInvoiceList();
    foreach ($invoiceList as $invoiceDetails) {
      $invoiceDate = date("d/M/Y, H:i:s", strtotime($invoiceDetails["order_date"]));
      echo '
              <tr>
                <td>' . $invoiceDetails["order_id"] . '</td>
                <td>' . $invoiceDate . '</td>
                <td>' . $invoiceDetails["order_receiver_name"] . '</td>
                <td>' . $invoiceDetails["order_total_after_tax"] . '</td>
                <td><a href="print_invoice.php?invoice_id=' . $invoiceDetails["order_id"] . '" title="Imprimir Factura"><span class="glyphicon glyphicon-print"></span></a></td>
              </tr>
            ';
    }
    ?>
  </table>
</div>
<script src="https://cdn.datatables.net/2.1.5/js/dataTables.js"></script>
<?php include('inc/footer.php'); ?>