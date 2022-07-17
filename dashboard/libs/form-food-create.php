<style>
    .alert {
        padding: 20px;
        background-color: #03e9f4;
        color: white;
        width: 50%;
    }

    .closebtn {
        margin-left: 15px;
        color: white;
        font-weight: bold;
        float: right;
        font-size: 22px;
        line-height: 20px;
        cursor: pointer;
        transition: 0.3s;
    }

    .closebtn:hover {
        color: black;
    }
</style>
<br>
<center>
    <div class="alert">
        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
        <strong>SUCCESS!</strong> FOOD ADDED SUCCESFULLY!
    </div>
</center>
<script>
    setTimeout(function() {
        document.location = '../dashboard/products.php'
    }, 5000)
</script>
</script>