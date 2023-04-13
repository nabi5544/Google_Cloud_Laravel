@extends('admin.include.layout')
@section('content')
<div class="main-content pt-4">
    <div class="breadcrumb">
        <h1 class="mr-2">Call Regardings</h1>
        <ul>
            
           
        </ul> 
    </div>
 
    <div class="card text-left">
        <div class="card-body">
            <h4 class="card-title mb-3"></h4>
           
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item"><a class="nav-link active" id="home-basic-tab" data-toggle="tab" href="#homeBasic" role="tab" aria-controls="homeBasic" aria-selected="true">call status</a></li>
               
                <li class="nav-item"><a class="nav-link" id="contact-basic-tab" data-toggle="tab" href="#contactBasic" role="tab" aria-controls="contactBasic" aria-selected="false">Conversations</a></li>
            </ul>
            <div class="tab-content" id="myTabContent" style="margin-top:2em;">
                <div class="tab-pane fade show active" id="homeBasic" role="tabpanel" aria-labelledby="home-basic-tab">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h6 class="mb-0 text-muted">Attended/Missed calls</h6>
                                <p class="text-22 font-weight-light mb-1">20/80</p>
                                <div id="echart7" style="height: 300px;"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h6 class="mb-1">Top Sources</h6>
                                <p class="text-22 text-success font-weight-light mb-1">New Source . 90 calls</p>
                                <div id="echart1" style="height: 300px;"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-title">status</div>
                                <div id="basicLine-chart"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- ICON BG-->
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="card card-icon-bg card-icon-bg-primary o-hidden mb-4">
                            <div class="card-body text-center"><i class="i-Add-User"></i>
                                <div class="content">
                                    <p class="text-muted mt-2 mb-0">Attended</p>
                                    <p class="text-primary text-24 line-height-1 mb-2">5</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="card card-icon-bg card-icon-bg-primary o-hidden mb-4">
                            <div class="card-body text-center"><i class="i-Add-User"></i>
                                <div class="content">
                                    <p class="text-muted mt-2 mb-0">Missed</p>
                                    <p class="text-primary text-24 line-height-1 mb-2">21</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="card card-icon-bg card-icon-bg-primary o-hidden mb-4">
                            <div class="card-body text-center"><i class="i-Add-User"></i>
                                <div class="content">
                                    <p class="">First Time</p>
                                    <p class="text-primary text-24 line-height-1 mb-2">80</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="card card-icon-bg card-icon-bg-primary o-hidden mb-4">
                            <div class="card-body text-center"><i class="i-Add-User"></i>
                                <div class="content">
                                    <p class="text-muted mt-2 mb-0">Duration</p>
                                    <p class="text-primary text-24 line-height-1 mb-2">00:22</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
   <h1>Latest Phone Calls</h1>
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
           
            <div class="table-responsive">
                <table class="display table table-striped table-bordered" id="zero_configuration_table" style="width:100%">
                    <thead>
                        <tr>
                            <th>TIME</th>
    <th>DATE</th>
    <th>STATUS</th>
    <th>DURATION</th>
    <th>TYPE</th>
     <th>OPTIONS</th>
                            <th>Action</th>
                                                                           
                        </tr>
                    </thead>
                    <tbody id="okok" class="menu-table-tbody" style="cursor: all-scroll;">
                   <tr>
                    <td>12:15 pm</td>
                    <td>12/15/2023</td>
                    <td>Missed</td>
                    <td>22</td>
                    <td>new</td>
                    <td>reject</td>
                    <td>option</td>
                   </tr>
                   <tr>
                    <td>12:15 pm</td>
                    <td>12/15/2023</td>
                    <td>Missed</td>
                    <td>22</td>
                    <td>new</td>
                    <td>reject</td>
                    <td>option</td>
                   </tr>
                   <tr>
                    <td>12:15 pm</td>
                    <td>12/15/2023</td>
                    <td>Missed</td>
                    <td>22</td>
                    <td>new</td>
                    <td>reject</td>
                    <td>option</td>
                   </tr>
                   <tr>
                    <td>12:15 pm</td>
                    <td>12/15/2023</td>
                    <td>Missed</td>
                    <td>22</td>
                    <td>new</td>
                    <td>reject</td>
                    <td>option</td>
                   </tr>
                   <tr>
                    <td>12:15 pm</td>
                    <td>12/15/2023</td>
                    <td>Missed</td>
                    <td>22</td>
                    <td>new</td>
                    <td>reject</td>
                    <td>option</td>
                   </tr>
                   <tr>
                    <td>12:15 pm</td>
                    <td>12/15/2023</td>
                    <td>Missed</td>
                    <td>22</td>
                    <td>new</td>
                    <td>reject</td>
                    <td>option</td>
                   </tr>
                   
                         
                    
                       
                        
                    </tbody>
                    <tfoot>
                       <tr>
                        <th>TIME</th>
                        <th>DATE</th>
                        <th>STATUS</th>
                        <th>DURATION</th>
                        <th>TYPE</th>
                         <th>OPTIONS</th>
                                                <th>Action</th>
                                             
                        </tr>
                    </tfoot>
                </table>
            </div>
        
  
