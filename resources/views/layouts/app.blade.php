<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>San Agustin eService</title>

    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
</head>
<body>

    @include('sections.navbar')

    @include('sections.home')
    @include('sections.about')
    @include('sections.officials')
    @include('sections.services')
    @include('sections.announcement')

    @include('sections.footer')

    @include('sections.modals.register-modal')
    @include('sections.modals.login-modal')
    @include('sections.modals.id-modal')
    @include('sections.modals.clearance-modal')
    @include('sections.modals.certification-modal')
    @include('sections.modals.permit-modal')
    @include('sections.modals.blotter-modal')
    @include('sections.modals.household-modal')

</body>
    <script src="{{ asset('js/script.js') }}"></script>
</html>
