$(function(){
	getListTable();
});

$("#formUser").validate({
    ignore: "",
    rules: {
        inp_uuid: {
            required: true
        },
        inp_name: {
            required: true,
            remote: {
                type: "POST",
                url: "checkExist",
                data: {
                    values: function() 
                    {
                        return $("#inp_name").val();
                    },
                    select: 'nama',
                    _token: CSRF_TOKEN
                }
            }
        },
        inp_address: {
            required: true
        },
    },
    messages:
    {
        inp_name:
        {
            remote: "This value is already taken."
        },
    },
});

function addUser()
{
	if($("#formUser").valid() == true)
	{
        // $('#listEducation').html('<center><img src="<?php echo base_url() ?>assets/img/loading.gif" height="50"></center>');

        var form_data = {
            inp_uuid       : $("#inp_uuid").val(),
            inp_name       : $("#inp_name").val(),
            inp_address    : $("#inp_address").val(),
            _token         : CSRF_TOKEN
        }

        $.ajax({
            url: 'addUser',
            type: 'POST',
            data: form_data,
            dataType: "JSON",
            success: function(response) {
                if (response.status == 'success')
                {
                    toastr.success(response.message);
                    getListTable();
                    resetForm(0);
                }
                else
                {
                    toastr.error(response.message);
                }
            }
        });
        return false;
	}
	else
	{
		return false;
	}	
}

function resetForm(res)
{
    if (res == 0)
        $("#inp_uuid").val(randomString(20));

    $("#inp_name").val('');
    $("#inp_address").val('');
}

function randomString(length) 
{
    var text = "";
    var possible = "0123456789abcdefghijklmnopqrstuvwxyz";
  
    for (var i = 0; i < length; i++)
        text += possible.charAt(Math.floor(Math.random() * possible.length));
  
    return text;
}

function getListTable()
{
    var form_data = {
        _token         : CSRF_TOKEN
    }

    $.ajax({
        url: 'getListUser',
        type: 'GET',
        data: form_data,
        dataType: "JSON",
        success: function(response) {
            var row = '';
            if (response.data.length > 0) {
                $.each(response.data, function(key, value){
                    row += '<tr>';
                    row += '<td>' + value.uuid + '</td>';
                    row += '<td>' + value.nama + '</td>';
                    row += '<td>' + value.alamat + '</td>';
                    row += '</tr>';
                });
                $("#dataTable").html(row);
            } else {
                row += '<tr>';
                row += '<td colspan="3"><center>Data tidak tersedia</center></td>';
                row += '</tr>';
                $("#dataTable").html(row);
            }
        }
    });
}
