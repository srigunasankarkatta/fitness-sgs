<!DOCTYPE html>
<html>
<head>
    <title>Laravel 6 Ckeditor Image Upload Example - ItSolutionStuff.com</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.ckeditor.com/4.12.1/standard/ckeditor.js"></script>
    
</head>
<body>
  
<h1>Laravel 6 Ckeditor Image Upload Example - ItSolutionStuff.com</h1>
<textarea name="editor1"></textarea>
   
<script type="text/javascript">
CKEDITOR.on( 'dialogDefinition', function( ev )
   {
      var dialogName = ev.data.name;
      var dialogDefinition = ev.data.definition;
      ev.data.definition.resizable = CKEDITOR.DIALOG_RESIZE_NONE;

      if ( dialogName == 'link' )

      {
         var infoTab = dialogDefinition.getContents( 'info' );
         infoTab.remove( 'protocol' );
         dialogDefinition.removeContents( 'target' );
         dialogDefinition.removeContents( 'advanced' );
      }
      if ( dialogName == 'info' )

        {
        var infoTab2 = dialogDefinition.getContents( 'url' );
        infoTab2.remove( 'protocol' );
        dialogDefinition.removeContents( 'Width' );
        dialogDefinition.removeContents( 'advanced' );
        }

      if ( dialogName == 'image' )
      {
        // dialogDefinition.removeContents( 'info' );
         dialogDefinition.removeContents( 'Link' );
         dialogDefinition.removeContents( 'advanced' );
         var infoTab = dialogDefinition.getContents( 'info' );
         infoTab.remove( 'txtBorder' );
         infoTab.remove( 'txtHSpace' );
         infoTab.remove( 'txtVSpace' );
         infoTab.remove( 'cmbAlign' );
         infoTab.remove( 'txtWidth' );
         infoTab.remove( 'txtUrl' );
        //  $2a$12$2laJsP0P6x037YmuZ7CFoOyBRF7KsYhTQWTb0IeC9nmmelYg/QnMm
      }
   });
    CKEDITOR.replace('editor1', {
        filebrowserUploadUrl: "{{route('ckeditor.upload', ['_token' => csrf_token() ])}}",
        filebrowserUploadMethod: 'form'
        // config.removeDialogTabs = 'link:target;link:advanced;image:Link;image:advanced';
    });
</script>
   
</body>
</html>