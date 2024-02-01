<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title','Custom Auth Laravel') </title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>

</head>
<body>
    @include('include.header')
    @yield('content')
    <script>
        const modalEl = document.getElementById('info-popup');
        const privacyModal = new Modal(modalEl, {
            placement: 'center'
        });
        const showModalEl = document.getElementById('add');
        showModalEl.addEventListener('click', function() {
            privacyModal.show();
        });

        

        const closeModalEl = document.getElementById('close-modal');
        closeModalEl.addEventListener('click', function() {
            privacyModal.hide();
        });

        const acceptPrivacyEl = document.getElementById('confirm-button');
        acceptPrivacyEl.addEventListener('click', function() {
            alert('privacy accepted');
            privacyModal.hide();
        });
    </script>
</body>
</html>