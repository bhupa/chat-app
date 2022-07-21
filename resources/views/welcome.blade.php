<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Chat App</title>

    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Lobster|Noto+Serif+KR|Lobster|Righteous|Play|Charmonman:700|Mukta|Ranga|K2D" rel="stylesheet">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <!-- Styles -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">

    <style media="screen,projection">
        nav ul a,
        nav .brand-logo {
            color: #444
        }

        p {
            line-height: 2rem
        }

        .button-collapse {
            color: #26a69a
        }

        .parallax-container {
            min-height: 500px;
            line-height: 0;
            height: auto;
            color: rgba(255, 255, 255, .9);
            display: flex;
            align-items: center
        }

        .parallax-container .section {
            width: 100%
        }
        .visuallyhidden {
    border: 0;
    clip: rect(0 0 0 0);
    height: 1px;
    margin: -1px;
    overflow: hidden;
    padding: 0;
    position: absolute;
    width: 1px;
}
.agent-chat-section .message-box .image-name{
   white-space: nowrap; 
  width: 50px; 
  overflow: hidden;
  text-overflow: ellipsis; 

}

        @media only screen and (max-width:992px) {
            .parallax-container .section {
                position: absolute;
                top: 40%
            }

            #index-banner .section {
                top: 10%
            }
        }

        @media only screen and (max-width:600px) {
            #index-banner .section {
                top: 0
            }
        }

        .icon-block {
            padding: 0 15px
        }

        .icon-block .material-icons {
            font-size: inherit
        }

        footer.page-footer {
            margin: 0
        }

    </style>
    <link rel="stylesheet" href="https://travelquoter.com/css/A.master-style.css.pagespeed.cf.VrYmqlwOSQ.css">
    <link href="https://travelquoter.com/css/A.style.css,qv=1.0.pagespeed.cf.btc1OPAFmT.css" type="text/css" rel="stylesheet" media="screen,projection" />
    <link href="https://travelquoter.com/css/A.home.css+utils.css+chat.css,Mcc.QNEYQamol_.css.pagespeed.cf.F72_dPszrc.css" rel="stylesheet" type="text/css" />

    <style>
        @import url(https://fonts.googleapis.com/css?family=Amaranth:400,700&display=swap);
        @import url(https://fonts.googleapis.com/css?family=Fjalla+One&display=swap);
        @import url(https://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700&display=swap);

        .footer a {
            color: inherit
        }

        .footer {
            background-image: linear-gradient(to bottom, #115489, #1e3b65);
            color: #fff;
            padding: 20px 0 5px 0
        }

        .footer .footer-menu {
            text-align: center;
            font-family: 'Amaranth';
            margin: 10px 0
        }

        .footer .footer-menu h6 {
            font-size: 20px;
            font-weight: 900;
            margin: 5px 0;
            text-transform: uppercase
        }

        .footer .footer-menu ul li {
            font-size: 18px;
            font-weight: 400;
            cursor: pointer
        }

        .footer .social-icons {
            text-align: center;
            margin: 25px 0 0 0
        }

        .footer .social-icons ul li {
            display: inline-block;
            margin: 0 5px;
            border-radius: 50%;
            height: 30px;
            text-align: center;
            text-transform: uppercase;
            animation-duration: 1s;
            animation-fill-mode: both;
            animation-timing-function: ease-in-out;
            animation-iteration-count: infinite;
            box-shadow: 0 0 6px 2px rgba(0, 0, 0, .4);
            transition: .7s;
            cursor: pointer
        }

        .footer .social-icons ul li:hover {
            cursor: pointer;
            animation-name: bounce;
            -moz-animation-name: bounce;
            box-shadow: none
        }

        .footer .social-icons ul li img {
            height: 30px;
            width: 30px;
            border-radius: 50%
        }

        .footer .footer-bottom {
            border-top: 2px solid #e7e7e7;
            padding: 10px 0 0 0;
            font-family: 'Amaranth'
        }

        .footer .footer-bottom .copyright {
            display: block;
            margin: 0 0 0 0;
            text-align: center
        }

        .footer .footer-bottom .agency-link {
            color: #3c91b9
        }

        @keyframes bounce {

            0%,
            100%,
            20%,
            50%,
            80% {
                -webkit-transform: translateY(0);
                -ms-transform: translateY(0);
                transform: translateY(0)
            }

            40% {
                -webkit-transform: translateY(-10px);
                -ms-transform: translateY(-10px);
                transform: translateY(-10px)
            }

            60% {
                -webkit-transform: translateY(-5px);
                -ms-transform: translateY(-5px);
                transform: translateY(-5px)
            }

        }

        .rating li {
            display: inline-block;
            margin: 0 2px 0 0;
        }

        .rating li i {

            color: #f8bd45;
        }

    </style>
    <link href="https://rawgit.com/mervick/emojionearea/master/dist/emojionearea.css" rel="stylesheet">
    <style>
        .emojionearea.emojionearea-inline {
            width: 234px;
            display: inline-block
        }

    </style>
    <!-- DateTime Picker CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
    <![endif]-->
    <!--[if lte IE 11]>
    <link rel="stylesheet" href="https://travelquoter.com/css/compat/ie.css">
    <![endif]-->
    <link rel="stylesheet" href="https://travelquoter.com/css/agent_user_chat.css">

</head>
<body class="antialiased">
    <div class="container-fluid">
        <div class="row">
            <div class="col s12">
                <div class="agent-user-chat-container">
                    <div class="row flex">
                        <div class="col s12 m3 no-padding-col">
                            <div class="agent-list">
                                <div class="header">
                                    <h6>Quote Recieved From</h6>
                                </div>
                                <div class="search-agent"><input type="text" name="" id="" placeholder="Send Quote To Other Agent" class="browser-default"> <button><i class="fa fa-plus"></i></button></div>
                                <div class="agent-card">
                                    <div class="agent-info"><img src="https://travelquoter.com/assets/img/agents/17.png" alt="Agent Name"> <span class="title">Macedon Travel</span> <span class="message">Hi This is your quote.</span></div> <span class="pricing"><i class="fa fa-tags"></i>Aud 1420</span>
                                </div>
                                <div class="agent-card">
                                    <div class="agent-info"><img src="https://travelquoter.com/assets/img/agents/20.png" alt="Agent Name"> <span class="title">Ozii Travel Plan</span> <span class="message">This is a great quote.</span></div> <span class="pricing"><i class="fa fa-tags"></i>Aud 1780</span>
                                </div>
                                <div class="agent-card active">
                                    <div class="agent-info"><img src="https://travelquoter.com/assets/img/agents/25.png" alt="Agent Name"> <span class="title">Beyond Vacations</span> <span class="message">Great</span></div> <span class="pricing"><i class="fa fa-tags"></i>Aud 150</span>
                                </div>
                                <div class="agent-card">
                                    <div class="agent-info"><img src="https://travelquoter.com/assets/img/agents/24.png" alt="Agent Name"> <span class="title">France Tourism</span> <span class="message">Hi How can we help you with your tr</span></div> <span class="pricing"><i class="fa fa-tags"></i>Aud 1500</span>
                                </div> <br>
                                <div class="other-agents">
                                    <div class="header">
                                        <h6>Awaiting Quote</h6>
                                    </div>
                                    <div class="agent-card">
                                        <div class="agent-info"><img src="https://travelquoter.com/assets/img/agents/25.png" alt="Agent Name"> <span class="title">Asia Travels</span>
                                            <ul class="quote-status">
                                                <li>• Seen</li>
                                                <li>• Delivered</li>
                                            </ul>
                                        </div> <span class="timer"><i class="fa fa-clock"></i>19:10:03</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col s12 m6 no-padding-col">
                            <div class="agent-quote-details">
                                <div class="header">
                                    <div class="quote-time-left"><label>Agent Should Reply In</label> <span>15 Hrs. 14 Mins.</span></div>
                                    <div class="active-agent"><img src="https://travelquoter.com/assets/img/agents/25.png" alt="Agent Name">
                                        <h6>Beyond Vacations</h6>
                                    </div> <button data-position="top" data-delay="50" data-tooltip="View Agent Profile" class="agent-profile tooltipped" data-tooltip-id="5c248f3c-e386-8421-008b-b9f5857617b3"><i class="fa fa-user"></i></button>
                                </div>
                                <div class="contents">
                                    <div class="row">
                                        <div class="col s12 m6">
                                            <h5>Travel Quote Details</h5>
                                        </div>
                                        <div class="col s12 m6">
                                            <div class="add-options-container"><a data-beloworigin="true" href="#" data-activates="dropdown1" class="dropdown-button"><button class="add-travel-options tq-button-1"><i class="fa fa-plus"></i>&nbsp; Add Options</button></a>
                                                <ul id="dropdown1" class="tq-dropdown dropdown-theme-1 add-options-dropdown"><a href="#">
                                                        <li><i class="tq-icon">g</i> <span>Add Flight</span></li>
                                                    </a> <a href="#">
                                                        <li><i class="tq-icon">d</i> <span>Add Accommodation</span></li>
                                                    </a> <a href="#">
                                                        <li><i class="tq-icon">i</i> <span>Add Car Hire</span></li>
                                                    </a> <a href="#">
                                                        <li><i class="tq-icon">e</i> <span>Add Cruise</span></li>
                                                    </a> <a href="#">
                                                        <li><i class="tq-icon">a</i> <span>Add Insurance</span></li>
                                                    </a> <a href="#">
                                                        <li><i class="tq-icon">h</i> <span>Add Visa</span></li>
                                                    </a></ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="quote-table">
                                        <div class="quote-table-head">
                                            <h6 class="title">Flight</h6> <button class="i fa fa-edit"></button>
                                        </div>
                                        <table>
                                            <thead>
                                                <td>FROM</td>
                                                <td>TO</td>
                                                <td>DAYS</td>
                                                <td>DEPARTURE</td>
                                                <td>PASSENGER</td>
                                                <td>CABIN</td>
                                                <td>VISA</td>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Sydney</td>
                                                    <td>Kathmandu</td>
                                                    <td>10 Days</td>
                                                    <td>20 Dec. 2020</td>
                                                    <td>Adult: 1, Child: 0, Infant: 1</td>
                                                    <td>Economy</td>
                                                    <td>No</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="quote-table">
                                        <div class="quote-table-head">
                                            <h6 class="title">Car Hire</h6> <button class="i fa fa-edit"></button>
                                        </div>
                                        <table>
                                            <thead>
                                                <td>PICKUP</td>
                                                <td>DROP OFF</td>
                                                <td>CAR TYPE</td>
                                                <td>PICKUP DATE</td>
                                                <td>DROPOFF DATE</td>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Sydney</td>
                                                    <td>Kathmandu</td>
                                                    <td>Sedan</td>
                                                    <td>20 Dec. 2020</td>
                                                    <td>22 Dec. 2020</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="quote-actions right-align"><button class="tq-button-1">Resend Quote to Agent Name</button> &nbsp;
                                        <button class="tq-button-1">Resend Quote to All Agents</button></div>
                                </div>
                            </div>
                        </div>
                        <div class="col s12 m3 no-padding-col">
                            <div class="agent-chat-section">
                                <div class="agent-intro">
                                    <div class="agent-intro-left"><img src="https://travelquoter.com/assets/img/agents/25.png" alt="Agent Name">
                                        <div class="agent-name">
                                            <h6>Bashistha Digital</h6>
                                            <ul class="rating">
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="far fa-star"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="agent-intro-right">
                                        <div class="quoted-price"><label>Offered Price</label> <span>AUD 2939</span></div>
                                        <div class="approve-quote"><button data-position="top" data-delay="50" data-tooltip="Approve Quote" class="success-btn tooltipped" data-tooltip-id="88be9d5e-79ec-cdc3-9ed8-fa6ebde71e0f"><i class="fa fa-check"></i></button> <button data-position="top" data-delay="50" data-tooltip="Decline Quote" class="decline-btn tooltipped" data-tooltip-id="e54f00ef-bcea-e318-b4aa-bff4af769081"><i class="fa fa-times"></i></button></div>
                                    </div>
                                </div>
                                <div class="chat-bottom">

                                    
                                    {{-- <div class="messages received"><img src="https://travelquoter.com/assets/img/agents/25.png" alt="Agent Name"> <span>Hi there.</span></div>
                                    <div class="messages sent"><span>Hi, Can you send me the quote for the details as provided. I'm looking for something cheap and enjoyable for my vacation to Nepal.</span> <img src="https://travelquoter.com/assets/img/agents/25.png" alt="Agent Name"></div>
                                    <div class="messages received"><img src="https://travelquoter.com/assets/img/agents/25.png" alt="Agent Name"> <span>Here You Go</span></div>
                                    <div class="messages received"><img src="https://travelquoter.com/assets/img/agents/25.png" alt="Agent Name">
                                        <div class="quote">
                                            <p>Beyond Travel Send a Quote</p> <button>Open Quote</button>
                                        </div>
                                    </div>
                                    <div class="messages sent"><span>Thanks, I'll have a look.</span> <img src="https://travelquoter.com/assets/img/agents/25.png" alt="Agent Name"></div>
                                    <div class="messages received"><img src="https://travelquoter.com/assets/img/agents/25.png" alt="Agent Name"> <span>Great.</span></div>
                                --}}
                                </div>
                                <div class="message-box">
                                    <form method="POST" enctype="multipart/form-data" id="laravel-ajax-file-upload" action="javascript:void(0)">
                                        {{-- <input type="file" id="text-message-1" name="file" id="message" placeholder="Type Your Message Here" class="browser-default user-success"> --}}
                                         <span class="image-name"></span>
                                        <input type="text" id="text-message" name="message" id="message" placeholder="Type Your Message Here" class="browser-default user-success">
                                       <button type="submit"><i class="fa fa-paper-plane"></i></button>&nbsp;&nbsp;
                                         <input type="file" name="file" id="file-input" class="visuallyhidden">
                                           <input type="hidden" name="user_id"  value="{{ request()->get('user_id')}}">
                                            <input type="hidden" name="my_id"  value="{{ request()->get('my_id')}}">
                                        <a href="#" class="file-upload">
                                     
                                        <i class="fa fa-file"></i></a>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!---->
        <!---->
        <!---->
        <!---->
        <!---->
        <!---->
    </div>
</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="{{asset("js/app.js")}}"></script>

<script>
window.onload = function () {
getMessage()
   
}
    var my = {{ request()->get('my_id')}};
    Echo.channel('chat-room').listen('.new-message', function(e) {
        if(e.message.receive_by == my){
       getMessage()
        }
       
    });

    function getMessage(){
         $.ajax({
                        type: 'Get',
                        url: "{{ url('get-messages')}}"+"?user_id={{request()->get('user_id')}}&my_id={{request()->get('my_id')}}",
                        success: (data) => {
                            $('.chat-bottom').html(data.html);
                            scrollToBottomFunc();
                        }
                        , error: function(data) {
                            console.log(data);
                        }
                    });
    }
     $('.file-upload').on('click', function(e) {
        e.preventDefault();
        $('#file-input').trigger('click');
        });

         $('#file-input').change(function(e){
            var fileName = e.target.files[0].name;
            $('.image-name').text(fileName);
            $('.agent-chat-section .message-box').css('height','80px');
        });
    $(document).ready(function() {
       

       $('body').on('click','.file-download',function(e){
         e.stopPropagation();
    var href =$(this).attr('data-id');
    var link = $('<a href="' + href + '" />');
    link.attr('target', '_blank');
    window.open(link.attr('href'));

       })
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': "{{ csrf_token() }}"
            }
        });
        $('#laravel-ajax-file-upload').submit(function(e) {
            e.preventDefault();
            var formData = new FormData(this);
            $.ajax({
                type: 'POST',
                url: "{{ url('chat-message')}}",
                data: formData,
                cache: false,
                contentType: false,
                processData: false,
                success: (data) => {
                    this.reset();
                      $('.image-name').text('');
                    $('.chat-bottom').html(data.html)
                    scrollToBottomFunc()
                }
                , error: function(data) {
                    console.log(data);
                }
            });
        });
    });

    function scrollToBottomFunc() {
        $('.chat-bottom').animate({
            scrollTop: $('.chat-bottom').get(0).scrollHeight
        }, 100);
    }
   

</script>
</html>
