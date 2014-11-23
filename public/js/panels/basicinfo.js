/* 
 * Copyright 2014
 * Jeremy Leach
 * pegas corporation
 * and affiliates
 */

        $("#basic-info").on("submit", function (e) {
            alert("basicinfo.js");
            e.preventDefault();
            var forminfo = $("#basic-info").serialize();
            alert(forminfo);
            var token = $("input[name=_token]").val();
            var firstname = $("#firstname").val();
            var middlename = $("#middlename").val();
            var lastname = $("#lastname").val();
            var address1 = $("#address1").val();
            var address2 = $("#address2").val();
            //var zipcode = ;
            var action = '{{ URL::action("ClientsController@create")}}';
            var formData = "title=" + title + "&description=" + description;
            // we should do saving animation herre id="busy-icon"
            document.getElementById("busy-icon").innerHTML = "<img src='../images/load-wings-small.gif'/>";
            if (title === "")
            {
                document.getElementById("title").focus();
                document.getElementById("busy-icon").innerHTML = "";
                return false;
            } else
            if (description === "") {
                document.getElementById("description").focus();
                document.getElementById("busy-icon").innerHTML = "";
                return false;
            }
            $.ajax({
                type: "post",
                url: action,
                data: forminfo,
                success: function (data) {
                    console.log(data);
                    $("#frm-add-program").trigger("reset");
                    document.getElementById("busy-icon").innerHTML = "Save Complete. Enter new Program.";
                }
            }, "json");
            return false;
        });
