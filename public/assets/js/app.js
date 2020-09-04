$(document).ready(function () {

    console.log('App Started...');

    //SWITCH FEATURED
    $('button[data-role="switch_featured"]').click(function () {
        let video_id = $(this).attr('data-id');
        let url = '/dashboard/admin/video/change-featured-state';
        let type = 'POST'
        let _token = $('meta[name="X-CSRF-TOKEN"]').attr('content');

        $.ajax({
            url,
            data:{
                video_id,
                _token
            },
            type,
            success: function (response) {
                useToast(JSON.parse(response))
            },
            error: function (err) {
                console.log(err);
            }
        })
    });
})


//UPDATE VIDEO
$('#updateVideoForm').submit(function (evt) {
    evt.preventDefault()
    // return console.log('updating video...')
    let $this = $(this),
        data = new FormData($this[0]),
        url = $this.attr('action'),
        type = $this.attr('method'),
        submit_button = $this.find('button[type="submit"]'),
        button_text = submit_button.text();

        submit_button.attr('disabled',true);
        submit_button.text('Loading...');


    $.ajax({
        url,
        type,
        data,
        contentType: false,
        processData: false,
        success: function(response){
            let json_response = JSON.parse(response)
            if (json_response.title){
                return useToast(json_response)
            }
        },
        error: function (err) {
            console.log(err)

        },

    }).done(function () {
        submit_button.text(button_text)
        submit_button.attr('disabled',false);
    })
})


const isJson = str => {
    console.log("checking for json...")
    let item = typeof str !== 'string' ? JSON.stringify(str) : str;
    try{
        item = JSON.parse(item);
        console.log(item)
    }catch (e) {
        return false;
    }
    return (typeof item === 'object' && item !== null)

}

//AJAX FORM

const ajaxResponse = function (response){
    console.log(response)
    response =  $.parseJSON(response);

    if (response.title){
        return useToast(response);
    }

    let parsed_response_text = JSON.parse(response.responseText);

    console.log(parsed_response_text )

    //DIG THROUGH RESPONSE OBJECT TO NOTIFY ALL ALERTS
    if (errors  = parsed_response_text.errors){
        Object.keys(errors).map(function (key) {
            errors[key].map(function (error) {
                useToast({message: error, type: 'error', title: "ERROR:"})
            })
        })
        return;
    }

    if (response.message){
       return  useToast({title: "Error",'type' : 'error','message':response.message});
    }

    return useToast({title: "Error",'type' : 'error','message':"An unknown error has occured. Please try again."})
}

const ajaxComplete = function(submit_button,submit_button_text = 'Submit'){
    submit_button.attr('disabled',false);
    submit_button.text(submit_button_text)

}

$('form[data-role="simple-ajax-form"]').submit(function (evt) {
    if (!window.jQuery){
        return alert('Jquery is missing. You need to load jquery to use this function.');
    }
    evt.preventDefault();
    let form = $(this),
        button = form.find('button[type="submit"]'),
        button_text = button.text();
        button.attr('disabled',true);

        config = {};
    button.text('please wait...');
    config.url = form.attr('action');
    config.type = form.attr('method');
    config.data = new FormData(form[0])
    // if (form.attr('enctype') == 'multipart/form-data'){
        config.processData = false;
        config.contentType = false;
    // }

    //Assign the same function to both the success and error function property of Ajax
    config.success = config.error = response => ajaxResponse(response);
    config.complete = () => ajaxComplete(button, button_text)

    $.ajax(config);

});
//END AJAX FORM

//IZITOAST
if (typeof useToast !== 'function') {
    window.useToast = function(message) {
        switch (message.type) {
            case 'error':
                iziToast.error({
                    title: message.title || "TABE",
                    message: message.message,
                    timeout: message.timeout || 10000
                })
                break;
            case 'warning':
                iziToast.warning({
                    title: message.title || "TABE",
                    message: message.message,
                    timeout: message.timeout || 10000
                })
                break;

            default:
                iziToast.success({
                    title: message.title || "TABE",
                    message: message.message,
                    timeout: message.timeout || 10000
                })
                break;
        }
    }
}
//END IZITOAST