var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

$(function(){
	
});

function isNumeric(data)
{
	if($.isNumeric(data.value) == false)
	{
		data.value = data.value.replace(/[^0-9\.]/g, '');
	}
	else
	{
		return false;
	}
}

function checkError()
{
    var error = document.getElementsByClassName('errors');
    if (error.length > 0) {
        return false;
    } else {
        return true;
    }
}

function inputToLower(self)
{
	self.value = self.value.toLowerCase();
}
