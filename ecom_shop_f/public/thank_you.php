<?php require_once("../resources/config.php"); ?>
<?php require_once("cart.php"); ?>

<?php include(TEMPLATE_FRONT . DS . "header.php") ?>

<?php

if (isset($_GET['tx'])){
    $amount = $_GET['amt'];
    $currency = $_GET['cc'];
    $transaction = $_GET['tx'];
    $status = $_GET['st'];
    $total = 0;
    $item_quantity = 0;

    $send_order = query("INSERT INTO orders (order_amount, order_transaction, order_currency, order_status ) 
    VALUES('{$amount}', '{$transaction}','{$currency}','{$status}')");
    // $last_id =last_id();
    confirm($send_order);
    session_destroy();
}else {
    redirect("index.php");
}

?>


    <!-- Page Content -->
    <div class="container">
        <h1 class="text-center">Thank you.</h1>

    </div>
    <!-- /.container -->


<?php include(TEMPLATE_FRONT . DS . "footer.php") ?>
