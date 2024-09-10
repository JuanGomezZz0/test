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

<?php include('inc/container.php'); ?>
<link rel="stylesheet" href="https://cdn.datatables.net/2.1.5/css/dataTables.dataTables.css" />
<link href="css/style.css" rel="stylesheet">
<link rel="stylesheet"href="https://fonts.googleapis.com/css2?family=Righteous&family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap">
<div class="container">
  <h2 class="title">Sistema de Facturación</h2>
  <from action="buacar_list_admin.php" method="get" class="from-serch">
			<input type="text" name="busqueda" id="busqueda" placheecholder="buscar">
      <script src="https://cdn.datatables.net/2.1.5/js/dataTables.js"></script>
		</from>
    
  <?php include('menu_admin.php'); ?>
  <table id="data-table" class="table table-condensed table-striped">
    <thead>
      <tr>
        <th># Factura</th>
        <th>Fecha Creación</th>
        <th>Nombre del Cliente</th>
        <th>Total Facturado</th>
        <th>Imprimir</th>
        <th>Editar</th>
        <th>Eliminar</th>
      </tr>
    </thead>
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
                <td><a href="edit_invoice.php?update_id=' . $invoiceDetails["order_id"] . '"  title="Editar Factura"><span class="glyphicon glyphicon-edit"></span></a></td>
                <td><a href="#" id="' . $invoiceDetails["order_id"] . '" class="deleteInvoice"  title="Eliminar Factura"><span class="glyphicon glyphicon-remove"></span></a></td>
              </tr>
            ';
    }
    ?>
  </table>
</div>
<?php include('inc/footer.php'); ?>