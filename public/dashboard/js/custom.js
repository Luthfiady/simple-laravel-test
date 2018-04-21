$(function() {
    $("#inp_kategori").select2({
        width: 'resolve',
        placeholder: ''
    });
});

$('input[type="text"]').tooltipster({ //find more options on the tooltipster page
    trigger: 'custom', // default is 'hover' which is no good here
    side: 'right',
    position: 'right',
    animation: 'grow',
    theme: ['tooltipster-noir', 'tooltipster-noir-customized']
});


$(".info-input").tooltipster({
    trigger: 'hover', // default is 'hover' which is no good here
    side: 'bottom',
    position: 'bottom',
    animation: 'grow',
    contentAsHTML: true,
    theme: 'tooltipster-light'
});

$("#formProduk").validate({
    ignore: "",
    errorPlacement: function (error, element) {
        var ele = $(element),
            err = $(error),
            msg = err.text();
        if (msg != null && msg !== '') {
            ele.tooltipster('content', msg);
            ele.tooltipster('open');
        }
    },
    unhighlight: function(element, errorClass, validClass) {
        $(element).removeClass(errorClass).addClass(validClass).tooltipster('close');
    },
    rules: {
        inp_nama: {
            required: true
        },
        inp_kategori: {
            required: true
        },
        inp_harga: {
            required: true
        }
    },
    messages:
    {
        inp_nama: 'Nama produk tidak boleh kosong',
        inp_kategori: 'Kategori produk tidak boleh kosong',
        inp_harga: 'Harga Jual tidak boleh kosong'
    }
});

function addProduk()
{
	if($("#formProduk").valid() == true)
	{
        return true;
	}
	else
	{
		return false;
	}	
}

function uploadFile()
{
    $("#uploads").click();
}