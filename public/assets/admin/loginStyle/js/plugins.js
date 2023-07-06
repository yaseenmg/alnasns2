




$(document).ready(function () {
    if (window.File && window.FileList && window.FileReader) {
      $("#files").on("change", function (e) {
        var files = e.target.files,
          filesLength = files.length;
        for (var i = 0; i < filesLength; i++) {
          var f = files[i];
          var fileReader = new FileReader();
          fileReader.onload = function (e) {
            var file = e.target;
            $(
              '<span class="pip">' +
                '<img class="imageThumb" src="' +
                e.target.result +
                '" title="' +
                file.name +
                '"/>' +
                '<br/><span class="remove">Remove image</span>' +
                "</span>"
            ).insertAfter("#files");
            $(".remove").click(function () {
              $(this).parent(".pip").remove();
            });

            // Old code here
            /*$("<img></img>", {
              class: "imageThumb",
              src: e.target.result,
              title: file.name + " | Click to remove"
            }).insertAfter("#files").click(function(){$(this).remove();});*/
          };
          fileReader.readAsDataURL(f);
        }
        console.log(files);
      });
    } else {
      alert("Your browser doesn't support to File API");
    }
  });

$(document).ready(function () {

    $('.repeater').repeater({
        // (Optional)
        // start with an empty list of repeaters. Set your first (and only)
        // "data-repeater-item" with style="display:none;" and pass the
        // following configuration flag
        initEmpty: false,
        // (Optional)
        // "defaultValues" sets the values of added items.  The keys of
        // defaultValues refer to the value of the input's name attribute.
        // If a default value is not specified for an input, then it will
        // have its value cleared.
        defaultValues: {
            'text-input': 'foo'
        },
        // (Optional)
        // "show" is called just after an item is added.  The item is hidden
        // at this point.  If a show callback is not given the item will
        // have $(this).show() called on it.
        show: function () {
            $(this).slideDown();
        },
        // (Optional)
        // "hide" is called when a user clicks on a data-repeater-delete
        // element.  The item is still visible.  "hide" is passed a function
        // as its first argument which will properly remove the item.
        // "hide" allows for a confirmation step, to send a delete request
        // to the server, etc.  If a hide callback is not given the item
        // will be deleted.
        hide: function (deleteElement) {
            if(confirm('Are you sure you want to delete this element?')) {
                $(this).slideUp(deleteElement);
            }
        },
        // (Optional)
        // You can use this if you need to manually re-index the list
        // for example if you are using a drag and drop library to reorder
        // list items.
        ready: function (setIndexes) {
        },
        // (Optional)
        // Removes the delete button from the first list item,
        // defaults to false.
        isFirstItemUndeletable: true
    })
});





(function($) {

    "use strict";

    $(".toggle-password").click(function() {

      $(this).toggleClass("fa-eye fa-eye-slash");
      var input = $($(this).attr("toggle"));
      if (input.attr("type") == "password") {
      input.attr("type", "text");
      } else {
      input.attr("type", "password");
      }
    });

    })(jQuery);








$(document).ready(function(){
  // Add smooth scrolling to all links
  $("a").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){

        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });










});




$(document).ready(function () {
  $('#example').DataTable({
      language: {
          paginate: {
              next: '<span>التالى</span>',
              previous: '<span>السابق</span>'
          }
      }
  });
});


$(function () {





    $('.mobHead .SideOpen').on('click', function () {

      $('.latestFiles .sideMenu').fadeIn(500);
      $('.outing').fadeIn(500);

    });

    $('.outing').on('click', function () {

      $('.latestFiles .sideMenu').fadeOut(500);
      $('.outing').fadeOut(500);

    });




    $('.sideBarCustomize').on('click', function () {

      $(".latestFiles .sideMenu").css("right", "-163px");
      $(".innerContent").css("padding-right", "51px");
      $(".sideBarCustomize").css("display", "none");
      $(".sideBarCustomizeClose").css("display", "block");
  });

  $('.sideBarCustomizeClose').on('click', function () {

    $(".latestFiles .sideMenu").css("right", "0px");
    $(".innerContent").css("padding-right", "213px");
    $(".sideBarCustomize").css("display", "block");
    $(".sideBarCustomizeClose").css("display", "none");

});




});




$('.addBtn').on('click', function () {

  $('.alert-success').fadeIn(500);

});


$('.closeBtn').on('click', function () {

  $('.alert-success').fadeOut(500);

});


$('.logBtn').on('click', function () {

  $('.alert-danger').fadeIn(500);

});

$('.passInp').on('click', function () {

  $('.alert-danger').fadeOut(500);

});



tinymce.init({
    selector: "#textArea",
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



