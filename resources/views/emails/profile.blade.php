<html lang="en">
<head>

    <title>Profile Confirm</title>
</head>
<body>
    <table width='700px'>
        <tr><td>&nbsp;</td></tr>
        <tr><td>Hello {{ $form->first_name }} {{ $form->last_name }}</td></tr>
        <tr><td>Just to let you know that your Case has been sucessfully profiled and we will respond to you as soon as possible. Have a Great Day</td></tr>
        <tr><td>&nbsp;</td></tr>
        <tr><td>Date and Time of the Profiling : <b>{{ $form->created_at->translatedFormat('l, F j, Y g:i a') }}</b></td></tr>
    </table>
</body>
</html>