</div>

                </div>
               
                <div class="tab-pane fade" id="contactBasic" role="tabpanel" aria-labelledby="contact-basic-tab">
<style>
    body{
    background-color: #f4f7f6;
    margin-top:20px;
}
.card {
    background: #fff;
    transition: .5s;
    border: 0;
    margin-bottom: 30px;
    border-radius: .55rem;
    position: relative;
    width: 100%;
    box-shadow: 0 1px 2px 0 rgb(0 0 0 / 10%);
}
.chat-app .people-list {
    width: 280px;
    position: absolute;
    left: 0;
    top: 0;
    padding: 20px;
    z-index: 7
}

.chat-app .chat {
    margin-left: 280px;
    border-left: 1px solid #eaeaea
}

.people-list {
    -moz-transition: .5s;
    -o-transition: .5s;
    -webkit-transition: .5s;
    transition: .5s
}

.people-list .chat-list li {
    padding: 10px 15px;
    list-style: none;
    border-radius: 3px
}

.people-list .chat-list li:hover {
    background: #efefef;
    cursor: pointer
}

.people-list .chat-list li.active {
    background: #efefef
}

.people-list .chat-list li .name {
    font-size: 15px
}

.people-list .chat-list img {
    width: 45px;
    border-radius: 50%
}

.people-list img {
    float: left;
    border-radius: 50%
}

.people-list .about {
    float: left;
    padding-left: 8px
}

.people-list .status {
    color: #999;
    font-size: 13px
}

.chat .chat-header {
    padding: 15px 20px;
    border-bottom: 2px solid #f4f7f6
}

.chat .chat-header img {
    float: left;
    border-radius: 40px;
    width: 40px
}

.chat .chat-header .chat-about {
    float: left;
    padding-left: 10px
}

.chat .chat-history {
    padding: 20px;
    border-bottom: 2px solid #fff
}

.chat .chat-history ul {
    padding: 0
}

.chat .chat-history ul li {
    list-style: none;
    margin-bottom: 30px
}

.chat .chat-history ul li:last-child {
    margin-bottom: 0px
}

.chat .chat-history .message-data {
    margin-bottom: 15px
}

.chat .chat-history .message-data img {
    border-radius: 40px;
    width: 40px
}

.chat .chat-history .message-data-time {
    color: #434651;
    padding-left: 6px
}

.chat .chat-history .message {
    color: #444;
    padding: 18px 20px;
    line-height: 26px;
    font-size: 16px;
    border-radius: 7px;
    display: inline-block;
    position: relative
}

.chat .chat-history .message:after {
    bottom: 100%;
    left: 7%;
    border: solid transparent;
    content: " ";
    height: 0;
    width: 0;
    position: absolute;
    pointer-events: none;
    border-bottom-color: #fff;
    border-width: 10px;
    margin-left: -10px
}

.chat .chat-history .my-message {
    background: #efefef
}

.chat .chat-history .my-message:after {
    bottom: 100%;
    left: 30px;
    border: solid transparent;
    content: " ";
    height: 0;
    width: 0;
    position: absolute;
    pointer-events: none;
    border-bottom-color: #efefef;
    border-width: 10px;
    margin-left: -10px
}

.chat .chat-history .other-message {
    background: #e8f1f3;
    text-align: right
}

.chat .chat-history .other-message:after {
    border-bottom-color: #e8f1f3;
    left: 93%
}

.chat .chat-message {
    padding: 20px
}

