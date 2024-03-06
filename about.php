<?= require_once './layouts/header.php' ?>

<div class="container">
    <input type="text" name="" id="input" class="form-controller">
</div>

<script>
    console.log('cookieddd');

    const cookie = name => `; ${document.cookie}`.split(`;
${name}=`).pop().split(';').shift();
    console.log(cookie('_ga'));
    // Result: "GA1.2.1929736587.1601974046"


    // $(document).ready(function () {
    //     // var inputValue = $("#myInput").val();
    //     const cookie = name => `; ${document.cookie}`.split(`;${name}=`).pop().split(';').shift();
    //     $("#input").val(cookie('_ga'));
    // });

</script>
<?= require_once './layouts/footer.php' ?>