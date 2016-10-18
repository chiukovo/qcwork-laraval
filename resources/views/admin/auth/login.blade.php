<!DOCTYPE html>
<html>
    <head>
        <title>Qcwork Admin</title>
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/animate.css')}}">
        <link rel="stylesheet" href="{{asset('css/auth/login.css')}}">
        <style>
            [v-cloak] { display: none }
        </style>
    </head>
    <body>
    <div class="container">
        <div id="loginbox" class="mainbox col-md-6 col-md-offset-3 col-sm-offset-3">
            <div class="row">
                <div class="iconmelon"></div>
            </div>
            <div class="svg-title">
                <div class="textsvg-container">
                  <div class="svg-container reveal-down">
                    <svg class="svg-title" class="on">
                       <defs>
                        <pattern id="gradient" patternUnits="userSpaceOnUse" width="900" height="1800">
                            <image id="intro-text-svg" xlink:href="http://x.lamoulade.io/clouboutin/topbox/42-new-nudes/images/gradient-2.png" width="900" height="1800" rotation="0.01"/>
                            <animate
                            id="gradientxup"
                            xlink:href="#intro-text-svg"
                            attributeType="XML"
                            attributeName="x"
                            begin="0s"
                            dur="5s"
                            from="-130"
                            to="0"
                            repeatCount="indefinite"
                            additive="sum"
                            />
                            <animate
                            id="gradientyup"
                            xlink:href="#intro-text-svg"
                            attributeType="XML"
                            attributeName="y"
                            begin="0s"
                            dur="5s"
                            from="-1630"
                            to="0"
                            repeatCount="indefinite"
                            additive="sum"
                            />
                        </pattern>
                       </defs>
                       <text y="50px">
                         <tspan x="280px" text-anchor="middle" fill="#000">CASINO API LOGIN</tspan>
                      </text>
                    </svg>
                  </div>
                </div>
            </div>
            <div class="panel panel-default" >
                <div class="panel-body">
                    <div id="form">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input id="user" type="text" class="form-control" name="account" value="" placeholder="account" v-model="userInput.account">
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                            <input id="password" type="password" class="form-control" name="password" placeholder="password" v-model="userInput.password">
                        </div>
                        <span id="errorMsg" class="red" v-cloak>@{{errorMsg}}</span>
                        <div class="form-group">
                            <!-- Button -->
                            <div class="col-sm-12 controls">
                                <button type="button" class="btn btn-primary pull-right" @click="goLogin" :disabled="cantClick"><i class="glyphicon glyphicon-log-in"></i> Log in</button>
                            </div>
                            <input type="hidden" id="token" value="{{ csrf_token() }}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="particles"></div>
    </body>
    <script src="{{asset('assets/js/jquery-3.0.0.min.js')}}"></script>
    <script src="{{asset('assets/js/vue.js')}}"></script>
    <script src="{{asset('assets/js/login.js')}}"></script>
</html>