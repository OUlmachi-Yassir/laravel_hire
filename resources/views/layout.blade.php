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
    // Open the popup when the "Open Form" button is clicked
    document.getElementById('openPopup').addEventListener('click', function () {
        document.getElementById('popupForm').classList.remove('hidden');
    });

    // Close the popup when the "Close" button is clicked
    document.getElementById('closePopup').addEventListener('click', function () {
        document.getElementById('popupForm').classList.add('hidden');
    });

    // Close the popup if the background is clicked
    document.getElementById('popupForm').addEventListener('click', function (event) {
        if (event.target.id === 'popupForm') {
            document.getElementById('popupForm').classList.add('hidden');
        }
    });
</script>
<script>
    document.querySelectorAll('.read-more').forEach(link => {
        link.addEventListener('click', function (event) {
            event.preventDefault();
            const serviceId = this.getAttribute('data-service-id');
            const contacteElement = document.getElementById('contacte-' + serviceId);
            contacteElement.classList.toggle('hidden');
        });
    });
</script>


</body>
</html>