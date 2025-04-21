
<link rel="icon" type="image/ico" href="/assets/favicon.ico"/>
<meta name="format-detection" content="telephone=no"/>
<!-- Vendors CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@25.3.1/build/css/intlTelInput.css"/>
<!-- Custom CSS -->
<link href="/assets/css/custom.min.css" rel="stylesheet" type="text/css">
<style>
    .loader-first {
        position: fixed;
        left: 0;
        top: 0;
        width: 100%;
        height: 100vh;
        z-index: 9999;
        background: #000000;
    }
    .loader-first video {
        width: 100%;
        height: 100%;
        object-fit: cover;
        aspect-ratio: 16/9;
    }
    .alert-warnning {
        position: fixed;
        top: 0;
        left: 0;
        z-index: 999999;
        display: flex;
        justify-content: center;
        align-items: center;
        width: 100%;
        height: 100%;
        font-size: 20px;
        text-transform: uppercase;
        text-align: center;
        line-height: 1.5em;
        font-weight: 700;
        color: #fff;
        background: #000;
        overflow: hidden;
    }

    .alert-warnning p {
        position: absolute;
        left: 50%;
        top: 50%;
        font-size: 18px;
        transform: translate(-50%, -50%);
        color: #fff;
    }
</style>