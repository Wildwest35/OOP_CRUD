$(document).ready(function() {
    var update_id;

    $(document).on("click","#info", function(e) {
        e.preventDefault();
        var user_id = $(this).attr("value");
        
        $.ajax({
            url : './includes/readPersonalinfo.php',
            type : 'POST',
            dataType: 'json',
            data:{
                user_id: user_id
            },
            success : function (data) {
                fetch(data);
            },
            error : function () {

            }
        });
    });

    $(document).on("click","#ins", function(e) {
        e.preventDefault();
        $("#modalInsert").css({"display":"block"});
    });

    $(document).on("click","#insSub", function(e) {
        e.preventDefault();
        var afm = $("#insafm").val();
        var amka = $("#insamka").val();
        var idcard = $("#insidcard").val();

        $.ajax({
            url : './includes/insertPersonalinfo.php',
            type : 'POST',
            dataType: 'json',
            data:{
                afm: afm,
                amka: amka,
                idcard: idcard,
            },
            success : function (data) {
                $("#modalInsert").css({"display":"none"});
                getAllPersonalInfo();
                $("#insafm").val("");
                $("#insamka").val("");
                $("#insidcard").val("");
            },
            error : function () {
                $("#modalnsert").css({"display":"none"});
            }
        });
    });

    $(document).on("click","#edit", function(e) {
        e.preventDefault();
        var user_id = $(this).attr("value");

        $.ajax({
            url : './includes/readPersonalinfo.php',
            type : 'POST',
            dataType: 'json',
            data:{
                user_id: user_id
            },
            success : function (data) {
                var tmp = data.data.map(function(el) {
                    update_id = user_id;
                    $("#user").text(el.users_uid);
                    $("#afm").val(el.info_afm);
                    $("#amka").val(el.info_amka);
                    $("#idcard").val(el.info_idcard);
				});

                $("#modalUpdate").css({"display":"block"});
            },
            error : function () {

            }
        });
    });

    $(document).on("click","#updateSub", function(e) {
        e.preventDefault();
        var afm = $("#afm").val();
        var amka = $("#amka").val();
        var idcard = $("#idcard").val();

        $.ajax({
            url : './includes/updatePersonalinfo.php',
            type : 'POST',
            dataType: 'json',
            data:{
                user_id: update_id,
                afm: afm,
                amka: amka,
                idcard: idcard,
            },
            success : function (data) {
                $("#modalUpdate").css({"display":"none"});
                getAllPersonalInfo();
            },
            error : function () {
                $("#modalUpdate").css({"display":"none"});
            }
        });
    });
    
    $(document).on("click","#del", function(e) {
        e.preventDefault();
        var user_id = $(this).attr("value");
        
        $.ajax({
            url : './includes/deletePersonalinfo.php',
            type : 'POST',
            dataType: 'json',
            data:{
                user_id: user_id
            },
            success : function (data) {
                getAllPersonalInfo();
            },
            error : function () {

            }
        });
    });

    function getAllPersonalInfo() {
        $.ajax({
            url : './includes/personalinfo.inc.php',
            type : 'POST',
            dataType: 'json',
            success : function (data) {
                fetch(data);
            },
            error : function () {
                console.log("error");
            }
        });    
    }

    function fetch(data) {
        $.ajax({
            url : './includes/table.php',
            type : 'POST',
            data: data,
            success : function (data) {
                $("#fetch").html(data);
            },
            error : function () {
                
            }
        });        
    }

    getAllPersonalInfo();
});