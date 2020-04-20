<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset=UTF-8>
    <title>Document</title>
</head>
<body>
<textarea name=text id="text" cols="30" rows="10"></textarea>
<script src={{ asset('js/ckeditor/ckeditor.js') }}></script>
<script>
    CKEDITOR.replace( 'text', {
        filebrowserBrowseUrl: '{{ route('ckfinder_browser') }}',

    } );
</script>
@include('ckfinder::setup')
</body>
</html>
