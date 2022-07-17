<style>
    .alert {
        padding: 20px;
        background-color: #1e3932;
        color: white;
        width: 50%;
        position: relative;
        top: 470px;
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

<center>
    <div class="alert">
        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
        <strong>SUCCESS!</strong> YOUR ORDER IS ON THE WAY! WE WILL CONTACT YOU!
    </div>
</center>
<script>
    setTimeout(function() {
        document.location = "menu-2.php"

    }, 5000)
</script>
</script>