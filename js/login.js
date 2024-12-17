// do every thing only when the document is called
$(function (e) {
    $(document).on("keyup", "input", function (e) {
      let un = $("#txt-user").val();
      let pw = $("#txt-password").val();
  
      if (un.trim() !== "" && pw.trim() !== "") {
        $("#btnLogin").removeClass("inactivecolor");
        $("#btnLogin").addClass("activecolor");
      } else {
        $("#btnLogin").removeClass("activecolor");
        $("#btnLogin").addClass("inactivecolor");
      }
    });
  });
  