<div class="message-wrapper">
@if($messages->isNotEmpty())
@foreach($messages as $key => $message)
    
    @if($message->send_by == request()->get('my_id') )
    <div class="messages sent">
    @if($message->file)
 <img src="https://travelquoter.com/assets/img/agents/25.png" alt="Agent Name">
     <div class="quote">
         <p>{{ $message->message}}</p> <button class="file-download" data-id="{{ asset('storage/'.$message->file)}}">Open Quote</button>
     </div>
    @else
    <span>
        {{ $message->message}}
    </span> 
    <img src="https://travelquoter.com/assets/img/agents/25.png" alt="Agent Name">
   
    </div>
    @endif
    @else
<div class="messages received">
    @if($message->file)
 <img src="https://travelquoter.com/assets/img/agents/25.png" alt="Agent Name">
     <div class="quote">
         <p>{{ $message->message}}</p> <button class="file-download" data-id="{{ asset('storage/'.$message->file)}}">Open Quote</button>
     </div>
    @else
    <span>
        {{ $message->message}}
    </span> 
    <img src="https://travelquoter.com/assets/img/agents/25.png" alt="Agent Name">
   
    </div>
    @endif
   </div>
@endif
@endforeach
@else
 <div class="messages ">
 
    <span> You are ready to chat now </span>
 </div>
@endif

 {{-- <div class="messages received">
      <img src="https://travelquoter.com/assets/img/agents/25.png" alt="Agent Name"> <span>Hi there.</span>
  </div>
 <div class="messages sent"><span>Hi, Can you send me the quote for the details as provided. I'm looking for something cheap and enjoyable for my vacation to Nepal.</span> <img src="https://travelquoter.com/assets/img/agents/25.png" alt="Agent Name"></div>
 <div class="messages received"><img src="https://travelquoter.com/assets/img/agents/25.png" alt="Agent Name"> <span>Here You Go</span></div>
 <div class="messages received">
 
   <img src="https://travelquoter.com/assets/img/agents/25.png" alt="Agent Name">
     <div class="quote">
         <p>Beyond Travel Send a Quote</p> <button>Open Quote</button>
     </div>
 </div>
 <div class="messages sent"><span>Thanks, I'll have a look.</span> <img src="https://travelquoter.com/assets/img/agents/25.png" alt="Agent Name"></div>
 <div class="messages received"><img src="https://travelquoter.com/assets/img/agents/25.png" alt="Agent Name"> <span>Great.</span></div> --}}
