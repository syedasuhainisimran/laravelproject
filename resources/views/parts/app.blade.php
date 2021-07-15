@include('parts.retry')

<body>
    <div clss="container" style="padding: 100px 0; background: #926cac;">
        <div class="row justify-content-center">
			<div class="col-md-6 col-sm-offset-3">
				<div class="panel panel-default">
					 <div class="panel-head">
                    <h4 class="text-center">Student from</h4><br />
                    <a href="{{route('student.store')}}">Show Data</a> 
                </div>
                
                <div class="panel-body">
                @if(session() ->has ('success'))
                <div class="alert alert-success"
                {{ session() ->get('success') }}                 
                > </div>

                    <form action="{{ route('student.store') }}" method="post">
                    <div class="form-group"> 
                          <label for="name"> First Name: </label>
                          <input type="text" class="form-control" id="name" placeholder="Enter First Name" name="name">
                          </div>
                    
                   <div class="form-group"> 
                            <label for="name"> Last Name: </label>
                            <input type="text" class="form-control" id="name" placeholder="Enter Last Name" name="name">
                            </div>

                    <div class="form-group"> 
                             <label for="class"> class: </label>
                             <input type="text" class="form-control" id="class" placeholder="Enter Your Class" name="class">
                             </div>

                    <div class="form-group"> 
                            <label for="section"> Your Section: </label>
                            <input type="text" class="form-control" id="section" placeholder="Enter Your Section" name="section">
                            </div>

                     <div class="form-group">
                           <label for="roll">Roll:</label>
                          <input type="text" class="form-control" id="roll" placeholder="Enter Your Roll" name="roll">
                          </div>

                         <div class="form-group">  
                        <label for="email"> Email: </label>
                        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                        </div>

                        <div class="form-group"> 
                        <label for="number"> Age: </label>
                         <input type="number" class="form-control" id="number" placeholder="Enter Age" name="number">
                         </div>

                         <div class="form-group"> 
                        <label for="description"> Description: </label>
                         <input type="number" class="form-control" name="description" id="number" placeholder="Enter other detail and documents" rows="10" cols="7">
                         </div>

                         <div class="form-group"> 
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="status" id="inlineradio1" checked || value="1" >
                            <label class="form-check-label" for="inlineradio1"> Publish</label>
                        </div>
                       

                        <div class="form-group"> 
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="status" id="inlineradio2" || value="0" >
                            <label class="form-check-label" for="inlineradio1"> Unpublish</label>
                        </div>

                         

                          <div class="form-group">
                          
                            <input type="submit" class="form-control bg-primary text-while"  value ="Submit">
                          </div>
                </div>
            </div>
            </div>

        </div> 

    </div>
    
</body>
</html>
