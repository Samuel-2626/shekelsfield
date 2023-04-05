<!-- Footer -->
<div class="footer">
    <div class="container-fluid footer__container mt-4">
        <div class="row text-center">
            <div class="col-md-4 mb-4">
                <h2>Shekelsfield Nigeria Limited</h2>
                <q>...planted by the rivers</q>
            </div>
            <div class="col-md-4 mb-4">
                <h2>Find Us At</h2>
                <p>Olajumoke Hilltop Farm Estate<br>
                    Isomu-Orunwa Road,<br>
                    Isomu Ijebu, Ogun State,<br>
                    Nigeria. <br>
                    <br>
                    <i class="fa fa-mail-bulk fa-1x" style="color: #7dce94;"></i>&nbsp;<span><a href="mailto:shekelsfieldnig@gmail.com">shekelsfieldnig@gmail.com</a></span>
                    <br>
                    <i class="fa fa-phone fa-1x" style="color: #7dce94;"></i>&nbsp;<span><a href="tel:+234 (0)8033953651">+ 234 (0)8149110574</a></span>
            </div>
            <div class="col-md-4 footer__img">
                <img src="img/logo.jpg" alt="Shekelsfield's Logo" class="img-fluid img-thumbnail">
            </div>
        </div>
    </div>
</div>



<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.bundle.min.js" integrity="sha384-BOsAfwzjNJHrJ8cZidOg56tcQWfp6y72vEJ8xQ9w6Quywb24iOsW913URv1IS4GD" crossorigin="anonymous"></script>

<script>
    var navbar = document.querySelector('nav')
    var a = document.querySelectorAll('nav a')
    a.forEach((e) => {
        e.style.color = 'black'
    })
    window.onscroll = function() {
        if (window.pageYOffset > 70) {
            navbar.classList.add('scrolled')
            a.forEach((e) => {
                e.style.color = 'white'
            })
        } else {
            navbar.classList.remove('scrolled')
            a.forEach((e) => {
                e.style.color = 'black'
            })
        }
    }
</script>
</body>

</html>