.online,
.offline,
.me {
    margin-right: 2px;
    font-size: 8px;
    vertical-align: middle
}

.online {
    color: #86c541
}

.offline {
    color: #e47297
}

.me {
    color: #1d8ecd
}

.float-right {
    float: right
}

.clearfix:after {
    visibility: hidden;
    display: block;
    font-size: 0;
    content: " ";
    clear: both;
    height: 0
}

@media only screen and (max-width: 767px) {
    .chat-app .people-list {
        height: 465px;
        width: 100%;
        overflow-x: auto;
        background: #fff;
        left: -400px;
        display: none
    }
    .chat-app .people-list.open {
        left: 0
    }
    .chat-app .chat {
        margin: 0
    }
    .chat-app .chat .chat-header {
        border-radius: 0.55rem 0.55rem 0 0
    }
    .chat-app .chat-history {
        height: 300px;
        overflow-x: auto
    }
}

@media only screen and (min-width: 768px) and (max-width: 992px) {
    .chat-app .chat-list {
        height: 650px;
        overflow-x: auto
    }
    .chat-app .chat-history {
        height: 600px;
        overflow-x: auto
    }
}

@media only screen and (min-device-width: 768px) and (max-device-width: 1024px) and (orientation: landscape) and (-webkit-min-device-pixel-ratio: 1) {
    .chat-app .chat-list {
        height: 480px;
        overflow-x: auto
    }
    .chat-app .chat-history {
        height: calc(100vh - 350px);
        overflow-x: auto
    }
}
</style>

                    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />

                    <div class="container">
                    <div class="row clearfix">
                        <div class="col-lg-12">
                            <div class="card chat-app">
                                <div id="plist" class="people-list">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fa fa-search"></i></span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Search...">
                                    </div>
                                    <ul class="list-unstyled chat-list mt-2 mb-0">
                                         <div class="customers">
                                        
                                            <!--<div class="customer">-->
                                            <!--    <div class="name" data-customer-id="5">Vincent Porter</div>-->
                                            <!--    <div class="status"> <i class="fa fa-circle offline"></i> left 7 mins ago </div>                                            -->
                                            <!--</div>-->
                                            @foreach($clients as $client)
                                            <div class="customer" data-customer-id="{{$client->id}}">
                                                <li class="clearfix">
                                            <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="avatar">
            <span>{{$client->ProfileName}}</span>
        </div>
                                        </li>
                                        @endforeach
                                        </div>
                                    
                                        <!--<li class="clearfix active">-->
                                        <!--    <img src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="avatar">-->
                                        <!--    <div class="about">-->
                                        <!--        <div class="name">Aiden Chavez</div>-->
                                        <!--        <div class="status"> <i class="fa fa-circle online"></i> online </div>-->
                                        <!--    </div>-->
                                        <!--</li>-->
                                        <!--<li class="clearfix">-->
                                        <!--    <img src="https://bootdey.com/img/Content/avatar/avatar3.png" alt="avatar">-->
                                        <!--    <div class="about">-->
                                        <!--        <div class="name">Mike Thomas</div>-->
                                        <!--        <div class="status"> <i class="fa fa-circle online"></i> online </div>-->
                                        <!--    </div>-->
                                        <!--</li>                                    -->
                                        <!--<li class="clearfix">-->
                                        <!--    <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="avatar">-->
                                        <!--    <div class="about">-->
                                        <!--        <div class="name">Christian Kelly</div>-->
                                        <!--        <div class="status"> <i class="fa fa-circle offline"></i> left 10 hours ago </div>-->
                                        <!--    </div>-->
                                        <!--</li>-->
                                        <!--<li class="clearfix">-->
                                        <!--    <img src="https://bootdey.com/img/Content/avatar/avatar8.png" alt="avatar">-->
                                        <!--    <div class="about">-->
                                        <!--        <div class="name">Monica Ward</div>-->
                                        <!--        <div class="status"> <i class="fa fa-circle online"></i> online </div>-->
                                        <!--    </div>-->
                                        <!--</li>-->
                                        <!--<li class="clearfix">-->
                                        <!--    <img src="https://bootdey.com/img/Content/avatar/avatar3.png" alt="avatar">-->
                                        <!--    <div class="about">-->
                                        <!--        <div class="name">Dean Henry</div>-->
                                        <!--        <div class="status"> <i class="fa fa-circle offline"></i> offline since Oct 28 </div>-->
                                        <!--    </div>-->
                                        <!--</li>-->
                                    </ul>
                                </div>
                                <div class="chat">
                                    <div class="chat-header clearfix">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <a href="javascript:void(0);" data-toggle="modal" data-target="#view_info">
                                                    <img src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="avatar">
                                                </a>
                                                <div class="chat-about">
                                                    <h6 class="m-b-0">Aiden Chavez</h6>
                                                    <small>Last seen: 2 hours ago</small>
                                                </div>
                                            </div>
                                            <!--<div class="col-lg-6 hidden-sm text-right">-->
                                            <!--    <a href="javascript:void(0);" class="btn btn-outline-secondary"><i class="fa fa-camera"></i></a>-->
                                            <!--    <a href="javascript:void(0);" class="btn btn-outline-primary"><i class="fa fa-image"></i></a>-->
                                            <!--    <a href="javascript:void(0);" class="btn btn-outline-info"><i class="fa fa-cogs"></i></a>-->
                                            <!--    <a href="javascript:void(0);" class="btn btn-outline-warning"><i class="fa fa-question"></i></a>-->
                                            <!--</div>-->
                                        </div>
                                    </div>
                                    <div class="chat-history" >
                                        <ul class="m-b-0" id="chat-box">
                                        <!--    <li class="clearfix">-->
                                        <!--        <div class="message-data text-right">-->
                                        <!--            <span class="message-data-time">10:10 AM, Today</span>-->
                                        <!--            <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="avatar">-->
                                        <!--        </div>-->
                                        <!--        <div class="message other-message float-right"> Hi Aiden, how are you? How is the project coming along? </div>-->
                                        <!--    </li>-->
                                        <!--    <li class="clearfix">-->
                                        <!--        <div class="message-data">-->
                                        <!--            <span class="message-data-time">10:12 AM, Today</span>-->
                                        <!--        </div>-->
                                        <!--        <div class="message my-message">Are we meeting today?</div>                                    -->
                                        <!--    </li>                               -->
                                        <!--    <li class="clearfix">-->
                                        <!--        <div class="message-data">-->
                                        <!--            <span class="message-data-time">10:15 AM, Today</span>-->
                                        <!--        </div>-->
                                        <!--        <div class="message my-message">Project has been already finished and I have results to show you.</div>-->
                                        <!--    </li>-->
                                        </ul>
                                    </div>
                                    <form id="message-form">
                                      @csrf
                                    <div class="chat-message clearfix">
                                        <div class="input-group mb-0">
                                            <!--<div class="input-group-prepend">-->
                                            <!--    <span class="input-group-text"><i class="fa fa-send"></i></span>-->
                                            <!--</div>-->
                                            <!--<input type="text" class="form-control" placeholder="Enter text here...">                                    -->
                                            <div class="chat-input">
                                                 <input type="hidden" name="customer_id" id="customer-id-input">
        <input type="text" name="message" class="form-control" placeholder="Type your message">
        <input type="submit">
        <!--<button type="button" class="send-message">Send</button>-->
    </div>
                                        </div>
                                    </div>
                       </form>             
    <!--                                <div class="chat">-->
    <!--<div class="chat-messages"></div>-->
    <!--<div class="chat-input">-->
    <!--    <input type="text" name="message" placeholder="Type your message">-->
    <!--    <button type="button" class="send-message">Send</button>-->
    <!--</div>-->
                                    
    <!--                            </div>-->
                            </div>
                        </div>
                    </div>
                    </div>
        
                </div>
            </div>
        </div>
    </div>




      
   
      
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script>  
  $(document).ready(function () {
    // var customerId = $('#customer').val();
    // getMessages(customerId);
  //  getMessages();
});

