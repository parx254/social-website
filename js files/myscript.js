function myFunction() {
    var e = document.getElementById("myDIV");
    "none" === e.style.display ? e.style.display = "block" : e.style.display = "none"
}
$(document).ready(function() {
    $(".select").click(function() {
        $(".search-box").toggle()
    })
}), $("#toggle").click(function() {
    $(this).toggleClass("on"), $("#resize").toggleClass("active")
}), $(document).ready(function() {
    $("#searchbox1").keyup(function() {
        var e = $("#searchbox1").val();
        0 < e.length && $.ajax({
            url: "general.php",
            method: "POST",
            data: {
                searchppl: 1,
                q: e
            },
            success: function(e) {
                $("#response1").html(e)
            },
            dataType: "text"
        })
    }), $(document).on("li", function() {
        var e = $(this).text();
        $("#searchbox1").val(e), $("#response1").html("")
    })
}), $(document).ready(function() {
    $("#searchbox2").keyup(function() {
        var e = $("#searchbox2").val();
        0 < e.length && $.ajax({
            url: "general.php",
            method: "POST",
            data: {
                searchppl: 1,
                q: e
            },
            success: function(e) {
                $("#response2").html(e)
            },
            dataType: "text"
        })
    }), $(document).on( "li", function() {
        var e = $(this).text();
        $("#searchbox2").val(e), $("#response2").html("")
    })
}), $(document).ready(function() {
    $("#searchbox3").keyup(function() {
        var e = $("#searchbox3").val();
        0 < e.length && $.ajax({
            url: "general.php",
            method: "POST",
            data: {
                searchplace: 1,
                q: e
            },
            success: function(e) {
                $("#response3").html(e)
            },
            dataType: "text"
        })
    }), $(document).on( "li", function() {
        var e = $(this).text();
        $("#searchbox3").val(e), $("#response3").html("")
    })
}), $(document).ready(function() {
    $("#searchbox4").keyup(function() {
        var e = $("#searchbox4").val();
        0 < e.length && $.ajax({
            url: "general.php",
            method: "POST",
            data: {
                searchplace: 1,
                q: e
            },
            success: function(e) {
                $("#response4").html(e)
            },
            dataType: "text"
        })
    }), $(document).on("li", function() {
        var e = $(this).text();
        $("#searchbox4").val(e), $("#response4").html("")
    })
}), $(document).ready(function() {
    $("#searchbox5").keyup(function() {
        var e = $("#searchbox5").val();
        0 < e.length && $.ajax({
            url: "general.php",
            method: "POST",
            data: {
                searchplace: 1,
                q: e
            },
            success: function(e) {
                $("#response5").html(e)
            },
            dataType: "text"
        })
    }), $(document).on("li", function() {
        var e = $(this).text();
        $("#searchbox5").val(e), $("#response5").html("")
    })
}),  $(document).ready(function() {
    $("#changePic").click(function() {
        $("#changeHere").show(), $("#changePic").hide()
    })
}), $(function() {
    $(".scroll-down").click(function() {
        return $("html, body").animate({
            scrollTop: $("div.feedposts").offset().top
        }, "slow"), !1
    })
});
$(document).ready(function() {
    $('.topslide').bind('contextmenu', function() {
        return false;
    });
});
function readURL(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    
    reader.onload = function(e) {
      $('#blah').attr('src', e.target.result);
    }
    
    reader.readAsDataURL(input.files[0]);
  }
}
$("#imgInp").change(function() {
  readURL(this);
});
  var loadFile = function(event) {
    var output = document.getElementById('output');
    output.src = URL.createObjectURL(event.target.files[0]);
  };