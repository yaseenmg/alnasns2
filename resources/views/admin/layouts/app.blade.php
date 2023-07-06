<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Dashboard</title>
        <link rel="shortcut icon" href="img/favicon.ico">
        <!--STYLESHEET-->
        <!--=================================================-->
        <!--Roboto Slab Font [ OPTIONAL ] -->
        <link href="http://fonts.googleapis.com/css?family=Roboto+Slab:400,300,100,700" rel="stylesheet">
        <link href="http://fonts.googleapis.com/css?family=Roboto:500,400italic,100,700italic,300,700,500italic,400" rel="stylesheet">
        <!--Bootstrap Stylesheet [ REQUIRED ]-->
        <link href="{{asset('assets/admin/css/bootstrap.min.css')}}" rel="stylesheet">
        <!--Jasmine Stylesheet [ REQUIRED ]-->
        <link href="{{asset('assets/admin/css/style.css')}}" rel="stylesheet">
        <!--Font Awesome [ OPTIONAL ]-->
        <link href="{{asset('assets/admin/plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
        <!--Switchery [ OPTIONAL ]-->
        <link href="{{asset('assets/admin/plugins/switchery/switchery.min.css')}}" rel="stylesheet">
        <!--Bootstrap Select [ OPTIONAL ]-->
        <link href="{{asset('assets/admin/plugins/bootstrap-select/bootstrap-select.min.css')}}" rel="stylesheet">
        <!--ricksaw.js [ OPTIONAL ]-->
        <link href="{{asset('assets/admin/plugins/jquery-ricksaw-chart/css/rickshaw.css')}}" rel="stylesheet">
        <!--Bootstrap Validator [ OPTIONAL ]-->
        <link href="{{asset('assets/admin/plugins/bootstrap-validator/bootstrapValidator.min.css')}}" rel="stylesheet">
        <!--Demo [ DEMONSTRATION ]-->
        <link href="{{asset('assets/admin/css/demo/jquery-steps.min.css')}}" rel="stylesheet">
        <!--Summernote [ OPTIONAL ]-->
        <link href="{{asset('assets/admin/plugins/summernote/summernote.min.css')}}" rel="stylesheet">
        <!--Demo [ DEMONSTRATION ]-->
        <link href="{{asset('assets/admin/css/demo/jasmine.css')}}" rel="stylesheet">

        <link href="{{asset('assets/admin/css/demo/all.css')}}" rel="stylesheet">
        <link href="{{asset('assets/admin/css/demo/all.min.css')}}" rel="stylesheet">
        <!--SCRIPT-->
        <!--=================================================-->
        <!--Page Load Progress Bar [ OPTIONAL ]-->
        <!--Full Calendar [ OPTIONAL ]-->
        <link href="{{asset('assets/admin/plugins/fullcalendar/fullcalendar.css')}}" rel="stylesheet">
        <!--Demo [ DEMONSTRATION ]-->
        <link href="{{asset('assets/admin/plugins/pace/pace.min.css')}}" rel="stylesheet">
        <script src="{{asset('assets/admin/plugins/pace/pace.min.js')}}"></script>
        <link href="{{asset('assets/admin/plugins/datatables/media/css/dataTables.bootstrap.css')}}" rel="stylesheet">
        <link href="{{asset('assets/admin/plugins/datatables/extensions/Responsive/css/dataTables.responsive.css')}}" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Tajawal&display=swap" rel="stylesheet">
        <link href='https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.16.0/codemirror.css' rel='stylesheet'>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.16.0/codemirror.js'></script>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.16.0/mode/htmlmixed/htmlmixed.js'></script>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.16.0/mode/javascript/javascript.js'></script>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.16.0/mode/xml/xml.js'></script>

        <script src='https://cdn.tiny.cloud/1/qagffr3pkuv17a8on1afax661irst1hbr4e6tbv888sz91jc/tinymce/6/tinymce.min.js'></script>


    </head>

    <body>

    <div id="container" class="effect mainnav-sm navbar-fixed mainnav-fixed">

        @include('admin.includes.header')

                @yield('content')

        @include('admin.includes.sidebar')

        @include('admin.includes.footer')

    </div>


    <script>
        tinymce.init({
  selector: ".mytextarea",
  height: 400,
  plugins: [
    "advlist autolink advcode lists link image charmap print preview anchor",
    "searchreplace visualblocks code fullscreen",
    "insertdatetime media table paste emoticons"
  ],
  toolbar:
    "styleselect | bold italic underline | alignleft aligncenter alignright alignjustify | code ",
  menubar: "file edit view insert format tools table help",
  setup: function (editor) {
    editor.on("keyup", function (e) {
      updateHTML(editor.getContent());
    });
    editor.on("change", function (e) {
      updateHTML(editor.getContent());
    });
  }
});

