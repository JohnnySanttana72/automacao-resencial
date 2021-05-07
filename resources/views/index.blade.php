<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Aplicativo Lamp22</title>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{asset('css/all.min.css')}}">
</head>

<body>

    <nav class="navbar navbar-light bg-light navbar-expand-md fixed-top">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="#consulmo" style="font-weight: bold;">Consumo</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" >
                    <i class="fa fa-microchip"></i>
                    Dispositivo
                    <span class="badge badge-pill badge-danger" id="status_dispositivo">Offline</span>
                </a>
            </li>
        </ul>
    </nav>

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-2 pb-2 pt-5">
                <div class="col-md-7 text-center">
                    <h2 style="color: white">Acionamento da Lâmpada</h2>
                    <p style="color: white">Acione remotamente a sua lâmpada com um clique</p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-6"
                    style="align-items: center;display: flex;flex-direction: row;flex-wrap: wrap;justify-content: center;">
                    <div href="" class="cube-switch">
                        <span class="switch">
                            <span class="switch-state off">Off</span>
                            <span class="switch-state on">On</span>
                        </span>
                    </div>
                </div>
                <div class="col-6">
                    <div id="light-bulb" class="off ui-draggable">
                        <div id="light-bulb2" style="opacity: 0; "></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <hr style="background-color:white">

    <section class="ftco-section">
        <div class="container">
            <form id="formHour">
                <div class="row justify-content-center mb-2 pb-2 pt-2" id="div-hour">
                    <div class="col-md-7 text-center">
                        <h2 style="color: white">Agendamento do Horário</h2>
                        <p style="color: white">Agende o horário para acender a lâmpada</p>
                    </div>
                </div>
                <!-- <div class="row justify-content-center">
                    <div class="text-center">
                        <p style="color: white">Dias úteis</p>
                    </div>
                </div> -->
                <!-- <div class="row justify-content-center">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" id="segunda" name="day"
                            onclick="checkedBox(this.id)" value="seg" checked>
                        <label for="segunda">Segunda</label>
                    </div>

                    &nbsp;
                    &nbsp;
                    &nbsp;
                    <div class="form-check">
                        <input class="form-check-input" type="radio" id="terca" name="day"
                            onclick="checkedBox(this.id)" value="ter">
                        <label for="terca">Terça</label>
                    </div>
                    &nbsp;
                    &nbsp;
                    &nbsp;
                    <div class="form-check">
                        <input class="form-check-input" type="radio" id="quarta" name="day"
                            onclick="checkedBox(this.id)" value="qua">
                        <label for="quarta">Quarta</label>
                    </div>
                    &nbsp;
                    &nbsp;
                    &nbsp;
                    <div class="form-check">
                        <input class="form-check-input" type="radio" id="quinta" name="day"
                            onclick="checkedBox(this.id)" value="qui">
                        <label for="quinta">Quinta</label>
                    </div>
                    &nbsp;
                    &nbsp;
                    &nbsp;
                    <div class="form-check">
                        <input class="form-check-input" type="radio" id="sexta" name="day"
                            onclick="checkedBox(this.id)" value="sex">
                        <label for="sexta">Sexta</label>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="text-center">
                        <p style="color: white">Finais de Semana</p>
                    </div>
                </div>

                <div class="row justify-content-center">

                    <div class="form-check">
                        <input class="form-check-input" type="radio" id="sabado" name="day"
                            onclick="checkedBox2(this.id)" value="sab">
                        <label for="sabado">Sábado</label>
                    </div>
                    &nbsp;
                    &nbsp;
                    &nbsp;
                    <div class="form-check">
                        <input class="form-check-input" type="radio" id="domingo" name="day"
                            onclick="checkedBox2(this.id)" value="dom">
                        <label for="domingo">Domingo</label>
                    </div>

                </div> -->

                <div class="row justify-content-center">
                    <div class="text-center">
                        <p style="color: white">Definir Horário para acionamento</p>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div>
                        <label>
                            Horário:
                            <input type="time" id="houra" name="horns">
                        </label>
                    </div>
                    &nbsp;
                    &nbsp;
                    &nbsp;
                    <div class="form-check" id="message">
                        <input class="form-check-input" type="radio" id="ligado_hour" name="status" value="L">
                        <label for="ligado_hour">Ligar</label>
                    </div>
                    &nbsp;
                    &nbsp;
                    &nbsp;
                    <div class="form-check">
                        <input class="form-check-input" type="radio" id="desligado_hour" name="status" value="D" checked>
                        <label for="desligado_hour">Desligar</label>
                    </div>
                </div>

                &nbsp;
                <div class="row justify-content-center">
                    <button style="padding-right: 16px;padding-left: 16px;" class="send-hour btn btn-primary" disabled> <i class="fa fa-save"></i> Salvar
                    </button>
                </div>
            </form>
        </div>
    </section>

    <hr style="background-color:white">

    <section class="ftco-section">
        <div class="container">
            <form id="formTimer">
                <div class="row justify-content-center mb-2 pb-2 pt-2" id="div-timer">
                    <div class="col-md-7 text-center">
                        <h2 style="color: white">Temporizador</h2>
                        <p style="color: white"></p>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="text-center">
                        <p style="color: white">Ligar/Desligar</p>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" id="ligar" name="status_timer" value="L">
                        <label for="ligar">Ligar</label>
                    </div>
                    &nbsp;
                    &nbsp;
                    &nbsp;
                    <div class="form-check">
                        <input class="form-check-input" type="radio" id="desligar" name="status_timer" value="D" checked>
                        <label for="desligar">Desligar</label>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="text-center">
                        <p style="color: white">Definir tempo para acionamento</p>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div>
                        <label>
                            Temporizador:
                            <input type="time" id="timer" name="timer" step="1">
                        </label>
                    </div>
                    &nbsp;
                    &nbsp;
                    &nbsp;
                    <div>
                        <input style="width: 82px;" type="text" id="timer_count" disabled="true">
                    </div>
                </div>
                &nbsp;
                <div class="row justify-content-center">
                    <div>
                        <button class="stop-timer btn btn-danger " style="padding-right: 16px;padding-left: 16px;" disabled><i class="fa fa-stop"></i> Parar
                    </button>
                    </div>
                    &nbsp;
                    &nbsp;
                    &nbsp;
                    <div>
                        <button class="send-timer btn btn-primary " style="padding-right: 16px;padding-left: 16px;" disabled>
                            <i class="fa fa-clock"></i> Iniciar
                    </button>
                    </div>
                    
                </div>
            </form>
        </div>
    </section>

    <hr style="background-color:white">

    <section class="ftco-section" id="consulmo">
        <div class="container">
            <form>
                <div class="row justify-content-center mb-2 pb-2 pt-2">
                    <div class="col-md-7 text-center">
                        <h2 style="color: white">Histórico de Consumo</h2>
                        <p style="color: white"></p>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="card">
                        <div class="card-body">
                            <ul class="nav nav-tabs pb-4" id="myTab" role="tablist" style="background-color: white">

                                @foreach($months as $month)
                                    <li class="nav-item">
                                        <a class="nav-link @if($loop->first) active @endif" id="{{$month->id}}-tab" data-toggle="tab" href="#tab{{$month->id}}"
                                            role="tab" aria-controls="tab{{$month->id}}" aria-selected="true">{{$month->nome}}</a>
                                    </li>
                                @endforeach
                                <!-- <li class="nav-item">
                                    <a class="nav-link" id="fevereiro-tab" data-toggle="tab" href="#fevereiro"
                                        role="tab" aria-controls="fevereiro" aria-selected="false">Fevereiro</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="marco-tab" data-toggle="tab" href="#marco" role="tab"
                                        aria-controls="marco" aria-selected="false">Março</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" id="abril-tab" data-toggle="tab" href="#abril" role="tab"
                                        aria-controls="abril" aria-selected="false">Abril</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" id="maio-tab" data-toggle="tab" href="#maio" role="tab"
                                        aria-controls="maio" aria-selected="true">Maio</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#junho" role="tab"
                                        aria-controls="junho" aria-selected="false">Junho</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#julho" role="tab"
                                        aria-controls="julho" aria-selected="false">Julho</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#agosto" role="tab"
                                        aria-controls="agosto" aria-selected="false">Agosto</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" id="setembro-tab" data-toggle="tab" href="#setembro" role="tab"
                                        aria-controls="setembro" aria-selected="true">Setembro</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="outubro-tab" data-toggle="tab" href="#outubro" role="tab"
                                        aria-controls="outubro" aria-selected="false">Outubro</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="novembro-tab" data-toggle="tab" href="#novembro" role="tab"
                                        aria-controls="novembro" aria-selected="false">Novembro</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" id="dezembro-tab" data-toggle="tab" href="#dezembro" role="tab"
                                        aria-controls="dezembro" aria-selected="false">Dezembro</a>
                                </li> -->
                            </ul>

                            <div class="tab-content" id="myTabContent" style="background-color: white">
                                @foreach($months as $month)
                                    <div class="tab-pane fade @if($loop->first) show active @endif" id="tab{{$month->id}}" role="tabpanel"
                                        aria-labelledby="{{$month->id}}-tab">
                                        <table class="table table-bordered">
                                            <tr>
                                                <th width="50%">Consumo em Wh</th>
                                                <th width="50%">Valor em R$</th>
                                            </tr>

                                            @if($month->consumption)
                                                <td id="consumo">{{number_format($month->consumption->consumo, 2)}}</td>
                                                <td id="valor">{{number_format($month->consumption->valor, 2)}}</td>
                                            @else
                                                <td id="consumo">0.00</td>
                                                <td id="valor">0.00</td>
                                            @endif
                                        </table>
                                    </div>
                                @endforeach

                                <!-- <div class="tab-pane fade" id="fevereiro" role="tabpanel"
                                    aria-labelledby="fevereiro-tab">
                                    <table class="table table-bordered">
                                        <tr>
                                            <th width="50%">Consumo em Wh</th>
                                            <th width="50%">Valor em R$</th>
                                        </tr>

                                        <td>1.220</td>
                                        <td>R$ 5000.00</td>
                                    </table>
                                </div>

                                <div class="tab-pane fade" id="marco" role="tabpanel" aria-labelledby="marco-tab">
                                    <table class="table table-bordered">
                                        <tr>
                                            <th width="50%">Consumo em Wh</th>
                                            <th width="50%">Valor em R$</th>
                                        </tr>

                                        <td>1.220</td>
                                        <td>R$ 5000.00</td>
                                    </table>
                                </div>

                                <div class="tab-pane fade" id="abril" role="tabpanel" aria-labelledby="abril-tab">
                                    <table class="table table-bordered">
                                        <tr>
                                            <th width="50%">Consumo em Wh</th>
                                            <th width="50%">Valor em R$</th>
                                        </tr>

                                        <td>1.220</td>
                                        <td>R$ 5000.00</td>
                                    </table>
                                </div>

                                <div class="tab-pane fade" id="maio" role="tabpanel" aria-labelledby="maio-tab">
                                    <table class="table table-bordered">
                                        <tr>
                                            <th width="50%">Consumo em Wh</th>
                                            <th width="50%">Valor em R$</th>
                                        </tr>

                                        <td>1.220</td>
                                        <td>R$ 5000.00</td>
                                    </table>
                                </div>

                                <div class="tab-pane fade" id="junho" role="tabpanel" aria-labelledby="junho-tab">
                                    <table class="table table-bordered">
                                        <tr>
                                            <th width="50%">Consumo em Wh</th>
                                            <th width="50%">Valor em R$</th>
                                        </tr>

                                        <td>1.220</td>
                                        <td>R$ 5000.00</td>
                                    </table>
                                </div>

                                <div class="tab-pane fade" id="julho" role="tabpanel" aria-labelledby="julho-tab">
                                    <table class="table table-bordered">
                                        <tr>
                                            <th width="50%">Consumo em Wh</th>
                                            <th width="50%">Valor em R$</th>
                                        </tr>

                                        <td>1.220</td>
                                        <td>R$ 5000.00</td>
                                    </table>
                                </div>

                                <div class="tab-pane fade" id="agosto" role="tabpanel" aria-labelledby="agosto-tab">
                                    <table class="table table-bordered">
                                        <tr>
                                            <th width="50%">Consumo em Wh</th>
                                            <th width="50%">Valor em R$</th>
                                        </tr>

                                        <td>1.220</td>
                                        <td>R$ 5000.00</td>
                                    </table>
                                </div>

                                <div class="tab-pane fade" id="setembro" role="tabpanel" aria-labelledby="setembro-tab">
                                    <table class="table table-bordered">
                                        <tr>
                                            <th width="50%">Consumo em Wh</th>
                                            <th width="50%">Valor em R$</th>
                                        </tr>

                                        <td>1.220</td>
                                        <td>R$ 5000.00</td>
                                    </table>
                                </div>

                                <div class="tab-pane fade" id="outubro" role="tabpanel" aria-labelledby="outubro-tab">
                                    <table class="table table-bordered">
                                        <tr>
                                            <th width="50%">Consumo em Wh</th>
                                            <th width="50%">Valor em R$</th>
                                        </tr>

                                        <td>1.220</td>
                                        <td>R$ 5000.00</td>
                                    </table>
                                </div>

                                <div class="tab-pane fade" id="novembro" role="tabpanel" aria-labelledby="novembro-tab">
                                    <table class="table table-bordered">
                                        <tr>
                                            <th width="50%">Consumo em Wh</th>
                                            <th width="50%">Valor em R$</th>
                                        </tr>

                                        <td>1.220</td>
                                        <td>R$ 5000.00</td>
                                    </table>
                                </div>

                                <div class="tab-pane fade" id="dezembro" role="tabpanel" aria-labelledby="dezembro-tab">
                                    <table class="table table-bordered">
                                        <tr>
                                            <th width="50%">Consumo em Wh</th>
                                            <th width="50%">Valor em R$</th>
                                        </tr>

                                        <td>1.220</td>
                                        <td>R$ 5000.00</td>
                                    </table>
                                </div> -->

                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>

