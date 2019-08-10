<header class="mb-4">
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <a class="navbar-brand" href="/">TaskList</a>
                
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#nav-bar">
            <span class="navbar-toggler-icon"></span>
        </button>
                
        <div class="collapse navbar-collapse" id="nav-bar">
            <ul class="navbar-nav mr-auto"></ul>
            <ul class="navbar-nav">
                @if(Auth::check())
                   
                    <li class="nav-item">{!! link_to_route('tasks.create','新規のタスクの追加',[],['class'=>'nav-link']) !!}</li>
            </ul>
                @else
                    <li>{!! link_to_route('signup.get','Signup',[],['class'=>'nav-link']) !!}</li>
                    <li>{!! link_to_route('login','Login',['class'=>'nav-link']) !!</li>
                @endif
        </div>
    </nav>
</header>    