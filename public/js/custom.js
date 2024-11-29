$(document).ready(function () {
    $('select[name="school_category"]').on('change', function() {
        var categoryID = $(this).val();
        if(categoryID) {
            $.ajax({
                url: web_url+'/get-school/'+categoryID,
                type: "GET",
                dataType: "json",
                success:function(data) {
                    $('select[name="school_id"]').empty();
                    $('select[name="school_id"]').append('<option selected disabled></option>');
                    $('select[name="centre_id"]').empty();
                    $('select[name="centre_id"]').append('<option selected disabled></option>');
                    $.each(data, function(key, value) {
                        $('select[name="school_id"]').append('<option value="'+ value.id +'">'+ value.name +'</option>');
                    });
                }
            });
        }else{
            $('select[name="school_id"]').empty();
        }
    });

    $('select[name="school_id"]').on('change', function() {
        var schoolID = $(this).val();
        if(schoolID) {
            $.ajax({
                url: web_url+'/get-centre/'+schoolID,
                type: "GET",
                dataType: "json",
                success:function(data) {
                    $('select[name="centre_id"]').empty();
                    $('select[name="centre_id"]').append('<option selected disabled></option>');
                    $.each(data, function(key, value) {
                        $('select[name="centre_id"]').append('<option value="'+ value.id +'">'+ value.name +'</option>');
                    });
                }
            });
        }else{
            $('select[name="centre_id"]').empty();
        }
    });
});