var intervalId;
$('.customer').click(function() {
    let customerId = $(this).data('customer-id');
  switchToCustomer(customerId); 
   




});


function switchToCustomer(customerId)
{
    if (intervalId) {
    clearInterval(intervalId);
  }
   $('#message-form').attr('data-customer-id', customerId);
  
  intervalId= setInterval(function() {
    // Check for new messages using AJAX
     var lastMessageId = $('.message:last').data('id') || 0; // get the ID of the last displayed message
     $.ajax({
        url: '/messages/new/' + customerId + '/' + lastMessageId,
        type: 'GET',
        dataType: 'json',
        success: function (response) {
            var messages = response.messages;
 var $chatBox = $('#chat-box');

    $chatBox.empty(); // clear the chat box

    messages.forEach(function (message) {
        // var messageHtml = '<div class="message">' +
        //     '<div class="message-body">' + message.body + '</div>' +
        //     '<div class="message-time">' + message.created_at + '</div>' +
        //     '</div>';
    var messageHtml=   '<li class="clearfix">' +
            '<div class="message-data text-right">' +
            '<span class="message-data-time">' + message.created_at + '</span>' +
                                                  
                '</div>' +
                '<div class="message other-message float-right">' + message.body + '</div>' +
                        '</li>';
        
            var messageHtml1=   '<li class="clearfix">' +
            '<div class="message-data">' +
            '<span class="message-data-time">' + message.created_at + '</span>' +
                                                  
                '</div>' +
                '<div class="message my-message">' + message.body + '</div>' +
                        '</li>';
        
        if(message.SmsStatus=='received')
        {
      
        $chatBox.append(messageHtml); // append the message to the chat box
        }
        
        else
        {
              $chatBox.append(messageHtml1);
        }
        
    });
        }
    });
}, 2000);
  
  
      $.ajax({
        url: '/messages/' + customerId,
        type: 'GET',
        dataType: 'json',
        success: function (response) {
            var messages = response.messages;

           var $chatBox = $('#chat-box');

    $chatBox.empty(); // clear the chat box

    messages.forEach(function (message) {
        // var messageHtml = '<div class="message">' +
        //     '<div class="message-body">' + message.body + '</div>' +
        //     '<div class="message-time">' + message.created_at + '</div>' +
        //     '</div>';
 var messageHtml=   '<li class="clearfix">' +
            '<div class="message-data text-right">' +
            '<span class="message-data-time">' + message.created_at + '</span>' +
                                                  
                '</div>' +
                '<div class="message other-message float-right">' + message.body + '</div>' +
                        '</li>';
        
            var messageHtml1=   '<li class="clearfix">' +
            '<div class="message-data">' +
            '<span class="message-data-time">' + message.created_at + '</span>' +
                                                  
                '</div>' +
                '<div class="message my-message">' + message.body + '</div>' +
                        '</li>';
        
        if(message.SmsStatus=='received')
        {
      
        $chatBox.append(messageHtml); // append the message to the chat box
        }
        
        else
        {
              $chatBox.append(messageHtml1);
        }
     
    });
    

    
    
    
    
        }
    });
    
    
    
    
}





 $('#message-form').on('submit', function(event) {
        event.preventDefault();
var customerId = $('#message-form').attr('data-customer-id');

        var $messageInput = $(this).find('input[name="message"]');
        var messageText = $messageInput.val();
         //var customerId = $('#customer').val();
        // var customerId = ;

        // Save the message to the database
        saveMessage(messageText, customerId);

        // Clear the message input field
        $messageInput.val('');
    });
    



    
 function saveMessage(messageText, customerId) {
     $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
    $.ajax({
        url: '/save-message',
        method: 'POST',
        data: {
            message: messageText,
            customer_id: customerId
        },
        success: function(data) {
            // Update the chat box with the new message
            var chatBox = $('#chat-box');
                var messageHtml=   '<li class="clearfix">' +
            '<div class="message-data text-right">' +
            '<span class="message-data-time">10:10 AM, Today</span>' +
                                                  
                '</div>' +
                '<div class="message other-message float-right">' + data.message.text + '</div>' +
                        '</li>';
            chatBox.append(messageHtml);
            // chatBox.append('<div>' + data.message.text + '</div>');
        }
    });
}
   
    
    
    
    





// function getLatestMessages() {
//     $.ajax({
//         url: '/get-messages',
//         method: 'GET',
//         success: function(data) {
//             // Update the chat box with the latest messages
//             var chatBox = $('#chat-box');
//             chatBox.empty();

//             $.each(data.messages, function(index, message) {
//                 chatBox.append('<div>' + message.text + '</div>');
//             });

//             // Update the customer information on the sidebar
//             var customerList = $('#customer-list');
//             customerList.empty();

//             $.each(data.customers, function(index, customer) {
//                 customerList.append('<li>' + customer.name + '</li>');
//             });
//         }
//     });
// }


</script>  
    
    
    @endsection