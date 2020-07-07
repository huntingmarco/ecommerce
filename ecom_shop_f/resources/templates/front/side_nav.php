<link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">

<style>
.storename {
    font-family: 'Pacifico', cursive;
    font-size: 300%;
}  
</style>

<div class="col-md-3">
    <p class="storename">J.Laquihon Store</p>
    <div class="list-group">

        <?php 
           get_categories();
        ?>

    </div>
</div>