function updateHTML(content) {
  cmeditor.getDoc().setValue(content);
}

function updateEditor() {
  if (!tinymce.activeEditor.hasFocus()) {
    tinymce.activeEditor.setContent(cmeditor.getDoc().getValue());
  }
}

var HTMLContainer = document.querySelector(".HTMLContainer");

var cmeditor = CodeMirror(HTMLContainer, {
  lineNumbers: true,
  mode: "htmlmixed"
});

cmeditor.on("change", (editor) => {
  updateEditor();
});

    </script>



        <script src="{{asset('assets/admin/js/jQuery.print.js')}}"></script>
        <script src="{{asset('assets/admin/js/all.js')}}"></script>
        <script src="{{asset('assets/admin/js/all.min.js')}}"></script>
        <script src="{{asset('assets/admin/js/jquery-2.1.1.min.js')}}"></script>
        <!--BootstrapJS [ RECOMMENDED ]-->
        <script src="{{asset('assets/admin/js/bootstrap.min.js')}}"></script>
        <!--Fast Click [ OPTIONAL ]-->
        <script src="{{asset('assets/admin/plugins/fast-click/fastclick.min.js')}}"></script>
        <!--Jquery Nano Scroller js [ REQUIRED ]-->
        <script src="{{asset('assets/admin/plugins/nanoscrollerjs/jquery.nanoscroller.min.js')}}"></script>
        <!--Metismenu js [ REQUIRED ]-->
        <script src="{{asset('assets/admin/plugins/metismenu/metismenu.min.js')}}"></script>
        <!--Jasmine Admin [ RECOMMENDED ]-->
        <script src="{{asset('assets/admin/js/scripts.js')}}"></script>
        <!--Switchery [ OPTIONAL ]-->
        <script src="{{asset('assets/admin/plugins/switchery/switchery.min.js')}}"></script>
        <!--Jquery Steps [ OPTIONAL ]-->
        <script src="{{asset('assets/admin/plugins/parsley/parsley.min.js')}}"></script>
        <!--Jquery Steps [ OPTIONAL ]-->
        <script src="{{asset('assets/admin/plugins/jquery-steps/jquery-steps.min.js')}}"></script>
        <!--Bootstrap Select [ OPTIONAL ]-->
        <script src="{{asset('assets/admin/plugins/bootstrap-select/bootstrap-select.min.js')}}"></script>
        <!--Bootstrap Wizard [ OPTIONAL ]-->
        <script src="{{asset('assets/admin/plugins/bootstrap-wizard/jquery.bootstrap.wizard.min.js')}}"></script>
        <!--Masked Input [ OPTIONAL ]-->
        <script src="{{asset('assets/admin/plugins/masked-input/bootstrap-inputmask.min.js')}}"></script>
        <!--Bootstrap Validator [ OPTIONAL ]-->
        <script src="{{asset('assets/admin/plugins/bootstrap-validator/bootstrapValidator.min.js')}}"></script>
        <!--Flot Chart [ OPTIONAL ]-->
        <script src="{{asset('assets/admin/plugins/flot-charts/jquery.flot.min.js')}}"></script>
        <script src="{{asset('assets/admin/plugins/flot-charts/jquery.flot.resize.min.js')}}"></script>
        <script src="{{asset('assets/admin/plugins/flot-charts/jquery.flot.spline.js')}}"></script>
        <script src="{{asset('assets/admin/plugins/flot-charts/jquery.flot.pie.min.js')}}"></script>
        <script src="{{asset('assets/admin/plugins/moment/moment.min.js')}}"></script>
        <script src="{{asset('assets/admin/plugins/moment-range/moment-range.js')}}"></script>
        <script src="{{asset('assets/admin/plugins/flot-charts/jquery.flot.tooltip.min.js')}}"></script>
        <!--Flot Order Bars Chart [ OPTIONAL ]-->
        <script src="{{asset('assets/admin/plugins/flot-charts/jquery.flot.categories.js')}}"></script>
        <!--ricksaw.js [ OPTIONAL ]-->
        <script src="{{asset('assets/admin/plugins/jquery-ricksaw-chart/js/raphael-min.js')}}"></script>
        <script src="{{asset('assets/admin/plugins/jquery-ricksaw-chart/js/d3.v2.js')}}"></script>
        <script src="plugins/jquery-ricksaw-chart/js/rickshaw.min.js')}}"></script>
        <script src="{{asset('assets/admin/plugins/jquery-ricksaw-chart/ricksaw.js')}}"></script>
       <!--Summernote [ OPTIONAL ]-->
        <script src="{{asset('assets/admin/plugins/summernote/summernote.min.js')}}"></script>
        <!--Fullscreen jQuery [ OPTIONAL ]-->
        <script src="{{asset('assets/admin/plugins/screenfull/screenfull.js')}}"></script>
        <!--Form Wizard [ SAMPLE ]-->
        <script src="{{asset('assets/admin/js/demo/wizard.js')}}"></script>
        <!--Form Wizard [ SAMPLE ]-->
        <script src="{{asset('assets/admin/js/demo/form-wizard.js')}}"></script>
        <!-- <script src="{{asset('assets/admin/js/demo/dashboard-v2.js')}}"></script> -->

        <script src="{{asset('assets/admin/plugins/fullcalendar/lib/moment.min.js')}}"></script>
        <script src="{{asset('assets/admin/plugins/fullcalendar/lib/jquery-ui.custom.min.js')}}"></script>
        <script src="{{asset('assets/admin/plugins/fullcalendar/fullcalendar.min.js')}}"></script>
        <!--Full Calendar [ SAMPLE ]-->
        <script src="{{asset('assets/admin/js/demo/fullcalendar.js')}}"></script>
        <!--Fullscreen jQuery [ OPTIONAL ]-->
        <script src="{{asset('assets/admin/js/jquery-3.3.1.min.js')}}"></script>
        <script src="{{asset('assets/admin/js/plugins.js')}}"></script>
        <script src="{{asset('assets/admin/js/fontawesome.min.js')}}"></script>
        <script src="{{asset('assets/admin/js/solid.js')}}"></script>

        <script src="{{asset('assets/admin/plugins/datatables/media/js/jquery.dataTables.js')}}"></script>
        <script src="{{asset('assets/admin/plugins/datatables/media/js/dataTables.bootstrap.js')}}"></script>
        <script src="{{asset('assets/admin/plugins/datatables/extensions/Responsive/js/dataTables.responsive.min.js')}}"></script>
        <!--Fullscreen jQuery [ OPTIONAL ]-->
        <script src="{{asset('assets/admin/plugins/screenfull/screenfull.js')}}"></script>
        <!--DataTables Sample [ SAMPLE ]-->
        <script src="{{asset('assets/admin/js/demo/tables-datatables.js')}}"></script>
        <script>
          AOS.init();
        </script>

  </body>

</html>
