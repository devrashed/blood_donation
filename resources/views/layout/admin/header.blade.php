<div class="row">

   <div class="col-md-9">  </div>
   <div class="col-md-3"> 

   <nav id="navbar-example2" class="navbar navbar-light bg-light">
     <ul class="nav navbar-nav navbar-right">
 
  <li class="dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
        <span class="caret"></span>  </a>
        <ul class="dropdown-menu">
               <li>
                              <a href="{{ route('logout') }}"
                            onclick="event.preventDefault();
             document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                        </li> 
                </ul>
            </nav>


    </div>

</div> <!-- END THE ROW -->