</body>

<style>
    body {
        background: rgb(70, 72, 75);
    }

    h4 {
        color: #f8f9fa;
    }

    /* SWITCH */
    .cube-switch {
        border-radius: 10px;
        border: 1px solid rgba(0, 0, 0, 0.4);
        box-shadow: 0 0 8px rgba(0, 0, 0, 0.6), inset 0 100px 50px rgba(255, 255, 255, 0.1);
        /* Prevents clics on the back */
        cursor: default;
        display: block;
        height: 100px;
        position: relative;
        margin: 5% 0px 0px 10%;
        overflow: hidden;
        /* Prevents clics on the back */
        pointer-events: none;
        width: 100px;
        white-space: nowrap;
        background: #333;
    }

    /* The switch */
    .cube-switch .switch {
        border: 1px solid rgba(0, 0, 0, 0.6);
        border-radius: 0.7em;
        box-shadow:
            inset 0 1px 0 rgba(255, 255, 255, 0.3),
            inset 0 -7px 0 rgba(0, 0, 0, 0.2),
            inset 0 50px 10px rgba(0, 0, 0, 0.2),
            0 1px 0 rgba(255, 255, 255, 0.2);
        display: block;
        width: 60px;
        height: 60px;
        margin-left: -30px;
        margin-top: -30px;
        position: absolute;
        top: 50%;
        left: 50%;
        width: 60px;

        background: #666;
        transition: all 0.2s ease-out;

        /* Allows click */
        cursor: pointer;
        pointer-events: auto;
    }

    /* SWITCH Active State */
    .cube-switch.active {
        /*background:#222;
    box-shadow:
    0 0 5px rgba(0,0,0,0.5),
    inset 0 50px 50px rgba(55,55,55,0.1);*/
    }

    .cube-switch.active .switch {
        background: #333;
        box-shadow:
            inset 0 6px 0 rgba(255, 255, 255, 0.1),
            inset 0 7px 0 rgba(0, 0, 0, 0.2),
            inset 0 -50px 10px rgba(0, 0, 0, 0.1),
            0 1px 0 rgba(205, 205, 205, 0.1);
    }

    .cube-switch.active:after,
    .cube-switch.active:before {
        background: #333;
        box-shadow:
            0 1px 0 rgba(255, 255, 255, 0.1),
            inset 1px 2px 1px rgba(0, 0, 0, 0.5),
            inset 3px 6px 2px rgba(200, 200, 200, 0.1),
            inset -1px -2px 1px rgba(0, 0, 0, 0.3);
    }

    .cube-switch.active .switch:after,
    .cube-switch.active .switch:before {
        background: #222;
        border: none;
        margin-top: 0;
        height: 1px;
    }

    .cube-switch .switch-state {
        display: block;
        position: absolute;
        left: 40%;
        color: #FFF;

        font-size: .5em;
        text-align: center;
    }

    /* SWITCH On State */
    .cube-switch .switch-state.on {
        bottom: 15%;
    }

    /* SWITCH Off State */
    .cube-switch .switch-state.off {
        top: 15%;
    }

    #light-bulb2 {
        width: 150px;
        height: 150px;
        background: url(https://lh4.googleusercontent.com/-katLGTSCm2Q/UJC0_N7XCrI/AAAAAAAABq0/6GxNfNW-Ra4/s300/lightbulb.png) no-repeat 0 0;
    }

    #light-bulb {
        position: absolute;
        width: 150px;
        height: 150px;
        top: 5%;
        left: 40%;
        background: url(https://lh4.googleusercontent.com/-katLGTSCm2Q/UJC0_N7XCrI/AAAAAAAABq0/6GxNfNW-Ra4/s300/lightbulb.png) no-repeat -150px 0;
        cursor: move;
        z-index: 800;
    }

    div label {
        color: white;
        font-weight: bold;
    }

    .ftco-section {
        position: relative;
        width: 100%;
        display: block;
    }

    .ftco-section {
        padding: 3em 0;
        position: relative;
    }

    .container {
        width: 100%;
        padding-right: 15px;
        padding-left: 15px;
        margin-right: auto;
        margin-left: auto;
    }
