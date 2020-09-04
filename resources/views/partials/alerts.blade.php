@if(session('error'))
    <div class="custom-alert  custom-alert-error">
        <a href="javascript:;" class="close-alert">X</a>
        <p class="text-muted text-8"> <i class="fa fa-danger"></i>{{session('success')}} </p>
    </div>
    @endif

@if(session('success'))
    <div class="custom-alert custom-alert-success">
        <a href="javascript:;" class="close-alert">X</a>
        <p class="text-muted text-8"> <i class="fa fa-danger"></i>{{session('success')}} </p>
    </div>
@endif

@if(session('warning'))
    <div class="custom-alert custom-alert-warning">
        <a href="javascript:;" class="close-alert">X</a>
        <p class="text-muted text-8"> <i class="fa fa-danger"></i>{{session('warning')}} </p>
    </div>
@endif

@if($errors->any())
    <div class="custom-alert custom-alert-danger">
        <a href="javascript:;" class="close-alert">X</a>
        @foreach($errors->all() as $error)
            <p class="text-muted"> <i class="fa fa-danger"></i>{{$error}} </p>
        @endforeach
    </div>
    @endif


<style>

    /*CUSTOM ALERT*/
    .custom-alert{
        border: 1px solid #acacac;
        padding: 10px;
        /*font-size: 8pt;*/
        box-shadow: 0 0 5px rgba(200,200,200,.6);
        width: 90%;
        /*max-width: 400px;*/
        position: relative;
        margin: 10px auto;
        /*animation: shake;*/
        animation-delay: 1s;
        animation-timing-function: linear;
        animation-duration: 500ms;
        animation-name: shake;

    }
    .custom-alert p{
        font-size: 9pt;
    }
    .custom-alert.custom-alert-danger{
        border-left: 4px solid #690000;
    }

    .custom-alert.custom-alert-success{
        border-left: 4px solid #05695a;
    }

    .custom-alert.custom-alert-warning{
        border-left: 4px solid #ae9f00;
    }

    .custom-alert .close-alert{
        position: absolute;
        right: 20px;
        border: 0;
        font-weight: 800;
        color: #690000;
        cursor: pointer;
    }
    @keyframes shake {
        0%{
            left: 0;
        }
        25%{
            left: 10px;
        }
        50%{
            left: -5px
        }
        75%{

            left: 5px;
        }

    }
    /*END CUSTOM ALERT*/
</style>

<script>
    if (window.jQuery){
        $('.close-alert').click(function(){
            $('.custom-alert').hide(200);
        })
    }
</script>