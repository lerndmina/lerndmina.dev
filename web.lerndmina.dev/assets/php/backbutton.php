<button class="back-button btn btn-secondary" onclick="goBack()" title="Javascript back button">Go Back</button>
<noscript><p class="back-button">JavaScript is disabled, the above button will not work<br><a href="/portfolio">Click Me to go back</a></p></noscript>
<!--TODO improve non JS alternative-->
<script>
    function goBack() {
        window.history.back();
    }
</script>
<style>
    /* Back Button */
    .back-button{
        position: relative;
        top: 15px;
        left: 15px;
    }
</style>