</style>

<script type="text/javascript">
    const triggerTabList = [...document.querySelectorAll('#myTab a')];
    triggerTabList.forEach((triggerEl) => {
        const tabTrigger = new bootstrap.Tab(triggerEl)

        triggerEl.addEventListener('click', (e) => {
            // $('#card-title').text(triggerEl.text);
            e.preventDefault()
            tabTrigger.show()
        })
    })
</script>

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
<script>
    var tempo;
    var time_out;
    var time_subscribe;
    $("#timer_count").val("00:00:00");

    document.getElementById("timer").value = '00:00:00'


    $('.cube-switch .switch').click(function () {
        if ($('.cube-switch').hasClass('active')) {
            $('.cube-switch').removeClass('active');
            $('#light-bulb2').css({ 'opacity': '0' });
            console.log('off')
            clearTimeout(time_subscribe)
            publish('acionamento', 'D')
        } else {
            $('.cube-switch').addClass('active');
            $('#light-bulb2').css({ 'opacity': '1' });
            console.log('on')
            clearTimeout(time_subscribe)
            publish('acionamento', 'L')
        }
    });

    $('.send-hour').click(function (event) {
        event.preventDefault()

        console.log($("#formHour").serializeArray())
        publish('hora_agendada', $("#formHour").serializeArray())
    })


    $('.send-timer').click(function (event) {
        event.preventDefault();
        tempo = $('#timer').val();

        aux = tempo.split(":");

        var hora;
        var minuto;
        var segundo;

        if(aux.length == 2) {
            hora = parseInt(aux[0])
            minuto = parseInt(aux[1])
            segundo = 0

        } else if(aux.length == 3) {
            hora = parseInt(aux[0])
            minuto = parseInt(aux[1])
            segundo = parseInt(aux[2])
        }

        
        tempo = (hora * 3600) + (minuto * 60) + segundo

        if(tempo != 0) {
            console.log(tempo)

            if (isNaN(tempo)) {
                $("#div-timer").after(
                    '<div class="row text-center">' +
                    '<div class="alert alert-danger alert-block col" style="padding: .1rem ' +
                    '0.2rem;color: #975057;background-color: #f8d7da;border-color: #f5c6cb;">' +
                    '<button type="button" class="close" data-dismiss="alert">' +
                    '<span aria-hidden="true">×</span></button><strong><i class="fa fa-times-circle"></i> Erro. É necessário preencher ' +
                    'o campo do temporizador!</strong></div></div>'
                )
            } else {
                $("#timer_count").prop("disabled", false);
                $(".send-timer").prop("disabled", true);
                $(".stop-timer").prop("disabled", false);

                countdown();
            }
        }
    })

    $('.stop-timer').click(function (event) {
        $(".stop-timer").prop("disabled", true);
        $(".send-timer").prop("disabled", false);
        $("#timer_count").val('00:00:00');
        clearTimeout(time_out)
    })

    function countdown() {
        // Se o tempo não for zerado
        if ((tempo - 1) >= -1) {

            var hours = Math.floor(tempo/3600);
            var min = Math.floor(Math.floor((tempo) - (hours*3600))/60);
            var seg = tempo % 60;

            // Pega a parte inteira dos minutos
            //var min = parseInt(tempo / 60);
            // Calcula os segundos restantes
            //var seg = tempo % 60;

            // Formata o número menor que dez, ex: 08, 07, ...
            // if (min < 10) {
            //     min = "0" + min;
            //     min = min.substr(0, 2);
            // }
            // if (seg <= 9) {
            //     seg = "0" + seg;
            // }
            function pad(n) {
                return (n < 10 ? "0" + n : n);
            }

            // Cria a variável para formatar no estilo hora/cronômetro
            horaImprimivel = pad(hours) + ':' + pad(min) + ':' + pad(seg);
            //JQuery pra setar o valor
            $("#timer_count").val(horaImprimivel);

            // Define que a função será executada novamente em 1000ms = 1 segundo
            time_out = setTimeout('countdown()', 1000);

            if (tempo == 0) {
                $("#timer_count").prop("disabled", true);
                $(".send-timer").prop("disabled", false);
                $(".stop-timer").prop("disabled", true);
                publish('temporizador', $("input[name='status_timer']:checked").val())
            }

            // diminui o tempo
            tempo--;

            // Quando o contador chegar a zero faz esta ação
        }
        else {
            $('#myAlert').show().fadeOut(5000);
        }
    }


    function publish(type, dado) {

        let _token = $('meta[name="csrf-token"]').attr('content');


        $.ajax({
            url: '/publishMqtt',
            type: "POST",
            data: {
                type: type,
                dado: dado,
                _token: _token
            },
            dataType: 'JSON',
            success: function (res) {
                if (res.error == "invalid-fields") {
                    $("#div-hour").after(
                        '<div class="row text-center">' +
                        '<div class="alert alert-danger alert-block col" style="padding: .1rem ' +
                        '0.2rem;color: #975057;background-color: #f8d7da;border-color: #f5c6cb;">' +
                        '<button type="button" class="close" data-dismiss="alert">' +
                        '<span aria-hidden="true">×</span></button><strong><i class="fa fa-times-circle"></i> Erro. É necessário preencher ' +
                        'o campo de horário!</strong></div></div>'
                    )
                }
                console.log("Tempo de execução: "+res.tempo_de_execucao_ms);
                var obj = JSON.parse(res.resultado.message);
                
                if(obj.state.reported.tempo_consumo) {
                    var tempo_consumo = obj.state.reported.tempo_consumo;
                    console.log(tempo_consumo);
                    calConsumo(tempo_consumo);
                }
                
                subscribe("$aws/things/NodeMCU/shadow/update");
            },
            statusCode: {
                500: function () {
                    console.log('Dispositivo não está disponível');
                    $('#status_dispositivo').attr('class', 'badge badge-pill badge-danger');
                    $('#status_dispositivo').text('Offline');
                    
                    if ($('.cube-switch').hasClass('active')) {
                        $('.cube-switch').removeClass('active');
                        $('#light-bulb2').css({ 'opacity': '0' });
                    }
                    
                    republishShadow(type, dado)
                    subscribe("$aws/things/NodeMCU/shadow/update");
                }
            }
        });
    }

    function republishShadow(type, dado) {
        let _token = $('meta[name="csrf-token"]').attr('content');

        $.ajax({
            url: '/republishMqtt',
            type: "POST",
            data: {
                type: type,
                dado: dado,
                _token: _token
            },
            dataType: 'JSON',
            success: function (res) {
                console.log(res);
            },
        });
    }

    function calConsumo(tempo_consumo) {
        let _token = $('meta[name="csrf-token"]').attr('content');

        $.ajax({
            url: '/calConsumo',
            type: "POST",
            async: true,
            data: {
                tempo_consumo: tempo_consumo,
                _token: _token
            },
            dataType: 'JSON',
            success: function (res) {
                console.log(res, res.mes, res.consumo_dados['consumo'], res.consumo_dados['valor']);
                // console.log(res);
                $('#tab'+res.mes+' table #consumo').text(res.consumo_dados['consumo'].toFixed(2))
                $('#tab'+res.mes+' table #valor').text(res.consumo_dados['valor'].toFixed(2))
            },
            error:function (jqXHR, status, error) {
                 console.log(error);
            },


        })
        // .done(function( res ) {
        //     console.log(res, res.mes, res.consumo_dados['consumo'], res.consumo_dados['valor']);
        //      $('#tab'+res.mes+' table #consumo').text(res.consumo_dados['consumo'].toFixed(2))
        //     $('#tab'+res.mes+' table #valor').text(res.consumo_dados['valor'].toFixed(2))
        // });
    }

    $(document).ready(function () {
        $('.cube-switch .switch').css('pointer-events', 'none');
        $('.cube-switch').css('background', '#7c7c7d');
        $('.cube-switch .switch').css('background', '#7c7c7d');
        subscribe("$aws/things/NodeMCU/shadow/update");
    });

    function subscribe(topic) {
        let _token   = $('meta[name="csrf-token"]').attr('content');
  
        $.ajax({
            url: '/subscribeMqtt',
            type:"POST",
            data:{
                topic:topic,
                _token: _token
            },
            dataType: 'JSON',
            cache: false,
            success: function (res) {
                console.log(res.resultado);

                var obj2 = JSON.parse(res.resultado.message);

                if (obj2.state.reported.status_LED == 'LIGADO' && !$('.cube-switch').hasClass('active')) {
                    $('.cube-switch').addClass('active');
                    $('#light-bulb2').css({ 'opacity': '1' });
                } else if (obj2.state.reported.status_LED == 'DESLIGADO') {
                    $('.cube-switch').removeClass('active');
                    $('#light-bulb2').css({ 'opacity': '0' });
                }

                if(obj2.state.reported.tempo_consumo) {
                    console.log("Tempo de execução: "+res.tempo_de_execucao_ms);
                    var tempo_consumo = obj2.state.reported.tempo_consumo;
                    console.log(tempo_consumo);
                    calConsumo(tempo_consumo);
                }


                $('#status_dispositivo').attr('class', 'badge badge-pill badge-success');
                $('#status_dispositivo').text('Online');

                $(".send-hour").prop("disabled", false);

                $(".send-timer").prop("disabled", false);

                $('.cube-switch .switch').css('pointer-events', 'auto');
                $('.cube-switch').css('background', '#666');
                $('.cube-switch .switch').css('background', '#333');

                time_subscribe = setTimeout(function () {
                    subscribe(topic)
                }, 7000);
            },
            statusCode: {
                500: function () {
                    console.log('reconnect');
                    $('#status_dispositivo').attr('class', 'badge badge-pill badge-danger');
                    $('#status_dispositivo').text('Offline');

                    $(".send-hour").prop("disabled", true);

                    $(".send-timer").prop("disabled", true);

                    $('.cube-switch .switch').css('pointer-events', 'none');
                    $('.cube-switch').css('background', '#7c7c7d');
                    $('.cube-switch .switch').css('background', '#7c7c7d');

                    if ($('.cube-switch').hasClass('active')) {
                        $('.cube-switch').removeClass('active');
                        $('#light-bulb2').css({ 'opacity': '0' });
                    }

                    subscribe(topic)
                }
            },
        });
    }
</script>

</html>