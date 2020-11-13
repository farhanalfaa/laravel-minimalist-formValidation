<html>

<head>
    <title>Pre-Test Telkom Sigma</title>
    <link rel="stylesheet" href="{{ asset('styles.css') }}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;800&display=swap" rel="stylesheet">
</head>

<body>
    <div class="form">
        <div class="form__nilai">
            <div class="form__nilai-left">
                <form action="/hitung" method="post" autocomplete="off">
                    <input type="hidden" name="_token" value="<?php echo csrf_token() ?>">
                    <h2 class="form__nilai-top">Scoretulation</h2>
                    <div class="form__nilai-pertama">
                        <p>First Score</p>
                        <input class="form__input-field" type="number" name="firstScore" required>
                    </div>
                    <div class="form__nilai-kedua">
                        <p>Second Score</p>
                        <input class="form__input-field" type="number" name="secondScore" required>
                    </div>
                    <div class="form__validation">
                        <input class="form__button" type="submit" value="Hitung">
                    </div>
                    <div class="form__result">
                        @if(session("message"))
                        <div class="form__result-warning">
                            <h1>{{ session("message")}}</h1>
                        </div>
                        @endif
                    </div>
                </form>
            </div>
            <div class="form__nilai-right">
                <img class="form__nilai-img" src="{{ asset('image.png') }}" alt="">
            </div>
        </div>
    </div>
</body>

</html>